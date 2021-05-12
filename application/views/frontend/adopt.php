<style>
    .loader {
        animation: rotate 1s infinite;
        height: 50px;
        width: 50px;
    }

    .loader:before,
    .loader:after {
        border-radius: 50%;
        content: '';
        display: block;
        height: 20px;
        width: 20px;
    }

    .loader:before {
        animation: ball1 1s infinite;
        background-color: #cb2025;
        box-shadow: 30px 0 0 #f8b334;
        margin-bottom: 10px;
    }

    .loader:after {
        animation: ball2 1s infinite;
        background-color: #00a096;
        box-shadow: 30px 0 0 #97bf0d;
    }

    @keyframes rotate {
        0% {
            -webkit-transform: rotate(0deg) scale(0.8);
            -moz-transform: rotate(0deg) scale(0.8);
        }

        50% {
            -webkit-transform: rotate(360deg) scale(1.2);
            -moz-transform: rotate(360deg) scale(1.2);
        }

        100% {
            -webkit-transform: rotate(720deg) scale(0.8);
            -moz-transform: rotate(720deg) scale(0.8);
        }
    }

    @keyframes ball1 {
        0% {
            box-shadow: 30px 0 0 #f8b334;
        }

        50% {
            box-shadow: 0 0 0 #f8b334;
            margin-bottom: 0;
            -webkit-transform: translate(15px, 15px);
            -moz-transform: translate(15px, 15px);
        }

        100% {
            box-shadow: 30px 0 0 #f8b334;
            margin-bottom: 10px;
        }
    }

    @keyframes ball2 {
        0% {
            box-shadow: 30px 0 0 #97bf0d;
        }

        50% {
            box-shadow: 0 0 0 #97bf0d;
            margin-top: -20px;
            -webkit-transform: translate(15px, 15px);
            -moz-transform: translate(15px, 15px);
        }

        100% {
            box-shadow: 30px 0 0 #97bf0d;
            margin-top: 0;
        }
    }

    .adopt_dog {
        width: 100%;
        height: auto;
        padding-bottom: 3rem;

    }

    .adopt_dog img {
        width: 100%;
        height: 400px;
        margin-bottom: 1rem;
    }

    .adopt_dog p {
        color: #444;
        text-align: justify;
    }

    .adopt_dog .flex {
        width: 100%;
        height: auto;
        display: flex;
        padding: 1.5rem;
        border: 1px solid #cdcdcd;
        background-color: white;
        margin-top: -3.5rem;
        margin-bottom: 2rem;
        box-shadow: 0px 4px 9px 0px #d3d4d6;
    }

    .adopt_dog .flex .left {
        width: 75%;
        height: auto;
    }

    .adopt_dog .flex .left input[type="text"] {
        width: 100%;
        height: auto;
        padding-top: .8rem;
        padding-bottom: .8rem;
        padding-left: 1.5rem;
        outline: none;
        border: 1px solid #cdcdcd;
    }

    .adopt_dog .flex .right {
        width: 25%;
        height: auto;
    }

    .adopt_dog .flex .right button {
        width: 100%;
        height: auto;
        padding-top: .8rem;
        padding-bottom: .8rem;
        color: white;
        background-color: #f39933;
        border: 1px solid #f39933;
        outline: none;
    }

    .adopt_dog .adopt_hori_line {
        width: 100%;
        opacity: 1;
        background-color: none;
        border-bottom: 2px solid #f39933;
        margin-top: 2rem;
    }

    .adopt_dog .adopt_card_main {
        width: 100%;
        height: auto;
        padding-top: 2rem;
        padding-bottom: 2rem;
        display: flex;
        flex-wrap: wrap;
    }

    .adopt_dog .adopt_card_main .card {
        width: 33%;
        height: auto;
        padding: 1rem;
        border: none;
        border-radius: 0px;
        background-color: transparent;
    }

    .adopt_dog .adopt_card_main .card a {
        text-decoration: none;
    }

    .adopt_dog .adopt_card_main .card .card_inner {
        border: 1px solid #cdcdcd;
        padding: 2rem 4rem 2rem 4rem;
        box-shadow: 0 3px 4px -1px rgb(0 0 0 / 40%);
    }

    .adopt_dog .adopt_card_main .card .card_inner img {
        width: 100%;
        height: 170px;
    }

    .adopt_dog .adopt_card_main .card .card_inner h3 {
        text-align: center;
        color: #f39933;
    }

    .adopt_dog .adopt_card_main .card .card_inner h6 {
        font-size: 1.4rem;
        color: #444;
    }

    .adopt_dog .adopt_card_main .card .card_inner .adop_butt {
        width: 100%;
        height: auto;
        text-align: center;
        margin-top: 2rem;
    }

    .adopt_dog .adopt_card_main .card .card_inner .adop_butt button {
        width: 15rem;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        color: white;
        text-transform: capitalize;
        background-color: #f39933;
        border: 1px solid #f39933;
        outline: none;
        border-radius: 25px;

    }

    .adopt_dog .first_sec {
        width: 100%;
        height: auto;
        padding-top: 2rem;
        background-color: #A6341B;
        padding-bottom: 3.5rem;
    }

    .adopt_dog .first_sec img {
        width: 100%;
        height: 180px;
    }

    .adopt_dog .first_sec .first_sec_inner h1 {
        color: #f39933;
        font-size: 25px;
        font-weight: 700;
        text-transform: capitalize;
        margin-bottom: 1rem;
    }

    .adopt_dog .first_sec .first_sec_inner button {
        width: 14rem;
        height: auto;
        padding-top: .8rem;
        padding-bottom: .8rem;
        color: white;
        background-color: #f39933;
        outline: none;
        border: 1px solid #f39933;
        border-radius: 25px;
        margin-top: 1rem;
        margin-bottom: 1rem;
    }

    .adopt_dog .first_sec .first_sec_inner p {
        color: white;
        font-size: 15px;
        text-transform: capitalize;
    }

    .load_more_adopt {
        text-align: center;

    }

    .load_more_adopt button {

        width: 20rem;
        height: auto;
        padding-top: 1rem;
        padding-bottom: 1rem;
        color: white;
        border: 1px solid #FC8817;
        background-color: #FC8817;
        outline: none;
        font-weight: 700 !important;
        box-shadow: 0 3px 4px -1px rgb(0 0 0 / 40%);
        border-radius: 2px;
        text-transform: capitalize;
        margin-top: 3rem;
        margin-bottom: 6rem;
    }

    @media screen and (max-width: 600px) {
        .adopt_dog .flex .left {
            width: 65%;
            height: auto;
        }

        .adopt_dog .flex .right {
            width: 25%;
            height: auto;
        }

        .adopt_dog .adopt_card_main .card {
            width: 50%;
            height: auto;
            padding: .5rem;
        }

        .adopt_dog .adopt_card_main .card .card_inner {

            padding: 1rem;
        }

        .adopt_dog .adopt_card_main .card .card_inner img {

            height: 100px;
        }

        .adopt_dog .adopt_card_main .card .card_inner h3 {
            font-size: 1.7rem;
        }

        .adopt_dog .adopt_card_main .card .card_inner h6 {

            font-size: 1.1rem;
        }

        .adopt_dog .first_sec .first_sec_inner h1 {
            font-size: 20px;
            margin-bottom: 1rem;
        }

        .adopt_dog .first_sec .first_sec_inner {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .adopt_dog .first_sec .first_sec_inner p {
            font-size: 13px;
        }

        .adopt_dog .flex .right {
            width: 35%;
        }

        .adopt_dog .adopt_card_main .card .card_inner .adop_butt button {
            font-size: 11px;
            width: 9rem;
        }
    }
</style>
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
                    <img src="<?php echo base_url() ?>/assest/images/list-dog-banner.png" alt="banner">
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
                            <input type="text" id="serch" placeholder="Search By City" value="">
                        </div>
                        <div class="right">
                            <button id="searchnow">Search</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>


        <div class="adopt_card_main  " id="load_data">






        </div>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="text-center" id="load_data_message"></div>
            </div>
        </div>
        <div class="adopt_card_main  " id="load_data2">






        </div>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="text-center" id="load_data_message2"></div>
            </div>
        </div>

        <div class="load_more_adopt">
            <button id="loadmore">load more</button>
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

        
        $('#searchnow').click(function(e) {
            e.preventDefault();
            var srr = document.getElementById('serch').value;
            var x = srr;
            console.log(x)
            srr.sessionStorage.setItem("mytime", srr);
           
            console.log(srr);
            $("#load_data").hide();
            $("#load_data_message").hide();

            var limit = 6;
            var start = 0;


            function lazzy_loader(limit) {

                for (var count = 0; count < limit; count++) {

                    output = '<div class="row justify-content-center"><div class="col-md-3"><div class="loader"></div></div></div>';
                }
                $('#load_data_message').html(output);
            }

            lazzy_loader(limit);

            function load_data(limit, start) {
                $("#searchform").trigger("reset");
                $.ajax({
                    url: "<?php echo base_url(); ?>frontend/adopt/search",
                    method: "POST",
                    data: {
                        limit: limit,
                        start: start,
                        search: srr
                    },
                    cache: false,
                    success: function(data) {


                        if (data == '') {

                            $('#load_data_message2').html('<h3>No More Result Found</h3>');
                        } else {
                           

                            
                            var oldv= e.oldValue;
                            var newv =  e.newValue;
                            console.log(oldv);
                            console.log(newv);
                            if (srr == getsession) {
                                $('#load_data2').append(data);


                                $('#load_data_message2').html("");


                            } else {
                                $('#load_data2').html("");
                                if (data == '') {
                                    $('#load_data_message2').html('<h3>No More Result Found</h3>');
                                } else {
                                    $('#load_data2').append(data);
                                    $('#load_data_message2').html("");
                                }
                            }



                        }

                    }
                });





            }



            load_data(limit, start);

            $("#loadmore").click(function() {

                lazzy_loader(limit);

                start = start + limit;
                setTimeout(function() {
                    load_data(limit, start);
                }, 1000);

            });
        });

    });
</script>