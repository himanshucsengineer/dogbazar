<?php $vallll = @$blog->image;
$lasttt = basename($vallll);
$exttt = explode('.', $lasttt);
if ($exttt[1] == "mp4") {
    $videotagmain = '<video src="' . @$blog->image . '" controls ></video>';
} else {
    $videotagmain = '<img src="' . @$blog->image . '" >';
} ?>
<div class="postview_new">
    <div class="navi">
        <div class="container">
            <h4><a href="<?php echo base_url() ?>">Home</a> > <a href="<?php echo base_url() ?>givingup">Dog care > Giving Up Your Dog</a> > <?php echo @$blog->head ?></h4>
        </div>
    </div>
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
                            $videotagrecent = '<video src="' . @$recent->image . '"  ></video>';
                        } else {
                            $videotagrecent = '<img src="' . @$recent->image . '" >';
                        } ?>
                        <a href="<?php echo base_url() . "givingup/" . @$recent->link ?>">
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
                            $videotagrelated = '<video src="' . @$rel->image . '"  ></video>';
                        } else {
                            $videotagrelated = '<img src="' . @$rel->image . '" >';
                        } ?>
                        <a href="<?php echo base_url() . "givingup/" . @$rel->link ?>">
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