<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
body {
            padding-top: 0px; /* Adjust according to your navbar height */
            color: black; /* Set the text color to black */
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
            height: 200px; /* Set a height for the background, adjust as needed */
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
            background-color: rgba(255, 255, 255, 0); /* Slightly transparent white background for the form */
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
            <li class="nav-item">
                <a class="nav-link" href="service">Services</a>
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
                <a class="nav-link" href="booking">booking<span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>

<div class="transparent-image">
    <h1>BOOKING</h1>
</div>


<div class="container">
    <div class="reservation-box">
<p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis dicta nulla quis optio<br> iusto doloremque corporis! b Corporis et quo laborum, eveniet sint repudiandae voluptatibus rem! Ducimus deleniti nemo recusandae a.</p>

<div class="container-fluid p-5">
    <div class="row">
        <div class="col-md-4 offset-md-4 transparent-form">
            <form action="process_form.php" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">phone number</label>
                    <input type="tel" class="form-control" id="phonenumber">
                </div>

                <div class="form-floating">
                    <label for="floatingTextarea2">Special Request</label>
                    <textarea class="form-control" placeholder="Special Request here" id="floatingTextarea2" style="height: 100px"></textarea>
                </div>



                <div class="mb-3">
                    <label for="date" class="form-label">Select Date</label>
                    <input type="date" class="form-control" id="date">
                </div>
                <a href="booking" class="btn btn-secondary btn-sm" button type="submit" style="background-image: url('pink 3.jpg'); background-size: cover; background-position: center;">BOOK NOW</a>
            </form>
        </div>
    </div>
</div>
    </div>
</div>


</body>
</html>
