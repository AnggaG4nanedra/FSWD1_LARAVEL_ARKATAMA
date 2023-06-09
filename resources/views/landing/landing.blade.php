<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>GIFTDISH</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('/') }}bs5landing/assets/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/') }}bs5landing/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Giftdish</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#layanan">Layanan</a></li>
                        <li class="nav-item"><a class="nav-link" href="#products">Products</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
            <li class="btn btn-primary btn-xl text-uppercase mx-auto">
                <a class="nav-link text-dark" href="{{ route('login') }}" >Login</a>
            </li>
            </nav>            
       
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Selamat Datang di GIFTDISH!</div>
                <div class="masthead-heading text-uppercase">BELLY BESTIE</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#layanan">Yuk</a>
            </div>
        </header>
        <!--carousel/slider-->
        <section class="page-section" id="Carousel">
            <div id="carouselExampleIndicators" class="carousel slide m-5" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('/') }}bs5landing/assets/img/carousels/1.jpg" class="d-block w-100 h-200" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('/') }}bs5landing/assets/img/carousels/2.jpg" class="d-block w-100 h-200" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </section>
        <!-- layanan-->
        <section class="page-section" id="layanan">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">layanan</h2>
                    <h3 class="section-subheading text-muted">Website Giftdish memiliki beberapa layanan sebagai berikut.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Commerce</h4>
                        <p class="text-muted">Produk Giftdish terjual di beberapa e-Commerce seperti Shopee Food, Go Food.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Website</h4>
                        <p class="text-muted">Bagi para pelanggan Giftdish "Bellybestie" bisa memesan melalui website kami yaitu giftdishbellybestie.com.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Keamanan Pembeli</h4>
                        <p class="text-muted">Bagi Giftdish keamanan pembeli menjadi nomor 1 dan bisa kami pastikan data pembeli akan terjaga dengan baik dan aman.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- deskripsi -->
        <section class="page-section" id="Description">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Apa itu Giftdish? </h2>
                    <h3 class="section-subheading text-muted">Selamat datang di "giftdish" - bisnis makanan yang penuh dengan kelezatan dan kreativitas! Didirikan oleh kami, mahasiswa administrasi bisnis dari UPN Veteran Jawa Timur, "giftdish" memiliki misi untuk memberikan pengalaman kuliner yang unik dan memikat hati kepada pelanggan kami.</h3>
                </div>
            </div>
        </section>
        <!-- products Grid-->
        <section class="page-section bg-light" id="products">
            <div class="container">
                <div class="text-center">

                    <h2 class="section-heading text-uppercase">Products</h2>
                    <h3 class="section-subheading text-muted">Berikut ini merupakan beberapa produk milik kami.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- products item 1-->
                        <div class="products-item">
                            <a class="products-link" data-bs-toggle="modal" href="#productsModal1">
                                <div class="products-hover">
                                    <div class="products-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('/') }}bs5landing/assets/img/products/1.jpg" alt="" />
                            </a>
                            <div class="products-caption">
                                <div class="products-caption-heading">Chicken Mentai S</div>
                                <div class="products-caption-subheading text-muted">Rp.18.000</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- products item 2-->
                        <div class="products-item">
                            <a class="products-link" data-bs-toggle="modal" href="#productsModal2">
                                <div class="products-hover">
                                    <div class="products-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('/') }}bs5landing/assets/img/products/2.jpg" alt="" />
                            </a>
                            <div class="products-caption">
                                <div class="products-caption-heading">Chicken Mentai M</div>
                                <div class="products-caption-subheading text-muted">Rp. 23.000</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- products item 3-->
                        <div class="products-item">
                            <a class="products-link" data-bs-toggle="modal" href="#productsModal3">
                                <div class="products-hover">
                                    <div class="products-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('/') }}bs5landing/assets/img/products/3.jpg" alt="" />
                            </a>
                            <div class="products-caption">
                                <div class="products-caption-heading">Chicken Mentai L</div>
                                <div class="products-caption-subheading text-muted">Rp. 30.000</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- products item 4-->
                        <div class="products-item">
                            <a class="products-link" data-bs-toggle="modal" href="#productsModal4">
                                <div class="products-hover">
                                    <div class="products-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('/') }}bs5landing/assets/img/products/4.jpg" alt="" />
                            </a>
                            <div class="products-caption">
                                <div class="products-caption-heading">Beef Mentai S</div>
                                <div class="products-caption-subheading text-muted">Rp. 25.000</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- products item 5-->
                        <div class="products-item">
                            <a class="products-link" data-bs-toggle="modal" href="#productsModal5">
                                <div class="products-hover">
                                    <div class="products-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('/') }}bs5landing/assets/img/products/5.jpg" alt="" />
                            </a>
                            <div class="products-caption">
                                <div class="products-caption-heading">Beef Mentai M</div>
                                <div class="products-caption-subheading text-muted">Rp. 35.000</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- products item 6-->
                        <div class="products-item">
                            <a class="products-link" data-bs-toggle="modal" href="#productsModal6">
                                <div class="products-hover">
                                    <div class="products-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('/') }}bs5landing/assets/img/products/6.jpg" alt="" />
                            </a>
                            <div class="products-caption">
                                <div class="products-caption-heading">Beef Mentai L</div>
                                <div class="products-caption-subheading text-muted">Rp. 45.000</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Seputar Perjalanan Rancangan Giftdish.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('/') }}bs5landing/assets/img/about/1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2021</h4>
                                <h4 class="subheading">Project Awal Giftdish</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Giftdish diawali dengan project awal yang berasal dari tugas kampus yang diharuskan untuk membuat bisnis sendiri.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('/') }}bs5landing/assets/img/about/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2022</h4>
                                <h4 class="subheading">R&D Awal GIFTDISH</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Untuk pengembangan Giftdish melakukan riset terhadap pasar para mahasiswa pada umumnya dan testimoni mengenai rasa awal produk kami.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('/') }}bs5landing/assets/img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>December 2022</h4>
                                <h4 class="subheading">Perjalanan GIFTDISH di Mulai</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Giftdish mulai debut penjualan di stan saat terdapat event di Alun-alun Surabaya. </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('/') }}bs5landing/assets/img/about/4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>July 2023</h4>
                                <h4 class="subheading">Ekspansi Menu Baru</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Untuk saat ini Giftdish sedang melakukan R&D mengenai Menu baru bertema roasted atau panggangan.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Yuk
                                <br />
                                Jadi bagian 
                                <br />
                                Cerita Kami!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Sederet Tim Kami</h2>
                    <h3 class="section-subheading text-muted">Member Of GIFTDISH.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ asset('/') }}bs5landing/assets/img/team/1.jpg" alt="..." />
                            <h4>Yoseph Santovino Roso</h4>
                            <p class="text-muted">Leader Team</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Yoseph Santovino Roso Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Yoseph Santovino Roso Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Yoseph Santovino Roso LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ asset('/') }}bs5landing/assets/img/team/2.jpg" alt="..." />
                            <h4>Daka Radhiyan Yahya</h4>
                            <p class="text-muted">Accounting</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Daka Radhiyan Yahya Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Daka Radhiyan Yahya Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Daka Radhiyan Yahya LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ asset('/') }}bs5landing/assets/img/team/3.jpg" alt="..." />
                            <h4>Angga Satria Ganendra</h4>
                            <p class="text-muted">Head Chef</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Angga Satria Ganendra Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Angga Satria Ganendra Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Angga Satria Ganendra LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Terima kasih telah mengunjungi halaman kami! Kami berharap pengalaman Anda di sini telah memberi Anda wawasan baru, inspirasi, dan informasi berharga. Kami siap membantu Anda mewujudkan impian dan mencapai tujuan Anda.<br> Salam Hangat, <br> 
                    Tim Kami </p></div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{{ asset('/') }}bs5landing/assets/img/logos/microsoft.svg" alt="..." aria-label="Microsoft Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{{ asset('/') }}bs5landing/assets/img/logos/google.svg" alt="..." aria-label="Google Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{{ asset('/') }}bs5landing/assets/img/logos/facebook.svg" alt="..." aria-label="Facebook Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{{ asset('/') }}bs5landing/assets/img/logos/ibm.svg" alt="..." aria-label="IBM Logo" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Hubungi Kami</h2>
                    <h3 class="section-subheading text-muted">Customer Service Kami Siap melayani saran dan kritik anda.</h3>
                </div>
                <!-- * * SB Forms Contact Form * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Pesan Telah Dikirim!</div>
                            Terima Kasih atas Sara yang diberikan, Rekan Giftdish
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Kirim Pesan</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; GIFTDISH 2023</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- products Modals-->
        <!-- products item 1 modal popup-->
        <div class="products-modal modal fade" id="productsModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('/') }}bs5landing/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Chicken Mentai S</h2>
                                    <p class="item-intro text-muted">Produk Pertama dari Giftdish.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('/') }}bs5landing/assets/img/products/1.jpg" alt="..." />
                                    <p>Izinkan kami memperkenalkan Anda pada kelezatan yang tak tertandingi: Chicken Mentai. Tidak hanya sekadar hidangan ayam biasa, tetapi juga sebuah masterpiece gastronomi yang menyatukan cita rasa gurih, lezat, dan menggigit.
                                    <br><br>
                                    Bayangkan potongan ayam yang sempurna, dipanggang dengan sempurna hingga kecokelatan dan renyah di luar, tetapi tetap lembut dan juicy di dalamnya. Lalu, ditutup dengan saus Mentai yang kaya akan rasa creamy, gurih, dan lembut yang terbuat dari perpaduan sempurna antara mayonnaise, keju, dan taburan berbagai rempah pilihan.
                                    <br><br>
                                    Chicken Mentai adalah harmoni sempurna antara cita rasa Timur dan Barat yang menyatu dalam satu gigitan. Ini adalah perpaduan kelezatan yang memukau, memanjakan lidah Anda dengan sensasi yang tak terlupakan. Setiap suapan adalah perjalanan melintasi lapisan rasa yang berpadu secara sempurna, menggoda selera dan mengirimkan kepuasan tak terkira</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Ukuran :</strong>
                                            Small
                                        </li>
                                        <li>
                                            <strong>Harga:</strong>
                                            Rp. 18.000
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" id="beliButton">Beli</button>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        TUTUP
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- products item 2 modal popup-->
        <div class="products-modal modal fade" id="productsModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('/') }}bs5landing/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Chicken Mentai M</h2>
                                    <p class="item-intro text-muted">Produk Kedua dari Giftdish.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('/') }}bs5landing/assets/img/products/2.jpg" alt="..." />
                                    <p>Izinkan kami memperkenalkan Anda pada kelezatan yang tak tertandingi: Chicken Mentai. Tidak hanya sekadar hidangan ayam biasa, tetapi juga sebuah masterpiece gastronomi yang menyatukan cita rasa gurih, lezat, dan menggigit.
                                    <br><br>
                                    Bayangkan potongan ayam yang sempurna, dipanggang dengan sempurna hingga kecokelatan dan renyah di luar, tetapi tetap lembut dan juicy di dalamnya. Lalu, ditutup dengan saus Mentai yang kaya akan rasa creamy, gurih, dan lembut yang terbuat dari perpaduan sempurna antara mayonnaise, keju, dan taburan berbagai rempah pilihan.
                                    <br><br>
                                    Chicken Mentai adalah harmoni sempurna antara cita rasa Timur dan Barat yang menyatu dalam satu gigitan. Ini adalah perpaduan kelezatan yang memukau, memanjakan lidah Anda dengan sensasi yang tak terlupakan. Setiap suapan adalah perjalanan melintasi lapisan rasa yang berpadu secara sempurna, menggoda selera dan mengirimkan kepuasan tak terkira</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Ukuran :</strong>
                                            Medium
                                        </li>
                                        <li>
                                            <strong>Harga :</strong>
                                            Rp. 23.000
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" id="beliButton">Beli</button>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        TUTUP
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- products item 3 modal popup-->
        <div class="products-modal modal fade" id="productsModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('/') }}bs5landing/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Chicken Mentai L</h2>
                                    <p class="item-intro text-muted">Produk Ketiga dari Giftdish.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('/') }}bs5landing/assets/img/products/3.jpg" alt="..." />
                                    <p>Izinkan kami memperkenalkan Anda pada kelezatan yang tak tertandingi: Chicken Mentai. Tidak hanya sekadar hidangan ayam biasa, tetapi juga sebuah masterpiece gastronomi yang menyatukan cita rasa gurih, lezat, dan menggigit.
                                    <br><br>
                                    Bayangkan potongan ayam yang sempurna, dipanggang dengan sempurna hingga kecokelatan dan renyah di luar, tetapi tetap lembut dan juicy di dalamnya. Lalu, ditutup dengan saus Mentai yang kaya akan rasa creamy, gurih, dan lembut yang terbuat dari perpaduan sempurna antara mayonnaise, keju, dan taburan berbagai rempah pilihan.
                                    <br><br>
                                    Chicken Mentai adalah harmoni sempurna antara cita rasa Timur dan Barat yang menyatu dalam satu gigitan. Ini adalah perpaduan kelezatan yang memukau, memanjakan lidah Anda dengan sensasi yang tak terlupakan. Setiap suapan adalah perjalanan melintasi lapisan rasa yang berpadu secara sempurna, menggoda selera dan mengirimkan kepuasan tak terkira</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Ukuran:</strong>
                                            Large
                                        </li>
                                        <li>
                                            <strong>Harga:</strong>
                                            Rp. 30.000
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" id="beliButton">Beli</button>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        TUTUP
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- products item 4 modal popup-->
        <div class="products-modal modal fade" id="productsModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('/') }}bs5landing/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Beef Mentai S</h2>
                                    <p class="item-intro text-muted">Produk Keempat dari Giftdish.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('/') }}bs5landing/assets/img/products/4.jpg" alt="..." />
                                    <p>Izinkan kami memperkenalkan Anda pada kelezatan yang tak tertandingi: Beef Mentai. Tidak hanya sekadar hidangan daging biasa, tetapi juga sebuah masterpiece gastronomi yang menyatukan cita rasa gurih, lezat, dan menggigit.
                                    <br><br>
                                    Bayangkan potongan daging yang sempurna, dipanggang dengan sempurna hingga kecokelatan dan renyah di luar, tetapi tetap lembut dan juicy di dalamnya. Lalu, ditutup dengan saus Mentai yang kaya akan rasa creamy, gurih, dan lembut yang terbuat dari perpaduan sempurna antara mayonnaise, keju, dan taburan berbagai rempah pilihan.
                                    <br><br>
                                    Beef Mentai adalah harmoni sempurna antara cita rasa Timur dan Barat yang menyatu dalam satu gigitan. Ini adalah perpaduan kelezatan yang memukau, memanjakan lidah Anda dengan sensasi yang tak terlupakan. Setiap suapan adalah perjalanan melintasi lapisan rasa yang berpadu secara sempurna, menggoda selera dan mengirimkan kepuasan tak terkira</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Ukuran:</strong>
                                            Small
                                        </li>
                                        <li>
                                            <strong>Harga :</strong>
                                            Rp. 25.000
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" id="beliButton">Beli</button>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        TUTUP
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- products item 5 modal popup-->
        <div class="products-modal modal fade" id="productsModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('/') }}bs5landing/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Beef Mentai M</h2>
                                    <p class="item-intro text-muted">Produk Kelima dari Giftdish.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('/') }}bs5landing/assets/img/products/5.jpg" alt="..." />
                                    <p>Izinkan kami memperkenalkan Anda pada kelezatan yang tak tertandingi: Beef Mentai. Tidak hanya sekadar hidangan daging biasa, tetapi juga sebuah masterpiece gastronomi yang menyatukan cita rasa gurih, lezat, dan menggigit.
                                    <br><br>
                                    Bayangkan potongan daging yang sempurna, dipanggang dengan sempurna hingga kecokelatan dan renyah di luar, tetapi tetap lembut dan juicy di dalamnya. Lalu, ditutup dengan saus Mentai yang kaya akan rasa creamy, gurih, dan lembut yang terbuat dari perpaduan sempurna antara mayonnaise, keju, dan taburan berbagai rempah pilihan.
                                    <br><br>
                                    Beef Mentai adalah harmoni sempurna antara cita rasa Timur dan Barat yang menyatu dalam satu gigitan. Ini adalah perpaduan kelezatan yang memukau, memanjakan lidah Anda dengan sensasi yang tak terlupakan. Setiap suapan adalah perjalanan melintasi lapisan rasa yang berpadu secara sempurna, menggoda selera dan mengirimkan kepuasan tak terkira</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Ukuran:</strong>
                                            Medium
                                        </li>
                                        <li>
                                            <strong>Harga:</strong>
                                            Rp. 35.000
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" id="beliButton">Beli</button>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        TUTUP
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- products item 6 modal popup-->
        <div class="products-modal modal fade" id="productsModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('/') }}bs5landing/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Beef Mentai L</h2>
                                    <p class="item-intro text-muted">Produk Keenam dari Giftdish.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('/') }}bs5landing/assets/img/products/6.jpg" alt="..." />
                                    <p>Izinkan kami memperkenalkan Anda pada kelezatan yang tak tertandingi: Beef Mentai. Tidak hanya sekadar hidangan daging biasa, tetapi juga sebuah masterpiece gastronomi yang menyatukan cita rasa gurih, lezat, dan menggigit.
                                    <br><br>
                                    Bayangkan potongan daging yang sempurna, dipanggang dengan sempurna hingga kecokelatan dan renyah di luar, tetapi tetap lembut dan juicy di dalamnya. Lalu, ditutup dengan saus Mentai yang kaya akan rasa creamy, gurih, dan lembut yang terbuat dari perpaduan sempurna antara mayonnaise, keju, dan taburan berbagai rempah pilihan.
                                    <br><br>
                                    Beef Mentai adalah harmoni sempurna antara cita rasa Timur dan Barat yang menyatu dalam satu gigitan. Ini adalah perpaduan kelezatan yang memukau, memanjakan lidah Anda dengan sensasi yang tak terlupakan. Setiap suapan adalah perjalanan melintasi lapisan rasa yang berpadu secara sempurna, menggoda selera dan mengirimkan kepuasan tak terkira</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Ukuran:</strong>
                                            Large
                                        </li>
                                        <li>
                                            <strong>Harga:</strong>
                                            Rp. 45.000
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" id="beliButton">Beli</button>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        TUTUP
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('/') }}bs5landing/js/scripts.js"></script>   
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
