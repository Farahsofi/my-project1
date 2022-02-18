<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Tampilan Resep</title>
    </head>
    <body>
        <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="pt-3 d-flex justify-content-end align-items-center">
                    <h1 class="h2 mr-auto">Resep</h1>
                    <a href="{{ route('student.edit',['student' => $student->id]) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('student.destroy',['student'=>$student->id]) }}"method="POST">
                        <button type="submit" class="btn btn-danger ml-3">Hapus</button>
                    </form>
                    </div>
                    <hr>
                    <div class="alert alert-success"></div>
                    <ul>
                        <li>Nama Makanan :  </li>
                        <li>Bahan : </li>
                        <li>Cara Masak : </li>
                        <li>Lama Masak : </li>
                        <li>Porsi :</li>
                        <li>Foto :</li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>