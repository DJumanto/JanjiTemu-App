<x-app-layout>
    <x-slot name="header">
        <h1 class="display-6"><b>Selamat datang,</b> <b><strong> [User]</strong></b></h1>
    </x-slot>

    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> -->
    <!-- Part Upcoming Event & More -->
    <div class="row">
        <div class="col-md-9 ms-5 mt-5">
            <h2 class="h2">Event yang akan datang</h2 </div>
        </div>
        <div class="col-md ms-auto mt-5">
            <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#" style="color:#7879DF; font-weight:600;">
                <br>
                <h6>Lihat selengkapnya</h6>
            </a>
        </div>
    </div>

    <!-- Part Event Card -->
    <div class="row ms-4 mt-4">
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="/img/event1.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><a class="link-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Business Insight 2023</a></h5>
                    <p class="card-text">Hosted by : Proxsis Indonesia</p>
                    <p><i class="bi bi-calendar4-event"></i> Senin, 27 NOV 2023 - 9:00 WIB</p>
                    <h6><i class="bi bi-ticket-perforated"></i> FREE</h6>
                    <div class="float-end">
                        <a href="#" class="btn" style="text-decoration: underline; text-decoration-color: #7879DF; text-decoration-thickness: 1.5px; text-underline-offset: 10px; font-weight:700; color:#7879DF">Daftar sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="/img/event2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Kidscares Charity Night</h5>
                    <p class="card-text">Hosted by : Zanes Kidscare</p>
                    <p><i class="bi bi-calendar4-event"></i> Minggu, 20 OCT 2023 - 11:30 WIB</p>
                    <h6><i class="bi bi-ticket-perforated"></i> FREE</h6>
                    <div class="float-end">
                        <a href="#" class="btn" style="text-decoration: underline; text-decoration-color: #7879DF; text-decoration-thickness: 1.5px; text-underline-offset: 10px; font-weight:700; color:#7879DF">Daftar sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="/img/event3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Brooklyn NYC Dribble Meetup</h5>
                    <p class="card-text">Hosted by : Brooklyn HQ</p>
                    <p><i class="bi bi-calendar4-event"></i> Kamis, 30 JUN 2023 - 19:00 WIB</p>
                    <h6><i class="bi bi-ticket-perforated"></i> FREE</h6>
                    <div class="float-end">
                        <a href="#" class="btn" style="text-decoration: underline; text-decoration-color: #7879DF; text-decoration-thickness: 1.5px; text-underline-offset: 10px; font-weight:700; color:#7879DF">Daftar sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>

    <!-- Part Your Event -->
    <div class="row">
        <div class="col-md-9 ms-5 mt-5">
            <h2 class="h4">Event Anda</h2 </div>
        </div>
        <div class="col-md ms-auto mt-5">
            <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#" style="color:#7879DF; font-weight:600;">
                <br>
                <h6>Lihat semua</h6>
            </a>
        </div>
    </div>
    <!-- Part Your Event Card -->
    <div class="row ms-4 mt-4">
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="/img/event4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><a class="link-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Autumn Party</a></h5>
                    <p class="card-text">Hosted by : Weather Indonesia</p>
                    <p><i class="bi bi-calendar4-event"></i> Minggu, 15 OCT 2023 - 9:00 WIB</p>
                    <h6><i class="bi bi-ticket-perforated"></i> FREE</h6>
                    <div class="float-end">
                        <a href="#" class="btn" style="text-decoration: underline; text-decoration-color: #7879DF; text-decoration-thickness: 1.5px; text-underline-offset: 10px; font-weight:700; color:#7879DF">Daftar sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="/img/event5.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Kadin Banten Expo 2022</h5>
                    <p class="card-text">Hosted by : Pemprov Banten</p>
                    <p><i class="bi bi-calendar4-event"></i> Minggu, 19 DEC 2023 - 11:30 WIB</p>
                    <h6><i class="bi bi-ticket-perforated"></i> FREE</h6>
                    <div class="float-end">
                        <a href="#" class="btn" style="text-decoration: underline; text-decoration-color: #7879DF; text-decoration-thickness: 1.5px; text-underline-offset: 10px; font-weight:700; color:#7879DF">Daftar sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="/img/event6.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Control</h5>
                    <p class="card-text">Hosted by : Remedy Entertainment</p>
                    <p><i class="bi bi-calendar4-event"></i> Kamis, 27 AUG 2023 - 19:00 WIB</p>
                    <h6><i class="bi bi-ticket-perforated"></i> FREE</h6>
                    <div class="float-end">
                        <a href="#" class="btn" style="text-decoration: underline; text-decoration-color: #7879DF; text-decoration-thickness: 1.5px; text-underline-offset: 10px; font-weight:700; color:#7879DF">Daftar sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="/img/event7.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Extreme Off-road</h5>
                    <p class="card-text">Hosted by : Off-Road People</p>
                    <p><i class="bi bi-calendar4-event"></i> Kamis, 25 AUG 2023 - 19:00 WIB</p>
                    <h6><i class="bi bi-ticket-perforated"></i> FREE</h6>
                    <div class="float-end">
                        <a href="#" class="btn" style="text-decoration: underline; text-decoration-color: #7879DF; text-decoration-thickness: 1.5px; text-underline-offset: 10px; font-weight:700; color:#7879DF">Daftar sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>