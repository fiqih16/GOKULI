<?php

namespace App\Http\Controllers\Kuli;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AjukanDiriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $users = User::all();
        return view('kuli.ajukandiri.index', ['users' => $users]);
    }

    public function ready()
    {
        //
        $id = auth()->user()->id;
        $user = User::find($id);
        $user->kuli_availability = '1';
        $user->save();
        return Redirect('/kuli/ajukandiri');
    }

    public function cancel()
    {
        //
        $id = auth()->user()->id;
        $user = User::find($id);
        $user->kuli_availability = '0';
        $user->save();
        return Redirect('/kuli/ajukandiri');


    }

    public function accept(){
        $kuli_id = auth()->user()->id;
        
        $user = User::find($kuli_id);
        $user->status_id = '2';
        $user->save();

        return Redirect('/kuli/ajukandiri');
    }

    public function decline(){
        $kuli_id = auth()->user()->id;

        $user = User::find($kuli_id);
        $user->called = '0';
        $user->status_id = '5';
        $user->kuli_availability = '0';
        $user->save();

        return Redirect('/kuli/ajukandiri');
    }

    public function confirm(){
        $kuli_id = auth()->user()->id;
        $user = User::find($kuli_id);
        $user->called = '0';
        $user->status_id = '7';
        $user->kuli_availability = '0';
        $user->works_under = null;

        $user->save();

        return Redirect('/kuli/ajukandiri');
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
