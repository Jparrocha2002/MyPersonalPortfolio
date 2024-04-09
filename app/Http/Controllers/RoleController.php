<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function destroy($id)
    {
        $role = User::findOrFail($id);

        if ($role->name === 'admin') {
            abort(403, 'you cannot delete your account');
        }

        // Perform deletion logic for non-admin roles
        $role->delete();

        return response()->json(['message' => 'Role deleted successfully.']);
    }
}
