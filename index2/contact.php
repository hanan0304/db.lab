

<!doctype html>
<html lang="en">

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
                        <a class="nav-link active" href="contact.php">Contact Us</a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="info.php">Resort Info</a>

                    </li>




                </ul>
            </div>
        </div>
    </nav>

    <div class="row">
        <div class="col-12 col-md-8 mx-auto py-5 mt-4">
        <form action="contactbk.php" method="POST">
                <div class="bg-dark d-inline-block mb-5 text-center">
                    <p class="g-book text-uppercase mb-0 py-3 px-3 px-md-4 ft-17 text-white">Your message to: <span
                            class="text-yellow"> RESORT RESERVATION</span></p>
                </div>
                <input type="hidden" name="_token" value="HjJ6rL8ZUo3zgiLEvGKxMhqQOPYBXaRtL4qN2SQl">
                <style type="text/css" media="screen">
                    .g-recaptcha iframe {
                        height: 86px !important;
                        width: 336px !important;
                    }
                </style>

                <input type="hidden" name="type" value="contactus">

                <div class="row">

                    <div class="col-12 col-md-2 mb-5">

                        <select id="title" name="title"
                            class="g-book ft-14 border-bottom border-left-0 border-right-0 border-top-0 border-color-dark w-100 pb-3"
                            style="padding-bottom:3px">

                            <option value="">Title</option>

                            <option>Mr.</option>

                            <option>Mrs.</option>

                            <option>Ms.</option>

                        </select>

                        <span class="message text-danger"></span>

                    </div>

                    <div class="col-12 col-md-4 mb-5">

                        <input type="text" id="first_name" name="first_name" placeholder="First Name"
                            onfocus="if(this.value==this.defaultValue)this.value='';"
                            onblur="if(this.value=='')this.value=this.defaultValue;"
                            class="g-book ft-14 border-bottom border-left-0 border-right-0 border-top-0 border-color-dark w-100 pb-3"
                            value="">

                        <span class="message text-danger"></span>



                    </div>

                    <div class="col-12 col-md-6 mb-5">

                        <input type="text" id="last_name" name="last_name" placeholder="Last Name"
                            onfocus="if(this.value==this.defaultValue)this.value='';"
                            onblur="if(this.value=='')this.value=this.defaultValue;"
                            class="g-book ft-14 border-bottom border-left-0 border-right-0 border-top-0 border-color-dark w-100 pb-3"
                            value="">

                        <span class="message text-danger"></span>

                    </div>



                    <div class="col-12 col-md-6 mb-4">

                        <input type="email" id="email" name="email" placeholder="Email"
                            onfocus="if(this.value==this.defaultValue)this.value='';"
                            onblur="if(this.value=='')this.value=this.defaultValue;"
                            class="g-book ft-14 border-bottom border-left-0 border-right-0 border-top-0 border-color-dark w-100 pb-3"
                            value="">

                        <span class="message text-danger"></span>

                    </div>



                    <div class="col-12 col-md-6 mb-4">

                        <input type="tel" id="number" name="number" placeholder="Phone"
                            onfocus="if(this.value==this.defaultValue)this.value='';"
                            onblur="if(this.value=='')this.value=this.defaultValue;"
                            class="g-book ft-14 border-bottom border-left-0 border-right-0 border-top-0 border-color-dark w-100 pb-3"
                            value="">

                        <span class="message text-danger"></span>

                        <div class="col-12 col-md-12  text-right">

                            <div class="form-check p-0">

                                <label class="form-check-label ft-14" for="check2">

                                    <input type="checkbox" class="form-check-input g-light ft-12 md-1" id="check"
                                        name="primary_number" value="1">

                                    Make phone number my primary contact option. </label>

                            </div>

                        </div>

                    </div>








                    <div class="col-12">

                        <label class="g-book ft-14 pb-3">HOW CAN WE HELP YOU?</label>

                        <textarea id="description" name="description" class="g-book ft-14 w-100 h-425 p-3"></textarea>

                        <span class="message text-danger"></span>

                    </div>





                    <div class="col-12 col-md-4 text-right">

                        <button id="contact_form"
                            class="btn btn-dark g-bold ft-17 d-inline-block py-2 px-5 text-uppercase text-yellow border-0 mt-3">
                            submit </button>

                    </div>

                </div>
            </form>
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
                                    href="https://www.facebook.com/profile.php?id=100005459118677&mibextid=ZbWKwL"
                                    target="_blank">
                                    <img title="Resort on Facebook" alt="GuestReservations on Facebook"
                                        src="image\fb.jpeg">
                                </a>
                                <a title="Resort on Twitter"
                                    href="https://twitter.com/aesthatics15?t=4QN69ValtUVMQRE1sx8d-A&s=09"
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
                                    <li><a href="/info.html" title="About Us">About Us</a></li>
                                    <li><a href="/index.html" title="Home">Home</a></li>
                                    <li><a href="/rooms.html" title="Rooms">Rooms</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="container">
                                <h5>Get in Touch</h5>
                                <ul class="container>
                                    <li><a href=" /contact.html" title="Contact Us">Contact Us</a></li>

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

</html>