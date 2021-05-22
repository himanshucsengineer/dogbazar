<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Mansalva&display=swap" rel="stylesheet">


<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

<div class="sponsor_banner">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>Sponsor A Dog</h1>
            </div>
            <div class="col-md-8">

            </div>
        </div>
    </div>
</div>


<div class="sponsor_circle">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="flex ">
                    <div class="card">
                        <div class="inne">
                            <i class="fas fa-dog"></i>
                            <p>1,300 Strays</p>
                        </div>
                        <h5>Help provide a dog with the home they deserve</h5>
                    </div>
                    <div class="card">
                        <div class="inne">
                            <i class="fas fa-dollar-sign"></i>
                            <p>WEEK</p>
                        </div>
                        <h5>Sponsoring a dog for yourself or someone else for £1 a week helps with essentials for your sponsor dog</h5>
                    </div>
                    <div class="card">
                        <div class="inne">
                            <i class="fas fa-mail-bulk"></i>
                            <p>3X YEARS</p>
                        </div>
                        <h5>Receive updates through the year, so you know exactly how much your money helps</h5>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</div>
<div class="sponser_new">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 spons-ths">
                <h2>Sponsor a dog today</h2>
                <p>With around 1300 stray and abandoned dogs in our care at any one time, we really need your help. Most dogs find loving new homes within about six weeks but some pooches need a little extra care from us.</p>
                <p>We receive no government funding and are totally dependent on the generosity of people like you. By sponsoring a dog for 1000 Rs. per week you won’t just be helping your sponsor dog but all their friends too!</p>
                <hr class="soons_horii">
                <p>If you’re looking for the perfect gift, our friends at Dogsy have a whole range of items you can personalise with pictures of your favourite pooch! They’ve also created a range featuring each of our Sponsor Dogs! Dogsy will donate 15% of the net sale price from all items sold from their exclusive ‘Dogsy for Dogs Trust’ online shop, check out the link below:</p>
                <!--h2 class="how_word">How Sponsorship Works</h2>
                <p class="below_how">It couldn't be easier to sponsor a dog in our care, or to gift a sponsorship to a friend or loved one.</p>
                <h3>Step 1 - Pick a dog to sponsor</h3>
                <p>We’ve got sponsor dogs of all shapes, sizes, breeds and ages! You might choose a dog who reminds you of a beloved pet, a dog with a story that tugs at your heartstrings, or a dog you’ll be able to visit.</p>
                <h3>Step 2 - Set up your sponsorship</h3>
                <p>Tell us where to send your doggy updates, whether you’re sponsoring for yourself or as a gift You can also choose how much you’d like to pay, and whether you'd rather pay monthly via direct debit or make a one-off annual payment.</p>
                <h3>Step 3 - Enjoy regular updates from your Sponsor Dog</h3>
                <p>Whichever dog you decide to sponsor, you'll receive updates from them three times a year. We’ll also send you a sponsorship pack, including a special photo certificate of your new pooch pal, a wallet-sized sponsor's card, a window sticker and fridge magnet.</p>
                <div class="sons_butt">
                    <button>Sponsor a dog today</button>
                    <hr>
                </div-->
            </div>
        </div>
        
            <h2 class="spons_choose_dog">Choose A dog to sponsor</h2>
            <div class="spons_filter">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="flex">
                            <div class="left">
                                <input type="text" list="citylist" name="city" id="browser" placeholder="Enter City Name">
                                <datalist id="citylist">
                                    <option value="Mumbai">
                                    <option value="Delhi">
                                    <option value="Bangalore">
                                    <option value="Hyderabad">
                                    <option value="Ahmedabad">

                                    <option value="Chennai">
                                    <option value="Kolkata">
                                    <option value="Surat">
                                    <option value="Pune">
                                    <option value="Jaipur">

                                    <option value="Lucknow">
                                    <option value="Kanpur">
                                    <option value="Nagpur">
                                    <option value="Indore">
                                    <option value="Thane">

                                    <option value="Bhopal">
                                    <option value="Visakhapatnam">
                                    <option value="Pimpri and Chinchwad">
                                    <option value="Patna">
                                    <option value="Vadodara">

                                    <option value="Ghaziabad">
                                    <option value="Ludhiana">
                                    <option value="Agra">
                                    <option value="Nashik">
                                    <option value="Faridabad">

                                    <option value="Meerut">
                                    <option value="Rajkot">
                                    <option value="Kalyan and Dombivali">
                                    <option value="Vasai Virar">
                                    <option value="Varanasi">

                                    <option value="Srinagar">
                                    <option value="Aurangabad">
                                    <option value="Dhanbad">
                                    <option value="Amritsar">
                                    <option value="Navi Mumbai">

                                    <option value="Allahabad">
                                    <option value="Haora">
                                    <option value="Ranchi">
                                    <option value="Gwalior">
                                    <option value="Jabalpur">

                                    <option value="Coimbatore">
                                    <option value="Vijayawada">
                                    <option value="Madurai">
                                    <option value="Raipur">
                                    <option value="Kota">
                                </datalist>
                            </div>
                            <div class="right">
                                <button>Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            if ($this->session->flashdata('success')) {
                echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
            } else if ($this->session->flashdata('error')) {
                echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
            }


            ?>
            <div class="sponsor_dog_card">
                <div class="flex">
                    <?php foreach ($blogs as $value) { ?>
                        <div class="card">
                            <a href="<?php echo base_url() . "sponsorpet/" . $value['link'] ?>">
                                <h3><?php echo $value['name'] ?></h3>
                                <div class="inner_card">

                                    <img src="<?php echo $value['image'] ?>" alt="">
                                    <h5>Gender: <span class="spins"><?php echo $value['gender'] ?></span></h5>
                                    <h5>Age: <span class="spins"><?php echo $value['age'] ?></span></h5>
                                    <div class="sponsor_buttt">
                                        <button>Sponsor Me</button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>






                </div>
            </div>
            <div class="load_more_but">
                <button>Load more dogs</button>
            </div>
        
    </div>
</div>

<div class="sponsor_how">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="flex">
                    <div class="left">
                        <img src="<?php echo base_url() ?>/assest/images/sad-money.svg" alt="">
                    </div>
                    <div class="right">
                        <h1>How your money helps</h1>
                        <p>Your sponsorship contributions are used to help your sponsor dog and all the dogs in our care. The money is used to cover the costs of running the Rehoming Centre, costs such as heating the kennels and washing the dogs' bedding. The money also goes towards treats for the dogs, training and medical care - all with the ultimate goal of finding each dog a loving home.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">

                <div class="flex">
                    <div class="left">
                        <img src="<?php echo base_url() ?>/assest/images/dog.svg" alt="">
                    </div>
                    <div class="right">
                        <h1>Who are our sponsor dogs?</h1>
                        <p>Most dogs in our care find loving new homes within about six weeks but some need a little extra help along the way. Whether this be specialised training and behavioural support, medical care or just a bit more TLC. Dogs Trust will be there for as long as it takes because we never put a healthy dog down. We also receive no government funding so are totally dependent on the generosity of people like you to carry out our work.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<div class="feqs">
    <div class="container">
        
        <div class="row justify-content-center">
            
            <div class="col-md-10">
            <i class="dog_faq dog_faq_icon">?</i>
            <h1>Frequently asked questions</h1>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item" id="foo">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>here content will be come</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="fooo">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <p>here content will be come</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="foooo">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <p>here content will be come</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$('#headingOne').click(function() {
    $('#foo').css({
        'box-shadow': '2px 3px 7px 0 rgb(0 0 0 / 15%)',
        'margin-bottom':'.5rem',
    });
    $('#fooo').css({
        'box-shadow': 'none',
        'margin-bottom':'0rem'
    });
    $('#foooo').css({
        'box-shadow': 'none',
        'margin-bottom':'0rem'
    });
});
$('#headingTwo').click(function() {
    $('#fooo').css({
        'box-shadow': '2px 3px 7px 0 rgb(0 0 0 / 15%)',
        'margin-bottom':'.5rem'
    });
    $('#foo').css({
        'box-shadow': 'none',
        'margin-bottom':'0rem'
    });
    $('#foooo').css({
        'box-shadow': 'none',
        'margin-bottom':'0rem'
    });
});





$('#headingThree').click(function() {
    if (jQuery(this).hasClass('clicked')) {
        $('#foooo').css({
        'box-shadow': 'none',
        'margin-bottom':'0rem'
    });

    }else{
    $('#foooo').css({
        'box-shadow': '2px 3px 7px 0 rgb(0 0 0 / 15%)',
        'margin-bottom':'.5rem'
    });
    $('#foo').css({
        'box-shadow': 'none',
        'margin-bottom':'0rem'
    });
    $('#fooo').css({
        'box-shadow': 'none',
        'margin-bottom':'0rem'
    });
}
});
</script>