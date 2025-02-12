@extends('dashboard.layouts.main')

@section('content')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Profile Statistics</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
                <div class="row">
                    <div class="col-8 col-lg-4 col-md-8">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon purple mb-2">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Profile Views</h6>
                                        <h6 class="font-extrabold mb-0">112.000</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-lg-4 col-md-8">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon blue mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="bag">
                                                <path fill="#ffffff"
                                                    d="M6.4229,0.7125 C8.0229,-0.2375 10.0229,-0.2375 11.6229,0.7125 C13.2229,1.6625 14.1629,3.4125 14.0929,5.2625 L14.0929,5.2625 L14.0929,5.4925 C15.3529,5.4925 16.6829,6.3725 17.1429,8.5125 L17.1429,8.5125 L17.9129,14.5025 C18.4839,18.4125 16.2129,20.0025 13.1629,20.0025 L13.1629,20.0025 L4.8729,20.0025 C1.8139,20.0025 -0.5271,18.9025 0.1029,14.5025 L0.1029,14.5025 L0.8829,8.5125 C1.0029,7.6225 1.4329,6.7925 2.1029,6.1825 C2.6139,5.7335 3.2729,5.4925 3.9529,5.4925 L3.9529,5.4925 L3.9529,5.2625 C3.8729,3.4125 4.8239,1.6625 6.4229,0.7125 Z M11.8929,8.7125 C11.4039,8.7125 11.0029,9.1025 11.0029,9.5925 C11.0029,10.0725 11.4039,10.4725 11.8929,10.4725 C12.1229,10.4725 12.3529,10.3825 12.5129,10.2125 C12.6829,10.0525 12.7729,9.8225 12.7729,9.5925 C12.7729,9.1025 12.3729,8.7125 11.8929,8.7125 Z M6.0929,8.7125 C5.6029,8.7125 5.2029,9.1025 5.2029,9.5925 C5.2029,10.0725 5.6029,10.4725 6.0929,10.4725 C6.5829,10.4725 6.9729,10.0725 6.9729,9.5925 C6.9729,9.1025 6.5829,8.7125 6.0929,8.7125 Z M9.0029,1.7425 C7.0529,1.7425 5.4729,3.3225 5.4729,5.2625 L5.4729,5.2625 L5.4729,5.4835 L12.5429,5.4835 L12.5429,5.2625 C12.5429,3.3225 10.9629,1.7425 9.0029,1.7425 Z"
                                                    transform="translate(3 2)" class="color200e32 svgShape"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Produk</h6>
                                        <h6 class="font-extrabold mb-0">183.000</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-lg-4 col-md-8">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon green mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#ffffff" viewBox="0 0 128 128" id="kanbanboard">
                                                <rect width="97" height="97" x="113" y="113" stroke="#ffffff" stroke-width="7" rx="27" transform="rotate(-180 113 113)" class="colorStroke000000 svgStroke"></rect>
                                                <path stroke="#31728a" stroke-linecap="round" stroke-width="7" d="M65 37L65 63M86 37L86 77M44 37L44 88" class="colorStroke000000 svgStroke"></path>
                                              </svg>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Projek</h6>
                                        <h6 class="font-extrabold mb-0">80.000</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Profile Visit</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-profile-visit"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-body py-4 px-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('assets/compiled/jpg/1.jpg') }}" alt="Face 1">
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">John Duck</h5>
                                <h6 class="text-muted mb-0">@johnducky</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('scripts')
    <script>
        // Fungsi untuk mendapatkan 7 hari terakhir
        function getLast7Days() {
            const days = [];
            const today = new Date();

            for (let i = 6; i >= 0; i--) {
                const d = new Date();
                d.setDate(today.getDate() - i);
                days.push(d.toLocaleDateString('id-ID', {
                    weekday: 'short',
                    day: '2-digit'
                }));
            }
            return days;
        }

        var optionsProfileVisit = {
            annotations: {
                position: "back",
            },
            dataLabels: {
                enabled: false,
            },
            chart: {
                type: "line",
                height: 300,
            },
            stroke: {
                curve: "smooth", // Membuat garis halus
                width: 3
            },
            markers: {
                size: 5, // Menambahkan titik pada setiap nilai
                colors: "#435ebe",
                strokeColors: "#fff",
                strokeWidth: 2
            },
            series: [{
                name: "Views",
                data: [120, 150, 180, 210, 190, 250, 300] // Data jumlah view selama 7 hari terakhir
            }],
            colors: ["#435ebe"],
            xaxis: {
                categories: getLast7Days(), // Mengambil nama hari dari fungsi
            },
            yaxis: {
                title: {
                    text: "Jumlah View",
                },
            },
            tooltip: {
                theme: "dark",
            }
        };

        var chartProfileVisit = new ApexCharts(
            document.querySelector("#chart-profile-visit"),
            optionsProfileVisit
        );

        chartProfileVisit.render();
    </script>
@endsection
