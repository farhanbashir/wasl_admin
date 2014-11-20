<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <p class="lead"><?php echo ucfirst($detail['first_name'].' '.$detail['last_name']);?></p>
            <div class="table-responsive">
                <table class="table">
                    <tbody><tr>
                        <th style="width:50%">First Name:</th>
                        <td><?php echo $detail['first_name'];?></td>
                        </tr>
                        <tr>
                            <th>Last Name:</th>
                            <td><?php echo $detail['last_name'];?></td>
                        </tr>
                        <tr>
                            <th>Username:</th>
                            <td><?php echo $detail['username'];?></td>
                        </tr>
                        <tr>
                            <th>Gender:</th>
                            <td><?php echo $detail['gender'];?></td>
                        </tr>
                        <tr>
                            <th>Phone:</th>
                            <td><?php echo $detail['phone'];?></td>
                        </tr>
                        <tr>
                            <th>Status:</th>
                            <td><?php echo $detail['status'];?></td>
                        </tr>
                        <tr>
                            <th>Personal Email:</th>
                            <td><?php echo $detail['personal_email'];?></td>
                        </tr>
                        <tr>
                            <th>Company Email:</th>
                            <td><?php echo $detail['company_email'];?></td>
                        </tr>
                        <tr>
                            <th>Date of Birth:</th>
                            <td><?php echo $detail['date_of_birth'];?></td>
                        </tr>
                        <tr>
                            <th>Designation:</th>
                            <td><?php echo $detail['designation'];?></td>
                        </tr>
                        <tr>
                            <th>Office Number:</th>
                            <td><?php echo $detail['office_no'];?></td>
                        </tr>
                    </tbody></table>
            </div>
        </div>
    </div>
</section><!-- /.content -->