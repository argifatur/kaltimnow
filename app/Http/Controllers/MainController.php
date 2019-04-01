<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visitor;
use App\Berita;
use App\Banner;
use App\Comment;
use App\Like;
use DateTime;
use DB;
date_default_timezone_set("Asia/Jakarta");

class MainController extends Controller
{

    public function __construct(){
        $date        = new DateTime();
        $this->month = $date->format('m') - 1;
        $this->year  = $date->format('Y');

        $this->beritaBaru    = Berita::orderBy('id', 'DESC')->limit(5)->get();
        $this->beritaTerakhir    = Berita::orderBy('id', 'DESC')->limit(2)->get();
        $this->beritaPopuler = Berita::orderBy('dilihat', 'DESC')->limit(5)->get();
        $this->beritaHot = Berita::orderBy('updated_at', 'DESC')->limit(2)->get();

    }


    public function index(){
        $beritas     = Berita::orderBy('id', 'DESC')->paginate(3);

        $banner     = Banner::orderBy('id', 'DESC')->limit(1)->get();

        $slides      = Berita::orderBy('id', 'DESC')->limit(9)->get();
        $beritaSaran = Berita::whereMonth("created_at", $this->month)->whereYear("created_at", $this->year)->orderBy("dilihat", "DESC")->limit(4)->get();
        
        return view('index', ['beritas' => $beritas, 'beritaBaru' => $this->beritaBaru,  'beritaHot' => $this->beritaHot, 'beritaTerakhir' => $this->beritaTerakhir, 'beritaPopuler' => $this->beritaPopuler, 'beritaSaran' => $beritaSaran,'slides' => $slides, 'banner' => $banner, 'controller' => $this]);

    }
    
    public function showBerita($path){
        $berita = Berita::where('path', $path)->first();
        $berita->dilihat = $berita->dilihat + 1;
        $berita->save();

        $visitor = new Visitor;
        $visitor->save();

        $cat = explode(", ", $berita->kategori);
        $cat = '%'.$cat[0].'%'; 
        $beritaTerkait = Berita::where('kategori', 'LIKE', $cat)->get();

        $comments = DB::table('comments')->where('comments.post_id', $berita->id)
        ->where('parent_id', '==', 0)
        ->join('users', 'users.id', '=', 'comments.user_id')
        ->orderBy('comments.id', 'DESC')->get(['comments.*', 'users.name', 'users.profile']);

        $replies  = DB::table('comments')->where('comments.post_id', $berita->id)
        ->where('parent_id', '!=', 0)
        ->join('users', 'users.id', '=', 'comments.user_id')
        ->orderBy('comments.id', 'DESC')->get(['comments.*', 'users.name', 'users.profile']);

        $likes    = Like::where('post_id', $berita->id)->get();          

        return view('berita', ['berita' => $berita, 'beritaBaru' => $this->beritaBaru, 'beritaPopuler' => $this->beritaPopuler, 'beritaTerkait' => $beritaTerkait, 'comments' => $comments, 'replies' => $replies, 'likes' => $likes, 'controller' => $this]);
    }

    public function kategoriBerita($cat){
        $cat     = '%'.$cat.'%';
        $beritas = Berita::where('kategori', 'LIKE', $cat)->get();
        return view('kategori', ['beritas' => $beritas, 'beritaBaru' => $this->beritaBaru, 'beritaPopuler' => $this->beritaPopuler, 'controller' => $this]);
    }

    public function cari(Request $request){
        $search  = '%'.$request->search.'%';
        $beritas = Berita::where('judul', 'LIKE', $search)->limit(10)->get();
        return view('cari', ['beritas' => $beritas, 'beritaBaru' => $this->beritaBaru, 'beritaPopuler' => $this->beritaPopuler, 'msg' => 'Menampilkan hasil pencarian untuk : '.$request->search, 'controller' => $this]);
    }

    /* ------------ Without Routing ------------- */

    public function kategori($cat){
      $kategoris = explode(", ", $cat);
      foreach($kategoris as $kategori){
       $kategoriA = $kategori;
       $kategori = ($kategori != $kategoris[0]) ? ", ".$kategori : $kategori; 
       echo '<a class="cat-news" href="/kategori/'.$kategoriA.'">'.$kategori.'</a>';
   }
}

public function tanggal($tgl){
    $date  = new DateTime($tgl);
    $month = array('Januari', 'Februari', 'Maret' , 'April' , 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
    $time  = $date->format('d')." ".$month[$date->format('m') - 1]." ".$date->format('Y'); 
    echo '<div class="time-news">'.$time.'</div>';
}

public function fullTime($tgl){
    $date  = new DateTime($tgl);
    $month = array('Januari', 'Februari', 'Maret' , 'April' , 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
    $time  = $date->format('d')." ".$month[$date->format('m') - 1]." ".$date->format('Y')." ".$date->format("H:i:s"); 
    echo '<div class="time-news">'.$time.'</div>';
}

public function post(){
    return view('post');
}

public function about(){
    return view('about');
}

public function daftarpost(){
    return view('daftarpost');
}

public function categori(){
    return view('categori');
}

public function kontak(){
    return view('kontak');
}


}
