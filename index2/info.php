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
                        <a class="nav-link" href="rooms.php">Rooms</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="dinning.php">Dinning</a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="contact.php">Contact Us</a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="info.php">Resort Info</a>

                    </li>




                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
       
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image\hotel.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">


                </div>
            </div>


        </div>


    </div>

    <div class="mb-6 flex w-full justify-center lg:px-0  my-4">
        <div class="container relative flex flex-1 flex-col">
            <h1 class="font-headline text-brand py-8 text-center text-3xl lg:text-4xl">Hotel information</h1>
            <p class="text-text w-full text-center text-lg">Find all the details you need for a great stay at Here.</p>
            <div class="flex flex-col pt-12">
                <h2 class="font-headline text-brand pb-8 text-center text-2xl lg:text-3xl">Our amenities</h2>
                <div class="flex w-full justify-center">
                    <div
                        class="grid gap-y-6 gap-x-2 sm:grid-cols-1 md:w-full md:grid-cols-3 lg:grid-cols-3 xl:flex xl:w-full xl:flex-row xl:justify-between">
                        <div class="flex justify-self-start">
                            <div class="self-start"><svg height="auto" width="32" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="m0 0v24h24v-24z" fill="none"></path>
                                    <path
                                        d="m19.65 7.5-2.86 2.86c-.57.57-1.58.57-2.15 0-.59-.59-.59-1.56 0-2.15l2.86-2.86c.2-.2.2-.51 0-.71s-.51-.2-.71 0l-2.86 2.86c-.86.86-.97 2.19-.32 3.17l-1.12 1.12-7.14-7.14c-.11-.11-.25-.15-.39-.14-.14 0-.28.03-.39.14l-.35.35c-.47.47-.73 1.1-.73 1.77s.26 1.3.73 1.77l4.24 4.24c.09.09.22.15.35.15s.26-.05.35-.15l1.45-1.45 1.17 1.17-6.15 6.15c-.2.2-.2.51 0 .71.1.1.23.15.35.15s.26-.05.35-.15l7.97-7.97c.41.27.89.42 1.39.42.67 0 1.31-.26 1.78-.74l2.86-2.86c.2-.2.2-.51 0-.71s-.51-.2-.71 0zm-10.82 4.21-3.89-3.89c-.28-.28-.44-.66-.44-1.06s.16-.78.44-1.06l.03-.03 4.95 4.95z">
                                    </path>
                                    <path
                                        d="m15.36 9.64c.1.1.23.15.35.15s.26-.05.35-.15l2.86-2.86c.2-.2.2-.51 0-.71s-.51-.2-.71 0l-2.86 2.86c-.2.2-.2.51 0 .71z">
                                    </path>
                                    <path
                                        d="m14.35 13.65c-.2-.2-.51-.2-.71 0s-.2.51 0 .71l5 5c.1.1.23.15.35.15s.26-.05.35-.15c.2-.2.2-.51 0-.71l-5-5z">
                                    </path>
                                </svg></div>
                            <div class="pl-4">
                                <h3 class="text-xl font-bold">Dining</h3>
                                <p class="pt-2 text-base">On-site restaurant</p>
                                <p class="pt-2 text-base">Room service</p>
                            </div>
                        </div>
                        <div class="flex justify-self-start">
                            <div class="self-start"><svg height="auto" width="34" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="m0 0v24h24v-24z" fill="none"></path>
                                    <path
                                        d="m15 10.5h-6c-.28 0-.5.22-.5.5s.22.5.5.5h6c.28 0 .5-.22.5-.5s-.22-.5-.5-.5z">
                                    </path>
                                    <path
                                        d="m15 12.5h-6c-.28 0-.5.22-.5.5s.22.5.5.5h6c.28 0 .5-.22.5-.5s-.22-.5-.5-.5z">
                                    </path>
                                    <path
                                        d="m4 15.5c.18 0 .34-.04.5-.09v1.59c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5v-10c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v1.59c-.16-.06-.32-.09-.5-.09-.83 0-1.5.67-1.5 1.5v4c0 .83.67 1.5 1.5 1.5zm1.5-8.5c0-.28.22-.5.5-.5s.5.22.5.5v10c0 .28-.22.5-.5.5s-.5-.22-.5-.5zm-2 3c0-.28.22-.5.5-.5s.5.22.5.5v4c0 .28-.22.5-.5.5s-.5-.22-.5-.5z">
                                    </path>
                                    <path
                                        d="m20 8.5c-.18 0-.34.04-.5.09v-1.59c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v10c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5v-1.59c.16.06.32.09.5.09.83 0 1.5-.67 1.5-1.5v-4c0-.83-.67-1.5-1.5-1.5zm-1.5 8.5c0 .28-.22.5-.5.5s-.5-.22-.5-.5v-10c0-.28.22-.5.5-.5s.5.22.5.5zm2-3c0 .28-.22.5-.5.5s-.5-.22-.5-.5v-4c0-.28.22-.5.5-.5s.5.22.5.5z">
                                    </path>
                                </svg></div>
                            <div class="pl-4">
                                <h3 class="text-xl font-bold">Fitness and recreation</h3>
                                <p class="pt-2 text-base">Indoor pool</p>
                                <p class="pt-2 text-base">Fitness center</p>
                                <p class="pt-2 text-base">Spa</p>
                            </div>
                        </div>
                        <div class="flex justify-self-start">
                            <div class="self-start"><svg width="32" height="auto" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="m0 0v24h24v-24z" fill="none"></path>
                                    <path
                                        d="m11 11.5h2c.28 0 .5-.22.5-.5s-.22-.5-.5-.5h-2c-.28 0-.5.22-.5.5s.22.5.5.5z">
                                    </path>
                                    <path
                                        d="m7 13.5h10c1.38 0 2.5-1.12 2.5-2.5v-3c0-.28-.22-.5-.5-.5h-14c-.28 0-.5.22-.5.5v3c0 1.38 1.12 2.5 2.5 2.5zm-1.5-5h13v2.5c0 .83-.67 1.5-1.5 1.5h-10c-.83 0-1.5-.67-1.5-1.5z">
                                    </path>
                                    <path
                                        d="m5 19.5h14c.28 0 .5-.22.5-.5v-4.5c0-.28-.22-.5-.5-.5s-.5.22-.5.5v4h-13v-4c0-.28-.22-.5-.5-.5s-.5.22-.5.5v4.5c0 .28.22.5.5.5z">
                                    </path>
                                    <path
                                        d="m10 4.5c-.83 0-1.5.67-1.5 1.5 0 .28.22.5.5.5s.5-.22.5-.5.22-.5.5-.5h4c.28 0 .5.22.5.5s.22.5.5.5.5-.22.5-.5c0-.83-.67-1.5-1.5-1.5z">
                                    </path>
                                </svg></div>
                            <div class="pl-4">
                                <h3 class="text-xl font-bold">Business and work</h3>
                                <p class="pt-2 text-base">Meeting rooms</p>
                            </div>
                        </div>
                        <div class="flex justify-self-start">
                            <div class="self-start"><svg height="auto" width="32" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="m0 0v24h24v-24z" fill="none"></path>
                                    <path
                                        d="m4 19.5c.28 0 .5-.22.5-.5 0-1.65 1.35-3 3-3s3 1.35 3 3c0 .28.22.5.5.5s.5-.22.5-.5c0-1.57-.92-2.92-2.25-3.58.75-.55 1.25-1.43 1.25-2.42 0-1.65-1.35-3-3-3s-3 1.35-3 3c0 1 .49 1.88 1.25 2.42-1.32.65-2.25 2-2.25 3.58 0 .28.22.5.5.5zm1.5-6.5c0-1.1.9-2 2-2s2 .9 2 2-.9 2-2 2-2-.9-2-2z">
                                    </path>
                                    <path
                                        d="m12.5 13.5c0 .28.22.5.5.5s.5-.22.5-.5c0-1.65 1.35-3 3-3s3 1.35 3 3c0 .28.22.5.5.5s.5-.22.5-.5c0-1.57-.92-2.92-2.25-3.58.75-.55 1.25-1.43 1.25-2.42 0-1.65-1.35-3-3-3s-3 1.35-3 3c0 1 .49 1.88 1.25 2.42-1.32.65-2.25 2-2.25 3.58zm2-6c0-1.1.9-2 2-2s2 .9 2 2-.9 2-2 2-2-.9-2-2z">
                                    </path>
                                </svg></div>
                            <div class="pl-4">
                                <h3 class="text-xl font-bold">Guest services</h3>
                                <p class="pt-2 text-base">Concierge</p>
                            </div>
                        </div>
                        <div class="flex justify-self-start">
                            <div class="self-start"><svg height="auto" width="32" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="m0 0v24h24v-24z" fill="none"></path>
                                    <path
                                        d="m12 3.5c-4.69 0-8.5 3.81-8.5 8.5s3.81 8.5 8.5 8.5 8.5-3.81 8.5-8.5-3.81-8.5-8.5-8.5zm0 16c-4.14 0-7.5-3.36-7.5-7.5s3.36-7.5 7.5-7.5 7.5 3.36 7.5 7.5-3.36 7.5-7.5 7.5z">
                                    </path>
                                    <path
                                        d="m15.7 13.57c-.24-.14-.54-.06-.68.18-.64 1.1-1.77 1.75-3.01 1.75s-2.38-.65-3.01-1.75c-.14-.24-.45-.32-.68-.18-.24.14-.32.45-.18.68.81 1.39 2.29 2.25 3.88 2.25s3.07-.86 3.88-2.25c.14-.24.06-.54-.18-.68z">
                                    </path>
                                    <circle cx="9.5" cy="9.5" r="1"></circle>
                                    <circle cx="14.5" cy="9.5" r="1"></circle>
                                </svg></div>
                            <div class="pl-4">
                                <h3 class="text-xl font-bold">Conveniences</h3>
                                <p class="pt-2 text-base">Free WiFi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
   
   
    <footer class="py-5 bg-black">

        <div class="w-100 footer-padding bg-light">

            <div class="container container-1280">
                <div class="footer-nav w-100">
                    <div class="row ">
                        <div class="col logo-social d-flex flex-column">
                            
                            <div class="social-networks box-15 ">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

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