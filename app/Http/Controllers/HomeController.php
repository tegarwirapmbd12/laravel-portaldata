<?php

namespace App\Http\Controllers;

use App\Models\Infografi;
use App\Models\InfografiCategory;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use mysqli;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $infografis = Infografi::all();
        $infografi_categories = InfografiCategory::all();
        $visitorModel = new Visitor();
        $visitorCount = $visitorModel->CountVisitor();
        $visitor_ip = request()->ip();

// Menambahkan data pengunjung baru ke dalam database
        if(isset($visitor_ip)) {
            Visitor::create([
                'ip_address' => $visitor_ip
            ]);
        }
        $data = [
            'title' => 'Home | Satu Data Kab. Semarang',
            'visitor' => $visitorCount,
        ];

        $response = Http::get('https://statistikkominfo.semarangkab.go.id/ajax/data/loadcontent/16?&ajaxOn=1&type=penggunaan&ajax=1');
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
        return view('landing.home', compact('data', 'infografis' , 'infografi_categories', 'instansiData', 'urusanDetail'), [
            'response' => $response->json(),
            'active' => 'home'
        ]);
    }

    /**
     * Show the form for creating a new resource.
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
}
