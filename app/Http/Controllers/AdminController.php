<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Berita;
use App\Banner;
use App\Kategori;
use App\Tag;
use App\Banner;
use App\User; 
use App\Comment;
use Auth;
use DateTime;
date_default_timezone_set("Asia/Jakarta");

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    // public function index()
    // {
    //     $berita = DB::table('beritas')->paginate(1);

    //     return view('admin.daftar', ['beritas' => $beritas]);
    // }

    /* ------------ Post ------------- */

    public function tambah(){
        return view('admin.tambah');
    } 

    public function tambah_kat() {
        return view('admin.tambah_kat');
    } 

    public function tambah_artik(){
        return view('admin.tambah_artik');
    }
    public function tambah_tag(){
        return view('admin.tambah_tag');
    }
    public function tambah_banner(){
        return view('admin.tambah_banner');
    }



    public function addPost(Request $request){
                $kategori = DB::table('kategori')->get();


        $this->validate($request, [
            'kategori' => 'required'
        ]);

        $path     = str_replace("?", "", $request->judul);
        $path     = explode(" ", $path);
        $path     = implode("-", $path);
        $kategori = implode(", ", $request->kategori);

        $berita = new Berita;
        $berita->judul    = $request->judul;
        $berita->tag    = $request->tag;
        $berita->kategori = $kategori;
        $berita->isi      = $request->isi;
        $berita->path     = $path;

        if($request->file('foto') != "") {
            $file         = $request->file('foto');
            $fileName     = $file->getClientOriginalName();
            $dt           = new DateTime();
            $time         = $dt->format('Y_m_d_H_i_s_');
            $fileNameNew  = $time.$fileName;
            $request->file('foto')->move("public/img/", $fileNameNew);

            $berita->foto = $fileNameNew;
        } 

        $berita->save();
        return redirect("/daftar")->with('msg', 'Berhasil Menambahkan Artikel!');
    }

    public function addBanner(Request $request){
        $banner = DB::table('banner')->get();

        $path     = str_replace("?", "", $request->judul);
        $path     = explode(" ", $path);
        $path     = implode("-", $path);

        $banner = new Banner;
        $banner->judul    = $request->judul;
        $banner->path     = $path;

        if($request->file('foto') != "") {
            $file         = $request->file('foto');
            $fileName     = $file->getClientOriginalName();
            $dt           = new DateTime();
            $time         = $dt->format('Y_m_d_H_i_s_');
            $fileNameNew  = $time.$fileName;
            $request->file('foto')->move("public/img/", $fileNameNew);

            $banner->foto = $fileNameNew;
        } 

        $banner->save();
        return redirect("/banner")->with('msg', 'Berhasil Menambahkan Banner!');

    }

    public function addKat(Request $request){
        $kategori = new Kategori;
        $kategori->judul_kategori    = $request->judul_kategori;
        $kategori->save();
        return redirect("/daftar_kat")->with('msg', 'Berhasil Menambahkan Kategori!');
    }  

    public function addTag(Request $request){
        $tag = new Tag;
        $tag->title    = $request->title;
        $tag->save();
        return redirect("/daftar_tag")->with('msg', 'Berhasil Menambahkan Tag!');
    }



    public function editPost(Request $request, $id){

        $this->validate($request, [
            'kategori' => 'required'
        ]);

        $path     = str_replace("?", "", $request->judul);
        $path     = explode(" ", $path);
        $path     = implode("-", $path);
        $kategori = implode(", ", $request->kategori);

        $berita = Berita::find($id);
        $berita->judul    = $request->judul;
        $berita->kategori = $kategori;
        $berita->isi      = $request->isi;
        $berita->path     = $path;

        if($request->file('foto') != "") {
            $file         = $request->file('foto');
            $fileName     = $file->getClientOriginalName();
            $dt           = new DateTime();
            $time         = $dt->format('Y_m_d_H_i_s_');
            $fileNameNew  = $time.$fileName;
            $request->file('foto')->move("img/", $fileNameNew);

            $berita->foto = $fileNameNew;
        } else $berita->foto = $berita->foto;

        $berita->save();
        return redirect("/daftar")->with('msg', 'Berhasil Mengubah Artikel!');
    }

    public function editBanner(Request $request, $id){


        $path     = str_replace("?", "", $request->judul);
        $path     = explode(" ", $path);
        $path     = implode("-", $path);

        $banner = Banner::find($id);
        $banner->judul    = $request->judul;
        $banner->path     = $path;

        if($request->file('foto') != "") {
            $file         = $request->file('foto');
            $fileName     = $file->getClientOriginalName();
            $dt           = new DateTime();
            $time         = $dt->format('Y_m_d_H_i_s_');
            $fileNameNew  = $time.$fileName;
            $request->file('foto')->move("public/img/", $fileNameNew);

            $banner->foto = $fileNameNew;
        } else $banner->foto = $banner->foto;

        $banner->save();
        return redirect("/banner")->with('msg', 'Berhasil Mengubah Banner!');

    }

    public function editkat(Request $request, $id){


        $kategori = Kategori::find($id);
        $kategori->judul_kategori = $request->judul_kategori;


        $kategori->save();
        return redirect("/daftar_kat")->with('msg', 'Berhasil Mengubah Kategori!');
    }   

    public function edittag(Request $request, $id){


        $tag = Tag::find($id);
        $tag->title = $request->title;


        $tag->save();
        return redirect("/daftar_tag")->with('msg', 'Berhasil Mengubah Tag!');
    }   

   

    public function daftar(){
        $beritas = Berita::orderBy('id', 'DESC')->get();
        $beritas = Berita::paginate(3);
        return view('admin.daftar', ['beritas' => $beritas, 'controller' => $this]);
    }    

  

    public function daftar_kat(){
        $kategori = DB::table('kategori')->get();
        $kategori = Kategori::paginate(3);


// mengirim data pegawai ke view tagsd
        return view('admin.daftar_kat',['kategori' => $kategori]);
    }    

    public function banner(){
        $banner = DB::table('banner')->get();

// mengirim data pegawai ke view tag
        return view('admin.banner',['banner' => $banner]);
    }     

    public function daftar_tag(){
// mengambil data dari table tag
        $tag = DB::table('tag')->get();
        $tag = Tag::paginate(3);


// mengirim data pegawai ke view tag
        return view('admin.daftar_tag',['tag' => $tag]);
    }    

    public function dasbor(){
        return view('admin.dasbor');
    }

    public function edit($id){
        $berita = Berita::find($id);
        return view('admin.edit', ['berita' => $berita]);
    } 

    public function edit_banner($id){
        $banner = Banner::find($id);
        return view('admin.edit_banner', ['banner' => $banner]);
    }

    public function edit_kat($id){
        $kategori = Kategori::find($id);
        return view('admin.edit_kat', ['kategori' => $kategori]);
    }   

    public function edit_tag($id){
        $tag = Tag::find($id);
        return view('admin.edit_tag', ['tag' => $tag]);
    }





    public function hapus($id){
        $berita = Berita::find($id);
        $berita->delete();
        return redirect('/daftar')->with('msg', 'Berhasil Menghapus Artikel!');
    } 

    public function hapus_banner($id){
        $banner = Banner::find($id);
        if ($banner != null) {
            $banner->delete();
            return redirect()->route('banner')->with(['msg'=> 'Berhasil Menghapus Kategori']);
        }
    }

    public function hapus_kat($id){
        $kategori = Kategori::find($id);

        if ($kategori != null) {
            $kategori->delete();
            return redirect()->route('daftar_kat')->with(['msg'=> 'Berhasil Menghapus Kategori']);
        }
// $kategori->delete();
    }  

    public function hapus_tag($id){
        $tag = Tag::find($id);

        if ($tag != null) {
            $tag->delete();
            return redirect()->route('daftar_tag')->with(['msg'=> 'Berhasil Menghapus Tag']);
        }
    }  

    public function hapusUser($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/user')->with('msg', 'Berhasil Menghapus user.');
    }

    public function komentar(){
        $comments = DB::table('comments')->join('beritas', 'beritas.id', '=', 'comments.post_id')
        ->join('users', 'comments.user_id', '=', 'users.id')
        ->orderBy('comments.id', 'DESC')->get(['comments.*', 'beritas.judul', 'beritas.path', 'users.name']);
        return view('admin.komentar', ['comments' => $comments, 'controller' => $this]);
    }




    public function user(){
        $users = User::orderBy('name', 'ASC')->get();
        return view('admin.user', ['users' => $users]);
    }

    /* ------------ Without Routing ------------- */




    public function kategori($cat){
        $kategori = explode(", ", $cat);
        foreach($kategori as $kategori){
            $kategoriA = $kategori;
            $kategori = ($kategori != $kategori[0]) ? " ".$kategori : $kategori; 
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


    public function logout () {
//logout user
        auth()->logout();
// redirect to homepage
        return redirect('/home');
    }
}
