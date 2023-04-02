<?php

	require_once '../../vendor/autoload.php';

	require_once realpath("../../include/loadclass.php");

	$search = new Classes\Controller\SearchController();

	date_default_timezone_set('Asia/Manila');
	$date = date("F Y");

	if (session_status() === PHP_SESSION_NONE) {
	    session_start();
	}

	$id = $_GET['id'];
	$present = date("Y-m-d h:i:s");

	$result = $search->getProfileDetails($id);
	$result1 = $search->getEmploymentDetails($id);
	$result2 = $search->getEducationalDetails($id);
	$result3 = $search->getSession($id);

	$mpdf = new \Mpdf\Mpdf(['debug' => true]);
	$css = file_get_contents('style.css');
	$mpdf->WriteHTML($css, \Mpdf\HTMLParserMode::HEADER_CSS);

	$header = '

				<div class="row" style="padding-left:60px;">
					<div class="col-xs-2 text-center"><img src="../../assets/css/images/logo.png" style="width:100px;"></div>
					<div class="col-xs-5 text-center">
						<h4>COLUMBAN COLLEGE INC.</h4>
						<h4>Olongapo City</h4>
						<h4>Alumni Management Office</h4>
					</div>
					<div class="col-xs-2 text-center"><img src="../../assets/css/images/logo.png" alt="alumni-logo" style="width:100px;"></div>
				</div>

				<hr>';
	$mpdf->setHTMLHeader($header);
	$mpdf->SetMargins(50, 100, 50);
	$footer = '<hr>Document generated on '. $present;
	$mpdf->setHTMLFooter($footer);

	$html = '
		<div class="row">
		<table class="table">
		<tr>
			<td style="width:50%">
				<img src="../../profileImg/'.$result[10].'" class="img-thumbnail" style="width:200px;">
			</td>

			<td style="width:50%">
				<h3>Educational Information:</h3>
				<p style="color:white">fdas</p>

				<div>
					<label class="fw-semibold" >Elementary: '.$result2[1] . " " .$result2[2].'</label>
				</div>
				<div>
					<label class="fw-semibold" >Junior High: '.$result2[3] . " " .$result2[4].'</label>
				</div>
				<div>
					<label class="fw-semibold" >Senior High: '.$result2[7] . " | " .$result2[5]. " " . $result2[6] .'</label>
				</div>
				<div>
					<label class="fw-semibold" >Undegratduate: '.$result2[10] . " | " .$result2[8]. " " . $result2[9] .'</label>
				</div>
				<div>
					<label class="fw-semibold" >Masteral: '.$result2[13] . " | " .$result2[11]. " " . $result2[12] .'</label>
				</div>
				<div>
					<label class="fw-semibold" >Doctoral: '.$result2[16] . " | " .$result2[14]. " " . $result2[15] .'</label>
				</div>
			</td>

		</tr>
		</table>
		<div>
				<table class="table">
					<tbody>
						<tr>
							<td style="width:50%">
								<h3>Personal Information:</h3>
								<p style="color:white">fdas</p>
								<div>
									<label class="fw-semibold" >Full Name: '.$result[1] . " " .$result[2]." ".$result[3].'</label>
								</div>
								<div>
									<label class="fw-semibold" >Email: '.$result[4].'</label>
								</div>
								<div>
									<label class="fw-semibold" >Cellphone Number: '.$result[5].'</label>
								</div>
								<div>
									<label class="fw-semibold" >Birth Date: '.$result[6].'</label>
								</div>
								<div>
									<label class="fw-semibold" >Username: '.$result[7].'</label>
								</div>
								<div>
									<label class="fw-semibold" >Gender: '.$result[8].'</label>
								</div>
								<div>
									<label class="fw-semibold" >Status: '.$result[9].'</label>
								</div>
									

							</td>
							<td style="width:50%">
								<h3>Employment Information:</h3>
								<p style="color:white">fdas</p>
								<div>
									<label class="fw-semibold" >Company Name: '.$result1[1] .'</label>
								</div>
								<div>
									<label class="fw-semibold" >Company Email: '.$result1[2].'</label>
								</div>
								<div>
									<label class="fw-semibold" >Company Number: '.$result1[3].'</label>
								</div>
								<div>
									<label class="fw-semibold" >Company Address: '.$result1[4].'</label>
								</div>
							</td>
							
						</tr>
						
					</tbody>
				</table>
			</div>
		</div>
	';
	$mpdf->WriteHTML($html);
	$mpdf->Output();

?>
