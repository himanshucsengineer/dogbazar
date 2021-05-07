<style>
    .contact_us_new{
        width: 100%;
        height: auto;
        padding-top: 6rem;
        background-color: #ECF0F1;
    }
    .contact_us_input {
        width: 100%;
        height: auto;
        padding-top: .8rem !important;
        padding-bottom: .8rem !important;;
        padding-left: 1rem !important;
        border: 1px solid rgb( 190, 190, 190 ) !important;
        margin-bottom: 2rem !important;
        outline: none;
        border-radius: 6px;
        color: rgb(165, 154, 154) !important;
        font-size: 15px !important;
    }

    .contact_submit {
        width: 100%;
        height: auto;
        padding-top: .8rem;
        padding-bottom: .8rem;
        color: white;
        background-color: #FC8817;
        border: none;
        outline: none;
        border-radius: 6px;
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
        color: #FC8817;
    }

    .cont .flex .right {
        width: 85%;
        height: auto;
        margin-top: -1.5rem;
    }
    .contact_us_new .lets{
        width: 100%;
        text-align: center;
        font-weight: 600;
    }
    .contact_us_new .lets .eno{
        color: #FC8817 !important;
    }
    .contact_us_new .sabline_contact{
        text-align: center;
        font-size: 15px;
        margin-bottom: 5rem;
    }
    .contactus{
       padding: 1rem;
        border: 1px solid #cdcdcd;
        background-color: white !important;
        border-radius: 0px !important;
        box-shadow: 0px 4px 7px -2px rgb(0 0 0 / 20%);
    }
    .contact_us_new .base_heading_h2{
        color: #FC8817 !important;
    }
    .contact_us_new .cont h1{
        font-size: 24px;
        color: black;
        text-transform: capitalize;
        font-weight: 500 !important;
    }
    .contact_us_new .cont{
        padding: 1rem;
        
    }
    .cont .subbb{
        color: gray;
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

<main class="contact_us_new">
    <div class="container ">
        <h1 class="lets"><span class="eno">Enough about us</span>, lets talk about you now !</h1>
        <p class="sabline_contact">We would love to work with you and are waiting for you to drop us a line! Please fill out the form below to get in touch with us or request for a quote here. We’ll be sure to get back to you as soon as we can.</p>
        <div class="container px-3 mb-5">
            <div class="row justify-content-center  contactus">
                <div class="col-md-12">
                    <div class="row justify-content-around">
                        <div class="col-md-7 py-4">
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
                        <div class="col-md-5  px-4 cont">
                            <h1>If you prefer a more tangible form of communication we're here:</h1>
                            <hr>
                            <div class="flex">
                                <div class="left">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                                <div class="right">
                                    
                                    <h2 class="h2_head base_heading_h2">Our Office</h2>
                                    <p class="subbb">Ground Floor, Rajmahal Complex,</br> Opp. PLA Petrol Pump, Delhi Road,</br> Hisar Haryana 125001 </p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="left">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <div class="right">
                                    <h2 class="h2_head base_heading_h2">Give Us a Call</h2>
                                    <p class="subbb">+91 8957450000</p>
                                    <p class="subbb">+91 8957450000</p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="left">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <div class="right">
                                    <h2 class="h2_head base_heading_h2">Email</h2>
                                    <p class="subbb">Info@dogbazar.com </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="spacer_m"></div>
     


        <!-- End Main -->

</main>