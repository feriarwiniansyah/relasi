<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eloquent Relationships : Relasi One to One</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body bg-light">
                <h3 class="text-center text-success">Feri Arwiniansyah</h3>
                <h5 class="text-center my-4">Laravel Eloquent Relationship : One To One</h5>
                <table class="table table-bordered table-striped table-light">
                    <thead>
                        <tr>
                            <th class="text-center text-success">Nama User</th>
                            <th class="text-center text-success">Nomor Telepon</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->phone->phone }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>