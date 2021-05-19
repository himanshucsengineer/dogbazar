<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Mansalva&display=swap" rel="stylesheet">

<div class="sponsor_banner pet_memo">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>Pet Memorials</h1>
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
                <h2>Pet Memorials: Remembering a Beloved Pet</h2>
                <p>A gift in memory of a pet honors that lasting bond and is a tangible way to honor the enduring love we have for our pets after they’ve passed.</p>


                <h2>Memorial Giving</h2>
                <p>When you make a memorial gift, your support not only pays tribute to a beloved pet or person, it supports the work of Best Friends and helps homeless pets get the love and care they need to thrive as they wait for loving families of their own.</p>
                <h2 class="how_word">How It's Works</h2>
                <p class="below_how">It couldn't be easier to sponsor a dog in our care, or to gift a sponsorship to a friend or loved one.</p>
                <h3>Step 1 - Pick a dog to sponsor</h3>
                <p>We’ve got sponsor dogs of all shapes, sizes, breeds and ages! You might choose a dog who reminds you of a beloved pet, a dog with a story that tugs at your heartstrings, or a dog you’ll be able to visit.</p>
                <h3>Step 2 - Set up your sponsorship</h3>
                <p>Tell us where to send your doggy updates, whether you’re sponsoring for yourself or as a gift You can also choose how much you’d like to pay, and whether you'd rather pay monthly via direct debit or make a one-off annual payment.</p>
                <h3>Step 3 - Enjoy regular updates from your Sponsor Dog</h3>
                <p>Whichever dog you decide to sponsor, you'll receive updates from them three times a year. We’ll also send you a sponsorship pack, including a special photo certificate of your new pooch pal, a wallet-sized sponsor's card, a window sticker and fridge magnet.</p>
                <div class="sons_butt">
                    <button>Pet Memorials</button>
                    <hr>
                </div>
            </div>
        </div>
        <div class="container">
            <h2 class="spons_choose_dog">Pet Memorials</h2>
            <?php
            if ($this->session->flashdata('success')) {
                echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
            } else if ($this->session->flashdata('error')) {
                echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
            }


            ?>
            <div class="sponsor_dog_card">
                <div class="flex" id="load_data">

                </div>
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <div class="text-center" id="load_data_message"></div>
                    </div>
                </div>
            </div>
            <div class="load_more_but">
                <button id="loadmore">Load more Memorials</button>
            </div>
        </div>
    </div>
</div>
<hr>
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


<script>
    $(document).ready(function() {

        var limit = 8;
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
                url: "<?php echo base_url(); ?>frontend/waystogive/petmemorial/fetch",
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