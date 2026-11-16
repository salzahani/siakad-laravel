<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class isAdministrator
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
        return redirect()->route('login');
    }

    if (session('user_role') == 1) {
        return $next($request);
    }

    return back()->with('error', 'Akses ditolak. Anda tidak memiliki izin.');
    }
}
