<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/css/site_base.css')?>">

        <?= $this->renderSection('head') ?>
    </head>
    <body>

    <!-- Navbar starts -->
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand mr-4" href="<?= base_url() ?>">GO CORONA GO</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item navbar-hover mx-2 d-none d-sm-block">
                    <a class="nav-link " href="<?= base_url('Home/oxygen_supply') ?>">Oxygen Supply</a>
                  </li>
                  <li class="nav-item navbar-hover mx-2 d-none d-md-block">
                    <a class="nav-link" href="<?= base_url('Home/tiffin_services') ?>">Tiffin Services</a>
                  </li>
                  <li class="nav-item navbar-hover mx-2 d-none d-lg-block">
                    <a class="nav-link" href="<?= base_url('Home/bed_availability') ?>">Bed Avaiability</a>
                  </li>
                  <li class="nav-item navbar-hover mx-2 d-none d-lg-block">
                    <a class="nav-link" href="<?= base_url('Home/plasma_donor') ?>">Plasma Donors </a>
                  </li>
                  <li class="nav-item navbar-hover mx-2 d-none d-xl-block">
                    <a class="nav-link" href="<?= base_url('Home/covid_hospitals') ?>">Covid Hospitals</a>
                  </li>
                  <li class="nav-item navbar-hover mx-2 d-none d-xl-block">
                    <a class="nav-link" href="<?= base_url('Home/vaccination_drives') ?>">Vaccination Drives</a>
                  </li>                 
                  <li class="nav-item mx-2 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      All Infomation Provided
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li class="d-sm-none"><a class="dropdown-item " href="<?= base_url('Home/oxygen_supply') ?>">Oxygen Supply</a></li>
                        <li class="d-md-none"><a class="dropdown-item " href="<?= base_url('Home/tiffin_services') ?>">Tiffin Services</a></li>
                        <li class="d-lg-none"><a class="dropdown-item " href="<?= base_url('Home/bed_availability') ?>">Bed Availability</a></li>
                        <li class="d-lg-none"><a class="dropdown-item " href="<?= base_url('Home/plasma_donor') ?>">Plasma Donors</a></li>
                        <li class="d-xl-none"><a class="dropdown-item " href="<?= base_url('Home/covid_hospitals') ?>">Covid Hospitals</a></li>
                        <li class="d-xl-none"><a class="dropdown-item " href="<?= base_url('Home/vaccination_drives') ?>">Vaccination Drives</a></li>
                        <li class=""><a class="dropdown-item " href="<?=base_url('Home/testing_centers') ?>">Testing Centers</a></li>
                        <li class=""><a class="dropdown-item " href="<?= base_url('Home/home_treatment') ?>">Home Treatment Facilities</a></li>
                        <li class=""><a class="dropdown-item " href="<?= base_url('Home/newly_opened') ?>">Newly Opened</a></li>
                       
                      
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
    <!-- Navbar ends -->


    <!-- extending content -->
    <div class="page_content" id="page_content">
        <?=$this->renderSection('page_content') ?>
    </div>




    <!-- footer -->
        <footer class="footer  py-3 bg-light mt-3">
            <div class="container-md text-center">
                Made with <i class="far fa-heart"></i> by students | Contact at : some@gmail.com
            </div>
        </footer>
    <!-- footer ends -->

    <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <!-- bootstrap js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
</html>

