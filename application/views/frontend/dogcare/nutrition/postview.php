<div class="spacer_m"></div>



<div class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col">
                <p><a href="<?php echo base_url() ?>" class="nodecoration bc_link">Home</a> / <a href="<?php echo base_url() ?>nutrition" class="nodecoration bc_link">Nutrition</a> /
                    <a href="" class=" nodecoration bc_link bc_link_active"><?php echo @$blog->head ?></a>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- End BreadCrumb -->



<main>

    <div class="blog content_section">
        <div class="container">

            <div class="row justify-content-between">
                <div class="col-md-8 px-4">
                    <!-- Blog Heading -->
                    <div>
                        <h1 class="h1_head"><?php echo @$blog->head ?></h1>
                    </div>
                    <div class="">
                        <p><span class="blog_date"><i><?php echo @$blog->date ?></i></span></p>
                    </div>
                    <!-- End Blog Heading -->

                    <!-- Featured Image Section -->
                    <div class="blog_img">
                        <img src="<?php echo @$blog->image ?>" alt="" class="w-100 blog_f_img">
                    </div>
                    <!-- End Featured Image Section -->
                    <div class="spacer_s"></div>


                    <div class="px-3">
                        <p><?php echo @$blog->content ?></p>
                    </div>


                </div>
                <div class="col-md-4 px-5">

                    <div class="row">
                        <div class="row mb-2 px-2">
                            <div class="col">
                                <h3 class="fc_underline blog_side_head">Recommended For You</h3>
                            </div>
                        </div>
                    </div>
                    <?php foreach ($releted as $rel) : ?>
                        <?php if ($rel->id != $blog->id); ?>
                        <a href="<?php echo base_url() . "nutrition/" . @$rel->link ?>" class="nodecoration">
                            <div class="row mb-3">
                                <div class="col-4 py-3">
                                    <img src="<?php echo @$rel->image ?>" alt="" class="w-100">
                                </div>
                                <div class="col-8">
                                    <p class="m-0"><span class="blog_sidetag"><?php echo @$rel->cate ?></span></p>
                                    <p class="m-0"><span class="blog_sidetitle"><?php echo @$rel->head ?></span>
                                    </p>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>

                    <div class="spacer_m"></div>
                    <div class="row">
                        <div class="row mb-2 px-2">
                            <div class="col">
                                <h3 class="fc_underline blog_side_head">Recent Post</h3>
                            </div>
                        </div>
                    </div>
                    <?php foreach ($recents as $recent) : ?>
                        <a href="<?php echo base_url() . "nutrition/" . @$recent->link ?>" class="nodecoration">
                            <div class="row mb-3">
                                <div class="col-4 py-3">
                                    <img src="<?php echo @$recent->image ?>" alt="" class="w-100">
                                </div>
                                <div class="col-8">
                                    <p class="m-0"><span class="blog_sidetag"><?php echo @$recent->cate ?></span></p>
                                    <p class="m-0"><span class="blog_sidetitle"><?php echo @$recent->head ?></span>
                                    </p>
                                </div>
                            </div>
                        </a>

                    <?php endforeach; ?>
                </div>
            </div>





        </div>

    </div>


    <div class="spacer_m"></div>
    <div class="spacer_m"></div>

</main>