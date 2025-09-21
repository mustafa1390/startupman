<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Role\PermissionRole;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class ItemController extends Controller
{

public function updateStatus(Request $request, $id)
{



    
    $request->validate([
        'status' => 'required|in:active,inactive',
    ]);

    $item =  PermissionRole::where([ ['role_id' , $request->role_id],['permission_accesse_id' , $request->id],   ])->first();

    $item->status = $request->status;
    $item->save();

    return response()->json([
        'message' => 'Status updated successfully',
        'status' => $item->status,
    ]);
}
}
