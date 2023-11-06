<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tigarasa Brewery Indonesia</title>
    <link href="{{asset ('css/ets.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2 /dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2 /dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Josefin+Sans&family=Roboto:wght@100&display=swap');
    </style>

</head>

<body>
    <div>
        <p>
            Nama : {{ $nama }}
            Alamat : {{ $alamat }}
            Umur : {{ $umur }}
        </p>
    </div>

    <div>
        <!-- Navbar-->
        <div>
            <div class="navbar navbar-expand-xl navbar-light bg-light border-bottom sticky-top">
                <div class="container">
                    <h2 class="bold nav-brand fw-bolder">TIGA<h2 class="bold text-danger fw-bolder">RASA</h2>
                    </h2>
                    <div class="collapse navbar-collapse navbar-right">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item-active nav-link"><a class="nav-link" href="#home">Home</a></li>
                            <li class="nav-item nav-link"><a class="nav-link" href="#product">Product</a></li>
                            <li class="nav-item nav-link"><a class="nav-link" href="#service">Services</a></li>
                            <li class="nav-item nav-link"><a class="nav-link" href="#outlet">Outlets</a></li>
                            <li class="nav-item nav-link"><a class="nav-link" href="#franchise">Franchise</a></li>
                        </ul>
                    </div>
                    <div class="dropdown-color">
                        <button class="navbar-toggler" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><span class="navbar-toggler-icon"></span></button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#home">Home</a>
                            <a class="dropdown-item" href="#product">Product</a>
                            <a class="dropdown-item" href="#service">Services</a>
                            <a class="dropdown-item" href="#outlet">Outlets</a>
                            <a class="dropdown-item" href="#franchise">Franchise</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Navbar End-->
        </div>

        <!--News-->
        <div class="container px-5" id="home">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 text-uppercase fw-bolder text-black mb-4">
                            About Tigarasa Coffee
                        </h1>
                            <p class="lead fw-normal text-black-50 mb-4">Tigarasa Coffee’s journey began with a single
                                dream: to make Indonesia famous for its specialty coffee. Our mission has always been to
                                bring you the very best that Indonesia has to offer. Like the red volcanic soil from
                                which we derive our name, the archipelago has rich, fertile soils, perfect for growing
                                specialty coffee.</p>
                            <p class="lead fw-normal text-black-50 mb-4">
                                Since the very beginning, all of our coffee is proudly sourced from Indonesia, where we
                                work closely with our farmers. From the crop on the farm to the cup in your hand, we are
                                present in every step of the process – planting, maintaining, cherry-picking,
                                processing, roasting, and brewing.</p>
                            <p class="lead fw-normal text-black-50 mb-4">
                                Famous for producing a wide variety of flavourful long-lasting tastes, Indonesian
                                coffees are renowned for being; full-bodied, intense, complex, smooth, sweet, syrupy,
                                fruity. With tasting notes of chocolate, caramel, hazelnut, blackberry jam, tobacco,
                                spicy, herbaceous & citrus! This is just a snapshot of how exciting, delicious, and
                                different our coffees can be.</p>
                            <p class="lead fw-normal text-black-50 mb-4">We take great pride in serving you our finest
                                international award-winning specialty grade
                                arabica coffees. Our passion for Indonesian Coffee – that is what connects us!</p>
                            <p class="lead fw-normal text-black-50 mb-4">For you, for the people we work with, and for
                                the future of specialty coffee in
                                Indonesia.</p>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5"
                            src="https://i.pinimg.com/564x/be/86/cc/be86cce52e2dcbe1a658a2a0dee82a22.jpg" /></div>
            </div>
        </div>
        <!--News End-->

        <!--Services-->
        <div class="text-center bg-bs-gray" id="service">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="mt-5">
                        <h1 class="text-black mb-3">Built with Passion</h1>
                        <h4>Having charged your heart and brain with a cup of coffee, you're ready to face the
                            challenges of life.</h4>
                        <h4 class="text-black-50 mb-5">- <i>Sahara Sanders</i></h4>
                        </div>
                    </div>
                </div>

                <!-- Services Images -->
                <div class="container">
                    <div class="bg-image link-zoom row">
                        <div class="bg-image col-lg-4 col-md-12 mb-4 mb-lg-0 link-zoom">
                            <img src="https://i.pinimg.com/564x/5d/a5/6c/5da56cd1e61c2241520ac619edcb92b4.jpg"
                                class="w-100 object-fit-cover shadow-1-strong rounded mb-4" />
                            <img src="https://i.pinimg.com/736x/4b/56/ca/4b56caa75eb62fbb2143d6ca0ecc44a3.jpg"
                                class="object-fit-cover w-100 shadow-1-strong rounded mb-4" />
                        </div>
                        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                            <img src="https://i.pinimg.com/564x/b8/23/e3/b823e3fe9dc7b46c36b688219e1a6eec.jpg"
                                class="w-100 object-fit-cover shadow-1-strong rounded mb-4" />
                            <img src="https://i.pinimg.com/736x/8e/4b/e8/8e4be80bb52a7ca1c304349a8b7917a7.jpg"
                                class="h-20 w-100 object-fit-cover shadow-1-strong rounded mb-4" />
                        </div>
                        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                            <img src="https://i.pinimg.com/564x/c8/21/7d/c8217d1d4444521dcdff9bd5fb36a842.jpg"
                                class="w-100 object-fit-cover shadow-1-strong rounded mb-4" />
                            <img src="https://i.pinimg.com/736x/89/c0/52/89c05281568f8fed1072c87aedce41a1.jpg"
                                class="w-100 object-fit-cover shadow-1-strong rounded mb-4" />
                        </div>

                    </div>
                </div>
            </div>
            <!--Services End-->

        <!--Products-->
            <div id="products">
                <div class="container pt-5 mt-3">
                    <h2 class="fw-bolder mb-4 text-center text-black">Our Products</h2>
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        <div class="col mb-5">
                            <div class="card h-100">
                                <img
                                    src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//103/MTA-27287284/sakha_coffee_sakha_coffee_-_biji_kopi_bubuk_arabika_bali_kintamani_arabica_coffee_roast_beans_espresso_dan_manual_brew_single_origin_coffe_bean_roastery_200_gram_full01_iavrw23e.jpg" />
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder">Kintamani Arabica</h5>
                                    </div>
                                </div>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                            href="https://www.blibli.com/p/sakha-coffee-biji-kopi-bubuk-arabika-bali-kintamani-arabica-coffee-roast-beans-espresso-dan-manual-brew-single-origin-coffe-bean-roastery-200-gram/ps--SAC-70149-00071?ds=SAC-70149-00071-00001&source=BRAND_PAGE&sid=d4af17386e7a08cb&cnc=false&pickupPointCode=PP-3268229&pid=SAC-70149-00071">View
                                            More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <img class="card-img-top"
                                    src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full/MTA-27136719/sakha_coffee_sakha_coffee_-_biji_kopi_bubuk_arabika_tana_toraja_sulawesi_arabica_coffee_roast_beans_espresso_dan_manual_brew_single_origin_coffe_roastery_200_gram_full01_o5i9l7eb.jpeg" />
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder">Toraja Arabica</h5>
                                    </div>
                                </div>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                            href="https://www.blibli.com/p/sakha-coffee-biji-kopi-bubuk-arabika-tana-toraja-sulawesi-arabica-coffee-roast-beans-espresso-dan-manual-brew-single-origin-coffe-roastery-200-gram/ps--SAC-70149-00065?ds=SAC-70149-00065-00001&source=BRAND_PAGE&sid=d4af17386e7a08cb&cnc=false&pickupPointCode=PP-3268229&pid=SAC-70149-00065">View
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <img class="card-img-top"
                                    src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//97/MTA-27287016/sakha_coffee_sakha_coffee_-_biji_kopi_bubuk_arabika_flores_ntt_arabica_coffee_roast_beans_espresso_dan_manual_brew_single_origin_coffe_bean_roastery_200_gram_full01_redy29bv.jpg" />
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder">Flores Arabica</h5>
                                    </div>
                                </div>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                            href="https://www.blibli.com/p/sakha-coffee-biji-kopi-bubuk-arabika-flores-ntt-arabica-coffee-roast-beans-espresso-dan-manual-brew-single-origin-coffe-bean-roastery-200-gram/ps--SAC-70149-00068?ds=SAC-70149-00068-00001&source=BRAND_PAGE&sid=d4af17386e7a08cb&cnc=false&pickupPointCode=PP-3268229&pid=SAC-70149-00068">View
                                            More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <img class="card-img-top"
                                    src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//99/MTA-28099331/sakha_coffee_sakha_coffee_biji_kopi_bubuk_arabika_papua_wamena_arabica_coffee_beans_coffe_200_gr_full01_jxc302pd.jpg" />
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder">Wamena Arabica</h5>
                                    </div>
                                </div>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                            href="https://www.blibli.com/p/sakha-coffee-biji-kopi-bubuk-arabika-papua-wamena-arabica-coffee-beans-coffe-200-gr/ps--SAC-70149-00093?ds=SAC-70149-00093-00001&source=BRAND_PAGE&sid=d4af17386e7a08cb&cnc=false&pickupPointCode=PP-3268229&pid=SAC-70149-00093">View
                                            More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Products End-->

            <!-- Outlets-->
            <div id="outlet">
                <div class="container px-lg-5 pt-3 mt-4 mb-4">
                    <span>
                        <h1 class="text-center text-black fw-bolder mt-4 mb-4">Outlets</h1>
                    </span>
                    <div class="row gx-5">
                        <div class="col-md-4 mb-3 ">
                            <div class="card">
                                <div class="card-body text-center">
                                    <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                    <a class="text-uppercase m-0" style="text-decoration:none"
                                        href="https://maps.app.goo.gl/kqwQDh7xC7oj3hum7">Tigarasa
                                        Coffee & Brewery Graha Famili Surabaya</a>
                                    <hr class="my-4" />
                                    <div class="small text-black-50">Area Komersial Graha Famili, Jl. Mayjend.
                                        Jonosewojo, Babatan, Wiyung, Surabaya
                                        Surabaya</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 ">
                            <div class="card">
                                <div class="card-body text-center">
                                    <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                    <a class="text-uppercase m-0" style="text-decoration:none"
                                        href="https://maps.app.goo.gl/eQHuLJGvtBy5oLy6A">Tigarasa
                                        Coffee Trans Icon Mall Surabaya</a>
                                    <hr class="my-4" />
                                    <div class="small text-black-50">Jl. Ahmad Yani No.260, Menanggal, Kec. Gayungan,
                                        Surabaya</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 ">
                            <div class="card">
                                <div class="card-body text-center">
                                    <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                    <a class="text-uppercase m-0" style="text-decoration:none"
                                        href="https://maps.app.goo.gl/gJ5QYz5QxkSFfFE9A">
                                        Tigarasa Coffee & Roastery Trunojoyo Surabaya</a>
                                    <hr class="my-4" />
                                    <div class="small text-black-50">Jl. Trunojoyo No.75, DR. Soetomo, Kec. Tegalsari,
                                        Surabaya</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 ">
                            <div class="card">
                                <div class="card-body text-center">
                                    <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                    <a class="text-uppercase m-0" style="text-decoration:none"
                                        href="https://maps.app.goo.gl/yVXvvPFBotHoKwHq8">Tigarasa
                                        Coffee & Roastery House of Sampoerna</a>
                                    <hr class="my-4" />
                                    <div class="small text-black-50">Kel, Taman, Jl. Sampoerna No.6, North Krembangan,
                                        Pabean Cantikan, Surabaya</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 ">
                            <div class="card">
                                <div class="card-body text-center">
                                    <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                    <a class="text-uppercase m-0" style="text-decoration:none"
                                        href="https://maps.app.goo.gl/bxoWXZwcCkqfRSx29">Tigarasa
                                        Coffee & Roastery Rungkut Surabaya
                                    </a>
                                    <hr class="my-4" />
                                    <div class="small text-black-50">Jl. Rungkut Industri Raya No.18, Kali Rungkut, Kec.
                                        Rungkut, Surabaya</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <div class="card">
                                <div class="card-body text-center height:100%">
                                    <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                    <a class="text-uppercase m-0" style="text-decoration:none"
                                        href="https://maps.app.goo.gl/cWf1hBHzKYB25Ysq9">Tigarasa
                                        Coffee & Brewery Tentrem Mall Semarang</a>
                                    <hr class="my-4" />
                                    <div class="small text-black-50">Jl. Gajahmada No.123, Pekunden, Kec. Semarang
                                        Tengah, Kota Semarang</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Outlets End-->

            <!--Franchise-->
            <div id="franchise">
                <div class="container-fluid bg-danger pt-4">
                    <div class="container justify-content-center px-4 mt-4">
                        <h1 class="fw-bolder text-center">Interested in Franchising?</h1>
                        <form class="was-validated" action="https://www.google.com" method="post"
                            onsubmit="return validate();">
                            <div class="mt-4 mb-3">
                                <textarea class="form-control is-invalid" id="validationTextarea"
                                    placeholder="Input your name here" required></textarea>
                                <div class="invalid-feedback">
                                    Please enter a name in the textarea.
                                </div>
                                <div class="mt-4 mb-3">
                                    <textarea class="form-control is-invalid" id="validationTextarea"
                                        placeholder="Email address" required></textarea>
                                    <div class="invalid-feedback">
                                        Please enter a email address in the textarea.
                                    </div>
                                    <div class="mt-4 mb-3">
                                        <textarea class="form-control is-invalid" id="validationTextarea"
                                            placeholder="Phone number" required></textarea>
                                        <div class="invalid-feedback">
                                            Please enter a phone number in the textarea.
                                        </div>
                                        <div class="mt-4 mb-3">
                                            <textarea class="form-control is-invalid" id="validationTextarea"
                                                placeholder="Message" required></textarea>
                                            <div class="invalid-feedback">
                                                Please enter a message in the textarea.
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <input type="submit" value="KIRIM" class="btn btn-primary text-center">
                                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--Franchise End-->

            <!--Closing-->
            <div class="bg-dark">
                <div
                    class="row align-content-center justify-content-between flex-column flex-sm-row container-fluid bg-dark">
                    <div class="col-auto text-white">Darrell Athaya</div>
                    <div class="col-auto">
                        <a href="#" target="_blank"><i class="bi bi-instagram"></i>
                            Instagram</a>
                        <a href="#" target="_blank">
                            <i class="#"></i> Linkedin</a>
                        <a href="#" target="_blank"><i class="bi bi-github"></i> Github</a>

                    </div>
                </div>
            </div>
            <!--Closing End-->
</body>

</html>
