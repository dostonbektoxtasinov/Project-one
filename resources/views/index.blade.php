<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Project one</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">

    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Favicons -->
    <link href="/assets/img/favicon.png" rel="icon">
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    {{-- Font awesome icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <div class="container text-center">
            <div class="col-md-12">
                <h1>
                    Avtomobillarga butlovchi qismlar <br> ishlab chiqarish <br> korxonasi.
                </h1>
                <a class="btn btn-full mt-5 scrollto" href="#about">
                    Batafsil
                </a>
                <a href="#about">
                    <i class="fa-solid  fa-chevron-down w-100 p-3" id="hero_down"></i>
                </a>


            </div>
        </div>

    </section><!-- End Hero -->

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div id="logo" class="me-auto">
                <a href="index.php"><img src="https://img.icons8.com/?size=1x&id=50572&format=png" style="color: #fff;"
                        alt=""></a>
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class="header-social-links d-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-telegram"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section class="about" id="about">

            <div class="container text-center">
                <h2>
                    About
                </h2>

                <p>
                    Voluptua scripserit per ad, laudem viderer sit ex. Ex alia corrumpit voluptatibus usu, sed unum
                    convenire id.
                    Ut cum nisl moderatius, per nihil dicant commodo an. Eum tacimates erroribus ad. Atqui feugiat
                    euripidis ea
                    pri, sed veniam tacimates ex. Menandri
                    temporibus an duo.
                </p>

                <div class="row stats-row">
                    @foreach ($abouts as $about)
                        <div class="stats-col text-center col-md-3 col-sm-6 mb-5">
                            <div class="circle">
                                <span data-purecounter-start="0" data-purecounter-end="{{ $about->number }}"
                                    data-purecounter-duration="1" class="purecounter stats-no"></span>
                                {{ $about->name }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </section>
        <!-- End About Section -->

        <!-- ======= Welcome Section ======= -->
        <section class="welcome text-center">
            <div class="col-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination  p-2 justify-content-center">
                        <li class="page-item"><a class="page-link p-3" href="#welcome"><i
                                    class="fa-solid fa-angle-left"></i></a></li>
                        <li class="page-item">
                            <a class="page-link " href="#welcome">
                                <input type="month" name="admin-month" class="p-2">
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link p-3" href="#welcome"><i
                                    class="fa-solid fa-angle-right "></i></a></li>
                    </ul>
                </nav>
            </div>
            <table class="table table-striped table-dark container ">
                <thead>
                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">Ism</th>
                        <th scope="col">Familya</th>
                        <th scope="col">Lavozim</th>
                        <th scope="col">Stavka</th>
                        <th scope="col">1</th>
                        <th scope="col">2</th>
                        <th scope="col">3</th>
                        <th scope="col">4</th>
                        <th scope="col">5</th>
                        <th scope="col">6</th>
                        <th scope="col">7</th>
                        <th scope="col">8</th>
                        <th scope="col">9</th>
                        <th scope="col">10</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->ism }}</td>
                            <td>{{ $post->familya }}</td>
                            <td>{{ $post->lavozim }}</td>
                            <td>{{ $post->stavka }}</td>
                            <td>{{ $post->sana1 }}</td>
                            <td>{{ $post->sana2 }}</td>
                            <td>{{ $post->sana3 }}</td>
                            <td>{{ $post->sana4 }}</td>
                            <td>{{ $post->sana5 }}</td>
                            <td>{{ $post->sana6 }}</td>
                            <td>{{ $post->sana7 }}</td>
                            <td>{{ $post->sana8 }}</td>
                            <td>{{ $post->sana9 }}</td>
                            <td>{{ $post->sana10 }}</td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="col-12 ">
                <nav aria-label="Page navigation example">
                    <ul class="pagination  p-5 justify-content-center ">
                        {{-- {{ $posts->links() }} --}}
                    </ul>
                </nav>
            </div>
        </section>
        <!-- End Welcome Section -->


        <!-- ======= Team Section ======= -->
        <section id="team" class="team">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Team</h2>
                    <p>Our hard working team</p>
                </header>

                <div class="row gy-4">

                    @foreach ($teams as $team)
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="member">
                                <div class="member-img">
                                    <img src="{{ asset('storage/' . $team->img) }}" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>{{ $team->name }}</h4>
                                    <span>{{ $team->lavozim }}</span>
                                    <p>
                                        {{ $team->about }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="/assets/img/team-2.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                                <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima
                                    suscipit corporis.
                                    Voluptate sed quas reiciendis animi neque sapiente.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="member">
                            <div class="member-img">
                                <img src="/assets/img/team-3.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                                <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt.
                                    Voluptates enim aut
                                    architecto porro aspernatur molestiae modi.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="400">
                        <div class="member">
                            <div class="member-img">
                                <img src="/assets/img/team-4.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                                <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut
                                    aliquid doloremque
                                    ut possimus ipsum officia.</p>
                            </div>
                        </div>
                    </div> --}}

                </div>

            </div>

        </section>
        <!-- End Team Section -->


        <!-- ======= Contact Section ======= -->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="section-title">Contact Us</h2>
                    </div>
                </div>

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2992.828310572292!2d72.39742557598872!3d40.710712471393855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38bcf348c80c5187%3A0x749ca758f0e8656f!2sAndijon%20bog%CA%BBshamol!5e1!3m2!1suz!2s!4v1683884056072!5m2!1suz!2s"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets/js/main.js"></script>

</body>

</html>
