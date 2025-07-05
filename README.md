# 🛒 Toko Online - CodeIgniter 4

Aplikasi ini merupakan sistem toko online sederhana berbasis **CodeIgniter 4**, dengan fitur lengkap mulai dari katalog produk, transaksi pembelian, sistem diskon harian, hingga dashboard monitoring melalui webservice.

---

## 📚 Daftar Isi

- [📦 Fitur Utama](#-fitur-utama)
- [💻 Teknologi yang Digunakan](#-teknologi-yang-digunakan)
- [📁 Struktur Proyek](#-struktur-proyek)
- [🚀 Instalasi & Setup](#-instalasi--setup)
- [🔐 Login Default](#-login-default)
- [🌐 Webservice API (Untuk Dashboard)](#-webservice-api-untuk-dashboard)
- [📊 Dashboard Viewer](#-dashboard-viewer)
- [🧑‍💻 Developer](#-developer)

---

## 📦 Fitur Utama

### 🔍 Katalog Produk

- Daftar produk dengan gambar
- Fitur pencarian

### 🛒 Keranjang Belanja

- Tambah dan hapus produk
- Update jumlah produk
- Hitung otomatis total harga

### 🏷️ Diskon Harian

- Diskon otomatis berdasarkan tanggal login user
- Diskon ditampilkan di halaman utama
- Diskon diterapkan saat menambahkan ke keranjang dan saat menyimpan transaksi

### 💳 Transaksi

- Proses checkout
- Input alamat dan ongkir
- Riwayat transaksi lengkap

### 🛠️ Admin Panel

- CRUD Produk
- CRUD Diskon (validasi unik per tanggal)
- Export Data ke PDF

### 🔐 Autentikasi

- Login pengguna
- Role-based session

### 🌐 Dashboard Webservice

- Tampilkan data pembelian via endpoint API
- Jumlah item otomatis dihitung
- Diakses dari frontend dashboard terpisah

---

## 💻 Teknologi yang Digunakan

- PHP 8.2+
- CodeIgniter 4.6
- Composer
- MySQL
- Bootstrap 5 + NiceAdmin template
- GuzzleHTTP (untuk cURL API)
- DomPDF (export PDF)
- External Library Cart (session-based cart)

---

## 📁 Struktur Proyek

```
├── app
│   ├── Controllers
│   │   ├── ApiController.php
│   │   ├── AuthController.php
│   │   ├── BaseController.php
│   │   ├── DiskonController.php
│   │   ├── Home.php
│   │   ├── KategoriController.php
│   │   ├── ProdukController.php
│   │   └── TransaksiController.php
│   ├── Models
│   │   ├── DiskonModel.php
│   │   ├── KategoriModel.php
│   │   ├── ProductModel.php
│   │   ├── TransactionModel.php
│   │   ├── TransactionDetailModel.php
│   │   └── UserModel.php
│   └── Views
│       ├── layout.php
│       ├── layout_clear.php
│       ├── v_checkout.php
│       ├── v_contact.php
│       ├── v_diskon.php
│       ├── v_home.php
│       ├── v_kategori.php
│       ├── v_keranjang.php
│       ├── v_login.php
│       ├── v_produk.php
│       ├── v_produkPDF.php
│       ├── v_profile.php
│       └── welcome_message.php
├── public
│   ├── img/
│   ├── NiceAdmin/
│   ├── dashboard-toko/
│   └── index.php
```

---

## 🚀 Instalasi & Setup

### 1. Clone Repository

```bash
git clone https://github.com/username/repo-toko-ci4.git
cd repo-toko-ci4
```

### 2. Install Dependensi

```bash
composer install
```

### 3. Konfigurasi `.env`

Salin file `.env` dan sesuaikan konfigurasi database:

```dotenv
database.default.hostname = localhost
database.default.database = db_ci4
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
```

### 4. Migrasi Database

```bash
php spark migrate
```

### 5. Seeder Data

```bash
php spark db:seed ProductSeeder
php spark db:seed UserSeeder
php spark db:seed DiskonSeeder
```

### 6. Jalankan Server

```bash
php spark serve
```

### 7. Buka di Browser

[http://localhost:8080](http://localhost:8080)

---

## 🔐 Login Default

| Role  | Username  | Password |
| ----- | --------- | -------- |
| Admin | jamalia14 | 1234567  |
| User  | ghalimah  | 1234567  |

---

## 🌐 Webservice API (Untuk Dashboard)

Endpoint API disediakan untuk dashboard eksternal yang menampilkan data transaksi beserta detail pembeliannya.

- **Method**: GET
- **URL**: `/api`
- **Response**:

```json
{
  "status": { "code": 200, "description": "OK" },
  "results": [
    {
      "id": 1,
      "username": "aprilns",
      "alamat": "Jl. Imam Bonjol",
      "total_harga": 2678000,
      "ongkir": 9000,
      "status": 1,
      "created_at": "2025-06-25 08:23:00",
      "details": [
        {
          "product_id": 1,
          "jumlah": 2,
          "diskon": 200000,
          "subtotal_harga": 20398000
        }
      ]
    }
  ]
}
```

---

## 📊 Dashboard Viewer

Terdapat di:

```
public/dashboard-toko/index.php
```

### Fitur:

- Menampilkan transaksi dari endpoint API
- Jumlah item ditotal otomatis dari data detail
- Ditampilkan dalam tabel responsif menggunakan Bootstrap

---

## 🧑‍💻 Developer

**Nama**: Silvio Christian, Joe  
**NIM**: A11.2023.14864  
**Kelas**: A11.4419  
**Mata Kuliah**: Pemrograman Web Lanjut  
**Dosen Pengampu**: Bu Aprilyani Nur Safitri, M.Kom  
**Tugas**: Ujian Akhir Semester Genap
