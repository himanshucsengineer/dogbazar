<main>


    <!-- Title Strip  -->
    <div class="title_strip_brown">
        <div class="container">
            <div class="row py-4">
                <div class="col">
                    <h1 class="title_strip_brown_h1">Donate Now</h1>
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
        <div class="container px-4">
            <div class="row justify-content-center">
                <div class="col-md-10 pxy-2">
                    <h2>Yes! I want to save the life of an animal in need.</h2>
                    <p>This list contains plants that have been reported as having systemic effects on animals
                        and/or intense effects on the gastrointestinal tract. Please note that the information
                        contained in our plant lists is not meant to be all-inclusive.</p>

                    <h3>Choose Your Donation Amount</h3>
                    <?php
                    if ($this->session->flashdata('success')) {
                        echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
                    } else if ($this->session->flashdata('error')) {
                        echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
                    }


                    ?>
                    <!-- Form Start  -->
                    <form action="<?php echo base_url() ?>register/pay" method="post">

                        <p><span class="amt_lable">In Rupess</span></p>

                        <div class="row mb-3">
                            <div class="col-md-9">
                                <div class="mb-3">
                                    <!-- <label for="" class="donate_input_lable pb-3"></label> -->
                                    <input type="number" class="form-control base_input donar_input_pay" name="amount" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Amount">
                                </div>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="" class="donate_input_lable pb-3">Full Name</label>
                                            <input type="text" class="form-control base_input" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <!-- <div class="col-6">
                                            <div class="mb-3">
                                                <label for="" class="donate_input_lable pb-3">Last Name</label>
                                                <input type="text" class="form-control base_input"
                                                    name="donar_last_name" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="Last Name">
                                            </div>
                                        </div> -->
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="" class="donate_input_lable pb-3">Enter Your Email</label>
                                            <input type="email" class="form-control base_input" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="" class="donate_input_lable pb-3">Mobile Number</label>
                                            <input type="number" class="form-control base_input" name="mob" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-4">
                                            <label for="exampleInputEmail1" class="donate_input_lable pb-3">Your
                                                Message</label>
                                            <div class="form-floating base_input">
                                                <textarea class="form-control" placeholder="Leave a comment here" name="msg" id="floatingTextarea2" style="height: 100px"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <button class=" brown_btn">Lets Donate</button>
                            </div>
                        </div>

                    </form>
                    <!-- End Form  -->


                    <div class="spacer_s"></div>
                    <div class="spacer_s"></div>

                </div>


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
    <div class="spacer_m"></div>


</main>