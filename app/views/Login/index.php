<header class="navi">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-danger">
        <div class="container">
            <a href="<?= BASEURL ;?>" class="navbar-brand mr-lg-5 text-white">COVACINE</a>
            <button class="navbar-toggler" type="button" 
            data-toggle="collapse" data-target="#navigate" a
            ria-controls="navigate" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navigate">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="<?= BASEURL ;?>" class="nav-link text-white">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="<?= BASEURL ;?>/About/covid">Covid-19</a>
                        <a class="dropdown-item" href="<?= BASEURL ;?>/About/vaccine">Vaccine</a>
                        <!-- <a class="dropdown-item" href="#">Page 3</a> -->
                    </div>
                    </li>

                    </ul>
                <!-- <a href="#" class="text-white">SIGN IN </a> -->
            </div>
        </div>
    </nav>
    
</header>

<section class="Form my-4 mx-5 " 
style="padding: 10rem 0">
    <div class="container">
        <div class="row bg-white no-gutters shadow rounded">
            <div class="col-lg-5">
                <img src="<?= BASEURL?>/vendors/images/covid.gif" class='img-fluid' alt="Image">
            </div>
            <div class="col-lg-7 px-5 pt-5">
                <h1 class="font-weight-bold py-3">WELCOME BACK!</h1>
                <form action="<?=BASEURL?>/Login/check" method="post">
                    <div class="form-row">
                        <div class="col-lg-10">
                            <input type="text" placeholder='Username' class="form-control my-3 p-4" name="user" id="user" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-10">
                            <input type="password" placeholder='Password' class="form-control my-3 p-4" name="pass" id="pass" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-10">
                            <button class="btn btn-outline-danger btn-lg btn-block mt-3 mb-5">Login</button>
                        </div>
                    </div>
                    <!-- <a href="" class="">Forgot Password</a> -->
                    <!-- <p class="">Don't Have Account? <a href="<?= BASEURL ;?>/Login/regist" id="regist">Register Here</a></p> -->
                </form>
            </div>
        </div>


        <!-- <div class="row bg-white no-gutters shadow rounded my-5">
            <div class="col-lg-7 px-5 pt-5">
                <h1 class="font-weight-bold py-3">JOIN US BECAME FAQCINATORS</h1>
                <form action="" method="post">
                    <div class="form-row">
                        <div class="col-lg-5">
                            <input type="text" placeholder='Username' class="form-control my-3 p-4" name="" id="">
                        </div>
                        <div class="col-lg-5">
                            <input type="email" placeholder='E-Mail' class="form-control my-3 p-4" name="" id="">
                        </div>
                    </div>
                    <div class="form-row">
                        
                    </div>
                    <div class="form-row">
                        <div class="col-lg-10">
                            <input type="password" placeholder='Password' class="form-control my-3 p-4" name="" id="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-10">
                            <button class="btn btn-outline-danger btn-lg btn-block mt-3 mb-5">REGISTER</button>
                        </div>
                    </div>
                    <p class="">Already Have Account? <a href="" id='login' >Login Here</a></p>
                </form>
            </div>
            <div class="col-lg-5">
                <img src="<?= BASEURL?>/vendors/images/dinda.jpeg" class='img-fluid' alt="Orang Cangtip">
            </div>
        </div> -->
    </div>


    <!-- <div class="panels-container">

        <div class="panel left-panel">
            <div class="content">
                <h3>Don't Have Any Account ?</h3>
                <p>Bergabung bersama kami menjadi Be-Leaf yang penuh kasih !
                <br>
                growth your plants more beautiful with our information.
                </p>
                <button class="btn sign" id="sign-up-btn">Sign up</button>
            </div>
            <img src="img/flatvec.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>Already Have Account ?</h3>
                <p>Wellcome back Be-Leafers ! 
                <br>
                Have a nice time with us 
                </p>
                <button class="btn sign" id="sign-in-btn">Login
                </button>
            </div>
        <img src="img/vektor.png" class="image" alt="" />
        </div>

    </div> -->
</section>