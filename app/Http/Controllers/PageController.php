<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $username = $request->input('username');
        $request->session()->put('username', $username);
        
        if (!$username) {
            return redirect()->route('login')->withErrors('Username tidak ditemukan.');
        }
        
        return redirect()->route('dashboard');
        
    }

    public function dashboard()
    {
        return view('dashboard',);
    }

    public function profile()
    {
        return view('profile');
    }

    public function pengelolaan()
    {
        $menuMakanan = [
            ['id' => 1, 'nama' => 'Nasi Goreng', 'harga' => 15000, 'kategori' => 'Makanan Utama', 'keterangan' => 'Nasi goreng dengan bumbu khas Indonesia', 'image' => 'sold-out.jpg'],
            ['id' => 2, 'nama' => 'Mie Goreng', 'harga' => 14000, 'kategori' => 'Makanan Utama', 'keterangan' => 'Mie goreng dengan campuran sayuran segar', 'image' => 'sold-out.jpg'],
            ['id' => 3, 'nama' => 'Ayam Bakar', 'harga' => 20000, 'kategori' => 'Makanan Utama', 'keterangan' => 'Ayam bakar dengan bumbu kecap manis', 'image' => 'Ayam-Geprek.jpg'],
            ['id' => 4, 'nama' => 'Sate Ayam', 'harga' => 18000, 'kategori' => 'Makanan Utama', 'keterangan' => 'Sate ayam dengan saus kacang lezat', 'image' => 'sold-out.jpg'],
            ['id' => 5, 'nama' => 'Bakso', 'harga' => 12000, 'kategori' => 'Makanan Utama', 'keterangan' => 'Bakso sapi dengan kuah gurih', 'image' => 'sold-out.jpg'],
            ['id' => 6, 'nama' => 'Soto Ayam', 'harga' => 15000, 'kategori' => 'Makanan Utama', 'keterangan' => 'Soto ayam dengan kuah kuning segar', 'image' => 'sold-out.jpg'],
            ['id' => 7, 'nama' => 'Nasi Uduk', 'harga' => 13000, 'kategori' => 'Makanan Utama', 'keterangan' => 'Nasi uduk dengan aroma santan khas', 'image' => 'sold-out.jpg'],
            ['id' => 8, 'nama' => 'Gado-Gado', 'harga' => 12000, 'kategori' => 'Makanan Utama', 'keterangan' => 'Salad sayuran dengan saus kacang', 'image' => 'sold-out.jpg'],
            ['id' => 9, 'nama' => 'Rendang', 'harga' => 25000, 'kategori' => 'Makanan Utama', 'keterangan' => 'Daging sapi dengan bumbu rendang khas Padang', 'image' => 'sold-out.jpg'],
            ['id' => 10, 'nama' => 'Pecel Lele', 'harga' => 15000, 'kategori' => 'Makanan Utama', 'keterangan' => 'Lele goreng dengan sambal khas', 'image' => 'sold-out.jpg'],
            ['id' => 11, 'nama' => 'Es Teh', 'harga' => 5000, 'kategori' => 'Minuman', 'keterangan' => 'Teh manis dingin yang menyegarkan', 'image' => 'sold-out.jpg'],
            ['id' => 12, 'nama' => 'Es Jeruk', 'harga' => 7000, 'kategori' => 'Minuman', 'keterangan' => 'Minuman jeruk segar dengan es', 'image' => 'sold-out.jpg'],
            ['id' => 13, 'nama' => 'Kopi Hitam', 'harga' => 8000, 'kategori' => 'Minuman', 'keterangan' => 'Kopi hitam tanpa gula', 'image' => 'sold-out.jpg'],
            ['id' => 14, 'nama' => 'Teh Manis', 'harga' => 6000, 'kategori' => 'Minuman', 'keterangan' => 'Teh manis hangat', 'image' => 'sold-out.jpg'],
            ['id' => 15, 'nama' => 'Jus Alpukat', 'harga' => 15000, 'kategori' => 'Minuman', 'keterangan' => 'Jus alpukat dengan susu kental manis', 'image' => 'sold-out.jpg'],
            ['id' => 16, 'nama' => 'Jus Mangga', 'harga' => 14000, 'kategori' => 'Minuman', 'keterangan' => 'Jus mangga segar', 'image' => 'sold-out.jpg'],
            ['id' => 17, 'nama' => 'Pisang Goreng', 'harga' => 10000, 'kategori' => 'Cemilan', 'keterangan' => 'Pisang goreng renyah', 'image' => 'sold-out.jpg'],
            ['id' => 18, 'nama' => 'Tahu Isi', 'harga' => 8000, 'kategori' => 'Cemilan', 'keterangan' => 'Tahu goreng dengan isian sayuran', 'image' => 'sold-out.jpg'],
            ['id' => 19, 'nama' => 'Tempe Mendoan', 'harga' => 9000, 'kategori' => 'Cemilan', 'keterangan' => 'Tempe goreng tipis dengan tepung', 'image' => 'sold-out.jpg'],
            ['id' => 20, 'nama' => 'Keripik Singkong', 'harga' => 7000, 'kategori' => 'Cemilan', 'keterangan' => 'Keripik singkong gurih', 'image' => 'keripik_singkong.jpg'],
        ];

        return view('pengelolaan', ['menuMakanan' => $menuMakanan]);
    }



}