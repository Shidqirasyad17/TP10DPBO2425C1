# TP10DPBO2425C1

## JANJI
Saya Shidqi Rasyad Firjatulah dengan NIM 2408156 mengerjakan TP10 pada mata kuliah DPBO untuk keberkahannya saya menyatakan bahwa saya tidak melakukan kecurangan sebagaimana yang dispesifikasikan.


---

## Desain Program

### Database
Database yang saya buat memiliki tema Absensi untuk Siswa, memiliki beberapa tabel sebagai berikut :
#### Absensi 
Tabel ini berfungsi menyimpan data absensi untuk setiap siswa, memiliki beberapa atribut
  - `id_absen` -> kode unik
  -  `id_siswa` -> foreign key dari tabel siswa
  -  `id_status` -> foreign key dari tabel status_absen
  -  `id_kelas` -> foreign key dari tabel kelas
  -   `tanggal` -> tanggal absensi.
#### Kelas 
Tabel ini berfungsi untuk menyimpan nama kelas, memiliki beberapa atribut :
  - `id_kelas` -> kode unik setiap kelas
  -  `nama_kelas` -> untuk nama kelas (X IPA 1, X IPS 2, DLL).
#### Siswa 
Tabel ini berfungsi untuk menyimpan nama siswa, memiliki beberapa atribut :
  - `id_siswa` -> kode unik untuk siswa
  - `nama` -> untuk nama siswa.
#### status_absen 
Tabel ini berfungsi untuk menyimpan status absen, memiliki beberapa atribut:    
  - `id_status` -> kode unik untuk status_absen
  - `keterangan` -> untuk keterangan absen (Hadir, izin, sakit, Alpa)

--- 

### Model
- Absensi.php -> menyimpan logika CRUD untuk kelas `Absensi`
- Kelas.php -> menyimpan logika CRUD untuk kelas `kelas`
- Siswa.php -> menyimpan logika CRUD untuk kelas `siswa`
- Status_absen.php -> menyimpan logika CRUD untuk kelas `status_absen`

### Views 
- Berisi form dan list untuk tampilan setiap kelas
  
### ViewModel
- AbsensiViewModel.php -> menghubungkan pembalap View dan model
- KelasViewModel.php -> menghubungkan sirkuit view dan model
- SiswaViewModel.php -> interface methode CRUD.
- StatusAbsenViewModel.php ->
  
--- 

## Alur 
1. User membuka website -> tampilan halaman utama menampilkan list pembalap.
2. User dapat memilih menu:
    - pembalap
    - sirkuit
3. Pada tiap menu, user dapat melakukan CRUD:
   - create (tambah data)
   - read (menampilkan semua data)
   - update (edit data)
   - delete (hapus data)
# Dokumentasi



https://github.com/user-attachments/assets/c6a7ca2c-f7cc-4df5-8927-d16bb4f11143










