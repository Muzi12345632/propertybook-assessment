<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\services;

class services extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $services = services::all();

        return response()->json($services);

    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, services $services)
    {
        //
        $validated = $request->validated([
            "author" => "required",
            "title"=> "required",
            "text" => "required", 
            "image" => "image|nullable"
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validated['image'] = $imagePath;
        }

        $services = services::create([
            "author"->$request->author,
            "title"->$request->title,
            "text"->$request->text,
            "image"->$request->image,
        ])

        $services->user_id = auth()->user();
        auth()->user()->services()->save($services);

        return response()->json([
            "status" => true,
            "message" => "Bid registered successfully",
            "data"=> $services
        ], 200);

    }


}
