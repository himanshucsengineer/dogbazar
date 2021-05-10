<?php
if (!isset($_SESSION["email"])) {
    $myaccount = '<a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();" class="nodecoration header_btn m_hide">LOGIN / SIGNUP</a> ';
} else {
    $myaccount = '<div class=" dropdown">
                <a class="deshbo_links m_hide dropdown-toggle" type="button" id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-expanded="false">
            ' . $_SESSION["name"] . '
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                <a class="" href="' . base_url() . 'profile"><button><i class="fa fa-user" aria-hidden="true"></i> My Profile</button></a>
                <a class="" href="' . base_url() . 'listmydog"><button><i class="fa fa-list" aria-hidden="true"></i> List My Dog</button></a>
                <a class="" href="' . base_url() . 'mydogs"><button><i class="fa fa-book" aria-hidden="true"></i> My Dog</button></a>
                <a class="" href="' . base_url() . 'logout"><button><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</button></a>
               
            </div>
        </div>';
}
?>

<?php
if (!isset($_SESSION["email"])) {
    $name = '<h4>DogBazar</h4>';
} else {
    $name = '<h4>Hi, '.$_SESSION['name'].'</h4>';
}
?>


<body>






<div id="mySidepanel" class="sidepanel">
    <div class="flex">
        <div class="side_left">
            <?php echo $name?>
        </div>
        <div class="side_right">
            <button href="javascript:void(0)" class="" onclick="closeNav()">×</button>
        </div>
    </div>

    <a href="<?php echo base_url() ?>profile">Profile & Setting</a>
    <a href="">Donation History</a>
    <a href="<?php echo base_url() ?>logout">Logout</a>
    
   

   

</div>


    <header class="header_2 deshbo_header">
        <div class="container">
            <div class="row  head_top">
                <div class="col-md-6"><a href="">logo</a> </div>
                <div class="col-md-6 ">
                    <?php echo $myaccount; ?>
                    <a href="<?php echo base_url() ?>donate" class=" deshbo_links m_hide">DONATE</a>
                    <div class="mobile-bar ">
                        <button class="openbtn" onclick="openNav()">☰ </button>
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