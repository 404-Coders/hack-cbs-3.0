<?php
    include("../php/connection.php");
    $query = mysqli_query($conn,"SELECT * FROM `property`");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/card.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
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
            <a class="nav-link " href="../index.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../availablepg/index.php">
              <span data-feather="shopping-cart"></span>
              Available PGs
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../request/index.php">
              <span data-feather="shopping-cart"></span>
              PGs Request
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pglist/index.php">
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

      <section class="properties">
        <div class="container">
            <div class="row">
                <?php
                    while($result = mysqli_fetch_assoc($query))
                    {
                        $imgname = explode(',',$result['images']);
                ?>        
                        <div class="pro-card col-md-3 col-sm-6 col-xs-12">
                            <div class="cardPhoto">
                                <p class="forwhom"><?php echo $result['forwhom'];?></p>
                                <div class="rating">
                                    <?php
                                        for($i=0; $i < $result['ratings'];$i++){
                                            echo "<i class='fa fa-star checked yellow'></i>";
                                        }
                                        while($i<5){
                                            echo "<i class='fa fa-star checked'></i>";
                                            $i++;
                                        }
                                    ?>
                                </div>
                                <img src="../images/pg-images/<?php echo$imgname[0] ?>.jpg" alt="">
                            </div>
                            <div class="details">
                                <p><?php echo $result['name'];?></p>
                            </div>
                            <div class="address">                   
                                <div id="eContact">
                                    <a style="color:black; text-decoration:none;" href="#" target="_blank" rel="noopener"><i class="fa fa-map-marker">
                                        <p><?php echo $result['location'];?></p>
                                        </i></a><br>
                                    <a style="color:black; text-decoration:none;" href="#" target="_blank" rel="noopener"><i class="fa fa-map">
                                        <p><?php echo $result['address'];?></p>
                                    </i></a><br>
                                </div>
                                <div class="finalDetails">
                                    <i class="fa fa-inr price"><?php echo $result['pricepm'];?>/-</i>
                                    <?php
                                        if($result['ac_status'] == 1) 
                                            echo "<i class='ac'>AC</i>";
                                        else if($result['ac_status'] == 0)
                                            echo "<i class='ac'>NON-AC</i>";
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
            </div>
        </div>
      </section>
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script></body>
</html>
