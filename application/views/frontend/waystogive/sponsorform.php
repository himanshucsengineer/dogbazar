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

    $badoptbgn2 = '<button  data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Sponsor Now</button>';
} else {

    $badoptbgn = '<button>Sponsor Now</button>';
}
?>


<div class="form_top_new">
    <div class="">
        <div class="container">
            <h1>Sponsor A Dog Now</h1>
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
                    <form action="<?php echo base_url() ?>sponsor/pay" method="post">
                        <input type="hidden" name="uniqid" value="<?php echo @$list->id  ?>">
                        <input type="hidden" name="p_name" value="<?php echo @$list->name ?>">
                        <input type="hidden" name="p_age" value="<?php echo @$list->age ?>">
                        <input type="hidden" name="p_color" value="<?php echo @$list->color ?>">
                        <input type="hidden" name="p_gender" value="<?php echo @$list->gender ?>">
                        <input type="hidden" name="p_image" value="<?php echo @$list->image ?>">
                        <input type="hidden" name="p_breed" value="<?php echo @$list->breed ?>">
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
                                <label for="">Number</label>
                                <input type="number" name="mob" placeholder="Enter Your Number" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Address</label>
                                <input type="text" name="add" placeholder="Enter Your Address" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">State</label>
                                <input type="text" name="state" placeholder="Enter Your State" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">City</label>
                                <input type="text" name="city" placeholder="Enter Your City" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Are You An Indian?</label>
                                <select name="indi" id="" required>
                                    <option value="yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="">What Motivated You To Sponsor?</label>
                                <select name="moti" id="" required>
                                    <option value="facebook post">Facebook Post</option>
                                    <option value="email">Email</option>
                                    <option value="Our Website">Our Website</option>
                                    <option value="Crowed Funding Plateform">Crowed Funding Plateform</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Amount</label>
                                <input type="number" name="amount" placeholder="Enter Amount" required>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-5">
                                <?php echo $badoptbgn ;?>
                            </div>
                        </div>
                    </form>
                    <div class="row justify-content-center">
                            <div class="col-md-5">
                                <?php echo $badoptbgn2 ;?>
                            </div>
                        </div>
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