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

                    <div class="row">
                        <div class="col-md-8">
                            <a href="<?php echo base_url() ?>sponsor-an-animal/sponsor/<?php echo @$list->link ?>"><button>Yes, I Want to Sponsor </button></a>
                        </div>
                    </div>


                   
                </div>
            </div>

            <div class="about">
                <h3>More Information About Dog:</h3>
                <hr>
                <p>
                    <!--?php echo @$list->about ?--> hiii yhi udu uyd y dgfa a sata sdthbthbr sdvsahgdshgd sdcystfdystd dgjsuydguasgdsa dsavdufsaudsa dsaduasfdsaudhs dsgdcsa dashgdcyas dhascdysa dhasdyas dascdas dasgd as dhsads dvsa td svd tsd sdfsa dshdcty dhsdshd hasgdcyas dashgcdysah dgasd yhas dhsacd yas dysad hasd sd sadc ashg dshga das dyasd sahvdetywvdgh sxhd sband ycds vba dhgsdfvytw scdwhgsdvgwhs hds ycds gchfvewydvf vf dhgvf
                </p>
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