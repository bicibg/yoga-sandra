<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode as Middleware;

class CheckForMaintenanceMode extends Middleware
{
    /**
     * The URIs that should be reachable while maintenance mode is enabled.
     *
     * @var array
     */
    protected $except = [
        'admin',
        'maintenance',
        'maintenance/clear-cache',
        'maintenance/clear-view',
        'maintenance/config-cache',
        'maintenance/route-cache',
        'maintenance/migrate',
        'maintenance/rollback',
        'maintenance/seed',
        'maintenance/backup',
        'maintenance/queue-work',
        'maintenance/queue-restart',
        'maintenance/up',
        'maintenance/down',
        'maintenance/give-me-cookie',
        'admin/messages',
        'stats'
    ];
}
