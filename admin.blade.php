<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Data Resep</title>
</head>
    <body>
        <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="py-4 d-flex justify-content-end align-items-center">
                    <h2 class="mr-auto">Resep </h2>
                    <a href="{{route('resep.store')}}" class="btn btn-primary">
                    Tambah Resep
                    </a>
                    <div  style="padding-left: 10px">
                        <a href="{{ route('logout') }}" class="btn btn-success" >Logout</a>
                    </div>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>ID</th>
                                <th>Nama Makanan</th>
                                <th>Bahan</th>
                                <th>Cara Masak</th>
                                <th>Lama Masak</th>
                                <th>Porsi</th>
                                <th>like</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($resep_result as $res)
                                <tr>
                                    <td><img height="30px" src="{{url('')}}/{{$res->image_makanan}}" class="rounded" alt=""></td>
                                    <td><a href="{{ route('overview_resep', ['r_id' => $res->likeable_id])}}">{{$res->likeable_id}}</a></td>
                                    <td>{{$res->nama}}</td>
                                    <td>{{$res->bahan}}</td>
                                    <td>{{$res->cara_masak}}</td>
                                    <td>{{$res->lama_masak}} menit </td>
                                    <td>{{$res->porsi}}</td>
                                    <td>{{$res->count}}</td>
                                </tr>
                            @empty
                                <div class="alert alert-danger">Tidak ada data...</div>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>