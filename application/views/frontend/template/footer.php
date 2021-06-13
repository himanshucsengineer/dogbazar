<footer class="footer">

    <div class="container">
        <div class="row">
            <div class="col-md-3 ">
                <div class="mb-4">
                    <h3 class="footer_headings">About Viren Sharma</h3>
                    <hr class="footer_hori">
                </div>
                <p>
Cambridge dictionary defines Entrepreneur as someone who starts their own business, especially when this involves seeing a new opportunity like our very own 'DOG-MAN’ Mr.Viren Sharma from Jaipur.</p>
            </div>
            <div class="col-md-3">
                <div class="mb-4">
                    <h3 class="footer_headings">Important Links</h3>
                    <hr class="footer_hori">
                </div>
                <ul class="footer_pages">
                    <li><a href="<?php echo base_url() ?>donate">Donate</a></li>
                    <li><a href="<?php echo base_url() ?>volunteer">Volunteer</a></li>
                    <li><a href="<?php echo base_url() ?>franchies">Franchise</a></li>
                    <li><a href="<?php echo base_url() ?>adopt">Adopt</a></li>
                    <li><a href="<?php echo base_url() ?>surrender">Surrender A Dog</a></li>
                    <li><a href="<?php echo base_url() ?>sponsor-an-animal">Sponsor An Animal</a></li>
                    <li><a href="<?php echo base_url() ?>breed">Breed</a></li>
                    <li><a href="<?php echo base_url() ?>blog">Blogs</a></li>
                </ul>


            </div>
            <div class="col-md-3">
                <div class="mb-4">
                    <h3 class="footer_headings">Quick Links</h3>
                    <hr class="footer_hori">
                </div>
                <ul class="footer_pages">
                    <li><a href="<?php echo base_url() ?>contact-us">Contact Us</a></li>
                    <li><a href="<?php echo base_url() ?>about-viren">About Viren Sharma</a></li>
                    <li><a href="<?php echo base_url() ?>about-kcr">About KCR</a></li>
                    <li><a href="<?php echo base_url() ?>about-idb">About IDB</a></li>
                    <li><a href="<?php echo base_url() ?>about-mad">About MAD</a></li>
                    <li><a href="<?php echo base_url() ?>about-paws">About PAWS</a></li>
                    <li><a href="<?php echo base_url() ?>privacy-policy">Privacy-Policy</a></li>
                    <li><a href="<?php echo base_url() ?>term">Terms & Conditions</a></li>
                </ul>
            </div>
            <div class="col-md-3 touch">
                <div class="mb-4">
                    <h3 class="footer_headings">Get In Touch</h3>
                    <hr class="footer_hori">
                </div>

                <div class="flex">
                    <div class="left">
                        <input type="email" placeholder="Enter Email">
                    </div>
                    <div class="right">
                        <button>Send</button>
                    </div>
                </div>

                <div class="flex">
                    <div class="add_left">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="add_right">
                        <p>C3, MI Rd, Panch Batti, Jayanti Market, New Colony, Jaipur, Rajasthan 302001</p>
                    </div>
                </div>
                <div class="flex">
                    <div class="add_left">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="add_right">
                        <p>viren.dogman@gmail.com</p>
                    </div>
                </div>
                <div class="flex">
                    <div class="add_left">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="add_right">
                        <p>+91 9982911111
                        <p>
                    </div>
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
        <h1>Follow Us On</h1>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <a class="fa-iconbs" href=""><i class="fa fa-youtube "></i></a>
                <a class="fa-iconbs" href=""><i class="fa fa-twitter "></i></a>
                <a class="fa-iconbs" href=""><i class="fa fa-instagram "></i></a>
                <a class="fa-iconbs" href=""><i class="fa fa-facebook "></i></a>
                <a class="fa-iconbs" href=""><i class="fa fa-linkedin "></i></a>
            </div>
        </div>
        <p>@2021 INTERNATIONAL DOG BAZAR ALL RIGHTS RESERVED. DEVELOPED BY <a href="">HISAR FEVER</a></p>
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
                if ($this->session->flashdata('error')) {
                    echo "<script>$('#loginModal').modal('hide');</script>";
                    echo '<p class="text-danger ">' . $this->session->flashdata('error') . '</p>';
                }
                ?>
                <?php
                if ($this->session->flashdata('success')) {
                    echo "<script>$('#loginModal').modal('hide');</script>";
                    echo '<p class="text-success ">' . $this->session->flashdata('success') . '</p>';
                }
                ?>
                <?php
                if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
                    $url = "https://";
                else
                    $url = "http://";
                // Append the host(domain name, ip) to the URL.   
                $url .= $_SERVER['HTTP_HOST'];
                // Append the requested resource location to the URL   
                $url .= $_SERVER['REQUEST_URI'];
                $_SESSION['url'] = $url;
                ?>
                <div class="box">
                    <div class="form loginBox">
                        <form method="post" action="<?php echo base_url(); ?>frontend/login/login">
                            <input id="email" type="text" placeholder="Email" name="email" required>
                            <!-- id-"password"--><input id="input_login" type="password" placeholder="Password" name="password" required><span class="hide" type="button" onclick="hideeLogin()"><i class="fa fa-eye" aria-hidden="true"></i></span>
                            <input type="submit" onclick="veriiii()" value="Login">
                        </form>
                    </div>
                </div>
                <div class="box">
                    <div class="content registerBox" style="display:none;">
                        <div class="form">
                            <form method="post" action="<?php echo base_url(); ?>frontend/login/signup">
                                <input id="name" type="text" placeholder="Name" name="name" required>
                                <input id="email" type="text" placeholder="Email" name="email" required>
                                <input id="input" type="password" placeholder="Password" name="password" required><span class="hide" type="button" onclick="hidee()"><i class="fa fa-eye" aria-hidden="true"></i></span>
                                <!--input id="password_confirmation" class="form-control chng" type="password" placeholder="Repeat Password" name="cpassword" required-->
                                <div class="chck">
                                    <input type="checkbox" value="none" id="checkbox_1" name="contact1" />
                                    <label for="checkbox_1" class="checkbox"><span class="chk">I agree to the Term and Conditon</span></label>
                                </div>
                                <input type="submit" value="Create account" name="commit">
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


<?php $errorid= $this->session->flashdata('error'); $erorrex = explode(" ", $errorid); $finalerrr =$erorrex[0];?>

<script>
    var errr = "<?php echo $finalerrr?>";
    if(errr =="Wrong" || errr == "This" ){
        $(document).ready(function(){
        $("#loginModal").modal('show');
        });
    }

</script>
<script>

    

    function showRegisterForm() {
        $('.loginBox').fadeOut('fast', function() {
            $('.registerBox').fadeIn('fast');
            $('.login-footer').fadeOut('fast', function() {
                $('.register-footer').fadeIn('fast');
            });
            $('.modal-title').html('Register with International Dog Bazar');
        });
    
        $('.error').removeClass('alert alert-danger').html('');

    }

    function showLoginForm() {
        $('#loginModal .registerBox').fadeOut('fast', function() {
            $('.loginBox').fadeIn('fast');
            $('.register-footer').fadeOut('fast', function() {
                $('.login-footer').fadeIn('fast');
            });

            $('.modal-title').html('Login with International Dog Bazar');
        });
      
        $('.error').removeClass('alert alert-danger').html('');
    }

    function openLoginModal() {
        showLoginForm();
        setTimeout(function() {
            $('#loginModal').modal('show');
        }, 230);

    }

    function openRegisterModal() {
        showRegisterForm();
        setTimeout(function() {
            $('#loginModal').modal('show');
        }, 230);

    }



    function shakeModal() {
        $('#loginModal .modal-dialog').addClass('shake');
        $('.error').addClass('alert alert-danger').html("Invalid email/password combination");
        $('input[type="password"]').val('');
        setTimeout(function() {
            $('#loginModal .modal-dialog').removeClass('shake');
        }, 1000);
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



  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>