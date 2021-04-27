<style>
    .login {
        width: 100%;
        height: auto;
        border-radius: 0px !important;
    }

    .login .modal-header {
        width: 100%;
        height: auto;
        background-color: #f7f7f7 !important;
        border-bottom: 1px solid #cdcdcd;
    }

    .login .modal-header h3 {
        color: #4a4a4a !important;
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

    .login .modal-body input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        padding-left: 1rem;
        border: 1px solid #cdcdcd;
        outline: none;
        margin-bottom: 1rem;
    }

    .login .modal-body input[type="submit"] {
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

    .login .modal-body input[type="submit"]:hover {
        opacity: .7;
    }

    .login .modal-body .chck {
        width: 100%;
        height: auto;
        margin-bottom: 1rem;
    }

    .login .modal-footer {
        width: 100%;
        height: auto;
        padding: 1rem !important;
    }

    .login .modal-footer a {
        color: #d44444;
        text-decoration: none;
    }

    .login .modal-footer .login-footer {
        width: 100%;
        height: auto;
        display: flex;

    }

    .login .modal-footer .register-footer {
        width: 100%;
        height: auto;
        text-align: center;
    }

    .login .modal-footer .login-footer .left {
        width: 50%;
        height: auto;
    }

    .login .modal-footer .login-footer .right {
        width: 100%;
        height: auto;
        text-align: right;
    }

    .touch .flex {
        width: 100%;
        height: auto;
        margin-bottom: 1rem;
        display: flex;
    }

    .touch .flex .left {
        width: 70%;
        height: auto;
    }

    .touch .flex .left input[type="email"] {
        width: 100%;
        height: auto;
        padding-top: .3rem;
        padding-bottom: .3rem;
        padding-left: 1rem;
        border: 1px solid #cdcdcd;
        outline: none;
        margin-bottom: 1rem;
    }

    .touch .flex .right {
        width: 30%;
        height: auto;
    }

    .touch .flex .right button {
        width: 100%;
        height: auto;
        padding-top: .3rem;
        padding-bottom: .3rem;
        color: white;
        background: #f3cb38;
        border: 1px solid #f3cb38;
        outline: none;
    }

    .touch .flex .add_left {
        width: 15%;
        height: auto;
    }

    .touch .flex .add_left .fa {
        font-size: 20px;
        color: white;
    }

    .touch .flex .add_right {
        width: 85%;
        height: auto;
    }

    .hide {
        float: right;
        position: absolute;
        margin-top: .7rem !important;
        margin-left: 3rem !important;
    }
</style>
<footer class="footer">

    <div class="container">
        <div class="row">
            <div class="col-md-3 py-4">
                <div class="mb-4">
                    <h3 class="footer_headings">About Dog Bazar</h3>
                </div>
                <p>Here will come about dog bazar</p>
            </div>
            <div class="col-md-3">
                <div class="mb-4">
                    <h3 class="footer_headings">Important Links</h3>
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
                    <h3 class="footer_headings">Important Links</h3>
                </div>
                <ul class="footer_pages">
                    <li><a href="">Home</a></li>
                    <li><a href="">Volunteer</a></li>
                    <li><a href="">Donate</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Privacy-policy</a></li>
                    <li><a href="">Term & Condition</a></li>
                </ul>
            </div>
            <div class="col-md-3 touch">
                <div class="mb-4">
                    <h3 class="footer_headings">Get In Touch</h3>
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
                        <p>114, azad nagr, alwar (301001)</p>
                    </div>
                </div>
                <div class="flex">
                    <div class="add_left">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="add_right">
                        <p>Info@dogbazar.com</p>
                    </div>
                </div>
                <div class="flex">
                    <div class="add_left">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="add_right">
                        <p>+91 0000000000
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
                if ($this->session->flashdata('error')) {
                    echo "<script>$('#loginModal').modal('show');</script>";
                    echo '<p class="text-danger">' . $this->session->flashdata('error') . '</p>';
                }
                ?>
                <?php
                if ($this->session->flashdata('success')) {
                    echo "<script>$('#loginModal').modal('hide');</script>";
                    echo '<p class="text-success">' . $this->session->flashdata('success') . '</p>';
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
                            <input type="submit" value="Login">
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


<script>
    /*
     *
     * login-register modal
     * Autor: Creative Tim
     * Web-autor: creative.tim
     * Web script: https://creative-tim.com
     * 
     */
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