<?php
	
	require_once realpath("../../include/loadclass.php");

	$search = new Classes\Controller\SearchController();

	if (session_status() === PHP_SESSION_NONE) {
	    session_start();
	}

	$result = $search->allPost();
	
    if($result){
        for($count = 1; $count < sizeof($result); $count++){
            $name = $result[$count][2]. " ". $result[$count][3];
            $date = date('F d, Y',strtotime($result[$count][3]));
            $time = date('g:i A',strtotime($result[$count][3]));

            $userInfo = $search->getProfile($result[$count][4]);


            echo '                                              <div class="card mb-3" style="box-shadow: 0.5px 0.5px 2px rgba(0,0,0,0.25);border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;">
                                                            <div class="card-body" style="padding-bottom: 0px;">
                                                                <div class="row" style="margin-top: -6px;">
                                                                    <div class="float-left mr-2 ml-2"><img class="rounded-circle" src="../../profileImg/'.$userInfo[7].'" style="width: 50px;"></div>
                                                                    <div class="float-left col" style="margin-top: 8px;text-align: left;">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <h6 style="margin-bottom: 0px;font-family: Poppins, sans-serif;color: rgb(0,0,0);">'.$userInfo[5].'</h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <h6 style="margin-bottom: 0px;font-family: Poppins, sans-serif;color: rgb(0,0,0);font-weight: bold;">'.$userInfo[1] . ' ' . $userInfo[2] .'</h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="float-right col" style="margin-top: 12px;text-align: right;">
                                                                        <div class="float-right">
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <h6 style="margin-bottom: 0px;font-family: Poppins, sans-serif;font-size: 12px;">'.$date.'<br></h6>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <h6 style="font-family: Poppins, sans-serif;font-size: 12px;margin-bottom: 0px;margin-top: 2px;">'.$time.'<br></h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <p style="margin-bottom: 8px;margin-top: 8px;font-family: Poppins, sans-serif;color: rgb(0,0,0);">'.$result[$count][2].'<br></p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col"><span style="font-size: 12px;font-family: Poppins, sans-serif;">0 comments</span></div>
                                                                </div>
                                                                <div class="row" style="margin-right: -24px;margin-left: -20px;">
                                                                    <div class="col" style="margin-right: 4px;padding-right: 4px;padding-left: 0px;"><button onclick="view_reply('.$result[$count][1].')" class="btn btn-primary" type="button" style="background: #fffc50;width: 100%;border-radius: 0px;border-bottom-left-radius: 20px;color: rgb(0,0,0);font-family: Poppins, sans-serif;border-width: 0px;border-color: rgb(255,255,255);" data-toggle="modal" data-target="#modal-1">Reply</button></div>
                                                                    <div class="col" style="margin-right: 0px;padding-right: 4px;padding-left: 0px;margin-left: 4px;"><button onclick="setCaseId('.$result[$count][1].')" class="btn btn-primary" type="button" style="background: rgb(46,107,180);width: 100%;border-radius: 0px;color: rgb(255,255,255);font-family: Poppins, sans-serif;border-bottom-right-radius: 20px;border-width: 0px;border-color: rgba(255,255,255,0);" data-toggle="modal" data-target="#modal-3">Appoint</button></div>
                                                                </div>
                                                            </div>
                                                        </div>';
        }
    }else{
        echo "No record found...";
    }

	


?>