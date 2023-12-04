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
            <h3 class="h3"><strong>[Nama Grup]</strong></h3>
            <p class="h6 mt-3 text-body-tertiary"><i class="bi bi-people"></i> 100 orang</p>
            <p class="h6 mt-3 text-body-tertiary"><i class="bi bi-person-check"></i> Dibuat oleh <b>Tester Bro</b></p>
        </div>
    </div>

    <div class="mt-5">
        <div class="row">
            <div class="col-8">
                <div id="desc">
                    <h4 class="h4">Deskripsi Grup</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur culpa nihil animi cumque illo. Ducimus ut mollitia cum nostrum facilis tempore, culpa eveniet totam deserunt, fugit optio odio blanditiis aut! Delectus ad quasi aliquam id recusandae quidem fugiat. Ut veniam consectetur ipsum quia vel. Perferendis assumenda laborum incidunt, dolor nulla fugit ipsa architecto aperiam commodi mollitia animi tenetur reprehenderit laboriosam rem cum, dignissimos ex sunt eos, quam libero distinctio possimus. Sed odio unde nam similique, eaque corporis accusamus itaque alias a quam labore eius laborum fugiat, provident quas sit asperiores nulla cupiditate deserunt? Doloremque, odio quidem quae asperiores mollitia consequuntur?</p>
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
                            <h3 class="card-title ms-4"><strong>Tester Bro</strong></h3>
                            <p class="card-text ms-4"><em>[Role, ex: Organizer]</em></p>
                        </div>
                    </div>
                </div>
                <div class="card mt-3" style="width: 250px;">
                    <div class="position-relative ms-2">
                        <p class=""><strong>Jumlah Anggota</strong></p>
                    </div>
                    <div class="card-body">
                        <div class="ms-5">
                            <h3 class="card-title ms-4"><i class="bi bi-people"></i> <em>100 Orang</em></h3>
                        </div>
                    </div>
                    <div class="position-relative ms-2">
                        <p class=""><strong>Jumlah Event</strong></p>
                    </div>
                    <div class="card-body">
                        <div class="ms-5">
                            <h3 class="card-title ms-4"><i class="bi bi-calendar4-event"></i> <em>14 Event</em></h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <br>
        <div id="members">
            <h4 class="h4">Anggota Grup</h4>
            <div class="scroll" style="height: 300px; overflow: scroll;">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Ahmad Djumiran</td>
                            <td>ahmadju@maju.com</td>
                            <td>member</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Mari Yadi</td>
                            <td>mariyadi@test.com</td>
                            <td>member</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Ahmad Baihaqi</td>
                            <td>ahmadbai@test.com</td>
                            <td>member</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Daffa Hurra</td>
                            <td>dafhurra@test.com</td>
                            <td>member</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Syukra Radjiman</td>
                            <td>syukradji@maju.com</td>
                            <td>member</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Akmal Anom</td>
                            <td>akmalanom@gmail.com</td>
                            <td>member</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>tester</td>
                            <td>tester@test.com</td>
                            <td>member</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>tester2</td>
                            <td>tester2@test.com</td>
                            <td>member</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br>
        <div id="events">
            <h4 class="h4">Ini list event grup ini</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit blanditiis assumenda nulla magni sapiente cum aliquam nesciunt minus at dolorem autem illo, sunt voluptatum id, minima molestiae, atque beatae ut!</p>
        </div>
    </div>



</x-app-layout>