<!--style>
    .image{
        width: 100%;
    }

</style>

<div class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p><a href="" class="nodecoration bc_link">Home</a> / <a href="<?php echo base_url()?>breed"
                            class="nodecoration bc_link">Breed</a> /
                        <a href="#" class=" nodecoration bc_link bc_link_active"><?php echo @$blog->name ?></a>
                    </p>
                </div>
            </div>
        </div>
    </div>




    <main>

 
        <div class="row mb-3 justify-content-center">
            <div class="col-md-4 text-center px-3">
                <h1 class="fc_underline"><?php echo @$blog->name ?></h1>
            </div>
        </div>

        <div class="spacer_m"></div>

        <div class="blog content_section">
            <div class="container">

                <div class="row justify-content-around">
                    <div class="col-md-6 px-4">
                        <img class="image" src="<?php echo @$blog->image ?>" alt="">

                        <div class="spacer_s"></div>


                    </div>
                    <div class="col-md-6  px-4 ">

                        <div class="py-2 px-4">

                            <p><span class="detail_heads">Temperament :</span> <span class="detail_heads_hgl"> <?php echo @$blog->temp ?></span></p>
                           
                            <p><span class="detail_heads">Height :</span> <span> <?php echo @$blog->height ?></span></p>
                            <p><span class="detail_heads">Weight : </span><span><?php echo @$blog->weight ?></span> </p>
                            <p><span class="detail_heads">Life Expectancy : </span><span><?php echo @$blog->exp ?>
                                    </span></p>
                        </div>

                        <div class="row py-4 px-2">
                            <div class="col">
                                <blockquote class="bq_hg"><i> "The American Water Spaniel, native to the lake country of
                                        the upper
                                        Midwest,
                                        is an upbeat, outdoorsy athlete who loves to hunt and swim. They are known to be
                                        happy, eager, and charming, though aloof with strangers and a bit stubborn."
                                    </i>
                                </blockquote>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="spacer_m"></div>
            </div>

          
            <div class="breed_about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 breed_section_left">
                            <h2>About <?php echo @$blog->name ?></h2>
                            <p><?php echo @$blog->about ?>
                            </p>

                           
                        </div>
                      
                    </div>
                </div>

            </div>
          

        </div>


        <div class="spacer_m"></div>
        <div class="spacer_m"></div>

    </main-->



    <div class="adopt_pet_main_new "> 
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <img class="breedview" src="<?php echo @$blog->image ?>" alt="adopt pet">

                <div class="bottom_images">
                    <div class="cardimage">

                        <img src="<?php echo @$blog->image ?>" alt="adopt pet">
                    </div>
                    <?php for ($i = 1; $i < 5; $i++) {
                        $img = "image$i";
                        if (@$list->$img != NULL) {  ?>
                            <div class="cardimage">

                                <img src="<?php echo @$blog->$img ?>" alt="adopt pet">
                            </div>

                    <?php }
                    } ?>

                </div>
            </div>
            <div class="col-md-6">
                <div class="right">
                    <h1>Adonis</h1>
                    <h5>Breed:<span class="declar">Testing</span></h5>
                    <h5>Age:<span class="declar">12 Year</span></h5>
                    <h5>Weight:<span class="declar">45kg</span></h5>
                    <h5>Gender:<span class="declar">Male</span></h5>
                    <h5>Good With Dogs?:<span class="declar">yes</span></h5>
                    <!--h3><?php echo @$list->breed ?></h3>
                    <h5>Age: <span><?php echo @$list->age ?></span></h5>
                    <h5>Colour: <span><?php echo @$list->color ?></span></h5>
                   
                    <h5>Gender:<span><?php echo @$list->gender ?></span></h5-->
                
                   
                        
                    
                </div-->
            </div>
        </div>

        <div class="about breedviewabout">
            <h3>More Information About Dog:</h3>
            <hr>
            <p><!--?php echo @$list->about ?--> hiii yhi udu uyd y dgfa a sata sdthbthbr sdvsahgdshgd sdcystfdystd dgjsuydguasgdsa dsavdufsaudsa dsaduasfdsaudhs dsgdcsa dashgdcyas dhascdysa dhasdyas dascdas dasgd as dhsads dvsa td svd tsd sdfsa dshdcty dhsdshd hasgdcyas dashgcdysah dgasd yhas dhsacd yas dysad hasd sd sadc ashg dshga das dyasd sahvdetywvdgh sxhd sband ycds vba dhgsdfvytw scdwhgsdvgwhs hds ycds gchfvewydvf vf dhgvf </p>
        </div>
    </div>
 
</div>

