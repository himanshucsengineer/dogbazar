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



<?php
if (!isset($_SESSION["email"])) {

    $badoptbgn = '<button  data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Adopt Now</button>';
} else {

    $badoptbgn = '<button>Adopt Now</button>';
}
?>


<div class="news_main rescue_top">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Adopt A Dog</h3>
            </div>
            <div class="col-md-6">
                <p><a href="<?php echo base_url() ?>"><span class="acc">Home</a></span> / <a href="<?php echo base_url() ?>adopt">Adopt</a></p>
            </div>
        </div>
    </div>
</div> 


<div class="help_us_volunteer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>Why Are Dogs Given Up?</h1>
                <h4>Adoption Is a good idea</h4>
            </div>
            <div class="col-md-8">
                <p>In a recent study conducted by the National Council on Pet Population Study and Policy (NCPPSP) and published in the July issue of the Journal of Applied Animal Welfare Science (JAAWS), researchers went into 12 selected animal shelters in the United States for one year to find out why. </p>
                <p>The results of the study show that the top seven reasons for relinquishment for both dogs and cats are the same. “These commonalities suggest that there may be similar ways to address relinquishment in dogs and cats,” says Pam Burney, NCPPSP president. “For people who work in a shelter all day, there isn’t always time to look at these issues. We have impressions of what’s happening, but now we have objective data that will help us develop specific programs to address the issues that have been identified.”</p>
                
            </div>
        </div>
    </div>

</div>
<div class="utilize">
    <div class="container">
        <h1>We Could Utilize Your Services!</h1>
        <p>We couldn’t save the lives of these animals without you. We appreciate any time or donations you can offer us.</p>
        <div class="row">
            <div class="col-md-4 ">

                <center><i class="fas fa-calendar-alt"></i></center>
                <h2>When?</h2>
                <p>We need volunteers seven days a week from 11:00-7:00. If you even have an hour, stop by. There’s always a pet in need.</p>
            </div>
            <div class="col-md-4">
                <center><i class="fas fa-users"></i></center>
                <h2>Who?</h2>
                <p>Anyone can volunteer! You just have to love animals and be ready to work.</p>
            </div>
            <div class="col-md-4">
                <center><i class="fas fa-question-circle"></i></center>
                <h2>Why?</h2>
                <p>We rescue thousands of abused and neglected dogs and cats every year. They all need care, help, and your love.</p>
            </div>
        </div>
        <div class="sing_volun">
            <a href="#volunteer"><button>Adopt A pet Now</button></a>
        </div>
    </div>
</div>

<div class="what_will_vonlunteer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>As a volunteer what you can do</h1>
                <div class="flex">
                    <div class="left">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="right">
                        <p>Research and develop educational material for humane education programs</p>
                    </div>
                </div>
                <div class="flex">
                    <div class="left">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="right">
                        <p>Research and write material for the media, social media, blogs and newsletters</p>
                    </div>
                </div>
                <div class="flex">
                    <div class="left">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="right">
                        <p>Graphic and web design our online and textbooks material</p>
                    </div>
                </div>
                <div class="flex">
                    <div class="left">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="right">
                        <p>Build databases of animal welfare organizations and hospitals, Vets, Ambulance Operators, volunteers, etc.</p>
                    </div>
                </div>
                <div class="flex">
                    <div class="left">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="right">
                        <p>Conduct workshops for college students on animal welfare and environment sustenance</p>
                    </div>
                </div>
                <div class="flex">
                    <div class="left">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="right">
                        <p>Attend to our Animal Helpline and help in coordinating rescue work</p>
                    </div>
                </div>
                <div class="flex">
                    <div class="left">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="right">
                        <p>Fund raise by writing grant proposals and crowd funding</p>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <img src="<?php echo base_url() ?>/assest/images/Volunteer_What.jpg" alt="what will vounteer do">
            </div>
        </div>
    </div>
</div>


<div class="list_dog_form volunteer_form_new" id="volunteer">
    <div class="container">
    <h1>Fill Below Form To Apply For Adoption</h1>
        <div class="row justify-content-center">
            <div class="col-md-12">
                
                <div class="list_dod_form_inner">
                    <form action="<?php echo base_url() ?>frontend/adoptionform/insert_data" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="uniq_id" value="<?php echo @$list->id ?>">
                        <input type="hidden" name="p_name" value="<?php echo @$list->p_name ?>">
                        <input type="hidden" name="color" value="<?php echo @$list->color ?>">
                        <input type="hidden" name="age" value="<?php echo @$list->age ?>">
                        <input type="hidden" name="breed" value="<?php echo @$list->breed ?>">
                        <input type="hidden" name="gender" value="<?php echo @$list->gender ?>">
                        <input type="hidden" name="city" value="<?php echo @$list->city ?>">
                        
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
                                <label for="">Please Upload  Id Proof</label>
                                <input type="file" multiple="multiple" name="files[]" maxlength="2" id="fileupload" placeholder="Enter Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Do you live in own house or rented house ?</label>
                                <select name="house" id="">
                                    <option value="">Select An Option</option>
                                    <option value="Rented">Rented</option>
                                    <option value="Own">Own House</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            
                            
                            <div class="col-md-6">
                                <label for="">Do you plan to relocate from your current location within a year?</label>
                                <select name="change_location" id="getvalky">
                                    <option value="">Select An Option</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                <div id="inpurge" style="display: none;">
                                <label for="">What do you plan to do with the adopted animal ?</label>
                                <input type="text" name="change_location_ex" placeholder="Please Describe">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="">Why do you want to adopt? </label>
                                <select name="why"  id="whyadopt">
                                    <option value="">Select An Option</option>
                                    <option value="To have a companion for your family ">To have a companion for your family </option>
                                    <option value="Companion for the other animals in the house"> Companion for the other animals in the house</option>
                                    <option value="Self Security and safety purpose">Self Security and safety purpose</option>
                                    <option value="other">Other</option>
                                </select>
                                <div id="whyadoptexplo" style="display: none;">
                                <label for="">Please Explation</label>
                                <input type="text" name="why_ex" placeholder="Please Explation">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           
                            <div class="col-md-6">
                                <label for="">Have you owned any pet in the past? </label>
                                <select name="past" id="">
                                    <option value="">Select An Option</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="">What is the minimum time, you can commit to spent with the adopted animal? </label>
                                <input type="text" name="time" placeholder="Timeing (in Hours)">
                            </div>
                        </div>

                        <div class="row">
                            
                            <div class="col-md-6">
                                <label for="">Kindly mention if the animal will be left alone at home on a daily basis ? </label>
                                <select name="alone" id="alone">
                                    <option value="">Select An Option</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                <div id="aloneex" style="display: none;">
                                    <label for="">How Many Hours</label>
                                    <input type="text" name="alone_ex" placeholder="Time In hours">
                                </div>
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
                                <?php echo $badoptbgn?>
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
<script>
    $("#getvalky").change(function () {
    var numInputs = $(this).val();
    console.log(numInputs);
    if(numInputs=="yes"){
        document.getElementById('inpurge').style.display = "block"
    }else{
        document.getElementById('inpurge').style.display = "none"
    }
});
</script>
<script>
    $("#alone").change(function () {
    var numInputs = $(this).val();
    console.log(numInputs);
    if(numInputs=="yes"){
        document.getElementById('aloneex').style.display = "block"
    }else{
        document.getElementById('aloneex').style.display = "none"
    }
});
</script>
<script>
    $("#whyadopt").change(function () {
    var numInputs = $(this).val();
    console.log(numInputs);
    if(numInputs=="other"){
        document.getElementById('whyadoptexplo').style.display = "block"
    }else{
        document.getElementById('whyadoptexplo').style.display = "none"
    }
});
</script>
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