<?php

namespace App\Http\Controllers\Mandor;
use App\Models\Proyek;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasangProyekController extends Controller
{
    //
    public function index(){
        $proyek = Proyek::all()->where('user_id', '=', auth()->user()->id);
        return view('mandor.pasangproyek.index', ['proyek' => $proyek]);
    }

    public function terima(){
        $kuli_id = request('kuli_id');

        $user = User::find($kuli_id);
        $user->called = '1';
        $user->status_id = '2';
        $user->applying = '0';
        $user->save();

        return Redirect('/mandor/pasangproyek');
    }

    public function tolak(){
        $kuli_id = request('kuli_id');

        $id = auth()->user()->id;

        $user = User::find($kuli_id);
        $user->called = '1';
        $user->status_id = '6';
        $user->works_under = '0';
        $user->applying = '0';
        $user->save();

        return Redirect('/mandor/pasangproyek');
    }

    public function delete(){
        $id = request('proyek_id');
        DB::delete('delete from proyeks where id = '.$id);
        $users = User::all()->where('proyek_id', '=', request('proyek_id'));
        foreach($users as $user){
            $user->applying = '0';
            $user->proyek_id = '0';
            $user->status_id = '8';
            $user->works_under = null;
            $user->save();
        }
        return Redirect('/mandor/pasangproyek');
        
    }

    public function seleksi(){
        $kuli_id = request('kuli_id');
        $profil = User::all()->where('id', '=', $kuli_id);
        return view('mandor.pasangproyek.seleksi', ['profil' => $profil]);
    }

    public function detail(){
        $proyek = Proyek::all()->where('id', '=', request('proyek_id'));
        $kulis = User::all()->where('proyek_id', '=', request('proyek_id'))->where('status_id', '=', '1');

        // dump($mandor);
        return view('mandor.pasangproyek.detailproyek', ['proyek' => $proyek, 'kulis' => $kulis]);
    }

    public function new()
    {
        $id = auth()->user()->id;
        Proyek::create([
            'user_id' => $id,
            'name' => request('nama'),
            'address' => request('lokasi'),
            'detail' => request('detail'),
            'specialties_needed' => request('spek'),
        ]);

        return Redirect('/mandor/pasangproyek');

        // $id = auth()->user()->id;
        // $user = User::find($id);
        // $user->kuli_availability = '0';
        // $user->save();
        // return Redirect('/kuli/ajukandiri');
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
        return view('mandor.pasangproyek.detailproyek');
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
