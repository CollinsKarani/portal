<?php
require_once( 'library/mpdf.php');
$stylesheet = file_get_contents('css/pdfLayout.css');
// Setup PDF

$mpdf = new mPDF('utf-8', 'A4',0,0,15,15,15,16,4,9,'P');
require_once('studeDetails.php');
$mpdf->showWatermarkText = true;
$mpdf->WriteHTML('<watermarktext content="MIATHENE REPORT FORM" alpha="0.1" />');
$mpdf->setAutoTopMargin = 'stretch';
$mpdf->setAutoBottomMargin = 'stretch';
//$mpdf->setFooter(50,32,8,'Printed on '.date('m/d/Y h:i:s a'));
$mpdf->SetHTMLFooter('<div class="pdf-footer">
<strong>Disclaimer :</strong> This is a system generated report Form and does not require signature.
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

              <div class="span6" style="text-align:left; padding-left:74%; margin-top:-75px; ">P.O Box 71 <br/>
                                               Meru-60200 <br/>
                                               Kenya.<br/>
           </div>
           </div>
           <div class=" row-fluid1"  style="padding-left:10%; padding-right:-5%;">
                      <hr/>  </div>

<div class="row-fluid"  style="padding-left:10%; padding-right:-5%;">
             <div class="span6 pull-left" style="text-align:left; margin-top:-30px;"><br/>
           NAME: &nbsp;<strong>'.$fullname .' </strong> <br/>
           FORM: &nbsp;<strong>'.$form.'</strong><br/>
           CLASS:&nbsp;<strong>'.$class .' </strong> <br/>
           K.C.P.E :&nbsp;<strong>'.$kcpe.' </strong><br/>
           </div>

              <div class="span6" style="text-align:left; padding-left:74%; margin-top:-95px; ">
              ADMISSION NUMBER: &nbsp;<strong>'.$admno .' </strong> <br/>
              TERM: &nbsp;<strong>'.$term .' </strong> <br/>
              DORMITORY: &nbsp;<strong>'.$dorm.'</strong><br/>
           </div>
           </div>

           <div class="row-fluid " style="padding-left:10%; padding-right:-5%;">
              <h5><u>RE: ACADEMIC REPORT FORM &nbsp; '.$term.'&nbsp;</u></h5>
             </div>

           <div class="row-fluid " style="padding-left:10%; padding-right:-5%;">
                          <table class="table table-striped table-hover">
                                     <thead>
                                     <tr>
                                         <th>Subject</th>
                                         <th>Marks</th>
                                         <th>Grade</th>
                                         <th>Points</th>
                                         <th>MeanMarks</th>
                                         <th>ClassPosition</th>
                                         <th>FormPosition</th>
                                     </tr>
                                     </thead>
                                     <tbody>';
                                      $updateProfile = "SELECT * FROM tblmarkstabl WHERE AdmNo='$session_id'" or die(mysql_error());
                                     $result = mysqli_query($conn,$updateProfile);
                                     while($row = $result ->fetch_assoc()){
                                       $html .= '<tr>
                                       <td>ENGLISH</td>
                                       <td>'.$row['Exam1M'].'</td><td>'.$row['Exam1G'].'</td></tr>
                                       <tr>
                                       <td>KISWAHILI</td>
                                       <td>'.$row['Exam2M'].'</td><td>'.$row['Exam2G'].'</td></tr>
                                       <tr>
                                       <td>MATHEMATICS</td>
                                       <td>'.$row['Exam3M'].'</td><td>'.$row['Exam3G'].'</td></tr>
                                       <tr>
                                       <td>BIOLOGY</td>
                                       <td>'.$row['Exam4M'].'</td><td>'.$row['Exam4G'].'</td></tr>
                                       <tr>
                                       <td>PHYSICS</td>
                                       <td>'.$row['Exam5M'].'</td><td>'.$row['Exam5G'].'</td></tr>
                                       <tr>
                                       <td>CHEMISTRY</td>
                                       <td>'.$row['Exam6M'].'</td><td>'.$row['Exam6G'].'</td></tr>
                                       <tr>
                                       <td>HISTORY</td>
                                       <td>'.$row['Exam7M'].'</td><td>'.$row['Exam7G'].'</td></tr>
                                       <tr>
                                       <td>GEOGRAPHY</td>
                                       <td>'.$row['Exam8M'].'</td><td>'.$row['Exam8G'].'</td></tr>
                                       <tr>
                                       <td>CRE</td>
                                       <td>'.$row['Exam9M'].'</td><td>'.$row['Exam9G'].'</td></tr>
                                       <tr>
                                       <td>AGRICULTURE</td>
                                       <td>'.$row['Exam10M'].'</td><td>'.$row['Exam10G'].'</td></tr>
                                       <tr>
                                       <td>COMPUTER ST</td>
                                       <td>'.$row['Exam11M'].'</td><td>'.$row['Exam11G'].'</td></tr>
                                       <tr>
                                       <td>BUSINESS ST</td>
                                       <td>'.$row['Exam12M'].'</td><td>'.$row['Exam12G'].'</td></tr>
                                       <tr>
                                       <td>FRENCH</td>
                                       <td>'.$row['Exam13M'].'</td><td>'.$row['Exam13G'].'</td></tr>';

                                     }
                                $html .='</tbody>
                                     </table>


 </p>


              </div> </div>  </body>
           </html>';

$mpdf->WriteHTML($html,2); // Writing html to pdf

//$mpdf->Output(); // For sending Output to browser
$mpdf->Output('Report Form.pdf','I'); // For Download
exit;
?>