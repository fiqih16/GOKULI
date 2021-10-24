<?php

namespace App\Http\Controllers\Mandor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Status;



class KuliAndaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kuli_available = User::all()->where('works_under', '=', auth()->user()->id)->where('role_id', '=', '2');
        $statuses = Status::all();

        return view('mandor.kulianda.index', ['kulis' => $kuli_available, 'statuses' => $statuses]);
    }

    public function done(){
        $kuli_id = request('kuli_id');

        $user = User::find($kuli_id);
        $user->status_id = '3';
        $user->save();

        return Redirect('/mandor/kulianda');

    }

    public function cancel(){
        $kuli_id = request('kuli_id');

        $user = User::find($kuli_id);
        $user->status_id = '2';
        $user->save();

        return Redirect('/mandor/kulianda');
    }

    public function cancelcall(){
        $kuli_id = request('kuli_id');

        $user = User::find($kuli_id);
        $user->called = '0';
        $user->kuli_availability = '1';
        $user->status_id = '7';
        $user->works_under = null;
        $user->save();

        return Redirect('/mandor/kulianda');
    }

    public function delete(){
        $kuli_id = request('kuli_id');

        $user = User::find($kuli_id);
        $user->called = '0';
        $user->status_id = '7';
        $user->works_under = null;
        $user->save();

        return Redirect('/mandor/kulianda');
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
