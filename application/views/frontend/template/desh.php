<?php
if (!isset($_SESSION["email"])) {
   
    $myaccount = '<li  class="lstn nav_items"><a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();" href="" class="nodecoration ">Login/Signup</a></li> ';
} else {
    $myaccount = '<li class="lstn nav_items" id="d7"><a href="" class="nodecoration ">'.$_SESSION['name'].'</a>
    <!-- Dropdowns with diplay class d7 -->
        <ul class="m-0  d7 nav_item_drop_user">
            <li class="lstn  nav_items_dropdown_link"><a href="'.base_url().'profile" class=" "><i class="fa fa-user" aria-hidden="true"></i> My Profile</a></li>
            <li class="lstn nav_items_dropdown_link"><a href="'.base_url().'listmydog" class=""><i class="fa fa-list" aria-hidden="true"></i> List My Dog</a></li>
            <li class="lstn nav_items_dropdown_link"><a href="'.base_url().'" class=""><i class="fa fa-book" aria-hidden="true"></i>Donation History</a></li>
            <li class="lstn nav_items_dropdown_link"><a href="'.base_url().'logout" class=""><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
        </ul>
    <!-- End Dropdown -->
    </li>';
   
}
?>
<?php
if (!isset($_SESSION["email"])) {
    $username = '<h4>Dashboard</h4>';
    $login = '<a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();" href="">Login / Signup</a>';
} else {
    
    $username = '<h4>'.$_SESSION['name'].'</h4>';
    $deah = '<a href="'.base_url().'profile">Dashboard</a>';
    $logout ='<a href="'.base_url().'logout"> <i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>';
}
?>

<body>
    <div id="mySidepanel" class="sidepanel">
        <div class="flex">
            <div class="side_left">
                <?php echo $username?>
            </div>
            <div class="side_right">
                <button href="javascript:void(0)" class="" onclick="closeNav()">×</button>
            </div>
        </div>
        
      
       
       
        <a href="<?php echo base_url() ?>profile"><i class="fa fa-user" aria-hidden="true"></i> Profile & Setting</a>
        <a href="<?php echo base_url() ?>listmydog"> <i class="fa fa-list" aria-hidden="true"></i>  Register A dog</a>
        <a href=""> <i class="fa fa-book" aria-hidden="true"></i> Donation History</a>
        <?php echo $login?>
        <?php echo $logout?>
    </div>
    
    
    
    
    


    <header class="header_2">
        <div class="container">
            <div class="row  head_top">
                <div class="col-md-1"><a href="">logo</a> </div>
                    <div class="col-md-11">
                        <ul class="d-flex m-0 justify-content-end mobile_hiss">
                            <li class="lstn nav_items"><a href="<?php echo base_url() ?>donate" class="nodecoration ">Donate</a></li>
                            <?php echo $myaccount?>
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

    

    




