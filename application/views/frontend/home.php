<main>


    <div class="homecrousal ">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    
                    <img src="<?php echo base_url() ?>assest/images/home_slider1.jpg" class="d-block w-100 cimgheight" alt="...">
                    <div class="carousel-caption slider_text d-none d-md-block">
                        <h3>This is Demo Content first content will come here</h3>
                    </div>
                </div>
                <div class="carousel-item">
               
                    <img src="<?php echo base_url() ?>assest/images/home_slider22.jpg" class="d-block w-100 cimgheight" alt="...">
                    <div class="carousel-caption slider_text d-none d-md-block">
                    <h3>This is Demo Content Secont content will come here</h3>
                    </div>
                </div>
                <div class="carousel-item">
               
                    <img src="<?php echo base_url() ?>assest/images/home_slider3.jpg" class="d-block w-100 cimgheight" alt="...">
                    <div class="carousel-caption slider_text d-none d-md-block">
                    <h3>This is Demo Content Third content will come here</h3>
                       
                    </div>
                </div>
                
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="srch_brd">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
            <i class="search_icnoo fas fa-search"></i>
                <input type="text" class="serchbrj" placeholder="search breed" list="da" id="dynamic_set">
                <datalist id="da">
                        <?php foreach ($blogs as $value) { ?>
                            <option value="<?php echo  $value['link'] ?>"></option>
                        <?php } ?>
                    </datalist>
            </div>
        </div>
        </div>
       
    </div>

   




    <div class="dog_care_home">
        <div class="container">
            <div class="top_flex justify-content-center">
                <div class="left">
                    <hr class="left_hori">
                </div>
                <div class="mid">
                    <h3>Dog Care</h3>
                </div>
                <div class="right">
                    <hr class="right_hori">
                </div>
            </div>
            <div class="flex">
                <div class="card">
                    <a href="<?php echo base_url()?>breed">
                        <div class="inner_card">
                            <i class="fas fa-dog"></i>
                            <p>Breeds</p>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="<?php echo base_url()?>nutrition">
                        <div class="inner_card">
                            <i class="fab fa-nutritionix"></i>
                            <p>Nutrition</p>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="<?php echo base_url()?>training">
                        <div class="inner_card">
                            <i class="fas fa-graduation-cap"></i>
                            <p>Training</p>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="<?php echo base_url()?>problems">
                        <div class="inner_card">
                            <i class="fas fa-question"></i>
                            <p>Problems</p>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="<?php echo base_url()?>grooming">
                        <div class="inner_card">
                            <i class="fas fa-cut"></i>
                            <p>Grooming</p>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="<?php echo base_url()?>petcare">
                        <div class="inner_card">
                            <i class="fas fa-hands"></i>
                            <p>Pet Care</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="home_donate">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>Give today</h3>
                    <p>Your gift today will give critical care to abandoned, injured and orphaned animals right now, in their time of need.</p>
                </div>
                <div class="col-md-4">
                    <div class="donate_butttt">
                        <a href="<?php echo base_url()?>donate"><button>Donate</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home_volrtc">
        <div class="container">
        <div class="top_flex justify-content-center">
            <div class="left">
                <hr class="left_hori">
            </div>
            <div class="mid">
                <h3>GET iNVOLVED WITH US</h3>
            </div>
            <div class="right">
                <hr class="right_hori">
            </div>
        </div>
            <div class="flex">
                <div class="card">
                    <div class="inner_card">
                        <h2>Volunteering</h2>
                        <p>Mercy Ships brings hope and healing to developing nations by operating hospital ships staffed by amazing volunteers.</p>
                        <a href="<?php echo base_url()?>volunteer"><button>Get Involved</button></a>
                    </div>
                </div>

                <div class="card">
                    <div class="inner_card">
                        <h2>Pet Memorial</h2>
                        <p>A gift in memory of a pet honors that lasting bond and is a tangible way to honor the enduring love we have for our pets.</p>
                        <a href="<?php echo base_url()?>pet-memorial"><button>Get Involved</button></a>
                    </div>
                </div>
                <div class="card">
                    <div class="inner_card">
                        <h2>Sponsor Animal</h2>
                        <p>If you’re looking for the perfect gift, our friends at Dogsy have a whole range of items you can personalise with pictures.</p>
                        <a href="<?php echo base_url()?>sponsor-an-animal"><button>Get Involved</button></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="home_frn">
        <div class="flex">
            <div class="left">
                <img src="<?php echo base_url() ?>/assest/images/fran_home.jpg" alt="">
            </div>
            <div class="right">
                <h2>Franchise Partner and Become A Franchise</h2>
                <p>Donate here for more pets to save Are you MAD and crazy enough to be known as an owner of Mad about Dogs? Because 50% of the world’s population lives near a coast, we can provide more surgeries for more people with our floating hospitals.</p>
                <a href="<?php echo base_url()?>franchies"><button>Become Franchise</button></a>

            </div>
        </div>
    </div>

    <div class="home_about">
        <div class="container">
        <div class="top_flex justify-content-center">
            <div class="left">
                <hr class="left_hori">
            </div>
            <div class="mid">
                <h3>About Viren Sharma</h3>
            </div>
            <div class="right">
                <hr class="right_hori">
            </div>
        </div>
        <p>Cambridge dictionary defines Entrepreneur as someone who starts their own business, especially when this involves seeing a new opportunity like our very own 'DOG-MAN’ Mr.Viren Sharma from Jaipur.</p>
        <p>Viren Sharma is a dog behaviourist with over 20 years of canine experience. He is a leading pet nutritionist who is successfully running P.A.W.S (Protection of Animal and Welfare Society) for the social upliftment of strays and underprivileged animals. He has been organizing marathons and annual rallies on issues of canine and mass concern over the last 15 years.</p>
        <p>His recent record holding Dog adoption and Dog feeding campaigns made the headlines. Viren says "I do not feed the dogs, I feed my own soul” From the primitive times animal is one of the oldest companion of mankind. Viren mentions that “I love animals and I strongly believe we all have a special place for animals in our heart it just needs to be awakened”....<a href="<?php echo base_url()?>about-viren">Read More</a></p>
        </div>
    </div>
</main>



<script>
    $(function() {
        // bind change event to select
        $('#dynamic_set').on('change', function() {
            var url = $(this).val(); // get selected value
            if (url) { // require a URL
                window.location = 'breed/' + url; // redirect
            }
            return false;
        });
    });
</script>