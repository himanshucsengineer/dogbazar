<?php
if (!isset($_SESSION["email"])) {
    $username = '<h4>Dog Bazar</h4>';
    $myaccount = '<li  class="lstn nav_items"><a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();" href="" class="nodecoration ">Login/Signup</a></li> ';
} else {
    $myaccount = '<li class="lstn nav_items" id="d7"><a href="" class="nodecoration ">' . $_SESSION['name'] . '</a>
    <!-- Dropdowns with diplay class d7 -->
        <ul class="m-0  d7 nav_item_drop_user">
            <li class="lstn  nav_items_dropdown_link"><a href="' . base_url() . 'profile" class=" "><i class="desh_fa fa fa-user" aria-hidden="true"></i> My Profile</a></li>
            <li class="lstn nav_items_dropdown_link"><a href="' . base_url() . 'sponsor-history" class=""><i class="desh_fa fas fa-paw"></i>Sponsor Pet History</a></li>
            <li class="lstn nav_items_dropdown_link"><a href="' . base_url() . 'donation-history" class=""><i class="desh_fa fa fa-book" aria-hidden="true"></i>Donation History</a></li>
            <li class="lstn nav_items_dropdown_link"><a href="' . base_url() . 'adopted-pet" class=""><i class="desh_fa fas fa-door-open"></i>Adopted Pet</a></li>
            <li class="lstn nav_items_dropdown_link"><a href="' . base_url() . 'logout" class=""><i class="desh_fa fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
        </ul>
    <!-- End Dropdown -->
    </li>';
    $username = '<h4>' . $_SESSION['name'] . '</h4>';
    $deah = '<a href="' . base_url() . 'profile">Dashboard</a>';
    $logout = '<a href="' . base_url() . 'logout">Logout</a>';
}
?>
<?php
if (!isset($_SESSION["email"])) {
    $username = '<p>For Better Search & Experience</p>';
    $login = '<a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();" href=""><h3>Login / Signup</h3></a>';
} else {
    $login = '<h3>Welcome</h3>';
    $username = '<p>' . $_SESSION['name'] . '</p>';
    $deah = '<a href="' . base_url() . 'profile"><button>Dashboard</button></a>';
    $logout = '<a href="' . base_url() . 'logout"><button>Logout</button></a>';
}
?>
<style>
.desh_fa{
    font-size:15px !important;
    margin-right:1rem !important;
    color:rgb(95,96,96) !important;
}
    .sidebar_new {
        width: 0;
        position: fixed;
        z-index: 100;
        height: 100%;
        top: 0;
        left: 0;
        overflow-x: hidden;

        transition: transform .3s cubic-bezier(0, 0, .3, 1);


        cursor: pointer;
    }

    .sidebar_new .flex {
        width: 100%;
        height: 100%;
        display: flex;
    }

    .sidebar_new .flex .left {
        width: 80%;
        background-color: white;
        height: 100%;
        overflow-y: scroll;
    }

    .sidebar_new .flex .left .overdff {
        position: relative;
    }

    .sidebar_new .flex .right {
        width: 20%;
        cursor: pointer;
        height: 100%;
        background-color: black;
        opacity: .5;
    }

    .sidebar_new .flex .left .top_login {
        width: 100%;
        height: auto;
        background-color: #66120e !important;
        padding: 25px 15px;
        align-items: center;
        
    }

    .sidebar_new .flex .left .top_login .login_flex {
        width: 100%;
        height: auto;
        display: flex;
    }

    .sidebar_new .flex .left .top_login .login_flex .login_left {
        width: 25%;
        margin-right: 1rem;
    }

    .sidebar_new .flex .left .top_login .login_flex .login_right {
        width: 75%;
    }

    .sidebar_new .flex .left .top_login .login_flex .login_left .inner_login_left {
        width: 100%;
        border: 2px solid #fff;
        border-radius: 50%;
        margin-top: 1rem !important;
        text-align: center;
    }

    .sidebar_new .flex .left .top_login .login_flex .login_left .inner_login_left .far {
        color: #fff !important;
        font-size: 23px !important;
        padding: 15px 18px !important;
    }

    .sidebar_new .flex .left .top_login .login_flex .login_right h3 {
        font-size: 18px;
        color: #fff;
        font-weight: 500 !important;
        margin-bottom: 0px !important;
    }

    .sidebar_new .flex .left .top_login .login_flex .login_right p {
        font-size: 13px;
        color: #dee2e6 !important;
        font-weight: 400 !important;
        line-height: 1.3 !important;
    }

    .sidebar_new .flex .left .brwos {
        width: 100%;
        height: auto;
        background-color: #f4f4f4;
        padding: 10px;
    }
    .sidebar_fa_icon{
        font-size:15px !important;
        margin-bottom:0rem !important;
    }

    .sidebar_new .flex .left .brwos .brw_flex {
        width: 100%;
        height: auto;
        display: flex;
    }

    .sidebar_new .flex .left .brwos .brw_flex .brw_flex_left {
        width: 10%;
        margin-top: -.2rem !important;
    }

    .sidebar_new .flex .left .brwos .brw_flex .brw_flex_left .fas {
        font-size: 14px !important;
        color: #444 !important;
    }

    .sidebar_new .flex .left .brwos .brw_flex .brw_flex_right p {
        font-size: 14px !important;
        color: #444 !important;
        margin-bottom: 0rem !important;
    }

    .sidebar_new .flex .left .brwos .brw_flex .brw_flex_right {
        width: 90%;
    }

    .sidebar_new .flex .left button {
        width: 100%;
        height: auto;
        padding: 12px 16px;
        text-align: left;
        border-top: none;
        border-left: none;
        border-right: none;
        border-bottom: 1px solid #e9ecef !important;
        background-color: #fff !important;
        color: #5d5d67 !important;
        font-size: 1.5rem !important;
        font-weight: 500 !important;
    }

    .sidebar_new .flex .left .next_icon {
        float: right !important;
    }

    .sidebar_new .flex .left .next_icon .fas {
        color: #5d5d67 !important;

    }

    .sidebar_submenu {
        top: 128px !important;
    }

    .sidebar_submenu .flex .right {
        display: none !important;
    }

    .sidebar_submenu .flex .left .top_login {
        display: none !important;
    }
    .sidebar_new a{
        text-decoration: none !important;
    }
</style>

<body>

    <div id="mySidepanel" class="sidebar_new">
        <div class="flex">
            <div class="left">
                <div class="top_login">
                    <div class="login_flex">
                        <div class="login_left">
                            <div class="inner_login_left">
                                <i class="far fa-user"></i>
                            </div>
                        </div>
                        <div class="login_right">
                            <?php echo $login; ?>
                            <?php echo $username; ?>

                        </div>
                    </div>
                </div>

                <div class="overdff">
                    <div class="brwos">
                        <div class="brw_flex">
                            <div class="brw_flex_left">
                                <i class="fas fa-equals"></i>
                            </div>
                            <div class="brw_flex_right">
                                <p>BROWSE CATEGORIES</p>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo base_url() ?>"><button>Home</button></a>
                    <?php echo $deah; ?>
                    <button onclick="opencare();">Dog Care <span class="next_icon"><i class="sidebar_fa_icon fas fa-chevron-right"></i></span></button>
                    <button onclick="openways();">Ways To Give <span class="next_icon"><i class="sidebar_fa_icon fas fa-chevron-right"></i></span></button>
                    <button onclick="openhelp();">Help & Advice <span class="next_icon"><i class="sidebar_fa_icon fas fa-chevron-right"></i></span></button>
                    <button onclick="openblog();">Blogs <span class="next_icon"><i class="sidebar_fa_icon fas fa-chevron-right"></i></span></button>
                    <button onclick="openadopt();">Adopt <span class="next_icon"><i class="sidebar_fa_icon fas fa-chevron-right"></i></span></button>
                    <button onclick="opengallary();">Gallery <span class="next_icon"><i class="sidebar_fa_icon fas fa-chevron-right"></i></span></button>
                    <button onclick="openabout();">About Us <span class="next_icon"><i class="sidebar_fa_icon fas fa-chevron-right"></i></span></button>

                    <a href="<?php echo base_url() ?>"><button>Pet Accessories</button></a>
                    <a href="<?php echo base_url() ?>franchies"><button>Franchise</button></a>
                    <a href="<?php echo base_url() ?>volunteer"><button>Volunteer</button></a>
                   
                   
                      <a href="<?php echo base_url() ?>contact-us"><button>contact Us</button></a>
                    <?php echo $logout; ?>
                </div>
            </div>
            <div class="right" onclick="closeall()">

            </div>
        </div>
    </div>

    <div id="mySidepanelcare" class="sidebar_new sidebar_submenu">
        <div class="flex">
            <div class="left">
                <div class="top_login" id="onscr">
                    <div class="login_flex">
                        <div class="login_left">
                            <div class="inner_login_left">
                                <i class="far fa-user"></i>
                            </div>
                        </div>
                        <div class="login_right">
                            <h3>Login / Signup</h3>
                            <p>For Better Search & Experience</p>
                        </div>
                    </div>
                </div>

                <div class="brwos">
                    <div class="brw_flex">
                        <div class="brw_flex_left" onclick="closecare();">
                            <i class="fas fa-long-arrow-alt-left"></i>
                        </div>
                        <div class="brw_flex_right">
                            <p>All CATEGORIES</p>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url() ?>breed"><button>Breed</button></a>
                <a href="<?php echo base_url() ?>nutrition"><button>Nutrition</button></a>
                <a href="<?php echo base_url() ?>training"><button>Training</button></a>
                <a href="<?php echo base_url() ?>problems"><button>Problems</button></a>
                <a href="<?php echo base_url() ?>grooming"><button>Dog Grooming</button></a>
                <a href="<?php echo base_url() ?>petcare"><button>Pet Care Videos</button></a>

            </div>
            <div class="right">

            </div>
        </div>
    </div>


    <div id="mySidepanelways" class="sidebar_new sidebar_submenu">
        <div class="flex">
            <div class="left">
                <div class="top_login">
                    <div class="login_flex">
                        <div class="login_left">
                            <div class="inner_login_left">
                                <i class="far fa-user"></i>
                            </div>
                        </div>
                        <div class="login_right">
                            <h3>Login / Signup</h3>
                            <p>For Better Search & Experience</p>
                        </div>
                    </div>
                </div>

                <div class="brwos">
                    <div class="brw_flex">
                        <div class="brw_flex_left" onclick="closeways();">
                            <i class="fas fa-long-arrow-alt-left"></i>
                        </div>
                        <div class="brw_flex_right">
                            <p>All CATEGORIES</p>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url() ?>donate"><button>Donate</button></a>
                <a href="<?php echo base_url() ?>pet-memorial"><button>Pet Memorial</button></a>
                <a href="<?php echo base_url() ?>sponsor-an-animal"><button>Sponsor An Animal</button></a>


            </div>
            <div class="right">

            </div>
        </div>
    </div>


    <div id="mySidepanelhelp" class="sidebar_new sidebar_submenu">
        <div class="flex">
            <div class="left">
                <div class="top_login">
                    <div class="login_flex">
                        <div class="login_left">
                            <div class="inner_login_left">
                                <i class="far fa-user"></i>
                            </div>
                        </div>
                        <div class="login_right">
                            <h3>Login / Signup</h3>
                            <p>For Better Search & Experience</p>
                        </div>
                    </div>
                </div>

                <div class="brwos">
                    <div class="brw_flex">
                        <div class="brw_flex_left" onclick="closehelp();">
                            <i class="fas fa-long-arrow-alt-left"></i>
                        </div>
                        <div class="brw_flex_right">
                            <p>All CATEGORIES</p>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url() ?>givingup"><button>Giving Up Your Dog</button></a>
                <a href="<?php echo base_url() ?>getting"><button>Getting A Dog</button></a>



            </div>
            <div class="right">

            </div>
        </div>
    </div>

    <div id="mySidepanelblog" class="sidebar_new sidebar_submenu">
        <div class="flex">
            <div class="left">
                <div class="top_login">
                    <div class="login_flex">
                        <div class="login_left">
                            <div class="inner_login_left">
                                <i class="far fa-user"></i>
                            </div>
                        </div>
                        <div class="login_right">
                            <h3>Login / Signup</h3>
                            <p>For Better Search & Experience</p>
                        </div>
                    </div>
                </div>

                <div class="brwos">
                    <div class="brw_flex">
                        <div class="brw_flex_left" onclick="closeblog();">
                            <i class="fas fa-long-arrow-alt-left"></i>
                        </div>
                        <div class="brw_flex_right">
                            <p>All CATEGORIES</p>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url() ?>blog"><button>Blogs</button></a>
                <a href="<?php echo base_url() ?>news"><button>News</button></a>
                <a href="<?php echo base_url() ?>events"><button>Events</button></a>


            </div>
            <div class="right">

            </div>
        </div>
    </div>

    <div id="mySidepaneladopt" class="sidebar_new sidebar_submenu">
        <div class="flex">
            <div class="left">
                <div class="top_login">
                    <div class="login_flex">
                        <div class="login_left">
                            <div class="inner_login_left">
                                <i class="far fa-user"></i>
                            </div>
                        </div>
                        <div class="login_right">
                            <h3>Login / Signup</h3>
                            <p>For Better Search & Experience</p>
                        </div>
                    </div>
                </div>

                <div class="brwos">
                    <div class="brw_flex">
                        <div class="brw_flex_left" onclick="closeadopt();">
                            <i class="fas fa-long-arrow-alt-left"></i>
                        </div>
                        <div class="brw_flex_right">
                            <p>All CATEGORIES</p>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url() ?>adopt"><button>Adopt</button></a>
                <a href="<?php echo base_url() ?>listmydog"><button>Rescue A Dog</button></a>
                <a href="<?php echo base_url() ?>surrender"><button>Surrender A Dog</button></a>


            </div>
            <div class="right">

            </div>
        </div>
    </div>

    <div id="mySidepanelabout" class="sidebar_new sidebar_submenu">
        <div class="flex">
            <div class="left">
                <div class="top_login">
                    <div class="login_flex">
                        <div class="login_left">
                            <div class="inner_login_left">
                                <i class="far fa-user"></i>
                            </div>
                        </div>
                        <div class="login_right">
                            <h3>Login / Signup</h3>
                            <p>For Better Search & Experience</p>
                        </div>
                    </div>
                </div>

                <div class="brwos">
                    <div class="brw_flex">
                        <div class="brw_flex_left" onclick="closeabout();">
                            <i class="fas fa-long-arrow-alt-left"></i>
                        </div>
                        <div class="brw_flex_right">
                            <p>All CATEGORIES</p>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url() ?>about-viren"><button>About Viren Sharma</button></a>
                <a href="<?php echo base_url() ?>about-idb"><button>About International Dog Bazaar</button></a>
                <a href="<?php echo base_url() ?>about-mad"><button>About Mad About Dogs</button></a>
                <a href="<?php echo base_url() ?>about-paws"><button>About PAWS</button></a>
                <a href="<?php echo base_url() ?>about-kcr"><button>About Kennel Club Of Rajasthan</button></a>

            </div>
            <div class="right">

            </div>
        </div>
    </div>



    <div id="mySidepanelgallary" class="sidebar_new sidebar_submenu">
        <div class="flex">
            <div class="left">
                <div class="top_login">
                    <div class="login_flex">
                        <div class="login_left">
                            <div class="inner_login_left">
                                <i class="far fa-user"></i>
                            </div>
                        </div>
                        <div class="login_right">
                            <h3>Login / Signup</h3>
                            <p>For Better Search & Experience</p>
                        </div>
                    </div>
                </div>

                <div class="brwos">
                    <div class="brw_flex">
                        <div class="brw_flex_left" onclick="closegallary();">
                            <i class="fas fa-long-arrow-alt-left"></i>
                        </div>
                        <div class="brw_flex_right">
                            <p>All CATEGORIES</p>
                        </div>
                    </div>
                </div>
                <?php
							$socials_datas=Utility::gallarylink();
                            $socials_ds=Utility::gallarycate();
							//print_r($socials_datas);
            ?>  
                <?php foreach($socials_ds as $val){ $new_url = $val['cate_name']; $link = str_replace(' ', '-', $new_url);?>
                    <a href="<?php echo base_url() ?>gallary/<?php echo $link?>"><button><?php echo $val['cate_name']?></button></a>
                              
                               <?php }?> 

               
                
            </div>
            <div class="right">

            </div>
        </div>
    </div>















    <div class="top_head_new">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="top_flex">
                        <div class="left">
                            <p>+91 9982911111</p>
                        </div>
                        <div class="mid">
                            <p>|</p>
                        </div>
                        <div class="right">
                            <p>viren.dogman@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="top_flex_right justify-content-end">
                        <div class="left">
                            <a href="<?php echo base_url() ?>volunteer"><button>Volunteer</button></a>
                        </div>
                        <div class="mid">
                            <p>|</p>
                        </div>
                        <div class="right">
                            <a href="<?php echo base_url() ?>donate"><button>Donate</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="header_2">
        <div class="container">
            <div class="row  head_top">
                <div class="col-md-1"><a href="">logo</a> </div>
                <div class="col-md-11">
                    <ul class="d-flex m-0 justify-content-end mobile_hiss">
                        <li class="lstn first nav_items"><a href="<?php echo base_url() ?>" class="nodecoration ">Home</a></li>
                        <li class="lstn nav_items" id="d1"><a href="" class="nodecoration ">Dog Care</a>
                            <ul class="m-0 nav_items_dropdown d1">
                                <li class="lstn  nav_items_dropdown_link"><a href="<?php echo base_url() ?>breed" class=" ">Breeds</a></li>
                                <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url() ?>nutrition" class="">Nutrition </a></li>
                                <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url() ?>training" class="">Training </a></li>
                                <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url() ?>problems" class="">Problems </a></li>
                                <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url() ?>grooming" class="">Dog grooming </a></li>
                                <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url() ?>petcare" class="">Pet Care Videos </a></li>
                            </ul>
                        </li>
                        <li class="lstn nav_items" id="d2"><a href="" class="nodecoration ">Ways To Give</a>
                            <!-- Dropdowns with diplay class d2 -->
                            <ul class="m-0 nav_items_dropdown d2">
                                <li class="lstn  nav_items_dropdown_link"><a href="<?php echo base_url() ?>donate" class=" ">Donate Now</a></li>
                                <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url() ?>pet-memorial" class="">Pet Memorial</a></li>
                                <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url() ?>sponsor-an-animal" class="">Sponsor An Animal</a></li>
                            </ul>
                            <!-- End Dropdown -->
                        </li>
                        <li class="lstn nav_items" id="d3"><a href="" class="nodecoration ">Help & Advice</a>
                            <!-- Dropdowns with diplay class d2 -->
                            <ul class="m-0 nav_items_dropdown d3">
                                <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url() ?>givingup" class="">Giving Up Your Dog</a></li>
                                <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url() ?>getting" class="">Getting a Dog</a></li>
                            </ul>
                            <!-- End Dropdown -->
                        </li>
                        <li class="lstn nav_items" id="d4"><a href="" class="nodecoration ">Blog</a>
                            <!-- Dropdowns with diplay class d2 -->
                            <ul class="m-0 nav_items_dropdown d4">
                                <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url() ?>blog" class="">Blogs</a></li>
                                <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url() ?>news" class="">News</a></li>
                                <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url() ?>events" class="">Events</a></li>
                            </ul>
                            <!-- End Dropdown -->
                        </li>
                        <li class="lstn nav_items" id="d5"><a href="" class="nodecoration ">Adopt</a>
                            <!-- Dropdowns with diplay class d2 -->
                            <ul class="m-0 nav_items_dropdown d5">
                                <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url() ?>adopt" class="">Adopt</a></li>
                                <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url() ?>listmydog" class="">Rescue A Dog</a></li>
                                <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url() ?>surrender" class="">Surrender A Dog</a></li>
                            </ul>
                            <!-- End Dropdown -->
                        </li>
                        <li class="lstn nav_items"><a href="" class="nodecoration">Pet Accessories</a></li>
                       <?php
							$socials_datas=Utility::gallarylink();
                            $socials_ds=Utility::gallarycate();
							//print_r($socials_datas);
            ?>  
                        <li class="lstn nav_items" id="d8"><a href="" class="nodecoration ">Our Gallery</a>
                            <!-- Dropdowns with diplay class d2 -->
                            <ul class="m-0 nav_items_dropdown d8">
                            <?php foreach($socials_ds as $val){ $new_url = $val['cate_name']; $link = str_replace(' ', '-', $new_url);?>
                               
                                <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url() ?>gallary/<?php echo $link?>" class=""><?php echo $val['cate_name']?></a></li>
                               
                                <?php }?>
                            </ul>
                            <!-- End Dropdown -->
                        </li>
                        
                        
                        <li class="lstn nav_items"><a href="<?php echo base_url() ?>franchies" class="nodecoration ">Franchise</a></li>
                        <!--li class="lstn nav_items"><a href="<?php echo base_url() ?>volunteer" class="nodecoration nav_items_link">Volunteer</a></li-->
                        <li class="lstn nav_items" id="d6"><a href="" class="nodecoration ">About Us</a>
                            <!-- Dropdowns with diplay class d2 -->
                            <ul class="m-0 nav_items_dropdown d6">
                                <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url() ?>about-viren" class="">About Viren Sharma</a></li>
                                <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url() ?>about-idb" class="">About International Dog Bazaar </a></li>
                                <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url() ?>about-mad" class="">About Mad About Dogs</a></li>
                                <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url() ?>about-paws" class="">About PAWS</a></li>
                                <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url() ?>about-kcr" class="">About Kennel Club Of Rajasthan</a></li>
                            </ul>
                            <!-- End Dropdown -->
                        </li>
                        <li class="lstn nav_items"><a href="<?php echo base_url() ?>contact-us" class="nodecoration ">Contact us</a></li>
                        <?php echo $myaccount ?>
                    </ul>
                    <div class="mobile-bar ">
                        <button class="openbtn" onclick="openNav()">☰ </button>
                    </div>
                </div>
            </div>
        </div>
    </header>





    <script>
        function openNav() {
            document.getElementById("mySidepanel").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("mySidepanel").style.width = "0";
        }
    </script>

    <script>
        function opencare() {
            document.getElementById("mySidepanelcare").style.width = "100%";
        }

        function closecare() {
            document.getElementById("mySidepanelcare").style.width = "0";
        }
    </script>

    <script>
        function openways() {
            document.getElementById("mySidepanelways").style.width = "100%";
        }

        function closeways() {
            document.getElementById("mySidepanelways").style.width = "0";
        }
    </script>



    <script>
        function openhelp() {
            document.getElementById("mySidepanelhelp").style.width = "100%";
        }

        function closehelp() {
            document.getElementById("mySidepanelhelp").style.width = "0";
        }


        function closeall() {
            document.getElementById("mySidepanel").style.width = "0";
            document.getElementById("mySidepanelhelp").style.width = "0";
            document.getElementById("mySidepanelcare").style.width = "0";
            document.getElementById("mySidepanelways").style.width = "0";
            document.getElementById("mySidepanelabout").style.width = "0";
            document.getElementById("mySidepaneladopt").style.width = "0";
            document.getElementById("mySidepanelblog").style.width = "0";
            document.getElementById("mySidepanelgallary").style.width = "0";
        }
    </script>

    <script>
        function openabout() {
            document.getElementById("mySidepanelabout").style.width = "100%";
        }

        function closeabout() {
            document.getElementById("mySidepanelabout").style.width = "0";
        }
    </script>
    <script>
        function openadopt() {
            document.getElementById("mySidepaneladopt").style.width = "100%";
        }

        function closeadopt() {
            document.getElementById("mySidepaneladopt").style.width = "0";
        }
    </script>
    <script>
        function openblog() {
            document.getElementById("mySidepanelblog").style.width = "100%";
        }

        function closeblog() {
            document.getElementById("mySidepanelblog").style.width = "0";
        }
    </script>
<script>
        function opengallary() {
            document.getElementById("mySidepanelgallary").style.width = "100%";
        }

        function closegallary() {
            document.getElementById("mySidepanelgallary").style.width = "0";
        }
    </script>
    <script>
        $(window).scroll(function() {

            //After scrolling 100px from the top...
            if ($(window).scrollTop() >= 100) {
                $('#onscr').css('display', 'block');

                //Otherwise remove inline styles and thereby revert to original stying
            }
        });
    </script>