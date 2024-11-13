<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <style>
        .imgsize {
            width: 100%;
            height: 65vh;
        }

        .ht-login {
            height: 65vh;
            border-radius: 0px 15px 15px 0px;
        }

        .card-header {
            height: 25vh;
            align-content: center;
        }

        .slide {
            overflow: hidden;
            border-radius: 15px 0px 0px 15px;
        }

        .btn {
            width: 100%;
            height: 3rem;
        }

        @media (max-width:767px) {

            .slide,
            .ht-login {
                border-radius: 0px !important;
            }
        }
    </style>

</head>

<body>

    <main class="mt-5 pt-5">
        <div class="container-fluid">
            <div class="row g-0 justify-content-center">
                <div class="col-md-6 slide">
                    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/one.jpg" class="d-block w-100 imgsize" alt="pexels-pixabay-147411">
                            </div>
                            <div class="carousel-item">
                                <img src="images/two.jpg" class="d-block w-100 imgsize" alt="pexels-pixabay-158063">
                            </div>
                            <div class="carousel-item">
                                <img src="images/three.jpg" class="d-block w-100 imgsize" alt="pexels-singkham-178541-1108572">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card ht-login">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Login</h3>
                        </div>
                        <div class="card-body h-100">
                            <form class="mt-3">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" placeholder=" " />
                                    <label for="userID">User ID</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="password" placeholder=" " />
                                    <label for="inputPassword">Password</label>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                        <label class="form-check-label" for="inputRememberPassword">Remember Me</label>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <a class="small decoration-none" href="#">Forgot Password?</a>
                                    </div>
                                </div>
                                <div class="mx-auto mt-3">
                                    <input type="submit" class="btn btn-primary" value="Login" name="action">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>