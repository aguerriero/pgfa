<?php
$page = 'dashboard';
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
    <link href="css/front-end.css" rel="stylesheet">
    <link href="css/slide-push-menu.css" rel="stylesheet">
    <!-- Loading sidebar -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <link rel="shortcut icon" href="img/favicon.ico">

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
        
        <div id="page-content-wrapper o-wrapper" class="o-wrapper">

            <div class="container-fluid"> 
                <h4>Requests</h4>
          
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Serial #</th>
                                    <th>Status</th>
                                    <th><a href="#" data-toggle="tooltip" data-placement="top" title="What this means">Processed?</a></th>
                                    <th>Requester</th>
                                    <th>Campus</th>
                                    <th>Project Title</th>
                                    <th><span class="sr-only">Action</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="c-button">
                                    <th scope="row"><a href="#">003736</a></th>
                                    <td>Pending</td>
                                    <td>Processed</td>
                                    <td>Andrew Guerriero (ag725)</td>
                                    <td>Ithaca</td>
                                    <td>Testing</td>
                                    <td>
                                        <button type="button" id="c-button--push-right" class="btn btn-default btn-sm c-button">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        </button>
                                    </td>
                                </tr>  
                            </tbody>
                        </table>

                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#nav-menu-toggle" class="btn btn-default" id="nav-menu-toggle">Toggle Menu</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- /.container -->

        <!-- /#page-content-wrapper -->
        </div>

    <?php include('includes/details-sidebar.php') ?>
    <div id="c-mask" class="c-mask"></div>
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
    <script src="js/vendor/menu.js"></script>

    <!-- Menu Toggle Script -->
     <script>
        $("#nav-menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
      /**
       * Slide right instantiation and action.
       */
      var pushRight = new Menu({
        wrapper: '#wrapper',
        type: 'push-right',
        menuOpenerClass: '.c-button',
        maskId: '#c-mask'
      });

      var pushRightBtn = document.querySelector('#c-button--push-right');
      
      pushRightBtn.addEventListener('click', function(e) {
        e.preventDefault;
        pushRight.open();
      });
    </script>
</body>
</html>
