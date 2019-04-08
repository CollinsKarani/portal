<?php session_start(); ?>

<?php
	require_once('library/mpdf.php');

	$mpdf = new mPDF();
	///include("library/mpdf.php");
        require_once('queries.php');

$mpdf=new mPDF('c','Letter','','' , 0 , 0 , 0 , 0 , 0 , 0);
 $mpdf->SetDisplayMode('fullpage');

$mpdf->list_indent_first_level = 1;

$stylesheet = file_get_contents('css/pdfLayout.css');
     ob_end_clean();
$mpdf->WriteHTML($stylesheet,1);

$html='<body> <div class="container" >

             <div class="row-fluid "  >
              <img src="img/mmust.jpg" style="padding-left:39%" alt="" class="logo" width="120" height="100"/>
             <h3 style="padding-top:0px">Masinde Muliro University of Science and Technology  </h3>
            <h4 style="padding-left:24%;">Office of the Registrar, Academic Affairs</h4>

              </div> <div class="row-fluid"  style="padding-left:10%; padding-right:-5%;">

           <div class="span6 pull-left" style="text-align:left;margin-top:-15px;"> Tel. No. 0702-597360/1	<br/>
               &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;0733-120020/22
 <br/>
                                                Ext. 2101	 <br/>
                                                Email: <u> registrar.aa@mmust.ac.ke</u><br/>
                                                 Website: <u>www.mmust.ac.ke</u><br/>


           </div>

              <div class="span6   " style="text-align:left; padding-left:74%; margin-top:-100px; ">P.O Box 190 <br/>
                                               Kakamega-50100 <br/>
                                               Kenya<br/>

           </div>

           </div>

                         <div class=" row-fluid1"  style="padding-left:10%; padding-right:-5%;">

                      <hr/>

                      </div>

                      <div class="row-fluid"  style="padding-left:10%; padding-right:-5%;">
<div class="span6 pull-left" style="text-align:left;">
                                              20th July, 2015	 <br/>
'
                                          .  $fullname.', <br/>

                                                 '. $box.', <br/>
                                               '.$city.'.<br/>
                                                 <br/>

Dear &nbsp;' .$fullname

.'.

           </div>
            <div class="span6  " style="text-align:left; padding-left:64%; margin-top:-120px;">
                                                          MMU/COR:504029 <br/>
                                            UNIVERSITY REGNO:<strong> '. $_SESSION['id'].' </strong> <br/>

           </div>

           </div>

           <div class="row-fluid " style="padding-left:10%; padding-right:-5%;">
              <h5><u>RE: ADMISSION INTO THE UNIVERSITY &nbsp; '.$academic .'&nbsp; ACADEMIC YEAR </u></h5>
             </div>

           <div class="row-fluid " style="padding-left:10%; padding-right:-5%;">
       Following your application for admission into the University, I am pleased to offer you a place in the &nbsp; <strong> '.  $facultyName.' ,</strong> &nbsp; for the programme leading to a
     <strong> &nbsp; '.$programName.' </strong> &nbsp; which commences on <strong> &nbsp;  '.$newDate .'</strong>.
     <p>  This offer is made on the basis of the statement of your qualifications as presented by the Kenya National Examination Council . To verify the authenticity of these qualifications, we advise you to present the following documents to the  <strong>Dean School/Faculty of  &nbsp; '.  $facultyName.'</strong>

     at Kakamega Main Campus <strong> on the opening date:</strong> <br/>
 <p >-	Original KCSE Results Slip or Certificate and a photocopy And
 	original National ID (or Birth Certificate) and a photocopy.</p>

 Enclosed please find the Admission Student&rsquo;  Handbook and Forms MMU/2,  MMU/3 and MMU/5.  The forms  should be completed and submitted together with your original certificates during verification.  Form MMU/5 should be submitted at the Health Desk during registration.
 <br/>

   The Admission Students  Handbook must be thoroughly read, comprehended and kept for future reference.

    <br/>
 Kenyan students who are unable to raise fees are advised to apply for a loan from the <strong> Higher Education Loans Board (HELB).
Instructions on applying for the HELB loan can be obtained on the HELB website <u> www.helb.co.ke (HELB Products).  </u> </strong>.
 <br/>
 <br/>
Enclosed also find instructions on payment of fees at any Branch of Equity Bank using the following account number. NOTE: <strong> Tuition/Administration/Other Fees </strong> should be <strong><u>paid separately</u></strong> from <strong>Accommodation Fees </strong> but to the same account indicated :

 <strong>-	KCB A/C No. 11081269</strong>  <br/>

 Please note that <strong>NO</strong> student shall be registered in the University without paying fees.<br/>
I take this opportunity to congratulate you for having been admitted in this University and I look forward to welcoming you when the new Semester begins.   <br/>

 Yours sincerely, <br/>  <br/>

 <strong>Dr. C. K. Onyancha
 <br/>
Ag. Registrar (Academic Affairs)
<br/>
Encls.
</strong>

 </p>


              </div> </div>  </body>
           </html>';

 $mpdf->WriteHTML($html,2);

$mpdf->Output('admission.pdf','I');

	exit;
?>

