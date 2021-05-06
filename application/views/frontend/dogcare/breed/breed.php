<!--style>
    .search{
        width: 100%;
        height: auto;
        padding-top: .8rem;
        padding-bottom: .8rem;
        padding-left: 1rem;
        border: 1px solid #cdcdcd;
        outline: none;
    }
</style>
<div class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col">
                <p><a href="<?php echo base_url() ?>" class="nodecoration bc_link">Home</a> /
                    <a href="<?php echo base_url() ?>breed" class=" nodecoration bc_link bc_link_active">Breed</a>
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
                        <h3>Grooming</h3>
                    </div>
                </div>

                <div class="space"></div>

                <div class="row">
                    <div class="col">
                        <ul class="p-0 m-0">
                            <a href="<?php echo base_url() ?>breed" class="nodecoration">
                                <li class="tranning_side_links">Breed</li>
                            </a>
                            <a href="<?php echo base_url() ?>nutrition" class="nodecoration">
                                <li class="tranning_side_links">Nutrition</li>
                            </a>
                            <a href="<?php echo base_url() ?>training" class="nodecoration">
                                <li class="tranning_side_links">Training</li>
                            </a>
                            <a href="<?php echo base_url() ?>problems" class="nodecoration">
                                <li class="tranning_side_links">Problems</li>
                            </a>
                            <a href="<?php echo base_url() ?>grooming" class="nodecoration">
                                <li class="tranning_side_links">Dog Grooming</li>
                            </a>
                            <a href="<?php echo base_url() ?>petcare" class="nodecoration">
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
                            <h2 class="h2_head">Breed</h2>
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
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <input type="text" class="search" placeholder="Search Breed" list="da" id="dynamic_select">
                                <datalist id="da">
                                    <?php foreach ($blogs as $value) { ?>
                                        <option value="<?php echo  $value['link'] ?>"></option>
                                    <?php } ?>
                                </datalist>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="row px-4">
                            <?php foreach ($blogs as $value) { ?>
                                <div class="col-md-4 py-2">
                                    <div class="pet_blog_box tranning_card">
                                        <a href="<?php echo base_url() . "breed/" . $value['link'] ?>">
                                            <div class="py-2">
                                                <img src="<?php echo $value['image']; ?>" alt="">
                                            </div>
                                            <div class="px-3">
                                                <p class="m-0"><span class="blog_sidetag">Group: <?php echo $value['grp']; ?></span></p>
                                                <p class="m-0"><span class="blog_sidetitle tranning_card_p"><?php echo $value['name']; ?></span>
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
    .breed_new{
        width: 100%;
        height: auto;
        padding-bottom: 5rem;
    }
    .breed_new .breed_new_top{
        width: 100%;
        height: auto;
        padding-top: 2rem;
        background-color: #A6341B;
        padding-bottom: 5rem;
    }
    .breed_new .breed_new_top img{
        width: 100%;
       
    }
    .breed_new .breed_new_top h1{
        font-size: 28px;
        font-weight: 700;
        color: #FC8817;
        text-transform: capitalize;
        margin-bottom: 1rem;
    }
    .breed_new .breed_new_top p{
        font-size: 15px;
        text-transform: capitalize;
        color: white;
    }
    .breed_new .inner_search {
        width: 100%;
        height: auto;
        padding: 1.5rem;
        border: 1px solid #cdcdcd;
        background-color: white;
        box-shadow: 0px 4px 9px 0px #d3d4d6;
        margin-top: -4rem;
    }
    .breed_new .inner_search .search{
        width: 100%;
        height: auto;
        padding-top: 1rem;
        padding-bottom: 1rem;
        padding-left: 1.5rem;
        border: 1px solid #cdcdcd;
        outline: none;
        
    }
    .breed_new .flex{
        width: 100%;
        height: auto;
        display: flex;
        flex-wrap: wrap;
        margin-top: 5rem;
    }
    .breed_new .flex .card{
        width: 33%;
        height: auto;
        padding: 1rem;
        border: 0px !important;
    }
    .breed_new .flex .card .inner_card{
        width: 100%;
        height: auto;
       box-shadow: 0 3px 4px -1px rgb(0 0 0 / 40%);
        border: 1px solid #cdcdcd;
    }
    .breed_new .flex .card .inner_card img{
        width: 100%;
        height: 200px;
       
    }
    .breed_new .flex .card .inner_card h3{
        color: #f39933;
       margin-left: 1.5rem;
    }
    .breed_new .flex .card .inner_card h6{
        color: #444;
       font-size: 1.4rem;
       margin-left: 1.5rem;
       
    }
    .breed_new .flex .card .inner_card .breed_but button{
        width: 13rem;
        height: auto;
       padding-top: .6rem;
       padding-bottom: .6rem;
       color: white;
       background-color: #FC8817;
       border: 1px solid #FC8817;
       outline: none;
       border-radius: 25px;
       margin-bottom: 2rem;
       margin-top: 1rem;
    }
    .breed_new .flex .card .inner_card .breed_but{
       text-align: center;
    }
    @media only screen and (max-width: 600px) {
        .breed_new .breed_new_top h1{
            font-size:25px ;
            margin-left: .5rem;
        }
        .breed_new .breed_new_top p{
            font-size:13px ;
            margin-left: .5rem;
        }
        .breed_new .flex .card{
            width: 100%;
        }
}
</style>
<div class="breed_new">
    <div class="breed_new_top">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>Get Information About Breed</h1>
                    <p>Dog types are broad categories of dogs based on form, function or style of work, lineage, or appearance. In contrast, modern dog breeds are particular breed standards, sharing a common set of heritable characteristics, determined by the kennel club that recognizes the breed.</p>
                </div>
                <div class="col-md-5">
                    <img src="<?php echo base_url()?>/assest/images/list-dog-banner.png" alt="">
                </div>
            </div>
            
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                <div class="inner_search">
                <input type="text" class="search dropdown-toggle" placeholder="Search Breed" list="da" id="dynamic_select">
                <datalist id="da">
                    <?php foreach ($blogs as $value) { ?>
                        <option value="<?php echo  $value['link'] ?>"></option>
                    <?php } ?>
                </datalist>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="flex">
            <div class="card">
                <div class="inner_card">
                    
                    <img src="<?php echo base_url()?>/assest/images/testimg1.png" alt="">
                    <h3>NAME</h3>
                    <h6>Temproant</h6>
                    <h6>Group</h6>
                    <div class="breed_but">
                    <button>View Breed</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="inner_card">
                    
                    <img src="<?php echo base_url()?>/assest/images/testimg1.png" alt="">
                    <h3>NAME</h3>
                    <h6>Temproant</h6>
                    <h6>Group</h6>
                    <div class="breed_but">
                    <button>View Breed</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="inner_card">
                    
                    <img src="<?php echo base_url()?>/assest/images/testimg1.png" alt="">
                    <h3>NAME</h3>
                    <h6>Temproant</h6>
                    <h6>Group</h6>
                    <div class="breed_but">
                    <button>View Breed</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="inner_card">
                    
                    <img src="<?php echo base_url()?>/assest/images/testimg1.png" alt="">
                    <h3>NAME</h3>
                    <h6>Temproant</h6>
                    <h6>Group</h6>
                    <div class="breed_but">
                    <button>View Breed</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="inner_card">
                   
                    <img src="<?php echo base_url()?>/assest/images/testimg1.png" alt="">
                    <h3>NAME</h3>
                    <h6>Temproant</h6>
                    <h6>Group</h6>
                    <div class="breed_but">
                    <button>View Breed</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="inner_card">
                    
                    <img src="<?php echo base_url()?>/assest/images/testimg1.png" alt="">
                    <h3>NAME</h3>
                    <h6>Temproant</h6>
                    <h6>Group</h6>
                    <div class="breed_but">
                    <button>View Breed</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        // bind change event to select
        $('#dynamic_select').on('change', function() {
            var url = $(this).val(); // get selected value
            if (url) { // require a URL
                window.location = 'breed/' + url; // redirect
            }
            return false;
        });
    });
</script>