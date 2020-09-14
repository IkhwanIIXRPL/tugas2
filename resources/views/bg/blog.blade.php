<!DOCTYPE html>
<html lang="en">

<head>

    <head class="row">
        @include('layout.head')
    </head>
</head>

<body>
    <div class="container">

        <header class="row">
            @include('layout.header')
        </header>
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <h1 class="mt-3">Tempat Makanan</h1>
                    <table class="table">
                        <thead class="thead-drak">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Makanan</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Tempat</th>
                                <th scope="col">Maps</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $blog as $bm)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{ $bm->Nama}}</td>
                                <td>{{ $bm->Harga}}</td>
                                <td>{{ $bm->Tempat}}</td>
                                <td>{{ $bm->Maps}}</td>

                                <td>
                                    <a href="" class="badge badge-success">Edit</a>
                                    <a href="" class="badge badge-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <footer class="row">
            @include('layout.footer')
        </footer>

    </div>
</body>

</html>