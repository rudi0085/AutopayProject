<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HcmMasterController extends Controller
{
    public function index(){
        return view('hcmmaster', ['title'=>'HCM Master', 'dataTabel' => [
            [
            'id' => 9006261,
            'nama' => 'Sri Budiningsih',
            'status' => 'Active',
            'grup' => 'Karpel - Tetap',
            'sub-area' => 'Ngobo',
            'unit' => 'Krani 1 Tata Usaha',
            'posisi' => 'Guru TK Kantor',
            ],
            [
            'id' => 9006262,
            'nama' => 'Wardoyo',
            'status' => 'Active',
            'grup' => 'Karpel - Tetap',
            'sub-area' => 'Ngobo',
            'unit' => 'Keamanan',
            'posisi' => 'Kepala Satuan Pengaman',
            ],
            [
            'id' => 9006263,
            'nama' => 'Suko Raharjo',
            'status' => 'Active',
            'grup' => 'Karpel - Tetap',
            'sub-area' => 'Ngobo',
            'unit' => 'Mandor Kendaraan PNP',
            'posisi' => 'Sopir Truk',
            ],
            [
            'id' => 9006264,
            'nama' => 'TURKHAMUN',
            'status' => 'Active',
            'grup' => 'Karpel - Tetap',
            'sub-area' => 'Ngobo',
            'unit' => 'KRANI 1 TATA USAHA',
            'posisi' => 'Masa Bebas Tugas',
            ],
            [
            'id' => 9006265,
            'nama' => 'TUMIN',
            'status' => 'Active',
            'grup' => 'Karpel - Tetap',
            'sub-area' => 'Ngobo',
            'unit' => 'MANDOR SADAP',
            'posisi' => 'Mandor Sadap Klepu',
            ],
            [
            'id' => 9006266,
            'nama' => 'AGUS MULYONO',
            'status' => 'Active',
            'grup' => 'Karpel - Tetap',
            'sub-area' => 'Ngobo',
            'unit' => 'KEAMANAN',
            'posisi' => 'Keamanan Klepu',
            ],
            [
            'id' => 9006267,
            'nama' => 'SUPRIYADI',
            'status' => 'Active',
            'grup' => 'Karpel - Tetap',
            'sub-area' => 'Ngobo',
            'unit' => 'KEAMANAN',
            'posisi' => 'Satuan Pengamanan',
            ],
            [
                'id' => 9006261,
                'nama' => 'Sri Budiningsih',
                'status' => 'Active',
                'grup' => 'Karpel - Tetap',
                'sub-area' => 'Ngobo',
                'unit' => 'Krani 1 Tata Usaha',
                'posisi' => 'Guru TK Kantor',
                ],
                [
                'id' => 9006262,
                'nama' => 'Wardoyo',
                'status' => 'Active',
                'grup' => 'Karpel - Tetap',
                'sub-area' => 'Ngobo',
                'unit' => 'Keamanan',
                'posisi' => 'Kepala Satuan Pengaman',
                ],
                [
                'id' => 9006263,
                'nama' => 'Suko Raharjo',
                'status' => 'Active',
                'grup' => 'Karpel - Tetap',
                'sub-area' => 'Ngobo',
                'unit' => 'Mandor Kendaraan PNP',
                'posisi' => 'Sopir Truk',
                ],
                [
                'id' => 9006264,
                'nama' => 'TURKHAMUN',
                'status' => 'Active',
                'grup' => 'Karpel - Tetap',
                'sub-area' => 'Ngobo',
                'unit' => 'KRANI 1 TATA USAHA',
                'posisi' => 'Masa Bebas Tugas',
                ],
                [
                'id' => 9006265,
                'nama' => 'TUMIN',
                'status' => 'Active',
                'grup' => 'Karpel - Tetap',
                'sub-area' => 'Ngobo',
                'unit' => 'MANDOR SADAP',
                'posisi' => 'Mandor Sadap Klepu',
                ],
                [
                'id' => 9006266,
                'nama' => 'AGUS MULYONO',
                'status' => 'Active',
                'grup' => 'Karpel - Tetap',
                'sub-area' => 'Ngobo',
                'unit' => 'KEAMANAN',
                'posisi' => 'Keamanan Klepu',
                ],
                [
                'id' => 9006267,
                'nama' => 'SUPRIYADI',
                'status' => 'Active',
                'grup' => 'Karpel - Tetap',
                'sub-area' => 'Ngobo',
                'unit' => 'KEAMANAN',
                'posisi' => 'Satuan Pengamanan',
                ],                                   
                
        ] ]);
    }
}
