<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Mansalva&display=swap" rel="stylesheet">

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


<div class="sponser_new">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 spons-ths">
                <h2>Sponsor a dog today</h2>
                <p>With around 1300 stray and abandoned dogs in our care at any one time, we really need your help. Most dogs find loving new homes within about six weeks but some pooches need a little extra care from us.</p>
                <p>We receive no government funding and are totally dependent on the generosity of people like you. By sponsoring a dog for 1000 Rs. per week you won’t just be helping your sponsor dog but all their friends too!</p>

                <h2 class="how_word">How Sponsorship Works</h2>
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
                </div>
            </div>
        </div>
        <div class="container">
            <h2 class="spons_choose_dog">Choose A dog to sponsor</h2>
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
        <h1>Frequently asked questions</h1>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>