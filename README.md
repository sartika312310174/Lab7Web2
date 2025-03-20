# PRAKTIKUM 1 sampai 3 mata kuliah WEB 2
```
Nama: Sartika Agustin
Nim: 312310174
Kelas: TI.23.A2
Matkul: Pemrograman Web 2
```
Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua
link pada navigasi header dapat menampilkan tampilan dengan layout yang sama.
# 1. Hidupkan apache dan lakukan konfigurasi di file php.ini
![image](https://github.com/user-attachments/assets/260e3093-1aa5-4cbd-9bd0-da2669acae59)
![image](https://github.com/user-attachments/assets/1ecfb3a9-c8e6-4f3b-b62a-96c416ea2244)
# 2. Install codeigniter, link: https://codeigniter.com/download
![image](https://github.com/user-attachments/assets/f429fae6-4ed2-4b3d-a817-58d9a5bfbbe9)
# 3. Menjalankan CLI
![image](https://github.com/user-attachments/assets/3e4c36ce-2320-4e80-944d-5f454bc38d6e)
# 4. Mengaktifkan mode debugging
![image](https://github.com/user-attachments/assets/c288c6da-b59a-4b82-be82-806239e11bb8)
Tampilan error akan seperti ini.
![image](https://github.com/user-attachments/assets/3258cf02-e845-4618-aad6-409c3abfef54)
# 5. Routing dan Controller
![image](https://github.com/user-attachments/assets/0bc411f5-36b5-453e-9321-6f1a16a70f9d)
![image](https://github.com/user-attachments/assets/594e5973-21f7-4ed6-832a-c1a3de28f5ef)
![image](https://github.com/user-attachments/assets/a662e4e6-86b1-4f40-977f-db00871a3459)
```
Ketika diakses akan mucul tampilan error 404 file not found, itu artinya file/page tersebut tidak
ada. Untuk dapat mengakses halaman tersebut, harus dibuat terlebih dahulu Contoller yang
sesuai dengan routing yang dibuat yaitu Contoller Page.
```
# 6. Membuat Controller
![image](https://github.com/user-attachments/assets/af186b53-cc21-403a-9be3-0c52f52455eb)
![image](https://github.com/user-attachments/assets/857b8a33-4ffd-407d-8752-ca34ef7a8863)
# 7. Auto Routing
![image](https://github.com/user-attachments/assets/9ae3e001-6fe2-4174-9217-c38111e3b2c1)
# 8. Tambah method baru
![image](https://github.com/user-attachments/assets/09a0ca42-4364-4b78-a1b0-2802e8411247)
![image](https://github.com/user-attachments/assets/54277adb-ddc9-4685-805f-ba03fbdb4efc)
# 9. Membuat View
![image](https://github.com/user-attachments/assets/656cb1c3-3119-46e4-8fc1-d6cd35b6b9db)
# 10. Ubah Method
![image](https://github.com/user-attachments/assets/b5982f36-fefe-409d-a22f-0cbb97c89c45)
# 11. Membuat layout dengan css
![image](https://github.com/user-attachments/assets/6a1881c3-f00c-4261-9df0-9ed1f70a5535)
# 12. Footer
![image](https://github.com/user-attachments/assets/ff9d07a4-48d2-41de-921a-5a01a5bcfeee)
# 13. Ubah file about.php
![image](https://github.com/user-attachments/assets/e65301b5-8847-4073-8a3e-062ce5d97c00)
# 14. Hasil
![image](https://github.com/user-attachments/assets/08fa899d-f15e-4508-989f-695f1e87d1bb)


# PRAKTIKUM 2
# 1. Membuat database
![image](https://github.com/user-attachments/assets/ed1ac92e-3bc2-412b-8b63-556a385573d1)
# 2. Membuat table
![image](https://github.com/user-attachments/assets/163c52d7-a9ba-49b7-ab1e-83f5172ef2af)
# 3. Konfigurasi koneksi database
![image](https://github.com/user-attachments/assets/cd04cc3a-8796-466f-8f0d-436a784f5b7d)
# 4. Membuat Model
![image](https://github.com/user-attachments/assets/4a4425d5-bb11-484b-bf66-4e5baf05fc4f)
# 5. Membuat Controller
![image](https://github.com/user-attachments/assets/3e52d1e8-2360-4ad5-b91f-c3da0864343e)
# 6. Membuat View
![image](https://github.com/user-attachments/assets/73109d6e-81e5-40e0-a4db-c75d916e4c93)
# 7. hasil dengan mengakses http://localhost:8080/artikel
![image](https://github.com/user-attachments/assets/76cca3d3-bdad-460b-8723-90834aae2249)
# 8. Isi tabel pada database 
![image](https://github.com/user-attachments/assets/8d71fd50-ba70-4102-a48b-e1101464ea37)
# 9.Hasilnya 
![image](https://github.com/user-attachments/assets/e09baac8-60d8-4b3d-a5de-1756ea27cc31)
# 10. Membuat tampilan detail, tambahkan fungsi baru
![image](https://github.com/user-attachments/assets/e0e95f58-da4f-4406-bdd5-b92e3cdd425b)
# 11. Menambah detail dengan membuat file baru, file detail.php
![image](https://github.com/user-attachments/assets/3b2d0dec-1d58-4812-8ba5-2071078b81cc)
# 12. Membuat Routing baru
![image](https://github.com/user-attachments/assets/9b5a6af6-b718-4316-9e29-d58c44d5c2c1)
# 13. Hasil
![image](https://github.com/user-attachments/assets/a86ebf85-e771-4830-9bf1-5e4a09b805e3)
# 14. Membuat menu admin
![image](https://github.com/user-attachments/assets/8b5fe45e-33d3-41ba-a2ef-6f6dcde5407f)
Menu admin adalah untuk proses CRUD data artikel. Buat method baru pada Controller
Artikel dengan nama admin_index()
![image](https://github.com/user-attachments/assets/439a2bc4-7c10-4829-ba93-66fa6e13d69d)
# 15. Tambahkan routing untuk menu admin
![image](https://github.com/user-attachments/assets/2d525b81-8ac1-4c31-b3b3-ce9ad61ccd50)
# 16. Hasil
![image](https://github.com/user-attachments/assets/0ae817e3-29a2-4449-8866-c1eafea333be)
# 17. Menambah data artikel
![image](https://github.com/user-attachments/assets/bcbf4f76-dbec-4217-9da4-02c68c4f60de)
# 18. Menambah form_data.php
![image](https://github.com/user-attachments/assets/9d7e9fa2-c97f-494e-a508-d232bde1413d)
# 19. Hasil, http://localhost:8080/admin/artikel/add
![image](https://github.com/user-attachments/assets/f25cec02-07ed-4209-9bc5-2e8c39b4e53e)
# 20. Mengubah Data
Tambahkan fungsi/method baru pada Controller Artikel dengan nama edit()
![image](https://github.com/user-attachments/assets/79b2fe10-7d08-4bda-9ecc-17670a89f134)
# 21. Kemudian buat view untuk form tambah dengan nama form_edit.php
![image](https://github.com/user-attachments/assets/1f84e082-e1af-4923-9523-6438cce97b18)
# 22. hasil
![image](https://github.com/user-attachments/assets/f2e178b5-72cf-4226-bab4-c1d50582d43c)

# PRAKTIKUM 3
# 1. Membuat Layout Utama 
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'My Website' ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css');?>">
</head>
<body>
    <div id="container">
        <header>
            <h1>Layout Sederhana</h1>
        </header>
        <nav>
            <a href="<?= base_url('/');?>" class="active">Home</a>
            <a href="<?= base_url('/artikel');?>">Artikel</a>
            <a href="<?= base_url('/about');?>">About</a>
            <a href="<?= base_url('/contact');?>">Kontak</a>
        </nav>
        <section id="wrapper">
            <section id="main"> 
                <?= $this->renderSection('content') ?>
        </section>
        <aside id="sidebar">
            <?= view_cell('App\\Cells\\ArtikelTerkini::render') ?>
            <div class="widget-box">
                <h3 class="title">Widget Header</h3>
                <ul>
                <li><a href="#">Widget Link</a></li>
                <li><a href="#">Widget Link</a></li>
                </ul>
            </div>
            <div class="widget-box">
            <h3 class="title">Widget Text</h3>
            <p>Vestibulum lorem elit, iaculis in nisl volutpat,
        malesuada tincidunt arcu. Proin in leo fringilla,
        vestibulum mi porta,
        faucibus felis. Integer pharetra est nunc, nec pretium
        nunc pretium ac.</p>
            </div>
        </aside>
    </section>
    <footer>
        <p>&copy; 2021 - Universitas Pelita Bangsa</p>
    </footer>
    </div>
</body>
</html>
```
# 2. Ubah app/Views/home.php agar sesuai dengan layout baru:
```
<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<h1><?= $title; ?></h1>
<hr>
<p><?= $content; ?></p>

<?= $this->endSection() ?>
```
# 3. Membuat Class View Cell
```
<?php

namespace App\Cells;

use CodeIgniter\View\Cells\Cell;
use App\Models\ArtikelModel;

class ArtikelTerkini extends Cell
{
    public function render(): string
    {
        $model = new ArtikelModel();
        $artikel = $model->orderBy('id', 'DESC')->limit(5)->findAll();
        
        return view('components/artikel_terkini', ['artikel' => $artikel]);
    }
}
```
# 4 Membuat View untuk View Cell
```
<h3>Artikel Terkini</h3>
<ul>
    <?php foreach ($artikel as $row): ?>
        <li><a href="<?= base_url('/artikel/' . $row['slug']) ?>"><?=
$row['judul'] ?></a></li>
    <?php endforeach; ?>
</ul>
```

