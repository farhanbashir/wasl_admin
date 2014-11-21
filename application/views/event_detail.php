<!-- Main content -->
<section class="content">
    
    <div class="row">
        <div class="col-xs-12">
            <p class="lead"><?php echo ucfirst($detail['name']);?></p>
            <div class="table-responsive">
                <table class="table">
                    <tbody><tr>
                        <th style="width:50%">Name:</th>
                        <td><?php echo $detail['name'];?></td>
                        </tr>
                        <tr>
                            <th>Start Date:</th>
                            <td><?php echo $detail['start_date'];?></td>
                        </tr>
                        <tr>
                            <th>End Date:</th>
                            <td><?php echo $detail['end_date'];?></td>
                        </tr>
                        <tr>
                            <th>Address:</th>
                            <td><?php echo $detail['address'];?></td>
                        </tr>
                        <tr>
                            <th>Created Date:</th>
                            <td><?php echo $detail['created_date'];?></td>
                        </tr>
                        <tr>
                            <th>Creator:</th>
                            <td>
                                <a href="<?php echo base_url();?>/index.php/welcome/user_detail/<?php echo $detail['user_id'];?>">
                                <?php echo ucfirst($detail['first_name'].' '.$detail['last_name']);?>
                                </a>    
                            </td>
                        </tr>
                        <tr>
                            <th>Attendees:</th>
                            <td>
                                <a href="<?php echo base_url();?>/index.php/welcome/event_users/<?php echo $detail['id'];?>">
                                View List
                                </a>    
                            </td>
                        </tr>
                        <tr>
                            <th>Description:</th>
                            <td><?php echo $detail['description'];?></td>
                        </tr>
                    </tbody></table>
            </div>
        </div>
    </div>
</section><!-- /.content -->