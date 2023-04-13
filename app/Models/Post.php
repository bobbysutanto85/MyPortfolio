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
        "detail" => "Aplikasi desktop dimulai dari modul penjualan untuk cetak faktur dan surat jalan, lalu faktur masuk ke penagihan dan dibuatkan DTP (Daftar Tagihan Piutang), setelah melakukan penagihan hasilnya masuk ke kasir, dan keuangan. Selain itu aplikasi ini terkoneksi juga ke bagian pajak, sehingga memudahkan bagian pajak untuk melakukan perhitungan dan ekspor ke efaktur. Setelah semua selesai menginput, maka data akan diolah oleh departemen accounting, antara lain aging, jurnal, neraca, dll. Seluruh proses ini terkoneksi secara sistem, sehingga tidak perlu menginput ulang disetiap departemen.
            <br>Berikut ini beberapa contoh form yang ada di dalam program :
            <br><img src='img/erp/1.jpg' alt='Form ERP' style='max-width:100%;height:auto;'>
            <br><img src='img/erp/2.jpg' alt='Form ERP' style='max-width:100%;height:auto;'>
            <br><img src='img/erp/3.jpg' alt='Form ERP' style='max-width:100%;height:auto;'>
            <br><img src='img/erp/4.jpg' alt='Form ERP' style='max-width:100%;height:auto;'>
            <br><img src='img/erp/5.jpg' alt='Form ERP' style='max-width:100%;height:auto;'>
            <br><img src='img/erp/6.jpg' alt='Form ERP' style='max-width:100%;height:auto;'>
            <br><img src='img/erp/7.jpg' alt='Form ERP' style='max-width:100%;height:auto;'>
            <br><img src='img/erp/8.jpg' alt='Form ERP' style='max-width:100%;height:auto;'>
            <br><img src='img/erp/9.jpg' alt='Form ERP' style='max-width:100%;height:auto;'>
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
            <br><img src='img/payrollhrd/1.jpg' alt='Form Payroll' style='max-width:100%;height:auto;'>
            <br><img src='img/payrollhrd/2.jpg' alt='Form Payroll' style='max-width:100%;height:auto;'>
            <br><img src='img/payrollhrd/3.jpg' alt='Form Payroll' style='max-width:100%;height:auto;'>
            <br><img src='img/payrollhrd/4.jpg' alt='Form Payroll' style='max-width:100%;height:auto;'>
            <br><img src='img/payrollhrd/5.jpg' alt='Form Payroll' style='max-width:100%;height:auto;'>
            "
    ],
    [
        "title" => "Sales Mobile Apps",
        "slug" => "sales-mobile-apps",
        "img" => "/img/salesapps/salesapps.jpg",
        "author" => "Dibuat menggunakan Android Studio, API Native PHP dan Microsoft SQL Server",
        "body" => "Dibuat untuk mempermudah sales dalam menginput SP secara online melalui android apps, dan terhubung langsung dengan aplikasi desktop yang ada.", 
        "detail" => "Aplikasi mobile android yang dibuat untuk mempermudah para sales dalam menginput surat pesanan, sehingga tidak perlu lagi dengan cara manual. Karena data yang masuk akan secara sistem terhubung ke aplikasi desktop yang ada.
            <br>Berikut beberapa contoh form yang ada di dalam program :
            <br><img src='img/salesapps/1.jpg' alt='Form Sales Apps' style='max-width:100%;height:auto;'>
            <br><img src='img/salesapps/2.jpg' alt='Form Sales Apps' style='max-width:100%;height:auto;'>
            <br><img src='img/salesapps/3.jpg' alt='Form Sales Apps' style='max-width:100%;height:auto;'>
            <br><img src='img/salesapps/4.jpg' alt='Form Sales Apps' style='max-width:100%;height:auto;'>
            <br><img src='img/salesapps/5.jpg' alt='Form Sales Apps' style='max-width:100%;height:auto;'>
            <br><img src='img/salesapps/6.jpg' alt='Form Sales Apps' style='max-width:100%;height:auto;'>
            <br><img src='img/salesapps/7.jpg' alt='Form Sales Apps' style='max-width:100%;height:auto;'>
            "
    ],
    [
        "title" => "Software Sparepart Motor",
        "slug" => "software-sparepart-motor",
        "img" => "/img/sparepart/sparepart.jpg",
        "author" => "Dibuat menggunakan Sybase Powerbuilder dan Microsoft SQL Server",
        "body" => "Dibuat custom sesuai dengan request dari owner untuk menghandle item yang variannya mencapai ratusan ribu, terdapat modul khusus untuk impor data barang dari file csv.", 
        "detail" => "Dibuat custom sesuai dengan request dari owner untuk menghandle item yang variannya mencapai ratusan ribu, terdapat modul khusus untuk impor data barang dari file csv. Dikarenakan data yang diimpor mencapai ratusan ribu item, maka disetiap tampilan master barang dibagi per halaman selain itu terdapat fitur search item untuk memudahkan pencarian item yang jumlahnya cukup banyak. Ditambah lagi fitur input menggunakan barcode, membuat aplikasi ini sangat mudah digunakan.
            <br>Berikut beberapa contoh form yang ada di dalam program :
            <br><img src='img/sparepart/1.jpg' alt='Form Sparepart' style='max-width:100%;height:auto;'>
            <br><img src='img/sparepart/2.jpg' alt='Form Sparepart' style='max-width:100%;height:auto;'>
            <br><img src='img/sparepart/3.jpg' alt='Form Sparepart' style='max-width:100%;height:auto;'>
            <br><img src='img/sparepart/4.jpg' alt='Form Sparepart' style='max-width:100%;height:auto;'>
            <br><img src='img/sparepart/5.jpg' alt='Form Sparepart' style='max-width:100%;height:auto;'>
            <br><img src='img/sparepart/6.jpg' alt='Form Sparepart' style='max-width:100%;height:auto;'>
            "
    ],
    [
        "title" => "Software Point of Sale (POS)",
        "slug" => "software-point-of-sale",
        "img" => "/img/pos/pos.jpg",
        "author" => "Dibuat menggunakan Sybase Powerbuilder dan Microsoft SQL Server",
        "body" => "Software yang cocok untuk digunakan pada usaha retail. Kaya akan fitur, bahkan dapat dicustom sesuai keinginan user. Tak lupa dilengkapi juga dengan fitur-fitur keamanan yang memastikan usaha anda berjalan dengan lancar.", 
        "detail" => "Software yang cocok untuk digunakan pada usaha retail. Kaya akan fitur, bahkan dapat dicustom sesuai keinginan user. Dilengkapi dengan berbagai fitur keamanan, seperti otorisasi password dimana hanya user dengan level supervisor keatas yang dapat menjalankan fitur-fitur tertentu. Terdapat juga fitur pending transaksi sehingga antrian tidak perlu menunggu lama. Fitur laporan pemasukan harian, kartu stok dan laporan penjualan POS memastikan bahwa barang yang keluar dan nominal uang yang masuk benar sesuai adanya.
            <br>Berikut beberapa contoh form yang ada di dalam program :
            <br><img src='img/pos/1.jpg' alt='Form POS' style='max-width:100%;height:auto;'>
            <br><img src='img/pos/2.jpg' alt='Form POS' style='max-width:100%;height:auto;'>
            <br><img src='img/pos/3.jpg' alt='Form POS' style='max-width:100%;height:auto;'>
            <br><img src='img/pos/4.jpg' alt='Form POS' style='max-width:100%;height:auto;'>
            <br><img src='img/pos/5.jpg' alt='Form POS' style='max-width:100%;height:auto;'>
            <br><img src='img/pos/6.jpg' alt='Form POS' style='max-width:100%;height:auto;'>
            <br><img src='img/pos/7.jpg' alt='Form POS' style='max-width:100%;height:auto;'>
            <br><img src='img/pos/8.jpg' alt='Form POS' style='max-width:100%;height:auto;'>
            <br><img src='img/pos/9.jpg' alt='Form POS' style='max-width:100%;height:auto;'>
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
