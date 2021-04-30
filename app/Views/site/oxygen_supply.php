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
    <form action="<?= base_url('/oxygen_supply') ?>" method="POST" class="row g-3 p-2">
        <div class="col-md-4">
            <select class="form-control" name="city" id="city">
                <option class="form-control" value="ahmedabad">Ahmedabad</option>
            </select>
        </div>
        <div class="col-md-5">
            <select class="form-control" name="place" id="place">
                <option class="form-control" value="all places">All Places</option>
                <?php                    
                    foreach ($places as $p ) {                        
                        $name = $p['name'];
                        if($dropDownOption == $name)
                            echo "<option class='form-control' value='$name' selected>$name</option>";
                        else
                            echo "<option class='form-control' value='$name' >$name</option>";
                    }
                ?>
            </select>
        </div>
        <div class="col-md-3">
            <button class="btn btn-success">Apply Filter</button>
        </div>
    </form>
    <hr>

</div>


<div class="container-md " style="display:flex; flex-wrap: wrap; justify-content: center; ">

    <!-- display number of rows -->
    

    <?php
        if(!empty($suppliers)) {
            foreach ($suppliers as $r ) {                
                // setting verification style for display in front end
                $verification = "";
                $availability = "";
                $updated_at = null;
                $name = $r['name'];
                $address = $r['address'];
                $whatsapp = $r['whatsapp'];
                $phone = $r['phone'];
                $email = $r['email'];
                $pin = $r['pincode'];
                $city = $r['city'];



                if($r['verification'] == 0)
                    $verification = '<span class="badge bg-warning"> <i class="fas fa-mobile"></i> Not Verified</span>';
                else
                    $verification = '<span class="badge bg-success"> <i class="fas fa-mobile"></i> Phone Verified</span>';

                
                // setting oxygen_left attribute for front end
                if($r['oxygen_left'] == 3)
                    $availability = '<span class="badge bg-success"> <i class="fas fa-atom"></i> Oxygen Available</span>';
                else if($r['oxygen_left'] == 2)
                    $availability = '<span class="badge bg-info"> <i class="fas fa-atom"></i> Moderate Amount Available</span>';
                else if( $r['oxygen_left'] == 1)
                    $availability = '<span class="badge bg-danger"> <i class="fas fa-atom"></i> Oxygen Amount Low</span>';
                else if ($r['oxygen_left'] == 0)
                    $availability = '<span class="badge bg-secondary"> <i class="fas fa-atom"></i> No Oxygen</span>';
                else
                    $availability = '<span class="badge bg-secondary"> <i class="fas fa-atom"></i> No information about oxygen</span>';

                // setting updated time             
                $date_db = date_create_from_format('Y-m-d H:i:s', $r['updated_at']);
                $updated_ago = date_format($date_db, 'd-m-Y | H:i:s');
                $updated = '<span class="badge bg-info">  <i class="fas fa-clock"></i> Updated at : '.$updated_ago.'</span>';
                
                
                // <!-- entry -->
                echo "
                    <div class='card col-md-5 m-3'>
                        <div class='card-header'>
                            $availability $verification $updated                         
                        </div>
                        <div class='card-body'>
                            <table class='table'>
                                <tbody>
                                    <tr>
                                        <td>Name</td>
                                        <td> - $name</td>
                                    </tr>
                                    <tr>
                                        <td>Description</td>
                                        <td> - This is static</td>
                                    </tr> 
                                    <tr>
                                        <td>Address</td>
                                        <td> - $address</td>
                                    </tr>
                                    <tr>
                                        <td>City</td>
                                        <td> - $city</td>
                                    </tr>
                                    <tr>
                                        <td>Pin</td>
                                        <td> - $pin</td>
                                    </tr>
                                </tbody>
                            </table>                            
                        </div>
                        <div class='card-footer'>
                            <span > <i class='fas fa-phone-alt'></i> <a href='tel:$phone'> $phone</a></span> |
                            <span> <i class='fas fa-envelope'></i> <a href='mailto:$email'> $email</a></span> |
                            <span> <i class='fab fa-whatsapp'></i> $whatsapp</span>                       
                        </div>
                    </div>
                ";
            }
        }        

    ?>

    <!-- entry -->
    <!-- <div class="card col-md-5 m-4">
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
 -->
     



</div>



<?= $this->endSection('page_content'); ?>
