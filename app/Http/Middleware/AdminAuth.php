<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuth
{
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('admin_id')) {
            return redirect('/admin/login')->with('error', 'You must be logged in.');
        }

        return $next($request);
    }
}


