


<div class="nutrition_new_main">
    <div class="navi">
        <div class="container">
        <h4><a href="<?php echo base_url()?>">Home</a> > <a href="<?php echo base_url() ?>nutrition">Dog Care > Nutrition</a></h4>
        </div>
    </div>
    <div class="nutri_head">
        <div class="container">
            <h1>***Nutrition***</h1>
        </div>
    </div>
    <div class="nutri_body">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <h1> Nutrition news</h1>
                    <hr class="hooooriii">
                </div>
            </div>
            
            <div class="flex">
                <?php foreach ($blogs as $value) {if($value['cate']=="news"){ $str= $value['content']; $result = substr($str, 0, 200);?>
                <div class="card">
                
                    <div class="inner_card">
                    <a href="<?php echo base_url() . "nutrition/" . $value['link'] ?>"><img src="<?php echo $value['image']; ?>" alt=""> </a>
                    <h3><?php echo $value['head']; ?></h3>
                    <p><?php echo $result; ?>.... <a href="<?php echo base_url() . "nutrition/" . $value['link'] ?>">Read More </a> </p>
                    </div>
               
                </div>
                <?php }}?>
            </div>
            <div class="load_more">
                <button>Load More</button>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-3">
                    <h1> Nutrition Videos</h1>
                    <hr class="hooooriii">
                </div>
            </div>
            <div class="flex">
                <?php foreach ($blogs as $value) {if($value['cate']=="video"){ $str= $value['content']; $result = substr($str, 0, 200);?>
                <div class="card">
                
                    <div class="inner_card">
                    <a href="<?php echo base_url() . "nutrition/" . $value['link'] ?>"><video src="<?php echo $value['image']; ?>" alt="" ></video> </a>
                    <h3><?php echo $value['head']; ?></h3>
                    <p><?php echo $result; ?>.... <a href="<?php echo base_url() . "nutrition/" . $value['link'] ?>">Read More </a> </p>
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