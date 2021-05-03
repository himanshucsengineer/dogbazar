<style>
    .contact_us_input {
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        padding-left: 1rem;
        border: 1px solid #cdcdcd;
        margin-bottom: 1rem;
        outline: none;
    }

    .contact_submit {
        width: 100%;
        height: auto;
        padding-top: .8rem;
        padding-bottom: .8rem;
        color: white;
        background-color: #d44444;
        border: none;
        outline: none;
    }

    .cont .flex {
        width: 100%;
        height: auto;
        display: flex;
        margin-left: 2rem;
        margin-bottom: 2rem;
        margin-top: 2rem;
    }

    .cont .flex .left {
        width: 15%;
        height: auto;
    }

    .cont .flex .left .fa {
        font-size: 30px;
        color: #d44444;
    }

    .cont .flex .right {
        width: 85%;
        height: auto;
        margin-top: -1.5rem;
    }
    @media screen and (max-width: 600px) {
        .writetous{
            padding: 0rem !important;
            border: none;
            border-radius: 0px ;
            background-color: white;
            box-shadow: 0px 4px 7px -2px rgb(0 0 0 / 20%);
        }
}
</style>

<main>


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
                                <input class="contact_us_input" type="text" name="name" placeholder="Enter Your Name">
                                <input class="contact_us_input" type="email" name="email" placeholder="Enter Your Email">
                                <input class="contact_us_input" type="number" name="mob" placeholder="Enter Contact Number">
                                <textarea class="contact_us_input" name="msg" placeholder="Enter Message For us" cols="30" rows="5"></textarea>
                                <button class="contact_submit">Submit</button>
                            </form>
                        </div>
                        <div class="col-md-6  px-4 cont">
                            <div class="flex">
                                <div class="left">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                                <div class="right">
                                    <h2 class="h2_head base_heading_h2">Our Office</h2>
                                    <p>Ground Floor, Rajmahal Complex, Opp. PLA Petrol Pump, Delhi Road, Hisar Haryana 125001 </p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="left">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <div class="right">
                                    <h2 class="h2_head base_heading_h2">Give Us a Call</h2>
                                    <p>+91 8957450000</p>
                                    <p>+91 8957450000</p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="left">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <div class="right">
                                    <h2 class="h2_head base_heading_h2">Email</h2>
                                    <p>Info@dogbazar.com </p>
                                </div>
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