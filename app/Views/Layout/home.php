<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rajasaland</title>

    <!-- new href link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- slick js  -->
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />

    <!-- Bootstrap -->
    <link rel="shortcut icon" href="<?= base_url('') ?>/images/logo.svg" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/normailize.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">

</head>

<body>
    <!-- new navbar -->
    <section class=" h-100 w-100" style="box-sizing: border-box; background-color: #141432">
        <div class="fixed-top header-4-3 container-xxl mx-auto p-0 position-fixed" style="font-family: 'Poppins', sans-serif; background-color: #141432">
            <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
                <a href="#">
                    <img style="margin-right: 0.75rem" src="<?= base_url('') ?>/images/logo.svg" height="60" alt="" />
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo">
                    <ul class="navbar-nav mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#" style="color: #e7e7e8">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#fasilitas">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#harga">Project</a>
                        </li>
                        <li class="nav-item">
                            <a href="#why" class="nav-link">Berita</a>
                        </li>
                        <li>
                            <a class="primary-button" href="#Form"><span>Contact Us</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>

    <!-- Content -->
    <?= $this->renderSection('content') ?>

    <footer class="page-footer font-small blue pt-4">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row footer">

                <!-- Grid column -->
                <div class="col-md-3 mt-md-0 mt-3">

                    <!-- Content -->
                    <h5 class="text-h">Rajasalalnd</h5>
                    <h6>Description</h6>
                    <p class="tp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate venenatis massa, quis volutpat ligula. In id magna in orci maximus maximus. Nullam nec sagittis velit.</p>


                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-h">Latest Events</h5>
                    <h6>Description</h6>
                    <div class="tp">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate venenatis massa, quis volutpat ligula. In id magna in orci maximus maximus. Nullam nec sagittis velit.</p>
                    </div>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-h">Upcoming events</h5>
                    <h6>Description</h6>
                    <div class="tp">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate venenatis massa, quis volutpat ligula. In id magna in orci maximus maximus. Nullam nec sagittis velit. </p>
                    </div>
                </div>
                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-h">Contact Us</h5>
                    <h6>Description</h6>
                    <div class="tp">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate venenatis massa, quis volutpat ligula. In id magna in orci maximus maximus. Nullam nec sagittis velit.</p>
                    </div>
                </div>

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">
            Rajasaland<br>
            Copyright 2021
        </div>
        <!-- Copyright -->

    </footer>
    <!-- end section4 -->

    <!-- modal responsive menu -->
    <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog" aria-labelledby="targetModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" sytle="position:absolute; z-index: 1000;">
            <div class="modal-content border-0" style="background-color: #141432">
                <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                    <a class="modal-title" id="targetModalLabel">
                        <img style="margin-top: 0.5rem" src="<?= base_url('') ?>/images/logo.svg" height="60" alt="" />
                    </a>
                    <button type="button" class="close btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                    <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#" style="color: #e7e7e8">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#fasilitas">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#harga">Project</a>
                        </li>
                        <li class="nav-item">
                            <a href="#why" class="nav-link">Berita</a>
                        </li>
                        <li class="mt-3">
                            <a class="primary-button" href="#Form"><span>Contact Us</span></a>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer border-0 gap-3" style="padding: 2rem; padding-top: 0.75rem"></div>
            </div>
        </div>
    </div>
    <!-- end of modal responsive menu  -->
</body>


<!-- slick -->
<!-- <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/> -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->

<!-- js source  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.esm.min.js" integrity="sha384-pXJyILVSfKOB4xKYbM0dJr+oH4iVvo4s7mWbiTHe6LSxd38hl16DMj6AOJyy2Wcz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
<script src="js/script.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    });
</script>

</html>