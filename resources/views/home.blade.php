@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">pink paloma</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#"><span class="sr-only">(current)</span>Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#">About Us </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">booking</a>
            </li>
        </ul>
    </div>
</nav>


<div class="container">
    <!-- an image should overlap the text(transperent) -->
    <h2>YOU CANT BE PERFECT<BR>BUT YOUR NAILS CAN</h2>
    <a href="booking" class="btn btn-secondary">BOOK YOUR APPOINTMENT</a>

<div class="row">
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">BEST NAILS IN TOWN</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit assumenda placeat numquam facere cumque ea quae repudiandae, nostrum, exercitationem consequatur perferendis ex blanditiis nobis sed saepe dolorem obcaecati illo in.</p>
            </div>
        </div>
    </div>

<div class="col-sm-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">STERIL EQUIPMENT</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro incidunt veniam culpa sunt tenetur blanditiis voluptates ex sapiente, fuga quo doloribus modi deleniti similique esse doloremque enim ab molestias quaerat!</p>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">JOIN MEMBER NOW <br>GET 40% OFF</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-dark">join now</a>
            </div>
        </div>
    </div>
</div>

</div>

<div class="container">
    <h4>ABOUT US</h4>

    <img src="..." class="rounded float-start" alt="...">
    <img src="..." class="rounded float-end" alt="...">

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate laborum sit numquam mollitia, iure, eos culpa beatae quaerat magni, temporibus illo exercitationem placeat in quis quasi. Ipsam explicabo facere beataeLorem ipsum dolor sit amet consectetur adipisicing elit. Sed quia consectetur quas magnam fugit voluptas optio repellat perferendis est odio, rerum, nostrum soluta dicta iure delectus animi unde dolorum labore.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quia consectetur quas magnam fugit voluptas optio repellat perferendis est odio, rerum, nostrum soluta dicta iure delectus animi unde dolorum labore.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quia consectetur quas magnam fugit voluptas optio repellat perferendis est odio, rerum, nostrum soluta dicta iure delectus animi unde dolorum labore.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quia consectetur quas magnam fugit voluptas optio repellat perferendis est odio, rerum, nostrum soluta dicta iure delectus animi unde dolorum labore..</p>
<div>
    <p>22+</p>
    <p>Years Experience</p>
</div>

<div>
    <p>24+</p>
    <p>professionals</p>
</div>

<div class="container">
    <h4>WHAT WE DO</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium aperiam in reprehenderit consectetur eius doloribus ipsam neque fuga error sapiente, culpa ad.<br> Nihil quam officiis temporibus. Quisquam sequi sit veritatis.</p>
</div>


<div class="row">
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">MANICURE</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem accusamus eum assumenda deserunt, eaque delectus eveniet similique dolor voluptates, repellat fuga molestiae tempore ducimus sequi beatae doloremque alias aliquam fugiat.</p>
                <a href="aboutus" class="btn btn-primary">READ MORE</a>
            </div>
        </div>
    </div>


<div class="col-sm-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">PEDICURE</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum est, voluptate nulla sed soluta doloremque aspernatur, tenetur corporis odit labore praesentium quam sapiente alias, ab sunt doloribus qui velit laudantium!</p>
            <a href="aboutus" class="btn btn-primary">READ MORE</a>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">HAIR</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum dolores laborum tempore rem culpa soluta eveniet blanditiis delectus corrupti veritatis reiciendis libero beatae, dicta eligendi, quibusdam velit. Tempore, facilis corrupti.</p>
                <a href="aboutus" class="btn btn-primary">READ MORE</a>
            </div>
        </div>
    </div>
</div>

<h3>OUR SERVICES</h3>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam autem accusantium itaque necessitatibus nulla est labore ratione officia, sunt sit, eos iure, fugiat nobis debitis at reprehenderit accusamus ducimus provident.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam autem accusantium itaque necessitatibus nulla est labore ratione officia, sunt sit, eos iure, fugiat nobis debitis at reprehenderit accusamus ducimus provident.</p>
<a href="service" class="btn btn-dark">LEARN MORE</a>

<div>
    <h5>PEDICURE<h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quaerat fuga quod officia accusamus iste quasi eveniet inventore, veniam delectus exercitationem ut voluptatem omnis </p>

        <h5>MEDICURE<h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quaerat fuga quod officia accusamus iste quasi eveniet inventore, veniam delectus exercitationem ut voluptatem omnis </p>

        <h5>PAFFIN WAX<h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quaerat fuga quod officia accusamus iste quasi eveniet inventore, veniam delectus exercitationem ut voluptatem omnis </p>

        <h5>BRAIDING<h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quaerat fuga quod officia accusamus iste quasi eveniet inventore, veniam delectus exercitationem ut voluptatem omnis </p>

        <h5>FRONTAL INSTALLATION<h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quaerat fuga quod officia accusamus iste quasi eveniet inventore, veniam delectus exercitationem ut voluptatem omnis </p>

        <h5>AFTER CARE<h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quaerat fuga quod officia accusamus iste quasi eveniet inventore, veniam delectus exercitationem ut voluptatem omnis </p>
</div>
</div>

<div class="container">
    <!-- an image should overlap the text -->
    <h4>GET 25% OFF YOUR FIRST APPOINTMENT</h4>
    <P>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, aspernatur fuga voluptatem ipsa ipsam laboriosam delectus. Porro autem eligendi doloribus, facere quam fuga totam dolor. Earum tempore fuga placeat consequuntur!</P>

    <a href="booking" class="btn btn-dark">BOOK NOW</a>
</div>


<div class="container">
<img src="..." class="rounded float-start" alt="...">
<img src="..." class="rounded float-start" alt="...">
<img src="..." class="rounded float-end" alt="...">
    <h4>EXPERTS</h4>
    <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam magni quaerat nam! Molestiae nesciunt exercitationem illum, minima est facere! Explicabo ipsa rem numquam excepturi alias optio voluptas quibusdam praesentium perspiciatis.</p>
    <a href="about us" class="btn btn-dark">SEE ALL EMPLOYEES</a>
</div>
<div class="container">
    <!-- an image should overlap the text -->
    <h4>TREENDING NAIL ART</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia vitae ullam unde ipsum officia fugiat labore autem vero saepe vel dicta, architecto, tempore enim. Aspernatur quasi nobis repellat impedit porro!</p>

    <img src="..." class="rounded float-start" alt="...">
    <img src="..." class="rounded float-center" alt="...">
    <img src="..." class="rounded float-end" alt="...">
</div>

<h3>HAVE QUESTIONS</h3>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet obcaecati dicta explicabo impedit qui rerum quo molestiae quis minima, recusandae labore perspiciatis sint fugiat odit! Ad, eligendi nobis. Quisquam, dolorem!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet obcaecati dicta explicabo impedit qui rerum quo molestiae quis minima, recusandae labore perspiciatis sint fugiat odit! Ad, eligendi nobis. Quisquam, dolorem!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet obcaecati dicta explicabo impedit qui rerum quo molestiae quis minima, recusandae labore perspiciatis sint fugiat odit! Ad, eligendi nobis. Quisquam, dolorem!</p>

<a href="contact" class="btn btn-dark">CONTACT US</a>


<div class="btn-group">
    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
    +Do i need to book an appointment
    </button>
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
        <li><a class="dropdown-item" href="#">+Do you have a membership</a></li>
        <li><a class="dropdown-item" href="#">+wher can i find ideas for a new style</a></li>
        <li><a class="dropdown-item" href="#">+how to cancel your appointment</a></li>
    </ul>
</div>

<footer>
    <!-- logo picture -->
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed facilis consectetur vero quod a ratione, voluptate ad adipisci corporis reiciendis iure unde maiores. Ullam amet, repellat pariatur quis facilis adipisci.</p>

<div>
    <a href="contact">contact us</a>
    <a href="booking">booking</a>
    <a href="aboutus">about us</a>
    <a href="home" >home</a>
    <a href="services">services</a>
    <a href="gallery">gallery</a>
</div>

<div>
    PINK PALOMA LOCATION
    <h6>19 Gatsu, Bali,WB-1811920</h6>
    <h6>(+234)8157902006</h6>
    <h6>mon-sat:09:00 AM -21:00PM
        sunday:closed
    </h6>
</div>

<div>
    <h5>SUBSCRIBE TO GET DISCOUNT!</h5>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis in quia repudiandae, vero cumque numquam a, ratione molestiae similique voluptas qui aliquam deleniti reiciendis.</p>

<div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="your Email" aria-label="your email" aria-describedby="button-addon2">
    <button class="btn btn-outline-secondary" type="button" id="button">subscribe</button>
</div>
</div>
</footer>


@endsection