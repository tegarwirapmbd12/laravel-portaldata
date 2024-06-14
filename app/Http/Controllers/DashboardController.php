<?php

namespace App\Http\Controllers;

use App\Models\Infografi;
use App\Models\InfografiCategory;
use App\Models\Metadata;
use App\Models\Oretan;
use Illuminate\Http\Request;
use Config\Services;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('landing.dataset');
    }

    /**
     * ble the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function bps()
    {
        return view('home.bps');
    }
    public function staticTable()
    {
        return view('home.staticTable');
    }
    public function getBps()
    {
        $action = request()->query('action');

        if (empty($action)) {
            return response()->json(['error' => 'Action not set']);
        }

        $url = '';

        if ($action === 'bps') {
            $url = 'https://webapi.bps.go.id/v1/api/list/model/pressrelease/lang/ind/domain/3322/year/2022/key/2f456222b4c631bcc834296e2aad3fa3/page/' . request()->query('page');
        } elseif ($action === 'detail_bps') {
            $url = 'https://webapi.bps.go.id/v1/api/view/domain/3322/model/pressrelease/lang/ind/key/2f456222b4c631bcc834296e2aad3fa3/id/' . request()->query('id');
        } elseif ($action === 'static') {
            $url = 'https://webapi.bps.go.id/v1/api/list/model/statictable/lang/ind/domain/3322/key/2f456222b4c631bcc834296e2aad3fa3/page/' . request()->query('page');
        } elseif ($action === 'detail_static') {
            $url = 'https://webapi.bps.go.id/v1/api/view/domain/3322/model/statictable/lang/ind/key/2f456222b4c631bcc834296e2aad3fa3/id/' . request()->query('id');
        } else {
            return response()->json(['error' => 'Invalid action']);
        }

        $response = Http::get($url);
        return $response->body();
    }
    public function rpjmd()
    {
        $judul['title'] = "rpjmd";
        $judul['activeMenu'] = "rpjmd";

        $response = Http::get("https://data.semarangkab.go.id/ckan/dataset/a0334806-bc1f-4cb2-b6c5-9156c3d08c57/resource/609af295-558d-4212-89f8-a380e2b21735/download/capaian_rpjmd2022.json");

        if ($response->successful()) {
            $data['rpjmd'] = $response->json();

            return view('home.rpjmd', ['data' => $data, 'judul' => $judul]);
        } else {
            return 'Failed to fetch data';
        }
    }
    public function dashboard()
    {
        $judul['title'] = "dashboard";
        $judul['activeMenu'] = "dashboard";

        $response = Http::get("https://data.semarangkab.go.id/ckan/dataset/878247e5-4977-4be2-83f2-4d4a220b4d27/resource/796d39af-650c-478d-a5d8-e6694bd9e8e6/download/nama-nama-desa.json");

        if ($response->successful()) {
            $data['desa'] = $response->json();

        } else {
            return 'Failed to fetch data';
        }

        $response = Http::get("https://data.semarangkab.go.id/ckan/dataset/3bac0564-b9b1-4aaf-bd11-9e358620c0ce/resource/777bca32-ab4f-4eab-bfb7-5c710438996e/download/kab-semarangdalam-angka.json");

        if ($response->successful()) {
            $data['ringkasan'] = $response->json();

        } else {
            return 'Failed to fetch data';
        }

        $response = Http::get("https://data.semarangkab.go.id/ckan/dataset/f5eb48be-75a3-4d83-ab9d-de86a32a4835/resource/0fd0e770-feb2-4dca-b0b7-733288dfab19/download/kelompok-tani.json");

        if ($response->successful()) {
            $data['kelompokTani'] = $response->json();

        } else {
            return 'Failed to fetch data';
        }

        return view('home.index_home', ['data' => $data, 'judul' => $judul]);

    }

    public function lakip()
    {
        $data = [
            'title' => 'Lakip | Satu Data Kab. Semarang'
        ];

        return view('pages.lakip', $data);
    }

    public function sdg()
    {
        $judul['title'] = "sdg";
        $judul['activeMenu'] = "sdg";

        $response = Http::get("https://data.semarangkab.go.id/ckan/dataset/cea49f67-b8cd-48d0-8479-41510884a771/resource/61394c7e-d902-498d-9fa0-ea5ad0ac0ad4/download/ringkasan-sgds-tahun-2021.json");

        if ($response->successful()) {
            $data['sdg'] = $response->json();

            return view('home.sdg', ['data' => $data, 'judul' => $judul]);
        } else {
            return 'Failed to fetch data';
        }
    }

    public function lppd()
    {
        $judul['title'] = "lppd";
        $judul['activeMenu'] = "lppd";

        $response = Http::get("https://data.semarangkab.go.id/ckan/dataset/892a16b0-9fb9-495d-b2a5-f20e95316469/resource/e90fd05d-11b3-46bf-9bac-928302bd7ec7/download/lppd_2022.json");

        if ($response->successful()) {
            $data['lppd'] = $response->json();

            return view('home.lppd', ['data' => $data, 'judul' => $judul]);
        } else {
            return 'Failed to fetch data';
        }
    }

    public function spm()
    {
        $judul['title'] = "spm";
        $judul['activeMenu'] = "spm";

        $response = Http::get("https://data.semarangkab.go.id/ckan/dataset/90be6648-0a76-4eaa-82da-a4e6ff311ccb/resource/18ab432d-3be6-4cd3-8929-f29249aa38a2/download/spm_2022.json");

        if ($response->successful()) {
            $data['spm'] = $response->json();

            return view('home.spm', ['data' => $data, 'judul' => $judul]);
        } else {
            return 'Failed to fetch data';
        }
    }

    // public function pencarian()
    // {
    //     $response = Http::get('https://data.semarangkab.go.id/ckan/api/action/package_search?rows=100000');

    //     if ($response->successful()) {
    //     $data = $response->json();
    //     $titles = collect($data['result']['results'])->pluck('title');


    //     $perPage = 10;
    //     $currentPage = request()->query('page', 1);
    //     $paginatedData = new LengthAwarePaginator(
    //         $titles->forPage($currentPage, $perPage),
    //         $titles->count(), // Total items
    //         $perPage,
    //         $currentPage
    //     );

    //     return view('home.pencarian', compact('paginatedData'));
    //     } else {
    //     dd('Failed to fetch data');
    //     }
    // }

    public function metadata(Request $request)
    {


        $metadatas = Metadata::paginate(10)->withQueryString();
        $searchQuery = $request->input('search');
        $query = Metadata::query();
        $opds = DB::table('opds')->get();
        $opd_id = $request->input( 'opd_id' );
        $metadata_roles = DB::table('metadata_roles')->get();
        $metadata_role_id = $request->input('metadata_role_id');
        $datasets = DB::table('datasets')->get();
        $dataset_id = $request->input('dataset_id');
        if($searchQuery) {
            $query->where('konsep_indikator', 'LIKE', "%{$searchQuery}%")
                ->orWhere('definisi_indikator',  'LIKE', "%{$searchQuery}%")
                ->orWhere('definisi_variabel',  'LIKE', "%{$searchQuery}%")
                ->orWhere('konsep_variabel',  'LIKE', "%{$searchQuery}%");
            }
        if ($opd_id) {
            $query->where('opd_id',   $opd_id )->paginate(10);
            }
        if ($metadata_role_id) {
            $query->where('metadata_role_id', $metadata_role_id)->paginate(10);
        }
        if ($dataset_id) {
            $query->where('dataset_id', $dataset_id)->paginate(10);
        }
        $metadatas = $query->paginate(10);
        $request->flash();
        return view('home.metadata',compact('metadatas', 'opds', 'metadata_roles', 'datasets'), [
            'active' => 'metadatas'
        ]);
    }

    public function statistik_sektoral()
    {
        $response = Http::get('https://statistikkominfo.semarangkab.go.id/ajax/data/loadcontent/16?&ajaxOn=1&type=penggunaan&ajax=1');
        $metadatas = Metadata::all();
        $instansiData = [
            'instansi21' => $response['data']['instansi21'],
            'instansi53' => $response['data']['instansi53'],
            'instansi9' => $response['data']['instansi9'],
            'instansi25' => $response['data']['instansi25'],
            'instansi32' => $response['data']['instansi32'],
            // 'instansi' => $response['data']['instansi'],
            'instansi24' => $response['data']['instansi24'],
            'instansi8' => $response['data']['instansi8'],
            'instansi22' => $response['data']['instansi22'],
            'instansi54' => $response['data']['instansi54'],
            'instansi16' => $response['data']['instansi16'],
            'instansi55' => $response['data']['instansi55'],
            'instansi20' => $response['data']['instansi20'],
            'instansi4' => $response['data']['instansi4'],
            'instansi14' => $response['data']['instansi14'],
            'instansi11' => $response['data']['instansi11'],
            'instansi18' => $response['data']['instansi18'],
            'instansi3' => $response['data']['instansi3'],
            'instansi15' => $response['data']['instansi15'],

        ];

                // Lapis Pertama
                $urusanDetail = [];
                foreach ($instansiData as $instansiKey => $instansiInfo) {
                    if (isset($instansiInfo['sub'])) {
                        foreach ($instansiInfo['sub'] as $sub) {
                            foreach ($sub as $id => $detail) {
                                if (isset($detail['urusan'])) {
                                    $urusanDetail[] = $detail['urusan'];
                                }
                            }
                        }
                    }
                }
                // Dicek podo po rk urusan mbek konsep_indikator
                $matchingDetails = [];
                foreach ($urusanDetail as $urusanDetail) {
                    foreach ($metadatas as $meta) {
                        if ($urusanDetail == $meta->nama_indikator ||
                        $urusanDetail == $meta->nama_variabel) {
                            $matchingDetails[] = $urusanDetail;
                        }
                    }
                }

                // Lapis Kedua
                $urusanSubInfo = [];
                foreach ($instansiData as $instansiKey => $instansiInfo) {
                    if (isset($instansiInfo['sub'])) {
                        foreach ($instansiInfo['sub'] as $sub) {
                            foreach ($sub as $id => $detail) {
                                if (isset($detail['sub'])) {
                                    foreach ($detail['sub'] as $subDetail) {
                                        foreach ($subDetail as $subId => $subInfo) {
                                            if (isset($subInfo['urusan'])) {
                                                $urusanSubInfo[] = $subInfo['urusan'];
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
                $matchingSubInfos = [];
                foreach ($urusanSubInfo as $urusanSubInfo) {
                    foreach ($metadatas as $meta) {
                        if ($urusanSubInfo == $meta->nama_indikator ||
                        $urusanSubInfo == $meta->nama_variabel) {
                            $matchingSubInfos[] = $urusanSubInfo;
                        }
                    }
                }

                // Lapis Ketiga
                $urusanSubSubDetail = [];
                foreach ($instansiData as $instansiKey => $instansiInfo) {
                    if (isset($instansiInfo['sub'])) {
                        foreach ($instansiInfo['sub'] as $sub) {
                            foreach ($sub as $id => $detail) {
                                    if (isset($detail['sub'])) {
                                        foreach ($detail['sub'] as $subDetail){
                                            foreach ($subDetail as $subId => $subInfo) {
                                                if(isset($subInfo['sub'])) {
                                                    foreach ($subInfo['sub'] as $subSubInfo) {
                                                        foreach ($subSubInfo as $subSubId => $subSubDetail) {
                                                            if (isset($subSubDetail['urusan'])) {
                                                                $urusanSubSubDetail[] = $subSubDetail['urusan'];
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                            }
                        }
                    }
                }
                $matchingSubSubDetails = [];
                foreach ($urusanSubSubDetail as $urusanSubSubDetail) {
                    foreach ($metadatas as $meta) {
                        if ($urusanSubSubDetail == $meta->nama_indikator ||
                        $urusanSubSubDetail == $meta->nama_variabel) {
                            $matchingSubSubDetails[] = $urusanSubSubDetail;
                        }
                    }
                }

                // Lapis Keempat
                $urusanSubSubDetail = [];
                foreach ($instansiData as $instansiKey => $instansiInfo) {
                    if (isset($instansiInfo['sub'])) {
                        foreach ($instansiInfo['sub'] as $sub) {
                            foreach ($sub as $id => $detail) {
                                    if (isset($detail['sub'])) {
                                        foreach ($detail['sub'] as $subDetail){
                                            foreach ($subDetail as $subId => $subInfo) {
                                                if(isset($subInfo['sub'])) {
                                                    foreach ($subInfo['sub'] as $subSubInfo) {
                                                        foreach ($subSubInfo as $subSubId => $subSubDetail) {
                                                            if (isset($subSubDetail['sub'])) {
                                                                foreach ($subSubDetail['sub'] as $subSubSubDetail) {
                                                                    foreach ($subSubSubDetail as $subSubSubId => $subSubSubInfo){
                                                                        if (isset($subSubSubInfo['urusan'])) {
                                                                            $urusanSubSubSubInfo[] = $subSubSubInfo['urusan'];
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                            }
                        }
                    }
                }
                $matchingSubSubSubInfos = [];
                foreach ($urusanSubSubSubInfo as $urusanSubSubSubInfo) {
                    foreach ($metadatas as $meta) {
                        if ($urusanSubSubSubInfo == $meta->nama_indikator ||
                        $urusanSubSubSubInfo == $meta->nama_variabel) {
                            $matchingSubSubSubInfos[] = $urusanSubSubSubInfo;
                        }
                    }
                }


        return view('home.statistik_sektoral', ['response' => $response->json(), 'metadatas' => $metadatas, 'instansiData' => $instansiData, 'matchingDetails' => $matchingDetails, 'matchingSubInfos' => $matchingSubInfos, 'matchingSubSubDetails' => $matchingSubSubDetails, 'matchingSubSubSubInfos' => $matchingSubSubSubInfos]);
    }

    public function data_prioritas()
    {
        $response = Http::get('https://statistikkominfo.semarangkab.go.id/ajax/data/loadcontent/17?&ajaxOn=1&type=penggunaan&ajax=1');
        return view('home.data_prioritas', ['response' => $response->json()]);
    }
    public function getMetadataDetail(Request $request)
    {
        $id = $request->input('id'); // Mendapatkan ID dari permintaan
        $metadata = Metadata::where('nama_variabel', $id)
                        ->orWhere('nama_indikator', $id)
                        ->orWhere('definisi_indikator', $id)
                        ->orWhere('definisi_variabel', $id)
                        ->first();
        if ($metadata) {
            if ($metadata -> nama_variabel == null) {
                $modalContent = '
                <div class="modal-body">
                    <label class="form-label"><b>OPD :</b></label>
                    <p class="form-control-static">' . $metadata->opd->name . '</p>
                </div>
                <div class="modal-body">
                    <label class="form-label"><b>KATEGORI :</b></label>
                    <p class="form-control-static">' . $metadata->metadata_role->name . '</p>
                </div>
                <div class="modal-body">
                    <label class="form-label"><b>NAMA INDIKATOR :</b></label>
                    <p class="form-control-static">' . $metadata->nama_indikator . '</p>
                </div>
                <div class="modal-body">
                    <label class="form-label"><b>KONSEP :</b></label>
                    <p class="form-control-static">' . $metadata->konsep_indikator . '</p>
                </div>
                <div class="modal-body">
                    <label class="form-label"><b>DEFINISI :</b></label>
                    <p class="form-control-static">' . $metadata->definisi_indikator . '</p>
                </div>
                <div class="modal-body">
                    <label class="form-label"><b>INTERPRETASI :</b></label>
                    <p class="form-control-static">' . $metadata->interpretasi . '</p>
                </div>
                <div class="modal-body">
                    <label class="form-label"><b>RUMUS PERHITUNGAN :</b></label>
                    <p class="form-control-static">' . $metadata->rumus_perhitungan . '</p>
                </div>
                <div class="modal-body">
                    <label class="form-label"><b>UKURAN :</b></label>
                    <p class="form-control-static">' . $metadata->ukuran . '</p>
                </div>
                <div class="modal-body">
                    <label class="form-label"><b>SATUAN :</b></label>
                    <p class="form-control-static">' . $metadata->satuan . '</p>
                </div>
                <div class="modal-body">
                    <label class="form-label"><b>KLASIFIKASI PENYAJIAN :</b></label>
                    <p class="form-control-static">' . $metadata->klasifikasi_penyajian . '</p>
                </div>
                <div class="modal-body">
                    <label class="form-label"><b>INDIKATOR KOMPOSIT:</b></label>
                    <p class="form-control-static">' . $metadata->indikator_komposit . '</p>
                </div>
                <div class="modal-body">
                    <label class="form-label"><b>PUBLIKASI KETERSEDIAAN :</b></label>
                    <p class="form-control-static">' . $metadata->publikasi_ketersediaan . '</p>
                </div>
                <div class="modal-body">
                    <label class="form-label"><b>NAMA INDIKATOR PEMBANGUN :</b></label>
                    <p class="form-control-static">' . $metadata->nama_indpembangun . '</p>
                </div>
                <div class="modal-body">
                    <label class="form-label"><b>KEGIATAN PENGHASIL :</b></label>
                    <p class="form-control-static">' . $metadata->kegiatan_penghasil . '</p>
                </div>
                <div class="modal-body">
                    <label class="form-label"><b>KODE KEGIATAN :</b></label>
                    <p class="form-control-static">' . $metadata->kode_kegiatan . '</p>
                </div>
                <div class="modal-body">
                    <label class="form-label"><b>NAMA VARIABEL PEMBANGUN :</b></label>
                    <p class="form-control-static">' . $metadata->nama_varpembangun . '</p>
                </div>
                <div class="modal-body">
                    <label class="form-label"><b>LEVEL ESTIMASI :</b></label>
                    <p class="form-control-static">' . $metadata->level_estimasi . '</p>
                </div>
                <div class="modal-body">
                    <label class="form-label"><b>DAPAT DIAKSES UMUM :</b></label>
                    <p class="form-control-static">' . $metadata->dapat_diakses_umum_indikator . '</p>
                </div>

            ';
            }
            else {
                $modalContent = '
                <div class="modal-body">
                    <label class="form-label"><b>OPD :</b></label>
                    <p class="form-control-static">' . $metadata->opd->name . '</p>
                </div>
                <div class="modal-body">
                    <label class="form-label"><b>KATEGORI :</b></label>
                    <p class="form-control-static">' . $metadata->metadata_role->name . '</p>
                </div>
                <div class="modal-body">
                    <label class="form-label"><b>NAMA VARIABEL :</b></label>
                    <p class="form-control-static">' . $metadata->nama_variabel . '</p>
                </div>
                <div class="modal-body">
                    <label class="form-label"><b>ALIAS :</b></label>
                    <p class="form-control-static">' . $metadata->alias . '</p>
                </div>
                <div class="modal-body">
                    <label class="form-label"><b>KONSEP :</b></label>
                    <p class="form-control-static">' . $metadata->konsep_variabel . '</p>
                </div>
                <div class="modal-body">
                    <label class="form-label"><b>DEFINISI :</b></label>
                    <p class="form-control-static">' . $metadata->definisi_indikator . '</p>
                </div>
                <div class="modal-body">
                    <label class="form-label"><b>REFERENSI PEMILIHAN :</b></label>
                    <p class="form-control-static">' . $metadata->referensi_pemilihan . '</p>
                </div>
                <div class="modal-body">
                    <label class="form-label"><b>REFERENSI WAKTU :</b></label>
                    <p class="form-control-static">' . $metadata->referensi_waktu . '</p>
                </div>
                <div class="modal-body">
                    <label class="form-label"><b>TIPE DATA :</b></label>
                    <p class="form-control-static">' . $metadata->tipe_data . '</p>
                </div>
                <div class="modal-body">
                    <label class="form-label"><b>KLASIFIKASI ISIAN :</b></label>
                    <p class="form-control-static">' . $metadata->klasifikasi_isian . '</p>
                </div>
                <div class="modal-body">
                    <label class="form-label"><b>ATURAN VALIDASI :</b></label>
                    <p class="form-control-static">' . $metadata->aturan_validasi . '</p>
                </div>
                <div class="modal-body">
                    <label class="form-label"><b>KALIMAT PERTANYAAN :</b></label>
                    <p class="form-control-static">' . $metadata->kalimat_pertanyaan . '</p>
                </div>
                <div class="modal-body">
                    <label class="form-label"><b>DAPAT DIAKSES UMUM :</b></label>
                    <p class="form-control-static">' . $metadata->dapat_diakses_umum_variabel . '</p>
                </div>
            ';
            }
            return response($modalContent);
        } else {
            return response('Data tidak ditemukan', 404);
        }
    }
    public function infografis()
    {
        $infografis = Infografi::all();
        $photos = Infografi::all('image');
        $infografi_categories = InfografiCategory::all();
        return view('home.infografi', ['infografis' => $infografis,'photos' => $photos, 'infografi_categories' => $infografi_categories]);
    }
    public function oretan(Request $request)
    {
        // $infografis = Infografi::all();
        // $infografi_categories = InfografiCategory::all();
        // return view('oretan', ['infografis' => $infografis, 'infografi_categories' => $infografi_categories]);
        return view ('oretan');
    }
    public function getGrafikData($id)
    {
        $oretan = Oretan::find($id);
        return response()->json($oretan);
    }

}
