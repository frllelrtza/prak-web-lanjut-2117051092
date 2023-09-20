<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index() 
    {
    
        return view('welcome_message');
    }
    public function profile($nama = "Farrel", $kelas = "CD", $npm = "2117051092"){
        
        
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
        ];

        return view('profile', $data);
    }
    public function create(){
        return view('create_user');
    }
    public function store(){

        $data = [
            'nama' => $this->request->getVar('nama'),
            'kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
        ];
            
            return view('profile',$data);
    }
    }
