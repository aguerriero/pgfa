<?php
$page = 'view-request-admin';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CALS PGFA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="css/flat-ui.css" rel="stylesheet">

    <!-- Loading custom styles -->
    <link href="css/pgfa.css" rel="stylesheet">

    <!-- Loading sidebar -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <link rel="shortcut icon" href="img/favicon.ico">

    <script>
    $('.datepicker').datepicker();
    </script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="js/vendor/html5shiv.js"></script>
    <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <!-- APPLICATION HEADER -->
    <?php include('includes/application-header.php') ?>    

    <div id="wrapper">

        <?php include('includes/nav-sidebar.php') ?>  
        
        <div id="page-content-wrapper">

            <div class="container-fluid"> 
                <h4>View Request: 003736</h4>
          
                <div class="row">
                    <div class="col-md-12">

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="requestor">Requestor</label>
                                <input class="form-control" type="text" id="requestor" placeholder="Guerriero, Andrew (ag725)"/>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="projectleaders">Project Leader</label>
                                <input class="form-control" type="text" id="projectleader" placeholder="Guerriero, Andrew (ag725)"/>
                            </div>
                        </div>

                        <div><a href="#">Expand all | Collapse all</a></div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title" data-toggle="collapse" href="#projectinformation" aria-expanded="false" aria-controls="collapseExample">
                                1 - Project Information
                                </h3>
                            </div>
                            <div class="collapse in" id="projectinformation">
                                <div class="panel-body">
                                    <form>
                                        <div class="form-group">
                                        <label for="projecttype">Project Type</label><br>                                         
                                        <label class="radio-inline">
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Teaching
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Research
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Other
                                        </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="projecttitle">Project Title</label>
                                            <select class="form-control">
                                                <option>Last Used Project Title</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Brief Project Description (500-character maximum)</label>                                          
                                            <textarea rows="2" class="form-control" id="description"> </textarea>
                                        </div>
                                        <div class="form-group"> 
                                        <label>Project Start Date</label>
                                            <div class="input-group"> 
                                            <input class="form-control" type="text" placeholder="mm/dd/yyyy"> 
                                            <div class="input-group-btn"><button type="button" class="btn btn-default">
                                            <span class="glyphicon glyphicon-th"></span></button></div> </div> 
                                        </div>
                                        <div class="form-group"> 
                                        <label>Project End Date</label>
                                            <div class="input-group"> 
                                            <input class="form-control" type="text" placeholder="mm/dd/yyyy"> 
                                            <div class="input-group-btn"><button type="button" class="btn btn-default">
                                            <span class="glyphicon glyphicon-th"></span></button></div> </div> 
                                        </div>
                                        <div class="form-group">
                                            <label for="comments">Comments</label>                                          
                                            <textarea rows="2" class="form-control" id="comments"> </textarea>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title" data-toggle="collapse" href="#facilityinformation" aria-expanded="false" aria-controls="collapseExample">
                                2 - Facility Information
                                </h3>
                            </div>
                            <div class="collapse" id="facilityinformation">
                                <div class="panel-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="projecttitle">Project Title</label>
                                            <select class="form-control">
                                                <option>Last Used Project Title</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Brief Project Description (500-character maximum)</label>                                          
                                            <textarea rows="1" class="form-control" id="description"> </textarea>
                                        </div>
                                        <div class="form-group"> 
                                        <label>Project Start Date</label>
                                            <div class="input-group"> 
                                            <input class="form-control" type="text" placeholder="mm/dd/yyyy"> 
                                            <div class="input-group-btn"><button type="button" class="btn btn-default">
                                            <span class="glyphicon glyphicon-th"></span></button></div> </div> 
                                        </div>
                                        <div class="form-group"> 
                                        <label>Project End Date</label>
                                            <div class="input-group"> 
                                            <input class="form-control" type="text" placeholder="mm/dd/yyyy"> 
                                            <div class="input-group-btn"><button type="button" class="btn btn-default">
                                            <span class="glyphicon glyphicon-th"></span></button></div> </div> 
                                        </div>
                                        <div class="form-group">
                                            <label for="comments">Comments</label>                                          
                                            <textarea rows="2" class="form-control" id="comments"> </textarea>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title" data-toggle="collapse" href="#contactinformation" aria-expanded="false" aria-controls="collapseExample">
                                3 - Contact Information
                                </h3>
                            </div>
                            <div class="collapse" id="contactinformation">
                                <div class="panel-body">
                                <form>
                                    <div class="form-group">
                                        <label for="projecttitle">Project Title</label>
                                        <select class="form-control">
                                            <option>Last Used Project Title</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Brief Project Description (500-character maximum)</label>                                          
                                        <textarea rows="1" class="form-control" id="description"> </textarea>
                                    </div>
                                    <button type="button" class="btn btn-primary">Add Contact</button>
                                </form>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                Occupancies
                                </h3>
                            </div>
                                <div class="panel-body">
                                <br><br><br><br><br><br>
                                </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-default">Cancel</button>
                        <button type="button" class="btn btn-default">Map...</button>
                    </div>
                </div>

            </div>
            <!-- /.container -->

        <!-- /#page-content-wrapper -->
        </div>


    </div>
    <!-- /#wrapper -->

    <!-- MODAL INCLUDES -->
    <?php include ('includes/modal-example.php') ?>

    <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <script src="js/vendor/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/vendor/video.js"></script>
    <script src="js/vendor/respond.min.js"></script>
    <script src="js/flat-ui.min.js"></script>
    <script src="js/radiocheck.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>
</html>
