<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Group</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Group</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('group.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name">Group Name:</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Group Description:</label>
                                <textarea name="description" id="description" class="form-control" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Create Group</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

