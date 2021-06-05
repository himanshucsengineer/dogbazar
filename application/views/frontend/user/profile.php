<?php
$email = $_SESSION["email"];
$name = $_SESSION["name"];
$mob = $_SESSION["number"];
$add = $_SESSION["add"];
?>
<div class="user_panel">
    <div class="container">
        <div class="row ">
            <div class="col-md-3">
                <div class="box">
                    <a href="<?php echo base_url() ?>profile"><button class="active">Profile & Setting</button></a>
                    <a href="<?php echo base_url()?>donation-history"><button>Donation History</button></a>
                    <a href="<?php echo base_url()?>sponsor-history"><button >Sponsor History</button></a>
                    <a href="<?php echo base_url()?>adopted-pet" ><button >Adopted Pet</button></a>
                </div>
            </div>
            <div class="col-md-9">
                <?php
                    if ($this->session->flashdata('success')) {
                        echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
                    } else if ($this->session->flashdata('error')) {
                        echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
                    }

?>
                <div class="box2">
                    <div class="head">
                        <h3>Profile And Settings</h3>
                    </div>
                    <div class="box2_body">
                        <form action="<?php echo base_url();?>frontend/login/update_pro" method="post">
                        <div class="row">
                            <div class="col-md-2">
                                <p>Name:</p>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="name" placeholder="enter your name" value="<?php echo $name ?>">
                            </div>
                            <div class="col-md-3">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <p>Email:</p>
                            </div>
                            <div class="col-md-7">
                                <input type="email" name="email" placeholder="enter your Email" value="<?php echo $email ?>" readonly>
                            </div>
                            <div class="col-md-3">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <p>Number:</p>
                            </div>
                            <div class="col-md-7">
                                <input type="number" name="mob" placeholder="enter your Number" value="<?php echo $mob ?>">
                            </div>
                            <div class="col-md-3">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <p>Address:</p>
                            </div>
                            <div class="col-md-7">
                                <textarea name="add" id="" cols="30" rows="5" placeholder="enter your address"><?php echo $add ?></textarea>
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>