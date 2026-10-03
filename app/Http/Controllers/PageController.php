<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        $profil = [
            'nama' => 'Mhd. Ridho Reyhan',
            'kampus' => 'Universitas Negeri Medan',
            'Program Studi' => 'Ilmu Komputer'
        ];

        $rencana_belajar = [
            'Web Development',
            'Math',
            'AI'
        ];
        
        return view('about', compact('profil', 'rencana_belajar'));
    }

    public function contact()
    {
        return view('contact');
    }
}