document.addEventListener("DOMContentLoaded", () => {

    const splash = document.getElementById('splash');
    const mainContent = document.getElementById('mainContent');
    const enterBtn = document.getElementById('enterBtn');
    const lokasiSlide = document.getElementById('lokasiSlide');
    const lokasiBtn = document.getElementById('lokasiBtn');
    const closeLokasi = document.getElementById('closeLokasi');

    // --- Splash ---
    enterBtn.addEventListener('click', () => {
        splash.classList.add('opacity-0');

        setTimeout(() => {
            splash.style.display = 'none';
            mainContent.classList.remove('hidden');

            setTimeout(() => {
                mainContent.classList.remove('opacity-0');
            }, 50);

        }, 700);
    });

    // --- Lokasi ---
    lokasiBtn.addEventListener('click', () => {
        lokasiSlide.classList.remove('hidden');
        setTimeout(() => lokasiSlide.classList.add('active'), 10);
    });

    closeLokasi.addEventListener('click', () => {
        lokasiSlide.classList.remove('active');
        setTimeout(() => lokasiSlide.classList.add('hidden'), 500);
    });
});
