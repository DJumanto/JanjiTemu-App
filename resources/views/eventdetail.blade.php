<x-app-layout>
    <x-slot name="header">
        <h2 class="h2"><b>[Nama Event]</b></h2>
        <p class="text-secondary">[jumlah] peserta terdaftar</p>
        <p class="text-secondary">Diselenggarakan oleh <a class="link-underline link-underline-opacity-0" href="#">[Nama Grup Penyelenggara]</a></p>
    </x-slot>

    <div class="row">
        <div class="col-7">
            <figure class="figure">
                <img src="/img/event3.jpg" class="figure-img img-fluid rounded" alt="..." style="max-width: 550px;">
            </figure>
        </div>
        <div class="col">
            <h5 class="h5"><strong><a class="link-underline link-underline-opacity-0" href="">[Nama Grup Penyelenggara]</a></strong></h5>
            <p class="h6 mt-3 text-body-tertiary"><i class="bi bi-people"></i> [jumlah anggota grup] orang</p>
            <p class="h6 mt-3 text-body-tertiary"><i class="bi bi-person-check"></i> Dibuat oleh <b>Tester Bro</b></p>
            <br><br>
            <div class="card mb-5" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Pelaksanaan Event</h5>
                    <p class="card-text"><i class="bi bi-calendar4-event"></i> [Tanggal Pelaksanaan Event]</p>
                    <p class="card-text"><i class="bi bi-geo-alt"></i>[Tempat Pelaksanaan Event]</p>
                </div>
            </div>
            <!-- button to write a comment -->
            <!-- <div class="d-grid d-md-flex mt-5 justify-content-start">
                <button class="btn btn-info btn comment-btn me-5" href="#" role="button">Beri Komentar <i class="bi bi-chat-left-dots"></i></button>
            </div> -->
            <!-- button to register to the event -->
            <div class="d-grid d-md-flex mt-3 justify-content-start">
                <button class="btn btn-primary btn-lg custom-btn me-5" href="#" role="button">Daftar Event <i class="bi bi-plus-circle"></i></button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <h4 class="h4">Deskripsi Event</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit nesciunt impedit numquam in ex tempore excepturi ipsam nemo, iure sit perspiciatis nisi amet cum aut sapiente delectus aliquam? Veniam dicta distinctio, saepe doloribus incidunt facere ea perferendis! Quos ducimus tempore consequuntur animi repudiandae eius. Fugiat magni cum corrupti aut ratione repudiandae impedit perferendis modi ducimus porro quae quos dolorum dolor assumenda illum, explicabo possimus, quidem sint consequuntur, distinctio fuga molestiae. Dicta voluptates soluta vel ut commodi dolore omnis, magnam officia aliquam itaque voluptatem consequatur iusto laborum dignissimos deserunt! Optio, in blanditiis. Vero sunt excepturi neque inventore eos ipsum amet maiores.</p>
        </div>
    </div>
    <br><br>
</x-app-layout>