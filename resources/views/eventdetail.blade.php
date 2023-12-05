<x-app-layout>
    <x-slot name="header">
        <h2 class="h2"><b>[Nama Event]</b></h2>
        <p class="text-secondary">[jumlah] peserta terdaftar</p>
        <p class="text-secondary">Diselenggarakan oleh [Nama Grup Penyelenggara]</p>
    </x-slot>

    <div class="row">
        <div class="col">
            <figure class="figure">
                <img src="/img/event3.jpg" class="figure-img img-fluid rounded" alt="..." style="max-width: 550px;">
            </figure>
        </div>
        <div class="col">
            <h5 class="h5"><strong>[Nama Grup]</strong></h5>
            <p class="h6 mt-3 text-body-tertiary"><i class="bi bi-people"></i> 100 orang</p>
            <p class="h6 mt-3 text-body-tertiary"><i class="bi bi-person-check"></i> Dibuat oleh <b>Tester Bro</b></p>
        </div>
    </div>
</x-app-layout>