y<?php

namespace App\Http\Controllers;

use App\Models\Opd;
use App\Models\Pengguna;
use App\Models\Platform;
use App\Models\Project;
use App\Models\SektorPelayanan;
use App\Models\Tipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Session as FacadesSession;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $projects = Project::paginate(10)->withQueryString();
        $searchQuery = $request->input('search');
        $query = Project::query();
        $opds = DB::table('opds')->get();
        $opd_id = $request->input('opd_id');
        $platforms = DB::table('platforms')->get();
        $platform_id = $request->input('platform_id');
        $tipes = DB::table('tipes')->get();
        $tipe_id = $request->input('tipe_id');
        $sektor_pelayanans = DB::table('sektor_pelayanans')->get();
        $sektor_pelayanan_id = $request->input('sektor_pelayanan_id');
        $penggunas = DB::table('penggunas')->get();
        $pengguna_id = $request->input('pengguna_id');
        if ($searchQuery) {
            $query->where('nama_aplikasi', 'LIKE', "%$searchQuery%")
                 ->orWhere('url', 'LIKE', "%$searchQuery%");
            }
        if ($request->has('is_active')) {
            $isActive = $request->input('is_active');
            $query->where('is_active', $isActive);
        }
        if ($opd_id) {
            $query->where('opd_id',   $opd_id )->paginate(10);
        }
        if ($platform_id) {
            $query->where('platform_id',   $platform_id )->paginate(10);
        }
        if ($tipe_id) {
            $query->where('tipe_id',   $tipe_id )->paginate(10);
        }
        if ($sektor_pelayanan_id) {
            $query->where('sektor_pelayanan_id',   $sektor_pelayanan_id )->paginate(10);
        }
        if ($pengguna_id) {
            $query->where('pengguna_id',   $pengguna_id )->paginate(10);
        }
        $projects = $query->paginate(10);
        $request->flash();

        return view('project.index',compact('projects', 'opds', 'platforms', 'tipes', 'sektor_pelayanans', 'penggunas'), [
            'active' => 'project'
        ]);
    }
    public function opd()
    {
        $data = Opd::where('name', 'LIKE', '%'. request('q').'%')->paginate(20);

        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project.create', [
            'active' => 'project',
            'opds' => Opd::all(),
            'platforms' => Platform::all(),
            'tipes' => Tipe::all(),
            'sektor_pelayanans' => SektorPelayanan::all(),
            'penggunas' => Pengguna::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'opd_id'  =>  'required',
            'nama_aplikasi'  =>  'nullable',
            'platform_id'  =>  'nullable',
            'url'  =>  'nullable|url',
            'is_active' => 'required|boolean',
            'nama_konsultan'  =>  'nullable',
            'tahun_launching'  =>  'nullable|integer',
            'terakhir_dikembangkan'  =>  'nullable|integer',
            'tipe_id'  =>  'nullable',
            'sektor_pelayanan_id'  =>  'nullable',
            'spp_lainnya'  =>  'nullable',
            'deskripsi_singkat'  =>  'nullable',
            'daftar_fitur'  =>  'nullable',
            'pengguna_id'  =>  'nullable',
            'daftar_layanan'  =>  'nullable',
            'daftar_produk_layanan'  =>  'nullable',
            'penanggung_jawab'  =>  'nullable',
            'nama_kontak'  =>  'nullable',
            'nomor_kontak'  =>  'nullable'
        ]);
        if ($request->input('is_active') != 0 && $request->input('is_active') != 1) {
            return redirect()->back()->withErrors(['is_active' => 'Nilai is_active harus 1 atau 0']);
        }

        Project::create($validatedData);

        return redirect('/project')
        ->with('success', 'Projek Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $projects = Project::find($id);
        return view('project.edit',[
            'projects' => $projects,
            'active' => 'project',
            'opds' => Opd::all(),
            'platforms' => Platform::all(),
            'tipes' => Tipe::all(),
            'sektor_pelayanans' => SektorPelayanan::all(),
            'penggunas' => Pengguna::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'opd_id'  =>  'required',
            'nama_aplikasi'  =>  'nullable',
            'platform_id'  =>  'nullable',
            'url'  =>  'nullable|url',
            'is_active' => 'required|boolean',
            'nama_konsultan'  =>  'nullable',
            'tahun_launching'  =>  'nullable|integer',
            'terakhir_dikembangkan'  =>  'nullable|integer',
            'tipe_id'  =>  'nullable',
            'sektor_pelayanan_id'  =>  'nullable',
            'spp_lainnya'  =>  'nullable',
            'deskripsi_singkat'  =>  'nullable',
            'daftar_fitur'  =>  'nullable',
            'pengguna_id'  =>  'nullable',
            'daftar_layanan'  =>  'nullable',
            'daftar_produk_layanan'  =>  'nullable',
            'penanggung_jawab'  =>  'nullable',
            'nama_kontak'  =>  'nullable',
            'nomor_kontak'  =>  'nullable'
        ]);

        $projects = Project::find($id);
        $projects->update($request->all());

        return redirect('/project')
        ->with('success', 'Projek Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $projects = Project::find($id);
        $projects->delete();

        return redirect()->back()
        ->with('success', 'Data Berhasil di Hapus');
    }

    public function status($id){
        $data = DB::table('projects')->where('id',$id)->first();

        $status_sekarang = $data->is_active;

        if($status_sekarang == true){
            DB::table('projects')->where('id', $id)->update([
                'is_active'=>false
            ]);
        }else{
            DB::table('projects')->where('id', $id)->update([
                'is_active'=>true
            ]);
        }
        Session::flash('success', 'Status Berhasil di Ubah');

        return redirect('/project');
    }

    // public function search(Request $request)
    // {

    //     $searchQuery = $request->input('search');

    //     $query = Project::query();

    //     if ($searchQuery) {
    //     $query->where('nama_aplikasi', 'LIKE', "%$searchQuery%")
    //          ->orWhere('url', 'LIKE', "%$searchQuery%");
    //     }

    //     $projects = $query->paginate(10);

    //     return view('project.index', compact('projects'));

    // }
}
