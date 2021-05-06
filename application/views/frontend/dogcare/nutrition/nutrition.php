<!--div class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col">
                <p><a href="<?php echo base_url() ?>" class="nodecoration bc_link">Home</a> /
                    <a href="<?php echo base_url() ?>nutrition" class=" nodecoration bc_link bc_link_active">Nutrition</a>
                </p>
            </div>
        </div>
    </div>
</div>




<main>

    <div class="container">
        <div class="row justify-content-between ">
            <div class="col-md-3 px-5 m_hide">
                <div class="row">
                    <div class="col">
                        <h3>Nutrition</h3>
                    </div>
                </div>

                <div class="space"></div>

                <div class="row">
                    <div class="col">
                        <ul class="p-0 m-0">
                            <a href="<?php echo base_url()?>breed" class="nodecoration">
                                <li class="tranning_side_links">Breed</li>
                            </a>
                            <a href="<?php echo base_url()?>nutrition" class="nodecoration">
                                <li class="tranning_side_links">Nutrition</li>
                            </a>
                            <a href="<?php echo base_url()?>training" class="nodecoration">
                                <li class="tranning_side_links">Training</li>
                            </a>
                            <a href="<?php echo base_url()?>problems" class="nodecoration">
                                <li class="tranning_side_links">Problems</li>
                            </a>
                            <a href="<?php echo base_url()?>grooming" class="nodecoration">
                                <li class="tranning_side_links">Dog Grooming</li>
                            </a>
                            <a href="<?php echo base_url()?>petcare" class="nodecoration">
                                <li class="tranning_side_links">Pet Care Videos</li>
                            </a>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-md-9 px-4">

                <div class="row">
                    <div class="col">
                        <div class="tranning_page_head">
                            <h2 class="h2_head">Nutrition</h2>
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
                                        <a href="<?php echo base_url() . "nutrition/" . $value['link'] ?>">
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

</main-->
<style>
    .nutrition_new_main{
        width: 100%;
        height: auto;
        padding-bottom: 3rem;
    }
    .nutrition_new_main .navi{
        width: 100%;
        height: auto;
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
        padding-left: 1.5rem;
        background-color: #A6341B;
    }
    .nutrition_new_main .navi h4{
        font-size: 17px;
        color: white;
        text-transform: capitalize;
    }
    .nutrition_new_main .navi a{
        text-decoration: none;
        color: white;
        
    }
    .nutrition_new_main .nutri_head{
  
        background-color: #FC8817;
        padding-top: 3rem;
        padding-bottom: 3rem;
       
    }
    .nutrition_new_main .nutri_head h1{
        text-transform: capitalize;
        color:  white;
    
        text-align: center;
        font-size: 30px;
        font-weight: 700;
    }
    .nutrition_new_main .nutri_body{
        width: 100%;
        height: auto;
        padding-top: 5rem;
        padding-bottom: 5rem;
    }
    .nutrition_new_main .nutri_body .flex{
        width: 100%;
        height: auto;
        display: flex;
        flex-wrap: wrap;
        
    }
    .nutrition_new_main .nutri_body .flex .card{
        width: 33%;
        height: auto;
        padding: 1rem;
        border: none;
    }
    .nutrition_new_main .nutri_body .flex .card .inner_card{
        width: 100%;
        height: auto;
        box-shadow: 0 3px 4px -1px rgb(0 0 0 / 40%);
        border: 1px solid #cdcdcd;
    }
    .nutrition_new_main .nutri_body .flex .card .inner_card img{
        width: 100%;
        height: 200px;
        
       
    }
    .nutrition_new_main .nutri_body .flex .card .inner_card h3{
        margin-left: 1.5rem;
        margin-right: 1.5rem;
       margin-top: 1rem;
       color: #A6341B;
       text-transform: capitalize;
    }
    .nutrition_new_main .nutri_body .flex .card .inner_card p{
        color: gray;
        font-size: 13px;
        margin-left: 1.5rem;
        margin-right: 1.5rem;
        margin-bottom: 1.5rem;
    }
    .nutrition_new_main .nutri_body h1{
        text-transform: capitalize;
    }
</style>
<div class="nutrition_new_main">
    <div class="navi">
        <div class="container">
        <h4><a href="">Home</a> > <a href="">Dog Care > Nutrition</a></h4>
        </div>
    </div>
    <div class="nutri_head">
        <div class="container">
            <h1>***nutrition***</h1>
        </div>
    </div>
    <div class="nutri_body">
        <div class="container">
            <!--h1>news</h1>
            <hr-->
            <div class="flex">
                <div class="card">
                    <div class="inner_card">
                    <img src="<?php echo base_url()?>/assest/images/testimg1.png" alt="">
                    <h3>Titile</h3>
                    <p>Content herr hhfb fjgbfb gjfbgjfg fbgjfbgjfd gdfjgbfjdg dfgfdjgbdf gdfgjfjgfd gdfgjfg f gdf g fdg f gjfgjdf g fdjg fdj gjf gj fjg fdjg jdf gjdf gjf jg fj gfj gjf gj fdg fjg jdfg jdf gjdf gjdf gj fdjg dfjg fjd gjdf gjf gjf </p>
                    </div>
                </div>
                <div class="card">
                    <div class="inner_card">
                    <img src="<?php echo base_url()?>/assest/images/testimg1.png" alt="">
                    <h3>Titile</h3>
                    <p>Content herr hhfb fjgbfb gjfbgjfg fbgjfbgjfd gdfjgbfjdg dfgfdjgbdf gdfgjfjgfd gdfgjfg f gdf g fdg f gjfgjdf g fdjg fdj gjf gj fjg fdjg jdf gjdf gjf jg fj gfj gjf gj fdg fjg jdfg jdf gjdf gjdf gj fdjg dfjg fjd gjdf gjf gjf </p>
                    </div>
                </div>
                <div class="card">
                    <div class="inner_card">
                    <img src="<?php echo base_url()?>/assest/images/testimg1.png" alt="">
                    <h3>Titile</h3>
                    <p>Content herr hhfb fjgbfb gjfbgjfg fbgjfbgjfd gdfjgbfjdg dfgfdjgbdf gdfgjfjgfd gdfgjfg f gdf g fdg f gjfgjdf g fdjg fdj gjf gj fjg fdjg jdf gjdf gjf jg fj gfj gjf gj fdg fjg jdfg jdf gjdf gjdf gj fdjg dfjg fjd gjdf gjf gjf </p>
                    </div>
                </div>
                <div class="card">
                    <div class="inner_card">
                    <img src="<?php echo base_url()?>/assest/images/testimg1.png" alt="">
                    <h3>Titile</h3>
                    <p>Content herr hhfb fjgbfb gjfbgjfg fbgjfbgjfd gdfjgbfjdg dfgfdjgbdf gdfgjfjgfd gdfgjfg f gdf g fdg f gjfgjdf g fdjg fdj gjf gj fjg fdjg jdf gjdf gjf jg fj gfj gjf gj fdg fjg jdfg jdf gjdf gjdf gj fdjg dfjg fjd gjdf gjf gjf </p>
                    </div>
                </div>
                <div class="card">
                    <div class="inner_card">
                    <img src="<?php echo base_url()?>/assest/images/testimg1.png" alt="">
                    <h3>Titile</h3>
                    <p>Content herr hhfb fjgbfb gjfbgjfg fbgjfbgjfd gdfjgbfjdg dfgfdjgbdf gdfgjfjgfd gdfgjfg f gdf g fdg f gjfgjdf g fdjg fdj gjf gj fjg fdjg jdf gjdf gjf jg fj gfj gjf gj fdg fjg jdfg jdf gjdf gjdf gj fdjg dfjg fjd gjdf gjf gjf </p>
                    </div>
                </div>
                <div class="card">
                    <div class="inner_card">
                    <img src="<?php echo base_url()?>/assest/images/testimg1.png" alt="">
                    <h3>Titile</h3>
                    <p>Content herr hhfb fjgbfb gjfbgjfg fbgjfbgjfd gdfjgbfjdg dfgfdjgbdf gdfgjfjgfd gdfgjfg f gdf g fdg f gjfgjdf g fdjg fdj gjf gj fjg fdjg jdf gjdf gjf jg fj gfj gjf gj fdg fjg jdfg jdf gjdf gjdf gj fdjg dfjg fjd gjdf gjf gjf </p>
                    </div>
                </div>
                <div class="card">
                    <div class="inner_card">
                    <img src="<?php echo base_url()?>/assest/images/testimg1.png" alt="">
                    <h3>Titile</h3>
                    <p>Content herr hhfb fjgbfb gjfbgjfg fbgjfbgjfd gdfjgbfjdg dfgfdjgbdf gdfgjfjgfd gdfgjfg f gdf g fdg f gjfgjdf g fdjg fdj gjf gj fjg fdjg jdf gjdf gjf jg fj gfj gjf gj fdg fjg jdfg jdf gjdf gjdf gj fdjg dfjg fjd gjdf gjf gjf </p>
                    </div>
                </div>
            </div>
            <hr>

            <!--h1>Nutrition Videos</h1>
            <hr>
            <div class="flex">
                <div class="card">
                    <div class="inner_card">
                    <img src="<?php echo base_url()?>/assest/images/testimg1.png" alt="">
                    <h3>Titile</h3>
                    <p>Content herr hhfb fjgbfb gjfbgjfg fbgjfbgjfd gdfjgbfjdg dfgfdjgbdf gdfgjfjgfd gdfgjfg f gdf g fdg f gjfgjdf g fdjg fdj gjf gj fjg fdjg jdf gjdf gjf jg fj gfj gjf gj fdg fjg jdfg jdf gjdf gjdf gj fdjg dfjg fjd gjdf gjf gjf </p>
                    </div>
                </div>
                <div class="card">
                    <div class="inner_card">
                    <img src="<?php echo base_url()?>/assest/images/testimg1.png" alt="">
                    <h3>Titile</h3>
                    <p>Content herr hhfb fjgbfb gjfbgjfg fbgjfbgjfd gdfjgbfjdg dfgfdjgbdf gdfgjfjgfd gdfgjfg f gdf g fdg f gjfgjdf g fdjg fdj gjf gj fjg fdjg jdf gjdf gjf jg fj gfj gjf gj fdg fjg jdfg jdf gjdf gjdf gj fdjg dfjg fjd gjdf gjf gjf </p>
                    </div>
                </div>
                <div class="card">
                    <div class="inner_card">
                    <img src="<?php echo base_url()?>/assest/images/testimg1.png" alt="">
                    <h3>Titile</h3>
                    <p>Content herr hhfb fjgbfb gjfbgjfg fbgjfbgjfd gdfjgbfjdg dfgfdjgbdf gdfgjfjgfd gdfgjfg f gdf g fdg f gjfgjdf g fdjg fdj gjf gj fjg fdjg jdf gjdf gjf jg fj gfj gjf gj fdg fjg jdfg jdf gjdf gjdf gj fdjg dfjg fjd gjdf gjf gjf </p>
                    </div>
                </div>
                <div class="card">
                    <div class="inner_card">
                    <img src="<?php echo base_url()?>/assest/images/testimg1.png" alt="">
                    <h3>Titile</h3>
                    <p>Content herr hhfb fjgbfb gjfbgjfg fbgjfbgjfd gdfjgbfjdg dfgfdjgbdf gdfgjfjgfd gdfgjfg f gdf g fdg f gjfgjdf g fdjg fdj gjf gj fjg fdjg jdf gjdf gjf jg fj gfj gjf gj fdg fjg jdfg jdf gjdf gjdf gj fdjg dfjg fjd gjdf gjf gjf </p>
                    </div>
                </div>
                <div class="card">
                    <div class="inner_card">
                    <img src="<?php echo base_url()?>/assest/images/testimg1.png" alt="">
                    <h3>Titile</h3>
                    <p>Content herr hhfb fjgbfb gjfbgjfg fbgjfbgjfd gdfjgbfjdg dfgfdjgbdf gdfgjfjgfd gdfgjfg f gdf g fdg f gjfgjdf g fdjg fdj gjf gj fjg fdjg jdf gjdf gjf jg fj gfj gjf gj fdg fjg jdfg jdf gjdf gjdf gj fdjg dfjg fjd gjdf gjf gjf </p>
                    </div>
                </div>
                <div class="card">
                    <div class="inner_card">
                    <img src="<?php echo base_url()?>/assest/images/testimg1.png" alt="">
                    <h3>Titile</h3>
                    <p>Content herr hhfb fjgbfb gjfbgjfg fbgjfbgjfd gdfjgbfjdg dfgfdjgbdf gdfgjfjgfd gdfgjfg f gdf g fdg f gjfgjdf g fdjg fdj gjf gj fjg fdjg jdf gjdf gjf jg fj gfj gjf gj fdg fjg jdfg jdf gjdf gjdf gj fdjg dfjg fjd gjdf gjf gjf </p>
                    </div>
                </div>
                <div class="card">
                    <div class="inner_card">
                    <img src="<?php echo base_url()?>/assest/images/testimg1.png" alt="">
                    <h3>Titile</h3>
                    <p>Content herr hhfb fjgbfb gjfbgjfg fbgjfbgjfd gdfjgbfjdg dfgfdjgbdf gdfgjfjgfd gdfgjfg f gdf g fdg f gjfgjdf g fdjg fdj gjf gj fjg fdjg jdf gjdf gjf jg fj gfj gjf gj fdg fjg jdfg jdf gjdf gjdf gj fdjg dfjg fjd gjdf gjf gjf </p>
                    </div>
                </div>
            </div>
            <hr-->
        </div>
    </div>
</div>