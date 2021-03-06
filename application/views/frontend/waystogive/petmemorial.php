<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Mansalva&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
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


<!--div class="sponsor_circle_mobile">
    <div class="container">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="card">
                    <div class="inner_card">
                        <i class="fas fa-dog"></i>
                        <p>1,300 Strays</p>
                    </div>
                    <h5>Help provide a dog with the home they deserve</h5>
                </div>
            </div>
            <div class="mySlides fade">
                <div class="card">
                    <div class="inner_card">
                        <i class="fas fa-dollar-sign">1</i>
                        <p>WEEK</p>
                    </div>
                    <h5>Sponsoring a dog for yourself or someone else for £1 a week helps with essentials for your sponsor dog</h5>
                </div>
            </div>
            <div class="mySlides fade">
                <div class="card">
                    <div class="inner_card">
                        <i class="fas fa-mail-bulk"></i>
                        <p>3X YEARS</p>
                    </div>
                    <h5>Receive updates through the year, so you know exactly how much your money helps</h5>
                </div>
            </div>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
        </div>
    </div>
</div>


<div class="sponsor_circle desktop_view_sponsor">
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
</div-->

<div class="sponser_new">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 spons-ths">
                <h2>Pet Memorials: Remembering a Beloved Pet</h2>
                <p>A gift in memory of a pet honors that lasting bond and is a tangible way to honor the enduring love we have for our pets after they’ve passed.</p>


                <h2>Memorial Giving</h2>
                <p>“Everyone is taught that angels have wings – the lucky ones of us find that they have 4 paws.” Losing a pet can be an extremely difficult process. Over the course of their lives, our pets give us so much love and happiness, so when they pass away, it is understandably very painful .</p>
                <hr class="soons_horii">
                <p>If you have lost a beloved pet, we are honored to assist you in making arrangements for the placement of your pet at our pet memorial page.  </p>
                <p>Please send your submission, with a photo and a caption to  <a class="mal" href="mailto: viren.dogman@gmail.com">viren.dogman@gmail.com</a></p>
            </div>
        </div>
        
            <h2 class="spons_choose_dog">Pet Memorials</h2>
            <div class="spons_filter">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="flex">
                            <div class="left">
                                <input type="text" id="get_name"  name="city" id="browser" placeholder="Enter Pet Name">

                            </div>
                            <div class="right">
                                <button id="searchmemo">Search</button>
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


<div class="create_pet_memo">
    <div class="container">
        <h1>Create an Online Memorial for your Pet, for FREE</h1>
        <a href="mailto:info@dogbazar.com"><button>List A Memorial</button></a>
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
                            Where can I send my pet’s memorial information
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Please send your submission, with a photo and a caption to viren.dogman@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="fooo">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Are there any charges for online pet memorials?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <p>No, it's free of cost in memory of a pet. </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {

        $('#searchmemo').click(function() {
           var  name = document.getElementById('get_name').value;
           console.log(name);

           $.ajax({
                url: "<?php echo base_url(); ?>frontend/waystogive/petmemorial/search",
                method: "POST",
                data: {
                    name: name,
                    
                },
                cache: false,
                success: function(data) {
                    console.log(data);
                }
            })
        });
        
        

 

       

       
        

    });
</script>





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

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>