<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>

.transparent-image {
            background-image: url('decor 1.jpg'); /* Replace 'your-image.jpg' with your image file path */
            background-size: cover;
            background-position: center center;
            height: 400px; /* Set a height for the background, adjust as needed */
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
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Contact<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About Us </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">gallery </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">booking</a>
            </li>
        </ul>
    </div>
</nav>
<div class="transparent-image">
    <h1>CONTACT US</h1>
</div>





<div class="card-group p-5">
    <div class="card mb-3 card-sm">
        <div class="card-body">
        <img src="visit us.png" class="rounded-circle h-25 w-25" alt="...">
            <h5 class="card-title">Visit us on</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing</p>
        </div>
    </div>

    <div class="card mb-3 card-sm">
        <div class="card-body">
        <img src="call.png" class="rounded-circle h-25 w-25" alt="...">
            <h5 class="card-title">Call us on</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing</p>
        </div>
    </div>

    <div class="card mb-3 card-sm">
        <div class="card-body">
        <img src="message 1.png" class="rounded-circle h-25 w-25" alt="...">
            <h5 class="card-title">Drop a message</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing</p>
        </div>
    </div>

    <div class="card mb-3 card-sm">
        <div class="card-body">
        <img src="open.png" class="rounded-circle h-25 w-25" alt="...">
            <h5 class="card-title">Opening time</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing</p>
        </div>
    </div>
</div>


<h5 class="text-center p-4">REACH & GET IN TOUCH<br> WITH US!</h5>


<div class="container-fluid p-5 bg-dark text-white ">
    <div class="row">
        <div class="col-md-4 offset-md-4 transparent-form">
            <form>
                <div class="mb-3 ">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email">
                </div>

                <div class="form-floating">
                    <label for="floatingTextarea2">Special Request</label>
                    <textarea class="form-control" placeholder="Special Request here" id="floatingTextarea2" style="height: 100px"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-secondary btn-sm">Book Now</button>
                </div>
            </form>
        </div>
    </div>
</div>





<footer class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <h6>SALON LOCATION</h6>
            <p>225 address name, Miami, FL</p>
            <a href="booking" class="btn btn-danger btn-sm">BOOK ONLINE</a>
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
            <input type="text" class="form-control" id="firstName" placeholder="Enter your name">
        </div>
        <button type="button" class="btn btn-dark btn-sm">Subscribe</button>
</div>


    <div class="row">
        <div class="col-md-12">
            <h6>@2023 PINK PALOMA | BY ME</h6>
        </div>
    </div>
</footer>
</body>
</html>
