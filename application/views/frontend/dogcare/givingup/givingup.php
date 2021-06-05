<div class="news_main givingup_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Giving Up Your Dog</h3>
            </div>
            <div class="col-md-6">
                <p><a href="<?php echo base_url() ?>"><span class="acc">Home</a></span> / <a href="<?php echo base_url() ?>givingup">Dog Care / Giving uo Your Dog</a></p>
            </div>
        </div>
    </div>
</div>



<div class="nutrition_new_main">
    
    <div class="nutri_body">
        <div class="container">
            <!--div class="row justify-content-center">
                <div class="col-md-5">
                    <h1> Giving up Your Dog news</h1>
                    <hr class="hooooriii">
                </div>
            </div-->

            <div class="flex" id="load_data">

            </div>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="text-center" id="load_data_message"></div>
                </div>
            </div>
            <div class="load_more">
                <button id="loadmore">Load More</button>
            </div>

           

        </div>
    </div>
</div>



<div class="nutrition_new_main nu_main_video">
    
    <div class="nutri_body">
        <div class="container">
           
            <div class="flex" id="load_video">

            </div>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="text-center" id="load_video_message"></div>
                </div>
            </div>
            <div class="load_more">
                <button id="loadmorevideo">Load More</button>
            </div>

        </div>
    </div>
</div>

<div class="modal fade videooomodd" id="video" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-content videomodal">
        <iframe class="ifraene" id="getvideosrc" src="" ></iframe>

        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $(document).on('click', '.newviesrc', function() {
            var idd = $(this).attr('data-video');
            var head = $(this).attr('data-id');

            document.getElementById('getvideosrc').src = idd;
            document.getElementById('videotitle').innerHTML = head;

        });

    });
    var srcdata = document.getElementById('modalsrcdata').value;
    console.log(srcdata);
</script>

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
                url: "<?php echo base_url(); ?>frontend/dogcare/givingup/givingup/fetch",
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

        var limit = 6;
        var start = 0;
        var action = 'inactive';

        function lazzy_loader(limit) {

            for (var count = 0; count < limit; count++) {

                output = '<div class="row justify-content-center"><div class="col-md-3"><div class="loader"></div></div></div>';
            }
            $('#load_video_message').html(output);
        }

        lazzy_loader(limit);

        function load_data(limit, start) {
            $.ajax({
                url: "<?php echo base_url(); ?>frontend/dogcare/givingup/givingup/fetch_video",
                method: "POST",
                data: {
                    limit: limit,
                    start: start
                },
                cache: false,
                success: function(data) {
                    if (data == '') {
                        $('#load_video_message').html('<h3>No More Result Found</h3>');
                        action = 'active';
                    } else {
                        $('#load_video').append(data);
                        $('#load_video_message').html("");
                        action = 'inactive';
                    }
                }
            })
        }

        if (action == 'inactive') {
            action = 'active';
            load_data(limit, start);
        }

        $('#loadmorevideo').click(function() {
            if ($(window).scrollTop() + $(window).height() > $("#load_video").height() && action == 'inactive') {
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