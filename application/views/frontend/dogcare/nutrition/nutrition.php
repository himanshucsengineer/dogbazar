
<style>
    .videomodal video{
        width: 100% !important;
        
    }
    .modal-content{
        
        border-radius: 0px !important;
    }
    .btn-close{
        float: right;
        color: white !important;
        margin-right: -2.7rem;
        margin-bottom: 1rem;
        font-size: 20px;
    }
    .videomodal .gead{
        width: 100%;
        height: auto;
        padding-top: 1rem;
        padding-bottom: .5rem;
        background-color: white;
        border-bottom: 1px solid #cdcdcd !important;
        margin-bottom: 1rem;
    }
    .videomodal .gead h1{
        text-align: center;
        color: #444;
        font-weight: 600;
        font-size: 25px;
        text-transform: capitalize;
    }
@media screen and (min-width: 576px) {
    .modal-dialog{
        max-width: 100% !important;
        
        margin-left: 8rem !important;
        margin-right: 8rem !important;
       
    }
}
</style>

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
                        <video src="<?php echo $value['image']; ?>" alt="" controls ></video>
                        <h3 style="text-align: center;"><?php echo $value['head']; ?></h3>
                        <div class="watch">
                        <button data-bs-toggle="modal" data-id="<?php echo $value['id']; ?>" data-bs-target="#video">Watch Video</button>
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



<!-- Modal -->
<div class="modal fade" id="video" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    <div class="modal-content videomodal">
        <div class="modal-body">
            <div class="gead">
                <h1>Title</h1>
            </div>
        <video src="<?php echo $value['image']; ?>" alt="" controls></video>
        </div>
        
    </div>
  </div>
</div>


