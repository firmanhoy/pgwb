<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use File;

class AdminStudentController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Siswa::all();
        return view('admin.master-student', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.student.create',[
            'title' => 'Create Student',
            'contentTitle' => 'Halaman Create Student'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [

            'required' => ':attribute Isien ta!',
            'min' => ':attribute minimal ngisi :min lah',
            'max' => ':attribute maksimal :max, sampean kakean',
            'numeric' => ':attribute iku kan isine nomor, kok mbok isi hurup',
            'mimes' => ':attribute iku tipene jpg, jpeg, png, gif, dan svg',
            'size' => 'file yang diuplad maksimal :size wekmu kegeden'
        ];
        $this->validate($request,[
            'nama' => 'required|min:5|max:20',
            'nisn' => 'required|min:10',
            'jk' => 'required',
            'email' => 'required',
            'alamat' => 'required|min:5',
            'about' => 'required|min:5',
            'foto' => 'required|mimes:jpg,jpeg,png,gif,svg'

        ],$messages);

        // ambil informasi file yang diupload
        $file = $request->file('foto');

        // rename+ambil nama foto
        $namaFile = time()."_".$file->getClientOriginalName();

        // upload
        $tujuanUpload = './assets/img';
        $file->move($tujuanUpload, $namaFile);

        //insert to DB
        Siswa::create([
            'nama' => $request->nama,
            'nisn' => $request->nisn,
            'jk' => $request->jk,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'about' => $request->about,
            'foto' => $namaFile
            ]);
        return redirect('/admin/student')->with('status', 'Data Siswa Berhasil Dibuat!');
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
        $kontaks = $data->kontak;
        $projects = SIswa::find($id)->project()->get();
        return view('crud.student.show',compact('data','kontaks','projects'));
        // dd($kontak);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $data = Siswa::find($id);
        return view('crud.student.edit', compact('data'));

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
        $messages = [

            'required' => ':attribute Isien ta!',
            'min' => ':attribute minimal ngisi :min lah',
            'max' => ':attribute maksimal :max, sampean kakean',
            'numeric' => ':attribute iku kan isine nomor, kok mbok isi hurup',
            'mimes' => ':attribute iku tipene jpg, jpeg, png, gif, dan svg',
            'size' => 'file yang diuplad maksimal :size wekmu kegeden'
        ];
        $this->validate($request,[
            'nama' => 'required|min:5|max:20',
            'nisn' => 'required| min:10',
            'jk' => 'required',
            'email' => 'required',
            'alamat' => 'required|min:5',
            'about' => 'required|min:5',
            'foto' => 'mimes:jpg,jpeg,png,gif,svg'

        ],$messages);
        if ($request->foto != '') {
            // Dengan Ganti Foto

            // Menghapus Foto
            $old = Siswa::find($id);
            file::delete('.assets/img/'.$old->foto);
            // ambil informasi file yang diupload
            $file = $request->file('foto');

            // rename+ambil nama foto
            $namaFile = time()."_".$file->getClientOriginalName();

            // upload
            $tujuanUpload = './assets/img';
            $file->move($tujuanUpload, $namaFile);

            // Menyimpan ke database
            $siswa = Siswa::find($id);
            $siswa->nama = $request->nama;
            $siswa->nisn = $request->nisn;
            $siswa->jk = $request->jk;
            $siswa->email = $request->email;
            $siswa->alamat = $request->alamat;
            $siswa->about = $request->about;
            $siswa->foto = $namaFile;
            $siswa->save();
            return redirect('/admin/student');

        }else{
            // Tanpa Ganti Foto
            $siswa = Siswa::find($id);
            $siswa->nama = $request->nama;
            $siswa->nisn = $request->nisn;
            $siswa->jk = $request->jk;
            $siswa->email = $request->email;
            $siswa->alamat = $request->alamat;
            $siswa->about = $request->about;
            $siswa->save();
            return redirect('/admin/student')->with('status', 'Data Siswa Berhasil Diupdate!');
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Siswa::find($id)->delete();
        return redirect('admin/student');
    }
    public function hapus($id){
        $data = Siswa::find($id)->delete();
        return redirect('admin/student')->with('status', 'Data Siswa Berhasil Dihapusr!');
    }
}
