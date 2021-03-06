<div class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col">
                <p><a href="<?php echo base_url() ?>" class="nodecoration bc_link">Home</a> /
                    <a href="<?php echo base_url() ?>behave" class=" nodecoration bc_link bc_link_active">Behaviour</a>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- End BreadCrumb -->



<main>

    <div class="container">
        <div class="row justify-content-between ">
            <div class="col-md-3 px-5 m_hide">
                <div class="row">
                    <div class="col">
                        <h3>Behaviour</h3>
                    </div>
                </div>

                <div class="space"></div>

                <div class="row">
                    <div class="col">
                        <ul class="p-0 m-0">
                            <a href="<?php echo base_url() ?>behave" class="nodecoration">
                                <li class="tranning_side_links">Behaviour</li>
                            </a>

                            <a href="<?php echo base_url() ?>training" class="nodecoration">
                                <li class="tranning_side_links">Training</li>
                            </a>
                            <a href="<?php echo base_url() ?>givingup" class="nodecoration">
                                <li class="tranning_side_links">Giving Up Your Dog</li>
                            </a>
                            <a href="<?php echo base_url() ?>getting" class="nodecoration">
                                <li class="tranning_side_links">Getting A Dog</li>
                            </a>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-md-9 px-4">

                <div class="row">
                    <div class="col">
                        <div class="tranning_page_head">
                            <h2 class="h2_head">Behaviour</h2>
                        </div>
                    </div>
                </div>

                <div class="spacer_s"></div>
                <div class="row px-4">
                    <div class="col">
                        <p>looking Scarlett Johansson once. As a matter of fact, this got us thinking. About burgers
                            and the
                            ways people love eating them. Found in every part of the world and a favorite among
                            various age
                            groups from freckled teenagers to the wiser generation, </p>

                        <p>looking Scarlett Johansson once. As a matter of fact, this got us thinking. About burgers
                            and the
                            ways people love eating them. Found in every part of the world and a favorite among
                            various age
                            groups from freckled teenagers to the wiser generation, </p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="row px-4">
                            <?php foreach ($blogs as $value) { ?>
                                <div class="col-md-4 py-2">
                                    <div class="pet_blog_box tranning_card">
                                        <a href="<?php echo base_url() . "behave/" . $value['link'] ?>">
                                            <div class="py-2">
                                                <img src="<?php echo $value['image']; ?>" alt="">
                                            </div>
                                            <div class="px-3">
                                                <p class="m-0"><span class="blog_sidetag"><?php echo $value['cate']; ?></span></p>
                                                <p class="m-0"><span class="blog_sidetitle tranning_card_p"><?php echo $value['head']; ?></span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            <?php } ?>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="spacer_m"></div>

</main>