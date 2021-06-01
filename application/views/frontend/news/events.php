<div class="news_main events_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>All Upcoming Events</h3>
            </div>
            <div class="col-md-6">
                <p><a href="<?php echo base_url() ?>"><span class="acc">Home</a></span> / <a href="<?php echo base_url() ?>events">Events</a></p>
            </div>
        </div>
    </div>
</div>

<div class="events_main">
    <div class="container">
        <h4 class="top_heading_events">All Events</h4>
        <?php foreach($events as $value){ $date = $value['date']; $finaldate = explode("/",$date)?>
        <div class="flex">
            <div class="left">
                <div class="calendor">
                    
                        <div class="month">
                            <?php echo $finaldate[1]?>
                        </div>
                        <div class="date">
                            <?php echo $finaldate[0]?>
                        </div>
                 
                </div>
            </div>
            <div class="mid">
                <h1><?php echo $value['name']?></h1>
                <div class="mid_date">
                    <div class="date_full">
                        <p><i class="event_fa far fa-clock"></i> <?php echo $finaldate[0]?> <span class="date_mohnt"><?php echo $finaldate[1]?> <?php echo $finaldate[2]?></span></p>
                    </div>
                    <div class="location_full">
                        <p><i class="event_fa fas fa-map-marker-alt"></i> <?php echo $value['location']?></p>
                    </div>
                </div>
                <h5><span class="orgenid">Organizer:</span><?php echo $value['orge']?></h5>
            </div>
            <div class="right">
                <a href="<?php echo $value['link']?>" target="_blank"><button>View Event <i class="evenet_viw fas fa-external-link-alt"></i></button></a>
            </div>
        </div>
        <?php }?>
    </div>
</div>