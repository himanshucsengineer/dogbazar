<?php
if(!isset($_SESSION["email"]))
{
    $button='<li><a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();" class="">Login / Signup</a></li>  ';
}
else{
  $button='<li class="nav-item dropdown">
                <a class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            '.$_SESSION["name"].'
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="'.base_url().'profile">Dashboard</a></li>
                <li><a class="dropdown-item" href="'.base_url().'logout">Logout</a></li>
               
            </ul>
        </li>
  
  
  
'; 
}
?>


<body>

    <!-- Components -->
    <header class="header">
        <div class="container">
            <div class="row justify-content-between align-item-center">
                <div class="col-2">
                    <a href="<?php echo base_url(); ?>">Logo</a>
                </div>
                <div class="col-md-9 desktopmenu">
                    <ul class="h_nav_links d-flex justify-content-end mt-1">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li><a href="<?php echo base_url(); ?>franchies">Franchies</a></li>
                        <li><a href="<?php echo base_url(); ?>blog">Blogs</a></li>
                        <li><a href="<?php echo base_url(); ?>newsandevents">News & Events</a></li>
                        <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
                        <li><a href="<?php echo base_url(); ?>about">About</a></li>
                        <?php echo $button;?>
                    </ul>
                </div>
                <div class="col-2 text-center handburger">
                    <div id="hb"> btn</div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu  -->
        <div class="header_mobile" id="mobhead">
            <div class="nav d-flex flex-column">
                <a href="">
                    <div class="nav_mob_items text-center">
                        &nbsp;
                    </div>
                </a>
                <a href="">
                    <div class="nav_mob_items px-5">
                        Home
                    </div>
                </a>
                <a href="">
                    <div class="nav_mob_items px-5">
                        Franchies
                    </div>
                </a>
                <a href="">
                    <div class="nav_mob_items px-5">
                        Traning
                    </div>
                </a>
                <a href="">
                    <div class="nav_mob_items px-5">
                        About
                    </div>
                </a>
                <a href="">
                    <div class="nav_mob_items px-5">
                        Contact us
                    </div>
                </a>
            </div>
        </div>

    </header>







    
