<?php
use Illuminate\Support\Facades\Schedule;

// Schedule the db:backup command to run daily at midnight
Schedule::command('db:backup')->mondays()->at('23:00');
