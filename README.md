# Pemesanan Tiket Pesawat PHP

Ini adalah contoh implementasi pemesanan tiket pesawat menggunakan bahasa pemrograman PHP dan penyimpanan data menggunakan format JSON.

## Fitur

- Pemesanan tiket pesawat dengan form yang sederhana.
- Menyimpan data pemesanan tiket pesawat ke dalam file JSON.
- Menampilkan daftar pemesanan tiket pesawat dari file JSON.
- Mengedit dan menghapus data pemesanan tiket pesawat yang sudah ada.

## Instalasi

Untuk menggunakan contoh ini, Anda dapat mengikuti langkah-langkah berikut:

1. Clone repository ini ke dalam direktori lokal Anda.

```bash
git clone https://github.com/nama-pengguna/repositori.git
```

2. Buka file index.php di browser Anda.

```javascript
http://localhost/repositori/index.php
```

## Penggunaan

1. Buka halaman pemesanan tiket pesawat di browser Anda.
2. Isi formulir pemesanan tiket sesuai dengan data yang diminta, seperti nama, kelas, tanggal keberangkatan, dan kota tujuan.
3. Klik tombol "Pesan Tiket" untuk menyimpan data pemesanan tiket.
4. Daftar pemesanan tiket akan muncul di halaman yang sama.
5. Untuk mengedit atau menghapus data pemesanan tiket yang sudah ada, klik tautan "Edit" atau "Delete" yang tersedia di setiap baris tabel.

## Struktur Direktori

- `index.php`: Halaman utama untuk menampilkan daftar pemesanan tiket dan form untuk membuat pemesanan tiket baru.
- `data.php`: Berisi kode untuk membaca data pemesanan tiket dari file JSON dan menampilkannya dalam tabel di halaman utama.
- `form.php` : Berisi kode untuk menampilkan form pemesanan tiket.
- `add.php`: Berisi kode untuk memproses data yang dikirimkan dari form dan menyimpannya ke dalam file JSON.
- `edit.php`: Berisi kode untuk menampilkan form edit pemesanan tiket dan mengupdate data di file JSON.
- `update.php`: Berisi kode untuk memproses data yang dikirimkan dari form edit dan mengupdate data di file JSON.
- `delete.php`: Berisi kode untuk menghapus data pemesanan tiket dari file JSON.

## Lisensi

Contoh ini dilisensikan di bawah lisensi MIT. Silakan lihat berkas LICENSE untuk detail lebih lanjut