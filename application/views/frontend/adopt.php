<script>
    navigator.geolocation.getCurrentPosition(function(position) {
                console.log(position.coords.latitude)
              console.log(position.coords.longitude)
        },
      function(error) {
        console.log("The Locator was denied. :(")
    })

    function getLoc() {
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(showPosition);
        }else{
            console.log("not suport");
        }
    };
    function showPosition(position){
        console.log(position.coords.latitude);
        console.log(position.coords.longitude);
        var urlll ="https://wft-geo-db.p.rapidapi.com/v1/geo/locations/"+position.coords.latitude+"%2B"+position.coords.longitude+"/nearbyCities?limit=1&radius=100" ;
        const settings = {
	"async": true,
	"crossDomain": true,
	"url": urlll,
	"method": "GET",
	"headers": {
		"x-rapidapi-key": "6a95c985admsh2933d255d478d6bp116ad7jsn1bfc00dc6887",
		"x-rapidapi-host": "wft-geo-db.p.rapidapi.com"
	}
};

$.ajax(settings).done(function (response) {
	document.getElementById("serch").value = response.data[0].city;
});

    }


    


</script>

<div class="adopt_dog">
    <div class="first_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="first_sec_inner">
                        <h1>List Your Dog for Adoption</h1>
                        <p>At the International Dog Bazar, Hundreds Of Dogs Wait In Anticipation Of Loving Homes. Many Have Been Rescued From Suffering On The Streets. All Are Deserving Of A Forever Home And The Process Is A Lot Easier Than You Think. Search Below To Find The Perfect Companion For Your Home And Family. Thank You For Wanting To Adopt A Rescue; International Dog Bazar Will Help You Every Step Of The Way.</p>
                        <a href="<?php echo base_url() ?>listmydog"><button>List A Dog</button></a>
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="<?php echo base_url() ?>/assest/images/street.png" class="adop_img" alt="banner">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-9">
                <form action="" id="searchform">
                    <div class="flex " id="aBtnGroup">
                        <div class="ser">
                            <a class="locate" onclick="getLoc()"><i class="fas locccc fa-map-marker-alt"></i> <span class="get_text">Get Location</span></a>
                        </div>
                        <div class="left">
                            <input type="text" prevvalue=""  id="serch" placeholder="Search By City" value="">
                        </div>
                        <div class="right">
                            <button id="searchnow" onclick="delet()">Search</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>

        <?php
        if ($this->session->flashdata('success')) {
            echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
        } else if ($this->session->flashdata('error')) {
            echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
        }


        ?>
        <div id="allpett">
            <div class="adopt_card_main  " id="load_data">

            </div>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="text-center" id="load_data_message"></div>
                </div>
            </div>



            <div class="load_more_adopt">
                <button id="loadmore">load more</button>
            </div>
        </div>

        <div id="serchpet" style="display: none;">
            <div class="adopt_card_main  " id="load_data2">

            </div>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="text-center" id="load_data_message2"></div>
                </div>
            </div>
            <div class="load_more_adopt">
                <button id="loadmo">load more</button>
            </div>

        </div>
    </div>
</div>
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
                url: "<?php echo base_url(); ?>frontend/adopt/fetch",
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
    
    $(document).ready(function() {
       
        //var cc = document.getElementById('serch').value;
          //  document.getElementById('serch').setAttribute("prevvalue",cc);
           // var oldvalue = document.getElementById('serch').getAttribute("prevvalue");
  

        
        $('#searchnow').click(function(e) {
            e.preventDefault();
            var search = document.getElementById('serch').value;
          
            //console.log(oldvalue);
           
            $("#allpett").hide();
            $("#serchpet").show();
           
            var limit = 6;
            var start = 0;
            
            function lazzy_loader(limit) {
                if (search == "alwar") {
                    for (var count = 0; count < limit; count++) {

                        output = '<div class="row justify-content-center"><div class="col-md-3"><div class="loader"></div></div></div>';

                    }
                    $('#load_data_message2').html(output);
                } else {
                    $('#load_data2').html("");
                    for (var count = 0; count < limit; count++) {

                        output = '<div class="row justify-content-center"><div class="col-md-3"><div class="loader"></div></div></div>';

                    }
                    $('#load_data_message2').html(output);
                }



               

            }

            lazzy_loader(limit);

            function load_data(limit, start) {
               

                $.ajax({
                    url: "<?php echo base_url(); ?>frontend/adopt/search",
                    method: "POST",
                    data: {
                        limit: limit,
                        start: start,
                        search: search
                    },
                    cache: false,
                    success: function(data) {

                        if (data == '') {
                            $('#load_data_message2').html('<h3>No More Result Found</h3>');
                            action = 'active';
                        } else {
                            $('#load_data2').append(data);
                            $('#load_data_message2').html("");
                            action = 'inactive';
                        }

                    }
                });





            }



            load_data(limit, start);


            $('#loadmo').click(function() {
                if ($(window).scrollTop() + $(window).height() > $("#load_data2").height() && action == 'inactive') {
                    lazzy_loader(limit, search);
                    action = 'active';
                    start = start + limit;
                    setTimeout(function() {
                        load_data(limit, start);
                    }, 500);
                }
            });


        });

    });
</script>