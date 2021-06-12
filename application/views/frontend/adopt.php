<div class="adopt_dog">
    <div class="first_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="first_sec_inner">
                        <h1>List Your Dog for Adoption</h1>
                        <p>At the International Dog Bazar, hundreds of dogs wait in anticipation of loving homes. Many have been rescued from suffering on the streets or as survivors of the Asian dog meat trade. All are deserving of a forever home and the process is a lot easier than you think. Search below to find the perfect companion for your home and family. Thank you for wanting to adopt a rescue; International Dog Bazar will help you every step of the way.</p>
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

                        <div class="left">
                            <input type="text" prevvalue="" id="serch" placeholder="Search By City" value="">
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