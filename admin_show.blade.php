<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        @forelse ($res_det as $res)
        <title>Resep {{$res->nama}}</title>
        @empty
            <title>Tidak ada data...</title>
        @endforelse
    </head>
    <body>
        <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                @forelse ($res_det as $res)
                    <div class="pt-3 d-flex justify-content-end align-items-center">
                    <h1 class="h2 mr-auto">Resep {{$res->nama}}</h1>
                    <a href="{{ route('overview_resep_edit',['r_id' => $res->id]) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('resep_delete',['r_id' => $res->id]) }}"method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger ml-3">Hapus</button>
                    </form>
                    </div>
                    <hr>
                    <ul>
                        <li>Nama: {{$res->nama}} </li>
                        <li>Resep: {{$res->resep}} </li>
                        <li>Cara Masak: {{$res->cara_masak}}</li>
                        <li>Lama Masak: {{$res->lama_masak}} </li>
                        <li>porsi:{{$res->porsi}}</li>
                    </ul>
                @empty
                    <div class="alert alert-danger">Tidak ada data...</div>
                @endforelse
                </div>
            </div>
        </div>
    </body>
</html>