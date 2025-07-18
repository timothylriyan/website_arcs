// File: resources/js/app.js (Versi Lengkap & Benar)

// 1. File bootstrap default Laravel (untuk Axios, dll)
import './bootstrap';

// 2. Impor JavaScript dari Bootstrap 5 (untuk komponen seperti dropdown, modal, dll)
import 'bootstrap';

// 3. Kode AlpineJS dari Breeze (JANGAN DIHAPUS, ini untuk dashboard admin)
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

// 4. Impor SwiperJS
import Swiper from 'swiper/bundle';

// 5. Inisialisasi Swiper untuk slider di section layanan
const swiper = new Swiper('.services-slider', {
  // Opsi
  loop: true,
  slidesPerView: 1, // Tampilkan 1 slide di mobile
  spaceBetween: 30, // Jarak antar slide
  
  // Paginasi (titik-titik di bawah)
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  // Navigasi (panah kiri-kanan)
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // Pengaturan untuk layar lebih besar (desktop)
  breakpoints: {
    // jika lebar layar 768px atau lebih
    768: {
      slidesPerView: 2,
    },
    // jika lebar layar 992px atau lebih
    992: {
      slidesPerView: 3,
    }
  }
});