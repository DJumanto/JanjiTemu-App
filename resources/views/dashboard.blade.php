<x-app-layout>
    <x-slot name="header">
        <div class="container">
            <div class="row"><br><br><br></div>

            <!-- Part Awal -->
            <div class="row">
                <div class="col-md ms-5">
                    <h1 class="mb-3">
                        Platform yang <strong>mempertemukan</strong> semua orang dengan <strong>ketertarikan yang
                            sama</strong>
                    </h1>
                    <p>
                        Apa pun yang Anda sukai, mulai dari hiking dan membaca hingga networking dan berbagi keterampilan,
                        ada
                        ribuan orang yang membagikannya di JanjiTemu. Acara nonstop setiap hari — Tunggu apalagi? mari
                        bersenang-senang!
                    </p>
                    <button type="button" class="btn" style="background-color:#7879DF; color:white;">Daftar disini</button>
                </div>
                <div class="col-md">
                    <img src="/img/friends2-res-no.png" alt="">
                </div>
            </div>
            <div class="row"><br><br></div>

            <!-- Part Upcoming Event & More -->
            <div class="row">
                <div class="col-md-9 ms-5 mt-5">
                    <h2>Event yang akan datang</h2 </div>
                </div>
                <div class="col-md ms-auto mt-5">
                    <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#" style="color:#7879DF;">
                        <br>
                        <h6>Lihat selengkapnya</h6>
                    </a>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>