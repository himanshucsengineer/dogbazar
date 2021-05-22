<?php
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $url = "https://";
else
    $url = "http://";
// Append the host(domain name, ip) to the URL.   
$url .= $_SERVER['HTTP_HOST'];
// Append the requested resource location to the URL   
$url .= $_SERVER['REQUEST_URI'];
$uniqid = basename($url);
?>
<div class="form_top_new rescue_top">
    <div class="">
        <div class="container">
            <h1>Adopt A Dog Now</h1>
            <p>Giving A Second life is a Good Option</p>
        </div>
    </div>
</div>

<div class="list_dog_form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <?php
                if ($this->session->flashdata('success')) {
                    echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
                } else if ($this->session->flashdata('error')) {
                    echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
                }


                ?>
                <div class="list_dod_form_inner">
                    <form action="<?php echo base_url() ?>frontend/adoptionform/insert_data" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="uniq_id" value="<?php echo $uniqid ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Name</label>
                                <input type="text" name="name" placeholder="Enter Your Name">
                            </div>
                            <div class="col-md-6">
                                <label for="">Email</label>
                                <input type="email" name="email" placeholder="Enter Your Email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Number</label>
                                <input type="number" name="mob" placeholder="Enter Your Number">
                            </div>
                            <div class="col-md-6">
                                <label for="">Address</label>
                                <input type="text" name="add" placeholder="Enter Your Address">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Do you live in own house or rented house ?</label>
                                <select name="house" id="">
                                    <option value="Rented">Rented</option>
                                    <option value="Own">Own House</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="">Do you plan to relocate from your current location within a year?</label>
                                <select name="change_location" id="">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Why do you want to adopt? </label>
                                <select name="why" id="">
                                    <option value="To have a companion for your family ">To have a companion for your family </option>
                                    <option value="Companion for the other animals in the house"> Companion for the other animals in the house</option>
                                    <option value="Self Security and safety purpose">Self Security and safety purpose</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="">Have you owned any pet in the past? </label>
                                <select name="past" id="">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="">What is the minimum time, you can commit to spent with the adopted animal? </label>
                                <input type="text" name="time" placeholder="Timeing (in Hours)">
                            </div>
                            <div class="col-md-6">
                                <label for="">Kindly mention if the animal will be left alone at home on a daily basis ? </label>
                                <select name="alone" id="">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>

                        <p>Kindly state your current occupation and mention the details of the person in case other than you, who will be financially
                            responsible to take care of all the future medical & related expenses of the adopted animal?</p>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Your current occupation</label>
                                <input type="text" name="occu" placeholder="Your current occupation">
                            </div>
                            <div class="col-md-6">
                                <label for="">Responsible Person Name</label>
                                <input type="text" name="res_name" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Responsible Person Contact</label>
                                <input type="number" name="res_mob" placeholder="Contact No.">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-5">
                                <button>Adopt Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

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