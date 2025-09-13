# analisis Biografi

1. HTML
```html
<!-- Navigasi -->
  <nav class="navbar">
    <ul>
      <li><a href="#" onclick="showPage('home')">Home</a></li>
      <li><a href="#" onclick="showPage('portofolio')">Portofolio</a></li>
      <li><a href="#" onclick="showPage('galeri')">Galeri</a></li>
    </ul>
  </nav>
```
Pada bagian navigasi membuat tiga menu yaitu Home, Portofolio, dan Galeri yang tidak membuka halaman baru, melainkan memanggil fungsi untuk menampilkan menu sesuai pilihan.

```html
<!-- Halaman Home -->
<div class="page" id="home">
  <div class="resume home-box">
    <div class="home-header">
      <img src="fro 5.jpeg" alt="Foto Saya" class="foto-home">
      <h1 class="sapaan">Hellooowww , Aku Miilaa</h1>
    </div>
    <p class="intro">Selamat datang di websitenya Mila ya!</p>
  </div>
</div>
```
Pada halaman Home menjadi halaman utama yang menampilkan foto, sapaan, dan perkenalan singkat untuk menyambut pengunjung sekaligus membangun identitas personal.

```html
<!-- Halaman Galeri -->
  <div class="page" id="galeri" style="display:none;">
    <div class="resume">
      <h2>📸 Galeri mila</h2>
      <div class="galeri">
        <img src="fto 1.jpeg" alt="Sahabat saya">
        <img src="fto 2.jpeg" alt="Foto kebersamaan saya">
        <img src="fto 3.jpeg" alt="sekalas saya">
      </div>
    </div>
  </div>
```
Pada halaman Galeri menampilkan foto-foto  yang awalnya disembunyikan dengan display:none dan hanya terlihat ketika pengguna memilih menu Galeri.

```html
 <!-- Script untuk ganti halaman -->
  <script>
    function showPage(pageId) {
      
      document.querySelectorAll('.page').forEach(p => p.style.display = 'none');
      document.getElementById(pageId).style.display = 'block';
    }
  </script>
</body>
</html>
```
membuat website menjadi Single Page Application sederhana sehingga perpindahan halaman lebih cepat tanpa perlu reload dan terasa seperti aplikasi.

2. CSS
```html

/* Navbar */
.navbar {
  background: var(--pink);
  padding: 10px 0;
}
```
navbar adalah styling untuk bagian navigasi yang memberi latar belakang warna dari variabel CSS pink serta ruang atas dan bawah sebesar 10px, sedangkan kanan dan kiri bernilai 0.

```html
.navbar ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
}
.navbar li {
  margin: 0 15px;
}
```
Pada bagian ini navbar ul menghilangkan bullet/angka pada list dengan list-style: none, mengatur menu agar rata tengah menggunakan display: flex dan justify-content: center, sedangkan .navbar li memberi jarak kanan dan kiri sebesar 15px pada setiap item menu.

```html
.navbar a {
  color: var(--black);
  font-weight: bold;
  text-decoration: none;
  padding: 6px 12px;
  border-radius: 6px;
  transition: 0.3s;
}
.navbar a:hover {
  background: var(--black);
  color: var(--pink);
}
```
pada bagian navbar a menampilkan link menu dengan teks hitam tebal tanpa garis bawah, diberi padding agar area klik lebih nyaman serta sudut melengkung dengan border-radius, disertai animasi halus transition: 0.3s, dan saat di-hover background berubah hitam dengan teks berwarna pink.

```html
/* Galeri foto */
.galeri {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  gap: 15px;
  margin-top: 20px;
}
.galeri img {
  width: 100%;
  border-radius: 10px;
  border: 3px solid var(--pink);
  transition: 0.3s;
}
.galeri img:hover {
  transform: scale(1.05);
  opacity: 0.9;
}

/* Home box */
.home-box {
  text-align: center;
  padding: 40px 20px;
}

.foto-home {
  width: 180px;
  height: 180px;
  border-radius: 50%;
  border: 4px solid var(--pink);
  object-fit: cover;
  margin-bottom: 20px;
}

.sapaan {
  font-size: 32px;
  color: var(--pink);
  margin-bottom: 10px;
}

.intro {
  font-size: 18px;
  color: var(--beige);
}
```
pada kode diatas mengatur galeri foto dengan tampilan grid rapi menggunakan display: grid dan kolom fleksibel minimal 200px, memberi jarak antar foto 15px serta margin atas 20px, sementara gambar dibuat memenuhi lebar, bersudut melengkung, memiliki border pink, efek zoom dan transparansi saat hover, lalu bagian home box diatur rata tengah dengan padding, menampilkan foto profil bulat ukuran 180px dengan border pink dan object-fit: cover, disertai teks sapaan berukuran besar berwarna pink serta teks intro lebih kecil berwarna beige.

