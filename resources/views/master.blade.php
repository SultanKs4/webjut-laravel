<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        {{-- bagian judul halaman --}}
                        <h2>@yield('judul_halaman')</h2>
                    </div>
                    <div class="card-body">
                        {{-- bagian konten blog --}}
                        @yield('konten')
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>