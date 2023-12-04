<x-app-layout>
    <x-slot name="header">
        <div class="row justify-content-start">
            <div class="col-3 ms-5">
                <form class="d-flex" role="search">
                    <input class="form-control me-2 rounded" type="search" placeholder="Nama grup" aria-label="Search" style="border-color: rgba(0, 0, 0, 0.25);">
                    <button class="btn" style="background-color:#7879DF; color:white;" type="submit">Cari</button>
                </form>
            </div>
        </div>
    </x-slot>

    <!-- Part Your Group -->
    <div class="row">
        <div class="col-md-9 ms-5 mt-3 mb-3">
            <h2 class="h4">Grup Anda</h2 </div>
        </div>
    </div>
    <!-- Part Your Group Card -->
    <div class="grid gap-0 row-gap-3" id="group-card">
        <div class="card">
            <div class="position-relative">
                <img src="/img/event4.jpg" class="card-img-top rounded-circle img-thumbnail position-absolute start-0 top-0 ms-2 mt-2" alt="..." style="width: 70px; height: 70px; object-fit: cover;">
            </div>
            <div class="card-body">
                <div class="ms-5">
                    <h3 class="card-title ms-4"><strong>Autumn Party Group</strong></h3>
                </div>
                <div class="float-end">
                    <a href="#" class="btn" style="text-decoration: underline; text-decoration-color: #7879DF; text-decoration-thickness: 1.5px; text-underline-offset: 10px; font-weight:700; color:#7879DF">Lihat grup</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="position-relative">
                <img src="/img/event5.jpeg" class="card-img-top rounded-circle img-thumbnail position-absolute start-0 top-0 ms-2 mt-2" alt="..." style="width: 70px; height: 70px; object-fit: cover;">
            </div>
            <div class="card-body">
                <div class="ms-5">
                    <h3 class="card-title ms-4"><strong>Kadin Expo 2023 Group</strong></h3>
                </div>
                <div class="float-end">
                    <a href="#" class="btn" style="text-decoration: underline; text-decoration-color: #7879DF; text-decoration-thickness: 1.5px; text-underline-offset: 10px; font-weight:700; color:#7879DF">Lihat grup</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="position-relative">
                <img src="/img/event6.jpg" class="card-img-top rounded-circle img-thumbnail position-absolute start-0 top-0 ms-2 mt-2" alt="..." style="width: 70px; height: 70px; object-fit: cover;">
            </div>
            <div class="card-body">
                <div class="ms-5">
                    <h3 class="card-title ms-4"><strong>Control Group</strong></h3>
                </div>
                <div class="float-end">
                    <a href="#" class="btn" style="text-decoration: underline; text-decoration-color: #7879DF; text-decoration-thickness: 1.5px; text-underline-offset: 10px; font-weight:700; color:#7879DF">Lihat grup</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="position-relative">
                <img src="/img/event2.jpg" class="card-img-top rounded-circle img-thumbnail position-absolute start-0 top-0 ms-2 mt-2" alt="..." style="width: 70px; height: 70px; object-fit: cover;">
            </div>
            <div class="card-body">
                <div class="ms-5">
                    <h3 class="card-title ms-4"><strong>Kids Care Group</strong></h3>
                </div>
                <div class="float-end">
                    <a href="#" class="btn" style="text-decoration: underline; text-decoration-color: #7879DF; text-decoration-thickness: 1.5px; text-underline-offset: 10px; font-weight:700; color:#7879DF">Lihat grup</a>
                </div>
            </div>
        </div>
    </div>

    <br><br><br>
</x-app-layout>