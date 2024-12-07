<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Middleware untuk halaman yang dapat di akses setelah login

        // Jika user sudah login, maka dapat mengakses halaman yang diakses setelah login
        if(session("sessionID")) {
            return $next($request);
        }
        
        //Jika tidak, user kembali ke halaman yang saat ini sedang diakses
        return back();
    }
}
