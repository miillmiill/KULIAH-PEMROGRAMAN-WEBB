@extends('layouts.app')

@section('content')

<div id="splash" class="fixed inset-0 flex flex-col items-center justify-center bg-gradient-to-br from-[#1e1e1e] via-[#2b2b2b] to-[#1e1e1e] z-50 transition-opacity duration-700">
    <img src="Images/logo.png" alt="Logo Kopi Pattayya" class="w-64 h-64 rounded-full shadow-2xl mb-6 animate-fadeIn ring-4 ring-[#d4af37]/60">
    <h1 class="text-5xl font-extrabold accent text-shadow mb-6 animate-fadeIn">Kedai Pattaya</h1>
    <button id="enterBtn" class="mt-4 px-8 py-3 btn-primary rounded-full shadow-lg hover:shadow-xl transition">
      Klik
    </button>
</div>

<div id="mainContent" class="hidden opacity-0 transition-opacity duration-700">

<section class="relative h-screen flex items-center justify-center" id="hero">
  <img src="Images/foto toko.jpeg" class="absolute inset-0 w-full h-full object-cover brightness-75">
  <div class="absolute inset-0 bg-black/50"></div>

  @include('partials.header')

  <div class="relative text-center px-6">
    <h1 class="text-7xl md:text-8xl font-extrabold mb-4 text-[#d4af37] text-shadow">Kedai Pattaya</h1>
  </div>
</section>

<section class="py-24 bg-[#1e1e1e]">
  <div class="max-w-7xl mx-auto px-6 lg:px-12 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
    <div class="relative transform hover:scale-105 transition duration-700 ease-out">
      <div class="absolute -inset-2 bg-gradient-to-tr from-[#d4af37]/20 to-[#2a2a2a]/20 rounded-3xl blur-2xl opacity-60"></div>
      <img src="Images/foto toko.jpeg" alt="Suasana Kedai Pattayya" class="relative rounded-3xl shadow-2xl w-full h-[480px] object-cover ring-1 ring-[#d4af37]/30">
    </div>

    <div class="lg:pl-10 text-center lg:text-left animate-fadeIn">
      <h2 class="text-5xl font-extrabold accent mb-12 leading-tight">
        Hal Asik di <span class="text-[#d4af37]">Kedai Pattaya</span>
      </h2>

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
        <div class="card-bg rounded-2xl shadow-xl p-8 hover:scale-105 transition duration-300 ease-out">
          <h3 class="text-2xl font-semibold accent">Ngopi Santai</h3>
        </div>

        <div class="card-bg rounded-2xl shadow-xl p-8 hover:scale-105 transition duration-300 ease-out">
          <h3 class="text-2xl font-semibold accent">Dengerin Musik</h3>
        </div>

        <div class="card-bg rounded-2xl shadow-xl p-8 hover:scale-105 transition duration-300 ease-out">
          <h3 class="text-2xl font-semibold accent">Lokasi Mudah Ditemukan</h3>
        </div>

        <div class="card-bg rounded-2xl shadow-xl p-8 hover:scale-105 transition duration-300 ease-out">
          <h3 class="text-2xl font-semibold accent">Melamun Menikmati Suasana Jalan</h3>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-24 bg-[#2a2a2a]" id="menu">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-6xl font-extrabold accent mb-16">Menu Best Seller</h2>
    <div class="grid gap-14 md:grid-cols-2 justify-center">
      <div class="card-bg rounded-3xl shadow-2xl p-8 flex flex-col items-center hover:scale-105 transition duration-300">
        <div class="w-full h-[420px] rounded-2xl overflow-hidden">
          <img src="Images/fto thai tea.png" alt="Thai Tea" class="w-full h-full object-cover object-[center_-100px] scale-110">
        </div>
        <h3 class="font-bold text-3xl accent mt-6">Thai Iced Tea</hh3>
        <p class="accent mt-2 mb-4 text-xl">Rp 13.000</p>
        <p class="desc-accent leading-relaxed text-lg px-4 text-center">
          Teh Thailand khas dengan perpaduan teh Ceylon, susu, dan gula yang menyegarkan.
        </p>
      </div>

      <div class="card-bg rounded-3xl shadow-2xl p-8 flex flex-col items-center hover:scale-105 transition duration-300">
        <div class="w-full h-[420px] rounded-2xl overflow-hidden">
          <img src="Images/fto greentea.png" alt="Green Tea" class="w-full h-full object-cover object-[center_-100px] scale-110">
        </div>
        <h3 class="font-bold text-3xl accent mt-6">Thai Iced Green Tea</h3>
        <p class="accent mt-2 mb-4 text-xl">Rp 10.000</p>
        <p class="desc-accent leading-relaxed text-lg px-4 text-center">
          Teh hijau lembut dengan aroma khas dan kaya antioksidan alami.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="py-12 bg-[#1e1e1e]">
  <div class="max-w-6xl mx-auto px-6">
    <h2 class="text-4xl font-bold text-center accent mb-10">Menu Lengkap</h2>
    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
      <div class="card-bg rounded-xl shadow-lg p-6 flex flex-col items-center hover:scale-105 transition duration-300">
        <img src="Images/menu thai tea.png" class="rounded-lg mb-4 w-full h-64 object-cover">
        <h3 class="font-bold text-xl accent">Thai Ice Tea</h3>
        <p class="accent mt-2">Rp 10.000</p>
      </div>

      <div class="card-bg rounded-xl shadow-lg p-6 flex flex-col items-center hover:scale-105 transition duration-300">
        <img src="Images/menu grente.png" class="rounded-lg mb-4 w-full h-64 object-cover">
        <h3 class="font-bold text-xl accent">Thai Iced Green Tea</h3>
        <p class="accent mt-2">Rp 10.000</p>
      </div>

      <div class="card-bg rounded-xl shadow-lg p-6 flex flex-col items-center hover:scale-105 transition duration-300">
        <img src="Images/fto brown sugar milk.png" class="rounded-lg mb-4 w-full h-64 object-cover">
        <h3 class="font-bold text-xl accent">Brown Sugar Milk</h3>
        <p class="accent mt-2">Rp 13.000</p>
      </div>

      <div class="card-bg rounded-xl shadow-lg p-6 flex flex-col items-center hover:scale-105 transition duration-300">
        <img src="Images/fto bown sugar pandan.png" class="rounded-lg mb-4 w-full h-64 object-cover">
        <h3 class="font-bold text-xl accent">Brown Sugar Pandan</h3>
        <p class="accent mt-2">Rp 15.000</p>
      </div>

      <div class="card-bg rounded-xl shadow-lg p-6 flex flex-col items-center hover:scale-105 transition duration-300">
        <img src="Images/fto ice milo.png" class="rounded-lg mb-4 w-full h-64 object-cover">
        <h3 class="font-bold text-xl accent">Thai Iced Milo</h3>
        <p class="accent mt-2">Rp 10.000</p>
      </div>

      <div class="card-bg rounded-xl shadow-lg p-6 flex flex-col items-center hover:scale-105 transition duration-300">
        <img src="Images/fto milo bold.png" class="rounded-lg mb-4 w-full h-64 object-cover">
        <h3 class="font-bold text-xl accent">Coffee Milo Bold</h3>
        <p class="accent mt-2">Rp 12.000</p>
      </div>
    </div>
  </div>
</section>



</div>

<div id="lokasiSlide" class="fixed inset-0 z-50 hidden flex flex-col items-center justify-center bg-[#1e1e1e]/95 backdrop-blur-sm">
    <h2 class="text-4xl font-bold accent mb-8">Lokasi Kedai Pattaya</h2>
    <div class="w-11/12 max-w-5xl rounded-3xl overflow-hidden shadow-2xl ring-2 ring-[#d4af37]/20 mb-8">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248.34835891118715!2d119.445586543678!3d-5.172050382117359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee3fdf8004217%3A0x2b451b93090d4c1b!2sara-ara%20snack!5e0!3m2!1sid!2sid!4v1759379519924!5m2!1sid!2sid" 
        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <button id="closeLokasi" class="btn-primary px-8 py-3 rounded-full font-semibold shadow-lg hover:shadow-xl transition">
      Tutup
    </button>
</div>

@endsection