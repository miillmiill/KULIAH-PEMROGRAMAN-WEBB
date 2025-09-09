 # analisis Biografi

1. HTML
```html
    <!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang Saya</title>
  <!-- Hubungkan ke CSS -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="resume">
```
Bagian !doctype html menandakan dokumen HTML, lalu html lang="id" menunjukkan bahasa Indonesia. Dalam head, ada meta charset="utf-8" untuk menampilkan karakter khusus, meta name="viewport"...agar tampilan responsif di semua perangkat, title memberi judul tab browser, dan link rel="stylesheet" href="style.css"menghubungkan dengan CSS. Setelah itu di body, seluruh isi web dibungkus dalam di class="resume"sebagai container utama yang menampung semua bagian resume seperti header, tentang saya, data diri, pendidikan, hobi, dan sosial media.

```html
 <!-- Bagian Header -->
    <header class="header">
      <div class="foto-frame">
        <img src="foto mil.jpeg" alt="Foto Profil" class="foto">
      </div>
      <div class="info">
        <h1 class="nama">Nur Karmila Agustina</h1>
        <p class="tagline">Halooowwwwww, ini Mila</p>
        <div class="kontak">
          <p>📞 0813-4380-5451</p>
          <p>📧 nurkarmilaagustina07@gmail.com</p>
        </div>
      </div>
    </header> 
```
Bagian header class="header" yang menampilkan identitas utama. Ada div class="foto-frame"berisi img src="foto mil.jpeg" alt="Foto Profil" class="foto"> yang menampilkan foto profil dengan teks alternatif jika gambar tidak muncul. Di sampingnya terdapat div class="info" yang berisi h1 class="nama" untuk menampilkan nama besar sebagai judul utama, p class="tagline" untuk memberikan sapaan singkat atau deskripsi diri, serta div class="kontak" yang memuat nomor telepon dan email sehingga orang tahu cara menghubungi. Jadi, bagian ini berfungsi memperkenalkan identitas inti kamu secara langsung.

```html 
<!-- Bagian Tentang Saya -->
    <h2>🌸Sekilas Tentangku</h2>
    <p>
        namaku Nur Karmila Agustina tapi suka dipanggil miill, 
        aku manusia yang paling excited tantang apapun itu,
        manusia yang 10% sedihnya,capeknya,dan 90% bahagianya,semangatnya
    </p>
</section>
```
 dengan h2🌸Sekilas Tentangku h2  sebagai subjudul, lalu ada  p berisi deskripsi singkat tentang diri kamu: nama panggilan, sifat, dan kepribadian (misalnya lebih banyak bahagia dan semangat). Bagian ini membuat halaman terasa personal karena menampilkan siapa kamu di balik data formal.

 ```html
  <!-- Bagian Data Diri -->
    <section class="data-diri">
      <h2>Identitas Diri</h2>
      <ul>
        <li>Nama : Nur Karmila Agustina</li>
        <li>Tanggal Lahir : 18 Mei 2006</li>
        <li>Umur : 19 tahun</li>
        <li>Agama : Islam</li>
        <li>Kewarganegaraan : Indonesia</li>
      </ul>
    </section>
```
Bagian ini menggunakan section class="data-diri" sebagai wadah. Judulnya h2 Identitas Diri h2, kemudian informasi disusun dalam daftar ul dengan item li seperti nama, tanggal lahir, umur, agama, dan kewarganegaraan. Fungsinya adalah memberikan data formal mengenai identitas pribadi dengan format yang rapi dan mudah dibaca.

```html
<!-- Bagian Pendidikan -->
    <section class="pendidikan">
      <h2>Pendidikan</h2>
      <ul>
        <li>SD: Buana Indah</li>
        <li>SMP : Negeri Tomoni Timur</li>
        <li>SMK : 3 Tarakan</li>
        <li>Kuliah : Universitas Negeri Makassar</li>
      </ul>
    </section>
```
Menggunakan section class="pendidikan" dengan judul h2> Pendidikan h2>, lalu daftar ul berisi riwayat sekolah dari SD hingga kuliah. Setiap jenjang dituliskan dengan li. Bagian ini menampilkan perjalanan pendidikanmu secara berurutan sehingga pembaca mengetahui latar belakang akademik.

```html
<!-- Bagian Hobi -->
    <section class="hobi">
      <h2>Hobi</h2>
      <div class="daftar-hobi">
        <div class="hobi-item">📖Membaca</div>
        <div class="hobi-item">🏞️Memotret</div>
        <div class="hobi-item">🏀Olahraga</div>
      </div>
    </section>
```
dalam ection class="hobi" dengan judul h2 Hobi h2. Di dalamnya ada div class="daftar-hobi"> yang berisi beberapa div class="hobi-item"> untuk menampilkan hobi satu per satu, lengkap dengan emoji seperti 📖 untuk membaca, 🏞️ untuk memotret, dan 🏀 untuk olahraga. Bagian ini memberi kesan santai dan menunjukkan sisi pribadi yang lebih menyenangkan.

```html
<!-- Bagian Sosial Media --> 
    <section class="sosial">
      <h2>Media Sosial</h2>
      <ul>
        <li>Instagram: <a href="https://www.instagram.com/miillmillll?igsh=bW9wMnpxeXBxMTlp&utm_source=qr" target="_blank">miillmillll?</a></li>
        <li>WhatsApp: <a href="https://wa.me/qr/081343805461" target="_blank">call me</a></li>
        <li>Email: nurkarmilaagustina07@gmail.com</li>
      </ul>
    </section>
  </div>
</body>
</html>
```
section class="sosial" dengan judul h2 Media Sosial h2. Di dalamnya ada  ul dengan item  li yang mencantumkan akun Instagram, WhatsApp, dan email. Link media sosial ditulis menggunakan a href="..." target="_blank" supaya bisa diklik dan terbuka di tab baru. Bagian ini berfungsi sebagai sarana komunikasi agar orang mudah menemukan dan menghubungimu lewat platform online.

2. CSS
```html
/* Warna utama */
:root {
  --pink: #ff4fa6;
  --black: #111;
  --white: #fff;
  --muted: #ccc;
  --beige: #f5f5dc;
}
```
Bagian ini mendefinisikan variabel warna supaya lebih mudah dipakai ulang di seluruh stylesheet. Jadi kalau kamu ganti pink, semua elemen yang pakai warna pink otomatis ikut berubah.

```html
/* Reset dan body */
body {
  margin: 0;
  font-family: Arial, sans-serif;
  background: var(--black);
  color: var(--beige);
  line-height: 1.6;
}
```
Mengatur tampilan dasar halaman pakai font Arial, background hitam, teks krem, dan spasi antarbaris biar lebih enak dibaca.

```html
/* Kontainer resume */
.resume {
  max-width: 800px;
  margin: 20px auto;
  padding: 20px;
  background: #1a1a1a;
  border-radius: 12px;
  box-shadow: 0 6px 20px rgba(0,0,0,0.6);
}
```
resume adalah wadah utama seluruh isi portofolio. Lebarnya dibatasi (800px), ditengah dengan margin auto, background abu gelap, sudut membulat, dan ada bayangan supaya terlihat seperti kartu.

```html
/* Header */
.header {
  display: flex;
  gap: 20px;
  align-items: center;
  border-bottom: 2px solid var(--pink);
  padding-bottom: 20px;
}
```
Bagian ini menata header. display: flex membuat foto dan info sejajar. Foto ditaruh dalam .foto-frame berbentuk lingkaran dengan border pink. .foto diatur agar proporsional dan tetap bulat. .nama besar berwarna pink, .tagline kecil berwarna krem, dan .kontak menata nomor serta email dengan jarak kecil.

```html
.foto-frame {
  background: #000;
  padding: 8px;
  border-radius: 50%;
  border: 4px solid var(--pink);
  overflow: hidden;
  width: 150px;
  height: 150px;
  display: flex;
  align-items: center;
  justify-content: center;
}
```
wadah foto profil berbentuk lingkaran dengan border pink tebal. Foto otomatis ditaruh di tengah dan apapun yang lebih besar dari lingkaran akan terpotong rapi

```html
.foto {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 50%;
}

.nama {
  margin: 0;
  font-size: 28px;
  color: var(--pink);
}

.tagline {
  margin: 5px 0;
  color: var(--beige);
}

.kontak p {
  margin: 2px 0;
}
```
foto memastikan foto profil bulat sempurna dan selalu pas di dalam .foto-frame,nama menonjolkan nama dengan warna pink dan ukuran lebih besar, tagline memberikan kesan ringan/soft agar berbeda dari nama, kontak p membuat informasi kontak tersusun rapi tanpa jarak berlebihan.

```html

/* Section Umum */
section {
  margin-top: 20px;
}

h2 {
  color: var(--pink);
  border-bottom: 1px solid var(--pink);
  padding-bottom: 4px;
}

/* Sekilas Tentangku */
section p {
  color: var(--beige);
}

/* Data Diri */
.data-diri ul {
  list-style: none;
  padding: 0;
}

.data-diri ul li {
  padding: 6px 0;
  border-left: 3px solid var(--pink);
  padding-left: 10px;
  margin-bottom: 4px;
}
```
Bagian ini mengatur tampilan setiap section supaya ada jarak antar-bagian (margin-top). Judul section h2 diberi warna pink dengan garis bawah tipis agar terlihat menonjol dan seragam. Paragraf di dalam section (section p) menggunakan warna beige supaya mudah dibaca di background gelap. Lalu untuk bagian Data Diri, daftar ul diubah tampilannya: bullet standar dihapus, lalu setiap item  li diberi garis vertikal pink di kiri sebagai penanda, dengan jarak antar-baris yang rapi.

```html
.pendidikan ul {
  display: flex;
  flex-direction: column;
  gap: 10px;
  padding: 0;
  list-style: none;
}

.pendidikan ul li {
  background: #2a2a2a;
  border: 2px solid var(--pink);
  border-radius: 8px;
  padding: 10px;
  font-weight: bold;
  color: var(--beige);
  transition: 0.3s;
}

.pendidikan ul li:hover {
  background: var(--pink);
  color: var(--black);
  cursor: pointer;
}
```
membuat daftar pendidikan tampil modern. Elemen ul diatur dengan flex column supaya item tersusun ke bawah dengan jarak rapi (gap: 10px). Bullet standar dihapus agar lebih bersih. Setiap item li punya latar abu gelap, border pink, sudut membulat, dan teks tebal warna beige

```html
/* Hobi */
.hobi .daftar-hobi {
  display: flex;
  gap: 12px;
  margin-top: 10px;
}

.hobi-item {
  flex: 1;
  padding: 10px;
  text-align: center;
  background: #2a2a2a;
  border: 2px solid var(--pink);
  border-radius: 10px;
  font-weight: bold;
  color: var(--beige);
  transition: 0.3s;
}

.hobi-item:hover {
  background: var(--pink);
  color: var(--black);
  cursor: pointer;
}
```
mengatur daftar hobi agar tampil berdampingan dalam kotak-kotak yang rapi. Container .daftar-hobi memakai flexbox untuk menata kotaknya sejajar dengan jarak antar kotak Setiap hobi item diberi desain kotak latar abu gelap, border pink, sudut membulat, teks tebal beige, dan responsif karena semua kotak lebar sama. Ditambah efek hover interaktif: saat diarahkan kursor, kotak berubah jadi pink dengan teks hitam.

```html
/* Media Sosial */
.sosial a {
  color: var(--pink);
  text-decoration: none;
}
.sosial a:hover {
  text-decoration: underline;
}

/* Link dan email */
.sosial ul {
  list-style: none;
  padding: 0;
}

.sosial ul li {
  padding: 4px 0;
  border-left: 3px solid var(--pink);
  padding-left: 10px;
  margin-bottom: 4px;
}
```
membuat daftar media sosial tampil rapi dan konsisten. Semua link (a) diberi warna pink agar sesuai tema, tanpa garis bawah supaya lebih bersih. Namun saat diarahkan kursor (hover), garis bawah muncul untuk memberi tanda interaktif. Daftar ul dibuat tanpa bullet bawaan, lalu setiap item li diberi garis vertikal pink di kiri sebagai penanda visual, dengan jarak antarbaris yang pas agar rapi. 





