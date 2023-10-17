<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1 class="container ms-2">Add a user</h1>

    <form class="container ms-3" method="post" action="{{route('app_users.add')}}">
        <!-- class="container ms-3"  -->
        @csrf
        @method('post')
        <!-- <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password">
        </div>
        <div class="mb-3">
            <label for="status">Status</label>
                <select name="status" id="status">
                    <option value="member">Member</option>
                    <option value="admin">Admin</option>
                </select>
        </div> -->
        <div>
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama">
        </div>
        <div>
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password">
        </div>
        <div class="mb-3">
            <label for="status">Status</label>
                <select name="status" id="status">
                    <option value="member">Member</option>
                    <option value="admin">Admin</option>
                </select>
        </div>
        <div>
            <input type="submit" value="Add User">
        </div>
    </form>
</body>
</html>