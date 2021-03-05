<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5 Side Bar Navigation</title>
    <!-- bootstrap 5 css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
        integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="css/Dasbord_css.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
    window.onload = function() {

        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            title: {
                text: "Music Album Sales by Year"
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
</head>

<body>
    <nav class="navbar navbar-expand d-flex flex-column align-item-start" id="sidebar">
        <a href="#" class="navbar-brand text-light mt-5">
            <div class="display-5 font-weight-bold">FARM</div>
        </a>
        <ul class="navbar-nav d-flex flex-column mt-5 w-100">
            <li class="nav-item w-100">
                <a href="Dashboard.php" class="nav-link pl-4">Dashboard</a>
            </li>
            <li class="nav-item w-100">
                <a href="Control.php" class="nav-link pl-4">Control</a>
            </li>
            <li class="nav-item w-100">
                <a href="#" class="nav-link pl-4">Log</a>
            </li>
            <!-- <li class="nav-item dropdown w-100">
                <a href="#" class="nav-link dropdown-toggle text-light pl-4" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Service</a>
                <ul class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                    <li><a href="#" class="dropdown-item text-light pl-4 p-2">Service 01</a></li>
                    <li><a href="#" class="dropdown-item text-light pl-4 p-2">Service 02</a></li>
                    <li><a href="#" class="dropdown-item text-light pl-4 p-2">Service 03</a></li>
                </ul>
            </li> -->
            <li class="nav-item w-100">
                <a href="#" class="nav-link text-light pl-4">Contact</a>
            </li>
        </ul>
    </nav>
    <section class="p-4 my-container">
        <button class="btn my-4" id="menu-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filter-left"
                viewBox="0 0 12 12">
                <path
                    d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
            </svg>
        </button>

        <div class="content">
            <div class="container mt-5" >
                <h1 style="text-align: center; margin-bottom:5%;">Dashboard</h1>
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-lg-6" style="width:100%; height:100%">
                        <div class="row">
                            <div class="col-xs-12 col-md-6 col-lg-6">
                                <div  id="testbox2" >
                                <div id="chartContainer" style="height: 92%; width: 92%;"></div>
                                <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                                </div>
                            </div>
                            <div class="col-xs-12  col-md-6 col-lg-6" >
                                <div id="testbox3" style="width: 100%;">
                                    <div class="row"
                                        style=" display: flex;justify-content: center;align-items: center; margin-top:15%;">
                                        <a1>Room A</a1><br>
                                        <div class="col-md-4" id="set1">
                                            <div id="temp1">
                                                <h6>Temperature</้>
                                                <br>
                                                <a>22 C</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="set1">
                                            <div id="temp1">
                                                <a1>Humidity</a1>
                                                <br>
                                                <a2>22 C</a2>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="set1">
                                        <div id="temp1">
                                                <a1>Ligth</a1>
                                                <br>
                                                <a2>22 C</a2>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row"
                                        style=" display: flex;justify-content: center;align-items: center;">
                                        <a1>Room B</a1><br>
                                        <div class="col-md-4" id="set1">
                                            <div id="temp1">
                                                <a1>Ligth</a1>
                                                <br>
                                                <a2>22 C</a2>
                                            </div>
                                        </div>
                                      
                                        <div class="col-md-4" id="set1">
                                        <div id="temp1">
                                                <a1>Ligth</a1>
                                                <br>
                                                <a2>22 C</a2>
                                            </div>

                                        </div>
                                        <div class="col-md-4" id="set1">
                                        <div id="temp1">
                                                <a1>Ligth</a1>
                                                <br>
                                                <a2>22 C</a2>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-4 col-lg-4" id="show1">
                        <div class="row" style=" margin-top:4%; margin-bottom:4%;">
                            <div class="col-md-4" >
                                <div  id="show2">
                                    <a>24/2/2021(test)</a>
                                    <hr>
                                    <a>24/2/2021(test)</a>
                                    <hr>
                                    <a>24/2/2021(test)</a>
                                    <hr>
                                    <a>24/2/2021(test)</a>
                                </div>
                            </div>
                            <div class="col-md-4" >
                                <div id="show2">
                                    <a>24/2/2021(test)</a>
                                    <hr>
                                    <a>24/2/2021(test)</a>
                                    <hr>
                                    <a>24/2/2021(test)</a>
                                    <hr>
                                    <a>24/2/2021(test)</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div id="show2">
                                    <a>24/2/2021(test)</a>
                                    <hr>
                                    <a>24/2/2021(test)</a>
                                    <hr>
                                    <a>24/2/2021(test)</a>
                                    <hr>
                                    <a>24/2/2021(test)</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"
        integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous">
    </script>
    <!-- custom js -->
    <script>
    var menu_btn = document.querySelector("#menu-btn")
    var sidebar = document.querySelector("#sidebar")
    var container = document.querySelector(".my-container")
    menu_btn.addEventListener("click", () => {
        sidebar.classList.toggle("active-nav")
        container.classList.toggle("active-cont")
    })
    </script>
</body>

</html>