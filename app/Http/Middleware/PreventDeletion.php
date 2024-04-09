<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreventDeletion
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if ($user && $request->route('admin') == $user->id) {
            abort(403, 'You cannot delete your own account.');
        }

        return $next($request);
    }
}
