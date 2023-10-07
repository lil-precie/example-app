<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About Us </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#">gallery </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">booking<span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>

<div class="transparent-image">
    <h1>RESERVATION</h1>
</div>

<div class="container">
    <div class="reservation-box">
<!-- <h3 class="text-center">Reservation</h3> -->
<p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis dicta nulla quis optio<br> iusto doloremque corporis! b Corporis et quo laborum, eveniet sint repudiandae voluptatibus rem! Ducimus deleniti nemo recusandae a.</p>

<div class="container-fluid p-5">
    <div class="row">
        <div class="col-md-4 offset-md-4 transparent-form">
            <form>
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
                <button type="submit" class="btn btn-primary btn-sm">Book Now</button>
            </form>
        </div>
    </div>
</div>
    </div>
</div>


</body>
</html>
