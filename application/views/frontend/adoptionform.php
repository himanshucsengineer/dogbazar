<!--style>
    input[type="text"],input[type="email"],input[type="number"]{
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        padding-left: 1rem;
        border: 1px solid #cdcdcd;
        outline: none;
        margin-bottom: 1rem;
        
    }
    button{
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        color: white;
        background-color: green;
        outline: none;
    }
</style>

<div class="row justify-content-center">
    <div class="col-md-6">
    
        <form action="<?php echo base_url() ?>frontend/adoptionform/insert_data" method="post">
        
            <input type="text" name="name" placeholder="Enter Your Name">
            <input type="email" name="email" placeholder="Enter Your Email">
            <input type="number" name="mob" placeholder="Enter Your Number">
            <input type="text" name="city" placeholder="Enter Your City">
            <button>Submit Request</button>
        </form>
    </div>
</div-->










<?php
                if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
                    $url = "https://";
                else
                    $url = "http://";
                // Append the host(domain name, ip) to the URL.   
                $url .= $_SERVER['HTTP_HOST'];
                // Append the requested resource location to the URL   
                $url .= $_SERVER['REQUEST_URI'];
                $uniqid= basename($url);
                ?>
<div class="form_top_new" >
    <div class="">
    <div class="container" >
        <h1>Rescue A Dog Now</h1>
        <p>Giving A Second life is a Good Option</p>
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
                            <button>Adopt Now</button>
                        </div>
                    </div>


                    <!--form action="<?php echo base_url() ?>frontend/adoptionform/insert_data" method="post" enctype="multipart/form-data">
                        <?php
                        if ($this->session->flashdata('success')) {
                            echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
                        } else if ($this->session->flashdata('error')) {
                            echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
                        }


                        ?>
                        <input type="hidden" name="uniq_id" value="<?php echo $uniqid?>">
                        <label for="">Your Name*</label>
                        <input type="text" name="name" placeholder="Enter Your Name">
                        <label for="">Your Email*</label>
                        <input type="email" name="email" placeholder="Enter Your Email">
                        <label for="">Your Number*</label>
                        <input type="number" name="mob" placeholder="Enter Your Number">
                       
                        <label for="">Upload ID Proof*(Front & Back photo)</label>
                        <input type="file" multiple="multiple" name="files[]"  maxlength="2" placeholder="Upload Dog Images">
                      
                        <label for="">Parmanent Address</label>
                        <textarea name="city" id="" cols="30" rows="5" placeholder="Your Address"></textarea>
                        <button name='upload'>Adopt Now</button>
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