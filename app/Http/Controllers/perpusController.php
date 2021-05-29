<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\perpustakaan;

class perpusController extends Controller
{
	public function menu(){
	return view("menu");
	}
	
	public function index (){
	$buku = DB::table('ms_buku')->get() ;
	return view ('perpus', ['ms_buku'=>$buku]);
	}
	
	public function pinjam(){
	$detail = DB::table('ms_detail_pinjam')->where('kode_buku', 'B003')->get();
	return view ('pinjam', ['ms_detail_pinjam'=>$detail]);
	}
	
    //
}
