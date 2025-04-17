<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $team = [
            [
                'name' => 'Miron Imabe',
                'position' => 'Ketua',
                'image' => 'images/team/Ketua.jpg',
                'description' => 'Massa Jabatan 2025/2026.'
            ],
            [
                'name' => 'Tomi Penggu',
                'position' => 'Sekertaris',
                'image' => 'team/Sek.jpg',
                'description' => 'Massa Jabatan 2025/2026.'
            ],
            [
                'name' => 'Demison W',
                'position' => 'Bendehara',
                'image' => 'team/budi.jpg',
                'description' => 'Massa Jabatan 2025/2026.'
            ],
            [
                'name' => 'Chua',
                'position' => 'Content Director',
                'image' => 'team/dewi.jpg',
                'description' => 'Massa Jabatan 2025/2026.'
            ]
        ];

        $milestones = [
            [
                'year' => '2020',
                'title' => 'Awal Mula',
                'description' => 'Portal Berita didirikan dengan visi menyajikan berita akurat dan terpercaya.'
            ],
            [
                'year' => '2021',
                'title' => 'Pengembangan Platform',
                'description' => 'Meluncurkan platform digital yang lebih modern dan user-friendly.'
            ],
            [
                'year' => '2022',
                'title' => 'Ekspansi Konten',
                'description' => 'Memperluas cakupan berita ke berbagai kategori dan topik.'
            ],
            [
                'year' => '2023',
                'title' => 'Pencapaian Pembaca',
                'description' => 'Mencapai 1 juta pembaca aktif bulanan.'
            ]
        ];

        return view('about', compact('team', 'milestones'));
    }
} 