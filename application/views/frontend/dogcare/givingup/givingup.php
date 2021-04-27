<style>
    .petcare{
        width: 100%;
        height: auto;
        padding-top: 2rem;
        padding-bottom: 2rem;
    }
    .petcare button{
        width: 100%;
        height: auto;
        padding-top: .8rem;
        padding-bottom: .8rem;
        outline: none;
        border: none;
        border-bottom: 2px solid #cdcdcd;
    }
    .petcare .petcare_main{
        width: 100%;
        height: auto;
        padding-left: 2rem;

    }
    .petcare .petcare_main .petcare_head{
        width: 100%;
        height: auto;
        padding-top:1rem ;
        padding-bottom: 1rem;
        background-color: #d44444;
        border-radius: 6px;
        padding-left: 2rem;
        margin-bottom: 2rem;
    }
    .petcare .petcare_main .petcare_head h2{
        color: white;
        text-transform: uppercase;
    }
    .petcare .petcare_main .flex{
        width: 100%;
        height: auto;
        padding-top: 2rem;
        padding-bottom: 2rem;
        display: flex;
        flex-wrap: wrap;
    }
    .petcare .petcare_main .flex .card{
        width: 33.33%;
        height: auto;
        border: none !important;
        padding: 1rem;
    }
    .petcare .petcare_main .flex .card .inner_card{
        border: 1px solid #cdcdcd;
    }
    .petcare .petcare_main .flex .card .inner_card .inner_text{
        margin-left: 1rem;
        margin-right: 1rem;
    }
    .petcare .petcare_main .flex .card img{ 
        width: 100%;
        margin-bottom: 1rem;
    }
    .petcare .navi{
        width: 100%;
        height: auto;
        margin-top: 2rem;
        margin-bottom: 2rem;
    }
    .petcare .box{
        width: 100%;
        height: auto;
        border: 1px solid #cdcdcd;
        background-color: white;
    }
    .petcare .box button{
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        padding-left: 1.5rem;
        color: #575757;
        background-color: transparent;
        border: none;
        border-bottom: 1px solid #cdcdcd;
        outline: none;
        text-align: left;
        font-weight: 600;
        transition: .5s;
        font-size: 1.7rem;
    }
    .petcare .box button:hover{
        color: #d44444;
        border-bottom: 1px solid #d44444;
    }
</style>
<div class="petcare">
    <div class="container">
        <p class="navi">Home/ Behaviour</p>
    <div class="row">
        <div class="col-md-3">
            <div class="box">
            <button>Behaviour</button>
            <button>Training</button>
            <button>Giving Up Your Dog</button>
            <button>Getting A Dog</button>
            </div>
        </div>
        <div class="col-md-9">
            <div class="petcare_main">
                <div class="petcare_head">
                    <h2>Giving Up Your Dog</h2>
                </div> 
                <h4>The key to a good dog is a well-trained dog. When you train together, an unspoken language builds between you through words, hand signals, whistles and other methods. Test your training skills.</h4>   
                <div class="flex">
                    <?php foreach($blogs as $value) {?>
                        
                    <div class="card">
                    <a href="<?php echo base_url() . "givingup/" . $value['link'] ?>">
                        <div class="inner_card">
                        <img src="<?php echo $value['image'];?>">
                        <div class="inner_text">
                            <h5><?php echo $value['cate'];?></h5>
                            <h3><?php echo $value['head'];?></h3>
                        </div>   
                        </div>
                        </a>
                    </div>
                   
                    <?php }?>
                    
                </div>
            </div>
        </div>
    </div>
    </div>
</div>