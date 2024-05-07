<?php

namespace App\Http\Middleware;

use App\Enums\Status;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class candidate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (! Auth::user()->hasRole('candidate')) {
            return redirect('/');
        } elseif (auth()->user()->status != Status::ACTIVE->value
             && auth()->user()->status != Status::APPROVED->value) {
            return redirect('not-verified');
        }

        return $next($request);
    }
}
