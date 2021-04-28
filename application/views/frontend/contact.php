<main>


    <!-- Title Strip  -->
    <!-- <div class="title_strip_yellow">
            <div class="container">
                <div class="row py-4">
                    <div class="col">
                        <h1 class="title_strip_yellow_h1">Adopt a pet</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="container">
                <div class="row">
                    <div class="col-2 title_strip_yellow_ul"></div>
                </div>
            </div>
        </div> -->
    <!-- End Title Strip -->

    <div class="spacer_m"></div>

    <!-- Main Content -->

    <!-- Franchies Heading -->
    <div class="container px-4 mb-5">

        <!-- Heading -->
        <div class="row mb-3 justify-content-center">
            <div class="col-md-4 text-center px-3">
                <h1 class="fc_underline">Contact Us</h1>
            </div>
        </div>
        <!-- End Heading -->
        <!-- Top para -->
        <div class="row mb-2 justify-content-center">
            <div class="col-md-8  text-center px-3">
                <p>This list contains plants that have been reported as having systemic effects on animals and/or
                    intense effects on the gastrointestinal tract.
                </p>
            </div>
        </div>





        <!-- Write To Us -->
        <div class="container px-3 mb-5">
            <div class="row justify-content-center mt-5 py-5 writetous contactus">
                <div class="col-md-12">
                    <div class="row justify-content-around">
                        <div class="col-md-6 py-4">
                            <!-- Form  -->

                            <?php
                            if ($this->session->flashdata('success')) {
                                echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
                            } else if ($this->session->flashdata('error')) {
                                echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
                            }


                            ?>
                            <form action="<?php echo base_url() ?>frontend/contact/insert_data" method="post">
                                <div class="row px-4">
                                    <div class="col">
                                        <div class="mb-3">
                                            <!-- <label for="" class="donate_input_lable pb-3">Name (Required)</label> -->
                                            <input type="text" class="form-control base_input" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row px-4">
                                    <div class="col">
                                        <div class="mb-3">
                                            <!-- <label for="" class="donate_input_lable pb-3">Email (Required)</label> -->
                                            <input type="email" class="form-control base_input" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row px-4">
                                    <div class="col">
                                        <div class="mb-3">
                                            <!-- <label for="" class="donate_input_lable pb-3">Email (Required)</label> -->
                                            <input type="number" class="form-control base_input" name="mob" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Number">
                                        </div>
                                    </div>
                                </div>
                                <!--div class="row px-4">
                                    <div class="col">
                                        <div class="mb-3">
                                            
                                            <input type="email" class="form-control base_input" name="donar_email"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="Subject">
                                        </div>
                                    </div>
                                </div-->
                                <div class="row px-4 mb-3">
                                    <div class="col">
                                        <div class="mb-3">
                                            <!-- <label for="exampleInputEmail1" class="donate_input_lable pb-3">Your
                                                Message</label> -->
                                            <div class="form-floating base_input">
                                                <textarea class="form-control" placeholder="Your
                                                Message" name="msg" id="floatingTextarea2" style="height: 100px"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row px-4">
                                    <div class="col">
                                        <button class="btn brown_btn">Get In Touch</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6  px-4 ">
                            <div>
                                <h2 class="h2_head base_heading_h2">Our Office</h2>
                                <p>Ground Floor, Rajmahal Complex, Opp. PLA Petrol Pump, Delhi Road, Hisar Haryana
                                    125001 </p>
                            </div>
                            <div>
                                <h2 class="h2_head base_heading_h2">Give Us a Call</h2>
                                <p>+91 8957450000</p>
                                <p>+91 8957450000</p>
                            </div>
                            <div>
                                <h2 class="h2_head base_heading_h2">Email</h2>
                                <p>Info@dogbazar.com </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="spacer_m"></div>
        <div class="spacer_m"></div>


        <!-- End Main -->

</main>