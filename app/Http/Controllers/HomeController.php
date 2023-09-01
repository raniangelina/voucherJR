<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view('merchant.dashboard');
    }
    function loginmerchant(){
        return view('merchant.login');
    }
    function profilmerchant(){
        return view('merchant.profil');
    }
    function checkvoc(){
        return view('merchant.checkvoc');
    }
    function pakaivoc(){
        return view('merchant.pakaivoc');
    }
    function loginadminjr(){
        return view('adminjr.login');
    }
    function dashadminjr(){
        return view('adminjr.dash');
    }
    function profileadminjr(){
        return view('adminjr.profile');
    }
    function daftarmerch(){
        return view('adminjr.merch.index');
    }
    function tambahmerch(){
        return view('adminjr.merch.buat');
    }
    function editmerch(){
        return view('adminjr.merch.edit');
    }
    function klaimvoc(){
        return view('adminjr.voc.klaim');
    }
    function vocberhasil(){
        return view('adminjr.voc.berhasil');
    }
    function vocgagal(){
        return view('adminjr.voc.gagal');
    }
}
