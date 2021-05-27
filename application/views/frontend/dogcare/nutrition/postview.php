<?php $vallll = @$blog->image;
$lasttt = basename($vallll);
$exttt = explode('.', $lasttt);
if ($exttt[1] == "mp4") {
    $videotagmain = '<video src="'.base_url().'upload/dogcare/nutrition/' . @$blog->image . '" controls ></video>';
} else {
    $videotagmain = '<img src="'.base_url().'upload/dogcare/nutrition/' . @$blog->image . '" >';
} ?>

<div class="news_main nutri_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Nutrition For Dogs</h3>
            </div>
            <div class="col-md-6">
                <p><a href="<?php echo base_url() ?>"><span class="acc">Home</a></span> / <a href="<?php echo base_url() ?>nutrition">Dog Care / Nutrition</a> / <?php echo @$blog->head ?></p>
            </div>
        </div>
    </div>
</div>


<div class="postview_new">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog_left">
                    <h3><?php echo @$blog->head ?></h3>
                    <h6><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo @$blog->date ?></h6>
                    <?php echo $videotagmain; ?>
                    <p><?php echo @$blog->content ?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <div class="top_side_head">
                        <div class="left">
                            <h3>Recent post</h3>
                        </div>
                        <div class="right">
                            <hr class="top_side_hori">
                        </div>
                    </div>
                    <?php foreach ($recents as $recent) { ?>
                        <?php $vall = @$recent->image;
                        $last = basename($vall);
                        $ext = explode('.', $last);
                        if ($ext[1] == "mp4") {
                            $videotagrecent = '<video src="'.base_url().'upload/dogcare/nutrition/' . @$recent->image . '"  ></video>';
                        } else {
                            $videotagrecent = '<img src="'.base_url().'upload/dogcare/nutrition/' . @$recent->image . '" >';
                        } ?>
                        <a href="<?php echo base_url() . "nutrition/" . @$recent->link ?>">
                            <div class="post_side_head">
                                <div class="left">
                                    <?php echo $videotagrecent ?>
                                </div>
                                <div class="right">
                                    <h4><?php echo @$recent->head ?> </h4>
                                </div>
                            </div>
                        </a>
                    <?php } ?>

                </div>



                <div class="box">
                    <div class="top_side_head">
                        <div class="left">
                            <h3>Related post</h3>
                        </div>
                        <div class="right">
                            <hr class="top_side_hori">
                        </div>
                    </div>
                    <?php foreach ($releted as $rel) { ?>
                        <?php if ($rel->id != $blog->id); ?>
                        <?php $valll = @$rel->image;
                        $lastt = basename($valll);
                        $extt = explode('.', $lastt);
                        if ($extt[1] == "mp4") {
                            $videotagrelated = '<video src="'.base_url().'upload/dogcare/nutrition/' . @$rel->image . '"  ></video>';
                        } else {
                            $videotagrelated = '<img src="'.base_url().'upload/dogcare/nutrition/' . @$rel->image . '" >';
                        } ?>
                        <a href="<?php echo base_url() . "nutrition/" . @$rel->link ?>">
                            <div class="post_side_head">
                                <div class="left">
                                    <?php echo $videotagrelated; ?>
                                </div>
                                <div class="right">
                                    <h4><?php echo @$rel->head ?> </h4>
                                </div>
                            </div>
                        </a>
                    <?php } ?>


                </div>


            </div>
        </div>
    </div>
</div>