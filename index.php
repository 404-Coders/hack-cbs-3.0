<?php
    include('./php/connection.php');
    $query = mysqli_query($conn,"SELECT * FROM `property`");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find My PG</title>
    <!-- Header CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href='./css/header.css'>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/searchbox.css">
    <link rel="stylesheet" href="./css/card.css">

</head>
<body>
    
    <!-- Header Begins -->
    <header class="header">
        <div class="nav-heading"> FIND ME A PG</div>
        <nav class="nav">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><button href="#" id="button">List Your Property </button></li>
            </ul>
        </nav>
        <div class="hamicon" id="hamicon">
            <div class="icon-line"></div>
            <div class="icon-line"></div>
            <div class="icon-line"></div>
        </div>
    </header>
    <nav class="nav" id="nav">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <!-- Header Ends -->

    <!--HeroBox Image-->
    <div>
       <img class="main-image" src='./images/image.png' alt='Image'/>
       <div class="wrap">
        <div class="search">
           <input type="text" class="searchTerm" placeholder="Search Locality or Landmark">
           <button type="submit" class="searchButton">
            <i id="search" class="fa fa-search"></i>
          </button>
        </div>
     </div>
    </div>

    <!--About Us Section-->
    <section class="aboutUs">
        <div class="row">
            <div class="col-md-6">
                <h1 class="heading1">About Our Initiative</h1>
                <div class="text">Our process is simple and very different from those of others in this industry. 
                    The search process is streamlined by the locality or landmark of your choice. 
                    This allows you to find the right room or flat. 
                    You can choose the place that best suits your needs and pocket.
                     This is a solution that we have come up for all those who find it difficult to get a place in an area where you are new.
                      All the places are verified and safe.</div>
            </div>
            <div class="col-md-6">
                <img class="about-img" src="./images/29258.jpg">
            </div>
        </div>
    </section>
    <section class="services">
        <div class="heading2">Wondering how? </div>
        <div class="row">
            <div class="col-md-3 ">
                <div class="box">
                    <i class="fa fa-4x fa-search"></i>
                    <p class="text2">Select from a room based on your location, budget, sharing type and choice of amenities.</p>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="box">
                    <i class="fa fa-4x fa-heart"></i>
                    <p class="text2">Be spoilt for choices. Shortlist the options you like.</p>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="box">
                    <i class="fa fa-4x fa-phone"></i>
                    <p class="text2">Send in your details and sit back and relax. You are about to move-in to your new home.</p>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="box">
                    <i class="fas fa-4x fa-walking"></i>
                    <p class="text2">Visit the properties you like. Finalise, pay and start living!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="properties">
        <div class="container">
            <div class="row">
                <?php
                    while($result = mysqli_fetch_assoc($query))
                    {
                        $imgname = explode(',',$result['images']);
                ?>        
                        <div class="card col-md-3 col-sm-6 col-xs-12">
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
                                <img src="./images/pg-images/<?php echo$imgname[0] ?>" alt="">
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
    <!-- Header Js -->
    <script src="./js/header.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>