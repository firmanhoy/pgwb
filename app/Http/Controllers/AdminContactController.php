<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Kontak;
use App\Models\JenisKontak;

class AdminContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Siswa::all();
        return view('admin.master-contact', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create',[
            'title' => 'Create Contact',
            'contentTitle' => 'Halaman Create Contact'
        ]);
    }

        public function createcontact($id)
    {
        $jenis = JenisKontak::all();
        $data = Siswa::find($id);
        // dd($data);
        return view('crud.contact.create',compact('jenis','data'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa = Siswa::find($request->siswa_id);

       // dd($s);

        if ($request->jenis_id == 'Pilih jenis kontak') {
            return redirect('/admin/contact/'.$request->siswa_id.'/create')->with('status', 'Mohon Pilih jenis Kontak isi ulang semua');
        }
        $messages = [

            'required' => ':attribute Isien ta!',
            'min' => ':attribute minimal ngisi :min lah',
            'max' => ':attribute maksimal :max, sampean kakean',
            'numeric' => ':attribute iku kan isine nomor, kok mbok isi hurup',
            'mimes' => ':attribute iku tipene jpg, jpeg, png, gif, dan svg',
            'size' => 'file yang diuplad maksimal :size wekmu kegeden'
        ];
        $this->validate($request,[
            'jenis_id' => 'required',
            'deskripsi' => 'required',
            'link' => 'required'
        ],$messages);

        Kontak::create([
            'siswa_id' => $request->siswa_id,
            'jenis_id' => $request->jenis_id,
            'siswa_id' => $request->siswa_id,
            'deskripsi' => $request->deskripsi,
            'link' => $request->link
        ]);
         return redirect('/admin/contact')-> with('status', 'Kontak '.$siswa->nama.' Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $data = Siswa::find($id);
        $kontaks = Siswa::find($id)->kontak()->get();

        // $kontaks = $data->kontak;
        return view('crud.contact.show',compact('data','kontaks'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenis = JenisKontak::all();
        $kontaks = Kontak::find($id);
        $data = Siswa::find($kontaks->siswa_id);
        dd($kontaks);
        return view('crud.contact.edit', compact('kontaks','data','jenis'));
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
        $data = Contact::find($id)->delete();
    }
    public function hapus($id)
    {
        Kontak::find($id)->delete();
        return redirect()->intended('/admin/contact')->with('status', 'Kontak Berhasil dihapus');
    }
}
