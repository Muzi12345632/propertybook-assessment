<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class user extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $userdata = auth()->user();

        return response()->json([
            "status" => true,
            "message" => "Profile data",
            "data" => $userdata
        ]);

    }


    //method to create services and pricing models/objects
}
