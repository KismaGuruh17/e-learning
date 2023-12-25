<?php

// File: app/Http/Middleware/LogAdminUsersStore.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class LogAdminUsersStore
{
    public function handle($request, Closure $next)
    {
        // Merekam informasi log setiap kali ada akses ke rute admin/users/store
        Log::info('Request to admin/users/store', [
            'method' => $request->method(),
            'uri' => $request->path(),
            'data' => $request->all(),
        ]);

        return $next($request);
    }
}

