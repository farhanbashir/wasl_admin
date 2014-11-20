<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Events
<!--        <small>preview of simple tables</small>-->
    </h1>
<!--
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Simple</li>
    </ol>
-->
</section>

<!-- Main content -->
<section class="content">
    
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
<!--                    <h3 class="box-title">Sample Table</h3>-->
                    <div class="box-tools">
                        <div class="input-group">
                            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>Name</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Address</th>
                            <th>Creator</th>
                            <th>Status</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        foreach($events as $event)
                        {
                        ?>    
                        <tr>
                            <td><?php echo $event['name'];?></td>
                            <td><?php echo $event['start_date'];?></td>
                            <td><?php echo $event['end_date'];?></td>
                            <td><?php echo $event['address'];?></td>
                            <td><?php echo $event['first_name'].' '.$event['last_name'];?></td>
                            <td><span class="label label-success">Approved</span></td>
                            <td><?php echo $event['description'];?></td>
                            <td>
                                <a href="<?php echo base_url();?>/index.php/welcome/event_detail/<?php echo $event['id'];?>">View</a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
<!--
                        <tr>
                            <td>219</td>
                            <td>Jane Doe</td>
                            <td>11-7-2014</td>
                            <td>11-7-2014</td>
                            <td>11-7-2014</td>
                            <td><span class="label label-warning">Pending</span></td>
                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                        </tr>
                        <tr>
                            <td>657</td>
                            <td>Bob Doe</td>
                            <td>11-7-2014</td>
                            <td>11-7-2014</td>
                            <td>11-7-2014</td>
                            <td><span class="label label-primary">Approved</span></td>
                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                        </tr>
                        <tr>
                            <td>175</td>
                            <td>Mike Doe</td>
                            <td>Mike Doe</td>
                            <td>Mike Doe</td>
                            <td>11-7-2014</td>
                            <td><span class="label label-danger">Denied</span></td>
                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                        </tr>
-->
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
</section><!-- /.content -->