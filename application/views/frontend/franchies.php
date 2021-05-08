<!--style>
    .franchies_form_fill{
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        padding-left: 1rem;
        border: 1px solid #cdcdcd;
        outline: none;
        margin-bottom: 1.5rem;
    }
    .franchies_submit{
        width: 100%;
        height: auto;
        padding-top: .7rem;
        padding-bottom: .7rem;
        border: 1px solid #f39933;
        background-color: #f39933;
        color: white;
        outline: none;
        text-transform: uppercase;
        transition: .5s;
    }
    .franchies_submit:hover{
        border-radius: 25px;
    }

</style>
<main>
    <div class="spacer_m"></div>

   
    <div class="container px-4 mb-5">


        <div class="row mb-3 justify-content-center">
            <div class="col-md-4 text-center px-3">
                <h1 class="fc_underline">Become a Franchise</h1>
            </div>
        </div>
   
        <div class="row mb-3 justify-content-center">
            <div class="col-md-8  text-center px-3">
                <p>This list contains plants that have been reported as having systemic effects on animals and/or
                    intense effects on the gastrointestinal tract.
                </p>
            </div>
        </div>


        <div class="row justify-content-around px-2 py-2">
            <div class="col-md-5  px-3">
                <div class="fc_options">
                    <h3 class="fc_options_h1">A Unique Concept</h3>
                    <p>This list contains plants that have been reported as having systemic effects on animals
                        and/or
                        intense effects on the gastrointestinal tract..</p>
                </div>
                <div class="fc_options">
                    <h3 class="fc_options_h1">Growth Opportunities</h3>
                    <p>This list contains plants that have been reported as having systemic effects on animals
                        and/or
                        intense effects on the gastrointestinal tract..</p>
                </div>
            </div>
            <div class="col-md-5  px-3">
                <div class="fc_options">
                    <h3 class="fc_options_h1">Creating Ecosystem for Pet Lovers</h3>
                    <p>This list contains plants that have been reported as having systemic effects on animals
                        and/or
                        intense effects on the gastrointestinal tract..</p>
                </div>
                <div class="fc_options">
                    <h3 class="fc_options_h1">Training Programs</h3>
                    <p>This list contains plants that have been reported as having systemic effects on animals
                        and/or
                        intense effects on the gastrointestinal tract..</p>
                </div>
            </div>
        </div>

    </div>

    <div class="spacer_s"></div>


    <div class="container mb-4">
        <div class="fc_banner px-2 py-2">
            <div class="row py-4">
                <div class="col-md-12">

                    <div class="row justify-content-center">
                        <div class="col-md-4  text-center px-3">
                            <h1 class="fc_banner_color">Become a Franchise</h1>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-9 text-center px-3">
                            <h3 class="fc_underline fc_banner_color">JOIN YOUR HANDS AND BECOME PARTNERS IN
                                COMPLIANCE WITH MAD:</h3>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-9 text-center px-3">
                            <p class=" fc_banner_color">This list contains plants that have been reported as having
                                systemic effects on animals and/or intense effects on the gastrointestinal tract..
                            </p>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>


    <div class="spacer_s"></div>

    <div class="container px-5 mb-5">
        <div class="row mb-3 justify-content-center">
            <div class="col-md-4 text-center px-3">
                <h1 class="fc_underline">Write To Us</h1>
            </div>
        </div>

        <div class="row justify-content-center mt-5 py-5 writetous">
            <div class="col-md-12">
                <div class="row justify-content-around">
                    <div class="col-md-6 ">
                        <?php
                        if ($this->session->flashdata('success')) {
                            echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
                        } else if ($this->session->flashdata('error')) {
                            echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
                        }


                        ?>
                        <form action="<?php echo base_url() ?>frontend/franchies/insert_data" method="post">
                            <label for="" class="donate_input_lable pb-3">Name (Required)</label>
                            <input type="text" class="franchies_form_fill base_input" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name">
                            <label for="" class="donate_input_lable pb-3">Email (Required)</label>
                            <input type="email" class="franchies_form_fill base_input" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email">
                            <label for="" class="donate_input_lable pb-3">Subject *</label>
                            <input type="text" class="franchies_form_fill base_input" name="sub" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Subject">
                            <label for="exampleInputEmail1" class="donate_input_lable pb-3">Your Message</label>
                            <textarea name="msg" id="" class="franchies_form_fill" placeholder="Leave a comment here" cols="30" rows="5"></textarea>

                            <button class="franchies_submit">Submit</button>


                        </form>
                    </div>
                    <div class="col-md-5 ">

                    </div>
                </div>
            </div>
        </div>


    </div>


    <

</main-->

<div class="form_top_new" >
    <div class="">
    <div class="container" >
        <h1>Become a franchies</h1>
        <p>Join With Us </p>
    </div>
    </div>
</div>

<div class="list_dog_form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="list_dod_form_inner">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Name</label>
                            <input type="text" placeholder="Enter Your Name">
                            <label for="">Name</label>
                            <input type="text" placeholder="Enter Your Name">
                            <label for="">Name</label>
                            <input type="text" placeholder="Enter Your Name">
                            <label for="">Name</label>
                            <input type="text" placeholder="Enter Your Name">
                            <label for="">Name</label>
                            <input type="text" placeholder="Enter Your Name">
                            <label for="">Name</label>
                            <input type="text" placeholder="Enter Your Name">
                            
                        </div>
                        <div class="col-md-6">
                            <label for="">Name</label>
                            <input type="text" placeholder="Enter Your Name">
                            <label for="">Name</label>
                            <input type="text" placeholder="Enter Your Name">
                            <label for="">Name</label>
                            <input type="text" placeholder="Enter Your Name">
                            <label for="">Name</label>
                            <input type="text" placeholder="Enter Your Name">
                            <label for="">Name</label>
                            <input type="text" placeholder="Enter Your Name">
                            <label for="">Name</label>
                            <input type="text" placeholder="Enter Your Name">
                            
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <button>Sponsor Now</button>
                        </div>
                    </div>
                    <!--form action="<?php echo base_url() ?>" method="post">
                        <?php
                        if ($this->session->flashdata('success')) {
                            echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
                        } else if ($this->session->flashdata('error')) {
                            echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
                        }


                        ?>
                        <input type="hidden" name="uniq_id" value="<?php echo $uniqid?>">
                        <label for="">Your Name*</label>
                        <input type="text" name="name" placeholder="Enter Your Name">
                        <label for="">Your Email*</label>
                        <input type="email" name="email" placeholder="Enter Your Email">
                        <label for="">Your Number*</label>
                        <input type="number" name="mob" placeholder="Enter Your Number">
                       
                        <label for="">Upload ID Proof*(Front & Back photo)</label>
                        <input type="file" multiple="multiple" name="files[]"  maxlength="2" placeholder="Upload Dog Images">
                      
                        <label for="">Parmanent Address</label>
                        <textarea name="city" id="" cols="30" rows="5" placeholder="Your Address"></textarea>
                        <button name='upload'>Adopt Now</button>
                    </form-->
                </div>
            </div>
        </div>
    </div>
</div>