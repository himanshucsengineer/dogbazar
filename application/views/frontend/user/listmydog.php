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





<div class="form_top_new" >
    <div class="">
    <div class="container" >
        <h1>List A Dog For Rescue</h1>
        <p>Helping the living people is good thing.</p>
    </div>
    </div>
</div>

<div class="list_dog_form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="list_dod_form_inner">
                <div class="row">
                        <div class="col-md-6">
                            <label for="">Name</label>
                            <input type="text" placeholder="Enter Your Name">
                            <label for="">Name</label>
                            <input type="text" placeholder="Enter Your Name">
                            <label for="">Name</label>
                            <input type="text" placeholder="Enter Your Name">
                            <label for="">Name</label>
                            <input type="text" placeholder="Enter Your Name">
                            <label for="">Name</label>
                            <input type="text" placeholder="Enter Your Name">
                            <label for="">Name</label>
                            <input type="text" placeholder="Enter Your Name">
                            
                        </div>
                        <div class="col-md-6">
                            <label for="">Name</label>
                            <input type="text" placeholder="Enter Your Name">
                            <label for="">Name</label>
                            <input type="text" placeholder="Enter Your Name">
                            <label for="">Name</label>
                            <input type="text" placeholder="Enter Your Name">
                            <label for="">Name</label>
                            <input type="text" placeholder="Enter Your Name">
                            <label for="">Name</label>
                            <input type="text" placeholder="Enter Your Name">
                            <label for="">Name</label>
                            <input type="text" placeholder="Enter Your Name">
                            
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <button>Register Dog</button>
                        </div>
                    </div>



                    <!--form action="<?php echo base_url() ?>frontend/user/listmydog/insert" method="post" enctype="multipart/form-data">
                        <?php
                        if ($this->session->flashdata('success')) {
                            echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
                        } else if ($this->session->flashdata('error')) {
                            echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
                        }


                        ?>
                        <label for="">Your Name*</label>
                        <input type="text" name="name" placeholder="Enter Your Name">
                        <label for="">Your Email*</label>
                        <input type="email" name="email" placeholder="Enter Your Email">
                        <label for="">Your Number*</label>
                        <input type="number" name="number" placeholder="Enter Your Number">
                        <label for="">Dog Name*</label>
                        <input type="text" name="breed" placeholder="Enter Dog Name">
                        <label for="">Dog Age*</label>
                        <input type="text" name="age" placeholder="Enter Dog Age">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Gender* (Dog)</label>
                                <input type="radio" name="gender" id="">Male
                                <input type="radio" name="gender" id="">Female
                            </div>
                            <div class="col-md-6">
                                <label for="">Condition*</label>
                                <select name="condition" id="">
                                    <option value="Good">Good</option>
                                    <option value="Bed">Bed</option>
                                </select>
                            </div>
                        </div>
                        <label for="">Upload Dog Image</label>
                        <input type="file" multiple="multiple" name="files[]" maxlength="5" placeholder="Upload Dog Images">
                        <label for="">Enter Location</label>
                        <input type="text" name="city" placeholder="Enter Location">
                        <label for="">About Dog</label>
                        <textarea name="msg" id="" cols="30" rows="5" placeholder="Tell Us more About Dog..."></textarea>
                        <button name='upload'>Register Dog</button>
                    </form-->
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