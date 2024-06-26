<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pricing;

class PricingController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pricing = pricing::all();

        return response()->json($pricing);

    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, pricing $pricing)
    {
        //
        $validated = $request->validated([
            "author" => "required",
            "title"=> "required",
            "text" => "required", 
            "image" => "required"
        ]);


        $pricing = pricing::create([
            "author"->$request->author,
            "title"->$request->title,
            "text"->$request->text,
            "image"->$request->image,
        ]);


        $pricing->user_id = auth()->user();
        auth()->user()->prices()->save($pricing);

        return response()->json([
            "status" => true,
            "message" => "Bid registered successfully",
            "data"=> $pricing
        ], 200);

    }


}
