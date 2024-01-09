<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyShop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="index.css">
</head>

<body style="background-color: #F0FFF0;">
    <nav class="navbar navbar-expand-lg bg-body-tertiary " data-bs-theme="dark">
        <div class="container-fluid">
            <img src="logo/default.png" style="width: 5%;" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-between">
                    <li class="nav-item">
                        <button class="filter-button btn btn-outline-primary ms-4" data-filter="all">All</button>
                    </li>
                    <li class="nav-item">
                        <button class="filter-button btn btn-outline-primary ms-4" data-filter="men">Men</button>

                    </li>
                    <li class="nav-item">
                        <button class="filter-button btn btn-outline-primary ms-4" data-filter="women">Women</button>
                    </li>
                    <li class="nav-item ri">
                        <!-- <img src="images/cart-arrow-down-icon.png" class="carti" width="3%" alt=""> -->
                        <button class="addtocartbtn btn btn-outline-success ms-4">Add To Cart</button>
                        <span id="cartcounter" style="color: white; font-weight:bold; margin-left:4px ">0</span>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-outline-primary ms-4" id="logbtn"><a href="login.php" target="_blank">Login</a></button>
                    </li>
                </ul>


            </div>
        </div>
    </nav>

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/c4.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/c5.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/c6.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <div class="container">
        <center>
            <h2 class="mt-4">Hello and Welcome to Our site. We offer you the best Cloths</h2>
            <h6>You can purchase Dresses for Men and Women and also you can filter the result for your convinience</h6>
        </center>
    </div>
    <center>
        <div class="container row row-cols-3 g-3 mt-5">
            <div class="card product" data-category="men" style="width: 22rem;">
                <img src="images/1.jpg" height="70%" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Men Suit</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="javascript:void(0);" class="btn btn-primary detailsBtn">See Details </a>
                    <button class="btn btn-secondary returnBtn" style="display: none;">Return</button>
                    <button class="count btn btn-primary addtocartbtn">Add To Cart </button>
                </div>
            </div>

            <div class="card product" data-category="women" style="width: 22rem;">
                <img src="images/2.jpg" height="70%" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Women Suit</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="javascript:void(0);" class="btn btn-primary detailsBtn">See Details </a>
                    <button class="btn btn-secondary returnBtn" style="display: none;">Return</button>

                    <button class="count btn btn-primary addtocartbtn">Add To Cart </button>
                </div>
            </div>

            <div class="card product" data-category="men" style="width: 22rem;">
                <img src="images/3.jpg" height="70%" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Men Suit</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="javascript:void(0);" class="btn btn-primary detailsBtn">See Details </a>
                    <button class="btn btn-secondary returnBtn" style="display: none;">Return</button>

                    <button class="count btn btn-primary addtocartbtn">Add To Cart </button>
                </div>
            </div>

            <div class="card product" data-category="women" style="width: 22rem;">
                <img src="images/18.jpg" height="70%" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Women Suit</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="javascript:void(0);" class="btn btn-primary detailsBtn">See Details </a>
                    <button class="btn btn-secondary returnBtn" style="display: none;">Return</button>

                    <button class="count btn btn-primary addtocartbtn">Add To Cart </button>
                </div>
            </div>

            <div class="card product" data-category="women" style="width: 22rem;">
                <img src="images/15.jpg" height="70%" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Women Suit</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="javascript:void(0);" class="btn btn-primary detailsBtn">See Details </a>
                    <button class="btn btn-secondary returnBtn" style="display: none;">Return</button>

                    <button class="count btn btn-primary addtocartbtn"> Add To Cart</button>
                </div>
            </div>

            <div class="card product" data-category="women" style="width: 22rem;">
                <img src="images/13.jpg" height="70%" class="card-img-top wi" alt="...">
                <div class="card-body wb">
                    <h5 class="card-title">Women Suit</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="javascript:void(0);" class="btn btn-primary detailsBtn">See Details </a>
                    <button class="btn btn-secondary returnBtn" style="display: none;">Return</button>

                    <button class="count btn btn-primary addtocartbtn"> Add To Cart </button>
                </div>
            </div>

            <div class="card product" data-category="men" style="width: 22rem;">
                <img src="images/6.jpg" height="70%" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Men Suit</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="javascript:void(0);" class="btn btn-primary detailsBtn">See Details </a>
                    <button class="btn btn-secondary returnBtn" style="display: none;">Return</button>

                    <button class="count btn btn-primary addtocartbtn"> Add To Cart </button>
                </div>
            </div>

            <div class="card product" data-category="women" style="width: 22rem;">
                <img src="images/12.jpg" height="70%" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Women Suit</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="javascript:void(0);" class="btn btn-primary detailsBtn">See Details </a>
                    <button class="btn btn-secondary returnBtn" style="display: none;">Return</button>

                    <button class="count btn btn-primary addtocartbtn"> Add To Cart </button>
                </div>
            </div>

            <div class="card product" data-category="men" style="width: 22rem;">
                <img src="images/8.jpg" height="70%" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Men Suit</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="javascript:void(0);" class="btn btn-primary detailsBtn">See Details </a>
                    <button class="btn btn-secondary returnBtn" style="display: none;">Return</button>

                    <button class="count btn btn-primary addtocartbtn"> Add To Cart </button>
                </div>
            </div>

            <div class="card product" data-category="women" style="width: 22rem;">
                <img src="images/9.jpg" height="70%" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Women Suit</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="javascript:void(0);" class="btn btn-primary detailsBtn">See Details </a>
                    <button class="btn btn-secondary returnBtn" style="display: none;">Return</button>

                    <button class="count btn btn-primary addtocartbtn"> Add To Cart </button>
                </div>
            </div>

            <div class="card product" data-category="women" style="width: 22rem;">
                <img src="images/10.jpg" height="70%" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Women Suit</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="javascript:void(0);" class="btn btn-primary detailsBtn">See Details </a>
                    <button class="btn btn-secondary returnBtn" style="display: none;">Return</button>

                    <button class="count btn btn-primary addtocartbtn">Add To Cart </button>
                </div>
            </div>

            <div class="card product" data-category="women" style="width: 22rem;">
                <img src="images/11.jpg" height="70%" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Women Suit</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="javascript:void(0);" class="btn btn-primary detailsBtn">See Details </a>
                    <button class="btn btn-secondary returnBtn" style="display: none;">Return</button>

                    <button class="count btn btn-primary addtocartbtn">Add To Cart </button>
                </div>
            </div>

            <div class="card product" data-category="men" style="width: 22rem;">
                <img src="images/7.jpg" height="70%" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Men Suit</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="javascript:void(0);" class="btn btn-primary detailsBtn">See Details </a>
                    <button class="btn btn-secondary returnBtn" style="display: none;">Return</button>

                    <button class="count btn btn-primary addtocartbtn"> Add To Cart </button>
                </div>
            </div>

            <div class="card product" data-category="men" style="width: 22rem;">
                <img src="images/5.jpg" height="70%" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Men Suit</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="javascript:void(0);" class="btn btn-primary detailsBtn">See Details </a>
                    <button class="btn btn-secondary returnBtn" style="display: none;">Return</button>

                    <button class="count btn btn-primary addtocartbtn"> Add To Cart </button>
                </div>
            </div>

            <div class="card product" data-category="women" style="width: 22rem;">
                <img src="images/14.jpg" height="70%" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Women Suit</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="javascript:void(0);" class="btn btn-primary detailsBtn">See Details </a>
                    <button class="btn btn-secondary returnBtn" style="display: none;">Return</button>

                    <button class="count btn btn-primary addtocartbtn">Add To Cart </button>
                </div>
            </div>

            <div class="card product" data-category="men" style="width: 22rem;">
                <img src="images/4.jpg" height="70%" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Men Suit</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="javascript:void(0);" class="btn btn-primary detailsBtn">See Details </a>
                    <button class="btn btn-secondary returnBtn" style="display: none;">Return</button>

                    <button class="count btn btn-primary addtocartbtn">Add To Cart </button>
                </div>
            </div>

            <div class="card product" data-category="women" style="width: 22rem;">
                <img src="images/16.jpg" height="70%" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Women Suit</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="javascript:void(0);" class="btn btn-primary detailsBtn">See Details </a>
                    <button class="btn btn-secondary returnBtn" style="display: none;">Return</button>

                    <button class="count btn btn-primary addtocartbtn">Add To Cart </button>
                </div>
            </div>


            <div class="card product" data-category="men" style="width: 22rem;">
                <img src="images/17.jpg" height="70%" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Men Suit</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="javascript:void(0);" class="btn btn-primary detailsBtn">See Details </a>
                    <button class="btn btn-secondary returnBtn" style="display: none;">Return</button>

                    <button class="count btn btn-primary addtocartbtn">Add to Cart</button>
                </div>
            </div>
        </div>
    </center>



    <footer style="background-color: black; color:white; height:30px" class="mt-5">
        <center>
            <h4>
                &copy; All right reserved by Ahmed Ayoub
            </h4>
        </center>
    </footer>






    <!-- <script src="AddToCart.js"></script> -->
    <script src="index.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>