<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noteroom;
use App\Note;
use Illuminate\Support\Facades\Auth;

class NoteroomController extends Controller
{
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
        // validate request
        $this->validate($request, [
            'title' => 'required'
        ]);

        $chars = "abcdefghijkmnopqrstuvwxyz023456789";
        srand((double)microtime()*1000000);
        $i = 0;
        $inviteCode = '' ;

        while ($i <= 7) {
            $num = rand() % 33;
            $tmp = substr($chars, $num, 1);
            $inviteCode = $inviteCode . $tmp;
            $i++;
        }

        // create the noteroom
        $n = Noteroom::create([
            'title' => $request->title,
            'invite_id' => $inviteCode,
        ]);

        // assicate the noteroom with the user
        $u = Auth::user();
        $u->noterooms()->attach($n->id); 

        // redirect to their binder page
        return redirect('/binder');
    }

    public function join(Request $request) {
        // validate request
        $this->validate($request, [
            'invite_id' => $request->join,
        ]);
        
        // $inviteCode = "TEST";

        // find the noteroom with this invite_id
        // TODO: make sure invite codes are unique
        $n = Noteroom::where('invite_id', $request->join)->first();

        // assicate the noteroom with the user
        $u = Auth::user();
        $u->noterooms()->attach($n->id); 

        // redirect to their binder page
        return redirect('/binder');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         // $user = App\User::with('noterooms')->findOrFail(Auth::user()->id);
         $user = Auth::user()->with('noterooms')->first();
         $noteId = $id;
         $note = Note::where('id', $id)->first();
         $existing = $note->txt;
         $roomTitle = $note->title; 
         return view('notes', compact('user', 'noteId', 'existing', 'roomTitle'));
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
