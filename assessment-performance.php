<?php
include_once ('inc/session.php');
$term = $_GET['term'];
$code= $_GET['code'];
 $result = $conn ->prepare("SELECT * FROM tblmarkstable WHERE AdmNo=:uid AND ExamCode='$code' AND Term='$term'");
 $result ->execute(array(":uid"=>$_SESSION['user_session']));

 $details = $conn ->prepare("SELECT * FROM tblmarkstable WHERE AdmNo=:uid AND ExamCode='$code' AND Term='$term'");
 $details ->execute(array(":uid"=>$_SESSION['user_session']));
 $marks=$details->fetch(PDO::FETCH_ASSOC);
//include_once 'dbqueries.php';
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
                      <li class="active"><a class="" href="assessment-performance">My Results</a></li>
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
                      <a class="" href="assignment.php">
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
                                <img src="images/logo.JPG" alt="" style="height:62px;padding-top:none !important;" />MIATHENE BOYS HIGH SCHOOL
                            </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="index.php">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="javascript:;">Report</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Report View
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
                     <!-- BEGIN BLANK PAGE PORTLET-->
                     <div class="widget purple">
                         <div class="widget-title">
                             <h4><i class="icon-legal"></i> Result Analysis </h4>
                           <span class="tools">
                               <a href="javascript:;" class="icon-chevron-down"></a>
                               <a href="javascript:;" class="icon-remove"></a>
                           </span>
                         </div>
                         <div class="widget-body">
                             <div class="row-fluid">
                                 <div class="span12">
                                 <div class="btn-group pull-right btn btn-warning">
                                 <a href="reportForm.php?term=<?php echo $term; ?>&code=<?php echo $code; ?>" target="_blank"><button class="btn btn-primary" ><i class="icon-signin icon-white"></i>Export to Pdf</button></a>

                                     </div>
                                     <div class="text-center" style="font-size: 18px; font-family: Elephant;">
                                         <img alt="School Header" src="images/logo.jpg" style="height: 80px;">&nbsp;&nbsp;MIATHENE BOYS HIGH SCHOOL<p style="font-size: 15px;">P.O BOX 71 - 60200, MERU.</p>
                                     </div>
                                     <hr>

                                 </div>
                             </div>
                              <div class="row-fluid">
                              <div class="span2">
                        <!-- BEGIN GRID SAMPLE PORTLET-->
                            <div class="widget-body">
                                Admission No:&nbsp;<strong>
                              <?php echo $marks['AdmNo'];?>
                        </strong>
                            </div>
                        </div>
                        <div class="span3">
                        <!-- BEGIN GRID SAMPLE PORTLET-->
                            <div class="widget-body">
                                 NAME:&nbsp;<strong>
                        <?php echo  $marks['Name'];?>
                            </strong>
                            </div>
                        </div>
                <div class="span2">
                        <!-- BEGIN GRID SAMPLE PORTLET-->
                            <div class="widget-body">
                                  Class:&nbsp;<strong>
                           <?php   echo  $marks['Class'] ;?>
                        </strong>
                            </div>
                        </div>
                   <div class="span2">
                        <!-- BEGIN GRID SAMPLE PORTLET-->
                            <div class="widget-body">
                                TERM:&nbsp;<strong>
                          <?php echo $term;?>
                        </strong>
                            </div>
                        </div>

                    <div class="span3">
                        <!-- BEGIN GRID SAMPLE PORTLET-->
                            <div class="widget-body">
                               EXAM:&nbsp;<strong>
                              <?php echo $code;?>
                        </strong>
                            </div>
                        </div>
                        </div>
                         <hr>
                             <div class="row-fluid">
                                 <div class="table-responsive">
                                 <table class="table table-striped table-hover">
                                     <thead>
                                     <tr style="height: -10px;">
                                         <th>Subject</th>
                                         <th>Marks</th>
                                         <th>Grade</th>
                                         <th>TERM</th>
                                         <th>EXAM CODE</th>
                                         <th>Total Marks</th>
                                         <th>Mean Marks</th>
                                         <th>Total Points</th>
                                           <th>Mean Points</th>
                                           <th>Mean Grade</th>
                                         <th>Class Position</th>
                                         <th>Form Position</th>
                                     </tr>
                                     </thead>

                                     <tbody>
                                       <?php
                             /* $result = $conn ->prepare("SELECT * FROM tblmarkstable WHERE AdmNo=:uid AND ExamCode='ENDT' AND Term='1-2018' ORDER BY Term ASC");
                              $result ->execute(array(":uid"=>$_SESSION['user_session']));*/
                              	while($dorm=$result->fetch(PDO::FETCH_ASSOC))
		                           {
		                 	?>
			             <tr >
                         <td>ENGLISH</td>
			              <td><?php echo $dorm['Exam1M']; ?></td>
                          <td><?php echo $dorm['Exam1G']; ?></td>

                          </tr>
                           <tr>
                         <td>KISWAHILI</td>
			              <td><?php echo $dorm['Exam2M']; ?></td>
                          <td><?php echo $dorm['Exam2G']; ?></td>
                          </tr>
                          <tr>
                         <td>MATHEMATICS</td>
			              <td><?php echo $dorm['Exam3M']; ?></td>
                          <td><?php echo $dorm['Exam3G']; ?></td></tr>
                          <tr>
                         <td>BIOLOGY</td>
			              <td><?php echo $dorm['Exam4M']; ?></td>
                          <td><?php echo $dorm['Exam4G']; ?></td></tr>

                          <tr>
                         <td>PHYSICS</td>
			              <td><?php echo $dorm['Exam5M']; ?></td>
                          <td><?php echo $dorm['Exam5G']; ?></td></tr>
                           <tr>
                         <td>CHEMISTRY</td>
			              <td><?php echo $dorm['Exam6M']; ?></td>
                          <td><?php echo $dorm['Exam6G']; ?></td></tr>
                          <tr>
                         <td>HISTORY & GOVT</td>
			              <td><?php echo $dorm['Exam7M']; ?></td>
                          <td><?php echo $dorm['Exam7G']; ?></td></tr>
                          <tr>
                         <td>GEOGRAPHY</td>
			              <td><?php echo $dorm['Exam8M']; ?></td>
                          <td><?php echo $dorm['Exam8G']; ?></td></tr>
                          <tr>
                         <td>CRE</td>
			              <td><?php echo $dorm['Exam9M']; ?></td>
                          <td><?php echo $dorm['Exam9G']; ?></td></tr>
                          <tr>
                         <td>AGRICULTURE</td>
			              <td><?php echo $dorm['Exam10M']; ?></td>
                          <td><?php echo $dorm['Exam10G']; ?></td></tr>
                          <tr>
                         <td>COMPUTER ST</td>
			              <td><?php echo $dorm['Exam11M']; ?></td>
                          <td><?php echo $dorm['Exam11G']; ?></td></tr>
                          <tr>
                         <td>BUSINESS ST.</td>
			              <td><?php echo $dorm['Exam12M']; ?></td>
                          <td><?php echo $dorm['Exam12G']; ?></td></tr>
                          <tr>
                         <td>FRENCH</td>
			              <td><?php echo $dorm['Exam13M']; ?></td>
                          <td><?php echo $dorm['Exam13G']; ?></td></tr>
                           <tr>
                         <td>GERMAN</td>
			              <td><?php echo $dorm['Exam14M']; ?></td>
                          <td><?php echo $dorm['Exam14G']; ?></td></tr>
                           <tr>
                <td style="text-align:left;font-weight:bold;" colspan="3">REPORT ANALYSIS </td>
                           <td style="text-align:right;font-weight:bold;"><?php echo $dorm['Term'];  ?></td>
                          <td style="text-align:right;font-weight:bold;"><?php echo $dorm['ExamCode'];  ?></td>
                          <td style="text-align:right;font-weight:bold;"><?php echo $dorm['TotalMarks'];  ?></td>
                          <td style="text-align:right;font-weight:bold;"><?php echo $dorm['MeanMarks'];  ?></td>
                          <td style="text-align:right;font-weight:bold;"><?php echo $dorm['TotalPoints'];  ?></td>
                          <td style="text-align:right;font-weight:bold;"><?php echo $dorm['MeanPoints'];  ?></td>
                           <td style="text-align:right;font-weight:bold;"><?php echo $dorm['MeanGrade'];  ?></td>
                            <td style="text-align:right;font-weight:bold;"><?php echo $dorm['ClassPosition'];  ?></td>
                             <td style="text-align:right;font-weight:bold;"><?php echo $dorm['FormPosition'];  ?></td>
            </tr>
			<?php

		}
		?>

                                     </tbody>
                                 </table>
                             </div>
                             </div>
                             <div class="space20"></div>

                         </div>
                     </div>
                     <!-- END BLANK PAGE PORTLET-->
                 </div>
             </div>
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
   <script src="js/jquery.scrollTo.min.js"></script>


   <!--common script for all pages-->
   <script src="js/common-scripts.js"></script>

   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->

</html>