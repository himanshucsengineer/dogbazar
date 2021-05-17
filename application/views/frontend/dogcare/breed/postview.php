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
                    <h5>Temperament: <span class="declar"><?php echo @$blog->temp ?></span></h5>
                    <h5>Height: <span class="declar"><?php echo @$blog->height ?></span></h5>
                    <h5>Weight: <span class="declar"><?php echo @$blog->weight ?></span></h5>
                    <h5>Life Expectancy:<span class="declar"><?php echo @$blog->exp ?></span></h5>
                    <h5>Group:<span class="declar"><?php echo @$blog->grp ?></span></h5>
                
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

