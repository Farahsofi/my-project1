<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Recipe</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> 
    <link rel="stylesheet" href="{{asset('css/style.css')}}"> 

</head>

<body>


    <header>

        <a href="#" class="logo"><i class="fas fa-utensils"></i>Daily Recipe</a>

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

    <section class="home" id="home">

        <div class="swiper-container home-slider">

            <div class="swiper-wrapper wrapper">
                @forelse ($res_post as $res)
                    <div class="swiper-slide slide">
                        <div class="content">
                            <span>Rekomendasi</span>
                            <h3>{{$res->nama}}</h3>
                            <p>{{$res->bahan}}</p>
                            <a href="{{ route('detail_resep', ['r_id' => $res->id])}}" class="btn">Lihat Selengkapnya</a>
                        </div>
                        <div class="image">
                            <img src="{{url('')}}/{{$res->image_makanan}}" alt=""width="800" height="500">
                        </div>
                    </div>
                @empty
                <div class="alert alert-danger">Belum ada resep yang bisa ditampilkan.</div>
                @endforelse
            </div>


        </div>

    </section>


    <section class="dishes" id="dishes">

        <h3 class="sub-heading"> Rekomendasi </h3>
        <h1 class="heading"> resep populer </h1>

        <div class="box-container">
            @forelse ($pop_result as $pop)
                <div class="box">
                    <form action="{{ route('like.res', $pop->likeable_id) }}" method="post">
                        @csrf
                        <button class="fas fa-heart" type ="submit">{{$pop->count}}</button>
                    </form>
                    <img src="{{url('')}}/{{$pop->image_makanan}}" alt="">
                    <h3>{{$pop->nama}}</h3>
                    <a href="{{ route('detail_resep', ['r_id' => $pop->likeable_id])}}" class="btn">Lihat Selengkapnya..</a>
                    
                </div>
            @empty
                <div class="alert alert-danger">Belum ada resep yang bisa ditampilkan.</div>
            @endforelse
        </div>

    </section>

    <section class="menu" id="menu">

        <h3 class="sub-heading"> Resep Lain </h3>
        <h1 class="heading"> Resep Terbaru </h1>

        <div class="box-container">
            @forelse ($res_latest as $rts)
                <div class="box">
                    <div class="image">
                        <img src="{{url('')}}/{{$rts->image_makanan}}" alt="">
                        <form action="{{ route('like.res', $rts->likeable_id) }}" method="post">
                            @csrf
                            <button class="fas fa-heart" type ="submit">{{$rts->count}}</button>
                        </form>
                    </div>
                    <div class="content">
                        <h3>{{$rts->nama}}</h3>
                        <p>{{$rts->bahan}}</p>
                        <a href="{{ route('detail_resep', ['r_id' => $rts->likeable_id])}}" class="btn">Lihat Selengkapnya..</a>
                    </div>
                </div>
            @empty
                <div class="alert alert-danger">Belum ada resep yang bisa ditampilkan.</div>
            @endforelse
        </div>

    </section>


    <section class="review" id="review">

        <h3 class="sub-heading"> Penulis </h3>
        <h1 class="heading"> tentang kami </h1>

        <div class="swiper-container review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="" alt="">
                        <div class="user-info">
                            <h3>Farah Sofiatul N.A</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugiat consequuntur repellendus
                        aperiam deserunt nihil, corporis fugit voluptatibus voluptate totam neque illo placeat eius quis
                        laborum aspernatur quibusdam. Ipsum, magni.</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="" alt="">
                        <div class="user-info">
                            <h3>Faris Abyan H.</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugiat consequuntur repellendus
                        aperiam deserunt nihil, corporis fugit voluptatibus voluptate totam neque illo placeat eius quis
                        laborum aspernatur quibusdam. Ipsum, magni.</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="" alt="">
                        <div class="user-info">
                            <h3>Wiqie Annisa N.A</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugiat consequuntur repellendus
                        aperiam deserunt nihil, corporis fugit voluptatibus voluptate totam neque illo placeat eius quis
                        laborum aspernatur quibusdam. Ipsum, magni.</p>
                </div>


            </div>

        </div>

    </section> 
    
    <!--coba -->


<!--- -->

        </div> 

        <div class="credit"> copyright @ 2021 by <span>Daily Resep</span> </div>

    </section>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="js/script.js"></script>

</body>

</html>