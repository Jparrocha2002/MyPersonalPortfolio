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
            return redirect()->route('admin.index')->with('success', 'You Cannot Delete Your Own Account');
        }

        return $next($request);
    }
}
