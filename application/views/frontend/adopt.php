<style>
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
        width: 25%;
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
        padding: 2rem;
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
                        <a href="<?php echo base_url()?>listmydog"><button>List A Dog</button></a>
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
                <div class="flex " id="aBtnGroup">

                    <div class="left">
                        <input type="text" id="serch" placeholder="Search By City" value="">
                    </div>
                    <div class="right">
                        <button>Search</button>
                    </div>

                </div>
            </div>

        </div>


        <div class="adopt_card_main ">
            <?php foreach ($adopt as $value) { ?>

                <div class="card">
                    <a href="<?php echo base_url() . "adopt/" . $value['link'] ?>">
                        <div class="card_inner">
                            <h3><?php echo $value['breed'] ?></h3>
                            <img src="<?php echo $value['image'] ?>" alt="dog image">
                            <h6>Gender: <?php echo $value['gender'] ?></h6>
                            <h6>Age: <?php echo $value['age'] ?></h6>
                            <h6><?php echo $value['city'] ?></h6>
                            <div class="adop_butt">
                                <a href="<?php echo base_url() . "adopt/" . $value['link'] ?>"><button>Adopt Now</button></a>
                            </div>
                        </div>
                    </a>
                </div>

            <?php } ?>




        </div>

    </div>
</div>



<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type='text/javascript'>
    var baseURL = "<?php echo base_url(); ?>";
    $(document).ready(function() {
        $('#aBtnGroup button').on('click', function() {
            var thisBtn = $(this);
            var btnText = thisBtn.text();
            var srchbtn = document.getElementById("serch").value;
            var btnValue = thisBtn.val();
            console.log(btnText + ' - ' + btnValue);
            console.log(srchbtn);

            $.ajax({
                url: '<?= base_url() ?>frontend/adopt/getCityDepartment',
                method: 'post',
                data: {
                    course: srchbtn
                },
                dataType: 'json',
                success: function(response) {

                    // Remove options 

                    $('#sel_depart').find('option').not(':first').remove();

                    // Add options
                    $.each(response, function(index, data) {
                        $('#sel_depart').append('<option value="' + data['month'] + ' ' + data['amount'] + '">Get Membership in: INR' + data['month'] + ' with validity: ' + data['id'] + '</option>');
                    });
                },
                
                
            });


        });
       
    });
  




  
</script-->