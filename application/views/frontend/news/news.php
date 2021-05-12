<div class="nutrition_new_main">
    <div class="navi">
        <div class="container">
        <h4><a href="<?php echo base_url()?>">Home</a> > <a href="<?php echo base_url() ?>getting">News</a></h4>
        </div>
    </div>
    <div class="nutri_head">
        <div class="container">
            <h1>***News***</h1>
        </div>
    </div>
    <div class="nutri_body">
        <div class="container">
            <!--div class="row justify-content-center">
                <div class="col-md-4">
                    <h1> News</h1>
                    <hr class="hooooriii">
                </div>
            </div-->
            
            <div class="flex">
                <?php foreach ($blogs as $value) {if($value['cate']=="news"){ $str= $value['content']; $result = substr($str, 0, 200);?>
                <div class="card">
                
                    <div class="inner_card">
                    <a href="<?php echo base_url() . "getting/" . $value['link'] ?>"><img src="<?php echo $value['image']; ?>" alt=""> </a>
                    <h3><?php echo $value['head']; ?></h3>
                    <p><?php echo $result; ?>.... <a href="<?php echo base_url() . "getting/" . $value['link'] ?>">Read More </a> </p>
                    </div>
               
                </div>
                <?php }}?>
            </div>
            <div class="load_more">
                <button>Load More</button>
            </div>

           
            

        </div>
    </div>
</div>






