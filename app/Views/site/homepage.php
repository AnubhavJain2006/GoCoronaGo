<?php
    // extending to the base layout
    echo $this->extend('site/base');
    
    // setting title of page
    $this->section('head');
        echo "<title>Go Corona Go</title>";
    $this->endSection('head');

    // main content goes here
    $this->section('page_content');
?>


        <!-- Image of website -->
        
        <img src="assets/img/corona-headline.jpg" alt="Together We Will Fight With Corona" width="100%" height="200px" style="margin-top: 3rem;  position: absolute;
        left: 0px;
        top: 0px;
        z-index: -1;">

        <div class="container-md bg-white mb-3" style="margin-top: 4rem; border: 2px rgb(92, 52, 52) solid;" >
            <div class="text-center h2 m-4">
                TOGETHER LETS FIGHT WITH CORONA
                <p class="lead mt-2">We provide Information regarding following</p>
                
                <div class="w-75 m-auto">
                    <hr>
                </div>

            </div>
            <div class="" style="display: flex; flex-wrap: wrap; justify-content: center;">
                <div class="m-3 p-3" style=" width: 200px; border: 0px red solid;">
                    <a style="text-decoration:none;color:inherit;" href="<?= base_url('oxygen_supply') ?>">
                        <i class="fas fa-lungs fa-7x mb-2"></i>
                        <div class="heading lead">
                            Oxygen Supply
                        </div>
                        <p class="text-muted">Information about oxygen Avaiability around ahmedabad</p>
                    </a>
                </div>

                <div  class="m-3 p-3" style=" width: 200px; border: 0px red solid;">
                    <a style="text-decoration:none;color:inherit;" href="<?= base_url('Home/tiffin_services') ?>">                
                        <i class="fas fa-database fa-7x mb-2"></i>                    
                        <div class="heading lead">
                            Tiffin Services
                        </div>
                        <p class="text-muted">Information about tiffin services around ahmedabad</p>
                    </a>
                </div>

                <div  class="m-3 p-3" style=" width: 200px; border: 0px red solid;">
                    <a style="text-decoration:none;color:inherit;" href="<?= base_url('Home/bed_availability') ?>">                
                        <i class="fas fa-bed fa-7x mb-2"></i>
                        <div class="heading lead">
                            Beds Availability
                        </div>
                        <p class="text-muted">Information about Beds Availability around ahmedabad</p>
                    </a>
                </div>

                <div  class="m-3 p-3" style=" width: 200px; border: 0px red solid;">
                    <a style="text-decoration:none;color:inherit;" href="<?= base_url('Home/vaccination_drives') ?>">                
                        <i class="fas fa-syringe fa-7x mb-2"></i>
                        <div class="heading lead">
                            Vaccination Drives
                        </div>
                        <p class="text-muted">Information about vaccination around ahmedabad</p>
                    </a>
                </div>

                <div  class="m-3 p-3" style=" width: 200px; border: 0px red solid;">
                    <a style="text-decoration:none;color:inherit;" href="<?= base_url('Home/testing_centers') ?>">                
                        <i class="fas fa-vials fa-7x mb-2"></i>
                        <div class="heading lead">
                            Testing Centers
                        </div>
                        <p class="text-muted">Information about vaccination drives around ahmedabad</p>
                    </a>
                </div>

                <div  class="m-3 p-3" style=" width: 200px; border: 0px red solid;">
                    <a style="text-decoration:none;color:inherit;" href="<?= base_url('Home/covid_hospitals') ?>">                
                        <i class="fas fa-hospital fa-8x mb-2"></i>                    
                        <div class="heading lead">
                            Covid Hospitals
                        </div>
                        <p class="text-muted">Information about hospitals Avaiability around ahmedabad</p>
                    </a>
                </div>

                <div  class="m-3 p-3" style=" width: 200px; border: 0px red solid;">
                    <a style="text-decoration:none;color:inherit;" href="#">                
                        <div class="heading lead">
                        <i class="fas fa-clinic-medical fa-6x mb-2"></i> 

                            Home Treatment Facility                            
                        </div>
                        <p class="text-muted">Information about memes of covid spreading around.</p>
                    </a>
                </div>

                <div  class="m-3 p-3" style=" width: 200px; border: 0px red solid;">
                    <a style="text-decoration:none;color:inherit;" href="<?= base_url('Home/plasma_donor') ?>">                
                        <i class="fas fa-hand-holding-water fa-7x mb-2"></i>                          
                        <div class="heading lead">
                            Plasma Donors
                        </div>
                        <p class="text-muted">Information about plasma doners around ahmedabad</p>
                    </a>
                </div>

                <!-- <div  class="m-3 p-3" style=" width: 200px; border: 0px red solid;">
                    <img src="corona-headline.jpg" width="100%" height="75px" alt="">
                    <div class="heading lead">
                        Oxygen Supply
                    </div>
                    <p class="text-muted">Information about oxygen Avaiability around ahmedabad</p>
                </div>

                <div  class="m-3 p-3" style=" width: 200px; border: 0px red solid;">
                    <img src="corona-headline.jpg" width="100%" height="75px" alt="">
                    <div class="heading lead">
                        Oxygen Supply
                    </div>
                    <p class="text-muted">Information about oxygen Avaiability around ahmedabad</p>
                </div> -->
            </div>
        </div>


        <div class="container-md my-5 row m-auto">

            <!-- carousel -->
            <div class="col-md-8 p-3">
                <div class="h3 text-center my-3">Information around ...</div>
                <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src=<?= base_url('assets/img/slide.jpg') ?> class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="<?= base_url('assets/img/slide.jpg') ?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="<?= base_url('assets/img/slide.jpg') ?>" class="d-block w-100" alt="...">
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>

            <!-- informative updates -->
            <div class="col-md-4 p-3">
                <div class="h3 text-center my-3">Informative Updates</div>
                <div class="p-4">

                    <marquee behavior="" direction="up">
                        <div>
                            Information 1: <br>
                            updated few seconds ago
                        </div>
                        <div>
                            Information 1: <br>
                            updated few seconds ago
                        </div>
                        <div>
                            Information 1: <br>
                            updated few seconds ago
                        </div>
                        <div>
                            Information 1: <br>
                            updated few seconds ago
                        </div>
                        <div>
                            Information 1: <br>
                            updated few seconds ago
                        </div>
                        <div>
                            Information 1: <br>
                            updated few seconds ago
                        </div>
                    </marquee>
                </div>
                </div>

        </div>
        








<?= $this->endSection('page_content'); ?>