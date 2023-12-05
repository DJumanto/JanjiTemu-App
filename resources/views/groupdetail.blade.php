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
        <form method="POST" action="{{ route('group.joingroup', ['group_id' => $group_id]) }}">
            @csrf
            <button type="submit" class="btn btn-primary" style="color:white;">Join Group</button>
        </form>
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
                @foreach($events as $event)
                <div class="card position-relative" style="width: 100%;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ str_replace('public', 'storage', $event->e_image) }}" class="card-img-top img-fluid" alt="Event Image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><a class="link-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">{{ $event->e_name }}</a></h5>
                                <p class="card-text">Hosted by: {{ $event->g_name }}</p>
                                <p><i class="bi bi-calendar4-event"></i> {{ \Carbon\Carbon::parse($event->e_date)->format('l, d M Y - H:i A') }}</p>
                                <h6><i class="bi bi-ticket-perforated"></i> FREE</h6>
                                <div class="position-absolute bottom-0 end-0 mb-3 me-3">
                                    @if($user_status === 3 || $user_status == null)
                                    <button href="#" class="btn btn-primary" style="color:white;">Join Event</button>
                                    @else
                                    <button href="#" class="btn btn-primary" style="color:white;">Edit Event</button>
                                    <button href="#" class="btn btn-danger" style="color:white">Delete Event</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <br><br><br><br>
    </div>



</x-app-layout>