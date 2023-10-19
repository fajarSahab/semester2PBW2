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
            'namaKoleksi' => ['required', 'string', 'max:100', 'unique:collections'],
            'jenisKoleksi' => ['required', 'gt:0',],
            'jumlahKoleksi' => ['required', 'gt:0'],
        ], [
            'namaKoleksi.unique' => 'Nama koleksi tersebut sudah ada'
        ]);

        $collection = [
            'namaKoleksi' => $request->namaKoleksi,
            'jenisKoleksi' => $request->jenisKoleksi,
            'jumlahKoleksi' => $request->jumlahKoleksi,
            'jumlahSisa' => $request->jumlahKoleksi,
            'jumlahKeluar' => 0

        ];

        DB::table('collections')->insert($collection);
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
    public function edit(Collection $collections)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Collection $collections)
    {
        //
    }

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
