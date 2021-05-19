<div class="form_top_new surrender_top">
    <div class="">
        <div class="container">
            <h1>Surrender A Dog</h1>
            <p>Saving a life is a good option</p>
        </div>
    </div>
</div>

<div class="list_dog_form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">

                <div class="list_dod_form_inner">
                    <?php
                    if ($this->session->flashdata('success')) {
                        echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
                    } else if ($this->session->flashdata('error')) {
                        echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
                    }


                    ?>
                    <form action="<?php echo base_url() ?>frontend/surrender/insert_data" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Name</label>
                                <input type="text" name="name" placeholder="Enter Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Email</label>
                                <input type="email" name="email" placeholder="Enter Your Email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Contact Number</label>
                                <input type="Number" name="mob" placeholder="Enter Your Number" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Address</label>
                                <input type="text" name="add" placeholder="Enter Your Address" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Id Proof</label>
                                <input type="file" multiple="multiple" name="files[]" maxlength="2" id="fileupload" placeholder="Enter Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Your Photo</label>
                                <input type="file" name="images" placeholder="Enter Your Email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Species</label>
                                <input type="text" name="species" placeholder="Enter Species" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Pet Name</label>
                                <input type="text" name="p_name" placeholder="Enter Pet Name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Own Pet/ Rescued Pet</label>
                                <select name="owned" id="" required>
                                    <option value="Owned">Owned</option>
                                    <option value="Rescued">Rescued</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="">Breed</label>
                                <input type="text" name="breed" placeholder="Enter Breed" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Age</label>
                                <input type="text" name="age" placeholder="Enter Pet Age" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Colour</label>
                                <input type="text" name="color" placeholder="Enter Pet Colour" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 radi">
                                <label for="">Gender</label>
                                <input type="radio" name="gender" id="">Male
                                <input type="radio" name="gender" id="">Female
                            </div>
                            <div class="col-md-6">
                                <label for="">Adress You Picked/Forested/Rescued</label>
                                <input type="text" name="picked" placeholder="Enter Address" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Vaccination Status</label>
                                <input type="text" name="vacc" placeholder="Enter Vaccination Status" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Specific Diet/Regime</label>
                                <input type="text" name="diet" placeholder="Enter Specific Diet/Regime" required>
                            </div>
                        </div>
                        <h3 class="note">Note :- If This Pet is Adopted/ Buy from International Dog Bazar Then You Can Not Surrender This Pet To us.</h3>
                        <div class="row justify-content-center">
                            <div class="col-md-5">
                                <button>Surrender Now</button>
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
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpeg|.jpg|.png)$/;
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