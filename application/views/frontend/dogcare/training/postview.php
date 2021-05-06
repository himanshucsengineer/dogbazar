<!--div class="spacer_m"></div>



<div class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col">
                <p><a href="<?php echo base_url() ?>" class="nodecoration bc_link">Home</a> / <a href="<?php echo base_url() ?>training" class="nodecoration bc_link">Training</a> /
                    <a href="" class=" nodecoration bc_link bc_link_active"><?php echo @$blog->head ?></a>
                </p>
            </div>
        </div>
    </div>
</div>




<main>

    <div class="blog content_section">
        <div class="container">

            <div class="row justify-content-between">
                <div class="col-md-8 px-4">
              
                    <div>
                        <h1 class="h1_head"><?php echo @$blog->head ?></h1>
                    </div>
                    <div class="">
                        <p><span class="blog_date"><i><?php echo @$blog->date ?></i></span></p>
                    </div>
                  
                    <div class="blog_img">
                        <img src="<?php echo @$blog->image ?>" alt="" class="w-100 blog_f_img">
                    </div>
                   
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
                        <a href="<?php echo base_url() . "training/" . @$rel->link ?>" class="nodecoration">
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
                        <a href="<?php echo base_url() . "training/" . @$recent->link ?>" class="nodecoration">
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

</main-->

<style>
    .postview_new{
        width: 100%;
        height: auto;
        padding-bottom: 5rem;
        background-color: #ECF0F1;
    }
    .postview_new .navi{
        width: 100%;
        height: auto;
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
        padding-left: 1.5rem;
        background-color: #A6341B;
        margin-bottom: 4rem;
    }
    .postview_new .navi h4{
        font-size: 17px;
        color: white;
        text-transform: capitalize;
    }
    .postview_new .navi a{
        text-decoration: none;
        color: white;
        
    }
    .postview_new .blog_left{
        width: 100%;
        height: auto;
        padding: 1.5rem;
        background-color: white;
        box-shadow: 0 3px 3px -2px rgb(0 0 0 / 40%);
        word-break: break-all;
        margin-bottom: 4rem;
    }
    .postview_new .blog_left img{
        width: 100%;
       
        
    }
    .postview_new .blog_left h3{
        color: #252525;
       font-size: 27px;
        text-transform: uppercase;
        font-weight: 600;
    }
    .postview_new .blog_left h6{
        color: #727272;
       font-size: 17px;
        margin-bottom: 1rem;
    }
    .postview_new .blog_left p{
        margin-top: 2rem;
        margin-bottom: 1rem;
        color: #3a3a3a;
        font-family: 'Roboto', sans-serif;
        text-align: justify;
        line-height: 1.7rem;
        text-transform: capitalize;
        
    }
    .postview_new .box{
        width: 100%;
        height: auto;
        padding: 1rem;
        background-color: white;
        box-shadow: 0 3px 3px -2px rgb(0 0 0 / 40%);
        margin-bottom: 2rem;
    }
    .postview_new .box .top_side_head{
        width: 100%;
        height: auto;
        display: flex;
    }
    .postview_new .box .top_side_head .left{
        width:40%;
        height: auto;
        
    }
    .postview_new .box .top_side_head .left h3{
        color: #000;
        font-weight: 300 !important;
        text-transform: uppercase;
        font-size: 20px;
    }
    
    .postview_new .box .top_side_head .right{
        width: 60%;
        height: auto;
        
    }
    .postview_new .box .top_side_head .right .top_side_hori{
        width: 100%;
        border-bottom: 2px solid rgba(0,0,0,0.1) !important;
        margin-top: 2rem;
    }
    .postview_new .box .post_side_head{
        width: 100%;
        height: auto;
        display: flex;
    }
    .postview_new .box .post_side_head .left{
        width: 35%;
        height: auto;
        padding: 1rem;
    }
    .postview_new .box .post_side_head .right{
        width: 65%;
        height: auto;
        padding: 1rem;
    }
    .postview_new .box .post_side_head .left img{
        width: 100%;
    }
</style>
<div class="postview_new">
    <div class="navi">
        <div class="container">
        <h4><a href="">Home</a> > <a href="">Dog care > Training</a> > <a href="">Title</a></h4>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog_left">
                <h3>Title</h3>
                <h6><i class="fa fa-calendar" aria-hidden="true"></i> 17/06/2021</h6>
                <img src="<?php echo base_url()?>/assest/images/testimg1.png" alt="blog image">
                <p>content</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <div class="top_side_head">
                        <div class="left">
                            <h3>Recent post</h3>
                        </div>
                        <div class="right">
                            <hr class="top_side_hori">
                        </div>
                    </div>
                    <div class="post_side_head">
                        <div class="left">
                            <img src="<?php echo base_url()?>/assest/images/testimg1.png" alt="">
                        </div>
                        <div class="right">
                            <h4>This is testingg link </h4>
                        </div>
                    </div>
                    <div class="post_side_head">
                        <div class="left">
                            <img src="<?php echo base_url()?>/assest/images/testimg1.png" alt="">
                        </div>
                        <div class="right">
                            <h4>This is testingg link </h4>
                        </div>
                    </div>
                    <div class="post_side_head">
                        <div class="left">
                            <img src="<?php echo base_url()?>/assest/images/testimg1.png" alt="">
                        </div>
                        <div class="right">
                            <h4>This is testingg link </h4>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="top_side_head">
                        <div class="left">
                            <h3>Related post</h3>
                        </div>
                        <div class="right">
                            <hr class="top_side_hori">
                        </div>
                    </div>
                    <div class="post_side_head">
                        <div class="left">
                            <img src="<?php echo base_url()?>/assest/images/testimg1.png" alt="">
                        </div>
                        <div class="right">
                            <h4>This is testingg link </h4>
                        </div>
                    </div>
                    <div class="post_side_head">
                        <div class="left">
                            <img src="<?php echo base_url()?>/assest/images/testimg1.png" alt="">
                        </div>
                        <div class="right">
                            <h4>This is testingg link </h4>
                        </div>
                    </div>
                    <div class="post_side_head">
                        <div class="left">
                            <img src="<?php echo base_url()?>/assest/images/testimg1.png" alt="">
                        </div>
                        <div class="right">
                            <h4>This is testingg link </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>