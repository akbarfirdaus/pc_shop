<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Pemanggilan CSS Lokal -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <!-- Pemanggilan Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@700;900&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Circular Std:wght@400&display=swap" />

</head>

<body>

    <div class="landing-page">
        <div class="landing-page-child">
        </div>
        <div class="landing-page-item">
        </div>

        <div class="frame-parent">
            <div class="frame-group">
                <div class="vector-parent">
                    <a href="/">
                        <img class="vector-icon" alt="" src="{{ asset('images/logo-pc-shop1.png') }}">
                    </a>
                </div>
                <div class="home-parent" id="navMenu">
                    <a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('katalog') }}"
                        class="nav-link {{ Request::is('katalog*') ? 'active' : '' }}">Product</a>
                    <a href="#service" class="nav-link">Service</a>
                    <a href="#project" class="nav-link">Project</a>
                    <a href="#contact" class="nav-link">Contact Us</a>
                </div>
                <div class="hamburger" id="hamburger">&#9776;</div>
            </div>
            <div class="frame-container">
                <div class="frame-div">
                    <div class="best-technology-solutions-parent">
                        <b class="best-technology-solutions">BEST TECHNOLOGY SOLUTIONS</b>
                        <img class="work-1-icon" alt="" src="{{ asset('images/work 1.svg') }}">

                    </div>
                    <div class="solusi-teknologi-tepat-container">
                        <p class="solusi-teknologi">Solusi Teknologi Tepat dan Terpercaya</p>
                    </div>
                    <div class="melayani-penjualan-dan-container">
                        <p class="solusi-teknologi">“Melayani penjualan dan perbaikan laptop, komputer, serta printer dengan sepenuh hati."</p>
                    </div>
                    <div class="frame-parent1" id="frameContainer1">
                        <div class="see-our-services-wrapper">
                            <a href="#service">
                                <b class="see-our-services">See Our Services</b>
                            </a>
                        </div>
                        <div class="play-circle5-1-parent">
                            <img class="work-1-icon" alt="" src="{{ asset('images/add-user 1.png') }}">

                            <b class="see-our-services">Watch Demo</b>
                        </div>
                    </div>
                </div>
                <div class="group-div">
                    <div class="frame-parent2">
                        <div class="rectangle-parent">
                            <img class="frame-child" alt="" src="{{ asset('images/Rectangle 1.png') }}">

                            <img class="frame-child" alt="" src="{{ asset('images/Rectangle 2.png') }}">

                        </div>
                        <img class="frame-inner" alt="" src="{{ asset('images/Rectangle 3.png') }}">

                    </div>
                    <div class="send-1-wrapper">
                        <img class="send-1-icon" alt="" src="{{ asset('images/send 1.svg') }}">

                    </div>
                    <div class="add-user-1-wrapper">
                        <img class="send-1-icon" alt="" src="{{ asset('images/add-user 1.png') }}">

                    </div>
                </div>
            </div>
            <div class="lenovo-logosvg-parent">
                <div class="logo-track">
                    <img src="{{ asset('images/Lenovo.svg') }}" alt="Lenovo">
                    <img src="{{ asset('images/Asus.svg') }}" alt="Asus">
                    <img src="{{ asset('images/Acer.svg') }}" alt="Acer">
                    <img src="{{ asset('images/Canon.svg') }}" alt="Canon">
                    <img src="{{ asset('images/Hp.svg') }}" alt="HP">
                </div>
            </div>
            <section id="service">
                <div class="frame-parent3" data-scroll-to="frameContainer2">
                    <div class="services-parent">
                        <b class="services">Services</b>
                        <b class="our-top-value" data-scroll-to="ourTopValue">Our top value categories for you</b>
                    </div>
                    <div class="frame-parent4">
                        <div class="destination-1-parent">
                            <img class="destination-1-icon" alt=""
                                src="{{ asset('images/destination 1.png') }}">

                            <div class="pembuatan-aplikasi-web-mobil-parent">
                                <b class="pembuatan-aplikasi-web">Pembuatan Aplikasi Web & Mobile</b>
                                <div class="kami-membantu-anda">Kami membantu Anda menciptakan aplikasi web dan mobile
                                    yang sesuai dengan kebutuhan bisnis, mulai dari desain hingga implementasi.</div>
                            </div>
                        </div>
                        <div class="destination-1-parent">
                            <img class="destination-1-icon"
                                alt="" src="{{ asset('images/cloudy 1.png') }}">

                            <div class="pembuatan-aplikasi-web-mobil-parent">
                                <b class="pembuatan-aplikasi-web">Instalasi Infrastruktur IT</b>
                                <div class="kami-membantu-anda">Kami menawarkan layanan instalasi jaringan, pemasangan
                                    CCTV, hingga sistem keamanan digital lainnya, memastikan bisnis Anda memiliki
                                    fondasi teknologi yang kuat dan andal.</div>
                            </div>
                        </div>
                        <div class="destination-1-parent">
                            <img class="destination-1-icon" alt=""
                                src="{{ asset('images/booking 1.png') }}">

                            <div class="pembuatan-aplikasi-web-mobil-parent">
                                <b class="pembuatan-aplikasi-web">Konsultasi IT untuk Bisnis</b>
                                <div class="kami-membantu-anda">Layanan konsultasi kami membantu Anda menemukan solusi
                                    IT yang paling efektif untuk mendukung pertumbuhan bisnis, mulai dari perencanaan
                                    hingga implementasi.</div>
                            </div>
                        </div>
                    </div>
                    <div class="dot-indicators">
                        <span class="dot active"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>
            </section>
            <div class="frame-parent5">
                <section id="project">
                    <div class="frame-parent6" data-scroll-to="frameContainer1">
                        <div class="our-project-parent">
                            <b class="services">Our project</b>
                            <b class="projects-that-inspire">"Projects that Inspire and Impact"</b>
                        </div>
                        <div class="group-parent project-navigation">
                            <div id="arrow-left" class="rectangle-group">
                                <div class="group-child">
                                    <img class="arrow-left-1-icon" alt=""
                                        src="{{ asset('images/arrow-left 1.svg') }}">
                                </div>
                            </div>
                            <div id="arrow-right" class="rectangle-container">
                                <div class="group-item">
                                    <img id="arrow-right" class="arrow-left-2-icon" alt=""
                                        src="{{ asset('images/arrow-left 2.svg') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="project-track">
                    @foreach ($projeks as $projek)
                        <div class="vector-group">
                            <img class="rectangle-icon" alt="" src="{{ asset('storage/' . $projek->thumbnail) }}">
                            <div class="frame-parent7">
                                <div class="our-project-parent">
                                    <div class="aplikasi-deteksi-apd-di-migas-wrapper">
                                        <b class="aplikasi-deteksi-apd">{{ $projek->name }}</b>
                                    </div>
                                    <div class="pertamina">{{ $projek->mitra }}</div>
                                </div>
                                <div class="frame-wrapper">
                                    <!-- Button untuk membuka popup -->
                                    <button class="see-our-services-wrapper show-project-btn"
                                            data-name="{{ $projek->name }}"
                                            data-mitra="{{ $projek->mitra }}"
                                            data-thumbnail="{{ asset('storage/' . $projek->thumbnail) }}">
                                        Show Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Popup Modal -->
                <div id="projectModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <img id="modalThumbnail" src="" alt="Project Image">
                        <h2 id="modalTitle"></h2>
                        <p id="modalMitra"></p>
                    </div>
                </div>
            </div>
            <div class="background-parent">
                <img class="background-icon" alt="" src="{{ asset('images/palang.svg') }}">
                <svg class="background-svg" width="300" height="300" viewBox="0 0 300 300">
                    <!-- Lingkaran Putus-putus -->
                    <circle cx="120" cy="120" r="80" stroke="red" stroke-dasharray="15, 10"
                        stroke-width="10" fill="none" />

                    <!-- Pola Silang -->
                    <defs class="defs">
                        <pattern id="crossPattern" width="20" height="20" patternUnits="userSpaceOnUse">
                            <line x1="5" y1="5" x2="15" y2="15" stroke="orange"
                                stroke-width="3" />
                            <line x1="15" y1="5" x2="5" y2="15" stroke="orange"
                                stroke-width="3" />
                        </pattern>
                    </defs>
                    <rect x="100" y="80" width="180" height="150" fill="url(#crossPattern)" />
                </svg>

                <div class="frame-parent13">
                    <div class="frame-parent14">
                        <div class="key-features-parent">
                            <b class="key-features">Key features</b>
                            <b class="what-benifit-will">What Benifit Will You Get</b>
                        </div>
                        <div class="unlock-the-value">Unlock the Value of Our Services</div>
                    </div>
                    <div class="frame-parent15">
                        <div class="group-container">
                            <div class="rectangle-group">
                                <div class="group-inner"></div>
                                <img class="icon-check" alt="" src="{{ asset('images/centang-oren.svg') }}">

                            </div>
                            <div class="custom-solutions-parent">
                                <b class="custom-solutions">Custom Solutions</b>
                                <div class="melayani-penjualan-dan-container">
                                    <p class="solusi-teknologi2">Every project is tailored to meet the specific needs of your business. </p>
                                </div>
                            </div>
                        </div>
                        <div class="group-parent1">
                            <div class="rectangle-group">
                                <div class="rectangle-div"></div>
                                <img class="icon-check" alt=""
                                    src="{{ asset('images/centang-kuning.svg') }}">

                            </div>
                            <div class="custom-solutions-parent">
                                <b class="custom-solutions">High-Quality Results</b>
                                <div class="melayani-penjualan-dan-container">
                                    <p class="solusi-teknologi2">Delivering high-quality outcomes aligned with the latest industry standards.</p>
                                </div>
                            </div>
                        </div>
                        <div class="group-parent1">
                            <div class="rectangle-group">
                                <div class="group-child1"></div>
                                <img class="icon-check" alt="" src="{{ asset('images/centang-pink.svg') }}">
                            </div>
                            <div class="custom-solutions-parent">
                                <b class="custom-solutions">Cost-Effective Services</b>
                                <div class="melayani-penjualan-dan-container">
                                    <p class="solusi-teknologi2">Affordable solutions without compromising quality. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="group-child2" alt="" src="{{ asset('images/Rectangle 9.png') }}">

                <img class="group-child3" alt="" src="{{ asset('images/Rectangle 10.png') }}">
            </div>
            <div class="frame-parent16" data-scroll-to="frameContainer">
                <section id="contact">
                    <div class="contact-us-parent">
                        <b class="contact-us1">COntact Us</b>
                        <b class="reach-out-to">Reach out to us for inquiries, support, or collaboration
                            opportunities.</b>
                    </div>
                    <div class="frame-parent17">
                        <div class="message-1-parent">
                            <img class="send-1-icon" alt="" src="{{ asset('images/message 1.svg') }}">
                            <b class="see-our-services">Your Email</b>
                        </div>
                        <div class="send-wrapper">
                            <b class="send-text see-our-services">Send</b>
                            <img class="send-icon-mobile" src="{{ asset('images/send 1.svg') }}" alt="Send Icon" />
                        </div>
                    </div>
                </section>
            </div>
            <div class="frame-parent18">
                <div class="frame-parent19">
                    <div class="contact-us-parent">
                        <div class="vector-parent">
                            <img class="vector-icon" alt="" src="{{ asset('images/logo-pc-shop1.png') }}">
                        </div>
                        <div class="contrary-to-popular-container">
                            <p class="solusi-teknologi">Contrary to popular belief, Lorem Ipsum is not simply random
                                text. It has roots in a piece of classical Latin literature from 45 BC.</p>
                        </div>
                    </div>
                    <div class="group-parent">
                        <img class="group-icon" alt="" src="{{ asset('images/fb.svg') }}">

                        <img class="group-icon" alt="" src="{{ asset('images/twitter.svg') }}">

                        <img class="group-icon" alt="" src="{{ asset('images/Ig.svg') }}">

                    </div>
                </div>
                <div class="frame-wrapper3">
                    <div class="contact-us-parent">
                        <b class="meet-us">Meet Us</b>
                        <div class="div">+6285298008009273</div>
                        <div class="div">pcshop@gmail.com</div>
                        <div class="custom-solutions-parent">
                            <div class="div">Lhokseumawe</div>
                            <div class="bd23200">BD23200</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('navMenu');
    const navLinks = document.querySelectorAll('.nav-link');

    let menuOpen = false;

    hamburger.addEventListener('click', function () {
        navMenu.classList.toggle('show');
        menuOpen = !menuOpen;
        hamburger.innerHTML = menuOpen ? '&times;' : '&#9776;';
    });

    document.addEventListener('click', function (e) {
        const isInsideNav = navMenu.contains(e.target);
        const isHamburger = hamburger.contains(e.target);
        if (!isInsideNav && !isHamburger && menuOpen) {
            navMenu.classList.remove('show');
            hamburger.innerHTML = '&#9776;';
            menuOpen = false;
        }
    });

    // Tutup navbar saat link diklik
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            navMenu.classList.remove('show');
            hamburger.innerHTML = '&#9776;';
            menuOpen = false;
        });
    });
});



document.addEventListener("DOMContentLoaded", function () {
    function setupInfiniteScroll() {
        let track = document.querySelector(".logo-track");
        track.innerHTML = ""; // Hapus isi sebelumnya untuk mencegah duplikasi berlebih

        let logos = [
            { src: "{{ asset('images/Lenovo.svg') }}", alt: "Lenovo" },
            { src: "{{ asset('images/Asus.svg') }}", alt: "Asus" },
            { src: "{{ asset('images/Acer.svg') }}", alt: "Acer" },
            { src: "{{ asset('images/Canon.svg') }}", alt: "Canon" },
            { src: "{{ asset('images/Hp.svg') }}", alt: "HP" }
        ];

        // Tambahkan logo awal
        logos.forEach(logo => {
            let img = document.createElement("img");
            img.src = logo.src;
            img.alt = logo.alt;
            img.classList.add("logo");
            track.appendChild(img);
        });

        let totalWidth = track.scrollWidth;

        // Duplikasi logo hingga track cukup panjang untuk looping
        while (totalWidth < window.innerWidth * 10) {
            logos.forEach(logo => {
                let img = document.createElement("img");
                img.src = logo.src;
                img.alt = logo.alt;
                img.classList.add("logo");
                track.appendChild(img);
            });
            totalWidth = track.scrollWidth; // Perbarui total lebar setelah menambah elemen
        }

        startScrolling();
    }

    function startScrolling() {
        let track = document.querySelector(".logo-track");
        let scrollSpeed = window.innerWidth < 767 ? 0.2 : 0.5; // Percepat di layar kecil
        let scrollPosition = 0;

        function scrollLogos() {
            scrollPosition -= scrollSpeed;
            track.style.transform = `translateX(${scrollPosition}px)`;

            // Reset posisi agar terus looping
            if (Math.abs(scrollPosition) >= track.scrollWidth / 2) {
                scrollPosition = 0;
            }

            requestAnimationFrame(scrollLogos);
        }

        scrollLogos();
    }

    // Inisialisasi saat halaman dimuat
    setupInfiniteScroll();

    // Jalankan ulang jika ukuran layar berubah
    window.addEventListener("resize", setupInfiniteScroll);
});

// Animasi untuk service dengan dot indicator
document.addEventListener("DOMContentLoaded", function () {
    let currentIndex = 0;
    const items = document.querySelectorAll(".destination-1-parent");
    const totalItems = items.length;
    const dots = document.querySelectorAll(".dot");
    let autoSlide = null;

    function isMobile() {
        return window.matchMedia("(max-width: 579px)").matches;
    }

    function updateSlide() {
        if (!isMobile()) return;
        const offset = -currentIndex * 100;
        items.forEach(item => {
            item.style.transform = `translateX(${offset}%)`;
            item.style.transition = "transform 0.5s ease-in-out";
        });
        updateDots();
    }

    function updateDots() {
        if (!isMobile()) return;
        dots.forEach((dot, index) => {
            dot.classList.toggle("active", index === currentIndex);
        });
    }


    function nextSlide() {
        if (!isMobile()) return;
        currentIndex = (currentIndex < totalItems - 1) ? currentIndex + 1 : 0;
        updateSlide();
    }

    function prevSlide() {
        if (!isMobile()) return;
        currentIndex = (currentIndex > 0) ? currentIndex - 1 : totalItems - 1;
        updateSlide();
    }

    function startAutoSlide() {
        if (!isMobile() || autoSlide) return;
        autoSlide = setInterval(nextSlide, 5000);
    }

    function stopAutoSlide() {
        if (autoSlide) {
            clearInterval(autoSlide);
            autoSlide = null;
        }
    }

    // OPTIONAL: klik titik manual (dot navigation)
    dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            if (!isMobile()) return;
            currentIndex = index;
            updateSlide();
            stopAutoSlide();
            startAutoSlide(); // reset timer
        });
    });

    // Setup awal
    updateSlide();
    startAutoSlide();

    // Reaktif saat resize
    window.addEventListener("resize", () => {
        if (!isMobile()) {
            dots.forEach(dot => dot.classList.remove("active"));
        } else {
            updateSlide();
        }
    });

});


//animasi untuk daftar project
document.addEventListener("DOMContentLoaded", function () {
    const track = document.querySelector(".project-track");
    let cards = document.querySelectorAll(".vector-group");
    const leftArrow = document.getElementById("arrow-left");
    const rightArrow = document.getElementById("arrow-right");

    if (cards.length === 0) return; // Cegah error jika tidak ada card

    const cardWidth = cards[0].offsetWidth + 40; // Lebar card + jarak antar card
    let totalCards = cards.length;
    let isAnimating = false;
    let autoSlide;

    // 🔥 **Clone cards agar looping tetap berjalan**
    if (totalCards > 0) {
        let cloneCount = Math.ceil(3 / totalCards) * totalCards;
        for (let i = 0; i < cloneCount; i++) {
            let clone = cards[i % totalCards].cloneNode(true);
            clone.classList.add("cloned");
            track.appendChild(clone);
        }
    }

    function startAutoSlide() {
        autoSlide = setInterval(() => {
            slideProjects("next");
        }, 3000);
    }

    function slideProjects(direction) {
        if (isAnimating) return;
        isAnimating = true;

        if (direction === "next") {
            track.style.transition = "transform 1s ease-in-out";
            track.style.transform = `translateX(${cardWidth}px)`;

            setTimeout(() => {
                track.style.transition = "none";
                let firstCard = track.firstElementChild;
                track.appendChild(firstCard); // Pindahkan kartu pertama ke belakang
                track.style.transform = "translateX(0)";
                isAnimating = false;
            }, 1000);
        } else if (direction === "prev") {
            let lastCard = track.lastElementChild;
            track.insertBefore(lastCard, track.firstElementChild);
            track.style.transition = "none";
            track.style.transform = `translateX(${cardWidth}px)`;

            setTimeout(() => {
                track.style.transition = "transform 1s ease-in-out";
                track.style.transform = "translateX(0)";
                isAnimating = false;
            }, 1000);
        }
    }

    function manualSlide(direction) {
        clearInterval(autoSlide);
        slideProjects(direction);
        startAutoSlide();
    }

    // 🔥 **Hanya navigasi dengan tombol, tidak ada swipe**
    rightArrow.addEventListener("click", () => manualSlide("next"));
    leftArrow.addEventListener("click", () => manualSlide("prev"));

    startAutoSlide(); // Mulai animasi otomatis
});



//popup project
document.addEventListener("DOMContentLoaded", function () {
    let modal = document.getElementById("projectModal");
    let closeModal = document.querySelector(".close");

    // Pastikan modal tetap tersembunyi saat halaman dimuat
    modal.style.display = "none";

    // Event untuk tombol "Show Project"
    document.querySelectorAll(".show-project-btn").forEach(button => {
        button.addEventListener("click", function () {
            let name = this.getAttribute("data-name");
            let mitra = this.getAttribute("data-mitra");
            let thumbnail = this.getAttribute("data-thumbnail");

            document.getElementById("modalTitle").innerText = name;
            document.getElementById("modalMitra").innerText = mitra;
            document.getElementById("modalThumbnail").src = thumbnail;

            modal.style.display = "flex"; // Tampilkan modal saat tombol diklik
        });
    });

    // Event untuk menutup modal saat tombol close diklik
    closeModal.addEventListener("click", function () {
        modal.style.display = "none";
    });

    // Event untuk menutup modal saat klik di luar area modal
    window.addEventListener("click", function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
});
</script>
