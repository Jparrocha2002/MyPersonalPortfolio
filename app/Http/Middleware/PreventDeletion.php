<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreventDeletion
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->route()->getName() === 'admin.destroy') {
            $user = Auth::user();

            if ($user && $request->route('admin') == $user->id) {
                return redirect()->back()->with('success', 'You cannot delete your own account.');
            }
        }

        return $next($request);
    }
}
