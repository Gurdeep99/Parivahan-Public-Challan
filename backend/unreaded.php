<?php

include "assets/db_conn.php";

$query_unreaded = mysqli_query($mysqli, "SELECT * FROM `challans_feb_24` WHERE `action` = 'unreaded'");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Datatable -->
    <link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="./css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">



        <?php include "assets/components/nav-link.php"; ?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">

                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Unreaded Challans</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Challan Id</th>
                                                <th>Vehicle Number</th>
                                                <th>Vehicle Type</th>
                                                <th>Offence Type</th>
                                                <th>Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>


                                        <?php while($res_unreaded = mysqli_fetch_array($query_unreaded)){ ?>
                                                <td><?php echo $res_unreaded['challan_id'];?></td>
                                                <td><?php echo $res_unreaded['vehical_number'];?></td>
                                                <td><?php echo $res_unreaded['vehical_type'];?></td>
                                                <td><?php echo $res_unreaded['offence'];?></td>
                                                <td><?php echo $res_unreaded['date'];?></td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-primary btn-xs" data-toggle="modal" data-target=".bd-example-modal-lg">Action</button>
                                                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Modal title</h5>
                                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="d-flex">
                                                                        <div class="w-50">
                                                                            <img style="width: 100%; " src="<?php echo $res_unreaded['img'];?>" alt="">
                                                                        </div>
                                                                        <div class="w-50 pl-4">
                                                                            <div class="card">
                                                                                <div class="card-header">
                                                                                    <h4 class="card-title">Input Style</h4>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="basic-form">
                                                                                        <form>
                                                                                            <div class="form-group">
                                                                                                <div class="form-group row">
                                                                                                    <label class="col-sm-4 col-form-label col-form-label-lg ">Challan Id</label>
                                                                                                    <div class="col-sm-8">
                                                                                                        <input type="text" disabled class="form-control form-control-lg" value="<?php echo $res_unreaded['challan_id'];?>" placeholder="col-form-label-lg">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <div class="form-group row">
                                                                                                    <label class="col-sm-4 col-form-label col-form-label-lg">Vehicle Number</label>
                                                                                                    <div class="col-sm-8">
                                                                                                        <input type="text" disabled class="form-control form-control-lg" value="<?php echo $res_unreaded['vehical_number'];?>" placeholder="col-form-label-lg">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <div class="form-group row">
                                                                                                    <label class="col-sm-4 col-form-label col-form-label-lg">Vehicle Type</label>
                                                                                                    <div class="col-sm-8">
                                                                                                        <input type="text" disabled class="form-control form-control-lg" value="<?php echo $res_unreaded['vehical_type'];?>" placeholder="col-form-label-lg">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <div class="form-group row">
                                                                                                    <label class="col-sm-4 col-form-label col-form-label-lg">Offence Type</label>
                                                                                                    <div class="col-sm-8">
                                                                                                        <input type="text" disabled class="form-control form-control-lg" value="<?php echo $res_unreaded['offence'];?>" placeholder="col-form-label-lg">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <div class="form-group row">
                                                                                                    <label class="col-sm-4 col-form-label col-form-label-lg">Date</label>
                                                                                                    <div class="col-sm-8">
                                                                                                        <input type="text" disabled class="form-control form-control-lg" value="<?php echo $res_unreaded['date'];?>" placeholder="col-form-label-lg">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <div class="form-group row">
                                                                                                    <label class="col-sm-4 col-form-label col-form-label-lg">Location</label>
                                                                                                    <div class="col-sm-8">
                                                                                                        <input type="text" disabled class="form-control form-control-lg" value="<?php echo $res_unreaded['location'];?>" placeholder="col-form-label-lg">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <div class="form-group row">
                                                                                                    <label class="col-sm-4 col-form-label col-form-label-lg">Filled By</label>
                                                                                                    <div class="col-sm-8">
                                                                                                        <input type="text" disabled class="form-control form-control-lg" value="<?php echo $res_unreaded['filled_by'];?>" placeholder="col-form-label-lg">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <div class="form-check">
                                                                                                    <input class="form-check-input" type="checkbox">
                                                                                                    <label class="form-check-label">
                                                                                                        Are you sure for Doing that Action!
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <table class="table table-bordered verticle-middle table-responsive-sm">
                                                                                                    <thead>
                                                                                                        <tr>
                                                                                                            <th scope="col">Task</th>
                                                                                                            <th scope="col">Progress</th>
                                                                                                            <th scope="col">Deadline</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td><button type="button" class="btn btn-success">Accept Challan</button></td>
                                                                                                            <td><button type="button" class="btn btn-danger">Reject Challan</button></td>
                                                                                                            <td><button type="button" class="btn btn-warning">Report Challan</button></td>
                                                                                                        </tr>



                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>


                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </td>

                                                <?php }?>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->




    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>



    <!-- Datatable -->
    <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="./js/plugins-init/datatables.init.js"></script>

</body>

</html>