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
    .adopt_pet_main_new {
        width: 100%;
        height: auto;
        padding-top: 5rem;
        padding-bottom: 5rem;
        background-color: white;
    }

    .adopt_pet_main_new .slideee img {
        width: 100%;
        height: 200px;
    }

    .adopt_pet_main_new .slideee .slide_head {
        width: 100%;
        height: auto;
        padding-top: 2rem;
        padding-bottom: 2rem;
        background-color: #A6341B;
        padding-left: 2rem;
        margin-top: 8rem;
        border-bottom: 3px solid #f39933;
    }

    .adopt_pet_main_new .slideee .slide_body {
        width: 100%;
        height: auto;
        padding-top: 2rem;
        padding-bottom: 2rem;
        background-color: #f3f3f3;
        padding-left: 2rem;
        padding-right: 2rem;

    }

    .adopt_pet_main_new .slideee .slide_head h1 {

        font-size: 30px;
        font-weight: 700;
        text-transform: uppercase;
        color: #f39933;
    }

    .adopt_pet_main_new .slideee .MultiCarousel .leftLst.over,
    .MultiCarousel .rightLst.over {
        background-color: #A6341B;
    }

    .adopt_pet_main_new .slideee .btn-primary {
        font-size: 20px;
        color: white;
        background-color: #f39933;
        border: #f39933;
        padding: 5px 13px;
    }

    .adopt_pet_main_new img {
        width: 100%;
        height: 350px;
    }

    .adopt_pet_main_new .right {
        width: 100%;
        height: auto;
        padding-left: 2rem;
        border: 1px solid #cdcdcd;

        background-color: #f8f8f8;
        padding-top: 2rem;
        padding-bottom: 2rem;
    }

    .adopt_pet_main_new .right .adopp_butt {
        width: 100%;
        height: auto;
        text-align: center;
        margin-top: 2rem;
    }

    .adopt_pet_main_new .right .adopp_butt button {
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

    .adopt_pet_main_new .right h3 {
        color: #f39933;
        font-size: 30px;
        text-transform: capitalize;
    }

    .adopt_pet_main_new .right h5 {
        margin-bottom: 1rem;
        font-size: 18px;
        text-transform: capitalize;
    }

    .adopt_pet_main_new .right span {
        margin-left: 2rem;
    }

    .adopt_pet_main_new .about {
        width: 100%;
        height: auto;
        padding-top: 5rem;
    }

    .adopt_pet_main_new .bottom_images {
        width: 100%;
        height: auto;
        margin-top: 2rem;
        display: flex;
    }

    .adopt_pet_main_new .bottom_images .cardimage {
        width: 20%;
        height: auto;
        padding: 1rem;
    }

    .adopt_pet_main_new .bottom_images .cardimage img {
        width: 100%;
        height: 70px;
    }

    .MultiCarousel {
        float: left;
        overflow: hidden;
        padding: 15px;
        width: 100%;
        position: relative;
    }

    .MultiCarousel .MultiCarousel-inner {
        transition: 1s ease all;
        float: left;
    }

    .MultiCarousel .MultiCarousel-inner .item {
        float: left;
    }

    .MultiCarousel .MultiCarousel-inner .item>div {
        text-align: center;
        border: 1px solid #A6341B;
        margin: 8px;
    }

    .MultiCarousel .leftLst,
    .MultiCarousel .rightLst {
        position: absolute;
        border-radius: 50%;
        top: calc(50% - 20px);
    }

    .MultiCarousel .leftLst {
        left: 0;
    }

    .MultiCarousel .rightLst {
        right: 0;
    }

    .MultiCarousel .leftLst.over,
    .MultiCarousel .rightLst.over {
        pointer-events: none;
        background: #ccc;
    }
</style>
<div class="adopt_pet_main_new"> 
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo @$list->image ?>" alt="adopt pet">

                <div class="bottom_images">
                    <div class="cardimage">

                        <img src="<?php echo @$list->image ?>" alt="adopt pet">
                    </div>
                    <?php for ($i = 1; $i < 5; $i++) {
                        $img = "image$i";
                        if (@$list->$img != NULL) {  ?>
                            <div class="cardimage">

                                <img src="<?php echo @$list->$img ?>" alt="adopt pet">
                            </div>

                    <?php }
                    } ?>

                </div>
            </div>
            <div class="col-md-6">
                <div class="right">
                    <h3><?php echo @$list->breed ?></h3>
                    <h5>Age: <span><?php echo @$list->age ?></span></h5>
                    <h5>Colour: <span><?php echo @$list->color ?></span></h5>
                   
                    <h5>Gender:<span><?php echo @$list->gender ?></span></h5>
                
                    <div class="adopp_butt">
                        <a href="<?php echo base_url() ?>sponsor-an-animal/sponsor/<?php echo @$list->link ?>"><button>Sponsor Me</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="about">
            <h3>More Information About Dog:</h3>
            <hr>
            <p><?php echo @$list->about ?></p>
        </div>
    </div>
    <div class="container slideee">
        <div class="slide_head">
            <h1>Sponsor a dog</h1>
        </div>
        <div class="slide_body">
            <div class="row">
                <div class="MultiCarousel" data-items="1,3,4,5,6" data-slide="1" id="MultiCarousel" data-interval="1000">
                    <div class="MultiCarousel-inner">
                        <?php foreach ($releted as $rel) : ?>
                            <?php if ($rel->id != $list->id); ?>
                            <a href="<?php echo base_url() . "adopt/" . @$rel->link ?>">
                                <div class="item">
                                    <div class="pad15">
                                        <img src="<?php echo @$rel->image ?>" alt="adopt pet">
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>

                    </div>
                    <button class="btn btn-primary leftLst"><</button>
                            <button class="btn btn-primary rightLst">></button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        var itemsMainDiv = ('.MultiCarousel');
        var itemsDiv = ('.MultiCarousel-inner');
        var itemWidth = "";

        $('.leftLst, .rightLst').click(function() {
            var condition = $(this).hasClass("leftLst");
            if (condition)
                click(0, this);
            else
                click(1, this)
        });

        ResCarouselSize();




        $(window).resize(function() {
            ResCarouselSize();
        });

        //this function define the size of the items
        function ResCarouselSize() {
            var incno = 0;
            var dataItems = ("data-items");
            var itemClass = ('.item');
            var id = 0;
            var btnParentSb = '';
            var itemsSplit = '';
            var sampwidth = $(itemsMainDiv).width();
            var bodyWidth = $('body').width();
            $(itemsDiv).each(function() {
                id = id + 1;
                var itemNumbers = $(this).find(itemClass).length;
                btnParentSb = $(this).parent().attr(dataItems);
                itemsSplit = btnParentSb.split(',');
                $(this).parent().attr("id", "MultiCarousel" + id);


                if (bodyWidth >= 1200) {
                    incno = itemsSplit[3];
                    itemWidth = sampwidth / incno;
                } else if (bodyWidth >= 992) {
                    incno = itemsSplit[2];
                    itemWidth = sampwidth / incno;
                } else if (bodyWidth >= 768) {
                    incno = itemsSplit[1];
                    itemWidth = sampwidth / incno;
                } else {
                    incno = itemsSplit[0];
                    itemWidth = sampwidth / incno;
                }
                $(this).css({
                    'transform': 'translateX(0px)',
                    'width': itemWidth * itemNumbers
                });
                $(this).find(itemClass).each(function() {
                    $(this).outerWidth(itemWidth);
                });

                $(".leftLst").addClass("over");
                $(".rightLst").removeClass("over");

            });
        }


        //this function used to move the items
        function ResCarousel(e, el, s) {
            var leftBtn = ('.leftLst');
            var rightBtn = ('.rightLst');
            var translateXval = '';
            var divStyle = $(el + ' ' + itemsDiv).css('transform');
            var values = divStyle.match(/-?[\d\.]+/g);
            var xds = Math.abs(values[4]);
            if (e == 0) {
                translateXval = parseInt(xds) - parseInt(itemWidth * s);
                $(el + ' ' + rightBtn).removeClass("over");

                if (translateXval <= itemWidth / 2) {
                    translateXval = 0;
                    $(el + ' ' + leftBtn).addClass("over");
                }
            } else if (e == 1) {
                var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
                translateXval = parseInt(xds) + parseInt(itemWidth * s);
                $(el + ' ' + leftBtn).removeClass("over");

                if (translateXval >= itemsCondition - itemWidth / 2) {
                    translateXval = itemsCondition;
                    $(el + ' ' + rightBtn).addClass("over");
                }
            }
            $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
        }

        //It is used to get some elements from btn
        function click(ell, ee) {
            var Parent = "#" + $(ee).parent().attr("id");
            var slide = $(Parent).attr("data-slide");
            ResCarousel(ell, Parent, slide);
        }

    });
</script>