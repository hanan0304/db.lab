<!doctype php>
<php lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>HANAN</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">RESORT RESERVATION</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="rooms.php">Rooms</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="dinning.php">Dinning</a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="info.php">Resort Info</a>

                    </li>

                    
                    

                </ul>
            </div>
        </div>
    </nav>
    <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image\pexels-julius-lucero-17037151.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="fadeInUp-1 ft-55 light-color heading-fonts" style="opacity: 1; top: 0px;">CLASSIC COMFORT
                    </h1>
                    <p>WARM CONTEMPORARY DESIGN</p>

                </div>
            </div>
            <div class="carousel-item">
                <img src="image\room 1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>AESTHETIC INTERIOR</h1>
                    <p>Inspiration is all around you. You just have to open your eyes and see it.</p>

                </div>
            </div>
            <div class="carousel-item">
                <img src="image\room 2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>LUXARY ROOMS</h2>
                    <p>Design is so simple. That's why it's so complicated.</p>

                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="cd-main-content">
        <div class="cd-tab-filter-wrapper position-relative">


            <div class="col-md-12 py-0 py-md-5  text-center">

                <h2
                    class="g-book ft-17 border-bottom d-inline-block px-3 border-color-dark mx-auto pt-5 pb-2 text-uppercase">
                    Accommodation</h2>

                <h4 class="heading-fonts ft-34 text-uppercase">Rooms Overview</h4>

                <p class="g-light col-12 col-md-6 col-lg-6 col-xl-3 mx-auto">Choose from a total of 605 lavishly
                    furnished rooms, with sleek and inviting interior perfectly set to create an unforgettable luxury
                    experience.</p>

            </div>



        </div>
        <div class="container">

            <div class="row no-gutters">
                <div class="col-md-12 col-lg-6 align-self-center text-center order-2 order-lg-1  ">
                    <h2 class="heading-fonts ft-30 mb-4 text-uppercase">Standard</h2>
                    <p class="px-0 px-md-4 w-75 mx-auto mb-4 g-light">Combining a neutral-colour palette with chic
                        furnishings, the compact-size Standard Room welcomes you to a pleasant stay.</p>
                    <div class="room-facilaties float-left w-100 d-flex mb-4">
                        <div class="mx-auto float-left w-100 d-flex pl-5 justify-content-center">
                            <span class="g-book ft-14 mx-3 float-left"> <span class="float-left g-book"><span
                                        style="font-weight: bold;">Room size</span><br> 322 Sq feet</span></span>
                            <span class="g-book ft-14 mx-3 float-left"> <span class="float-left g-book"><span
                                        style="font-weight: bold;">Bed Size(s)</span><br>1 King/Queen or
                                    Twin</span></span>
                            <span class="g-book ft-14 mx-3 float-left"> <span class="float-left g-book"><span
                                        style="font-weight: bold;">View</span><br>City View, Pool View</span></span>
                        </div>
                    </div>

                </div>
                <div class="col-md-12 col-lg-6 align-self-center order-1 order-lg-2">
                    <div class="carousel slide hall-slider2-6" data-ride="carousel">
                        <div id="room-details-show-6list" class="py-3 room-details-show pl-4" style="display: none">

                        </div>
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active"> <img
                                    src="https://www.pchotels.com/uploads/roomImages/6_01565334884.jpg"
                                    class="img-fluid w-100 mw-100"> </div>




                        </div>

                        <!-- Left and right controls -->
                    </div>
                </div>
            </div>

            <div class="row no-gutters">
                <div class="col-md-12 col-lg-6 align-self-center text-center  order-1 order-lg-2  ">
                    <h2 class="heading-fonts ft-30 mb-4 text-uppercase">Deluxe</h2>
                    <p class="px-0 px-md-4 w-75 mx-auto mb-4 g-light">Inspired by the rich cultural heritage of Lahore,
                        the spacious Deluxe Room furnishes modern furniture in earthen tones. </p>
                    <div class="room-facilaties float-left w-100 d-flex mb-4">
                        <div class="mx-auto float-left w-100 d-flex pl-5 justify-content-center">
                            <span class="g-book ft-14 mx-3 float-left"> <span class="float-left g-book"><span
                                        style="font-weight: bold;">Room size</span><br> 420 Sq feet</span></span>
                            <span class="g-book ft-14 mx-3 float-left"> <span class="float-left g-book"><span
                                        style="font-weight: bold;">Bed Size(s)</span><br>1 King or Twin</span></span>
                            <span class="g-book ft-14 mx-3 float-left"> <span class="float-left g-book"><span
                                        style="font-weight: bold;">View</span><br>City View, Pool View, <br>Atrium View,
                                    Garden View</span></span>
                        </div>
                    </div>

                </div>
                <div class="col-md-12 col-lg-6 align-self-center order-1order-lg-1">
                    <div class="carousel slide hall-slider2-12" data-ride="carousel">
                        <div id="room-details-show-12list" class="py-3 room-details-show pl-4" style="display: none">

                        </div>
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active"> <img
                                    src="https://www.pchotels.com/uploads/roomImages/12_01565334931.jpg"
                                    class="img-fluid w-100 mw-100"> </div>




                        </div>

                        <!-- Left and right controls -->
                    </div>
                </div>
            </div>

            <div class="row no-gutters">
                <div class="col-md-12 col-lg-6 align-self-center text-center order-2 order-lg-1  ">
                    <h2 class="heading-fonts ft-30 mb-4 text-uppercase">Executive</h2>
                    <p class="px-0 px-md-4 w-75 mx-auto mb-4 g-light">Furnishing chic and contemporary décor, the
                        Executive Room offers spacious interiors designed to your comfort. Avail exclusive check-in and
                        check-out facilities on the same ﬂoor, as well as free access to the Executive Lounge.</p>
                    <div class="room-facilaties float-left w-100 d-flex mb-4">
                        <div class="mx-auto float-left w-100 d-flex pl-5 justify-content-center">
                            <span class="g-book ft-14 mx-3 float-left"> <span class="float-left g-book"><span
                                        style="font-weight: bold;">Room size</span><br> 420 Sq feet</span></span>
                            <span class="g-book ft-14 mx-3 float-left"> <span class="float-left g-book"><span
                                        style="font-weight: bold;">Bed Size(s)</span><br>1 King or Twin</span></span>
                            <span class="g-book ft-14 mx-3 float-left"> <span class="float-left g-book"><span
                                        style="font-weight: bold;">View</span><br>City View, Pool View, <br>Atrium View,
                                    Garden View</span></span>
                        </div>
                    </div>

                </div>
                <div class="col-md-12 col-lg-6 align-self-center order-1 order-lg-2">
                    <div class="carousel slide hall-slider2-13" data-ride="carousel">
                        <div id="room-details-show-13list" class="py-3 room-details-show pl-4" style="display: none">

                        </div>
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active"> <img
                                    src="https://www.pchotels.com/uploads/roomImages/13_01565337651.jpg"
                                    class="img-fluid w-100 mw-100"> </div>




                        </div>

                        <!-- Left and right controls -->
                    </div>
                </div>
            </div>

            <div class="row no-gutters">
                <div class="col-md-12 col-lg-6 align-self-center text-center  order-1 order-lg-2  ">
                    <h2 class="heading-fonts ft-30 mt-4 mt-md-0 mb-4 text-uppercase">Business Suite</h2>
                    <p class="px-0 px-md-4 w-75 mx-auto mb-4 g-light">Equipping you to meet all your business needs, the
                        suite furnishes a workspace connecting to high-speed internet and surroundings that ensure
                        optimum focus and productivity.</p>
                    <div class="room-facilaties float-left w-100 d-flex mb-4">
                        <div class="mx-auto float-left w-100 d-flex pl-5 justify-content-center">
                            <span class="g-book ft-14 mx-3 float-left"> <span class="float-left g-book"><span
                                        style="font-weight: bold;">Room size</span><br> 484 Sq feet</span></span>
                            <span class="g-book ft-14 mx-3 float-left"> <span class="float-left g-book"><span
                                        style="font-weight: bold;">Bed Size(s)</span><br>1 King</span></span>
                            <span class="g-book ft-14 mx-3 float-left"> <span class="float-left g-book"><span
                                        style="font-weight: bold;">View</span><br>City View, Pool View, <br>Atrium View,
                                    Garden View</span></span>
                        </div>
                    </div>

                </div>
                <div class="col-md-12 col-lg-6 align-self-center order-1order-lg-1">
                    <div class="carousel slide hall-slider-14" data-ride="carousel">


                        <!-- The slideshow -->

                        <div class="carousel-inner">
                            <div class="carousel-item active"> <img
                                    src="https://www.pchotels.com/uploads/roomImages/14_01565337669.jpg"
                                    class="img-fluid w-100 mw-100 object-fit"> </div>




                        </div>

                        <!-- Left and right controls -->

                    </div>
                </div>
            </div>

            <div class="row no-gutters">
                <div class="col-md-12 col-lg-6 align-self-center text-center order-2 order-lg-1  ">
                    <h2 class="heading-fonts ft-30 mt-4 mt-md-0 mb-4 text-uppercase">Deluxe Suite</h2>
                    <p class="px-0 px-md-4 w-75 mx-auto mb-4 g-light">Overlooking the beautiful city of Lahore, spacious
                        Deluxe Suite is a blend of comfort and magnificence. The impeccably-designed suite provides you
                        all the comforts of home.</p>
                    <div class="room-facilaties float-left w-100 d-flex mb-4">
                        <div class="mx-auto float-left w-100 d-flex pl-5 justify-content-center">
                            <span class="g-book ft-14 mx-3 float-left"> <span class="float-left g-book"><span
                                        style="font-weight: bold;">Room size</span><br> 877 Sq feet</span></span>
                            <span class="g-book ft-14 mx-3 float-left"> <span class="float-left g-book"><span
                                        style="font-weight: bold;">Bed Size(s)</span><br>1 King</span></span>
                            <span class="g-book ft-14 mx-3 float-left"> <span class="float-left g-book"><span
                                        style="font-weight: bold;">View</span><br>City View, Pool View, <br>Atrium View,
                                    Garden View</span></span>
                        </div>
                    </div>

                </div>
                <div class="col-md-12 col-lg-6 align-self-center order-1 order-lg-2">
                    <div class="carousel slide hall-slider-15" data-ride="carousel">


                        <!-- The slideshow -->

                        <div class="carousel-inner">
                            <div class="carousel-item active"> <img
                                    src="https://www.pchotels.com/uploads/roomImages/15_01565337695.jpg"
                                    class="img-fluid w-100 mw-100 object-fit"> </div>




                        </div>

                        <!-- Left and right controls -->

                    </div>
                </div>
            </div>

            <div class="row no-gutters">
                <div class="col-md-12 col-lg-6 align-self-center text-center  order-1 order-lg-2  ">
                    <h2 class="heading-fonts ft-30 mt-4 mt-md-0 mb-4 text-uppercase">Presidential Suite</h2>
                    <p class="px-0 px-md-4 w-75 mx-auto mb-4 g-light">Luxuriate yourself in our elegantly-designed
                        Presidential Suite, and unwind in the master bedroom that offers views of the cityscape.</p>
                    <div class="room-facilaties float-left w-100 d-flex mb-4">
                        <div class="mx-auto float-left w-100 d-flex pl-5 justify-content-center">
                            <span class="g-book ft-14 mx-3 float-left"> <span class="float-left g-book"><span
                                        style="font-weight: bold;">Room size</span><br> 1,162 Sq feet</span></span>
                            <span class="g-book ft-14 mx-3 float-left"> <span class="float-left g-book"><span
                                        style="font-weight: bold;">Bed Size(s)</span><br>1 King</span></span>
                            <span class="g-book ft-14 mx-3 float-left"> <span class="float-left g-book"><span
                                        style="font-weight: bold;">View</span><br>City View, Mall Road
                                    View</span></span>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-12 col-lg-6 align-self-center order-1order-lg-1">
                    <div class="carousel slide hall-slider-16" data-ride="carousel">
                       

                        <!-- The slideshow -->

                        <div class="carousel-inner">
                            <div class="carousel-item active"> <img
                                    src="https://www.pchotels.com/uploads/roomImages/16_01565337705.jpg"
                                    class="img-fluid w-100 mw-100 object-fit"> </div>




                        </div>

                        <!-- Left and right controls -->

                    </div>
                </div>
            </div>
    </section>



    <footer class="py-5 bg-black">

        <div class="w-100 footer-padding bg-light">

            <div class="container container-1280">
                <div class="footer-nav w-100">
                    <div class="row ">
                        <div class="col logo-social d-flex flex-column">
                            
                            <div class="social-networks box-15  ">
                                <a title="Resort on Facebook"
                                    href="https://www.facebook.com/profile.php?id=100005459118677&mibextid=ZbWKwL" target="_blank">
                                    <img title="Resort on Facebook" alt="GuestReservations on Facebook"
                                        src="image\fb.jpeg">
                                </a>
                                <a title="Resort on Twitter" href="https://twitter.com/aesthatics15?t=4QN69ValtUVMQRE1sx8d-A&s=09"
                                    target="_blank">
                                    <img title="Resort on Twitter" alt="GuestReservations on Twitter"
                                        src="image\th.jpeg">
                                </a>
                                <a title="Resort on Instagram"
                                    href="https://instagram.com/hanan_zahid5?igshid=ZDdkNTZiNTM=" target="_blank">
                                    <img title="Resort on Instagram" alt="GuestReservations on Instagram"
                                        src="image\insta.jpeg">
                                </a>
                                
                            </div>
                        </div>
                        <div class="col nav-footer d-flex">
                            <div class="containers">
                                <h5>Learn More</h5>
                                <ul class="container">
                                    <li><a href="/info.php" title="About Us">About Us</a></li>
                                    <li><a href="/index.php" title="Home">Home</a></li>
                                    <li><a href="/rooms.php" title="Rooms">Rooms</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="container">
                                <h5>Get in Touch</h5>
                                <ul class="container>
                                    <li><a href=" /contact.php" title="Contact Us">Contact Us</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </footer>
</footer>
<footer class="py-5 bg-black">
    <div class="container px-5 ">
        <p class="m-0 text-center text-white small">Resort Reservation</p>
    </div>
</footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</php>