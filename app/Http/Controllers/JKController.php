<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisKontak;
use App\Models\Kontak;

class JKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kontak::all();

        $jenis = JenisKontak::all();
        // dd($jenis);
        return view('crud.jenis.index', compact('jenis','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.jenis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
         $messages = [

            'required' => ':attribute Isien ta!',
            'min' => ':attribute minimal ngisi :min lah',
            'max' => ':attribute maksimal :max, sampean kakean',
            'numeric' => ':attribute iku kan isine nomor, kok mbok isi hurup',
            'mimes' => ':attribute iku tipene jpg, jpeg, png, gif, dan svg',
            'size' => 'file yang diuplad maksimal :size wekmu kegeden'
        ];
        $this->validate($request,[
        'jenis_kontak' => 'required',
        'color' => 'required'
        ],$messages);

        JenisKontak::create([
            'jenis_kontak' => $request->jenis_kontak,
            'color' => $request->color
        ]);

        return redirect('/admin/jenis')->with('status','Berhasil Menambahkan Jenis KOntak');
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
