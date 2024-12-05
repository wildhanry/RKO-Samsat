<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SpreadsheetService {
    private $scriptUrl = 'https://script.google.com/macros/s/AKfycbxx_ATgCHfijL29NSc3Utllkr4c9CtlTiTYXBoLZWzEhtgZ-kE-W0OpwSHe3bJj6lip/exec';

    public function readData() {
        try {
            $response = Http::get($this->scriptUrl);

            // Cek apakah request berhasil (status code 200)
            if ($response->successful()) {
                // Mengembalikan data JSON yang sudah didecode
                return json_decode($response->body(), true);
            }

            // Jika response tidak sukses, kembalikan array kosong
            return [];

        } catch (\Exception $e) {
            // Jika terjadi error (misal koneksi gagal), log error dan kembalikan array kosong
            Log::error('Error reading spreadsheet data: ' . $e->getMessage());
            return [];
        }
    }

    public function writeData($data) {
        $response = Http::post($this->scriptUrl, $data);
        return $response->body();
    }
}
