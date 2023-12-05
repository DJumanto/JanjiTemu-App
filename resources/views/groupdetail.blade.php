<x-app-layout>
    <x-slot name="header">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="#desc" style="color: #7879DF;"><b>Deskripsi</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#members" style="color: #7879DF;"><b>Anggota</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#events" style="color: #7879DF;"><b>Event</b></a>
            </li>
        </ul>
    </x-slot>
    <div class="row">
        <div class="col">
            <figure class="figure">
                <img src="/img/event2.jpg" class="figure-img img-fluid rounded" alt="..." style="max-width: 550px;">
            </figure>
        </div>
        <div class="col">
            <h3 class="h3"><strong>{{ $results->g_name }}</strong></h3>
            <p class="h6 mt-3 text-body-tertiary"><i class="bi bi-people"></i> {{ $results->g_users }}</p>
            <p class="h6 mt-3 text-body-tertiary"><i class="bi bi-person-check"></i> Group Owner <b>{{ $group_master->first_name.' '.$group_master->last_name }}</b></p>
        </div>
    </div>

    <div class="mt-5">
        <div class="row">
            <div class="col-8">
                <div id="desc">
                    <h4 class="h4">Deskripsi Grup</h4>
                    <p>{{ $results->g_description }}</p>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="position-relative text-center">
                        <p class="mb-0"><strong>Pemilik Grup</strong></p>
                        <img src="/img/event2.jpg" class="card-img-top rounded-circle img-thumbnail position-absolute start-0 top-0 ms-2 mt-4" alt="..." style="width: 70px; height: 70px; object-fit: cover;">
                    </div>
                    <div class="card-body">
                        <div class="ms-5">
                            <h3 class="card-title ms-4"><strong>{{ $group_master->first_name.' '.$group_master->last_name }}</strong></h3>
                            <p class="card-text ms-4"><em>Group Master</em></p>
                        </div>
                    </div>
                </div>
                <div class="card mt-3" style="width: 250px;">
                    <div class="position-relative ms-2">
                        <p class=""><strong>Jumlah Anggota</strong></p>
                    </div>
                    <div class="card-body">
                        <div class="ms-5">
                            <h3 class="card-title ms-4"><i class="bi bi-people"></i> <em>{{ $results->g_users }}</em></h3>
                        </div>
                    </div>
                    <div class="position-relative ms-2">
                        <p class=""><strong>Jumlah Event</strong></p>
                    </div>
                    <div class="card-body">
                        <div class="ms-5">
                            <h3 class="card-title ms-4"><i class="bi bi-calendar4-event"></i> <em>{{ $results->total_event }}</em></h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <br><br><br>
        <div id="members">
            <h4 class="h4">Anggota Grup</h4>
            <div class="scroll" style="height: 300px; overflow: scroll;">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $counter = 1;
                        @endphp
                        @foreach($members as $member)
                                <tr>
                                    <th scope="row">{{ $counter }}</th>
                                    <td>{{ $member->first_name.' '.$member->last_name }}</td>
                                    <td>{{ $member->role }}</td>
                                </tr>
                                @php
                                    $counter++;
                                @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <br><br><br>
        <div id="events">
            <h4 class="h4">Event grup ini</h4>
            <!-- Part Event of The Group Card -->
            <div class="grid gap-0 row-gap-3" id="group-event-card">
                <div class="card position-relative" style="width: 100%;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/event4.jpg" class="card-img-top img-fluid" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><a class="link-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Autumn Party</a></h5>
                                <p class="card-text">Hosted by: Weather Indonesia</p>
                                <p><i class="bi bi-calendar4-event"></i> Minggu, 15 OCT 2023 - 9:00 WIB</p>
                                <h6><i class="bi bi-ticket-perforated"></i> FREE</h6>
                                <div class="position-absolute bottom-0 end-0 mb-3 me-3">
                                    <button href="#" class="btn btn-primary" style="color:white;">Edit Event</button>
                                    <button href="#" class="btn btn-danger" style="color:white">Delete Event</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- test 3 -->
                <div class="card position-relative" style="width: 100%;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/event5.jpeg" class="card-img-top img-fluid" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><a class="link-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Kadin Banten Expo 2022</a></h5>
                                <p class="card-text">Hosted by: Pemprov Banten</p>
                                <p><i class="bi bi-calendar4-event"></i> Minggu, 19 DEC 2023 - 11:30 WIB</p>
                                <h6><i class="bi bi-ticket-perforated"></i> FREE</h6>
                                <div class="position-absolute bottom-0 end-0 mb-3 me-3">
                                    <button href="#" class="btn btn-primary" style="color:white;">Edit Event</button>
                                    <button href="#" class="btn btn-danger" style="color:white">Delete Event</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end test -->
                <div class="card position-relative" style="width: 100%;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/event6.jpg" class="card-img-top img-fluid" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><a class="link-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Control Premiere</a></h5>
                                <p class="card-text">Hosted by: Remedy Entertainment</p>
                                <p><i class="bi bi-calendar4-event"></i> Kamis, 27 AUG 2023 - 19:00 WIB</p>
                                <h6><i class="bi bi-ticket-perforated"></i> FREE</h6>
                                <div class="position-absolute bottom-0 end-0 mb-3 me-3">
                                    <button href="#" class="btn btn-primary" style="color:white;">Edit Event</button>
                                    <button href="#" class="btn btn-danger" style="color:white">Delete Event</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <br><br><br><br>
    </div>



</x-app-layout>