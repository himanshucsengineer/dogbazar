<div class="user_panel">
    <div class="container">
        <div class="row ">
            <div class="col-md-3">
                <div class="box">
                    <a href="<?php echo base_url() ?>profile"><button >Profile & Setting</button></a>
                    <a href="<?php echo base_url()?>donation-history"><button >Donation History</button></a>
                    <a href="<?php echo base_url()?>sponsor-history"><button >Sponsor History</button></a>
                    <a href="<?php echo base_url()?>adopted-pet" ><button class="active">Adopted Pet</button></a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="box2">
                    <div class="head">
                        <h3>Adopted Pet</h3>
                    </div>
                    <div class="box2_body user_table_new">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Date</th>
                                    <th>Pet Name</th>
                                    <th>Pet Breed</th>
                                    <th>Pet Color</th>
                                    <th>Pet Gender</th>
                                    <th>Pet Age</th>
                                    <th>Pet Image</th>
                                    <th>Status</th>

                                </tr>
                                <?php foreach($donate_history as $value){ if($value['email']==$_SESSION['email']){?>
                                <tr>
                                    <td><?php echo $value['date']?></td>
                                    <td><?php echo $value['p_name']?></td>
                                    <td><?php echo $value['breed']?></td>
                                    <td><?php echo $value['color']?></td>
                                    <td><?php echo $value['gender']?></td>

                                    <td><?php echo $value['age']?></td>
                                    <td><a href="<?php echo base_url()?>upload/listdog/<?php echo $value['p_image']?>">View Image</a></td>
                                    <td><?php if($value['account_status']==false){ echo "Pending";} else{echo $value['account_status'];}?></td>
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