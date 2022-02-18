<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Edit Mahasiswa</title>
    </head>
    <body>
        <div class="container pt-4 bg-white">
            <div class="row">
                <div class="col-md-8 col-xl-6">
                    @forelse ($res_det as $res)
                        <h1>Edit Resep {{$res->nama}}</h1>
                        <h1>ID {{$res->id}}</h1>
                        <hr>
                        <form action="{{ route('resep_edit',['r_id' => $res->id]) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama Makanan</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" >
                                <div class="text-danger"></div>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Bahan</label>
                                <textarea class="form-control" id="bahan" rows="3"name="bahan"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Cara Masak</label>
                                <textarea class="form-control" id="cara_masak" rows="3"name="cara_masak"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Lama Masak</label>
                                <input type="number" class="form-control" id="lama_masak" rows="3" name="lama_masak" min="0" max=100>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Porsi</label>
                                <input type="number" class="form-control" id="porsi" rows="3" name="porsi" min="0" max=100>
                            </div>
                        
                            <div class="form-group">
                                <label for="image">Gambar</label>
                                <input type="file" class="form-control-file" id="image" name="image_makanan">
                                <div class="text-danger"></div>
                                
                            </div>
                                <button type="submit" class="btn btn-primary mb-2">Submit</button>
                        </form>
                    @empty
                        <div class="alert alert-danger">Tidak ada data...</div>
                    @endforelse
                </div>
            </div>
        </div>
    </body>
</html>