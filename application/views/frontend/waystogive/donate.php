<?php
if (!isset($_SESSION["email"])) {

    $donate2 = '<button  data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();" class="make_payment">Confirm Payment</button>';
} else {

    $donate = '<button class="make_payment">Confirm Payment</button>';
}
?>


<div class="donation_new_main ">
    <div class="container">
        <div class="row">
            <div class="col-md-5">

            </div>
            <div class="col-md-7">
                <div class="donation_form_new">
                    <?php
                    if ($this->session->flashdata('success')) {
                        echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
                    } else if ($this->session->flashdata('error')) {
                        echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
                    }


                    ?>
                    <div class="head">
                        <h3>Donation Form</h3>
                    </div>
                    <form action="<?php echo base_url() ?>register/pay" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Name*</label>
                                <input type="text" name="name" placeholder="Enter Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Email*</label>
                                <input type="email" name="email" placeholder="Enter Your Email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Number*</label>
                                <input type="number" name="mob" placeholder="Enter Your Number" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Address*</label>
                                <input type="text" name="add" placeholder="Enter Your Address" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">State*</label>
                                <input type="text" name="state" placeholder="Enter Your State" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">City</label>
                                <input type="text" name="city" placeholder="Enter Your City" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6" id="indian">
                                <label for="">Are You An Indian?*</label>
                                <input type="button" class="donation_button_new" value="Yes">
                                <input type="button" class="donation_button_new" value="No">
                                <input type="hidden" name="citizen" id="indi" value="">
                            </div>
                            <div class="col-md-6 " id="motivate">
                                <label for="">What Motivated You To Donate?</label>
                                <input type="button" class="donation_button_new2" value="Facebook Post">
                                <input type="button" class="donation_button_new2" value="Email">
                                <input type="button" class="donation_button_new2" value="Our Website">
                                <input type="button" class="donation_button_new2" value="Crowd Funding Platform">
                                <input type="button" class="donation_button_new2" value="Other">
                                <input type="hidden" id="moti" name="motive" value="">
                            </div>
                        </div>
                        <div class="row amount">
                            <!--div class="col-md-6" id="amount">
                                <label for="">Prefixed Amounts</label>
                                <input type="button" class="donation_button_new3" value="2000">
                                <input type="button" class="donation_button_new3" value="5000">
                                <input type="button" class="donation_button_new3" value="8000">
                            </div-->
                            <div class="col-md-12">
                                <label for="">Custom Amount</label>
                                <input id="amm" type="number" name="amount" placeholder="Enter Amount" value="" required>
                            </div>
                        </div>
                        <input type="checkbox" name="term" id="" required> I Agree To <a href="<?php echo base_url() ?>term-condition">Term & Condition Policy</a>
                        <?php echo $donate?>

                    </form>
                    <?php echo $donate2?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="why_donate">
    <div class="container">
        <h1>Why Donate</h1>
        <hr class="hori_line">
        <div class="row">
            <div class="col-md-4">
                <div class="flex">
                    <div class="left">
                        <i class="fff fas fa-horse"></i>
                    </div>
                    <div class="right">
                        <p>To liberate animals from unnecessary suffering</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="flex">
                    <div class="left">
                        <i class="fff fas fa-hands-helping"></i>
                    </div>
                    <div class="right">
                        <p>To help fellow animal lovers strengthen the movement</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="flex">
                    <div class="left">
                        <i class="fff fas fa-plus"></i>
                    </div>
                    <div class="right">
                        <p>To create a future where animals are free from human exploitation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="why_donate">
    <div class="container">
        <h1>What We Do?</h1>
        <hr class="hori_line">
        <div class="row">
            <div class="col-md-4">
                <div class="flex">
                    <div class="left">
                        <img src="<?php echo base_url() ?>/assest/images/What1.png" alt=" why 1" />
                    </div>
                    <div class="right">
                        <p>Ending dairy cruelty against cows & buffaloes</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="flex">
                    <div class="left">
                        <img src="<?php echo base_url() ?>/assest/images/What2.png" alt=" why 1" />
                    </div>
                    <div class="right">
                        <p>Addressing unethical & illegal slaughter practices</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="flex">
                    <div class="left">
                        <img src="<?php echo base_url() ?>/assest/images/What3.png" alt=" why 1" />
                    </div>
                    <div class="right">
                        <p>Empowering local communities with right information on rabies</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="flex">
                    <div class="left">
                        <img src="<?php echo base_url() ?>/assest/images/What4.png" alt=" why 1" />
                    </div>
                    <div class="right">
                        <p>Ending human-dog conflict in cities and small towns</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="flex">
                    <div class="left">
                        <img src="<?php echo base_url() ?>/assest/images/What5.png" alt=" why 1" />
                    </div>
                    <div class="right">
                        <p>Building India’s largest animal rights network across 70+ cities</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="flex">
                    <div class="left">
                        <img src="<?php echo base_url() ?>/assest/images/What6.png" alt=" why 1" />
                    </div>
                    <div class="right">
                        <p>Helping people have a compassionate & plant-based lifestyle</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="flex">
                    <div class="left">
                        <img src="<?php echo base_url() ?>/assest/images/What7.png" alt=" why 1" />
                    </div>
                    <div class="right">
                        <p>Empowering activists with skills for mobilizing & awareness building</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="flex">
                    <div class="left">
                        <img src="<?php echo base_url() ?>/assest/images/What8.png" alt=" why 1" />
                    </div>
                    <div class="right">
                        <p>Supporting animal NGOs in India in their efforts to protect animals</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="flex">
                    <div class="left">
                        <img src="<?php echo base_url() ?>/assest/images/What9.png" alt=" why 1" />
                    </div>
                    <div class="right">
                        <p>Facilitating adoption of plant-based alternatives by companies</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="flex">
                    <div class="left">
                        <img src="<?php echo base_url() ?>/assest/images/What10.png" alt=" why 1" />
                    </div>
                    <div class="right">
                        <p>Protecting elephants in captivity & in the wild</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="flex">
                    <div class="left">
                        <img src="<?php echo base_url() ?>/assest/images/What11.png" alt=" why 1" />
                    </div>
                    <div class="right">
                        <p>Legal advocacy to speak on behalf of animals who have suffered</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="flex">
                    <div class="left">
                        <i class="fff fas fa-hand-holding-medical"></i>
                    </div>
                    <div class="right">
                        <p>Providing emergency help for animals in suffering</p>
                    </div>
                </div>
            </div>


        </div>
        <hr>
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
                            Can I make a donation in honor of someone? Or in memory of someone?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p> Yes, we gratefully accept donations of any amount made in honor or in memory of a special human being or a beloved animal.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="fooo">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            What payment methods do you accept?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <p>We accept all major credit and debit cards, net banking transfers, selected cash cards and mobile payments.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="foooo">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Where do my donations go?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <p>We are very careful in spending donations from our generous donors. 90 percent of our funds go towards animal protection programs. </p>
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











<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type='text/javascript'>
    $(document).ready(function() {
        $('#amount input[type="button"]').on('click', function() {
            var thisBtn = $(this);

            thisBtn.addClass('activ').siblings().removeClass('activ');
            var btnText = thisBtn.text();
            var btnValue = thisBtn.val();
            document.getElementById("amm").value = btnValue;
        });

    });
    // baseURL variable
</script>

<script type='text/javascript'>
    $(document).ready(function() {
        $('#indian input[type="button"]').on('click', function() {
            var thisBtn = $(this);

            thisBtn.addClass('active').siblings().removeClass('active');
            var btnText = thisBtn.text();
            var btnValue = thisBtn.val();
            document.getElementById("indi").value = btnValue;
        });

    });
    // baseURL variable
</script>

<script type='text/javascript'>
    $(document).ready(function() {
        $('#motivate input[type="button"]').on('click', function() {
            var thisBtn = $(this);

            thisBtn.addClass('acti').siblings().removeClass('acti');
            var btnText = thisBtn.text();
            var btnValue = thisBtn.val();
            document.getElementById("moti").value = btnValue;
        });

    });
    // baseURL variable
</script> 