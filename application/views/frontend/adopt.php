<!--main>



    <div class="title_strip_brown">
        <div class="container">
            <div class="row py-4">
                <div class="col">
                    <h1 class="title_strip_brown_h1">Adopt pet</h1>
                </div>
            </div>
        </div>
    </div>
   

    <div class="spacer_m"></div>

  
    <div class="body_content">
        <div class="container px-4">
            <div class="row justify-content-between ">

            
                <div class="col-md-9 pxy-2 ">
                    <h2>More Then 300 Dogs Breed are here to Adopt</h2>
                    <p>From more than 17,000 animal shelters & rescues. Please note that the information
                        contained in our plant lists is not meant to be all-inclusive.</p>

                    <h3>Enter Location</h3>

                 
                    <form action="">

                        <p><span class="amt_lable">Search Your Pet at any Location in India</span></p>

                        <div class="row">
                            <div class="col-md-10">
                                <div class="mb-4">
                                
                                    <input type="text" class="form-control base_input adopt_input_search" name="donar_amount" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search Your Pet">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <button class=" brown_btn">Search</button>
                            </div>
                        </div>

                        <div class="spacer_m"></div>

                        <div class="row">
                            <div class="col">

                                <h3>All Featured Pets</h3>
                                <p>10 Pets has Found In Jaipur</p>
                            </div>
                        </div>



                    </form>
                  

                    <hr>
                    <div class="spacer_s"></div>


                    <div class="row px-4">
                        <div class="col">
                            <div class="row">
                                <?php foreach ($adopt as $value) { ?>
                                <div class="col-md-4 mb-5 px-3">
                                    <a href="<?php echo base_url() . "adopt/" . $value['link'] ?>" class="nodecoration">
                                        <div class="petinfo_card">

                                            <img src="<?php echo $value['image'] ?>" alt="" class="petinfo_card_img">

                                            <h3>Breed: &nbsp; <span class="petinfo_card_status"><?php echo $value['breed'] ?></span></h3>
                                            <p>Gender: &nbsp; <span class="petinfo_card_status"><?php echo $value['gender'] ?></span></p>
                                            <p>Age: &nbsp; <span class="petinfo_card_status"><?php echo $value['age'] ?></span></p>

                                            <p><?php echo $value['city'] ?></p>

                                        </div>
                                    </a>
                                </div>
                                <?php } ?>
                           

                                





                            </div>

                        </div>
                    </div>



                </div>



    

                <div class="col-md-3 px-3  ">
                    <div class="row mb-2">
                        <div class="col">
                            <h2>Donate to Save Pets</h2>
                            <p>from more than 17,000 animal shelters & rescues</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="<?php echo base_url() ?>donate"><button class="btn donar_pay">Lets Donate</button></a>
                        </div>
                    </div>
                </div>

     


            </div>
        </div>

    </div>



    <div class="spacer_m"></div>
    <div class="spacer_m"></div>

</main-->
<style>
    .adopt_dog {
        width: 100%;
        height: auto;
        padding-bottom: 3rem;
        padding-top: 5rem;
    }

    .adopt_dog img {
        width: 100%;
        height: 400px;
        margin-bottom: 1rem;
    }

    .adopt_dog p {
        color: #444;
        text-align: justify;
    }

    .adopt_dog .flex {
        width: 100%;
        height: auto;
        display: flex;

    }

    .adopt_dog .flex .left {
        width: 50%;
        height: auto;
    }

    .adopt_dog .flex .left input[type="text"] {
        width: 100%;
        height: auto;
        padding-top: .8rem;
        padding-bottom: .8rem;
        padding-left: 1.5rem;
        outline: none;
        border: 1px solid #cdcdcd;
    }

    .adopt_dog .flex .right {
        width: 10%;
        height: auto;
    }

    .adopt_dog .flex .right button {
        width: 100%;
        height: auto;
        padding-top: .8rem;
        padding-bottom: .8rem;
        color: white;
        background-color: #f39933;
        border: 1px solid #f39933;
        outline: none;
    }

    .adopt_dog .adopt_hori_line {
        width: 100%;
        opacity: 1;
        background-color: none;
        border-bottom: 2px solid #f39933;
        margin-top: 2rem;
    }

    .adopt_dog .adopt_card_main {
        width: 100%;
        height: auto;
        padding-top: 2rem;
        padding-bottom: 2rem;
        display: flex;
        flex-wrap: wrap;
    }

    .adopt_dog .adopt_card_main .card {
        width: 25%;
        height: auto;
        padding: 1rem;
        border: none;
        border-radius: 0px;
        background-color: transparent;
    }
    .adopt_dog .adopt_card_main .card a{
        text-decoration: none;
    }
    .adopt_dog .adopt_card_main .card .card_inner {
        border: 1px solid #cdcdcd;
        padding: 2rem;
    }

    .adopt_dog .adopt_card_main .card .card_inner img {
        width: 100%;
        height: 170px;
    }

    .adopt_dog .adopt_card_main .card .card_inner h3 {
        text-align: center;
        color: #f39933;
    }

    .adopt_dog .adopt_card_main .card .card_inner h6 {
        font-size: 1.4rem;
        color: #444;
    }
    .adopt_dog .adopt_card_main .card .card_inner .adop_butt {
        width: 100%;
        height: auto;
        text-align: center;
        margin-top: 2rem;
    }
    .adopt_dog .adopt_card_main .card .card_inner .adop_butt button{
        width: 15rem;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        color: white;
        text-transform: capitalize;
        background-color: #f39933;
        border: 1px solid #f39933;
        outline: none;
        border-radius: 25px;
    }
    @media screen and (max-width: 600px) {
        .adopt_dog .flex .left {
            width: 65%;
            height: auto;
        }

        .adopt_dog .flex .right {
            width: 25%;
            height: auto;
        }

        .adopt_dog .adopt_card_main .card {
            width: 50%;
            height: auto;
            padding: .5rem;
        }

        .adopt_dog .adopt_card_main .card .card_inner {

            padding: 1rem;
        }

        .adopt_dog .adopt_card_main .card .card_inner img {

            height: 100px;
        }

        .adopt_dog .adopt_card_main .card .card_inner h3 {
            font-size: 1.7rem;
        }

        .adopt_dog .adopt_card_main .card .card_inner h6 {

            font-size: 1.1rem;
        }
    }
</style>
<div class="adopt_dog">

    <!--img src="<?php echo base_url() ?>assest/images/adopt.jpg" alt="adopt aimage">
    <p>At the International Dog Bazar shelter, hundreds of dogs wait in anticipation of loving homes. Many have been rescued from suffering on the streets or as survivors of the Asian dog meat trade. All are deserving of a forever home and the process is a lot easier than you think. Search below to find the perfect companion for your home and family. Thank you for wanting to adopt a rescue; Soi Dog Foundation will help you every step of the way.</p-->
    <div class="container">
        <div class="flex justify-content-center">
            <div class="left">
                <input type="text" placeholder="Search By City">
            </div>
            <div class="right">
                <button>Search</button>
            </div>
        </div>

        <div class="adopt_card_main ">
        <?php foreach ($adopt as $value) { ?>
            
            <div class="card">
            <a href="<?php echo base_url() . "adopt/" . $value['link'] ?>">
                <div class="card_inner">
                    <h3><?php echo $value['breed'] ?></h3>
                    <img src="<?php echo $value['image'] ?>" alt="dog image">
                    <h6>Gender: <?php echo $value['gender'] ?></h6>
                    <h6>Age: <?php echo $value['age'] ?></h6>
                    <h6><?php echo $value['city'] ?></h6>
                    <div class="adop_butt">
                    <a href="<?php echo base_url() . "adopt/" . $value['link'] ?>"><button>Adopt Now</button></a>
                    </div>
                </div>
                </a>
            </div>
            
            <?php }?>
            
            
            
            
        </div>

    </div>
</div>