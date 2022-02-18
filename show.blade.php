<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Resep</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> 
    <link rel="stylesheet" href="{{asset('css/show.css')}}"> 

</head>

<body>


    <header>

        <a href="#" class="logo"><i class="fas fa-utensils"></i>Daily Recipe</a>

        <nav class="navbar">
            <a class="active" href="{{route('index')}}">home</a>

        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
        </div>

    </header>
    <form action="{{ route('search_resep') }}" method="POST" id="search-form">
        @method('POST')
        @csrf
        <input type="search" placeholder="search here..." name="nama" id="search-box">
        <button type ="submit" for="search-box" class="fas fa-search"></button>
        <i class="fas fa-times" id="close"></i>
    </form>
    <br>
    <br>
    <br>

    <section class="menu" id="menu">
        @forelse ($res_det as $res)
            <h3 class="sub-heading">Resep</h3>
            <h1 class="heading"> {{$res->nama}}</h1>
            <section class="bingkai" id="bingkai">
                <div class="container">
                    <div class="image" style = "padding-top : 54px;">
                        <img src="{{url('')}}/{{$res->image_makanan}}" alt="" width="800" height="500" style=" display: block; margin-left: auto; margin-right: auto; border-radius: 25px; "  >
                    </div><br>
                    <p class="note">{{$res->bahan}}</p>
                    <p class="note">{{$res->cara_masak}}</p>
                    <h4>{{$res->lama_masak}}</h4>
                    <h4>{{$res->porsi}}</h4>
                </div>
            </section>
        @empty
            <div class="alert alert-danger">Belum ada resep yang bisa ditampilkan.</div>
        @endforelse

    </section>
        </div> 

        <div class="credit"> copyright @ 2021 by <span>Daily Resep</span> </div>

    </section>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="js/script.js"></script>

</body>

</html>