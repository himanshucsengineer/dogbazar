<link href="<?php echo base_url(); ?>admin/assets/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>admin/assets/css/core.css" rel="stylesheet" type="text/css" />

<script src="<?php echo base_url(); ?>admin/assets/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<style>

    .new-post {
        width: 100%;
        height: auto;
        padding-top: 2rem;
        padding-bottom: 2rem;

    }

    .new-post .box {
        width: 100%;
        height: auto;
        background-color: white;
        box-shadow: 0 3px 3px -2px rgb(0 0 0 / 40%);
        border: 1px solid #cdcdcd;
        padding-top: 2rem;
        padding-bottom: 2rem;
        padding-left: 1rem;
        padding-right: 1rem;
        margin-bottom: 2rem;
    }

    .new-post input[type="text"],
    input[type="file"],
    select,
    textarea {
        width: 100% !important;
        height: auto;
        padding-top: .5rem !important;
        padding-bottom: .5rem !important;
        padding-left: 1rem !important;
        border: 1px solid #cdcdcd !important;
        margin-bottom: 1rem !important;
    }

    .new-post button {
        width: 10rem;
        height: auto;
        padding-top: .6rem;
        padding-bottom: .6rem;
        color: white;
        background-color: rgb(239, 69, 84);
        outline: none;
        border: none;
        transition: .5s;
    }

    .new-post button:hover {
        opacity: .7;

    }

    .new-post p {
        margin-top: -.5rem;
        color: #666;
        font-size: 12px;
        font-weight: 300;
        font-style: italic;
    }
    .ui-datepicker select.ui-datepicker-month, .ui-datepicker select.ui-datepicker-year{
        width: 45% !important;
    }
</style>

<div class="new-post">
    <div class="container">
        <?php
        if ($this->session->flashdata('success')) {
            echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
        } else if ($this->session->flashdata('error')) {
            echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
        }
        ?>
        <h3>Pet Memorials</h3>
        <form method="post" action="<?php echo base_url()?>admin/petmemorial/insert_data" enctype="multipart/form-data">

            <div class="row">
                <div class="col-md-9">
                    <div class="box">
                        <label>Pet Name</label>
                        <input type="text" name="name" placeholder="Enter Heading">

                        <label>About Pet</label>
                        <textarea name="about" id="textareaContent" placeholder="Type Your Blog Here...." required></textarea>
                    </div>
                </div>
                <div class="col-md-3">
                    
                    <div class="box">
                        <label>Born Date</label>
                        <input type="text" placeholder="enter Temperament" name="b_date" id="min" autocomplete="off">
                        <label>Born Place</label>
                        <input type="text" placeholder="enter Temperament" name="b_place">
                        
                    </div>
                    <div class="box">
                        <label>Died Date</label>
                        <input type="text" placeholder="enter Temperament" name="d_date" id="max"  autocomplete="off">
                        <label>Died Place</label>
                        <input type="text" placeholder="enter Temperament" name="d_place">
                        
                    </div>
                    <div class="box">
                        <label>Featured Image</label>
                        <input  multiple="multiple" name="files[]"  maxlength="5" id="fileupload" type="file">
                        <p>set Featured Image</p>

                        <label>Publish Your Post</label>
                        <button name="formSubmit">Publish</button>
                  </div>
                </div>
            </div>



           
        </form>
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

<script src="<?php echo base_url(); ?>admin/assets/ckeditor/ckeditor.js"></script>

<script>
    $(document).ready(function() {
        CKEDITOR.replace('textareaContent');
    });
</script>

<script>
$(document).ready(function () {
    

    $('#min').datepicker({ 
        yearRange: '-100y:c+nn', 
        changeYear : true,
        changeMonth : true,  
        dateFormat : 'dd/mm/yy', });
    $('#max').datepicker({  
        yearRange: '-100y:c+nn',  
        changeYear : true, 
        changeMonth : true,  
        dateFormat : 'dd/mm/yy', });
    

    // Event listener to the two range filtering inputs to redraw on input
   
});
</script>