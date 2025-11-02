<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller{

public function dashboard(){
return view('dashboard');
}
public function profile()
    {
        return view('profile');
    }
public function buatlaporan(){
return view('buatlaporan');
}
public function home(){
return view('home');
}
public function kotaktinjauan(){
return view('kotaktinjauan');
}
public function laporansaya(){
return view('laporansaya');
}
public function notifikasi(){
return view('notifikasi');
}

}
