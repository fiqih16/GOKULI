<?php

namespace App\Http\Controllers\Kuli;
use App\Http\Controllers\Controller;
use App\Models\Proyek;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

use Illuminate\Http\Request;

class CariProyekController extends Controller
{
    //
    public function index(){
        $proyeks = Proyek::all();
        $users = User::all();
        return view('kuli.cariproyek.index', ['proyeks' => $proyeks, 'users' => $users]);
    }

    public function detail(){
        $proyek = Proyek::all()->where('id', '=', request('proyek_id'));
        $mandor = User::all()->where('id', '=', request('mandor_id'));
        // dump($mandor);
        return view('kuli.cariproyek.detail', ['proyek' => $proyek, 'mandor' => $mandor]);
    }

    public function apply(){
        $proyek_id = request('proyek_id');
        $mandor = Proyek::find($proyek_id);
        $mandor_id = $mandor->user_id;
        $id = auth()->user()->id;
        $user = User::find($id);
        $user->applying = '1';
        $user->proyek_id = $proyek_id;
        $user->works_under = $mandor_id;
        $user->status_id = '1';
        $user->save();
        return Redirect('/kuli/cariproyek');
    }

    public function legowo(){
        $id = auth()->user()->id;
        $user = User::find($id);
        $user->applying = '0';
        $user->proyek_id = null;
        $user->works_under = null;
        $user->status_id = '7';
        $user->save();
        return Redirect('/kuli/cariproyek');
    }

    public function cancel(){
        $id = auth()->user()->id;
        $user = User::find($id);
        $user->applying = '0';
        $user->proyek_id = '0';
        $user->works_under = '0';
        $user->status_id = '7';
        $user->save();
        return Redirect('/kuli/cariproyek');
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
