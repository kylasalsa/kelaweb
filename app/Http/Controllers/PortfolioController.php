<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Kyla Salsabillah',
            'title' => 'Digital Creator & Web Enthusiast',
            'about' => 'Saya adalah mahasiswa Telkom University Surabaya yang tertarik di dunia digital, fotografi, dan pengembangan web. Saya suka membuat konten kreatif dan mengeksplorasi teknologi baru.',
            'skills' => ['Web Development', 'Videography', 'Photography', 'Content Creation'],
            'projects' => [
                [
                    'name' => 'Pencapaian Saya',
                    'desc' => 'Aplikasi Sistem Informasi berbasis Laravel untuk mengelola data pencapaian pribadi dan target hidup.',
                    'link' => '#'
                ],
                [
                    'name' => 'Integrasi Docker',
                    'desc' => 'Proyek DevOps sederhana menggunakan Docker dan Jenkins untuk CI/CD.',
                    'link' => '#'
                ]
            ]
        ];

        return view('portfolio', $data);
    }
}
