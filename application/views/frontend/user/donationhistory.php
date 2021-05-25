<div class="user_panel">
    <div class="container">
        <div class="row ">
            <div class="col-md-3">
                <div class="box">
                    <a href="<?php echo base_url() ?>profile"><button >Profile & Setting</button></a>
                    <a href="<?php echo base_url()?>donation-history"><button class="active">Donation History</button></a>
                    <button>Listed Dogs</button>
                </div>
            </div>
            <div class="col-md-9">
                <div class="box2">
                    <div class="head">
                        <h3>Donation History</h3>
                    </div>
                    <div class="box2_body user_table_new">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Transection Id</th>
                                </tr>
                                <?php foreach($donate_history as $value){ if($value['email']==$_SESSION['email']){?>
                                <tr>
                                    <td><?php echo $value['date']?></td>
                                    <td><?php echo $value['amount']?></td>
                                    <td><?php echo $value['order_id']?></td>
                                </tr>
                                <?php }else{ ?>
                                <tr>
                                    <td>No Donation History Found</td>
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