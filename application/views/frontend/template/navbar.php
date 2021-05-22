<?php
if (!isset($_SESSION["email"])) {
    $username = '<h4>Dog Bazar</h4>';
    $myaccount = '<li  class="lstn nav_items"><a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();" href="" class="nodecoration ">Login/Signup</a></li> ';
} else {
    $myaccount = '<li class="lstn nav_items" id="d7"><a href="" class="nodecoration ">' . $_SESSION['name'] . '</a>
    <!-- Dropdowns with diplay class d7 -->
        <ul class="m-0  d7 nav_item_drop_user">
            <li class="lstn  nav_items_dropdown_link"><a href="' . base_url() . 'profile" class=" "><i class="fa fa-user" aria-hidden="true"></i> My Profile</a></li>
            <li class="lstn nav_items_dropdown_link"><a href="' . base_url() . 'listmydog" class=""><i class="fa fa-list" aria-hidden="true"></i> List My Dog</a></li>
            <li class="lstn nav_items_dropdown_link"><a href="' . base_url() . '" class=""><i class="fa fa-book" aria-hidden="true"></i>Donation History</a></li>
            <li class="lstn nav_items_dropdown_link"><a href="' . base_url() . 'logout" class=""><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
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
    $username = '<h4>Dog Bazar</h4>';
    $login = '<a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();" href="">Login / Signup</a>';
} else {

    $username = '<h4>' . $_SESSION['name'] . '</h4>';
    $deah = '<a href="' . base_url() . 'profile">Dashboard</a>';
    $logout = '<a href="' . base_url() . 'logout">Logout</a>';
}
?>

<body>
    <div id="mySidepanel" class="sidepanel">
        <div class="flex">
            <div class="side_left">
                <?php echo $username ?>
            </div>
            <div class="side_right">
                <button href="javascript:void(0)" class="" onclick="closeNav()">×</button>
            </div>
        </div>
        <a href="<?php echo base_url() ?>">Home</a>
        <?php echo $deah ?>
        <button class="nextbutttt" onclick="opencare()">Dog Care <span class="right_navigation"><i class="fas fa-chevron-right"></i></span></button>
        <button class="nextbutttt" onclick="openways()">Ways To Give <span class="right_navigati"><i class="fas fa-chevron-right"></i></span></button>
        <button class="nextbutttt" onclick="openhelp()">Help & Advice <span class="right_navigat"><i class="fas fa-chevron-right"></i></span></button>
        <button class="nextbutttt" onclick="openblog()">Blogs <span class="right_navigation"><i class="fas fa-chevron-right"></i></span></button>
        <button class="nextbutttt" onclick="openadopt()">Adopt <span class="right_navigation"><i class="fas fa-chevron-right"></i></span></button>
        <a href="">Pet Accessories</a>
        <a href="<?php echo base_url() ?>franchies">Franchise</a>
        <a href="<?php echo base_url() ?>volunteer">Volunteer</a>
        <a href="<?php echo base_url() ?>gallary">Gallery</a>
        <button class="nextbutttt" onclick="openabout()">About Us <span class="right_navigation"><i class="fas fa-chevron-right"></i></span></button>
        <a href="<?php echo base_url() ?>contact-us">Contact Us</a>
        <?php echo $login ?>
        <?php echo $logout ?>
    </div>
    <div id="mySidepanelcare" class="sidepanel">
        <div class="flex">
            <div class="side_left">
                <button href="javascript:void(0)" class="sbmenuclose" onclick="closecare()"><span class="main_main_left"><i class="fas fa-chevron-left"></i></span>Back</button>
            </div>
            <div class="side_right">
                <button href="javascript:void(0)" class="" onclick="closeall()">×</button>
            </div>
        </div>
        <a href="<?php echo base_url() ?>breed">Breed</a>
        <a href="<?php echo base_url() ?>nutrition">Nutrition</a>
        <a href="<?php echo base_url() ?>training">Training</a>
        <a href="<?php echo base_url() ?>problems">Problems</a>
        <a href="<?php echo base_url() ?>grooming">Dog Grooming</a>
        <a href="<?php echo base_url() ?>petcare">Pet Care Videos</a>
    </div>
    <div id="mySidepanelways" class="sidepanel">
        <div class="flex">
            <div class="side_left">
                <button href="javascript:void(0)" class="sbmenuclose" onclick="closeways()"><span class="main_main_left"><i class="fas fa-chevron-left"></i></span>Back</button>
            </div>
            <div class="side_right">
                <button href="javascript:void(0)" class="" onclick="closeall()">×</button>
            </div>
        </div>
        <a href="<?php echo base_url() ?>donate">Donate</a>
        <a href="<?php echo base_url() ?>pet-memorial">Pet Memorial</a>
        <a href="<?php echo base_url() ?>sponsor-an-animal">Sponsor An Animal</a>
    </div>
    <div id="mySidepanelhelp" class="sidepanel">
        <div class="flex">
            <div class="side_left">
                <button href="javascript:void(0)" class="sbmenuclose" onclick="closehelp()"><span class="main_main_left"><i class="fas fa-chevron-left"></i></span>Back</button>
            </div>
            <div class="side_right">
                <button href="javascript:void(0)" class="" onclick="closeall()">×</button>
            </div>
        </div>
        <a href="<?php echo base_url() ?>givingup">Giving Up Your Dog</a>
        <a href="<?php echo base_url() ?>getting">Getting A Dog</a>
    </div>
    <div id="mySidepanelblog" class="sidepanel">
        <div class="flex">
            <div class="side_left">
                <button href="javascript:void(0)" class="sbmenuclose" onclick="closeblog()"><span class="main_main_left"><i class="fas fa-chevron-left"></i></span>Back</button>
            </div>
            <div class="side_right">
                <button href="javascript:void(0)" class="" onclick="closeall()">×</button>
            </div>
        </div>
        <a href="<?php echo base_url() ?>blog">Blogs</a>
        <a href="<?php echo base_url() ?>news">News</a>
        <a href="<?php echo base_url() ?>news">Events</a>
    </div>
    <div id="mySidepaneladopt" class="sidepanel">
        <div class="flex">
            <div class="side_left">
                <button href="javascript:void(0)" class="sbmenuclose" onclick="closeadopt()"><span class="main_main_left"><i class="fas fa-chevron-left"></i></span>Back</button>
            </div>
            <div class="side_right">
                <button href="javascript:void(0)" class="" onclick="closeall()">×</button>
            </div>
        </div>
        <a href="<?php echo base_url() ?>adopt">Adopt</a>
        <a href="<?php echo base_url() ?>listmydog">Rescue A Dog</a>
        <a href="<?php echo base_url() ?>surrender">Surrender A Dog</a>
    </div>
    <div id="mySidepanelabout" class="sidepanel">
        <div class="flex">
            <div class="side_left">
                <button href="javascript:void(0)" class="sbmenuclose" onclick="closeabout()"><span class="main_main_left"><i class="fas fa-chevron-left"></i></span>Back</button>
            </div>
            <div class="side_right">
                <button href="javascript:void(0)" class="" onclick="closeall()">×</button>
            </div>
        </div>
        <a href="<?php echo base_url() ?>about-viren">About Viren Sharma</a>
        <a href="<?php echo base_url() ?>about-idb">About International Dog Bazaar </a>
        <a href="<?php echo base_url() ?>about-mad">About Mad About Dogs </a>
        <a href="<?php echo base_url() ?>about-paws">About PAWS</a>
        <a href="<?php echo base_url() ?>about-kcr">About Kennel Club Of Rajasthan</a>
    </div>
    <div class="top_head_new">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="top_flex">
                        <div class="left">
                            <p>+91 0000000000</p>
                        </div>
                        <div class="mid">
                            <p>|</p>
                        </div>
                        <div class="right">
                            <p>example@gmail.com</p>
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
                        <li class="lstn nav_items"><a href="<?php echo base_url() ?>gallary" class="nodecoration">Our Gallery</a></li>
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
            document.getElementById("mySidepanel").style.width = "90%";
        }

        function closeNav() {
            document.getElementById("mySidepanel").style.width = "0";
        }
    </script>

    <script>
        function opencare() {
            document.getElementById("mySidepanelcare").style.width = "90%";
        }

        function closecare() {
            document.getElementById("mySidepanelcare").style.width = "0";
        }
    </script>

    <script>
        function openways() {
            document.getElementById("mySidepanelways").style.width = "90%";
        }

        function closeways() {
            document.getElementById("mySidepanelways").style.width = "0";
        }
    </script>



    <script>
        function openhelp() {
            document.getElementById("mySidepanelhelp").style.width = "90%";
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
        }
    </script>

    <script>
        function openabout() {
            document.getElementById("mySidepanelabout").style.width = "90%";
        }

        function closeabout() {
            document.getElementById("mySidepanelabout").style.width = "0";
        }
    </script>
    <script>
        function openadopt() {
            document.getElementById("mySidepaneladopt").style.width = "90%";
        }

        function closeadopt() {
            document.getElementById("mySidepaneladopt").style.width = "0";
        }
    </script>
    <script>
        function openblog() {
            document.getElementById("mySidepanelblog").style.width = "90%";
        }

        function closeblog() {
            document.getElementById("mySidepanelblog").style.width = "0";
        }
    </script>