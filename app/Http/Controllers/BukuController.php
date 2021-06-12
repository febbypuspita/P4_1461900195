<?php

namespace App\Http\Controllers;

Use App\Exports\BukuExport;
Use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
	{
		$buku = Buku::all();
		return view('buku',['buku'=> $buku]);
	}
 
}
public function export_excel()
	{
		return Excel::download(new BukuExport, 'buku.xlsx');
	}
