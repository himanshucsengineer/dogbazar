<?php
$email = $_SESSION["email"];
$name =  $_SESSION["name"];
$add =  $_SESSION["add"];
$number =  $_SESSION["number"];
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.min.css" />


<style>
    .current_location {
        position: absolute;
        border: 1px solid #cdcdcd;
        background-color: ghostwhite;
        color: black;
        padding: 1rem;
        margin-left: -14rem;
    }
</style>
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
	document.getElementById("location").value = response.data[0].city;
});

    }


    


</script>





<div class="form_top_new rescue_top">
    <div class="">
        <div class="container">
            <h1>List A Dog For Rescue</h1>
            <p>Helping the living people is good thing.</p>
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
                    <form action="<?php echo base_url() ?>frontend/user/listmydog/insert" method="post" enctype="multipart/form-data">
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
                                <label for="">Pet Name</label>
                                <input type="text" name="p_name" placeholder="Enter Pet Name">
                            </div>
                            <div class="col-md-6">
                                <label for="">Breed</label>
                                <input type="text" name="breed" placeholder="Enter Breed">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Colour</label>
                                <input type="text" name="color" placeholder="Enter Pet Colour">
                            </div>
                            <div class="col-md-6">
                                <label for="">Weight</label>
                                <input type="text" name="weight" placeholder="Enter Pet Weight">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Gender</label>
                                <select name="gender" id="">
                                    <option value="male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="">Age</label>
                                <input type="text" name="age" placeholder="Enter Pet Age">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Pet Location</label>
                                <input type="text" id="location" name="location" placeholder="Enter Pet Location">
                                <a style="cursor: pointer;" onclick="getLoc()" class="current_location">Current Location</a>
                            </div>
                            <div class="col-md-6">
                                <label for="">Pet Photos</label>
                                <input type="file" multiple="multiple" name="files[]" maxlength="5" id="fileupload" placeholder="Enter Pet Age">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Id Proof</label>
                                <input type="file" multiple="multiple" name="filess[]" maxlength="2" placeholder="Enter Your Name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">About Pet</label>
                                <textarea name="about" id="" cols="30" rows="10" placeholder="Type Somthing about pet"></textarea>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-5">
                                <button>Rescue A Dog</button>
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