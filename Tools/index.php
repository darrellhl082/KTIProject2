<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Bootstrap/bootstrap-5.1.0-dist/css/bootstrap.min.css">
    <!-- My Css -->
    <link rel="stylesheet" href="style.css">
    <title>Tools</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">MACA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../Home/index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Class
                        </a>
                        <ul class="dropdown-menu " style="background-color: #e0e0e0;" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">10 IPA 2</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="container main">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Tools</h1>
            </div>
        </div>
        <div class="row justify-content-around text-center">
            <div class="col-md-4 mt-4 box">
                <a href="#">
                    <img class="icon" src="img/graphic.svg" alt="">
                    <h4 class="icon-title mt-2">Create Equation Graphic</h4>
                </a>
            </div>
            <div class="col-md-4 mt-4 box">
                <a href="#">
                    <img class="icon" src="img/celsius.svg" alt="">
                    <h4 class="icon-title mt-2">Temperature Converter</h4>
                </a>
            </div>
            <div class="col-md-4 mt-4 box">
                <a href="#">
                    <img class="icon" src="img/algebra.svg" alt="">
                    <h4 class="icon-title mt-2">Algebra Linear Solve</h4>
                </a>
            </div>



        </div>
    </div>


    <!-- Jquery -->
    <script src="../Js/Jquery/jquery-3.6.0.min.js"></script>
    <!-- Bootrap js -->
    <script src="../Bootstrap/bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js"></script>
    <!-- My Script -->
    <script src="script.js"></script>


</body>

</html>