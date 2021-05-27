<div class="user_panel">
    <div class="container">
        <div class="row ">
            <div class="col-md-3">
                <div class="box">
                    <a href="<?php echo base_url() ?>profile"><button >Profile & Setting</button></a>
                    <a href="<?php echo base_url()?>donation-history"><button >Donation History</button></a>
                    <a href="<?php echo base_url()?>sponsor-history"><button class="active">Sponsor History</button></a>
                    <a href="<?php echo base_url()?>adopted-pet"><button >Adopted Pet</button></a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="box2">
                    <div class="head">
                        <h3>Sponsored Dog</h3>
                    </div>
                    <div class="box2_body user_table_new">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Date</th>
                                    <th>Pet Name</th>
                                    <th>Pet Age</th>
                                    <th>Pet Color</th>
                                    <th>Pet Gender</th>
                                    <th>Pet Breed</th>
                                    <th>Pet Image</th>
                                    <th>Amount</th>
                                    <th>Transection Id</th>
                                </tr>
                                <?php foreach($sponsor_history as $value){ if($value['email']==$_SESSION['email']){?>
                                <tr>
                                    <td><?php echo $value['date']?></td>
                                    <td><?php echo $value['p_name']?></td>
                                    <td><?php echo $value['p_age']?></td>
                                    <td><?php echo $value['p_color']?></td>
                                    <td><?php echo $value['p_gender']?></td>
                                    <td><?php echo $value['p_breed']?></td>
                                    <td><img src="<?php echo base_url()?>upload/dogcare/behave/<?php echo $value['p_image']?> " style="width: 100px; "></td>
                                    <td><?php echo $value['amount']?></td>
                                    <td><?php echo $value['order_id']?></td>
                                </tr>
                                <?php }else{ ?>
                                <tr>
                                    <td style="border: none !important;"></td>
                                    <td style="border: none !important;"></td>
                                    <td style="border: none !important;"></td>
                                    <td style="border: none !important;">No  History Found</td>
                                    <td style="border: none !important;"></td>
                                    <td style="border: none !important;"></td>
                                    <td style="border: none !important;"></td>
                                    <td style="border: none !important;"></td>
                                </tr>
                                <?php }}?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>