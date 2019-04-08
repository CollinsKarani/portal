<?php
require_once('inc/session.php');
//include_once 'dbqueries.php';
$term = $_GET['term'];
$code= $_GET['code'];

 $details = $conn ->prepare("SELECT * FROM tblmarkstable WHERE AdmNo=:uid AND ExamCode='$code' AND Term='$term'");
 $details ->execute(array(":uid"=>$_SESSION['user_session']));
 $row=$details->fetch(PDO::FETCH_ASSOC);
require_once( 'library/mpdf.php');
$stylesheet = file_get_contents('css/pdfLayout.css');
// Setup PDF
date_default_timezone_set('Africa/Nairobi');
$d=new DateTime();
$dat=$d->format('d/m/y  h:i:s a');
 $sid="1234567";
$mpdf = new mPDF('utf-8', 'A4',0,0,5,5,15,16,4,9,'P');

$mpdf->showWatermarkText = true;
$mpdf->WriteHTML('<watermarktext content="MIATHENE REPORT FORM" alpha="0.1" />');
$mpdf->setAutoTopMargin = 'stretch';
$mpdf->setAutoBottomMargin = 'stretch';
//$mpdf->setFooter(50,32,8,'Printed on '.date('m/d/Y h:i:s a'));
$mpdf->SetHTMLFooter('<div class="pdf-footer">
<strong>Disclaimer :</strong> <i>This is a system generated report Form and does not require signature.</i>
<hr>
<i>Generated and Printed on '.$dat.' </i>
</div>');

$mpdf->WriteHTML($stylesheet,1);
$html='
  <html>

<body> <div class="container" >
             <div class="row-fluid "  >
              <img src="images/logo.jpg" style="padding-left:39%" alt="School Logo" class="logo" width="90" height="70"/>
             <h3 style="padding-top:0px; margin-left:100px;">MIATHENE BOYS HIGH SCHOOL  </h3>
            <h4 style="padding-left:24%;">Office of the Academics, Director of Studies</h4>
              </div>
              <div class="row-fluid"  style="padding-left:10%; padding-right:-5%;">
           <div class="span6 pull-left" style="text-align:left;margin-top:-20px;"><br/>
           Tel. No: 020-2063540 <br/>
           Email: <u> info@miathenehigh.ac.ke</u><br/>
           Website: <u>www.miathenehigh.ac.ke</u><br/>
           </div>

              <div class="span6" style="text-align:left; padding-left:74%; margin-top:-65px; ">P.O Box 71 <br/>
                                               Meru-60200 <br/>
                                               Kenya.<br/>
           </div>
           </div>
           <div class=" row-fluid1"  style="padding-left:10%; padding-right:-5%;">
                      <hr/>  </div>

<div class="row-fluid"  style="padding-left:10%; padding-right:-5%;">
             <div class="span6 pull-left" style="text-align:left; margin-top:-150px;"><br/>
           NAME: &nbsp;<strong>'.$row['Name'] .' </strong> <br/>
           FORM: &nbsp;<strong>'.$row['Form'].'</strong><br/>
           CLASS:&nbsp;<strong>'.$row['Class'] .' </strong> <br/>
           K.C.P.E :&nbsp;<strong>'.$row['KCPEMarks'].' </strong><br/>
           </div>

              <div class="span6" style="text-align:left; padding-left:74%; margin-top:-105px; ">
              ADMISSION NUMBER: &nbsp;<strong>'.$row['AdmNo'] .' </strong> <br/>
              TERM: &nbsp;<strong> '.$term.' </strong> <br/>
              DORMITORY: &nbsp;<strong>'.$row['House'].'</strong><br/>
           </div>
           </div>
    <div class="row-fluid " style="padding-left:10%; padding-right:-5%;">
              <h5><u>STUDENT REPORT FORM &nbsp;&nbsp; '.$code.' </u></h5>
             </div>
           <div class="row-fluid " style="padding-left:10%; padding-right:-5%;">
                          <table class="table table-bordered">
                                     <thead>
                                     <tr>
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
                                     <tbody>';
                                      $result = $conn ->prepare("SELECT * FROM tblmarkstable WHERE AdmNo=:uid AND ExamCode='$code' AND Term='$term' ORDER BY Term ASC");
                                    $result ->execute(array(":uid"=>$_SESSION['user_session']));
                              	while($row=$result->fetch(PDO::FETCH_ASSOC))
		                           {
                                       $html .= '<tr>
                                       <td>ENGLISH</td>
                                       <td>'.$row['Exam1M'].'</td><td>'.$row['Exam1G'].'</td>
                                       <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                         <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                             <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                               <td>&nbsp;</td>
                                       </tr>
                                       <tr>
                                       <td>KISWAHILI</td>
                                       <td>'.$row['Exam2M'].'</td><td>'.$row['Exam2G'].'</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                         <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                             <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                               <td>&nbsp;</td>
                                       </tr>
                                       <tr>
                                       <td>MATHEMATICS</td>
                                       <td>'.$row['Exam3M'].'</td><td>'.$row['Exam3G'].'</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                         <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                             <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                               <td>&nbsp;</td>
                                       </tr>
                                       <tr>
                                       <td>BIOLOGY</td>
                                       <td>'.$row['Exam4M'].'</td><td>'.$row['Exam4G'].'</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                         <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                             <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                               <td>&nbsp;</td>
                                       </tr>
                                       <tr>
                                       <td>PHYSICS</td>
                                       <td>'.$row['Exam5M'].'</td><td>'.$row['Exam5G'].'</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                         <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                             <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                               <td>&nbsp;</td>
                                       </tr>
                                       <tr>
                                       <td>CHEMISTRY</td>
                                       <td>'.$row['Exam6M'].'</td><td>'.$row['Exam6G'].'</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                         <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                             <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                               <td>&nbsp;</td>
                                       </tr>
                                       <tr>
                                       <td>HISTORY</td>
                                       <td>'.$row['Exam7M'].'</td><td>'.$row['Exam7G'].'</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                         <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                             <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                               <td>&nbsp;</td>
                                       </tr>
                                       <tr>
                                       <td>GEOGRAPHY</td>
                                       <td>'.$row['Exam8M'].'</td><td>'.$row['Exam8G'].'</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                         <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                             <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                               <td>&nbsp;</td>
                                       </tr>
                                       <tr>
                                       <td>CRE</td>
                                       <td>'.$row['Exam9M'].'</td><td>'.$row['Exam9G'].'</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                         <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                             <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                               <td>&nbsp;</td>
                                       </tr>
                                       <tr>
                                       <td>AGRICULTURE</td>
                                       <td>'.$row['Exam10M'].'</td><td>'.$row['Exam10G'].'</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                         <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                             <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                               <td>&nbsp;</td>
                                       </tr>
                                       <tr>
                                       <td>COMPUTER ST</td>
                                       <td>'.$row['Exam11M'].'</td><td>'.$row['Exam11G'].'</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                         <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                             <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                               <td>&nbsp;</td>
                                       </tr>
                                       <tr>
                                       <td>BUSINESS ST</td>
                                       <td>'.$row['Exam12M'].'</td><td>'.$row['Exam12G'].'</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                         <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                             <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                               <td>&nbsp;</td>
                                       </tr>
                                       <tr>
                                       <td>BUSINESS ST</td>
                                       <td>'.$row['Exam12M'].'</td><td>'.$row['Exam12G'].'</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                         <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                             <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                               <td>&nbsp;</td>
                                       </tr>
                                       <tr>
                                       <td>FRENCH</td>
                                       <td>'.$row['Exam13M'].'</td><td>'.$row['Exam13G'].'</td>
                                          <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                         <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                             <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                               <td>&nbsp;</td></tr>
                                       <tr>
                                       <td style="text-align:left;font-weight:bold;" colspan="3">REPORT ANALYSIS </td>
                           <td style="text-align:right;font-weight:bold;">'. $row['Term'].'</td>
                          <td style="text-align:right;font-weight:bold;">'.$row['ExamCode'].'</td>
                          <td style="text-align:right;font-weight:bold;">'. $row['TotalMarks'].'</td>
                          <td style="text-align:right;font-weight:bold;">'.$row['MeanMarks'].'</td>
                           <td style="text-align:right;font-weight:bold;">'.$row['TotalPoints'].'</td>
                          <td style="text-align:right;font-weight:bold;">'.$row['MeanPoints'].'</td>
                           <td style="text-align:right;font-weight:bold;">'. $row['MeanGrade'].'</td>
                            <td style="text-align:right;font-weight:bold;">'. $row['ClassPosition'].'</td>
                             <td style="text-align:right;font-weight:bold;">'. $row['FormPosition'].'</td>

                                       </tr>';

                                     }
                                $html .='</tbody>
                                     </table>


 </p>
        <div style="color:#fffff; text-align:center; padding:5px; height: 2px; width:3px;"><barcode code=" '.$sid.' " type="C128A" size="0.8" height="2.0"/></div>
  <div style="text-align:center;">MIA2016REPORT'.$marks['AdmNo'].'</div>

              </div> </div>  </body>
           </html>';

$mpdf->WriteHTML($html,2); // Writing html to pdf

//$mpdf->Output(); // For sending Output to browser
$mpdf->Output($row['Name'].'_Report Form.pdf','I'); // For Download
exit;
?>