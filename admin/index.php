<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
    <link rel="stylesheet" href="../css/card.css">

    <!-- Bootstrap core CSS -->

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Admin</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="./index.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./availablepg/index.php">
              <span data-feather="shopping-cart"></span>
              Available PGs
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./request/index.php">
              <span data-feather="shopping-cart"></span>
              PGs Request
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./pglist/index.php">
              <span data-feather="bar-chart-2"></span>
              PG List
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <!-- <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div> -->
        </div>
      </div>

      <div class="greetuser">
        <div class="greet">
          <h3>Hey, Admin</h3>
          <br>

          <p> Welcome Admin. Here you can manage PGs, PG's Owner and Paying Guests. Don't Forget to approve PGs which are available in request section</p>
        </div>
        <div class="userimage">
          <img src="./images/dashboardImages/andrew.png" alt="Admin Photo">
        </div>
      </div>
      <div class="availablepg">
        <h3>Available PGs</h3>

        <div class="row">
            <div class="pro-card col-md-3 col-sm-6 col-xs-12">
                <div class="cardPhoto">
                    <p class="forwhom">Boy</p>
                    <div class="rating">
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                    </div>
                    <img src="images/img1.jpg" alt="">
                </div>
                <div class="details">
                    <p>Paradise</p>
                </div>
                <div class="address">                   
                    <div id="eContact">
                        <a style="color:black; text-decoration:none;" href="#" target="_blank" rel="noopener"><i class="fa fa-map-marker">
                                <p>Delhi</p>
                            </i></a><br>
                        <a style="color:black; text-decoration:none;" href="#" target="_blank" rel="noopener"><i class="fa fa-map">
                            <p>12/24 Karol Bagh, New Delhi 110085</p>
                        </i></a><br>
                    </div>
                    <div class="finalDetails">
                        <i class="fa fa-inr price"> 4800/-</i>
                        <i class="ac">AC</i>
                    </div>

                </div>
            </div>
            <div class="pro-card col-md-3 col-sm-6 col-xs-12">
                <div class="cardPhoto">
                    <p class="forwhom">Boy</p>
                    <div class="rating">
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                    </div>
                    <img src="images/img1.jpg" alt="">
                </div>
                <div class="details">
                    <p>Paradise</p>
                </div>
                <div class="address">                   
                    <div id="eContact">
                        <a style="color:black; text-decoration:none;" href="#" target="_blank" rel="noopener"><i class="fa fa-map-marker">
                                <p>Delhi</p>
                            </i></a><br>
                        <a style="color:black; text-decoration:none;" href="#" target="_blank" rel="noopener"><i class="fa fa-map">
                            <p>12/24 Karol Bagh, New Delhi 110085</p>
                        </i></a><br>
                    </div>
                    <div class="finalDetails">
                        <i class="fa fa-inr price"> 4800/-</i>
                        <i class="ac">AC</i>
                    </div>

                </div>
            </div>
            <div class="pro-card col-md-3 col-sm-6 col-xs-12">
                <div class="cardPhoto">
                    <p class="forwhom">Boy</p>
                    <div class="rating">
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                    </div>
                    <img src="images/img1.jpg" alt="">
                </div>
                <div class="details">
                    <p>Paradise</p>
                </div>
                <div class="address">                   
                    <div id="eContact">
                        <a style="color:black; text-decoration:none;" href="#" target="_blank" rel="noopener"><i class="fa fa-map-marker">
                                <p>Delhi</p>
                            </i></a><br>
                        <a style="color:black; text-decoration:none;" href="#" target="_blank" rel="noopener"><i class="fa fa-map">
                            <p>12/24 Karol Bagh, New Delhi 110085</p>
                        </i></a><br>
                    </div>
                    <div class="finalDetails">
                        <i class="fa fa-inr price"> 4800/-</i>
                        <i class="ac">AC</i>
                    </div>

                </div>
            </div>
        </div>
        <div class="viewMore">
          <a href="../availablepg/index.php">View More</a>
        </div>
      </div>
      <div class="pgrequests">
        <h3>PG Requests</h3>

        <div class="row">
            <div class="pro-card col-md-3 col-sm-6 col-xs-12">
                <div class="cardPhoto">
                    <p class="forwhom">Boy</p>
                    <div class="rating">
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                    </div>
                    <img src="images/img1.jpg" alt="">
                </div>
                <div class="details">
                    <p>Paradise</p>
                </div>
                <div class="address">                   
                    <div id="eContact">
                        <a style="color:black; text-decoration:none;" href="#" target="_blank" rel="noopener"><i class="fa fa-map-marker">
                                <p>Delhi</p>
                            </i></a><br>
                        <a style="color:black; text-decoration:none;" href="#" target="_blank" rel="noopener"><i class="fa fa-map">
                            <p>12/24 Karol Bagh, New Delhi 110085</p>
                        </i></a><br>
                    </div>
                    <div class="finalDetails">
                        <i class="fa fa-inr price"> 4800/-</i>
                        <i class="ac">AC</i>
                    </div>

                </div>
            </div>
            <div class="pro-card col-md-3 col-sm-6 col-xs-12">
                <div class="cardPhoto">
                    <p class="forwhom">Boy</p>
                    <div class="rating">
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                    </div>
                    <img src="images/img1.jpg" alt="">
                </div>
                <div class="details">
                    <p>Paradise</p>
                </div>
                <div class="address">                   
                    <div id="eContact">
                        <a style="color:black; text-decoration:none;" href="#" target="_blank" rel="noopener"><i class="fa fa-map-marker">
                                <p>Delhi</p>
                            </i></a><br>
                        <a style="color:black; text-decoration:none;" href="#" target="_blank" rel="noopener"><i class="fa fa-map">
                            <p>12/24 Karol Bagh, New Delhi 110085</p>
                        </i></a><br>
                    </div>
                    <div class="finalDetails">
                        <i class="fa fa-inr price"> 4800/-</i>
                        <i class="ac">AC</i>
                    </div>

                </div>
            </div>
        </div>
        <div class="viewMore">
          <a href="../request/index.php">View More</a>
        </div>
      </div>
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script></body>
</html>
