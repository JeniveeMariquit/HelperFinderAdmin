<?php 
    include 'header.php';
?>
    <body>
    <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">Edmin </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="users.php"><i class="menu-icon icon-user"></i>Users
                                </a></li>
                                <li><a href="messages.php"><i class="menu-icon icon-envelope"></i>Messages</a>
                                </li>
                                <li><a href="jobs.php"><i class="menu-icon icon-tasks"></i>Jobs</a></li>
                                <li><a href="applicants.php"><i class="menu-icon icon-group"></i>Applicants </a></li>

                                    <li><a href="ratings.php"><i class="menu-icon icon-star"></i>Ratings </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                           
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                            <!--/#btn-controls-->
                            
                            <!--/.module-->
                            <div class="module hide">
                                <div class="module-head">
                                    <h3>
                                        Adjust Budget Range</h3>
                                </div>
                                <div class="module-body">
                                    <div class="form-inline clearfix">
                                        <a href="#" class="btn pull-right">Update</a>
                                        <label for="amount">
                                            Price range:</label>
                                        &nbsp;
                                        <input type="text" id="amount" class="input-" />
                                    </div>
                                    <hr />
                                    <div class="slider-range">
                                    </div>
                                </div>
                            </div>

                            <div class="module">
                                <div class="module-head">
                                    <h3 id="test">
                                        User Messages Record</h3>
                                </div>
                                <div class="module-body table">
                                    <table id="emp_table" cellpadding="0" cellspacing="0" border="0" class=" table table-bordered table-striped"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                   Content
                                                </th>
                                                <th>
                                                    Sent ID
                                                </th>
                                                <th>
                                                   Sent By
                                                </th>
                                                <th>
                                                    Date Sent
                                                </th>
                                                <th>
                                                    Message Number
                                                </th>
                                                

                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b>All rights reserved.
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/firebase.js"></script>
        <script type="text/javascript" src="js/messages.js"></script>
        
      
    </body>
