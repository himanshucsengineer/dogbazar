<?php
if (!isset($_SESSION["email"])) {
    $button = '<li><a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();" class="">Login / Signup</a></li>  ';
} else {
    $button = '<li class="nav-item dropdown">
                <a class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            ' . $_SESSION["name"] . '
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <a class="" href="' . base_url() . 'profile"><button><i class="fa fa-user" aria-hidden="true"></i> My Profile</button></a>
                <a class="" href="' . base_url() . 'listmydog"><button><i class="fa fa-list" aria-hidden="true"></i> List My Dog</button></a>
                <a class="" href="' . base_url() . 'mydogs"><button><i class="fa fa-book" aria-hidden="true"></i> My Dog</button></a>
                <a class="" href="' . base_url() . 'logout"><button><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</button></a>
               
            </div>
        </li>
  
  
  
';
}
?>
<!--style>
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


    <header class="header">
        <div class="container">
            <div class="row justify-content-between align-item-center">
                <div class="col-md-2">
                    <a href="<?php echo base_url(); ?>">Logo</a>
                </div>
                <div class="col-md-10 desktopmenu">
                    <ul class="h_nav_links d-flex justify-content-end mt-1">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li><a href="<?php echo base_url(); ?>franchies">Franchies</a></li>
                        <li class="nav-item dropdown">
                            <a  type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                Ways To Give
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <a class="" href="<?php echo base_url()?>donate"><button>Donate Now</button></a>
                                <a class="" href="<?php echo base_url()?>pet-memorial"><button>Pet Memorials</button></a>
                                <a class="" href="<?php echo base_url()?>gift-giving"><button>Gift Giving</button></a>
                                <a class="" href="<?php echo base_url()?>sponsor-an-animal"><button>Sponsor An Animal</button></a>
                                <a class="" href="<?php echo base_url()?>other-ways-to-give"><button>Other Ways To Give</button></a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a c type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                Help & Advice
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                <a class="" href="<?php echo base_url()?>behave"><button>Behaviour</button></a>
                                <a class="" href="<?php echo base_url()?>training"><button>Training</button></a>
                                <a class="" href="<?php echo base_url()?>givingup"><button>Giving Up Your Dog</button></a>
                                <a class="" href="<?php echo base_url()?>getting"><button>Getting A dog</button></a>
                                
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a  type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false">
                                Dog Care
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                <a class="" href="<?php echo base_url()?>bree"><button>Breeds</button></a>
                                <a class="" href="<?php echo base_url()?>nutrition"><button>Nutrition</button></a>
                                <a class="" href="<?php echo base_url()?>training"><button>Training</button></a>
                                <a class="" href="<?php echo base_url()?>problems"><button>Problems</button></a>
                                <a class="" href="<?php echo base_url()?>grooming"><button>Dog Grooming</button></a>
                                <a class="" href="<?php echo base_url()?>petcare"><button>Pet Care Videos</button></a>
                            </div>
                        </li>
                        <li><a href="<?php echo base_url(); ?>blog">Blogs</a></li>
                        <li><a href="<?php echo base_url(); ?>news">News & Events</a></li>
                        <li><a href="<?php echo base_url(); ?>contact-us">Contact</a></li>
                        <li><a href="<?php echo base_url(); ?>about-us">About</a></li>
                        <?php echo $button; ?>
                    </ul>
                </div>
            </div>
        </div>
    </header-->







<style>
.head_top{
    margin-bottom: 2rem;
}
    .header_2{
        width: 100%;
        height: auto;
        padding-top: 2rem;
        padding-bottom: 0rem !important;
      
        z-index: 100;
    }
    .header_btn{
        float: right;
        text-align: center;
        background-color: #A6341B;
        border-radius:25px;
        font-size: 12px;
        padding: .8rem 1.5rem;
        transition: .5s;
        border: 1px solid #f39933;
    }
    .nav_items_dropdown{
        z-index: 300;
        margin-left: -1rem;
    }
    .header_btn:hover{
        color: #f39933;
        background-color: transparent;
        border-radius: 0px;
        border: 1px solid #f39933;
    }
    .header_nav{
        background-color: #FC8817;
    }
    .nav_items{
        background-color: transparent;
        border-right:1px solid #f39933 ;
        color: white;
        padding: .8rem 1rem;
        transition: .5s;
    }
    .nav_items:hover{
        background-color: #A6341B !important;
    }
    .first{
        border-left: 1px solid #f39933;
    }
    .nodecoration{
        color: white !important;
        font-size: 1.38rem;
    }
    .nav_items_dropdown_link{
        background-color: #A6341B;
        border-bottom: 2px solid #f39933;
        transition: .5s;
    }
    .nav_items_dropdown_link:hover{
        background-color: #f39933;
        
    }
</style>



    <header class="header_2">
        <div class="container">
            <div class="row  head_top">
                <div class="col-md-6"><a href="">logo</a> </div>
                <div class="col-md-6 m_hide">
                    <a href="" class="nodecoration header_btn">LOGIN / SIGNUP</a>
                    <a href="<?php echo base_url()?>donate" class="nodecoration header_btn">DONATE</a>
                    
                </div>
                <!--div class="col-3 d_hide m_display">
                    this
                </div-->

            </div>
        </div>

        <!-- <div class="header_2_nav ">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col">
                        <ul class="d-flex m-0">
                            <a href="" class="nodecoration">
                                <li class="head_nav_links text-center">Home</li>
                            </a>
                            <a href="" class="nodecoration">
                                <li class="head_nav_links text-center">Contact</li>
                            </a>
                            <a href="" class="nodecoration">
                                <li class="head_nav_links text-center">Dog Care</li>
                            </a>
                            <a href="" class="nodecoration">
                                <li class="head_nav_links text-center">Blog</li>
                            </a>
                            <a href="" class="nodecoration">
                                <li class="head_nav_links text-center">List a dog</li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->

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
                                    <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url()?>gift-giving" class="nodecoration">Gift Giving</a></li>
                                    <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url()?>sponsor-an-animal" class="nodecoration">Sponsor An Animal</a></li>
                                    <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url()?>other-ways-to-give" class="nodecoration">Other Ways To keep</a></li>
                                </ul>
                                <!-- End Dropdown -->
                            </li>
                            <li class="lstn nav_items" id="d3"><a href="" class="nodecoration ">Help & Advice</a>
                                <!-- Dropdowns with diplay class d2 -->
                                <ul class="m-0 nav_items_dropdown d3">
                                    <li class="lstn  nav_items_dropdown_link"><a href="<?php echo base_url()?>behave" class="nodecoration ">Behaviour</a></li>
                                    <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url()?>training" class="nodecoration">Training</a></li>
                                    <li class="lstn nav_items_dropdown_link"><a href="<?php echo base_url()?>giving" class="nodecoration">Giving Up Your Dog</a></li>
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

    