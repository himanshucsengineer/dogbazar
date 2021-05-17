<div class="adopt_pet_main_new"> 
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo @$blog->image ?>" alt="adopt pet">

                <div class="bottom_images">
                    <div class="cardimage">

                        <img src="<?php echo @$blog->image ?>" alt="adopt pet">
                    </div>
                    <?php for ($i = 1; $i < 5; $i++) {
                        $img = "image$i";
                        if (@$blog->$img != NULL) {  ?>
                            <div class="cardimage">

                                <img src="<?php echo @$blog->$img ?>" alt="adopt pet">
                            </div>

                     <?php }
                    } ?>

                </div>
            </div>
            <div class="col-md-6">
                <div class="right">
                    <h1><?php echo @$blog->name ?></h1>
                    <h5>Born Date: <span class="declar"><?php echo @$blog->b_date ?></span></h5>
                    <h5>Born Place: <span class="declar"><?php echo @$blog->b_place ?></span></h5>
                    <h5>Died Date: <span class="declar"><?php echo @$blog->d_date ?></span></h5>
                    <h5>Died Date:<span class="declar"><?php echo @$blog->d_place ?></span></h5>
                    
                
                </div>
            </div>
        </div>

        <div class="about">
            <h3>More Information About Dog:</h3>
            <hr>
            <p><?php echo @$blog->about ?></p>
        </div>
    </div>
    
    
</div>

