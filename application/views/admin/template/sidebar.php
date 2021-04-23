
    
    
    


<style>
     .active{
         background-color:#0073aa;
         color:white ;
     }
     .active a:hover{
        background-color:#0073aa !important;
         color:white !important;
     }
   a:hover{
       color:#0073aa !important;
   }
     
     li a{
         color:white !important;
         transition:.5s;
     }
     .fas{
        color:white !important; 
     }
     li{
         transition:.5s;
     }
     li:hover{
         background-color:black !important;
         
     }
     .side{
         background-color:#23282d !important;
         
     }
     
</style>

<?php if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'ON'){
                    $url = "https://";
                }else{
                    $url = "http://";
                }
                $url.= $_SERVER['HTTP_HOST'];
                $url.= $_SERVER['REQUEST_URI'];
                
                
            $parts = basename($url);
            
            
            
                
                ?>
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">
<div id="col-navigation" class="side">
  <!-- Sidebar -->
  <ul  class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar"  >

    <!-- Sidebar - Brand -->


    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php echo ($parts == 'welcome')?"active":""?>">
      <a class="nav-link  " href="<?php echo base_url(); ?>welcome" >
        <i class="fas fa-fw fa-tachometer-alt" style="color:white; font-size:1.5rem;"></i>
        <span >Dashboard</span></a>
        <span class="sr-only"> 
                    (current) 
                </span>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">



    <!-- Divider -->
  <!--    <hr class="sidebar-divider">

    <! -- Heading -->
    <div class="sidebar-heading" >
      Home Page
    </div>

    <!-- Nav Item - Charts -->
    
    


    <!-- Nav Item - Tables -->
    

    
    
    
        
    
    <li class="nav-item <?php echo ($parts == 'franchies')?"active":""?>">
      <a class="nav-link " href="<?php echo base_url(); ?>admin/franchies"><i class="fas fa-fw fa-table" ></i><span >Franchies Request</span></a>
    </li>
    <li class="nav-item <?php echo ($parts == 'volunteer')?"active":""?>">
      <a class="nav-link " href="<?php echo base_url(); ?>admin/volunteer"><i class="fas fa-fw fa-table" ></i><span >volunteer Request</span></a>
    </li>
    <!--li class="nav-item <?php echo ($parts == 'account')?"active":""?>">
      <a class="nav-link " href="<?php echo base_url(); ?>admin/account"><i class="fas fa-fw fa-table" ></i><span >Login Request</span></a>
    </li>
    
    <li class="nav-item <?php echo ($parts == 'campaign')?"active":""?>">
      <a class="nav-link " href="<?php echo base_url(); ?>admin/campaign"><i class="fas fa-fw fa-table" ></i><span >Campaign</span></a>
    </li-->
  
   <li class="nav-item ">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesss" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder" ></i>
        <span >Training</span>
      </a>
      <div id="collapsePagesss" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="py-2 collapse-inner rounded">
          <a class="collapse-item " href="<?php echo base_url(); ?>admin/dogcare/training/newpost" style="font-size:1.3rem; ">Training New Post</a>
          <a class="collapse-item " href="<?php echo base_url(); ?>admin/dogcare/training/allpost" style="font-size:1.3rem; ">Training All Post</a>
          <a class="collapse-item " href="<?php echo base_url(); ?>admin/dogcare/training/category" style="font-size:1.3rem; ">Training Category</a>
          <div class="collapse-divider"></div>
        </div>
      </div>
    </li>
    <li class="nav-item ">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder" ></i>
        <span >Nutrition</span>
      </a>
      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="py-2 collapse-inner rounded">
          <a class="collapse-item " href="<?php echo base_url(); ?>admin/dogcare/nutrition/newpost" style="font-size:1.3rem; ">Nutrition New Post</a>
          <a class="collapse-item " href="<?php echo base_url(); ?>admin/dogcare/nutrition/allpost" style="font-size:1.3rem; ">Nutrition All Post</a>
          <a class="collapse-item " href="<?php echo base_url(); ?>admin/dogcare/nutrition/category" style="font-size:1.3rem; ">Nutrition Category</a>
          <div class="collapse-divider"></div>
        </div>
      </div>
    </li>
    <li class="nav-item ">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#grooming" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder" ></i>
        <span >Dog Grooming</span>
      </a>
      <div id="grooming" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="py-2 collapse-inner rounded">
          <a class="collapse-item " href="<?php echo base_url(); ?>admin/dogcare/grooming/newpost" style="font-size:1.3rem; ">Dog Grooming New Post</a>
          <a class="collapse-item " href="<?php echo base_url(); ?>admin/dogcare/grooming/allpost" style="font-size:1.3rem; ">Dog Grooming All Post</a>
          <a class="collapse-item " href="<?php echo base_url(); ?>admin/dogcare/grooming/category" style="font-size:1.3rem; ">Dog Grooming Category</a>
          <div class="collapse-divider"></div>
        </div>
      </div>
    </li>

    <li class="nav-item ">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Problems" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder" ></i>
        <span >Problems</span>
      </a>
      <div id="Problems" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="py-2 collapse-inner rounded">
          <a class="collapse-item " href="<?php echo base_url(); ?>admin/dogcare/problems/newpost" style="font-size:1.3rem; ">Problems New Post</a>
          <a class="collapse-item " href="<?php echo base_url(); ?>admin/dogcare/problems/allpost" style="font-size:1.3rem; ">Problems All Post</a>
          <a class="collapse-item " href="<?php echo base_url(); ?>admin/dogcare/problems/category" style="font-size:1.3rem; ">Problems Category</a>
          <div class="collapse-divider"></div>
        </div>
      </div>
    </li>
    <li class="nav-item ">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#petcare" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder" ></i>
        <span >Pet Care video</span>
      </a>
      <div id="petcare" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="py-2 collapse-inner rounded">
          <a class="collapse-item " href="<?php echo base_url(); ?>admin/dogcare/petcare/newpost" style="font-size:1.3rem; ">Petcare New Post</a>
          <a class="collapse-item " href="<?php echo base_url(); ?>admin/dogcare/petcare/allpost" style="font-size:1.3rem; ">Petcare All Post</a>
          <a class="collapse-item " href="<?php echo base_url(); ?>admin/dogcare/petcare/category" style="font-size:1.3rem; ">Petcare Category</a>
          <div class="collapse-divider"></div>
        </div>
      </div>
    </li>
    
  
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <div class="sidebar-heading" >
      User Data
    </div>
    <li class="nav-item <?php echo ($parts == 'user')?"active":""?>">
      <a class="nav-link " href="<?php echo base_url(); ?>admin/user"><i class="fas fa-fw fa-table" ></i><span >Users</span></a>
    </li>
    <li class="nav-item <?php echo ($parts == 'contactdata')?"active":""?>">
      <a class="nav-link " href="<?php echo base_url(); ?>admin/contactdata"><i class="fas fa-fw fa-table" ></i><span >Contact Data</span></a>
    </li>
    <li class="nav-item <?php echo ($parts == 'donation')?"active":""?>">
      <a class="nav-link " href="<?php echo base_url(); ?>admin/donation"><i class="fas fa-fw fa-table" ></i><span >Donate Data</span></a>
    </li>
    
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    

  </ul>
  </div>
  
  <!-- End of Sidebar -->