# Recruitment-MB-Lab

# STRUKTUR PROYEK 
Recruitment-MBC-Lab/
├── index.html
├── divisi & layanan.html
├── kontak.html
├── developer.html
├── kontak.php
├── messages.txt
├── style/
│   ├── stylelanding.css
│   ├── styledivisi.css
│   ├── stylekontak.css
│   └── styledeveloper.css
└── img/
    └── Logo.png

# INSTALASI LOKAL 
1. Clone repository 
git clone https://github.com/AthayaPutriKhaira/Recruitment-MBC-Lab 
cd Recruitment-MBC-Lab 
2. Jalankan secara lokal (frontend saja)
Buka file index.html di browser
3. Jika ingin menggunakan form kontak (PHP backend)
- Install XAMPP/LAMP
- Pindahkan ke folder htdocs: cp -r Recruitment-MBC-Lab /xampp/htdocs/ 
- Jalankan Apache dari XAMPP
- Akses di browser: http://localhost/Recruitment-MBC-Lab/

# DEPLOYMENT KE HOSTING 
1. Upload semua file ke server (via FTP/cPanel/SSH) 
2. Ubah izin file agar messages.txt bisa ditulis oleh PHP: chmod 664 messages.txt
3. Pasang SSL (jika belum): 
- Gunakan Let's Encrypt: sudo certbot --apache
- Tambahkan redirect HTTPS di file .htaccess: 
RewriteEngine On
RewriteCond %{HTTPS} !=on
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]

# KONFIGURASI SSL 
1. Netlify otomatis menyediakan SSL gratis (Let's Encrypt)
2. Untuk paksa redirect ke HTTPS, buat file bernama _redirects di root folder: /*  https://mbclab.id/:splat  301!

# KONFIGURASI BACKEND 
1. PHP tidak didukung di Netlify
2. Gunakan layanan seperti Netlify Forms 
- Contoh Form Netflity: 
<form name="kontak" method="POST" data-netlify="true">
  <input type="text" name="nama" required>
  <input type="email" name="email" required>
  <textarea name="pesan" required></textarea>
  <button type="submit">Kirim</button>
</form>







