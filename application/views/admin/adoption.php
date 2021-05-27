<link href="<?php echo base_url(); ?>admin/assets/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>admin/assets/css/core.css" rel="stylesheet" type="text/css" />

<script src="<?php echo base_url(); ?>admin/assets/js/jquery.dataTables.min.js"></script>


<style type="text/css">
    a.edit {
        display: none;
    }

    img {
        width: 80px;
    }

    .btn-group,
    .btn-group-vertical {
        float: right;
    }

    .btn {
        color: #4e73df;
    }

    #lowinventory_filter label {
        color: grey;
        font-size: 15px;
    }

    #lowinventory_filter input[type=search] {
        border: 1px solid grey;
        outline: none;
        padding: 5px;
        font-size: 15px;
        margin-right: 5px;
    }

    .buu {
        width: 15rem;
        color: white !important;
        background-color: rgb(239, 69, 84);
        border: none;
        outline: none !important;
        padding-top: 1rem;
        padding-bottom: 1rem;
        font-size: 14px;
        margin-bottom: 1rem;
    }
</style>

<div class="all_post">
    <div class="container">
        <h3>Adoption Request</h3>
        <hr>

        <?php
        if ($this->session->flashdata('success')) {
            echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
        } else if ($this->session->flashdata('error')) {
            echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
        }


        ?>
      

            <div class="row">
                <div class="col-md-12">

                    <div class="card-box table-responsive">

                        <table id="lowinventory" data-order='[[ 0, "desc" ]]' style="width:100%" class="table table-striped table-bordered table_shop_custom display">
                            <thead>
                                <tr>

                                    <th>Sr. No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Number</th>
                                    <th>User Address</th>
                                    <th>Id Front</th>
                                    <th>Id Back</th>


                                    <th>House</th>
                                    <th>Plan To relocate</th>
                                    <th>Plan With Adopted pet</th>
                                    <th>Why Want To Adopt</th>
                                    <th>Why Explain</th>
                                    <th>Pet In Past</th>
                                    <th>Spent time</th>
                                    <th>Left Alone pet</th>
                                    <th>Alone Time</th>
                                    <th>Occupation</th>
                                    <th>Responsible Person</th>
                                    <th>Person Contact</th>
                                    <th>Pet Name</th>
                                    <th>Pet Unique Id</th>
                                    <th>Pet Color</th>
                                    <th>Pet Age</th>
                                    <th>Pet Breed</th>
                                    <th>Pet Gender</th>
                                    <th>Pet Location</th>
                                    <th>Pet Image</th>
                                    <th>Status</th>

                                    <th>Choose Action</th>
                                    <th>Change Status</th>
                                </tr>

                            </thead>
                            <tbody>
                                <?php foreach ($list as $value) { ?>
                                    <?php $sts = $value['account_status'];?>
                                   
                                    
                                        <tr>
                                        <form action="<?php echo base_url(); ?>admin/adoption/update_bank/<?php echo $value['id']; ?>" method="post">
                                        <input type="hidden" value="<?php echo $value['name']; ?>" name="u_name">
                                    <input type="hidden" value="<?php echo $value['email']; ?>" name="u_email">  
                                    <input type="hidden" value="<?php echo $value['number']; ?>" name="u_mob">
                                    <input type="hidden" value="<?php echo $value['address']; ?>" name="u_add">
                                    <input type="hidden" value="<?php echo $value['image']; ?>" name="front">
                                    <input type="hidden" value="<?php echo $value['image1']; ?>" name="back">
                                    <input type="hidden" value="<?php echo $value['occu']; ?>" name="u_occu">
                                    <input type="hidden" value="<?php echo $value['res_name']; ?>" name="re_name">
                                    <input type="hidden" value="<?php echo $value['res_mob']; ?>" name="re_mob">
                                    <input type="hidden" value="<?php echo $value['p_name']; ?>" name="pet_name">
                                    <input type="hidden" value="<?php echo $value['color']; ?>" name="pet_color">
                                    <input type="hidden" value="<?php echo $value['age']; ?>" name="pet_age">
                                    <input type="hidden" value="<?php echo $value['breed']; ?>" name="pet_breed">
                                    <input type="hidden" value="<?php echo $value['gender']; ?>" name="pet_gender">
                                    <input type="hidden" value="<?php echo $value['city']; ?>" name="pet_city">
                                    <input type="hidden" value="<?php echo $value['p_image']; ?>" name="pet_image">    
                                    <input type="hidden" value="<?php echo $value['uniq_id']; ?>" name="pet_uniq_id">
                                        
                                        <td><?php echo $value['id']; ?></td>
                                            <td><?php echo $value['name']; ?></td>
                                            <td><?php echo $value['email']; ?></td>
                                            <td><?php echo $value['number']; ?></td>
                                            <td><?php echo $value['address']; ?></td>
                                            <td><a href="<?php echo base_url()?>upload/adoptionform/<?php echo $value['image']?>" target="_blank">View Image</a></td>
                                            <td><a href="<?php echo base_url()?>upload/adoptionform/<?php echo $value['image1']?>" target="_blank">View Image</a></td>
                                            <td><?php echo $value['house']; ?></td>
                                            <td><?php echo $value['change_location']; ?></td>
                                            <td><?php echo $value['change_location_ex']; ?></td>
                                            <td><?php echo $value['why']; ?></td>
                                            <td><?php echo $value['why_ex']; ?></td>
                                            <td><?php echo $value['past']; ?></td>
                                            <td><?php echo $value['time']; ?></td>
                                            <td><?php echo $value['alone']; ?></td>
                                            <td><?php echo $value['alone_ex']; ?></td>
                                            <td><?php echo $value['occu']; ?></td>
                                            <td><?php echo $value['res_name']; ?></td>
                                            <td><?php echo $value['res_mob']; ?></td>
                                            <td><?php echo $value['p_name']; ?></td>
                                            <td><?php echo $value['uniq_id']; ?></td>
                                            <td><?php echo $value['color']; ?></td>
                                            <td><?php echo $value['age']; ?></td>
                                            <td><?php echo $value['breed']; ?></td>

                                            <td><?php echo $value['gender']; ?></td>
                                            <td><?php echo $value['city']; ?></td>
                                            <td><a href="<?php echo base_url()?>upload/listdog/<?php echo $value['p_image']?>" target="_blank">View Image</a></td>
                                            <td><?php echo ($value['account_status'] == false) ? "<span class='text-white badge badge-warning'>New Adopt Request</span>" : "<span class='text-white badge badge-success'>$sts</span>"; ?></td>
                                          
                                            <td><select name="action">
                                                    <option value="">Select Action</option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Approved">Approved</option>
                                                    <option value="Decline">Decline</option>
                                                </select></td>
                                            <td><button class="btn btn-success ">Change Status</button></td>
                                            </form>
                                        </tr>
                                    
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
      
    </div>
</div>






<!--Delete-->

<!--Delete-->

<div id="deletePurchaseModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <?php echo form_open(base_url('admin/adoption/deleteuserdetail'), array('method' => 'post')); ?>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
                <h4 class="modal-title">Delete Course</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <input type="hidden" class="deletesliderId" name="deletesliderId" />
                        <h4><b>Do you really want to Delete this Course ?</b></h4>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-info" name="deleteslider" value="Delete">
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#lowinventory').DataTable({

        });


        $(document).on('click', '.delete_sliders', function() {

            $('.deletesliderId').val($(this).attr('data-id'));
            $('#deletePurchaseModal').modal('show');

        });

    });
</script>