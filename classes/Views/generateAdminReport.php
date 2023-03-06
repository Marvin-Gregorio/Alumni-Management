<?php

	require_once '../../vendor/autoload.php';

	require_once realpath("../../include/loadclass.php");

	$search = new Classes\Controller\SearchController();

	date_default_timezone_set('Asia/Manila');
	$date = date("F Y");

	if (session_status() === PHP_SESSION_NONE) {
	    session_start();
	}

	$id = $_SESSION['user_id'];

	$result = $search->getProfile($id);

	$present = date("Y-m-d h:i:s");

	$first_date = date("Y-m-01 h:i:s");

	$list = $search->getMonthlyAllAppointment($present,$first_date);

	$counselors = $search->getTotalUser('COUNSELOR');
	$students = $search->getTotalUser('STUDENT');

	$studentList = $search->getAllUser('STUDENT');
	$counselorList = $search->getAllUser('COUNSELOR');

	$number_user = $search->getDistinctLog($first_date,$present);
	$number_logs = $search->getAllLog($first_date,$present);

	$distinctUser = $search->getDistinctList($first_date,$present);
	$allUser = $search->getAllList($first_date,$present);

	$mpdf = new \Mpdf\Mpdf(['setAutoBottomMargin' => 'pad']);
	$css = file_get_contents('style.css');
	$mpdf->WriteHTML($css, \Mpdf\HTMLParserMode::HEADER_CSS);

	$header = '

				<div class="row" style="padding-left:60px;">
					<div class="col-xs-2 text-center"><img src="../../assets/img/col.png" style="width:100px;"></div>
					<div class="col-xs-5 text-center">
						<h4>COLUMBAN COLLEGE INC.</h4>
						<h4>Olongapo City</h4>
						<h4>Guidance and Testing Center</h4>
					</div>
					<div class="col-xs-2 text-center"><img src="../../assets/img/avatars/gtc.jpeg" style="width:100px;"></div>
				</div>

				<hr>';
	$mpdf->setHTMLHeader($header);
	$mpdf->SetMargins(50, 100, 50);
	$footer = '<hr>Document generated on '. $present;
	$mpdf->setHTMLFooter($footer);

	$html = '
		

			<div class="container">
				
				
				<div>
					<p class="">Generated Report for the month of: '.$date.'</p>
					<p class="">Total Appointment: '.(sizeof($list) - 1).' </p>
					<p class="">Departments: '.$result[6].'</p>
					<p class="">No. of Counselors: '.$counselors.'</p>
					<p class="">No. of Students: '.$students.'</p>
					<p class="">No. of Users who accessed the system for this month: '.$number_user.'</p>
					<p class="">No. of times the system has been accessed for this month: '.$number_logs.'</p>

					<div class="text-center" style="padding-top:20px;">
						<p>Appointment List</p>
					</div>
					<table class="table" style="border:1px solid grey;">
						<thead>
							<tr>
								<th>ID</th>
								<th>First_Name</th>
								<th>Last_Name</th>
								<th>Appointment</th>
							</tr>
						</thead>
						<tbody>
						';

						if($list){
							for($count = 1; $count < sizeof($list); $count++){
								$profile = $search->getProfile($list[$count][1]);
								$html .='
								<tr>
									<td>'.$profile[5].'</td>
									<td>'.$profile[2].'</td>
									<td>'.$profile[3].'</td>
									<td>'.$list[$count][2].'</td>
								</tr>';
							}
						}else{
							$html .='No records found...';
						}
						
							

						$html .='
						</tbody>
					</table>

					<div class="text-center">
						<p>Student List</p>
					</div>
					<table class="table" style="border:1px solid grey;">
						<thead>
							<tr>
								<th>ID</th>
								<th>First_Name</th>
								<th>Last_Name</th>
								<th>Department</th>
							</tr>
						</thead>
						<tbody>
						';

						if($list){
							for($count = 1; $count < sizeof($studentList); $count++){
								$html .='
								<tr>
									<td>'.$studentList[$count][1].'</td>
									<td>'.$studentList[$count][2].'</td>
									<td>'.$studentList[$count][3].'</td>
									<td>'.$studentList[$count][4].'</td>
								</tr>';
							}
						}else{
							$html .='No records found...';
						}
						
							

						$html .='
						</tbody>
					</table>

					<div class="text-center">
						<p>Counselor List</p>
					</div>
					<table class="table" style="border:1px solid grey;">
						<thead>
							<tr>
								<th>ID</th>
								<th>First_Name</th>
								<th>Last_Name</th>
								<th>Department</th>
							</tr>
						</thead>
						<tbody>
						';

						if($list){
							for($count = 1; $count < sizeof($counselorList); $count++){
								$html .='
								<tr>
									<td>'.$counselorList[$count][1].'</td>
									<td>'.$counselorList[$count][2].'</td>
									<td>'.$counselorList[$count][3].'</td>
									<td>'.$counselorList[$count][4].'</td>
								</tr>';
							}
						}else{
							$html .='No records found...';
						}
						
							

						$html .='
						</tbody>
					</table>

					<div class="text-center" style="padding-top:20px;">
						<p>List of distinct user who accessed the system</p>
					</div>
					<table class="table" style="border:1px solid grey;">
						<thead>
							<tr>
								<th>ID</th>
								<th>First_Name</th>
								<th>Last_Name</th>
								<th>Department</th>
							</tr>
						</thead>
						<tbody>
						';

						if($list){
							for($count = 1; $count < sizeof($distinctUser); $count++){
								$profile = $search->getProfile($distinctUser[$count]);
								$html .='
								<tr>
									<td>'.$profile[5].'</td>
									<td>'.$profile[1].'</td>
									<td>'.$profile[2].'</td>
									<td>'.$profile[6].'</td>
								</tr>';
							}
						}else{
							$html .='No records found...';
						}
						
							

						$html .='
						</tbody>
					</table>

					<div class="text-center" style="padding-top:20px;">
						<p>List of all users who have accessed this system</p>
					</div>
					<table class="table" style="border:1px solid grey;">
						<thead>
							<tr>
								<th>ID</th>
								<th>First_Name</th>
								<th>Last_Name</th>
								<th>Department</th>
							</tr>
						</thead>
						<tbody>
						';

						if($list){
							for($count = 1; $count < sizeof($allUser); $count++){
								$profile = $search->getProfile($allUser[$count]);
								$html .='
								<tr>
									<td>'.$profile[5].'</td>
									<td>'.$profile[1].'</td>
									<td>'.$profile[2].'</td>
									<td>'.$profile[6].'</td>
								</tr>';
							}
						}else{
							$html .='No records found...';
						}
						
							

						$html .='
						</tbody>
					</table>


				</div>
			</div>

	';
	$mpdf->WriteHTML($html);
	$mpdf->Output();

?>
