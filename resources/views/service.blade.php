<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
body {
            padding-top: 0px; /* Adjust according to your navbar height */
        }

        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
        }
.transparent-image {
            background-image: url('pink 3.jpg'); /* Replace 'your-image.jpg' with your image file path */
            background-size: cover;
            background-position: center center;
            height: 250px; /* Set a height for the background, adjust as needed */
            display: flex;
            align-items: center;
            justify-content: center;
            color: white; /* Set the text color to contrast with the background */
        }
        .reservation-box {
            border: 1px solid #ccc; /* Border color */
            border-radius: 10px; /* Border radius */
            padding: 20px;
            margin-top: 20px;
            background-color: rgba(255, 255, 255, 0.9); /* Transparent white background */
        }

        .transparent-form {
            background-color: rgba(255, 255, 255, 0.7); /* Slightly transparent white background for the form */
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">pink paloma</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="home">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="service">Services<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="aboutus">About Us </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="gallery">gallery </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="booking">booking</a>
            </li>
        </ul>
    </div>
</nav>
<div class="transparent-image">
<div class="container">
    <h3 class="text-center"> CREATING BEAUTY IN <br>PINK PALOMA</h3>
    <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime cupiditate asperiores non corporis sit ratione corrupti quas. Ex praesentium officia fugiat, aspernatur corrupti quasi exercitationem eveniet. Ipsa officiis voluptatem harum?</p>
    <div class="text-center">
    <a href="booking" class="btn btn-secondary btn-sm" style="background-image: url('pink 3.jpg'); background-size: cover; background-position: center;">BOOK NOW</a>
    </div>
</div>
</div>
<div class="container">
    <h4 class="text-center p-5">what we Do </h4>



<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="text-center">
                <img src="nail art.png" class=" w-25" alt="...">
                <h6>Nail Art</h6>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="text-center">
                <img src="manicure.png" class=" w-25" alt="...">
                <h6>Mainicure</h6>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="text-center">
                <img src="pedicure.png" class=" w-25" alt="...">
                <h6>Pedicure</h6>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="text-center">
                <img src="hair image.png" class=" w-25" alt="...">
                <h6>braiding</h6>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
            </div>
        </div>
    </div>
</div>




<div class="container">
    <h5 class="text-center p-5">About Us</h5>
    <p class="text-center"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique iure placeat dicta possimus.<br> Quisquam dignissimos a, iste beatae nisi labore natus soluta culpa debitis eaque hic suscipit optio iusto mollitia?</p>
    <div class="text-center">
        <a href="aboutus" class="btn btn-secondary btn-sm" style="background-image: url('pink 3.jpg'); background-size: cover; background-position: center;">Read More</a>
    </div>
<!-- picture by the side -->
</div>




<div class="container">
    <h4 class="text-center p-5">Our Pricing</h4>

    <div class="row">
        <div class="col-md-4">
            <div class="card mb-3" style="max-width: 13rem;">
                <div class="card-body text-center">
                    <h5>$20</h5>
                    <p class="card-text">REGULAR</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-3" style="max-width: 13rem;">
                <div class="card-body text-center">
                    <h5>$30</h5>
                    <p class="card-text">STANDARD</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-3" style="max-width: 13rem;">
                <div class="card-body text-center">
                    <h5>$40</h5>
                    <p class="card-text">PREMIUM</p>
                </div>
            </div>
        </div>
    </div>
</div>





<div class="container">
    <h4 class="text-center p-5">Nail Extension Aftercare</h4>
    <div class="row">
        <div class="col-md-3">
            <div class="text-center">
                <img src="moisture.png" class="rounded-circle w-25 h-25" alt="...">
                <h6>Moisturise hands</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="text-center">
                <img src="main.png" class="rounded-circle w-25 h-25" alt="...">
                <h6>Return to salon for maintenance and removal</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="text-center">
                <img src="image.png" class="rounded-circle w-25 h-25" alt="...">
                <h6>Be extra careful for the first 24hrs</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="text-center">
                <img src="bite.png" class="rounded-circle h-25 w-25" alt="...">
                <h6>Dont bite nails</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="text-center">
                <img src="water.png" class="rounded-circle  w-25 h-25" alt="...">
                <h6>Don't soak hands for long periods</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="text-center">
                <img src="soap.png" class="rounded-circle  w-25 h-25" alt="...">
                <h6>Avoid harsh soap</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="text-center">
                <img src="nail oil.png" class="rounded-circle  w-25 h-25" alt="...">
                <h6>Apply cuticle oil</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="text-center">
                <img src="gloves.png" class="rounded-circle  w-25 h-25" alt="...">
                <h6>Wear gloves during chores</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
            </div>
        </div>

    </div>
</div>




<div class="container">
    <h4 class="text-center p-5">Categories of Nails</h4>
    <div class="row">
        <div class="col-md-4">
            <div class="text-center">
                <img src="one.png" class=" h-25 w-25" alt="...">
                <h6>Acrylic Nails</h6>
            </div>
        </div>

        <div class="col-md-4">
            <div class="text-center">
                <img src="gel.png" class="h-25 w-25" alt="...">
                <h6>Gel Polish</h6>
            </div>
        </div>

        <div class="col-md-4">
            <div class="text-center">
                <img src="poly.png" class=" h-25 w-25" alt="...">
                <h6>Poly Gel</h6>
            </div>
        </div>
    </div>
</div>

<footer class="container fluid p-5 mt-5">
    <div class="row">
        <div class="col-md-4">
            <h6>SALON LOCATION</h6>
            <p>225 address name, Miami, FL</p>
            <a href="booking" class="btn btn-secondary btn-sm" style="background-image: url('pink 3.jpg'); background-size: cover; background-position: center;">BOOK ONLINE</a>
        </div>

        <div class="col-md-4">
            <h6>BUSINESS HOURS</h6>
            <ul>
                <li>Monday-Thursday: 9am-6pm</li>
                <li>Friday-Saturday: 9am-4pm</li>
                <li>Sunday: Closed</li>
            </ul>
        </div>

<div class="col-md-4">
            <h6>JOIN OUR EMAIL LIST</h6>
            <p>Sign up for updates, promotions, and sales</p>
            <div class="mb-3">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control f" id="firstName" placeholder="Enter your name">
            </div>
            <a href="#" class="btn btn-secondary btn-sm" style="background-image: url('pink 3.jpg'); background-size: cover; background-position: center;">SUBSCRIBE</a>
</div>


    <div class="row">
        <div class="col-md-12">
            <h6>@2023 PINK PALOMA | BY ME</h6>
        </div>
    </div>
</footer>

</body>
</html>
