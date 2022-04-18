@extends('Bootstrap template')

@section('title')
@endsection



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@section('css')
    <style>
        a {
            text-decoration: none;
            color: black;
        }

        a:hover {
            color: black;
        }

        nav .box1>a:hover {
            color: black;
            text-decoration: none;
            background-color: gray;
            border-radius: 3px;
        }

        h1 {
            font-size: 30px;
            height: 36px;
            margin: 0;
        }

        h2 {
            font-size: 14px;
            height: 20px;
            margin: 0;
        }

        p {
            font-size: 16px;
            padding: 0;
            margin: 0
        }

        nav {
            height: 92px;
        }

        nav .container-xxl {
            height: 100%;
        }

        nav a {
            margin: 0 0 0 16px;
        }


        nav .dropdown-content {
            width: 192px;
            height: 52px;
            font-size: 14px;
            background-color: red;
            text-align: center;
            line-height: 52px;
            border-radius: 10px;
            display: none;
        }

        nav .box2:focus .dropdown-content {
            display: block;
        }

        nav .dropdown-content a {
            margin: 0;
        }

        #banner .container {
            height: 845px;
        }

        #intro .img {
            width: 80px;
            height: 80px;
            background-color: rgba(224, 231, 255);
            border-radius: 50%;
            position: relative;
            left: 50%;
            transform: translate(-50%);
        }

        #intro img {
            width: 40px;
            height: 40px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);

        }

        .swiper {
            width: 100%;
            height: 845px;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: gray;

            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        #card01 .card {
            background-color: rgb(238, 235, 235);
            width: 350px;
            height: 400px;
            padding: 10px 10px;
            border: 3px solid white;
        }

        #shooting .bg {
            background-color: rgba(224, 231, 255);
            width: 80px;
            height: 80px;
            border-radius: 50%;
        }

        #merch .merch_pic {
            width: 100%;
        }

        #merch .suptitle {
            letter-spacing: 1px;
            color: rgb(107, 114, 128);
        }

        #merch .stars svg {
            width: 16px;
            height: 16px;
        }

        #merch .color .ball {
            width: 20px;
            height: 20px;
        }

        .card {
            border: 0;
        }

        #map {
            height: 100%;
            position: relative;
        }

        #map .row .row {
            width: 411px;
            background-color: white;
            position: absolute;
            left: 80%;
            top: 50%;
            transform: translate(-50%, -50%);
            border-radius: 20px;
        }

        #sitemap {
            height: 320px;
        }

        #end {
            background-color: rgb(205, 205, 205);
        }

    </style>
@endsection

@section('nav')
    <div class="container-xxl d-flex px-5">
        <div class="col d-flex align-items-center">
            <img src="/logo.svg" alt="" width="106px" height="60px">
        </div>
        <div class="col box1 d-flex align-items-center justify-content-end">
            <a href="">Blog</a>
            <a href="">Portfolio</a>
            <a href="">About</a>
            <a href="">Contact</a>
            <div class="box2">
                <a href="http://127.0.0.1:8000/page1"><i class="bi bi-cart-fill"></i></a>
                <a href="http://127.0.0.1:8000/login"><i class="bi bi-person-circle"></i>
                    <div class="dropdown-content"><a href="">Login</a></div>
                </a>
            </div>
        </div>
    </div>
@endsection
@section('main')
    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">Slide 1</div>
                        <div class="swiper-slide">Slide 2</div>
                        <div class="swiper-slide">Slide 3</div>
                        <div class="swiper-slide">Slide 4</div>
                        <div class="swiper-slide">Slide 5</div>
                        <div class="swiper-slide">Slide 6</div>
                        <div class="swiper-slide">Slide 7</div>
                        <div class="swiper-slide">Slide 8</div>
                        <div class="swiper-slide">Slide 9</div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

    </section>
    <section id="intro">
        <div class="container-xxl py-5 px-5">
            <div class="col text-center py-5">
                <h1>Raw Denim Heirloom Man Braid</h1>
                <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice
                    poutine, ramps microdosing banh mi pug.</p>
            </div>
            <div class="row d-flex text-center">
                <div class="card" style="width: 33.33%;">
                    <div class="img">
                        <img src="/pulse.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Shooting Stars</h5>
                        <p class="card-text">Blue bottle crucifix vinyl post-ironic four dollar toast vegan
                            taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.
                        </p>
                        <a href="">Learn More<i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
                <div class="card" style="width: 33.33%;">
                    <div class="img">
                        <img src="/scissors.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">The Catalyzer</h5>
                        <p class="card-text">Blue bottle crucifix vinyl post-ironic four dollar toast vegan
                            taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.
                        </p>
                        <a href="">Learn More<i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
                <div class="card" style="width: 33.33%;">
                    <div class="img">
                        <img src="/user.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Neptune</h5>
                        <p class="card-text">Blue bottle crucifix vinyl post-ironic four dollar toast vegan
                            taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.
                        </p>
                        <a href="">Learn More<i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <button class="btn btn-primary" type="submit">Button</button>
            </div>
        </div>
    </section>
    <section id="master">
        <div class="container-xxl p-5">
            <div class="row py-5">
                <div class="row" style="width: 50%;">
                    <h1>Master Cleanse Reliac Heirloom</h1>
                </div>
                <div class="row" style="width: 50%;">
                    <p>Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke
                        farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies
                        heirloom.</p>
                </div>
            </div>
            <div class="row">
                <div class="row" style="width: 50%;">
                    <img src="/500x300.png" alt="" width="50%" height="178" style="border: 3px solid;color: white;">
                    <img src="/500x300.png" alt="" width="50%" height="178" style="border: 3px solid;color: white;">
                    <img src="/500x300.png" alt="" width="100%" height="365" style="border: 3px solid;color: white;">
                </div>
                <div class="row" style="width: 50%;">
                    <img src="/500x300.png" alt="" width="100%" height="365" style="border: 3px solid;color: white;">
                    <img src="/500x300.png" alt="" width="50%" height="178" style="border: 3px solid;color: white;">
                    <img src="/500x300.png" alt="" width="50%" height="178" style="border: 3px solid;color: white;">
                </div>
            </div>
        </div>
    </section>
    <section id="pricing">
        <div class="container-xxl p-5">
            <div class="col text-center py-5">
                <h1>Pricing</h1>
                <p>Banh mi cornhole echo park skateboard authentic crucifix neutra tilde lyft biodiesel
                    artisan direct trade mumblecore 3 wolf moon twee</p>
            </div>
            <div class="row">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Plan</th>
                            <th scope="col">Speed</th>
                            <th scope="col">Storage</th>
                            <th scope="col">Price</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        </tr>
                        <th scope="row">Start</th>
                        <td>5 Mb/s</td>
                        <td>15 GB</td>
                        <td>Free</td>
                        <td>
                            <div class="input-group">
                                <input class="form-check-input " type="radio" value=""
                                    aria-label="Radio button for following text input">
                            </div>
                        </td>
                        </tr>
                        <tr>
                            <th scope="row">Pro</th>
                            <td>25 Mb/s</td>
                            <td>25 GB</td>
                            <td>$24</td>
                            <td>
                                <div class="input-group">
                                    <input class="form-check-input " type="radio" value=""
                                        aria-label="Radio button for following text input">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Business</th>
                            <td>36 Mb/s</td>
                            <td>40 GB</td>
                            <td>$50</td>
                            <td>
                                <div class="input-group">
                                    <input class="form-check-input " type="radio" value=""
                                        aria-label="Radio button for following text input">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Exclusive</th>
                            <td>48 Mb/s</td>
                            <td>120 GB</td>
                            <td>$72</td>
                            <td>
                                <div class="input-group">
                                    <input class="form-check-input " type="radio" value=""
                                        aria-label="Radio button for following text input">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row justify-content-between">
                <a href="">Learn More<i class="bi bi-arrow-right-short"></i></a>
                <button class="btn btn-primary" type="submit">Button</button>
            </div>
        </div>
    </section>
    <section id="card01">
        <div class="container-xxl p-5,container-xl">
            <div class="row py-5">
                <div class="row-6" style="width: 50%;">
                    <h1>Pitchfork Kickstarter Taxidermy</h1>
                </div>
                <div class="row-6" style="width: 50%;">
                    <p>
                        Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify,
                        subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep
                        jianbing selfies heirloom prism
                        food truck ugh squid celiac humblebrag.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="card">
                        <img src="/720x400.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3>SUBTITLE</h3>
                            <h2 class="card-title">Chichen Itza</h2>
                            <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat.
                                Distillery hexagon
                                disrupt edison bulbche.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card">
                        <img src="/720x400.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3>SUBTITLE</h3>
                            <h2 class="card-title">Chichen Itza</h2>
                            <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat.
                                Distillery hexagon
                                disrupt edison bulbche.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card">
                        <img src="/720x400.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3>SUBTITLE</h3>
                            <h2 class="card-title">Chichen Itza</h2>
                            <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat.
                                Distillery hexagon
                                disrupt edison bulbche.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card">
                        <img src="/720x400.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3>SUBTITLE</h3>
                            <h2 class="card-title">Chichen Itza</h2>
                            <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat.
                                Distillery hexagon
                                disrupt edison bulbche.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="shooting">
        <div class="container-xxl p-5">
            <div class="row justify-content-center border-bottom">
                <div class="row-4">
                    <div class="bg d-flex justify-content-center align-self-center">
                        <img src="/activity.svg" alt="" width="30px" height="30px">
                    </div>
                </div>
                <div class="col-12 col-md-6 ">
                    <h2>Shooting Stars</h2>
                    <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo
                        juice poutine.</p>
                    <a href="">Learn More<i class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>
            <div class="row flex-row-reverse justify-content-center border-bottom">
                <div class="row-4">
                    <div class="bg d-flex justify-content-center align-self-center">
                        <img src="/activity.svg" alt="" width="30px" height="30px">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <h2>The Catalyzer</h2>
                    <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo
                        juice poutine.</p>
                    <a href="">Learn More<i class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="row-4">
                    <div class="bg d-flex justify-content-center align-self-center border-bottom">
                        <img src="/activity.svg" alt="" width="30px" height="30px">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <h2>The 400 Blows</h2>
                    <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo
                        juice poutine.</p>
                    <a href="">Learn More<i class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>
            <div class="row justify-content-center py-5">
                <button class="btn btn-primary" type="submit">Button</button>
            </div>
        </div>
    </section>
    <section id="merch">
        <div class="container-xxl">
            <div class="row d-flex flex-column flex-md-row">
                <div class="col-12 col-md-6 h-auto ">
                    <img src="/400x400.png" alt="" class="merch_pic h-auto">
                </div>
                <div class="col-12 col-md-6 pt-4 pb-4 pe-0 ps-5">
                    <h2 class="suptitle">BRAND NAME</h2>
                    <h1>The Catcher in the Rye</h1>
                    <div class="reviews d-flex">
                        <div class="stars">
                            <svg fill="#0D6EFD" stroke="#0D6EFD" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <svg fill="#0D6EFD" stroke="#0D6EFD" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <svg fill="#0D6EFD" stroke="#0D6EFD" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <svg fill="#0D6EFD" stroke="#0D6EFD" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <svg fill="none" stroke="#0D6EFD" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                        </div>
                        <div class="score">
                            4 Reviews
                        </div>
                        <div class="social">

                        </div>
                    </div>
                    <div class="content">
                        <p>
                            Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify,
                            subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep
                            jianbing selfies heirloom prism
                            food truck ugh squid celiac humblebrag.</p>
                    </div>
                    <div class="choice d-flex mt-3 mb-3 border-bottom pb-3">
                        <div class="color d-flex align-items-center">
                            <label for="" class=" ">Color</label>
                            <div class="rounded-circle ball bg-primary "></div>
                            <div class="rounded-circle ball bg-danger"></div>
                            <div class="rounded-circle ball bg-warning"></div>
                        </div>
                        <div class="size d-flex align-items-center">
                            <label for="">Size</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>SM</option>
                                <option value="1">M</option>
                                <option value="2">L</option>
                                <option value="3">XL</option>
                            </select>
                        </div>
                    </div>
                    <div class="add">
                        <div class="price">$58.00</div>
                        <button type="button" class="btn btn-primary">Button</button>
                        <div class="favorite"></div>
                    </div>
                </div>
            </div>
    </section>
    <section id="card02">
        <div class="container-xxl p-5">
            <div class="row">
                <div class="col-6 col-md-3">
                    <div class="card p-1">
                        <img src="/720x400.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3>CATEGORY</h3>
                            <h2 class="card-title">The Catalyzer</h2>
                            <p class="card-text">$16.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card p-1">
                        <img src="/720x400.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3>CATEGORY</h3>
                            <h2 class="card-title">The Catalyzer</h2>
                            <p class="card-text">$16.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card p-1">
                        <img src="/720x400.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3>CATEGORY</h3>
                            <h2 class="card-title">The Catalyzer</h2>
                            <p class="card-text">$16.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card p-1">
                        <img src="/720x400.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3>CATEGORY</h3>
                            <h2 class="card-title">The Catalyzer</h2>
                            <p class="card-text">$16.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card p-1">
                        <img src="/720x400.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3>CATEGORY</h3>
                            <h2 class="card-title">The Catalyzer</h2>
                            <p class="card-text">$16.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card p-1">
                        <img src="/720x400.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3>CATEGORY</h3>
                            <h2 class="card-title">The Catalyzer</h2>
                            <p class="card-text">$16.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card p-1">
                        <img src="/720x400.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3>CATEGORY</h3>
                            <h2 class="card-title">The Catalyzer</h2>
                            <p class="card-text">$16.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card p-1">
                        <img src="/720x400.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3>CATEGORY</h3>
                            <h2 class="card-title">The Catalyzer</h2>
                            <p class="card-text">$16.00</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <section id="map">
        <div class="container-fluid">
            <div class="row mb-5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14562.107872000212!2d120.67750495000001!3d24.153245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1szh-TW!2stw!4v1649640372621!5m2!1szh-TW!2stw"
                    width="100%" height="450" style="border:0; filter: grayscale(1) contrast(1.2) opacity(0.4);"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="row p-3">
                    <h2 style="font-size: 18px;">Feedback</h2>
                    <p style="font-size: 16px;">Post-ironic portland shabby chic echo park, banjo fashion axe</p>
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit" style="width: 100%;">Button</button>
                    <p style="font-size: 12px;">Chicharrones blog helvetica normcore iceland tousled brook viral
                        artisan.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
    <section id="sitemap">
        <div class="container-xxl">
            <div class="row justify-content-around ">
                <div class="col-2">
                    <img src="/logo.svg" alt="" width="100px" height="100px">
                    <span>數位方塊</span>
                    <p>Air plant banjo lyft occupy retro adaptogen indego</p>
                </div>
                <div class="row">
                    <div class="col d-flex flex-column">
                        <h2>CATEGORIES</h2>
                        <a href="">First Link</a>
                        <a href="">Second Link</a>
                        <a href="">Third Link</a>
                        <a href="">Fourth Link</a>
                    </div>
                    <div class="col d-flex flex-column">
                        <h2>CATEGORIES</h2>
                        <a href="">First Link</a>
                        <a href="">Second Link</a>
                        <a href="">Third Link</a>
                        <a href="">Fourth Link</a>
                    </div>
                    <div class="col d-flex flex-column">
                        <h2>CATEGORIES</h2>
                        <a href="">First Link</a>
                        <a href="">Second Link</a>
                        <a href="">Third Link</a>
                        <a href="">Fourth Link</a>
                    </div>
                    <div class="col d-flex flex-column">
                        <h2>CATEGORIES</h2>
                        <a href="">First Link</a>
                        <a href="">Second Link</a>
                        <a href="">Third Link</a>
                        <a href="">Fourth Link</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="end">
        <div class="container-xxl">
            <div class="row d-flex justify-content-around align-self-center">
                <p>© 2020 Tailblocks — @knyttneve</p>
                <span>
                    <a href="">
                        <img src="/facebook.svg" alt="">
                    </a>
                    <a href="">
                        <img src="/twitter.svg" alt="">
                    </a>
                    <a href="">
                        <img src="/instagram.svg" alt="">
                    </a>
                    <a href="">
                        <img src="/linkedin.png" alt="">
                    </a>
                </span>
            </div>
        </div>
    </section>
@endsection

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        cssMode: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
        },
        mousewheel: true,
        keyboard: true,
    });
</script>
