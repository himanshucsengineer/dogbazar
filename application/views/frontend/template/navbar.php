<?php
if (!isset($_SESSION["email"])) {
    $myaccount = '<a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();" class="nodecoration header_btn m_hide">LOGIN / SIGNUP</a> ';
} else {
    $myaccount = '<div class=" dropdown">
                <a class="nodecoration header_btn m_hide dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            ' . $_SESSION["name"] . '
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <a class="" href="' . base_url() . 'profile"><button><i class="fa fa-user" aria-hidden="true"></i> My Profile</button></a>
                <a class="" href="' . base_url() . 'listmydog"><button><i class="fa fa-list" aria-hidden="true"></i> List My Dog</button></a>
                <a class="" href="' . base_url() . 'mydogs"><button><i class="fa fa-book" aria-hidden="true"></i> My Dog</button></a>
                <a class="" href="' . base_url() . 'logout"><button><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</button></a>
               
            </div>
        </div>
  
  
  
';
}
?>
<style>
    .dropdown-menu {
        width: 100%;
        height: auto;
        border: 1px solid #cdcdcd;
        border-radius: 0px !important;
        padding-top: 0px !important;
        padding-bottom: 0px !important;
        border: 1px solid #cdcdcd;
    }

    .dropdown-menu button {
        width: 100%;
        height: auto;
        padding-top: 1rem;
        padding-bottom: 1rem;
        background-color: white;
        text-align: left;
        padding-left: 2rem;
        font-size: 1.5rem;
        color: #575757;
        border: none;
        border-bottom: 1px solid #cdcdcd;
        transition: .5s;
    }
    .dropdown-menu button .fa {
       margin-right: 1rem;
    }
    .dropdown-menu button:hover {
        color: #d44444;
        border-bottom: 1px solid #d44444;
    }
</style>

<body>


   
<div id="mySidepanel" class="sidepanel">
    <div class="flex">
        <div class="side_left">
            <h4>DogBazar</h4>
        </div>
        <div class="side_right">
            <button href="javascript:void(0)" class="" onclick="closeNav()">×</button>
        </div>
    </div>

    <a href="<?php echo base_url() ?>">Home</a>
    <button class="nextbutttt" onclick="opencare()">Dog Care <span class="right_navigation">></span></button>
    <button class="nextbutttt" onclick="openways()">Ways To Give <span class="right_navigati">></span></button>
    <button class="nextbutttt" onclick="openhelp()">Help & Advice <span class="right_navigat">></span></button>
 
  
    <a href="<?php echo base_url() ?>blog">Blogs</a>
    <a href="<?php echo base_url() ?>adopt">Adopt</a>
    <a href="">Pet Accessories</a>
    <a href="<?php echo base_url() ?>news">News & Events</a>
    <a href="<?php echo base_url() ?>franchies">Franchies</a>
    <a href="<?php echo base_url() ?>volunteer">Volunteer</a>
    <a href="<?php echo base_url() ?>about-us">About Us</a>
    <a href="<?php echo base_url() ?>contact-us">Contact Us</a>
   

   

</div>


<div id="mySidepanelcare" class="sidepanel">
    <div class="flex">
        <div class="side_left">
        <button href="javascript:void(0)" class="sbmenuclose" onclick="closecare()">< Main Menu</button>
        </div>
        <div class="side_right">
            <button href="javascript:void(0)" class="" onclick="closeall()" >×</button>
        </div>
    </div>

    <a href="<?php echo base_url()?>breed">Breed</a>
   
    <a href="<?php echo base_url()?>nutrition" >Nutrition</a>
    <a href="<?php echo base_url()?>training">Training</a>
    <a href="<?php echo base_url()?>problems">Problems</a>
    <a href="<?php echo base_url()?>grooming">Dog Grooming</a>
    <a href="<?php echo base_url()?>petcare">Pet Care Videos</a>

   

</div>


<div id="mySidepanelways" class="sidepanel">
    <div class="flex">
        <div class="side_left">
        <button href="javascript:void(0)" class="sbmenuclose" onclick="closeways()">< Main Menu</button>
        </div>
        <div class="side_right">
            <button href="javascript:void(0)" class="" onclick="closeall()" >×</button>
        </div>
    </div>

    <a href="<?php echo base_url() ?>donate">Donate</a>
   

    <a href="<?php echo base_url()?>pet-memorial">Pet Memorial</a>
    <a href="<?php echo base_url()?>sponsor-an-animal">Sponsor An Animal</a>
    
   

   

</div>
<div id="mySidepanelhelp" class="sidepanel">
    <div class="flex">
        <div class="side_left">
        <button href="javascript:void(0)" class="sbmenuclose" onclick="closehelp()">< Main Menu</button>
        </div>
        <div class="side_right">
            <button href="javascript:void(0)" class="" onclick="closeall()" >×</button>
        </div>
    </div>


   

    <a href="<?php echo base_url()?>givingup">Giving Up Your Dog</a>
    <a href="<?php echo base_url()?>getting">Getting A Dog</a>
    
   

   

</div>


    <header class="header_2">
        <div class="container">
            <div class="row  head_top">
                <div class="col-md-6"><a href="">logo</a> </div>
                <div class="col-md-6 ">
                    <?php echo $myaccount;?>
                    <a href="<?php echo base_url()?>donate" class="nodecoration header_btn m_hide">DONATE</a>
                    <div class="mobile-bar ">
                        <button class="openbtn" onclick="openNav()">☰ </button>
                    </div>
                </div>
                

            </div>
        </div>

     

        <div class="header_nav m_hide">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul class="d-flex m-0">
                            <li class="lstn first nav_items"><a href="<?php echo base_url()?>" class="nodecoration nav_items_link">Home</a></li>
                            <li class="lstn nav_items" id="d1">Dog Care
                                <ul class="m-0 nav_items_dropdown d1">
                                    <li class="lstn  nav_items_dropdown_link"><a href="<?php echo base_url()?>breed" class="nodecoration ">Breeds</a></li>
                                    <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url()?>nutrition" class="nodecoration">Nutrition </a></li>
                                    <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url()?>training" class="nodecoration">Training </a></li>
                                    <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url()?>problems" class="nodecoration">Problems </a></li>
                                    <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url()?>grooming" class="nodecoration">Dog grooming </a></li>
                                    <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url()?>petcare" class="nodecoration">Pet Care Videos </a></li>
                                </ul>
                            </li>
                            <li class="lstn nav_items" id="d2"><a href="" class="nodecoration ">Ways To Give</a>
                                <!-- Dropdowns with diplay class d2 -->
                                <ul class="m-0 nav_items_dropdown d2">
                                    <li class="lstn  nav_items_dropdown_link"><a href="<?php echo base_url()?>donate" class="nodecoration ">Donate Now</a></li>
                                    <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url()?>pet-memorial" class="nodecoration">Pet Memorial</a></li>
                                  
                                    <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url()?>sponsor-an-animal" class="nodecoration">Sponsor An Animal</a></li>
                                   
                                </ul>
                                <!-- End Dropdown -->
                            </li>
                            <li class="lstn nav_items" id="d3"><a href="" class="nodecoration ">Help & Advice</a>
                                <!-- Dropdowns with diplay class d2 -->
                                <ul class="m-0 nav_items_dropdown d3">
                                   
                                    
                                    <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url()?>givingup" class="nodecoration">Giving Up Your Dog</a></li>
                                    <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url()?>getting" class="nodecoration">Getting a Dog</a></li>
           
                                </ul>
                                <!-- End Dropdown -->
                            </li>



                            <li class="lstn nav_items"><a href="<?php echo base_url()?>blog" class="nodecoration nav_items_link">Blogs</a>
                            </li>
                            <li class="lstn nav_items"><a href="<?php echo base_url()?>adopt" class="nodecoration nav_items_link">Adopt + Foster</a></li>
                            <li class="lstn nav_items"><a href="" class="nodecoration nav_items_link">Pet Accessories</a></li>
                            <li class="lstn nav_items"><a href="<?php echo base_url()?>news" class="nodecoration nav_items_link">News & Events</a></li>
                            
                            <li class="lstn nav_items"><a href="<?php echo base_url()?>listmydog" class="nodecoration nav_items_link">Register A Dog</a></li>
                            <li class="lstn nav_items"><a href="<?php echo base_url()?>franchies" class="nodecoration nav_items_link">Franchies</a></li>
                            <li class="lstn nav_items"><a href="<?php echo base_url()?>volunteer" class="nodecoration nav_items_link">Volunteer</a></li>
                            <li class="lstn nav_items"><a href="<?php echo base_url()?>contact-us" class="nodecoration nav_items_link">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <script>
    function openNav() {
        document.getElementById("mySidepanel").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidepanel").style.width = "0";
    }
</script>

<script>
    function opencare() {
        document.getElementById("mySidepanelcare").style.width = "250px";
    }

    function closecare() {
        document.getElementById("mySidepanelcare").style.width = "0";
    }
</script>

<script>
    function openways() {
        document.getElementById("mySidepanelways").style.width = "250px";
    }

    function closeways() {
        document.getElementById("mySidepanelways").style.width = "0";
    }
</script>



<script>
    function openhelp() {
        document.getElementById("mySidepanelhelp").style.width = "250px";
    }

    function closehelp() {
        document.getElementById("mySidepanelhelp").style.width = "0";
    }


    function closeall() {
        document.getElementById("mySidepanel").style.width = "0";
        document.getElementById("mySidepanelhelp").style.width = "0";
        document.getElementById("mySidepanelcare").style.width = "0";
        document.getElementById("mySidepanelways").style.width = "0";
    }
</script>

    