


<div class="nutrition_new_main">
    <div class="navi">
        <div class="container">
        <h4><a href="<?php echo base_url()?>">Home</a> > <a href="<?php echo base_url() ?>givingup">Dog Care > Giving uo Your Dog</a></h4>
        </div>
    </div>
    <div class="nutri_head">
        <div class="container">
            <h1>***Giving Up Your Dog***</h1>
        </div>
    </div>
    <div class="nutri_body">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <h1> Giving up Your Dog news</h1>
                    <hr class="hooooriii">
                </div>
            </div>
            
            <div class="flex">
                <?php foreach ($blogs as $value) {if($value['cate']=="news"){ $str= $value['content']; $result = substr($str, 0, 200);?>
                <div class="card">
                
                    <div class="inner_card">
                    <a href="<?php echo base_url() . "givingup/" . $value['link'] ?>"><img src="<?php echo $value['image']; ?>" alt=""> </a>
                    <h3><?php echo $value['head']; ?></h3>
                    <p><?php echo $result; ?>.... <a href="<?php echo base_url() . "givingup/" . $value['link'] ?>">Read More </a> </p>
                    </div>
               
                </div>
                <?php }}?>
            </div>
            <div class="load_more">
                <button>Load More</button>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-5">
                    <h1> Giving Up Your Dog Videos</h1>
                    <hr class="hooooriii">
                </div>
            </div>
            <div class="flex">
                <?php foreach ($blogs as $value) {if($value['cate']=="video"){ $str= $value['content']; $result = substr($str, 0, 200);?>
                    <div class="card">
                
                <div class="inner_card">
                    <video  src="<?php echo $value['image']; ?>" alt="" controls ></video>
                    <h3  style="text-align: center;"><?php echo $value['head']; ?></h3>
                    <div class="watch">
                    <button data-bs-toggle="modal" data-video="<?php echo $value['image']; ?>" data-id="<?php echo $value['head']; ?>" data-bs-target="#video" class="vdeoscr">Watch Video</button>
                    </div>
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

<div class="modal fade" id="video" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    <div class="modal-content videomodal">
        <div class="modal-body">
            <div class="gead">
                <h1 id="videotitle">Title</h1>
            </div>
            
        <video id="getvideosrc"  alt="" src="" controls></video>
        </div>
        
    </div>
  </div>
</div>


<script>
    
    $(document).ready(function() {
        $(document).on('click', '.vdeoscr', function() {
           var idd= $(this).attr('data-video');
           var head= $(this).attr('data-id');
          
           document.getElementById('getvideosrc').src = idd;
           document.getElementById('videotitle').innerHTML = head;

        });

    });
    var srcdata = document.getElementById('modalsrcdata').value;
    console.log(srcdata);
</script>


