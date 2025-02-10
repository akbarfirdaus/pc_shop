<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<!-- Pemanggilan CSS Lokal -->
  	<link rel="stylesheet"  href="{{ asset('css/style.css') }}"/>

  	<!-- Pemanggilan Google Fonts -->
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@700;900&display=swap"/>
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap"/>
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Circular Std:wght@400&display=swap" />

</head>
<body>

  	<div class="landing-page">
    		<div class="landing-page-child">
    		</div>
    		<div class="landing-page-item">
    		</div>
    		{{-- <img class="objects-icon" alt="" src="OBJECTS.png">

    		<img class="objects-icon1" alt="" src="OBJECTS.svg"> --}}

    		<div class="frame-parent">
      			<div class="frame-group">
        				<div class="vector-parent">
          					<img class="vector-icon" alt="" src="{{ asset('images/Vector.svg') }}">
          					<div class="pc-shop">
                                <a href="/">PC Shop</a>
                            </div>
        				</div>
        				<div class="home-parent">
          					<a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
          					<a href="{{ route('katalog') }}" class="nav-link {{ Request::is('katalog*') ? 'active' : '' }}">Product</a>
          					<a href="#service" class="nav-link">Service</a>
          					<a href="#project" class="nav-link">Project</a>
          					<a href="#contact" class="nav-link">Contact Us</a>
        				</div>
      			</div>
      			<div class="frame-container">
        				<div class="frame-div">
          					<div class="best-technology-solutions-parent">
            						<b class="best-technology-solutions">BEST TECHNOLOGY SOLUTIONS</b>
            						<img class="work-1-icon" alt="" src="{{ asset('images/work 1.svg') }}">

          					</div>
          					<b class="solusi-teknologi-tepat-container">
            						<p class="solusi-teknologi">Solusi Teknologi,</p>
            						<p class="solusi-teknologi">Tepat dan Terpercaya</p>
          					</b>
          					<div class="melayani-penjualan-dan-container">
            						<p class="solusi-teknologi">“Melayani penjualan dan perbaikan laptop, </p>
            						<p class="solusi-teknologi">komputer, serta printer dengan sepenuh hati."</p>
          					</div>
          					<div class="frame-parent1" id="frameContainer1">
            						<div class="see-our-services-wrapper">
              							<b class="see-our-services">See Our Services</b>
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
            						<img class="destination-1-icon" alt="" src="{{ asset('images/destination 1.png') }}">

            						<div class="pembuatan-aplikasi-web-mobil-parent">
              							<b class="pembuatan-aplikasi-web">Pembuatan Aplikasi Web & Mobile</b>
              							<div class="kami-membantu-anda">Kami membantu Anda menciptakan aplikasi web dan mobile yang sesuai dengan kebutuhan bisnis, mulai dari desain hingga implementasi.</div>
            						</div>
          					</div>
          					<div class="destination-1-parent">
            						<img class="destination-1-icon" alt="" src="{{ asset('images/cloudy 1.png') }}">

            						<div class="pembuatan-aplikasi-web-mobil-parent">
              							<b class="pembuatan-aplikasi-web">Instalasi Infrastruktur IT</b>
              							<div class="kami-membantu-anda">Kami menawarkan layanan instalasi jaringan, pemasangan CCTV, hingga sistem keamanan digital lainnya, memastikan bisnis Anda memiliki fondasi teknologi yang kuat dan andal.</div>
            						</div>
          					</div>
          					<div class="destination-1-parent">
            						<img class="destination-1-icon" alt="" src="{{ asset('images/booking 1.png') }}">

            						<div class="pembuatan-aplikasi-web-mobil-parent">
              							<b class="pembuatan-aplikasi-web">Konsultasi IT untuk Bisnis</b>
              							<div class="kami-membantu-anda">Layanan konsultasi kami membantu Anda menemukan solusi IT yang paling efektif untuk mendukung pertumbuhan bisnis, mulai dari perencanaan hingga implementasi.</div>
            						</div>
          					</div>
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
          					<div class="group-parent">
            						<div class="rectangle-group">
              							<div class="group-child">
              							</div>
              							<img class="arrow-left-1-icon" alt="" src="{{ asset('images/arrow-left 1.svg') }}">

            						</div>
            						<div class="rectangle-container">
              							<div class="group-item">
              							</div>
              							<img class="arrow-left-2-icon" alt="" src="{{ asset('images/arrow-left 2.svg') }}">
            						</div>
          					</div>
        				</div>
                    </section>
                    <div class="project-track">
                        <div class="vector-group">
                            <img class="rectangle-icon" alt="" src="{{ asset('images/Rectangle 6.png') }}">
                            <div class="frame-parent7">
            						<div class="our-project-parent">
              							<div class="aplikasi-deteksi-apd-di-migas-wrapper">
                								<b class="aplikasi-deteksi-apd">Aplikasi Deteksi APD di Migas</b>
              							</div>
              							<div class="pertamina">Pertamina</div>
            						</div>
            						<div class="frame-wrapper">
                                        <div class="see-our-services-wrapper">
                                            <b class="see-our-services">Show Project</b>
                                        </div>
            						</div>
                                </div>
                            </div>
                            <div class="vector-group">
                                <img class="frame-child1" alt="" src="{{ asset('images/Rectangle 6 (1).png') }}">

                                <div class="frame-parent7">
                                    <div class="our-project-parent">
                                        <div class="aplikasi-deteksi-apd-di-migas-wrapper">
                                            <b class="aplikasi-deteksi-apd">Aplikasi Konsultasi Kesehatan</b>
                                        </div>
              							<div class="pertamina">Rumah Sakit Kesrem</div>
            						</div>
            						<div class="frame-wrapper">
              							<div class="see-our-services-wrapper">
                								<b class="see-our-services">Show Project</b>
              							</div>
            						</div>
          					</div>
        				</div>
        				<div class="vector-group">
          					<img class="rectangle-icon" alt="" src="{{ asset('images/Rectangle 6 (2).png') }}">

          					<div class="frame-parent7">
            						<div class="our-project-parent">
              							<div class="aplikasi-deteksi-apd-di-migas-wrapper">
                								<b class="aplikasi-deteksi-apd">Aplikasi Seleksi Peserta Magang</b>
              							</div>
              							<div class="pertamina">Dinas Sosial Kota Lhokseumawe</div>
            						</div>
            						<div class="frame-wrapper">
              							<div class="see-our-services-wrapper">
                                              <b class="see-our-services">Show Project</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="background-parent">
        			<img class="background-icon" alt="" src="{{ asset('images/palang.svg') }}">
                    <svg class="background-svg" width="300" height="300" viewBox="0 0 300 300">
                    <!-- Lingkaran Putus-putus -->
                    <circle cx="120" cy="120" r="80" stroke="red" stroke-dasharray="15, 10" stroke-width="10" fill="none" />

                    <!-- Pola Silang -->
                    <defs class="defs">
                        <pattern id="crossPattern" width="20" height="20" patternUnits="userSpaceOnUse">
                            <line x1="5" y1="5" x2="15" y2="15" stroke="orange" stroke-width="3"/>
                            <line x1="15" y1="5" x2="5" y2="15" stroke="orange" stroke-width="3"/>
                        </pattern>
                    </defs>
                    <rect x="100" y="80" width="180" height="150" fill="url(#crossPattern)"/>
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
                								<div class="group-inner">
                								</div>
                								<img class="icon-check" alt="" src="{{ asset('images/centang-oren.svg') }}">

              							</div>
              							<div class="custom-solutions-parent">
                								<b class="custom-solutions">Custom Solutions</b>
                								<div class="every-project-is-container">
                  									<p class="solusi-teknologi">Every project is tailored to meet the specific </p>
                  									<p class="solusi-teknologi">needs of your business.</p>
                								</div>
              							</div>
            						</div>
            						<div class="group-parent1">
              							<div class="rectangle-group">
                								<div class="rectangle-div">
                								</div>
                								<img class="icon-check" alt="" src="{{ asset('images/centang-kuning.svg') }}">

              							</div>
              							<div class="custom-solutions-parent">
                								<b class="see-our-services">High-Quality Results</b>
                								<div class="melayani-penjualan-dan-container">
                  									<p class="solusi-teknologi">Delivering high-quality outcomes aligned</p>
                  									<p class="solusi-teknologi">with the latest industry standards.</p>
                								</div>
              							</div>
            						</div>
            						<div class="group-parent1">
              							<div class="rectangle-group">
                								<div class="group-child1"></div>
                								<img class="icon-check" alt="" src="{{ asset('images/centang-pink.svg') }}">

              							</div>
              							<div class="custom-solutions-parent">
                								<b class="see-our-services">Cost-Effective Services</b>
                								<div class="melayani-penjualan-dan-container">
                  									<p class="solusi-teknologi">Affordable solutions without compromising </p>
                  									<p class="solusi-teknologi">quality.</p>
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
          					<b class="reach-out-to">Reach out to us for inquiries, support, or collaboration opportunities.</b>
        				</div>
        				<div class="frame-parent17">
          					<div class="message-1-parent">
            						<img class="send-1-icon" alt="" src="{{ asset('images/message 1.svg') }}">

            						<b class="see-our-services">Your Email</b>
          					</div>
          					<div class="send-wrapper">
            						<b class="see-our-services">Send</b>
          					</div>
        				</div>
                    </section>
      			</div>
      			<div class="frame-parent18">
        				<div class="frame-parent19">
          					<div class="contact-us-parent">
            						<div class="vector-parent">
              							<img class="vector-icon" alt="" src="{{ asset('images/Vector.svg') }}">

              							<div class="pc-shop">PC Shop</div>
            						</div>
            						<div class="contrary-to-popular-container">
              							<p class="solusi-teknologi">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots</p>
              							<p class="solusi-teknologi">in a piece of classical Latin literature from 45 BC.</p>
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
document.addEventListener("DOMContentLoaded", function () {
    let track = document.querySelector(".logo-track");
    let logos = track.children;
    let totalWidth = 0;

    // Hitung total lebar semua logo
    for (let logo of logos) {
        totalWidth += logo.offsetWidth + 20; // gap
    }

    // Duplikasi logo hingga track cukup panjang untuk looping
    while (totalWidth < window.innerWidth * 3) {
        for (let logo of [...logos]) {
            let clone = logo.cloneNode(true);
            track.appendChild(clone);
            totalWidth += clone.offsetWidth + 20;
        }
    }
});

document.addEventListener("DOMContentLoaded", function () {
    let track = document.querySelector(".project-track");
    let logos = track.children;
    let totalWidth = 0;

    // Hitung total lebar semua logo
    for (let logo of logos) {
        totalWidth += logo.offsetWidth + 20; // gap
    }

    // Duplikasi logo hingga track cukup panjang untuk looping
    while (totalWidth < window.innerWidth * 3) {
        for (let logo of [...logos]) {
            let clone = logo.cloneNode(true);
            track.appendChild(clone);
            totalWidth += clone.offsetWidth + 20;
        }
    }
});


    		// var productText = document.getElementById("productText");
    		// if(productText) {
      		// 	productText.addEventListener("click", function (e) {
        	// 			// Add your code here
      		// 	});
    		// }

    		// var serviceText = document.getElementById("serviceText");
    		// if(serviceText) {
      		// 	serviceText.addEventListener("click", function () {
        	// 			var anchor = document.querySelector("[data-scroll-to='frameContainer2']");
        	// 			if(anchor) {
          	// 				anchor.scrollIntoView({"block":"start","behavior":"smooth"})
        	// 			}
      		// 	});
    		// }


    		// var projectText = document.getElementById("projectText");
    		// if(projectText) {
      		// 	projectText.addEventListener("click", function () {
        	// 			var anchor = document.querySelector("[data-scroll-to='frameContainer1']");
        	// 			if(anchor) {
          	// 				anchor.scrollIntoView({"block":"start","behavior":"smooth"})
        	// 			}
      		// 	});
    		// }


    		// var contactUsText = document.getElementById("contactUsText");
    		// if(contactUsText) {
      		// 	contactUsText.addEventListener("click", function () {
        	// 			var anchor = document.querySelector("[data-scroll-to='frameContainer']");
        	// 			if(anchor) {
          	// 				anchor.scrollIntoView({"block":"start","behavior":"smooth"})
        	// 			}
      		// 	});
    		// }


    		// var frameContainer1 = document.getElementById("frameContainer1");
    		// if(frameContainer1) {
      		// 	frameContainer1.addEventListener("click", function () {
        	// 			var anchor = document.querySelector("[data-scroll-to='ourTopValue']");
        	// 			if(anchor) {
          	// 				anchor.scrollIntoView({"block":"start","behavior":"smooth"})
        	// 			}
      		// 	});
    		// }
  	</script>
