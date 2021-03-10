<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/Dasbord_css.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
    window.onload = function() {

        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            title: {
                text: "GRAPH"
            },
            axisY: {
                title: "Units Sold",
                valueFormatString: "#0,,.",
                suffix: "mn",
                stripLines: [{
                    value: 3366500,
                    label: "Average"
                }]
            },
            data: [{
                yValueFormatString: "#,### Units",
                xValueFormatString: "YYYY",
                type: "spline",
                dataPoints: [{
                        x: new Date(2002, 0),
                        y: 2506000
                    },
                    {
                        x: new Date(2003, 0),
                        y: 2798000
                    },
                    {
                        x: new Date(2004, 0),
                        y: 3386000
                    },
                    {
                        x: new Date(2005, 0),
                        y: 6944000
                    },
                    {
                        x: new Date(2006, 0),
                        y: 6026000
                    },
                    {
                        x: new Date(2007, 0),
                        y: 2394000
                    },
                    {
                        x: new Date(2008, 0),
                        y: 1872000
                    },
                    {
                        x: new Date(2009, 0),
                        y: 2140000
                    },
                    {
                        x: new Date(2010, 0),
                        y: 7289000
                    },
                    {
                        x: new Date(2011, 0),
                        y: 4830000
                    },
                    {
                        x: new Date(2012, 0),
                        y: 2009000
                    },
                    {
                        x: new Date(2013, 0),
                        y: 2840000
                    },
                    {
                        x: new Date(2014, 0),
                        y: 2396000
                    },
                    {
                        x: new Date(2015, 0),
                        y: 1613000
                    },
                    {
                        x: new Date(2016, 0),
                        y: 2821000
                    },
                    {
                        x: new Date(2017, 0),
                        y: 2000000
                    }
                ]
            }]
        });
        chart.render();

    }
    </script>
    <style>
    body {
        background-color: rgb(235, 235, 235);
    }

    nav {
        background-color: #830bfb;
       
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" style=" color: whitesmoke;"href="#">Navbar</a>
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
    <section class="p-4 my-container">
        <div class="content">
            <div class="container mt-5">
                <h1 style="text-align: center; margin-bottom:5%;">Dashboard</h1>
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-lg-12" style="width:100%; height:100%;">
                        <div class="row">
                            <div class="col-xs-12 col-md-6 col-lg-6">
                                <div id="testbox2" style=" display: flex;justify-content: center;align-items: center;">
                                    <div id="chartContainer" style="height:80%; width: 80%;"></div>
                                    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                                </div>
                            </div>
                            <div class="col-xs-12  col-md-6 col-lg-6">
                                <div style="width: 100%;" id="testbox3">
                                    <h6 style="margin-left:2%; margin-top:5%;">Room A</h6><br>
                                    <div class="row"
                                        style=" display: flex; justify-content: center;align-items: center; ">
                                        <div id="set1">
                                            <div class="col-xs" id="temp1">
                                                <h6>Temperature</h6>
                                                <h6>22 C</h6>
                                            </div>
                                        </div>
                                        <div id="set1" style="margin-left:5px;">
                                            <div class="col-xs" id="temp1">

                                                <h6>Humidity</h6>
                                                <h6>22 C</h6>
                                            </div>
                                        </div>
                                        <div id="set1" style="margin-left:5px;">
                                            <div class="col-xs" id="temp1">
                                                <h6>Light</h6>
                                                <h6>22 C</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <h6 style="margin-left:2%; margin-top:5%;">Room B</h6><br>
                                    <div class="row"
                                        style=" display: flex;justify-content: center;align-items: center;">

                                        <div id="set1">
                                            <div class="col-xs" id="temp1">

                                                <h6>Temperature</h6>
                                                <h6>22 C</h6>
                                            </div>
                                        </div>
                                        <div id="set1" style="margin-left:5px;">
                                            <div class="col-xs" id="temp1">

                                                <h6>Humidity</h6>
                                                <h6>22 C</h6>
                                            </div>
                                        </div>
                                        <div id="set1" style="margin-left:5px;">
                                            <div class="col-xs" id="temp1">

                                                <h6>Light</h6>
                                                <h6>22 C</h6>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-12 col-lg-12" id="show1">
                        <div class="row" style=" margin-top:4%; margin-bottom:4%; ">
                            <div class="col-md-4">
                                <div id="show2">

                                    <h6><img src="./icon/switch-on.png">24/2/2021(test)</h6>
                                    <hr>
                                    <h6> <img src="./icon/switch-on.png">24/2/2021(test)</h6>
                                    <hr>
                                    <h6> <img src="./icon/switch-on.png">24/2/2021(test)</h6>
                                    <hr>
                                    <h6> <img src="./icon/switch-on.png">24/2/2021(test)</h6>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div id="show2">
                                    <h6><img src="./icon/switch-off.png">24/2/2021(test)</h6>
                                    <hr>
                                    <h6> <img src="./icon/switch-on.png">24/2/2021(test)</h6>
                                    <hr>
                                    <h6> <img src="./icon/switch-on.png">24/2/2021(test)</h6>
                                    <hr>
                                    <h6> <img src="./icon/switch-on.png">24/2/2021(test)</h6>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div id="show2">

                                    <h6><img src="./icon/switch-on.png">24/2/2021(test)</h6>
                                    <hr>
                                    <h6> <img src="./icon/switch-on.png">24/2/2021(test)</h6>
                                    <hr>
                                    <h6> <img src="./icon/switch-on.png">24/2/2021(test)</h6>
                                    <hr>
                                    <h6> <img src="./icon/switch-on.png">24/2/2021(test)</h6>
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