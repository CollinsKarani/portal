<?php include('inc/session.php'); ?>

<!DOCTYPE html>
 <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
   <meta charset="utf-8" />
   <link rel="shortcut icon" href="images/favicon.ico">
    <title>Miathene Boys| Portal</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
   <link href="css/style-responsive.css" rel="stylesheet" />
   <link href="css/style-default.css" rel="stylesheet" id="style_color" />

   <link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />

   <link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen/chosen.css" />
   <link rel="stylesheet" type="text/css" href="assets/jquery-tags-input/jquery.tagsinput.css" />
   <link rel="stylesheet" type="text/css" href="assets/clockface/css/clockface.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
   <link rel="stylesheet" href="assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />

   <link href="assets/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet"/>

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
<?php include('header.php'); ?>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
            <div class="sidebar-scroll">
        <div id="sidebar" class="nav-collapse collapse">
         <!-- BEGIN SIDEBAR MENU -->
          <ul class="sidebar-menu">
              <li class="sub-menu">
                  <a class="" href="javascript:;">
                      <i class="icon-dashboard"></i>
                      <span>Dashboard</span>
                       <span class="arrow"></span>
                  </a>
                   <ul class="sub">
                      <li><a class="" href="index.php">Home</a></li>

                      </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-user"></i>
                      <span>My Account</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                  <li><a class="" href="enrolment-profile">Enrolment Profile</a></li>
                   <li><a class="" href="update-profile-to-upto-date">Update Admission info</a></li>
                      <li><a class="" href="parent-record-info">Parent Information</a></li>
                      <li><a class="" href="assessment-performance">My Results</a></li>

                      <li><a class="" href="feepaidbal">Fee Status</a></li>
                      <li><a class="" href="account-administration">Account Administration</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-building"></i>
                      <span>Accomodation</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="managedormitory">View Dormitory</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-tasks"></i>
                      <span>My Reports</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="fee-structure">Fee Structure</a></li>
                      <li><a class="" href="studentfeepaid">Fee Statement</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-calendar"></i>
                      <span>Reporting Dates</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="termdates.php">Term Updates</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a class="" href="javascript:;">
                      <i class="icon-envelope"></i>
                      <span>Messages</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a href="#" class=""> Discipline</a></li>
                      <li><a href="#" class="">Mails</a></li>
                  </ul>
              </li>
              <li class="sub-menu active">
                  <a class="active" href="javascript:;">
                      <i class="icon-folder-close"></i>
                      <span>File/Documents</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li class="active"><a class="active" href="form-assignment">Materials Upload</a></li>
                      <li><a class="" href="assignment">My Assignment</a></li>
                  </ul>
              </li>
             <li class="sub-menu">
                      <a class="" href="assignment.php">
                          <i class="icon-file-alt"></i>
                          <span>My Assignment</span>
                      </a>
                  </li>
                  <li class="tooltips" data-placement="right" data-original-title="Reporting Dates"><a href="#"><i class="icon-signin"></i> <span class="title">Reporting Dates</span></a></li>

          </ul>
         <!-- END SIDEBAR MENU -->
      </div>
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                                <img src="images/logo.JPG" alt="" style="height:62px;padding-top:none !important;" />&nbsp;&nbsp;MIATHENE BOYS HIGH SCHOOL
                            </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="index.php">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="javascript:;">File</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Material Upload
                       </li>
                       <li class="pull-right no-text-shadow" style="background-color: #99CCFF; padding: 4px; height: 20px;">
                                    <div id="dashboard-rert-range" class="dashboard-date-range no-tooltip-on-touch-device responsive">

                                      <?php
                                    echo'Welcome: ' .date('l jS  F Y ');
                                       ?>
                                    </div>
                                </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
                   <div class="row-fluid">
                 <div class="span6">
                     <!-- BEGIN BLANK PAGE PORTLET-->
                     <div class="widget blue">
                         <div class="widget-title">
                             <h4><i class="icon-upload"></i> ASSIGNMENT SUBMISSION</h4>
                           <span class="tools">
                               <a href="javascript:;" class="icon-chevron-down"></a>
                               <a href="javascript:;" class="icon-remove"></a>
                           </span>
                         </div>
                         <div class="widget-body">
                        <div class="alert alert-info"><strong>Make availability of Assignment to students by uploading here.</strong> </div>
                            <form action="resources.php" class="form-horizontal" method="post" enctype="multipart/form-data">
                         <div class="control-group">
                                <label class="control-label">Class/Form :</label>
                                <div class="controls">
                                    <?php
                //$form1 = mysqli_query($conn,"SELECT * FROM tblexamsetup ORDER BY Form ASC");
                $form1 =$conn->prepare("Select * FROM tblexamsetup ORDER BY Form ASC");
                $form1->execute();
                    ?>
                                    <select class="span10" name="Form" required="required">
                                     <option value="">Select Form...</option>
                                       <?php
                            $i=0;
                            while($row = $form1->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                            <option value="<?php echo $row["Form"];?>"><?php echo $row["Form"];?></option>
                            <?php
                            $i++;
                                }
                            ?>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Teacher :</label>
                                <div class="controls">
                                   <?php
                $tea1 = $conn->prepare("SELECT * FROM tblstaff");
                $tea1->execute();
                    ?>
                                    <select class="span10" name="Name" required="required">
                                     <option value="">Select Teacher...</option>
                                       <?php
                            $i=0;
                            while($row = $tea1->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                            <option value="<?php echo $row["Name"];?>"><?php echo $row["Name"];?></option>
                            <?php
                            $i++;
                                }

                            ?>
                                    </select>
                                </div>
                            </div>
                        <div class="control-group">
                                <label class="control-label">Subject :</label>
                                <div class="controls">
                                     <?php
                      $subject1 = $conn->prepare("SELECT * FROM tblsubject");
                      $subject1->execute();
                    ?>
                                    <select class="span10" name="Description" required="required">
                                     <option value="">Select Subject...</option>
                                       <?php
                            $i=0;
                            while($row = $subject1->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                            <option value="<?php echo $row["Description"];?>"><?php echo$row["Description"];?></option>
                            <?php
                            $i++;
                                }
                            ?>
                                    </select>

                                </div>
                            </div>

                             <div class="control-group">
                                    <label class="control-label">Upload Materials :</label>
                                    <div class="controls">
                                        <div data-provides="fileupload" class="fileupload fileupload-new">
                                            <div class="input-append">
                                                <div class="uneditable-input">
                                                    <i class="icon-file fileupload-exists"></i>
                                                    <span class="fileupload-preview"></span>
                                                </div>
                                               <span class="btn btn-file">
                                               <span class="fileupload-new">Select file</span>
                                               <span class="fileupload-exists">Change</span>
                                               <input type="file" class="default" name="file" required="required">
                                               </span>
                                                <a data-dismiss="fileupload" class="btn fileupload-exists" href="#">Remove</a>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="space20"></div>
                                    <div class="controls">
                                     <button class="btn btn-info" name="upload" type="submit"><i class="icon-upload icon-white"></i>Assignment Upload</button>
                                     <button class="btn btn-danger" name="btn-cancel" type="reset"><i class="icon-ban-circle icon-white"></i> Cancel</button>

                                    </div>
                                </div>
                        </form>

                         </div>
                     </div>
                     <!-- END BLANK PAGE PORTLET-->
                 </div>
                  <div class="span6">
                        <div class="widget purple">
                         <div class="widget-title">
                             <h4><i class="icon-upload"></i>REVISION AND RESOURCES</h4>
                           <span class="tools">
                               <a href="javascript:;" class="icon-chevron-down"></a>
                               <a href="javascript:;" class="icon-remove"></a>
                           </span>
                         </div>
                         <div class="widget-body">
                        <div class="alert alert-info"> <strong>Upload Revision and Educational Materials to students</strong></div>
                        <form action="resources.php" class="form-horizontal" method="post" enctype="multipart/form-data">
                         <div class="control-group">
                                <label class="control-label">Class/Form :</label>
                                <div class="controls">
                                    <?php

                $form1 =$conn->prepare("Select * FROM tblexamsetup ORDER BY Form ASC");
                $form1->execute();
                    ?>
                                    <select class="span10" name="Form" required="required">
                                     <option value="">Select Form...</option>
                                       <?php
                            $i=0;
                            while($row = $form1->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                            <option value="<?php echo $row["Form"];?>"><?php echo $row["Form"];?></option>
                            <?php
                            $i++;
                                }
                            ?>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Teacher :</label>
                                <div class="controls">
                                  <?php
                $tea1 = $conn->prepare("SELECT * FROM tblstaff");
                $tea1->execute();
                    ?>
                                    <select class="span10" name="Name" required="required">
                                     <option value="">Select Teacher...</option>
                                       <?php
                            $i=0;
                            while($row = $tea1->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                            <option value="<?php echo $row["Name"];?>"><?php echo $row["Name"];?></option>
                            <?php
                            $i++;
                                }

                            ?>
                                    </select>
                                </div>
                            </div>
                        <div class="control-group">
                                <label class="control-label">Subject :</label>
                                <div class="controls">
                                     <?php
                            $i=0;
                            while($row = $subject1->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                            <option value="<?php echo $row["Description"];?>"><?php echo$row["Description"];?></option>
                            <?php
                            $i++;
                                }
                            ?>
                                    </select>
                                   
                                </div>
                            </div>

                             <div class="control-group">
                                    <label class="control-label">Upload Materials :</label>
                                    <div class="controls">
                                        <div data-provides="fileupload" class="fileupload fileupload-new">
                                            <div class="input-append">
                                                <div class="uneditable-input">
                                                    <i class="icon-file fileupload-exists"></i>
                                                    <span class="fileupload-preview"></span>
                                                </div>
                                               <span class="btn btn-file">
                                               <span class="fileupload-new">Select file</span>
                                               <span class="fileupload-exists">Change</span>
                                               <input type="file" class="default" name="file" required="required" accept="document/*">
                                               </span>
                                                <a data-dismiss="fileupload" class="btn fileupload-exists" href="#">Remove</a>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="space20"></div>
                                    <div class="controls">
                                     <button class="btn btn-info" name="upload" type="submit"><i class="icon-upload icon-white"></i>Study Material</button>
                                     <button class="btn btn-danger" name="btn-cancel" type="reset"><i class="icon-ban-circle icon-white"></i>Reset</button>

                                    </div>
                                </div>
                        </form>
                         </div>
                         </div>

                  </div>
             </div>
            <!-- END PAGE CONTENT-->
            <!-- END PAGE CONTENT-->
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
  <?php include('footer.php'); ?>
   <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="js/jquery-1.8.3.min.js"></script>
   <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap/js/bootstrap-fileupload.js"></script>
   <script src="js/jquery.blockui.js"></script>

   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->

   <script type="text/javascript" src="assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
   <script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
   <script type="text/javascript" src="assets/clockface/js/clockface.js"></script>
   <script type="text/javascript" src="assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
   <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
   <script src="assets/fancybox/source/jquery.fancybox.pack.js"></script>
   <script src="assets/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
   <script src="js/jquery.scrollTo.min.js"></script>

   <!--common script for all pages-->
   <script src="js/common-scripts.js"></script>

   <script src="js/form-component.js"></script>
   <script src="js/sliders.js" type="text/javascript"></script>

   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>