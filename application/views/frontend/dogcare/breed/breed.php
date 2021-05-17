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
        <div class="flex" id="load_data">
        </div>
        <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="text-center" id="load_data_message"></div>
                </div>
            </div>
            <div class="load_more">
                <button id="loadmore">Load More</button>
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


<script>
    $(document).ready(function() {

        var limit = 6;
        var start = 0;
        var action = 'inactive';

        function lazzy_loader(limit) {

            for (var count = 0; count < limit; count++) {

                output = '<div class="row justify-content-center"><div class="col-md-3"><div class="loader"></div></div></div>';
            }
            $('#load_data_message').html(output);
        }

        lazzy_loader(limit);

        function load_data(limit, start) {
            $.ajax({
                url: "<?php echo base_url(); ?>frontend/dogcare/breed/breed/fetch",
                method: "POST",
                data: {
                    limit: limit,
                    start: start
                },
                cache: false,
                success: function(data) {
                    if (data == '') {
                        $('#load_data_message').html('<h3>No More Result Found</h3>');
                        action = 'active';
                    } else {
                        $('#load_data').append(data);
                        $('#load_data_message').html("");
                        action = 'inactive';
                    }
                }
            })
        }

        if (action == 'inactive') {
            action = 'active';
            load_data(limit, start);
        }

        $('#loadmore').click(function() {
            if ($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive') {
                lazzy_loader(limit);
                action = 'active';
                start = start + limit;
                setTimeout(function() {
                    load_data(limit, start);
                }, 500);
            }
        });

    });
</script>