<?php
include_once ('inc/session.php');

  ?>
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

    <link rel="stylesheet" href="../../code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />


</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
  <?php include('header.php');  ?>
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
                      <li><a class="" href="student_Details Information">News</a></li>
                      </ul>
              </li>
              <li class="sub-menu active">
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
                      <li class="active"><a class="" href="account-administration">Account Administration</a></li>
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
                      <li><a class="" href="termdates">Term Updates</a></li>
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
              <li class="sub-menu">
                  <a class="" href="javascript:;">
                      <i class="icon-folder-close"></i>
                      <span>File/Documents</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="form-assignment">Assignment Upload</a></li>
                      <li><a class="" href="available-assignment">My Assignment</a></li>
                  </ul>
              </li>
             <li class="sub-menu">
                      <a class="" href="assignment">
                          <i class="icon-file-alt"></i>
                          <span>My Assignment</span>
                      </a>
                  </li>
                  <li class="tooltips s" data-placement="right" data-original-title="Reporting Dates"><a href="#"><i class="icon-signin"></i> <span class="title">Reporting Dates</span></a></li>

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
                           <a href="#">Account</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           View
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
                  <div class="span12">
                    <div class="widget orange">
                        <div class="widget-title">
                            <h4><i class="icon-lock"></i>ACCOUNT ADMINISTRATION&nbsp;&nbsp;[&nbsp;&nbsp;<?php echo  $row['FullName']; ?>&nbsp;&nbsp;]</h4>
                                   <span class="tools">
                                       <a class="icon-chevron-down" href="javascript:;"></a>
                                       <a class="icon-remove" href="javascript:;"></a>
                                       </span>
                        </div>
                        <div class="widget-body form">
                             <h4>SECURITY</h4>
                                <form class="cmxform form-horizontal" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" id="signupForm">
                                             <div class="control-group">
                                                 <label class="control-label">Current Password</label>
                                                 <div class="controls">
                                                     <input type="password" class="span4 " name="cupassw" required="required">
                                                 </div>
                                             </div>
                                             <div class="control-group">
                                                 <label class="control-label">New Password</label>
                                                 <div class="controls">
                                                     <input type="password" class="span4 " name="passwd" pattern=".{6,}"  id="password"  title="Password should contain more than 6 characters">
                                                 </div>
                                             </div>
                                             <div class="control-group">
                                                 <label class="control-label">Re-type New Password</label>
                                                 <div class="controls">
                                                     <input type="password" class="span4" name="passwcon" id="confirm_password">
                                                 </div>
                                             </div>

                                             <div class="form-actions">
                                                 <button type="submit" class="btn btn-success" name="btn-submit">Change Password</button>
                                                 <button type="reset" class="btn" name="btn-cancel">Cancel</button>
                                             </div>

                                         </form>

                            <div class="space20"></div>
                            <div class="space20"></div>
                            <div class="space20"></div>
                        </div>
                    </div>
                      </div>




            </div>

         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->
</div>

   <!-- BEGIN FOOTER -->
   <div id="footer">
       2015 &copy; Miathene Boys High School.
   </div>
   <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->

   <script src="js/jquery-1.8.2.min.js"></script>
   <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
   <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap/js/bootstrap-fileupload.js"></script>
   <script src="js/jquery.blockui.js"></script>

   <script src="../../code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
   <script src="js/jQuery.dualListBox-1.3.js" language="javascript" type="text/javascript"></script>


   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
  
   <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
   <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
   <script src="assets/fancybox/source/jquery.fancybox.pack.js"></script>
   <script src="js/jquery.scrollTo.min.js"></script>
   <script src="js/common-scripts.js"></script>

   <!--script for this page-->
   <script src="js/form-component.js"></script>
    <script src="js/form-validation-script.js"></script>
  <!-- END JAVASCRIPTS -->

   <script language="javascript" type="text/javascript">

       $(function() {

           $.configureBoxes();

       });

   </script>
</body>
<!-- END BODY -->
</html>