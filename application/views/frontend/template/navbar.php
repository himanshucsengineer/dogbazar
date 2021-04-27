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

    <!-- Components -->
    <header class="header">
        <div class="container">
            <div class="row justify-content-between align-item-center">
                <div class="col-md-2">
                    <a href="<?php echo base_url(); ?>">Logo</a>
                </div>
                <div class="col-md-10 desktopmenu">
                    <ul class="h_nav_links d-flex justify-content-end mt-1">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <!--li><a href="<?php echo base_url(); ?>franchies">Franchies</a></li-->
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
                        <!--li><a href="<?php echo base_url(); ?>news">News & Events</a></li-->
                        <li><a href="<?php echo base_url(); ?>contact-us">Contact</a></li>
                        <!--li><a href="<?php echo base_url(); ?>about-us">About</a></li-->
                        <?php echo $button; ?>
                    </ul>
                </div>
            </div>
        </div>
    </header>