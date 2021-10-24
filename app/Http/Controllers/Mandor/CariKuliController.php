<?php

namespace App\Http\Controllers\Mandor;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class CariKuliController extends Controller
{
    //
    public function index(){
        // $kuli_available = DB::table('users')->where('kuli_availability', '=', '1')->get();
        $kuli_available = User::all()->where('kuli_availability', '=', '1')->where('role_id', '=', '2');
        return view('mandor.carikuli.index', ['kuli_available' => $kuli_available]);
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

    public function detail(){
        $kuli_id = request('kuli_id');
        $profil = User::all()->where('id', '=', $kuli_id);
        return view('mandor.carikuli.detailkuli', ['profil' => $profil]);
    }

    public function call(){
        // $kuli_id = request('kuli_id');
        // $profil = User::all()->where('id', '=', $kuli_id);
        // return view('mandor.carikuli.detailkuli', ['profil' => $profil]);
        $kuli_id = request('kuli_id');
        $user = User::find($kuli_id);
        $user->called = '1';
        $user->kuli_availability = '0';
        $user->status_id = '4';
        $user->works_under = auth()->user()->id;
        $user->save();

        return Redirect('/mandor/carikuli');
        
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
        return view('mandor.carikuli.detailkuli');
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
