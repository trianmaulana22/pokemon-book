<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ApiService
{
    /**
     * pokeapiに対してデータを取得
     *
     * @param  int  $no
     * @return array
     */
    public function fetchData($no = 0)
    {
        //menggunakan curl menggambil data dari API Pokemon
        $response = Http::get('https://pokeapi.co/api/v2/pokemon/'.$no);

        //jika data berhasil diambil maka akan di tampilkan dalam bentuk array
        if ($response->successful()) {
            return (array) $response->json();
        }

        return [];
    }
}