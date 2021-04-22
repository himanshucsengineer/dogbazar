<style>
    .login{
        width: 100%;
        height: auto;
        border-radius: 0px !important;
    }
    .login .modal-header{
        width:100%;
        height: auto;
        background-color: #f7f7f7 !important;
        border-bottom:1px solid #cdcdcd;
    }
    .login .modal-header h3{
        color:#4a4a4a !important;
        font: 22px !important;
    }
    .login .modal-body {
        width: 100%;
        height: auto;
        background-color: white;
        padding-top: 2rem;
        padding-bottom: 2rem;
        border-bottom: 1px solid #cdcdcd;
    }
    .login .modal-body input[type="text"], input[type="email"], input[type="password"]{
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        padding-left: 1rem;
        border: 1px solid  #cdcdcd;
        outline: none;
        margin-bottom: 1rem;
    }
    .login .modal-body input[type="submit"]{
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        color: white;
        border: none;
        outline: none;
        background-color: #d44444;
        transition: .5s;
        font-size: 18px;
        text-transform: uppercase;
    }
    .login .modal-body input[type="submit"]:hover{
        opacity: .7;
    }
    .login .modal-body .chck{
        width: 100%;
        height: auto;
        margin-bottom: 1rem;
    }
    .login .modal-footer{
        width: 100%;
        height: auto;
        padding: 1rem !important;
    }
    .login .modal-footer a{
        color: #d44444;
        text-decoration: none;
    }
    .login .modal-footer .login-footer{
        width: 100%;
        height: auto;
        display: flex;
     
    }
    .login .modal-footer .register-footer{
        width: 100%;
        height: auto;
        text-align: center;
    }
    .login .modal-footer .login-footer .left{
        width: 50%;
        height: auto;
    }
    .login .modal-footer .login-footer .right{
        width: 100%;
        height: auto;
        text-align: right;
    }
    
</style>
<footer class="footer">

<div class="container">
    <div class="row">
        <div class="col-md-3 py-4">
            <div class="footer_logo mb-4">
                <h1>Logo</h1>
            </div>

            <p><span>Email :</span> xyzadmin@gmail.com </p>
            <p><span>Phone :</span> 895623145</p>
            <p>Adarsh Nagar Behind Raja Chowk, Jaipur, Rajasthan</p>
        </div>
        <div class="col-md-3">

            <div class="mb-3">
                <h3 class="footer_headings">Where We are</h3>
            </div>

            <div class="">
                <iframe src="" frameborder="0"></iframe>
            </div>


        </div>
        <div class="col-md-3">
            <div class="mb-4">
                <h3 class="footer_headings">Pages</h3>
            </div>
            <ul class="footer_pages">
                <li><a href="">Home</a></li>
                <li><a href="">Franchies</a></li>
                <li><a href="">Traning</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">About</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <div class="mb-4">
                <h3 class="footer_headings">Lets Contact</h3>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control base_input" name="donar_email" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Anshu">
            </div>
            <div>
                <button class="footerbtn">Submit</button>
            </div>
        </div>
    </div>
</div>

</footer>
<!-- <div class="footerTag_Line text-center py-1">
<h3>Your Tag Line</h3>
</div> -->
<div class="footerTag_copyright">
<div class="container text-center">
    <p>@Copyright Dog Bazar</p>
</div>
</div>
<!-- Experiment -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade " id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog login">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Modal title</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
                    if($this->session->flashdata('error')){
                        echo "<script>$('#loginModal').modal('show');</script>";
                        echo '<p class="text-danger">'.$this->session->flashdata('error').'</p>';
                    }
                ?>
                <?php
                    if($this->session->flashdata('success')){
                        echo "<script>$('#loginModal').modal('hide');</script>";
                        echo '<p class="text-success">'.$this->session->flashdata('success').'</p>';
                    }
                ?>
                <?php 
                    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
                        $url = "https://";   
                    else  
                        $url = "http://";   
                        // Append the host(domain name, ip) to the URL.   
                        $url.= $_SERVER['HTTP_HOST'];   
                        // Append the requested resource location to the URL   
                        $url.= $_SERVER['REQUEST_URI'];    
                        $_SESSION['url'] =$url;
                ?>
                <div class="box">
                    <div class="form loginBox">
                        <form method="post" action="<?php echo base_url() ; ?>frontend/login/login">
				            <input id="email"  type="text" placeholder="Email" name="email" required>
				            <!-- id-"password"--><input id="input_login"  type="password" placeholder="Password" name="password" required><span class="hide" type="button" onclick="hideeLogin()"><i class="fa fa-eye" aria-hidden="true"></i></span>
				            <input  type="submit"  value="Login">
                        </form>   
                    </div>
                </div>
                <div class="box">
                    <div class="content registerBox" style="display:none;">
                        <div class="form">
                            <form method="post" action="<?php echo base_url() ; ?>frontend/login/signup">
                                <input id="name"  type="text" placeholder="Name" name="name" required>
                                <input id="email"  type="text" placeholder="Email" name="email" required>
                                <input id="input"  type="password" placeholder="Password" name="password" required><span class="hide" type="button" onclick="hidee()"><i class="fa fa-eye" aria-hidden="true"></i></span>
                                <!--input id="password_confirmation" class="form-control chng" type="password" placeholder="Repeat Password" name="cpassword" required-->
                                <div class="chck" >
                                    <input type="checkbox" value="none" id="checkbox_1" name="contact1"/>
                                    <label for="checkbox_1" class="checkbox"><span class="chk">I agree to the Term and Conditon</span></label>
                                </div>  
                                <input  type="submit" value="Create account" name="commit" >
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="forgot login-footer">
                    <span class="left"><a href="#">Forgot password?</a> </span>
                    <span class="right">Looking to
                    <a href="javascript: showRegisterForm();">create an account</a>
                    ?</span>
                </div>
                <div class="forgot register-footer" style="display:none">
                    <span>Already have an account?</span>
                    <a href="javascript: showLoginForm();">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
/*
 *
 * login-register modal
 * Autor: Creative Tim
 * Web-autor: creative.tim
 * Web script: https://creative-tim.com
 * 
 */
function showRegisterForm(){
    $('.loginBox').fadeOut('fast',function(){
        $('.registerBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast',function(){
            $('.register-footer').fadeIn('fast');
        });
        $('.modal-title').html('Register with International Dog Bazar');
    }); 
    $('.error').removeClass('alert alert-danger').html('');
       
}
function showLoginForm(){
    $('#loginModal .registerBox').fadeOut('fast',function(){
        $('.loginBox').fadeIn('fast');
        $('.register-footer').fadeOut('fast',function(){
            $('.login-footer').fadeIn('fast');    
        });
        
        $('.modal-title').html('Login with International Dog Bazar');
    });       
     $('.error').removeClass('alert alert-danger').html(''); 
}

function openLoginModal(){
    showLoginForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}
function openRegisterModal(){
    showRegisterForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}



function shakeModal(){
    $('#loginModal .modal-dialog').addClass('shake');
             $('.error').addClass('alert alert-danger').html("Invalid email/password combination");
             $('input[type="password"]').val('');
             setTimeout( function(){ 
                $('#loginModal .modal-dialog').removeClass('shake'); 
    }, 1000 ); 
}

</script>
<script>
function hidee() {
  var x = document.getElementById("input");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<script>
function hideeLogin() {
  var x = document.getElementById("input_login");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<script>

var hb = document.querySelector('#hb');
var mobhead = document.querySelector('#mobhead');

hb.addEventListener('click', () => {
    mobhead.classList.toggle('active_header');
});

</script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
crossorigin="anonymous"></script>
</body>

</html>