<?php 
    $email= $_SESSION["email"];
    $name= $_SESSION["name"];
    $mob= $_SESSION["number"];
    $add= $_SESSION["add"];
?>
<div class="user_panel">
    <div class="container">
        <div class="row ">
            <div class="col-md-3">
                <div class="box">
                    <a href="<?php echo base_url()?>profile"><button class="active">Profile & Setting</button></a>
                    <button>Donation History</button>
                    <button>Listed Dogs</button>
                </div>    
            </div>
            <div class="col-md-9">
                <div class="box2">
                    <div class="head">
                        <h3>Profile And Settings</h3>
                    </div>
                    <div class="box2_body">
                        <div class="row">
                            <div class="col-md-2">
                                <p>Name:</p>
                            </div>
                            <div class="col-md-7">
                                <input type="text" placeholder="enter your name" value="<?php echo $name?>">
                            </div>
                            <div class="col-md-3">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <p>Email:</p>
                            </div>
                            <div class="col-md-7">
                                <input type="email" placeholder="enter your Email" value="<?php echo $email?>">
                            </div>
                            <div class="col-md-3">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <p>Number:</p>
                            </div>
                            <div class="col-md-7">
                                <input type="number" placeholder="enter your Number" value="<?php echo $mob?>">
                            </div>
                            <div class="col-md-3">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <p>Address:</p>
                            </div>
                            <div class="col-md-7">
                                <textarea name="" id="" cols="30" rows="5" placeholder="enter your address"><?php echo $add?></textarea>
                            </div>
                            <div class="col-md-3">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                
                            </div>
                            <div class="col-md-7">
                                <button>Update Profile</button>
                            </div>
                            <div class="col-md-3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>