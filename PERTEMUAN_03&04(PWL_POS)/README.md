## JOBSHEET 4 MODEL dan ELOQUENT ORM

Nama : Muhammad Rayhan Gibran <br>
Mata Kuliah : Pemrograman Web Lanjut (PWL) <br>
Program Studi : D4 – Teknik Informatika / D4 – Sistem Informasi Bisnis <br>
Semester : 4 (empat) / 6 (enam)  <br>
Pertemuan ke- : 4 (Empat)


### Praktikum 1 - $fillable

1. Buka file model dengan nama UserModel.php dan tambahkan $fillable seperti gambar di bawah ini
   ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/a2531d3b-7b84-4379-bc1e-9dfa5c7e864e)

2. Buka file controller dengan nama UserController.php dan ubah script untuk menambahkan data baru seperti gambar di bawah in
   ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/f88a0998-79a7-417c-8908-1a40a472636d)

3. Simpan kode program Langkah 1 dan 2, dan jalankan perintah web server. Kemudian jalankan link localhost/user pada browser
   dan amati apa yang terjadi <br>
   ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/c3aeeadb-5d71-4670-ba36-db82e3fa7274)

4. Ubah file model UserModel.php seperti pada gambar di bawah ini pada bagian
   ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/c93e352f-f491-4488-9aeb-aec1b5c73e46)

5. Ubah kembali file controller UserController.php seperti pada gambar di bawah hanya bagian array pada $data
   ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/1a30e0a5-c532-4feb-acb1-8e1bb9542d6c)

6. Simpan kode program Langkah 4 dan 5. Kemudian jalankan pada browser dan amati apa yang terjadi
   ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/829d69e1-042b-42b0-a632-b453fd7c8926)

7. Laporkan hasil Praktikum-1 ini dan commit perubahan pada git

-   Yang terjadi adalah error karena field password tidak dimasukkan di array fillable maka ketika melakukan create data menggunakan model field password dianggap tidak ada.

<br/> <br/>

### Praktikum 2.1 - Retrieving Single Models

1. Buka file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
   ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/515c214a-5d25-4771-aca3-be1e3e187a3d)

2. Buka file view dengan nama user.blade.php dan ubah script seperti gambar di bawah ini <br/>
   ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/eb8bacd5-8329-4671-9fb6-d948ecac474a)

3. Simpan kode program Langkah 1 dan 2. Kemudian jalankan pada browser dan amati
   apa yang terjadi dan beri penjelasan dalam laporan

-   Yang terjadi user dengan id 1 ditampilkan <br/>
    ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/09df578d-0220-4480-8922-f4dff8c73ad1)

4. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar
   di bawah ini
   ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/369a7290-34ad-4379-b586-53998d74399b)

5. Simpan kode program Langkah 4. Kemudian jalankan pada browser dan amati apa yang
   terjadi dan beri penjelasan dalam laporan

-   Menampikan user dengan level id 1 pertama

6. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar
   di bawah ini
   ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/b747adfc-7238-482e-9e7d-8f060f1d023d)

7. Simpan kode program Langkah 6. Kemudian jalankan pada browser dan amati apa yang
   terjadi dan beri penjelasan dalam laporan

-   Menampikan user dengan level id 1 pertama <br/>
    ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/5babb914-5cdf-4fdf-8275-5199695ce8c7)

8. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar
   di bawah ini
   ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/b4f6fd27-3657-4b2a-ba7b-7873f47dd3db)

9. Simpan kode program Langkah 8. Kemudian pada browser dan amati apa yang terjadi
   dan beri penjelasan dalam laporan

-   Script diatas menampilkan user dengan id 1 yang hanya mengampbil kolom username, nama <br/>
    ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/d07f2c8a-2655-4e7f-8615-ae713a259935)

10. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar
    di bawah ini
    ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/65dcb73b-e742-4ca5-b367-f4442e50272c)

11. Simpan kode program Langkah 10. Kemudian jalankan pada browser dan amati apa
    yang terjadi dan beri penjelasan dalam lapora
    
-   Yang terjadi browser menampikan halaman 404 karena tidak menemukan user dengan id 20 <br/>
    ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/e57bf894-657a-4fbd-9742-eadd0699ab3d)

12. Laporkan hasil Praktikum-2.1 ini dan commit perubahan pada git.

### Praktikum 2.2 - Not Found Exceptions
1.	Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/d1b8be97-91ea-4875-afda-872d2082c92d)
2.	Simpan kode program Langkah 1. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/bfa47616-58fe-45b4-91c4-9f65cae9d358) <br>
Kode diatas adalah perintah untuk mencari use dengan id 1
3. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
   ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/e78bd130-5b98-407b-83b8-b9055088832d)
4.	Simpan kode program Langkah 3. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
Jawaban
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/6e8ed558-f94e-4a1b-8988-210a6dcbaffc)

5. Simpan kode program Langkah 3. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
Jawaban
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/1cf5322d-af96-442c-8218-773efce3a03a) <br>
Yang terjadi adalah karena user dengan username ‘manager9’ tidak ditemukan maka browser mengembalikan halaman ‘NOT FOUND’

### Praktikum 2.3 - Retreiving Aggregrates
1.	Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
   ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/3afcf463-1091-45ff-b0e4-9cc010fa41ac)

2. Simpan kode program Langkah 1. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
Jawaban
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/ec4a9605-4a7a-4dd4-a89c-93d757b65362)
Yang terjadi adalah browser mengembalikan banyak (qty) user yang memiliki level_id 2

3.	Buat agar jumlah script pada langkah 1 bisa tampil pada halaman browser, sebagai contoh bisa lihat gambar di bawah ini dan ubah script pada file view supaya bisa muncul datanya
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/1bf0b2cc-bba7-4860-9907-9daa2ceeac39)
Jawaban
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/ba472762-2580-4ecc-8f9b-cd6faca31ad7)

4.	Laporkan hasil Praktikum-2.3 ini dan commit perubahan pada git.
Jawaban
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/cba927fb-0f0d-40f5-99bf-b03194531f0e)

### Praktikum 2.4 – Retreiving or Creating Models
1. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/cfe05157-53ec-487e-b4f6-a1394ad3274a)

2. Ubah kembali file view dengan nama user.blade.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/b3526598-1968-40a9-84f4-303da674b86b)

3. Simpan kode program Langkah 1 dan 2. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
Jawaban
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/a7dc3f23-c65b-4376-a2ca-8d648f6ecd70)

4. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/5cfaa4a2-364f-4fbe-92c9-86c2a4c7c4f3)

5.	Simpan kode program Langkah 4. Kemudian jalankan pada browser dan amati apa yang terjadi dan cek juga pada phpMyAdmin pada tabel m_user serta beri penjelasan dalam laporan
Jawaban
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/a8799f14-d4f8-4c54-bed2-4242c595701d)
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/8c742c44-704f-44af-8576-61d779f0e6d8)
Yang terjadi program menambahkan data sesuai Langkah yang sebelumnya

6. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/cf30d3e3-5628-48f0-92a3-359bc39ffa92)

7. Simpan kode program Langkah 6. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
Jawaban
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/730c2e7d-ee4c-4a30-bac3-4b64bff9268a)
Yang terjadi program tidak menambahkan data karena username dan nama diatas sudah ada di database

8. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/23c086cb-91b6-481d-9756-20272d783791)

9. Simpan kode program Langkah 8. Kemudian jalankan pada browser dan amati apa yang terjadi dan cek juga pada phpMyAdmin pada tabel m_user serta beri penjelasan dalam laporan
Jawaban
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/2ed48367-2d03-4486-828f-902b80a27543)
Yang terjadi program membuat satu record data dengan data seperti diatas tetapi tidak di simpan pada db  karena di database tidak ada data seperti itu.

10. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/5115a3c4-ba25-41d8-a373-ff8c95e52332)

11. Simpan kode program Langkah 9. Kemudian jalankan pada browser dan amati apa yang terjadi dan cek juga pada phpMyAdmin pada tabel m_user serta beri penjelasan dalam laporan
Jawaban
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/b0fcaeb3-2345-41be-9647-ccecb221a012)
Yang terjadi record data disimpan pada database karena data ditas belum ada di database hal ini ditandai dengan adanya id baru.

12. Laporkan hasil Praktikum-2.4 ini dan commit perubahan pada git.
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/3806b998-82c1-4075-a5de-69897a829a59)

### Praktikum 2.5 – Attribute Changes
1.	Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/fa26f9d9-22ed-486b-a790-93a618ea00be)

2. Simpan kode program Langkah 1. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
Jawaban
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/07dad9c3-fa9f-4928-b073-30eedb9d4eed)
Yang terjadi adalah program mengembalikan nilai false karena model sudah di simpan maka ketika dicek menggunakan isDirty() untuk mengecek apakah data telah diubah program mengembalikan nilai karena memang belum diubah.

3. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/46e6821e-e422-44ff-973e-b70517ff97c8)

4.  Simpan kode program Langkah 3. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/d56bf664-09f8-45dd-8370-ad0c02b00ffe)

5. Laporkan hasil Praktikum-2.5 ini dan commit perubahan pada git.
Jawaban
Yang terjadi program mengembalkan nilai true karena model sudah diubah, jika menggunakan helper wasChanged() walaupun sudah di save() jika data memang berbeda dengan yang aslinya maka akan terdeteksi.

### Praktikum 2.6 – Create, Read, Update, Delete (CRUD)
1. Buka file view pada user.blade.php dan buat scritpnya menjadi seperti di bawah ini
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/806ef4e9-2f23-4aa7-aefd-cc0ebf058beb)

2. Buka file controller pada UserController.php dan buat scriptnya untuk read menjadi seperti di bawah ini
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/ffe11e81-fd8f-48cb-bad6-51a866dcae58)

3. Simpan kode program Langkah 1 dan 2. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/239ab3c8-ef52-435a-bc1a-3f48847dd713)
Yang terjadi browser mengembalikan view dengan data sesuai perintah.

4. Langkah berikutnya membuat create atau tambah data user dengan cara bikin file baru pada view dengan nama user_tambah.blade.php dan buat scriptnya menjadi seperti di bawah ini
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/a069dace-c01c-4a4e-894d-cf8f556b161f)

5. Tambahkan script pada routes dengan nama file web.php. Tambahkan seperti gambar di bawah ini
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/e272bd5f-212f-436e-8605-5f7df678f8af)

6. Tambahkan script pada controller dengan nama file UserController.php. Tambahkan script dalam class dan buat method baru dengan nama tambah dan diletakan di bawah method index seperti gambar di bawah ini.
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/d3ba6ad0-649a-4ba7-a5ca-039b7dee8f36)

7. Simpan kode program Langkah 4 s/d 6. Kemudian jalankan pada browser dan klik link “+ Tambah User” amati apa yang terjadi dan beri penjelasan dalam laporan
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/f7956ecd-264a-4f30-affd-72a1454e7470)

8. Tambahkan script pada routes dengan nama file web.php. Tambahkan seperti gambar di bawah ini
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/b8c1202d-574b-4da0-a902-6bd4d440d57d)

9. Tambahkan script pada controller dengan nama file UserController.php. Tambahkan script dalam class dan buat method baru dengan nama tambah_simpan dan diletakan di bawah method tambah seperti gambar di bawah ini
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/ea905421-83e7-4e8f-bf88-3b421a6814bc)

10. Simpan kode program Langkah 8 dan 9. Kemudian jalankan link localhost:8000/user/tambah atau localhost/PWL_POS/public/user/tambah pada browser dan input formnya dan simpan, kemudian amati apa yang terjadi dan beri penjelasan dalam laporan
Jawaban
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/61a53c3c-2f55-4f43-a5df-ab3eed882301)
Yang terjadi input baru di simpan pada database sesuai gambar diatas.

11. Langkah berikutnya membuat update atau ubah data user dengan cara bikin file baru pada view dengan nama user_ubah.blade.php dan buat scriptnya menjadi seperti di bawah ini
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/ebe8d404-6620-4b48-a26d-3a49b2b80bc9)

12. Tambahkan script pada routes dengan nama file web.php. Tambahkan seperti gambar di bawah ini
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/419a774e-3f85-414d-8ae0-220441c3a50e)

13. Tambahkan script pada controller dengan nama file UserController.php. Tambahkan script dalam class dan buat method baru dengan nama ubah dan diletakan di bawah method tambah_simpan seperti gambar di bawah ini
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/f9d17740-671f-4302-a1ba-a895d4474a9e)

14. Simpan kode program Langkah 11 sd 13. Kemudian jalankan pada browser dan klik link “Ubah” amati apa yang terjadi dan beri penjelasan dalam laporan
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/1b5620db-474f-4ab1-8bc1-42fbe84c8d0a)
- Yang terjadi browser menampilkan halaman edit data yang berisi data yang dipilih sebelumnya

15. Tambahkan script pada routes dengan nama file web.php. Tambahkan seperti gambar di bawah ini
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/f4544545-0224-48ae-ad49-a84c1ace53c6)

16. Tambahkan script pada controller dengan nama file UserController.php. Tambahkan script dalam class dan buat method baru dengan nama ubah_simpan dan diletakan di bawah method ubah seperti gambar di bawah ini
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/25845c3c-fc17-4cac-97e7-6260f2216861)

17. Simpan kode program Langkah 15 dan 16. Kemudian jalankan link localhost:8000/user/ubah/1 atau localhost/PWL_POS/public/user/ubah/1 pada browser dan ubah input formnya dan klik tombol ubah, kemudian amati apa yang terjadi dan beri penjelasan dalam laporan
Jawaban
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/c7c1a378-9f92-49cf-ae3c-e0b3449f904e)
Yang terjadi adalah data yang di ubah datanya perubahanya disimpan pada database.

18. Berikut untuk langkah delete . Tambahkan script pada routes dengan nama file web.php. Tambahkan seperti gambar di bawah ini
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/459a2dca-f5f1-4aef-9b3f-e1eeb3cf38ec)

19. Tambahkan script pada controller dengan nama file UserController.php. Tambahkan script dalam class dan buat method baru dengan nama hapus dan diletakan di bawah method ubah_simpan seperti gambar di bawah ini
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/aa2a0ad2-fd61-4f0e-8f9e-1e4b68a2f800)

20. Simpan kode program Langkah 18 dan 19. Kemudian jalankan pada browser dan klik tombol hapus, kemudian amati apa yang terjadi dan beri penjelasan dalam laporan
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/f5cba592-8b94-4fd4-9751-f583052651fb)
Yang terjadi data terhapus dari database.

21. Laporkan hasil Praktikum-2.6 ini dan commit perubahan pada git.
Hasil dari praktikum ini adalah penambahan fitur Create, Read, Update, dan Delete.

### Praktikum 2.7 – Relationships
1.	Buka file model pada UserModel.php dan tambahkan scritpnya menjadi seperti di bawah ini
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/86d0c49e-c2b0-497b-9cb3-4800b03d0538)
2.	Buka file controller pada UserController.php dan ubah method script menjadi seperti di bawah ini
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/36e59e35-78e8-44ed-a139-a223752e451c)
3. Simpan kode program Langkah 2. Kemudian jalankan link pada browser, kemudian amati apa yang terjadi dan beri penjelasan dalam laporan
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/81577b3d-5a02-43a7-9c98-c3a63ad46ed8)
Yang terjadi ditampilkan data user dan data relasinya.

5. Buka file controller pada UserController.php dan ubah method script menjadi seperti di bawah ini
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/cf6e25b9-9893-450d-aedd-36df60b2b237)

6. Buka file view pada user.blade.php dan ubah script menjadi seperti di bawah ini
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/659c9681-61b0-4abd-8703-4559f6acbb56)

7. Laporkan hasil Praktikum-2.7 ini dan commit perubahan pada git.
Jawaban
Yang terjadi adalah data relasi level ditampilkan di halaman user


























