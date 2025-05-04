<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">

    <link rel="stylesheet" href="{{ asset('css/katalog.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700;900&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Circular Std:wght@400&display=swap" />

</head>

<body>
    <div class="katalog-page">
        <div class="katalog-page-child">
        </div>
        <div class="katalog-page-item">
        </div>
        <img class="objects-icon" alt="" src="{{ asset('images/Vector.svg') }}">

        <img class="objects-icon1" alt="" src="{{ asset('images/Vector.svg') }}">

        <div class="frame-parent">
            <div class="frame-wrapper">
                <div class="frame-group">
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
            <div class="frame-container">
                <div class="katalog-produk-parent">
                    <b class="katalog-produk">Katalog Produk</b>
                    <div class="temukan-berbagai-produk-container">
                        <p class="temukan-berbagai-produk">
                            Temukan berbagai produk berkualitas tinggi yang dirancang untuk memenuhi kebutuhan Anda. Dari laptop dan komputer terbaru, hingga aksesori penting, katalog kami menawarkan beragam
                            pilihan untuk penggunaan pribadi maupun bisnis.
                        </p>
                    </div>
                </div>
                <div class="button-klik-parent filter-buttons">
                    <div class="button-klik">
                        <div class="button-hover">
                            <div class="button-wrapper">
                                <button class="filter-btn button active" data-filter="all">All</button>
                            </div>
                        </div>
                    </div>
                    @foreach ($kategoris as $kategori)
                    <div class="button-klik">
                        <div class="button-hover">
                            <div class="button-wrapper">
                                <button class="filter-btn button"
                                data-filter="{{ $kategori->slug }}">{{ $kategori->name }}</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                    <div class="frame-parent1">
                        @foreach ($produks as $produk)
                            <div class="rectangle-parent">
                                <div class="product-item" data-category="{{ $produk->kategori->slug }}">
                                    <img class="frame-child" src="{{ asset('storage/' . $produk->thumbnail) }}"
                                        alt="{{ $produk->name }}">
                                    <div class="frame-parent2">
                                        <div class="frame-parent3">
                                            <div class="laptop-axioo-hype-5-amd-x6-r-wrapper">
                                                <div class="laptop-axioo-hype">
                                                    {{ $produk->name }}
                                                </div>
                                            </div>
                                            <b class="rp7449000">
                                                Rp. {{ number_format($produk->harga, 0, ',', '.') }}
                                            </b>
                                        </div>
                                        <div class="button-klik2">
                                            <div class="button-hover4">
                                                <div class="button-wrapper1">
                                                    <a href="{{ route('katalog.show', ['slug' => $produk->slug]) }}" class="button">View Product</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
            <div class="frame-parent66">
                <div class="frame-parent67">
                    <div class="meet-us-parent">
                        <div class="vector-parent">
                            <img class="vector-icon" alt="" src="{{ asset('images/logo-pc-shop1.png') }}">
                        </div>
                        <div class="contrary-to-popular-container">
                            <p class="hingga-aksesori-penting">Contrary to popular belief, Lorem Ipsum is not simply
                                random text. It has roots</p>
                            <p class="hingga-aksesori-penting">in a piece of classical Latin literature from 45 BC.</p>
                        </div>
                    </div>
                    <div class="group-parent">
                        <img class="group-icon" alt="" src="{{ asset('images/fb.svg') }}">

                        <img class="group-icon" alt="" src="{{ asset('images/twitter.svg') }}">

                        <img class="group-icon" alt="" src="{{ asset('images/Ig.svg') }}">
                    </div>
                </div>
                <div class="frame-wrapper1">
                    <div class="meet-us-parent">
                        <b class="meet-us">Meet Us</b>
                        <div class="div">+6285298008009273</div>
                        <div class="div">pcshop@gmail.com</div>
                        <div class="lhokseumawe-parent">
                            <div class="div">Lhokseumawe</div>
                            <div class="bd23200">BD23200</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const filterButtons = document.querySelectorAll(".filter-btn");

        filterButtons.forEach(button => {
            button.addEventListener("click", function () {
                // Hapus class 'active' dari semua tombol
                filterButtons.forEach(btn => btn.classList.remove("active"));

                // Tambahkan class 'active' hanya ke tombol yang diklik
                this.classList.add("active");
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        const hamburger = document.getElementById('hamburger');
        const navMenu = document.getElementById('navMenu');

        let menuOpen = false;

        hamburger.addEventListener('click', function () {
            menuOpen = !menuOpen;

            if (menuOpen) {
                navMenu.classList.add('show');
            } else {
                navMenu.classList.remove('show');
            }

            hamburger.innerHTML = menuOpen ? '&times;' : '&#9776;';
        });
    });

document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll(".filter-btn");
    const productWrappers = document.querySelectorAll(".rectangle-parent");

    filterButtons.forEach(button => {
        button.addEventListener("click", function (e) {
            e.preventDefault();
            const filter = this.getAttribute("data-filter");

            // Ganti tombol aktif
            filterButtons.forEach(btn => btn.classList.remove("active"));
            this.classList.add("active");

            productWrappers.forEach(wrapper => {
                const product = wrapper.querySelector(".product-item");
                const productCategory = product.getAttribute("data-category");

                if (filter === "all" || productCategory === filter) {
                    wrapper.style.display = "flex"; // atau "block" jika bukan flex
                } else {
                    wrapper.style.display = "none";
                }
            });
        });
    });
});
</script>
</html>
