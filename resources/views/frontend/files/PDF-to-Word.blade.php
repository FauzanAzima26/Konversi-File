@extends('layout.main')

@section('title', 'PDF to Word')

@section('file', 'PDF to Word')

@section('content')

<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <img src="{{asset('assets/frontend')}}/img/world-dotted-map.png" alt="" class="hero-bg" data-aos="fade-in">

        <div class="container">
            <div class="row gy-4 d-flex justify-content-between">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h2 data-aos="fade-up">Your Lightning Fast Delivery Partner</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Facere distinctio molestiae nisi fugit tenetur repellat
                        non praesentium nesciunt optio quis sit odio nemo quisquam. eius quos reiciendis eum vel eum
                        voluptatem eum maiores eaque id optio ullam occaecati odio est possimus vel reprehenderit</p>

                    <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up"
                        data-aos-delay="200">
                        @csrf
                        <input type="file" name="file" id="file" class="form-control">
                        <button type="submit" class="btn btn-primary">Convert</button>
                    </form>

                </div>

                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="{{asset('assets/frontend')}}/img/hero-img.svg" class="img-fluid mb-3 mb-lg-0" alt="">
                </div>

            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up"
                    data-aos-delay="200">
                    <img src="{{asset('assets/frontend')}}/img/about.jpg" class="img-fluid" alt="">
                    <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
                </div>

                <div class="col-lg-6 content order-last  order-lg-first" data-aos="fade-up" data-aos-delay="100">
                    <h3>About Us</h3>
                    <p>
                        Dolor iure expedita id fuga asperiores qui sunt consequatur minima. Quidem voluptas deleniti.
                        Sit quia molestiae quia quas qui magnam itaque veritatis dolores. Corrupti totam ut eius
                        incidunt reiciendis veritatis asperiores placeat.
                    </p>
                    <ul>
                        <li>
                            <i class="bi bi-diagram-3"></i>
                            <div>
                                <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                                <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-fullscreen-exit"></i>
                            <div>
                                <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                                <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata
                                    redi</p>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-broadcast"></i>
                            <div>
                                <h5>Voluptatem et qui exercitationem</h5>
                                <p>Et velit et eos maiores est tempora et quos dolorem autem tempora incidunt maxime
                                    veniam</p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

        </div>

    </section><!-- /About Section -->

</main>

@endsection