<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="initial-scale=1, width=device-width">

  	<link rel="stylesheet"  href="{{ asset('css/product.css') }}" />
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
          					<img class="vector-icon" alt="" src="{{ asset('images/Vector.svg') }}">
          					<div class="pc-shop">
                                <a href="/">PC Shop</a>
                            </div>
        				</div>
        				<div class="home-parent">
            				<a href="/" class="nav-link">Home</a>
          					<a href="{{ route ('katalog') }}" class="nav-link">Product</a>
          					<a href="/#service" class="nav-link">Service</a>
          					<a href="/#project" class="nav-link">Project</a>
          					<a href="/#contact" class="nav-link">Contact Us</a>
        				</div>
      			</div>
    		</div>
    		<div class="frame-group">
      			<div class="rectangle-parent">
        				<img class="frame-child" alt="" src="{{ asset('images/pcshop.png') }}">

        				<div class="button-klik">
          					<div class="button-hover">
            						<div class="button-wrapper">
              							<div class="button">Pesan Sekarang</div>
            						</div>
          					</div>
        				</div>
      			</div>
      			<div class="laptop-axioo-hype-5-amd-x6-r-parent">
        				<b class="laptop-axioo-hype">LAPTOP AXIOO HYPE 5 AMD X6 | Ryzen 5 6600H 16GB 512GB Windows 11</b>
        				<b class="rp7449000">Rp7.449.000</b>
        				<b class="deskripsi-produk">Deskripsi Produk</b>
        				<div class="frame-wrapper">
          					<div class="processor-amd-ryzen-5-6600h-wrapper">
            						<div class="processor-amd-ryzen-container">
              							<p class="processor-amd-ryzen">Processor: AMD Ryzen 5-6600H (3.3GHz Base, 4.5Ghz Turbo, 6 Core 12 Threads, Base TDP:45W) Graphics: AMD Radeon 660M LCD 14" inch IPS (16:10) Display / Resolution FHD 1920x1200 Keyboard: Backlit Keyboard Memory 16GB ( 2x SODIMM DDR5 Up to 64GB Dual Channel,Frequency Up to 4800MHz) Storage 512 GB M.2 NVMe PCIe Gen. 4 x4  O.S Windows 11 (64-bit) </p>
              							<p class="processor-amd-ryzen">Ports 2x USB 3.0 Gen1 Type A ports 1x USB 2.0 ports 1x USB 3.2 Gen 1 Type C port (Full Function: Data, Power, Video) 1x USB 3.2 Gen 2 Type C port (Full Function: Data, Power, Video) 1x 3.5mm 2-in-1 Audio Combo Jack 1x HDMI 1.4 output port </p>
              							<p class="processor-amd-ryzen">Power Management:</p>
              							<p class="processor-amd-ryzen">- AC Adapter 100W PD Charger</p>
              							<p class="processor-amd-ryzen">- Embedded 3 cells Li-polymer battery pack, 11.55V,58Wh, 5.050mAh</p>
              							<p class="processor-amd-ryzen">&nbsp;</p>
              							<p class="processor-amd-ryzen">Connection:</p>
              							<p class="processor-amd-ryzen">- Wi-Fi 6 Mediatek MT7921 ac/b/g/n/ax</p>
              							<p class="processor-amd-ryzen">- Bluetooth 5.2</p>
              							<p class="processor-amd-ryzen">&nbsp;</p>
              							<p class="processor-amd-ryzen">Security:</p>
              							<p class="processor-amd-ryzen">- Kensington lock slot</p>
              							<p class="processor-amd-ryzen">- TPM 2.0</p>
              							<p class="processor-amd-ryzen">&nbsp;</p>
              							<p class="processor-amd-ryzen">Bios AMI</p>
              							<p class="processor-amd-ryzen">&nbsp;</p>
              							<p class="processor-amd-ryzen">Dimension: 311(W) x 217.8(D) x 17,3(H)mm</p>
              							<p class="processor-amd-ryzen">weight: 1.34 Kg</p>
              							<p class="processor-amd-ryzen">Other Design: 180° Hinge Rotate</p>
            						</div>
          					</div>
        				</div>
      			</div>
    		</div>
  	</div>




  	<script>
    		var homeText = document.getElementById("homeText");
    		if(homeText) {
      			homeText.addEventListener("click", function (e) {
        				// Add your code here
      			});
    		}</script></body>
</html>
