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


    <section class="hero set-bg" data-setbg="<?=BASEURL?>/vendors/images/vaccines.gif" 
    style='
    padding-top:50px;
    background-image: url("<?=BASEURL?>/vendors/images/vaccines.gif");
    background-repeat : no-repeat;
    background-size : cover;
    ' >
        <div class="jumbotron jumbotron-fluid bg-transparent" style="height: 85vh;padding:300px 0px;">
            <div class="container">
                <h1 class="display-4 text-white font-weight-bold">Vaccines</h1>
                <p class="lead text-white">Weakened <span class="text-danger font-weight-bold">VIRUS</span></p>
                <hr class="my-4 bg-white">
                <p class='text-white'>
                A vaccine is a biological preparation that provides active acquired immunity to a particular infectious disease.
                A vaccine typically contains an agent that resembles a disease-causing microorganism and is often made from weakened or killed 
                forms of the microbe, its toxins, or one of its surface proteins. The agent stimulates the body's immune system to recognize the 
                agent as a threat, destroy it, and to further recognize and destroy any of the microorganisms associated 
                with that agent that it may encounter in the future.
                </p>
            </div>
        </div>
    </section>

    <footer class="footer bg-danger py-2">
        <div class="container">
            <p class="text-white mt-2 text-center">
                COVACINE@2021
            </p>
        </div>
    </footer>