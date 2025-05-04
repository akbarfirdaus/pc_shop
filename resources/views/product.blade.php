<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">

    <link rel="stylesheet" href="{{ asset('css/product.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700;900&display=swap" />
</head>

<body>
    <div class="view-produk">
        <div class="view-produk-child">
        </div>
        <div class="view-produk-item">
        </div>
        <img class="objects-icon" alt="" src="OBJECTS.png">

        <img class="objects-icon1" alt="" src="OBJECTS.svg">

        <div class="view-produk-inner">
            <div class="frame-parent">
                <div class="vector-parent">
                    <a href="/">
                        <img class="vector-icon" alt="" src="{{ asset('images/logo-pc-shop1.png') }}">
                    </a>
                </div>
                <div class="home-parent" id="navMenu">
                    <a href="/" class="nav-link">Home</a>
                    <a href="{{ route('katalog') }}" class="nav-link">Product</a>
                    <a href="/#service" class="nav-link">Service</a>
                    <a href="/#project" class="nav-link">Project</a>
                    <a href="/#contact" class="nav-link">Contact Us</a>
                </div>
                <div class="hamburger" id="hamburger">&#9776;</div>
            </div>
        </div>
        <div class="frame-group">
            <div class="rectangle-parent">
                <img class="frame-child" alt="" src="{{ asset('storage/' . $produk->thumbnail) }}">

                <div class="button-klik" onclick="kirimPesan()">
                    <div class="button-hover">
                        <div class="button-wrapper">
                            <div class="button">Pesan Sekarang</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="laptop-axioo-hype-5-amd-x6-r-parent">
                <b class="laptop-axioo-hype">{{ $produk->name }}</b>
                <b class="rp7449000">{{ $produk->harga }}</b>
                <b class="deskripsi-produk">Deskripsi Produk</b>
                <div class="frame-wrapper">
                    <div class="processor-amd-ryzen-5-6600h-wrapper">
                        <div class="processor-amd-ryzen-container">
                            <p class="processor-amd-ryzen">
                                {!! $produk->deskripsi !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</body>
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
    const hamburger = document.querySelector(".hamburger");
    const menu = document.querySelector(".home-parent");

    hamburger.addEventListener("click", function () {
    menu.classList.toggle("show-menu");
    });
});

        document.addEventListener("DOMContentLoaded", function() {
            const filterButtons = document.querySelectorAll(".filter-btn");
            const products = document.querySelectorAll(".product-item");

            filterButtons.forEach(button => {
                button.addEventListener("click", function() {
                    const filter = this.getAttribute("data-filter");
                    console.log(`Tombol ${filter} diklik`); // Debugging

                    products.forEach(product => {
                        const productCategory = product.getAttribute("data-category");
                        console.log(`Produk ${productCategory} dicek`); // Debugging

                        if (filter === "all" || productCategory === filter) {
                            product.classList.remove("hidden");
                        } else {
                            product.classList.add("hidden");
                        }
                    });
                });
            });
        });

        var homeText = document.getElementById("homeText");
        if (homeText) {
            homeText.addEventListener("click", function(e) {
                // Add your code here
            });
        }

        function kirimPesan() {
            let produkNama = "{{ $produk->name }}";
            let harga = "{{ $produk->harga }}";

            // Tambahkan pemisah ribuan pada harga
            let hargaFormatted = new Intl.NumberFormat('id-ID').format(harga);

            // Format pesan dengan enter (newline)
            let pesan = `Hai Min, Mau Nanya Produk dong!!!\n\nNama Produk: ${produkNama}\nHarga: Rp ${hargaFormatted}`;

            // Encode pesan agar URL tidak error
            let url = `https://web.whatsapp.com/send?phone=6282383974449&text=${encodeURIComponent(pesan)}`;

            window.open(url, '_blank'); // Buka di tab baru
        }
    </script>
</html>
