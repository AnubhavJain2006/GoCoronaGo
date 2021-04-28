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

<div class="h1 text-center my-3">Oxygen Supply</div>

<!-- form -->
<div class="col-md-6 my-4 m-auto">
    <form class="row g-3 p-2">
        <div class="col-md-4">
            <select class="form-control" name="city" id="city">
                <option class="form-control" value="ahmedabad">Ahmedabad</option>
            </select>
        </div>
        <div class="col-md-5">
            <select class="form-control" name="place" id="place">
                <option class="form-control" value="all">All Cities</option>
                <option class="form-control" value="kalupur">Kalupur</option>
                <option class="form-control" value="bapunagar">Bapunagar</option>
                <option class="form-control" value="bopal">Bopal</option>
                <option class="form-control" value="navrangpura">Navrangpura</option>
                <option class="form-control" value="chandkheda">Chandkheda</option>
                <option class="form-control" value="sabarmati">Sabarmati</option>
            </select>
        </div>
        <div class="col-md-3">
            <button class="btn btn-success">Apply Filter</button>
        </div>
    </form>
    <hr>
</div>


<div class="container-md " style="display:flex; flex-wrap: wrap; ">

    <!-- entry -->
    <div class="card col-md-5 m-4">
        <div class="card-header">
            <span class="badge bg-success"> <i class="fas fa-check"></i> Available</span>
            <span class="badge bg-success"> <i class="fas fa-mobile"></i> Phone verified</span>
            <span class="badge bg-success"> <i class="fas fa-clock"></i> Last Updated At 00.00am</span>
        </div>
        <div class="card-body">
            Name : Anubhav ka ghar<br>
            Description : Provides every kind of none-sense<br>
            Address : Footpath <br>
            Some info : Too dangerous to meet<br>
            Some info : Aag laga di aag<br>
        </div>
        <div class="card-footer">
            <span > <i class="fas fa-phone-alt"></i> <a href="tel:+917351674633"> +91123456789</a></span> |
            <span> <i class="fas fa-envelope"></i> someemail@gmail.com</span> |
            <span> <i class="fab fa-whatsapp"></i> +91789456123</span>                       
        </div>
    </div>

     <!-- entry -->
     <div class="card col-md-5 m-4">
        <div class="card-header">
            <span class="badge bg-success"> <i class="fas fa-check"></i> Available</span>
            <span class="badge bg-success"> <i class="fas fa-mobile"></i> Phone verified</span>
        </div>
        <div class="card-body">
            Name : Anubhav ka ghar<br>
            Description : Provides every kind of none-sense<br>
            Address : Footpath <br>
            Some info : Too dangerous to meet<br>
            Some info : Aag laga di aag<br>
        </div>
        <div class="card-footer">
            <span > <i class="fas fa-phone-alt"></i> +91123456789</span> |
            <span> <i class="fas fa-envelope"></i> someemail@gmail.com</span> |
            <span> <i class="fab fa-whatsapp"></i> +91789456123</span>                       
        </div>
    </div>

     <!-- entry -->
     <div class="card col-md-5 m-4">
        <div class="card-header">
            <span class="badge bg-success"> <i class="fas fa-check"></i> Available</span>
            <span class="badge bg-success"> <i class="fas fa-mobile"></i> Phone verified</span>
        </div>
        <div class="card-body">
            Name : Anubhav ka ghar<br>
            Description : Provides every kind of none-sense<br>
            Address : Footpath <br>
            Some info : Too dangerous to meet<br>
            Some info : Aag laga di aag<br>
        </div>
        <div class="card-footer">
            <span > <i class="fas fa-phone-alt"></i> +91123456789</span> |
            <span> <i class="fas fa-envelope"></i> someemail@gmail.com</span> |
            <span> <i class="fab fa-whatsapp"></i> +91789456123</span>                       
        </div>
    </div>

     <!-- entry -->
     <div class="card col-md-5 m-4">
        <div class="card-header">
            <span class="badge bg-success"> <i class="fas fa-check"></i> Available</span>
            <span class="badge bg-success"> <i class="fas fa-mobile"></i> Phone verified</span>
        </div>
        <div class="card-body">
            Name : Anubhav ka ghar<br>
            Description : Provides every kind of none-sense<br>
            Address : Footpath <br>
            Some info : Too dangerous to meet<br>
            Some info : Aag laga di aag<br>
        </div>
        <div class="card-footer">
            <span > <i class="fas fa-phone-alt"></i> +91123456789</span> |
            <span> <i class="fas fa-envelope"></i> someemail@gmail.com</span> |
            <span> <i class="fab fa-whatsapp"></i> +91789456123</span>                       
        </div>
    </div>

     <!-- entry -->
     <div class="card col-md-5 m-4">
        <div class="card-header">
            <span class="badge bg-success"> <i class="fas fa-check"></i> Available</span>
            <span class="badge bg-success"> <i class="fas fa-mobile"></i> Phone verified</span>
        </div>
        <div class="card-body">
            Name : Anubhav ka ghar<br>
            Description : Provides every kind of none-sense<br>
            Address : Footpath <br>
            Some info : Too dangerous to meet<br>
            Some info : Aag laga di aag<br>
        </div>
        <div class="card-footer">
            <span > <i class="fas fa-phone-alt"></i> +91123456789</span> |
            <span> <i class="fas fa-envelope"></i> someemail@gmail.com</span> |
            <span> <i class="fab fa-whatsapp"></i> +91789456123</span>                       
        </div>
    </div>

     <!-- entry -->
     <div class="card col-md-5 m-4">
        <div class="card-header">
            <span class="badge bg-success"> <i class="fas fa-check"></i> Available</span>
            <span class="badge bg-success"> <i class="fas fa-mobile"></i> Phone verified</span>
        </div>
        <div class="card-body">
            Name : Anubhav ka ghar<br>
            Description : Provides every kind of none-sense<br>
            Address : Footpath <br>
            Some info : Too dangerous to meet<br>
            Some info : Aag laga di aag<br>
        </div>
        <div class="card-footer">
            <span > <i class="fas fa-phone-alt"></i> +91123456789</span> |
            <span> <i class="fas fa-envelope"></i> someemail@gmail.com</span> |
            <span> <i class="fab fa-whatsapp"></i> +91789456123</span>                       
        </div>
    </div>

     <!-- entry -->
     <div class="card col-md-5 m-4">
        <div class="card-header">
            <span class="badge bg-success"> <i class="fas fa-check"></i> Available</span>
            <span class="badge bg-success"> <i class="fas fa-mobile"></i> Phone verified</span>
        </div>
        <div class="card-body">
            Name : Anubhav ka ghar<br>
            Description : Provides every kind of none-sense<br>
            Address : Footpath <br>
            Some info : Too dangerous to meet<br>
            Some info : Aag laga di aag<br>
        </div>
        <div class="card-footer">
            <span > <i class="fas fa-phone-alt"></i> +91123456789</span> |
            <span> <i class="fas fa-envelope"></i> someemail@gmail.com</span> |
            <span> <i class="fab fa-whatsapp"></i> +91789456123</span>                       
        </div>
    </div>



</div>



<?= $this->endSection('page_content'); ?>
