<?php
class User_model {
    private $name = 'Daffabot';

    public function getUser() {
        return $this->name;
    }

    public function getQuotes() {
        // URL endpoint untuk API quotable
        $apiUrl = 'http://api.quotable.io/quotes/random';
    
        // Melakukan permintaan API menggunakan file_get_contents
        $response = file_get_contents($apiUrl);
    
        // Mengecek apakah respons berhasil diambil
        if ($response === FALSE) {
            // Mengembalikan pesan kesalahan jika permintaan gagal
            return 'Terjadi kesalahan saat mengambil kutipan.';
        }
    
        // Mengonversi respons JSON menjadi array asosiatif
        $data = json_decode($response, true);
    
        // Mengecek apakah ada data yang valid
        if (!isset($data[0]['content'])) {
            return 'Kutipan tidak ditemukan.';
        }
    
        // Mengambil kutipan dari data array
        $theQuote = $data[0]['content'];
    
        // Mengembalikan kutipan
        return $theQuote;
    }
}