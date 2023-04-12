# DOKUMENTASI PROJECT
(BUAT BRANCH SENDIRI, JANGAN KE PUSH DI BRANCH LAIN)

- Fitur Registrasi JetStream (Verification Email, Privacy and Policy) gunakan mailtrap untuk uji coba email
    doc (https://jetstream.laravel.com/2.x/installation.html, https://laratrust.santigarcor.me/docs/7.x/usage/roles-and-permissions.html#setting-things-up)
- Backend (Alur Akses Dashboard User)
1. Guest tanpa login mengarah ke '/' ditampilkan dashboard user
2. Jika ke '/dashboard' maka ditampilakn halaman login (Frontend tambahin href ke /dashboard)
3. Jika punya role (super, admin) dia akan masuk ke dashboard
4. Jika tidak maka diarahkan ke landing page untuk login atau register sebagai ('Mitra')

## (9 April 2022)
- Menambah user dashboard (Frontend)

## (11 April 2022)
- Menambah migrasi dan relasi antar tabel

## (13 April 2022)
- Membuat Map, integrasi db dan map
- Membuat Superadmin dan Admin melalui superadmin
- Menambah template admin untuk view
- Menambah read list user has role employee (Redirect ke Superadmin dashboard)

## (14 April 2022)
- Membuat Registrasi Bengkel (Employee)
- Menampilkan Notifikasi

## (15 April 2022)
- Form Create User By Admin
- Validasi Bengkel
- Upload Data KTP

Note
- Untuk superadmin blade (Superadmin/dashboardadmin)
- Untuk Admin atau employee (Admin/dashboardadmin)
- Untuk Coba Email Gunakan Mailtrap

## (16 April 2022)
- Fitur CRUD untuk Superadmin sudah bisa digunakan

## (17 April 2022)
- Fix newdashboard route jadi dashboard

## (21 April 2022)
- Membuat Tracking User Static(Index) dan Dinamis(Store View)
- Create Route ke Store
- Kalkulasi Jarak
- Menampilkan Jarak Terdekat (Range 1 Km)

## (25 April 2022)
- Menampilkan data bengkel aktif
- Menonaktifkan bengkel (super, employ)
- aktivasi kembali bengkel

## (10 Mei 2022)
- Update Profile (Semua Role)

## (21 Mei 2022)
- Menambah fitur komparasi harga

## (20 Juni - 26 Juni 2022)
- Menambah fitur Upload Edit Gambar Store
- Reject Store
- Banding
- Add Live Search (User, SuperAdmin)
- Testing Bug
