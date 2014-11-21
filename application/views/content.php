<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
    <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol> -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>
                        <?php echo $total_events;?>
                    </h3>
                    <p>
                        Total Events
                    </p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>
                        53<sup style="font-size: 20px">%</sup>
                    </h3>
                    <p>
                        Previous Events Stats
                    </p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>
                        <?php echo $total_users;?>
                    </h3>
                    <p>
                        Total Users
                    </p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>
                        65
                    </h3>
                    <p>
                        Unique Visitors
                    </p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div><!-- ./col -->
    </div><!-- /.row -->

    <div class="row">
                        <div class="col-md-6">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Latest Five Events</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <table class="table table-bordered">
                                        <tbody><tr>
                                            <th style="width: 10px">#</th>
                                            <th>Task</th>
                                            <th>Progress</th>
                                            <th style="width: 40px">Label</th>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Update software</td>
                                            <td>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-red">55%</span></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Clean database</td>
                                            <td>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-yellow">70%</span></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Cron job running</td>
                                            <td>
                                                <div class="progress xs progress-striped active">
                                                    <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-light-blue">30%</span></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Fix and squish bugs</td>
                                            <td>
                                                <div class="progress xs progress-striped active">
                                                    <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-green">90%</span></td>
                                        </tr>
                                    </tbody></table>
                                </div><!-- /.box-body -->
                                <div class="box-footer clearfix">
                                    <ul class="pagination pagination-sm no-margin pull-right">
                                        <li><a href="#">«</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">»</a></li>
                                    </ul>
                                </div>
                            </div><!-- /.box -->

                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Latest Five Comments</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <table class="table table-condensed">
                                        <tbody><tr>
                                            <th style="width: 10px">#</th>
                                            <th>Task</th>
                                            <th>Progress</th>
                                            <th style="width: 40px">Label</th>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Update software</td>
                                            <td>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-red">55%</span></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Clean database</td>
                                            <td>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-yellow">70%</span></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Cron job running</td>
                                            <td>
                                                <div class="progress xs progress-striped active">
                                                    <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-light-blue">30%</span></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Fix and squish bugs</td>
                                            <td>
                                                <div class="progress xs progress-striped active">
                                                    <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-green">90%</span></td>
                                        </tr>
                                    </tbody></table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                        <div class="col-md-6">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Latest Five Users</h3>
                                    <div class="box-tools">
                                        <ul class="pagination pagination-sm no-margin pull-right">
                                            <li><a href="#">«</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <table class="table">
                                        <tbody><tr>
                                            <th style="width: 10px">#</th>
                                            <th>Task</th>
                                            <th>Progress</th>
                                            <th style="width: 40px">Label</th>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Update software</td>
                                            <td>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-red">55%</span></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Clean database</td>
                                            <td>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-yellow">70%</span></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Cron job running</td>
                                            <td>
                                                <div class="progress xs progress-striped active">
                                                    <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-light-blue">30%</span></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Fix and squish bugs</td>
                                            <td>
                                                <div class="progress xs progress-striped active">
                                                    <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-green">90%</span></td>
                                        </tr>
                                    </tbody></table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Striped Full Width Table</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <table class="table table-striped">
                                        <tbody><tr>
                                            <th style="width: 10px">#</th>
                                            <th>Task</th>
                                            <th>Progress</th>
                                            <th style="width: 40px">Label</th>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Update software</td>
                                            <td>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-red">55%</span></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Clean database</td>
                                            <td>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-yellow">70%</span></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Cron job running</td>
                                            <td>
                                                <div class="progress xs progress-striped active">
                                                    <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-light-blue">30%</span></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Fix and squish bugs</td>
                                            <td>
                                                <div class="progress xs progress-striped active">
                                                    <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-green">90%</span></td>
                                        </tr>
                                    </tbody></table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div>

    <!-- Main row -->
    

</section>
<!-- /.content -->