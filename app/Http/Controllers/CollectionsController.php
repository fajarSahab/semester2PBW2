<?php

namespace App\Http\Controllers;

use App\DataTables\CollectionsDataTable;
use App\Models\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use App\DataTables\UsersDataTable;

class CollectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $koleksi = Collection::all();
    //     return view("koleksi.daftarKoleksi", compact('koleksi'));
    // }

    public function index(CollectionsDataTable $dataTable)
    {
        return $dataTable->render('koleksi.daftarKoleksi');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("koleksi.registrasi");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'      => ['required', 'string', 'max:255', 'unique:collections'],
            'jenis'     => ['required', 'gt:0'],
            'jumlahAwal'    => ['required', 'gt:0']
        ],
        [
            'nama.unique'   => 'Nama koleksi tersebut sudah ada'
        ]);

        $koleksi = [
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'jumlahAwal' => $request->jumlahAwal,
            'jumlahSisa' => $request->jumlahAwal,
            'jumlahKeluar' => 0,
        ];

        DB::table('collections')->insert($koleksi);
        return view('koleksi.daftarKoleksi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Collection $collection)
    {
        return view('koleksi.infoKoleksi', compact('collection'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editKoleksi(Collection $collection)
    {
        return view("koleksi.editKoleksi", compact('collection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'jenis'     => ['required', 'gt:0'],
            'jumlahSisa'     => ['required', 'gt:0'],
            'jumlahKeluar'     => ['required', 'gt:0'],
        ]);

        $affected = DB::table('collections')
        ->where('id', $request->id)
        ->update([
            'jenis' => $request->jenis,
            'jumlahSisa' => $request->jumlahSisa,
            'jumlahKeluar' => $request->jumlahKeluar,
        ]);

        return view('koleksi.daftarKoleksi');
    }
 
    //Fajar Arrohman Nur Sahab 6706223015
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Collection $collections)
    {
        //
    }

    public function getAllCollections()
    {
        $collections = DB::table('collections')
            ->select(
                'id as id',
                'nama as judul',

                DB::raw('
                (CASE 
                WHEN jenis="1" THEN "Buku"
                WHEN jenis="2" THEN "Majalah"
                WHEN jenis="3" THEN "Cakram Digital"
                ) AS jenis
            '),
                'jumlahAwal as jumlahAwal',
                'jumlahSisa as jumlahSisa', 
                'jumlahKeluar as jumlahKeluar',
            )
            ->orderBy('nama', 'asc')
            ->get();

        return Datatables::of($collections)
            ->addColumn('action', function ($collection) {
                $html = '
            <a href="' . url('infoKoleksi') . "/" . $collection->id . '">
                <i class="fas fa-edit"></i>
            </a>';
                return $html;
            })
            ->make(true);
    }
}
