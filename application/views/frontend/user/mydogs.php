<?php
foreach ($fetch_dogs as $value) {
}
?>



<main>


    <!-- Title Strip  -->
    <div class="title_strip_brown">
        <div class="container">
            <div class="row py-4">
                <div class="col">
                    <h1 class="title_strip_brown_h1">All Your Dogs</h1>
                </div>
            </div>
        </div>
    </div>


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




                        <div class="col-md-9">

                            <h3>My Dogs</h3>
                            <hr>






                            <div class="row">
                                <div class="col">
                                    <div class="row px-3 py-3">
                                        <div class="col-md-4 pb-4">
                                            <div class="petinfo_card">
                                                <a href="" class="nodecoration">
                                                    <img src="<?php echo base_url() ?>assest/images/testimg1.png" alt="" class="petinfo_card_img">
                                                </a>

                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col-4 ">
                                                        <h3>Mike</h3>
                                                    </div>
                                                    <div class="col-4  pt-1"><button class="btn my_dogs_edit">Edit</button>
                                                    </div>
                                                </div>
                                                <p>Status: <span class="my_dogs_available">Available</span> </p>
                                                <p>Female, Child</p>
                                                <p>Ram Nagar, Jaipur, Rajasthan</p>
                                            </div>

                                        </div>

                                        <div class="col-md-4 pb-4">
                                            <div class="petinfo_card">
                                                <a href="" class="nodecoration">
                                                    <img src="<?php echo base_url() ?>assest/images/testimg1.png" alt="" class="petinfo_card_img">
                                                </a>
                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col-4 ">
                                                        <h3>Mike</h3>
                                                    </div>
                                                    <div class="col-4  pt-1"><button class="btn my_dogs_edit">Edit</button>
                                                    </div>
                                                </div>
                                                <p>Status: <span class="my_dogs_adopted">Adopted</span> </p>
                                                <p>Female, Child</p>
                                                <p>Ram Nagar, Jaipur, Rajasthan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="spacer_s"></div>

                </div>



            </div>
        </div>

    </div>

    <!-- End Main -->

    <div class="spacer_m"></div>


</main>