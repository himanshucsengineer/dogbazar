<!--main>



    <div class="title_strip_brown">
        <div class="container">
            <div class="row py-4">
                <div class="col">
                    <h1 class="title_strip_brown_h1">Donate Now</h1>
                </div>
            </div>
        </div>
    </div>


    <div class="spacer_m"></div>


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
              
                    <form action="<?php echo base_url() ?>register/pay" method="post">

                        <p><span class="amt_lable">In Rupess</span></p>

                        <div class="row mb-3">
                            <div class="col-md-9">
                                <div class="mb-3">
                                   
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
        


                    <div class="spacer_s"></div>
                    <div class="spacer_s"></div>

                </div>


            </div>
        </div>
    </div>


    <div class="spacer_m"></div>
    <div class="spacer_m"></div>


</main-->
<style>
    .donation_new_main {
        width: 100%;
        height: auto;
        padding-top: 4rem;
        padding-bottom: 4rem;
    }

    .donation_form_new {
        width: 100%;
        height: auto;
        border: 1px solid #cdcdcd;
        background-color: #fff;
        padding: 1.5rem;
    }

    .donation_form_new .head {
        width: 100%;
        height: auto;
        border: 1px solid #cdcdcd;
        padding-top: .5rem;
        padding-bottom: .5rem;
        background-color: white;
        text-align: center;
        color: red;
        margin-bottom: 2rem;
        box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important;
    }

    .donation_form_new input[type="text"],
    input[type="email"],
    input[type="number"] {
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        padding-left: 1rem;
        border: 1px solid #cdcdcd;
        outline: none;
        margin-bottom: 2rem;
    }

    .donation_form_new input[type="checkbox"] {
        border-radius: 0px;
        margin-top: 2rem;
        margin-bottom: 2rem;
    }

    .donation_form_new label {
        width: 100%;

    }

    .donation_button_new {
        padding-left: 2.5rem;
        padding-right: 2.5rem;
        height: auto;
        padding-top: .3rem;
        padding-bottom: .3rem;
        border: 1px solid #f39933;
        outline: none;
        background-color: #f39933;
        color: white;
        border-radius: 25px;
        margin-top: 1rem;
        margin-right: 1rem;
    }

    /* Style the active class, and buttons on mouse-over */
    .active,
    .donation_button_new:hover {
        background-color: #d44444;
        border: 1px solid #d44444;
    }

    .donation_button_new2 {
        padding-left: 2.5rem;
        padding-right: 2.5rem;
        height: auto;
        padding-top: .3rem;
        padding-bottom: .3rem;
        border: 1px solid #f39933;
        outline: none;
        background-color: #f39933;
        color: white;
        border-radius: 25px;
        margin-top: 1rem;
        margin-right: 1rem;
    }

    /* Style the active class, and buttons on mouse-over */
    .acti,
    .donation_button_new2:hover {
        background-color: #d44444;
        border: 1px solid #d44444;
    }

    .donation_form_new .amount {
        margin-top: 2rem;
    }

    .donation_button_new3 {
        padding-left: 2.5rem;
        padding-right: 2.5rem;
        height: auto;
        padding-top: .3rem;
        padding-bottom: .3rem;
        border: 1px solid #f39933;
        outline: none;
        background-color: #f39933;
        color: white;
        border-radius: 25px;
        margin-top: 1rem;
        margin-right: 1rem;
    }

    /* Style the active class, and buttons on mouse-over */
    .activ,
    .donation_button_new3:hover {
        background-color: #d44444;
        border: 1px solid #d44444;
    }

    .donation_form_new .make_payment {
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        background-color: #f39933;
        border: 1px solid #f39933;
        outline: none;
        color: white;

    }

    .why_donate {
        width: 100%;
        height: auto;
        padding-top: 60px;
        padding-bottom: 60px;
        background-color: white;
    }

    .why_donate h1 {
        text-align: center;
        font-size: 35px;
        font-weight: 500;
    }

    .why_donate .flex {
        width: 100%;
        height: auto;
        display: flex;
    }

    .why_donate .flex .left {
        width: 30%;
        height: auto;
    }

    .why_donate .flex .right {
        width: 70%;
        height: auto;
    }

    .why_donate .hori_line {
        border-bottom: 1px solid gray;
        margin-bottom: 4rem;

    }
    .feqs{
        width: 100%;
        height: auto;
        padding-top: 3rem;
        padding-bottom: 3rem;
    }
   .feqs .accordion-header{
       padding: 0rem 0rem;
   }
   .feqs .accordion-item{
       border: 1px solid #cdcdcd;
       border-radius: 0px !important;
   }
   .feqs .accordion-button{
       color: black;
       font-size: 17px;
   }
</style>

<div class="donation_new_main ">
    <div class="container">
        <div class="row">
            <div class="col-md-5">

            </div>
            <div class="col-md-7">
                <div class="donation_form_new">
                    <?php
                    if ($this->session->flashdata('success')) {
                        echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
                    } else if ($this->session->flashdata('error')) {
                        echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
                    }


                    ?>
                    <div class="head">
                        <h3>Donation Form</h3>
                    </div>
                    <form action="<?php echo base_url() ?>register/pay" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Name*</label>
                                <input type="text" name="name" placeholder="Enter Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Email*</label>
                                <input type="email" name="email" placeholder="Enter Your Email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Number*</label>
                                <input type="number" name="mob" placeholder="Enter Your Number" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Address*</label>
                                <input type="text" name="add" placeholder="Enter Your Address" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">State*</label>
                                <input type="text" name="state" placeholder="Enter Your State" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">City</label>
                                <input type="text" name="city" placeholder="Enter Your City" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6" id="indian">
                                <label for="">Are You An Indian?*</label>
                                <input type="button" class="donation_button_new" value="Yes">
                                <input type="button" class="donation_button_new" value="No">
                                <input type="hidden" name="citizen" id="indi" value="">
                            </div>
                            <div class="col-md-6 " id="motivate">
                                <label for="">What Motivated You To Donate?</label>
                                <input type="button" class="donation_button_new2" value="Facebook Post">
                                <input type="button" class="donation_button_new2" value="Email">
                                <input type="button" class="donation_button_new2" value="Our Website">
                                <input type="button" class="donation_button_new2" value="Crowd Funding Platform">
                                <input type="button" class="donation_button_new2" value="Other">
                                <input type="hidden" id="moti" name="motive" value="">
                            </div>
                        </div>
                        <div class="row amount">
                            <div class="col-md-6" id="amount">
                                <label for="">Prefixed Amounts</label>
                                <input type="button" class="donation_button_new3" value="2000">
                                <input type="button" class="donation_button_new3" value="5000">
                                <input type="button" class="donation_button_new3" value="8000">
                            </div>
                            <div class="col-md-6">
                                <label for="">Custom Amount</label>
                                <input id="amm" type="number" name="amount" placeholder="Enter Amount" value="" required>
                            </div>
                        </div>
                        <input type="checkbox" name="term" id="" required> I Agree To <a href="<?php echo base_url() ?>term-condition">Term & Condition Policy</a>
                        <button class="make_payment">Confirm Payment</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="why_donate">
    <div class="container">
        <h1>Why Donate</h1>
        <hr class="hori_line">
        <div class="row">
            <div class="col-md-4">
                <div class="flex">
                    <div class="left">

                    </div>
                    <div class="right">
                        <p>To liberate animals from unnecessary suffering</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="flex">
                    <div class="left">

                    </div>
                    <div class="right">
                        <p>To help fellow animal lovers strengthen the movement</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="flex">
                    <div class="left">

                    </div>
                    <div class="right">
                        <p>To create a future where animals are free from human exploitation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="why_donate">
    <div class="container">
        <h1>What We Do?</h1>
        <hr class="hori_line">
        <div class="row">
            <div class="col-md-4">
                <div class="flex">
                    <div class="left">

                    </div>
                    <div class="right">
                        <p>To liberate animals from unnecessary suffering</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="flex">
                    <div class="left">

                    </div>
                    <div class="right">
                        <p>To help fellow animal lovers strengthen the movement</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="flex">
                    <div class="left">

                    </div>
                    <div class="right">
                        <p>To create a future where animals are free from human exploitation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="feqs">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>











<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type='text/javascript'>
    $(document).ready(function() {
        $('#amount input[type="button"]').on('click', function() {
            var thisBtn = $(this);

            thisBtn.addClass('activ').siblings().removeClass('activ');
            var btnText = thisBtn.text();
            var btnValue = thisBtn.val();
            document.getElementById("amm").value = btnValue;
        });

    });
    // baseURL variable
</script>

<script type='text/javascript'>
    $(document).ready(function() {
        $('#indian input[type="button"]').on('click', function() {
            var thisBtn = $(this);

            thisBtn.addClass('active').siblings().removeClass('active');
            var btnText = thisBtn.text();
            var btnValue = thisBtn.val();
            document.getElementById("indi").value = btnValue;
        });

    });
    // baseURL variable
</script>

<script type='text/javascript'>
    $(document).ready(function() {
        $('#motivate input[type="button"]').on('click', function() {
            var thisBtn = $(this);

            thisBtn.addClass('acti').siblings().removeClass('acti');
            var btnText = thisBtn.text();
            var btnValue = thisBtn.val();
            document.getElementById("moti").value = btnValue;
        });

    });
    // baseURL variable
</script>