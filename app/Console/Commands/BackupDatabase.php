<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class BackupDatabase extends Command
{
    protected $signature = 'db:backup';
    protected $description = 'Backup the database';

    public function handle()
    {
        // Generate a timestamped filename
        $timestamp = Carbon::now()->format('Ymd_His');
        $backupPath = storage_path("backups/db_backup_{$timestamp}.sql");

        // Get database configuration
        $dbUser = config('database.connections.mysql.username');
        $dbPassword = config('database.connections.mysql.password');
        $dbName = config('database.connections.mysql.database');
        $dbHost = config('database.connections.mysql.host', '127.0.0.1');
        $dbPort = config('database.connections.mysql.port', '3306');

        // Create the mysqldump command
        $command = [
            'mysqldump',
            '--user=' . $dbUser,
            '--password=' . $dbPassword,
            '--host=' . $dbHost,
            '--port=' . $dbPort,
            $dbName,
            '--result-file=' . $backupPath,
            '--single-transaction',
            '--quick',
            '--lock-tables=false',
        ];

        $process = new Process($command);

        try {
            $process->mustRun();

            // Optional: Store in Laravel storage (useful for cloud backups)
            if (Storage::exists("backups") === false) {
                Storage::makeDirectory("backups");
            }
            Storage::put("backups/db_backup_{$timestamp}.sql", file_get_contents($backupPath));

            $this->info("Database backup successful: {$backupPath}");
        } catch (ProcessFailedException $exception) {
            $this->error("Database backup failed: " . $exception->getMessage());
        }
    }
}
