<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class controller1 extends Controller
{
    public function index(){
    	return view ('index');
    }

    public function writenews(){
    	return view ('writenews');
    }

	public function tampil(){
    	$berita = DB::table('berita')->get();
    	return view ('tampil',['berita'=>$berita]);
    }

    public function simpan(Request $req){
    	DB::table('berita')->insert(
    		['id_berita' => $req->id_berita,
    		 'judul' => $req->judul,
    		 'nama_penulis' => $req->nama_penulis,
    		 'tanggal_terbit' => $req->tanggal_terbit,
    		 'jenis_berita' => $req->jenis_berita,
    		 'isi_berita' => $req->isi_berita
    		]
    	);
    	return redirect('berita/tampil');
    }
    
    public function single(){
    	return view ('single');
    }

    public function contact(){
    	return view ('contact');
    }

    public function studi(){
    	return view ('studi');
    }

    public function kejagung(){
    	return view ('kejagung');
    }

    public function survei(){
    	return view ('survei');
    }

    public function tiara(){
    	return view ('tiara');
    }

    public function brigjen(){
    	return view ('brigjen');
    }

    public function pradi(){
    	return view ('pradi');
    }

    public function polda(){
    	return view ('polda');
    }

    public function marc(){
    	return view ('marc');
    }

    public function bola(){
    	return view ('bola');
    }

    public function tan(){
    	return view ('tan');
    }

    public function siber(){
    	return view ('siber');
    }

    public function iphone(){
    	return view ('iphone');
    }

    public function smartphone(){
    	return view ('smartphone');
    }

    public function waralaba(){
    	return view ('waralaba');
    }

    public function brand(){
    	return view ('brand');
    }

    public function mendag(){
    	return view ('mendag');
    }

    public function rizky(){
    	return view ('rizky');
    }

    public function sara(){
    	return view ('sara');
    }
}
