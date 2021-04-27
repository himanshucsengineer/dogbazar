<?php
$email = $_SESSION["email"];
$name =  $_SESSION["name"];
$add =  $_SESSION["add"];
$number =  $_SESSION["number"];
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.min.css" />

<script src="https://maps.googleapis.com/maps/api/js?key=*********&libraries=places">
</script>


<script>
    (function() {
        navigator.geolocation.getCurrentPosition(function(position) {
                console.log(position.coords.latitude)
                console.log(position.coords.longitude)
            },
            function(error) {
                console.log("The Locator was denied. :(")
            })
    })();
</script>
<main>


    <!-- Title Strip  -->
    <div class="title_strip_brown">
        <div class="container">
            <div class="row py-4">
                <div class="col">
                    <h1 class="title_strip_brown_h1">List Your Dog</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="">
            <div class="container">
                <div class="row">
                    <div class="col-2 title_strip_brown_ul"></div>
                </div>
            </div>
        </div> -->
    <!-- End Title Strip -->

    <div class="spacer_m"></div>

    <!-- Main Content -->
    <div class="body_content">
        <div class="container px-3">
            <div class="row justify-content-start">





                <!-- Content Left -->
                <div class="col-md-10 pxy-2">
                    <h2>Yes! I want to save the life of an animal in need.</h2>
                    <p>This list contains plants that have been reported as having systemic effects on animals
                        and/or intense effects on the gastrointestinal tract. </p>



                    <div class="row justify-content-between client_dashboard">



                        <div class="col-md-3 ">
                            <div class="spacer_s"></div>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>profile">Profile</a></li>
                                <li><a href="<?php echo base_url(); ?>listmydog">List A Dog</a></li>
                                <li><a href="<?php echo base_url(); ?>mydogs">My Dogs</a></li>

                            </ul>
                            <div class="spacer_s"></div>
                        </div>




                        <div class="col-md-9 ">

                            <h3>List My Dog</h3>
                            <hr>
                            <form action="<?php echo base_url() ?>frontend/user/listmydog/insert" method="post" enctype="multipart/form-data">
                                <?php
                                if ($this->session->flashdata('success')) {
                                    echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
                                } else if ($this->session->flashdata('error')) {
                                    echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
                                }


                                ?>
                                <div class="row px-4 mb-1">
                                    <div class="col-md-10">
                                        <div class="mb-3">
                                            <label for="" class="donate_input_lable pb-3">Your Name</label>
                                            <input type="text" class="form-control base_input" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name" value="<?php echo $name ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row px-4 mb-1">
                                    <div class="col-md-10">
                                        <div class="mb-3">
                                            <label for="" class="donate_input_lable pb-3">Your Email</label>
                                            <input type="email" class="form-control base_input" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email" value="<?php echo $email ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row px-4 mb-1">
                                    <div class="col-md-10">
                                        <div class="mb-3">
                                            <label for="" class="donate_input_lable pb-3">Your Number</label>
                                            <input type="number" class="form-control base_input" name="number" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Number">
                                        </div>
                                    </div>
                                </div>

                                <div class="row px-4 mb-1">
                                    <div class="col-md-10">
                                        <div class="mb-3">
                                            <label for="" class="donate_input_lable pb-3">Dog Age</label>
                                            <input type="text" class="form-control base_input" name="age" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Dog Age(approx.)">
                                        </div>
                                    </div>
                                </div>

                                <div class="row px-4  mb-1">
                                    <div class="col-md-10">
                                        <div class="mb-3">
                                            <label for="" class="donate_input_lable pb-3">Select Breed</label>
                                            <select class="form-select base_input" name="breed" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="zermon">One</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="row px-4 mb-1">
                                    <div class="col-md-10">
                                        <div class="mb-3">
                                            <label for="" class="donate_input_lable pb-3">Upload Dog Images</label>
                                            <input type="file" class="form-control base_input" name="images" id="fileupload" aria-describedby="emailHelp" placeholder="Upload Dog Photo">
                                        </div>
                                    </div>
                                </div>



                                <!-- // FIXME Gender box -->
                                <div class="row px-4  mb-1">
                                    <div class="col-md-8">
                                        <div class="mb-3">

                                            <div class="row">
                                                <div class="col-4">
                                                    <label for="" class="donate_input_lable pb-3">Gender</label>
                                                </div>
                                                <div class="col-4">
                                                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        <span class="donate_input_lable">Male</span>
                                                    </label>
                                                </div>
                                                <div class="col-4">
                                                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        <span class="donate_input_lable">Female</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row px-4  mb-1">
                                    <div class="col-md-10">
                                        <div class="mb-3">
                                            <label for="" class="donate_input_lable pb-3">Condition</label>
                                            <select class="form-select base_input" name="condition" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">Healthy</option>
                                                <option value="1">Tired</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="row px-4 mb-3  mb-1">
                                    <div class="col-md-10">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="donate_input_lable pb-3">Description
                                                About Dog</label>
                                            <div class="form-floating base_input">
                                                <textarea class="form-control" placeholder="Leave a comment here" name="msg" id="floatingTextarea2" style="height: 100px"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row px-4 mb-1">
                                    <div class="col-md-10">
                                        <div class="mb-3">
                                            <label for="" class="donate_input_lable pb-3">Enter Location</label>
                                            <input type="text" class="form-control base_input" name="city" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Dog's Location">
                                        </div>
                                    </div>
                                </div>

                                <div class="row px-4">
                                    <div class="col">
                                        <button class="btn brown_btn px-4">Submit</button>
                                    </div>
                                </div>


                            </form>




                        </div>
                    </div>

                    <div class="spacer_s"></div>

                </div>
                <!-- End Content Left -->




            </div>
        </div>

    </div>

    <!-- End Main -->

    <div class="spacer_m"></div>
    <div class="spacer_m"></div>


</main>



<script language="javascript" type="text/javascript">
    $(function() {
        $("#fileupload").change(function() {
            $("#dvPreview").html("");
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.png)$/;
            if (regex.test($(this).val().toLowerCase())) {
                if ($.browser.msie && parseFloat(jQuery.browser.version) <= 9.0) {
                    $("#dvPreview").show();
                    $("#dvPreview")[0].filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = $(this).val();
                } else {
                    if (typeof(FileReader) != "undefined") {
                        $("#dvPreview").show();
                        $("#dvPreview").append("<img class='thunbnail_image images_preview'/>");
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $("#dvPreview img").attr("src", e.target.result);
                        }
                        reader.readAsDataURL($(this)[0].files[0]);
                    } else {
                        alert("This browser does not support FileReader.");
                    }
                }
            } else {
                alert("Please upload a valid file.");
            }
        });
    });
</script>