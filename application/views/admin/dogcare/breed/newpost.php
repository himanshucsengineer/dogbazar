<link href="<?php echo base_url(); ?>admin/assets/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>admin/assets/css/core.css" rel="stylesheet" type="text/css" />

<script src="<?php echo base_url(); ?>admin/assets/js/jquery.dataTables.min.js"></script>


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
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        padding-left: 1rem;
        border: 1px solid #cdcdcd;
        margin-bottom: 1rem;
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
        <h3>New Post</h3>
        <form method="post" action="newpost/post" enctype="multipart/form-data">

            <div class="row">
                <div class="col-md-9">
                    <div class="box">
                        <label>Breed Name</label>
                        <input type="text" name="name" placeholder="Enter Heading">

                        <label>About Breed</label>
                        <textarea name="about" id="textareaContent" placeholder="Type Your Blog Here...." required></textarea>
                    </div>
                </div>
                <div class="col-md-3">
                    <!--div class="box">
                        <label>Post Link</label>
                        <input name="link" type="text" placeholder="Enter Post name">
                        <p>Genrate Your Own Post Link</p>
                    </div-->
                    <div class="box">
                        <label>Temperament:</label>
                        <input type="text" placeholder="enter Temperament" name="temp">
                        <p>Breed Temperament</p>
                        <label>Publish Your Post</label>
                        <button name="formSubmit">Publish</button>
                    </div>
                    <div class="box">
                        <label>Featured Image</label>
                        <input  multiple="multiple" name="files[]"  maxlength="5" id="fileupload" type="file">
                        <p>set Featured Image</p>
                    </div>


                    <div class="box">
                        <label>Enter Height</label>
                        <textarea name="height" required></textarea>
                        <label>Enter Weight</label>
                        <textarea name="weight" required></textarea>
                        <label>Enter Life Experiance</label>
                        <textarea name="exp" required></textarea>
                        <label>Groupe</label>
                        <textarea name="grp" required></textarea>
                    </div>
                </div>
            </div>



            <!--div class="box">
                <label>Meta Title</label>
                <input name="mtitle" type="text" placeholder="Enter Meta Title">

                <label>Meta Description</label>

                <textarea name="mdesc" required></textarea>

                <label>Meta Keywords</label>
                <input name="mkey" type="text" placeholder="Enter Meta Keywords">
            </div-->
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