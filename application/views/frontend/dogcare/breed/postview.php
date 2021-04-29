<style>
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
    <!-- End BreadCrumb -->



    <main>

        <!-- Heading -->
        <div class="row mb-3 justify-content-center">
            <div class="col-md-4 text-center px-3">
                <h1 class="fc_underline"><?php echo @$blog->name ?></h1>
            </div>
        </div>
        <!-- End Heading -->
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
                            <!--p><span class="detail_heads">Breed Rank :</span> <span> Ranks 166 of 197</span></p-->
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

            <!-- About Us -->
            <div class="breed_about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 breed_section_left">
                            <h2>About <?php echo @$blog->name ?></h2>
                            <p><?php echo @$blog->about ?>
                            </p>

                           
                        </div>
                        <!--div class="col-md-5 breed_section_right">
                            <img src="<?php echo base_url()?>assest/images/img1.jpg" alt="" class="about_sec_img">
                        </div-->
                    </div>
                </div>

            </div>
            <!-- End About  -->

        </div>


        <div class="spacer_m"></div>
        <div class="spacer_m"></div>

    </main>