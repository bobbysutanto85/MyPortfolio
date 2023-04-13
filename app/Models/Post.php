<?php

namespace App\Models;

class Post 
{
    private static $portfolios = [
    [
        "title" => "Software ERP",
        "slug" => "software-erp",
        "img" => "/img/erp/erp.jpg",
        "author" => "Dibuat menggunakan Sybase Powerbuilder and Microsoft SQL Server",
        "body" => "Dimulai dari modul penjualan, penagihan, kasir, keuangan, pajak hingga accounting. Yang mana pembuatannya disesuaikan dengan kebutuhan user, sehingga sangat user friendly dan terkoneksi antara departemen satu dengan yang lainnya.",
        "detail" => "Aplikasi desktop dimulai dari modul penjualan untuk cetak faktur dan surat jalan, lalu faktur masuk ke penagihan dan dibuatkan DTP (Daftar Tagihan Piutang), setelah melakukan penagihan hasilnya masuk ke kasir, dan keuangan. Selain itu aplikasi ini terkoneksi juga ke bagian pajak, sehingga memudahkan bagian pajak untuk melakukan perhitungan. Setelah semua selesai menginput, maka data akan diolah oleh departemen accounting, antara lain aging, jurnal, neraca, dll. Seluruh proses ini terkoneksi secara sistem, sehingga tidak perlu menginput ulang disetiap departemen.
            <br>Berikut ini beberapa contoh form yang ada di dalam program :
            <br><img src='img/erp/1.jpg' alt='Form ERP'>
            <br><img src='img/erp/2.jpg' alt='Form ERP'>
            <br><img src='img/erp/3.jpg' alt='Form ERP'>
            <br><img src='img/erp/4.jpg' alt='Form ERP'>
            <br><img src='img/erp/5.jpg' alt='Form ERP'>
            <br><img src='img/erp/6.jpg' alt='Form ERP'>
            <br><img src='img/erp/7.jpg' alt='Form ERP'>
            <br><img src='img/erp/8.jpg' alt='Form ERP'>
            <br><img src='img/erp/9.jpg' alt='Form ERP'>
            "
    ],
    [
        "title" => "Software Payroll HRD",
        "slug" => "software-payroll-hrd",
        "img" => "/img/payrollhrd/payrollhrd.jpg",
        "author" => "Dibuat menggunakan Sybase Powerbuilder dan Microsoft SQL Server",
        "body" => "Dibuat untuk mempermudah hrd dalam mengecek absensi dan menginput payroll, terdapat beberapa level dimana level dibawah tidak bisa melihat inputan level diatasnya.",
        "detail" => "Aplikasi desktop yang dibuat untuk mempermudah user hrd untuk mengecek absensi dan menginput payroll. Terdapat tingkatan user, dimana user tingkat dibawah tidak bisa melihat yang diinput oleh user dengan tingkat diatasnya sehingga memudahkan user untuk menginput data payroll secara bersamaan.
            <br>Aplikasi ini juga akan langsung men-generate file yang dibutuhkan untuk diupload ke bank yang bersangkutan, sehingga user tidak perlu melakukan langkah-langkah manual yang cukup ribet.
            <br>Berikut beberapa contoh form yang ada di dalam program :
            <br><img src='img/payrollhrd/1.jpg' alt='Form Payroll'>
            <br><img src='img/payrollhrd/2.jpg' alt='Form Payroll'>
            <br><img src='img/payrollhrd/3.jpg' alt='Form Payroll'>
            <br><img src='img/payrollhrd/4.jpg' alt='Form Payroll'>
            <br><img src='img/payrollhrd/5.jpg' alt='Form Payroll'>
            "
    ],
    [
        "title" => "Sales Mobile Apps",
        "slug" => "sales-mobile-apps",
        "img" => "/img/salesapps/salesapps.jpg",
        "author" => "Dibuat menggunakan Android Studio dan API Native PHP",
        "body" => "Dibuat untuk mempermudah sales dalam menginput SP secara online melalui android apps, dan terhubung langsung dengan aplikasi desktop modul penjualan hingga accounting.", 
        "detail" => "Aplikasi mobile android yang dibuat untuk mempermudah para sales dalam menginput surat pesanan, sehingga tidak perlu lagi dengan cara manual. Karena data yang masuk akan secara sistem terhubung ke aplikasi ERP yang ada.
            <br>Berikut beberapa contoh form yang ada di dalam program :
            <br><img src='img/salesapps/1.jpg' alt='Form Sales Apps'>
            <br><img src='img/salesapps/2.jpg' alt='Form Sales Apps'>
            <br><img src='img/salesapps/3.jpg' alt='Form Sales Apps'>
            <br><img src='img/salesapps/4.jpg' alt='Form Sales Apps'>
            <br><img src='img/salesapps/5.jpg' alt='Form Sales Apps'>
            <br><img src='img/salesapps/6.jpg' alt='Form Sales Apps'>
            <br><img src='img/salesapps/7.jpg' alt='Form Sales Apps'>
            "
    ]
    ];
    
    public static function all() {
        return collect(self::$portfolios);
    }
    
    public static function find($slug) {
        $portfolios = static::all();
        return $portfolios->firstWhere("slug", $slug);
    }
}

?>