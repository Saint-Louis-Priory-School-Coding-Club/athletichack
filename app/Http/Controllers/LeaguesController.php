<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use Auth;

class LeaguesController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
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
        return view('leagues.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'string|required',
            'date' => 'date|required',
        ]);

        $group = new Group([
            'name' => $request->name,
            'date' => $request->date,
            'code' => mt_rand(100000, 999999),
        ]);

        $group->save();

        Auth::user()->groups()->attach($group);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $group = Group::find($id);
        return view('leagues.show', compact('group'));
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

    public function showChat(Group $id) {
        return view('leagues.chat');
    }

    public function share(Group $league) {
        return view('leagues.share', compact('league'));
    }

    public function join() {
        return view('leagues.join');
    }

    public function joinLeague(Request $request) {
        $request->validate([
            'code' => 'integer|required',
        ]);

        $league = Group::where('code', $request->code)->get();
        Auth::user()->groups()->attach($league);

        return redirect('/');
    }
}
