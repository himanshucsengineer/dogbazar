<!--style>
    .adoptpetimage{
        width: 100%;
    }
</style>    
<main>
    <div class="spacer_m"></div>
    <div class="body_content">
        <div class="container px-4">
            <div class="row justify-content-between ">
            <?php
                        if ($this->session->flashdata('success')) {
                            echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
                        } else if ($this->session->flashdata('error')) {
                            echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
                        }
                        ?>
                
                <div class="col-md-9 pxy-1 ">
                    <div class="py-3">
                        <h2><?php echo @$list->breed ?>, <?php echo @$list->city ?></h2>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-10 p-2 about_pet bod">
                            <div class="row ">
                                <div class="col">
                                   
                                    <img class="adoptpetimage" src="<?php echo @$list->image ?>" alt="test">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col">
                            <h3>More About Pet</h3>
                        </div>
                    </div>
                    <div class="row about_pet_point">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-6">
                                    <ul>
                                        <li><span class="about_pet_point_li">Breed :</span> <?php echo @$list->breed ?></li>
                                        <li><span class="about_pet_point_li">Sex :</span> <?php echo @$list->gender ?></li>
                                        <li><span class="about_pet_point_li">Age :</span> <?php echo @$list->age ?></li>
                                    </ul>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <h3>Info : </h3>
                            <p><?php echo @$list->msg ?> </p>
                        </div>
                    </div>
                    <div class="row mt-1 mb-1">
                        <div class="col">
                            <a href="<?php echo base_url() ?>adoptpet/adoption/<?php echo @$list->link ?>"><button class=" adopt_me_btn">Interested</button></a>
                        </div>
                    </div>
                    <div class="spacer_s"></div>
                    <div class="spacer_s"></div>
                </div>
                <div class="col-md-3 px-3 mb-5 ">
                    <div class="row mb-2">
                        <div class="col">
                            <h2>Donate to Save Pets</h2>
                            <p>from more than 17,000 animal shelters & rescues</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <a href="<?php echo base_url(); ?>donate"><button class="adopt_me_btn">Lets Donate</button></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h3>Follow Us On</h3>
                            <div class="row px-3">
                                <div class="col-1">f</div>
                                <div class="col-1">t</div>
                                <div class="col-1">li</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row morepets ">
            <div class="col-md-11">
                <div class="mb-4">
                    <h3 class="somemore_pets_h2">Some More Pets in Jaipur</h3>
                </div>
                <div class="row">
                    <div class="col-md-3 pb-4">
                        <a href="" class="nodecoration">
                            <div class="petinfo_card">
                                <img src="<?php echo base_url() ?>assest/images/testimg1.png" alt="" class="petinfo_card_img">
                                <h3>Mike</h3>
                                <p>Status: &nbsp; <span class="petinfo_card_status">Available</span></p>
                                <p>Female, Child</p>
                                <p>Ram Nagar, Jaipur, Rajasthan</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 pb-4">
                        <a href="" class="nodecoration">
                            <div class="petinfo_card">
                                <img src="<?php echo base_url() ?>assest/images/testimg1.png" alt="" class="petinfo_card_img">
                                <h3>Mike</h3>
                                <p>Status: &nbsp; <span class="petinfo_card_status">Available</span></p>
                                <p>Female, Child</p>
                                <p>Ram Nagar, Jaipur, Rajasthan</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 pb-4">
                        <a href="" class="nodecoration">
                            <div class="petinfo_card">
                                <img src="<?php echo base_url() ?>assest/images/testimg1.png" alt="" class="petinfo_card_img">
                                <h3>Mike</h3>
                                <p>Status: &nbsp; <span class="petinfo_card_status">Available</span></p>
                                <p>Female, Child</p>
                                <p>Ram Nagar, Jaipur, Rajasthan</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="spacer_m"></div>
    <div class="spacer_m"></div>
</main-->
<style>
    .adopt_pet_main_new{
        width: 100%;
        height: auto;
        padding-top: 5rem;
        padding-bottom: 5rem;
        background-color: white;
    }
    .adopt_pet_main_new img{
        width: 100%;
        height: 350px;
    }
    .adopt_pet_main_new .right{
        width: 100%;
        height: auto;
        padding-left: 2rem;
        border: 1px solid #cdcdcd;
       
        background-color: #f8f8f8;
        padding-top: 2rem;
        padding-bottom: 2rem;
    }
    .adopt_pet_main_new .right .adopp_butt{
        width: 100%;
        height: auto;
        text-align: center;
        margin-top: 2rem;
    }
    .adopt_pet_main_new .right .adopp_butt button{
        width: 20rem;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        color: white;
        background-color: #f39933;
        border: 1px solid #f39933;
        outline: none;
        border-radius: 25px;
    }
    .adopt_pet_main_new .right h3{
        color: #f39933;
        font-size: 30px;
        text-transform: capitalize;
    }
    .adopt_pet_main_new .right h5{
       margin-bottom: 1rem;
        font-size: 18px;
        text-transform: capitalize;
    }
    .adopt_pet_main_new .right span{
        margin-left: 2rem;
    }
    .adopt_pet_main_new .about{
        width: 100%;
        height: auto;
        padding-top: 5rem;
    }
</style>
<div class="adopt_pet_main_new">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo @$list->image ?>" alt="adopt pet">
            </div>
            <div class="col-md-6">
                <div class="right">
                <h3><?php echo @$list->breed ?></h3>
                <h5>Age: <span><?php echo @$list->age ?></span></h5>
                <h5>Colour: <span><?php echo @$list->colour ?></span></h5>
                <h5>Weight: <span><?php echo @$list->weight ?></span></h5>
                <h5>Condition:<span><?php echo @$list->condition ?></span></h5>
                <h5>Gender:<span><?php echo @$list->gender ?></span></h5>
                <h5>Location:<span><?php echo @$list->city ?></span></h5>
                <div class="adopp_butt">
                    <a href="<?php echo base_url() ?>adoptpet/adoption/<?php echo @$list->link ?>"><button>Adopt Pet Now</button></a>
                </div>
                </div>
            </div>
        </div>

        <div class="about">
            <h3>More Information About Dog:</h3>
            <hr>
            <p><?php echo @$list->msg ?></p>
        </div>
    </div>
</div>