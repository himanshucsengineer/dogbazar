<?php
$email = $_SESSION["email"];
$name =  $_SESSION["name"];
$add =  $_SESSION["add"];
$number =  $_SESSION["number"];
?>

<main>


    <!-- Title Strip  -->
    <div class="title_strip_brown">
        <div class="container">
            <div class="row py-4">
                <div class="col">
                    <h1 class="title_strip_brown_h1">Hi, <?php echo $name; ?></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="">
            <div class="container">
                <div class="row">
                    <div class="col-2 title_strip_brown_ul"></div>
                </div>
            </div>
        </div> -->
    <!-- End Title Strip -->

    <div class="spacer_m"></div>

    <!-- Main Content -->
    <div class="body_content">
        <div class="container px-3">
            <div class="row justify-content-start">

                <!-- Content Left -->
                <div class="col-md-10 pxy-2">
                    <h2>Yes! I want to save the life of an animal in need.</h2>
                    <p>This list contains plants that have been reported as having systemic effects on animals
                        and/or intense effects on the gastrointestinal tract. </p>

                    <div class="row justify-content-between client_dashboard">

                        <div class="col-md-3 ">
                            <div class="spacer_s"></div>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>profile">Profile</a></li>
                                <li><a href="<?php echo base_url(); ?>listmydog">List A Dog</a></li>
                                <li><a href="<?php echo base_url(); ?>mydogs">My Dogs</a></li>

                            </ul>
                            <div class="spacer_s"></div>
                        </div>




                        <div class="col-md-9 ">

                            <h3>Profile Info</h3>
                            <hr>
                            <?php echo form_open(base_url('frontend/login/update_pro'), array('id' => 'updateprofileform', 'method' => 'POST')); ?>

                            <div class="row px-4">
                                <div class="col-md-10">
                                    <div class="mb-3">
                                        <label for="" class="donate_input_lable pb-3">Name</label>
                                        <input type="text" class="form-control base_input" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name" value="<?php echo $name; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row px-4">
                                <div class="col-md-10">
                                    <div class="mb-3">
                                        <label for="" class="donate_input_lable pb-3">Email</label>
                                        <input type="email" class="form-control base_input" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email" value="<?php echo $email ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row px-4">
                                <div class="col-md-10">
                                    <div class="mb-3">
                                        <label for="" class="donate_input_lable pb-3">Number</label>
                                        <input type="number" class="form-control base_input" name="number" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email" value="<?php echo $number ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row px-4">
                                <div class="col-md-10">
                                    <div class="mb-3">
                                        <label for="" class="donate_input_lable pb-3">Address</label>
                                        <textarea class="form-control base_input" name="add" id="" cols="30" rows="5"><?php echo $add ?></textarea>
                                    </div>
                                </div>
                            </div>



                            <div class="row px-4">
                                <div class="col">
                                    <button class="btn brown_btn px-4">Update</button>
                                </div>
                            </div>

                            <?php echo form_close(); ?>

                        </div>
                    </div>

                    <div class="spacer_s"></div>

                </div>
                <!-- End Content Left -->


                <!-- Side Bar  -->

                <!-- <div class="col-md-3 px-2 ">
                        <div class="row">
                            <div class="col">
                                <h2>Our Address</h2>
                                <p>Raj Nagar behind 30 s
                                    PO Box 1037
                                    Jaipur</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h3>Follow Us On</h3>
                                <div class="row">
                                    <div class="col-1">f</div>
                                    <div class="col-1">t</div>
                                    <div class="col-1">li</div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                <!-- End Side Bar -->


            </div>
        </div>

    </div>

    <!-- End Main -->

    <div class="spacer_m"></div>


</main>

<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <!-- Modal body -->
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <span id="validation" class="form_errors"></span>
            </div>
        </div>
    </div>
</div>

<script>
    $("#updateprofileform").submit(function(event) {
        event.preventDefault();
        var post_url = $(this).attr("action");
        var request_method = $(this).attr("method");
        var form_data = $(this).serialize();

        $.ajax({
            url: post_url,
            type: request_method,
            data: form_data,
        }).done(function(response) { //
            console.log(response);
            $('#validation').html(response);
            $('#myModal').modal('show').fadeIn('slow');
            $("#updateprofileform").trigger("reset");
        });
    });
</script>