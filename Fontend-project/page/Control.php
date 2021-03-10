<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/controlstyle.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <style>
    body {
        background-color: rgb(235, 235, 235);
    }

    nav {
        background-color: #830bfb;
        color: white;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" style=" color: whitesmoke;" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="Dashboard.php">Dashboard<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Control.php">Control</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Log</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!-- <section class="p-4 my-container">
        <div class="content">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-lg-12" style="width:100%; height:100%; ">
                        <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-6">
                            <div style="text-align:center">
                                <button class="dot"><img src="./icon/gear.png" class="img1"></button>
                            </div>
                        </div>
                        </div>

                    </div>
                </div>
            </div>

    </section> -->


    <section class="p-4 my-container">
        <div class="content">
            <div class="container mt-5">
                <div class="row" style="background-color:blue;">
                    <div class="col-xs-12 col-md-12 col-lg-12" style="background-color:green; width:100%; height:100%;"
                        id="center">
                        <div class="row">
                            <div class="col-xs-12 col-md-12 col-lg-12"
                                style="background-color:yellow; width:100%; height:100%;" id="center">
                              
                                <div style="text-align:center">
                                   <h1>Setting  <img src="./icon/gear.png" class="img1" ></h1>
                                   <br><br>
                                   <button> Temperature </button>
                                   <button> Humidity </button>
                                   <button> Light </button>
                                </div>                          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>