<?php
if(!empty($_REQUEST)) { 

$name=$_REQUEST['name'];
$email =$_REQUEST['email'];

$sql="INSERT INTO `travelly`(`name`, `email`) VALUES ('$name','$email')";

$con = mysqli_connect("localhost", "root", "", "basics") or die(mysqli_connect_error());

mysqli_query($con, $sql) or die(mysqli_error($con));

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelly - smart travels</title>
    <link rel="icon" href="images/icon.svg">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="main-header">
      <nav>
        <h1><a href="#">Smart Travellers</a></h1>  
        <ul>
            <li><a href="#location">Locations</a></li>
            <li><a href="#benefit">Benefits</a></li>
            <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav>
    </header>

    <main>
        <section class="hero">
            <h2>Travel Beyond Limits</h2>
            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                Sit repudiandae quam cumque officia deserunt perspiciatis.
            </h3>
            <button>Book Now</button>
        </section>

        <section class="locations" id="location">
         <div>
            <h2>The perfect Travelling Experience.</h2>
            <h3>We cover everything from picking the perfect hotel <br>
                flight and travelling destination</h3>
         </div>
        </section>
        <section class="benefits" id="benefit">
            <div class="heading">
                <h2>The Perfect travel</h2>
                <h3>We cover everything from picking the perfect <br>
                    hotel to flight and destination</h3>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="card-icon">
                        <img src="icons/route-solid.svg" alt="Routes">
                    </div>
                    <h4>Travel</h4>
                    <p>Travel in over 250 countries with <br> no effort</p>
                </div>

                <div class="card">
                    <div class="card-icon">
                        <img src="icons/bed-solid.svg" alt="Routes">
                    </div>
                    <h4>Hotel</h4>
                    <p>Travel in over 250 countries with <br> no effort</p>
                </div>

                <div class="card">
                    <div class="card-icon">
                        <img src="icons/airplane.svg" alt="Routes">
                    </div>
                    <h4>Flights</h4>
                    <p>Travel in over 250 countries with <br> no effort</p>
                </div>
            </div>
        </section>
        <section class="contact" id="contact">
            <div class="form-wrapper">
                <h2>Contact Us</h2>
                <form action="index.php" method="POST">
                  <div class="form-input">
                    <label for="name" class="form-label">Names</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="name" >
                  </div>
                  <div class="form-input">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="email" >
                  </div>
                  <button type="submit">Submit</button>
                </form>
            </div>
        </section>
    </main>
    
    <footer>
        <div class="footer-wrapper">
            <h5>Smart Travellers &copy;</h5>
            <ul>
                <li>
                    <a href="#"><img src="icons/youtube.svg" alt="youtube"></a>
                </li>
                <li>
                    <a href="#"><img src="icons/twitter.svg" alt="twitter"></a>
                </li>
                <li>
                    <a href="#"><img src="icons/instagram-2.svg" alt="instagram"></a>
                </li>
            </ul>
        </div>
    </footer>
</body>
</html>