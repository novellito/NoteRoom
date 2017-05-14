<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Noteroom;
use Auth;

class BinderController extends Controller
{
    /**
     * Display the home page for a user
     * 
     * @return \Illuminate\Http\Response 
     */
    public function dashboard($noteroom = null) {
        // this will check if there is a current noteroom selected
        $current = $noteroom;
        if ($current != null) {
            $current = Noteroom::where('id', $noteroom)->first();
        }

        // this pulls the relationship between a user and noterooms
        $user = User::with('noterooms')->findOrFail(Auth::user()->id);
        return view('binder', compact('user', 'current'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
