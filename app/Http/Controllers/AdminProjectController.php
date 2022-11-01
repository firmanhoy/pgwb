<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Project;
class AdminProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Siswa::all('id','nisn','nama');
        // return($data);
        return view('admin.master-project', compact('data'));
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
    public function createproject($id)
    {
        $siswas = Siswa::find($id);
        return view('crud.project.create', compact('siswas'));

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // return dd($request);
        $messages = [

            'required' => ':attribute Isien ta!',
            'min' => ':attribute minimal ngisi :min lah',
            'max' => ':attribute maksimal :max, sampean kakean',
            'numeric' => ':attribute iku kan isine nomor, kok mbok isi hurup',
            'mimes' => ':attribute iku tipene jpg, jpeg, png, gif, dan svg',
            'size' => 'file yang diuplad maksimal :size wekmu kegeden'
        ];
        $this->validate($request,[

            'nama_project' => 'required|min:5|max:50',
            'deskripsi' => 'required|min:50|max:1000',
            'tanggal' => 'required'
        ],$messages);

        //insert to DB
        Project::create([
            'siswa_id' => $request->siswa_id,
            'nama_project' => $request->nama_project,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal
        ]);

        // message
        return redirect('/admin/project')->with('status', 'Berhasil Menambahkan Project');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Siswa::find($id)->project()->get();
        return view('crud.project.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = Project::find($id);
        return view('crud.project.edit', compact('data'));
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
        
        // return dd($request);
        $messages = [

            'required' => ':attribute Isien ta!',
            'min' => ':attribute minimal ngisi :min lah',
            'max' => ':attribute maksimal :max, sampean kakean',
            'numeric' => ':attribute iku kan isine nomor, kok mbok isi hurup',
            'mimes' => ':attribute iku tipene jpg, jpeg, png, gif, dan svg',
            'size' => 'file yang diuplad maksimal :size wekmu kegeden'
        ];
        $this->validate($request,[

            'nama_project' => 'required|min:5|max:50',
            'deskripsi' => 'required|min:50|max:1000',
            'tanggal' => 'required'
        ],$messages);

        $project = Project::find($id);
        $project->nama_project = $request->nama_project;
        $project->deskripsi = $request->deskripsi;
        $project->tanggal = $request->tanggal;
        $project->save();

        //insert to DB

        // message
        return redirect('/admin/project')->with('status', 'Berhasil mengedit Project');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Project::find($id)->delete();
        return redirect('admin/project')->with('status', 'Project Berhasil Dihapusr!');
    }

    public function hapus($id)
    {
        $data = Project::find($id)->delete();
        return redirect('admin/project')->with('status', 'Project Berhasil Dihapusr!');
    }
}
