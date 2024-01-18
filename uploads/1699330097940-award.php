<?php
include ("connect.php");
if(isset($_POST['VoteCompleted'])) {
	//$_SESSION ['SESS_USER_AWARD'] = '';
	//$_SESSION['SESS_TABLE_AWARD'] = '';
	header ( "location:index.php" );
	exit;
}

$cp = "award";
$page = "award";



$pageid = 2;

$sel = "select * from staticpage where id=" . $pageid;

$query = mysqli_query ( $sel );

$content = mysqli_fetch_array ( $query );

$file = $content ["image_path"];


$query = "select * from award_rating where category_id=3 and voter_id='" . $_SESSION ['SESS_USER_AWARD'] . "' and session_table='" . $_SESSION ['SESS_TABLE_AWARD'] . "'";

$result = mysqli_query ( $query );

$importer_1_rows=mysqli_num_rows($result);

$importer_1 = mysqli_fetch_array ( $result );



$query = "select * from award_rating where category_id=4 and voter_id='" . $_SESSION ['SESS_USER_AWARD'] . "' and session_table='" . $_SESSION ['SESS_TABLE_AWARD'] . "'";

$result = mysqli_query ( $query );
$domestic_1_rows=mysqli_num_rows($result);

$domestic_1 = mysqli_fetch_array ( $result );



$query = "select * from award_rating where category_id=5 and voter_id='" . $_SESSION ['SESS_USER_AWARD'] . "' and session_table='" . $_SESSION ['SESS_TABLE_AWARD'] . "'";

$result = mysqli_query ( $query );

$transporter_1_rows=mysqli_num_rows($result);

$transporter_1 = mysqli_fetch_array ( $result );



$query = "select * from award_rating where category_id=6 and voter_id='" . $_SESSION ['SESS_USER_AWARD'] . "' and session_table='" . $_SESSION ['SESS_TABLE_AWARD'] . "'";

$result = mysqli_query ( $query );

$port_1_rows=mysqli_num_rows($result);

$port_1 = mysqli_fetch_array ( $result );



$query = "select * from award_rating where category_id=7 and voter_id='" . $_SESSION ['SESS_USER_AWARD'] . "' and session_table='" . $_SESSION ['SESS_TABLE_AWARD'] . "'";

$result = mysqli_query ( $query );

$coal_7_1_rows=mysqli_num_rows($result);

$coal_7_1 = mysqli_fetch_array ( $result );



$query = "select * from award_rating where category_id=8 and voter_id='" . $_SESSION ['SESS_USER_AWARD'] . "' and session_table='" . $_SESSION ['SESS_TABLE_AWARD'] . "'";

$result = mysqli_query ( $query );

$coal_8_1_rows=mysqli_num_rows($result);

$coal_8_1 = mysqli_fetch_array ( $result );



$query = "select * from award_rating where category_id=9 and voter_id='" . $_SESSION ['SESS_USER_AWARD'] . "' and session_table='" . $_SESSION ['SESS_TABLE_AWARD'] . "'";

$result = mysqli_query ( $query );

$coal_9_1_rows=mysqli_num_rows($result);

$coal_9_1 = mysqli_fetch_array ( $result );



?>

<!DOCTYPE php PUBLIC "-//W3C//DTD Xphp 1.0 Transitional//EN" "http://www.w3.org/TR/xphp1/DTD/xphp1-transitional.dtd">

<html>

<head>

<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />

<title>16th Indian Coal Markets Conference</title>

<link rel="stylesheet" type="text/css" href="css/style.css" />
<style type="text/css">
.next_category {
	/*background: linear-gradient(to bottom, #DC6060 0%, #960000 100%) repeat
		scroll 0 0 rgba(0, 0, 0, 0)!important;
	border: 1px solid #F13030!important;*/
	color: #00afef!important;
	cursor: pointer!important;
	display: block!important;
	font: 12px/35px 'droid_sansbold', Arial, Helvetica, sans-serif!important;
	padding: 0 15px!important;
	width: auto!important;
	text-decoration: none!important;
	margin-top: 10px!important;
}

a.nominate{
	margin: -70px 0px 0px 68px;
	position: relative;
	z-index: 2;	
}
a.next_category{
	margin: 0px 0px 0px 190px;
}
</style>

</head>

<body>
	<a href="award_user_pop.php" class="enquiry_award_popup enquiry_award"></a>
	<div class="wrapper">

    	 <?php include("header_award.php");?>

        <div class="clear" id="con" style="margin-top:10px;"><p><img src="images/homepagebanner-2.jpg" alt="" /></p></div>

		<div class="container">

			<div class="pad15">

				<!--<h1>Awards<?php //echo $content["page_header"]; ?></h1>-->

				<div class="text">

					<section id="container">
					
					

					<!--<p class="conference">

						At the 9th Indian Coal Markets Conference organised by<br>

						mjunction, we will be giving away awards<br> to

						Industry Participants

					</p>-->

					<div class="nominations">

						<div class="submit">

							<p class="desc01">Submit your Top 3 nominations</p>

							<p class="desc02">in order of priority for any/all categories</p>

						</div>

					</div>

					<div class="slider-main">

						<a href="#" class="prev-btn left" id="prev2"></a>

						<ul class="slider left" id="slider_UL">						

							<li id="list-03" class="active"><a href="#list-03-03"> <img
									src="images/slider03.jpg" alt="" title="" border="0"> <span
									class="active">Coal Importer<br>of the Year

								</span>

							</a></li>

							<li id="list-04"><a href="#list-04-04"> <img
									src="images/slider04.jpg" alt="" title="" border="0"> <span>Indain

										domestic coal<br>trader of the year

								</span>

							</a></li>

							<li id="list-05"><a href="#list-05-05"> <img
									src="images/slider05.jpg" alt="" title="" border="0"> <span>Coal

										Transporter<br>of the Year

								</span>

							</a></li>

							<li id="list-06"><a href="#list-06-06"> <img
									src="images/slider06.jpg" alt="" title="" border="0"> <span>Coal

										Port Performer <br>of the Year

								</span>

							</a></li>

							<li id="list-07"><a href="#list-07-07"> <img
									src="images/slider07.jpg" alt="" title="" border="0"> <span>Coal

										Inspection Agency<br>of the Year

								</span>

							</a></li>

							<li id="list-08"><a href="#list-08-08"> <img
									src="images/slider08.jpg" alt="" title="" border="0"> <span>Coal

										Mining Contractor <br>of the Year

								</span>

							</a></li>

							<li id="list-09"><a href="#list-09-09"> <img
									src="images/slider09.jpg" alt="" title="" border="0"> <span>
										Trade Finance <br>Bank of the Year

								</span>

							</a></li>

						</ul>

						<a href="#" class="next-btn right" id="next2"></a>

					</div>

					<div class="content-holder">

						<div class="last-date left">

							<div class="head">

								<p>The last date to vote is</p>

								<h4>
									7<sup>th</sup> Oct 2015.
								</h4>

							</div>

							<div class="information">

								<p>The Awards for Coal Mining company of the Year and Coal based

									Thermal Power Plant will be decided on the basis of companies

									self-nominating themselves.</p>

								<p>However, most of the other awards are for service providers

									and therefore it is important that we take the opinion of

									Industry Participants as to who was the best Service Provider

									in each Category.</p>

							</div>


						</div>
						<style>
.disabled {
	background: none !important;
	border: none !important
}
</style>

						<div class="slider-contents left" id="list-03-03">

							<h3 class="head02">Coal Importer of the Year</h3>

							<div class="msg2"
								style="background: #339900; color: #FFFFFF; padding: 10px; display: none;"></div>

							<div class="msg2_al"
								style="background: #AA0114; color: #FFFFFF; padding: 10px; display: none;"></div>

							<div class="submission">

								<div class="main-form left">

                                	<?php

										$disabled = "";									

										if($importer_1_rows>0) {

											$disabled = "disabled";

										}

									?>

									<form action="" name="coal_importer" id="coal_importer" method="post" class="data">
										<input type="hidden" name="form_issub_1" id="form_issub_1" value="0"> 
										<div class="row">

											<label for="lbl01" class="col01 left">1.</label> <input
												type="text"
												class="col02 left textbox text-input <?= $disabled ?>"
												name="importer_1" id="importer_1"
												value="<?php echo $importer_1['first_rank']; ?>"
												<?= $disabled ?>>

										</div>

										<div class="row">

											<label for="lbl02" class="col01 left">2.</label> <input
												type="text"
												class="col02 left textbox text-input <?= $disabled ?>"
												name="importer_2" id="importer_2"
												value="<?php echo $importer_1['second_rank']; ?>"
												<?= $disabled ?>>

										</div>

										<div class="row lst-child">

											<label for="lbl03" class="col01 left">3.</label> <input
												type="text"
												class="col02 left textbox text-input <?= $disabled ?>"
												name="importer_3" id="importer_3"
												value="<?php echo $importer_1['third_rank']; ?>"
												<?= $disabled ?>>

										</div>

										<div class="row lst-child">

											<div class="col01 left">&nbsp;</div>

											<a class="col02 left next_category" id="next">Next Category »</a>

										</div>

									</form>

								</div>

                                <?php if($disabled == "") { ?>

								<div class="form-info left coal_importer_info">

									<p> <br/>
										- If you do not wish to put in your nomination for particular awards category you can simply click on next   category button<br/>
										- You can put in up to a maximum of 3 separate nominations for each category<br/>
										- It is not mandatory to put in all 3 nominations.<br/>
										- The form will be auto saved when you switch back & forth between category tabs.<br/>
										- You can use the voting facility only once using one IP address.
									</p>

									<!-- <p>

										Once you are done, click on the Submit <br>button below to

										send you nominations

									</p> -->

								</div>

                                <?php } ?>

							</div>

                            <?php if($disabled == "") { ?>

							<a class="nominate left popup-link coal_importer_info"
								id="coal_importer_sub" style="display: none;">Submit Your Vote</a>

                            <?php } ?>

						</div>



						<div class="slider-contents left" id="list-04-04">

							<h3 class="head02">Indian domestic coal trader of the year</h3>

							<div class="msg3"
								style="background: #339900; color: #FFFFFF; padding: 10px; display: none;"></div>

							<div class="msg3_al"
								style="background: #AA0114; color: #FFFFFF; padding: 10px; display: none;"></div>

							<div class="submission">

								<div class="main-form left">

                                	<?php

										$disabled = "";
										
										if($domestic_1_rows>0) {

											$disabled = "disabled";

										}
									?>

									<form action="" name="coal_domestic" id="coal_domestic"
										method="post" class="data">
									<input type="hidden" name="form_issub_2" id="form_issub_2" value="0"> 
										<div class="row">

											<label for="lbl01" class="col01 left">1.</label> <input
												type="text"
												class="col02 left textbox text-input <?= $disabled ?>"
												name="domestic_1" id="domestic_1"
												value="<?php echo $domestic_1['first_rank']; ?>"
												<?= $disabled ?>>

										</div>

										<div class="row">

											<label for="lbl02" class="col01 left">2.</label> <input
												type="text"
												class="col02 left textbox text-input <?= $disabled ?>"
												name="domestic_2" id="domestic_2"
												value="<?php echo $domestic_1['second_rank']; ?>"
												<?= $disabled ?>>

										</div>

										<div class="row lst-child">

											<label for="lbl03" class="col01 left">3.</label> <input
												type="text"
												class="col02 left textbox text-input <?= $disabled ?>"
												name="domestic_3" id="domestic_3"
												value="<?php echo $domestic_1['third_rank']; ?>"
												<?= $disabled ?>>

										</div>

										<div class="row lst-child">

											<div class="col01 left">&nbsp;</div>

											<a class="col02 left next_category" id="next1">Next Category »</a>

										</div>

									</form>

								</div>

                                <?php if($disabled == "") { ?>

								<div class="form-info left coal_domestic_info">

									<p>	- If you do not wish to put in your nomination for particular awards category you can simply click on next   category button<br/>
										- You can put in up to a maximum of 3 separate nominations for each category<br/>
										- It is not mandatory to put in all 3 nominations.<br/>
										- The form will be auto saved when you switch back & forth between category tabs.<br/>
										- You can use the voting facility only once using one IP address.
									</p>

									

								</div>

                                <?php } ?>

							</div>

                            <?php if($disabled == "") { ?>

							<a class="nominate left popup-link coal_domestic_info"
								id="coal_domestic_sub" style="display: none;">Submit Your Vote</a>

                            <?php } ?>

						</div>



						<div class="slider-contents left" id="list-05-05">

							<h3 class="head02">Coal Transporter of the Year</h3>

							<div class="msg4"
								style="background: #339900; color: #FFFFFF; padding: 10px; display: none;"></div>

							<div class="msg4_al"
								style="background: #AA0114; color: #FFFFFF; padding: 10px; display: none;"></div>

							<div class="submission">

								<div class="main-form left">

                                	<?php

										$disabled = "";
										
										if($transporter_1_rows>0) {

											$disabled = "disabled";

										}
										
									?>

									<form action="" name="coal_transporter" id="coal_transporter"
										method="post" class="data">
										<input type="hidden" name="form_issub_3" id="form_issub_3" value="0"> 
										<div class="row">

											<label for="lbl01" class="col01 left">1.</label> <input
												type="text"
												class="col02 left textbox text-input <?= $disabled ?>"
												name="transporter_1" id="transporter_1"
												value="<?php echo $transporter_1['first_rank']; ?>"
												<?= $disabled ?>>

										</div>

										<div class="row">

											<label for="lbl02" class="col01 left">2.</label> <input
												type="text"
												class="col02 left textbox text-input <?= $disabled ?>"
												name="transporter_2" id="transporter_2"
												value="<?php echo $transporter_1['second_rank']; ?>"
												<?= $disabled ?>>

										</div>

										<div class="row lst-child">

											<label for="lbl03" class="col01 left">3.</label> <input
												type="text"
												class="col02 left textbox text-input <?= $disabled ?>"
												name="transporter_3" id="transporter_3"
												value="<?php echo $transporter_1['third_rank']; ?>"
												<?= $disabled ?>>

										</div>

										<div class="row lst-child">

											<div class="col01 left">&nbsp;</div>

											<a class="col02 left next_category" id="next0">Next Category »</a>

										</div>

									</form>

								</div>

                                <?php if($disabled == "") { ?>

								<div class="form-info left coal_transporter_info">

									<p> 
										- If you do not wish to put in your nomination for particular awards category you can simply click on next   category button<br/>
										- You can put in up to a maximum of 3 separate nominations for each category<br/>
										- It is not mandatory to put in all 3 nominations.<br/>
										- The form will be auto saved when you switch back & forth between category tabs.<br/>
										- You can use the voting facility only once using one IP address.
									</p>								

								</div>

                                <?php } ?>

							</div>

                            <?php if($disabled == "") { ?>

							<a class="nominate left popup-link coal_transporter_info"
								id="coal_transporter_sub" style="display: none;">Submit Your Vote</a>

                            <?php } ?>

						</div>



						<div class="slider-contents left" id="list-06-06">

							<h3 class="head02">Coal Port Performer of the Year</h3>

							<div class="msg5"
								style="background: #339900; color: #FFFFFF; padding: 10px; display: none;"></div>

							<div class="msg5_al"
								style="background: #AA0114; color: #FFFFFF; padding: 10px; display: none;"></div>

							<div class="submission">

								<div class="main-form left">

                                	<?php

										$disabled = "";
										
										if($port_1_rows>0) {

											$disabled = "disabled";

										}									

									?>

									<form action="" name="coal_port" id="coal_port" method="post"
										class="data">
										<input type="hidden" name="form_issub_4" id="form_issub_4" value="0"> 
										<div class="row">

											<label for="lbl01" class="col01 left">1.</label> <input
												type="text"
												class="col02 left textbox text-input <?= $disabled ?>"
												name="port_1_1" id="port_1"
												value="<?php echo $port_1['first_rank']; ?>"
												<?= $disabled ?>>

										</div>

										<div class="row">

											<label for="lbl02" class="col01 left">2.</label> <input
												type="text"
												class="col02 left textbox  text-input <?= $disabled ?>"
												name="port_1_2" id="port_2"
												value="<?php echo $port_1['second_rank']; ?>"
												<?= $disabled ?>>

										</div>

										<div class="row lst-child">

											<label for="lbl03" class="col01 left">3.</label> <input
												type="text"
												class="col02 left textbox text-input <?= $disabled ?>"
												name="port_1_3" id="port_3"
												value="<?php echo $port_1['third_rank']; ?>"
												<?= $disabled ?>>

										</div>

										<div class="row lst-child">

											<div class="col01 left">&nbsp;</div>

											<a class="col02 left next_category" id="next3">Next Category »</a>

										</div>

									</form>

								</div>

                                <?php if($disabled == "") { ?>

								<div class="form-info left coal_port_info">

									<p> 
										- If you do not wish to put in your nomination for particular awards category you can simply click on next   category button<br/>
										- You can put in up to a maximum of 3 separate nominations for each category<br/>
										- It is not mandatory to put in all 3 nominations.<br/>
										- The form will be auto saved when you switch back & forth between category tabs.<br/>
										- You can use the voting facility only once using one IP address.
									</p>

									

								</div>

                                <?php } ?>

							</div>

                            <?php if($disabled == "") { ?>

							<a class="nominate left popup-link coal_port_info"
								id="coal_port_sub" style="display: none;">Submit Your Vote</a>

                            <?php } ?>

						</div>



						<div class="slider-contents left" id="list-07-07">

							<h3 class="head02">Coal inspection Agency of the Year</h3>

							<div class="msg6"
								style="background: #339900; color: #FFFFFF; padding: 10px; display: none;"></div>

							<div class="msg6_al"
								style="background: #AA0114; color: #FFFFFF; padding: 10px; display: none;"></div>

							<div class="submission">

								<div class="main-form left">

                                	<?php

										$disabled = "";
										
										if($coal_7_1_rows>0) {
											$disabled = "disabled";
										}


									?>

									<form action="" name="coal_7" id="coal_7" method="post"
										class="data">
										<input type="hidden" name="form_issub_5" id="form_issub_5" value="0"> 
										<div class="row">

											<label for="lbl01" class="col01 left">1.</label> <input
												type="text"
												class="col02 left textbox text-input <?= $disabled ?>"
												name="coal_7_1_1" id="coal_7_1"
												value="<?php echo $coal_7_1['first_rank']; ?>"
												<?= $disabled ?>>

										</div>

										<div class="row">

											<label for="lbl02" class="col01 left">2.</label> <input
												type="text"
												class="col02 left textbox  text-input <?= $disabled ?>"
												name="coal_7_1_2" id="coal_7_2"
												value="<?php echo $coal_7_1['second_rank']; ?>"
												<?= $disabled ?>>

										</div>

										<div class="row lst-child">

											<label for="lbl03" class="col01 left">3.</label> <input
												type="text"
												class="col02 left textbox  text-input <?= $disabled ?>"
												name="coal_7_1_3" id="coal_7_3"
												value="<?php echo $coal_7_1['third_rank']; ?>"
												<?= $disabled ?>>

										</div>

										<div class="row lst-child">

											<div class="col01 left">&nbsp;</div>

											<a class="col02 left next_category" id="next4">Next Category »</a>

										</div>

									</form>

								</div>

                                <?php if($disabled == "") { ?>

								<div class="form-info left coal_7_info">

									<p> 
										- If you do not wish to put in your nomination for particular awards category you can simply click on next   category button<br/>
										- You can put in up to a maximum of 3 separate nominations for each category<br/>
										- It is not mandatory to put in all 3 nominations.<br/>
										- The form will be auto saved when you switch back & forth between category tabs.<br/>
										- You can use the voting facility only once using one IP address.
									</p>

									

								</div>

                                <?php } ?>

							</div>

                            <?php if($disabled == "") { ?>

							<a class="nominate left popup-link coal_7_info" id="coal_7_sub" style="display: none;"> Submit Your Vote</a>

                            <?php } ?>

						</div>



						<div class="slider-contents left" id="list-08-08">

							<h3 class="head02">Coal Mining Contractor of the Year</h3>

							<div class="msg7"
								style="background: #339900; color: #FFFFFF; padding: 10px; display: none;"></div>

							<div class="msg7_al"
								style="background: #AA0114; color: #FFFFFF; padding: 10px; display: none;"></div>

							<div class="submission">

								<div class="main-form left">

                                	<?php

										$disabled = "";
										
										if($coal_8_1_rows>0) {
											$disabled = "disabled";
										}

									?>

									<form action="" name="coal_8" id="coal_8" method="post"
										class="data">
	<input type="hidden" name="form_issub_6" id="form_issub_6" value="0"> 
										<div class="row">

											<label for="lbl01" class="col01 left">1.</label> <input
												type="text"
												class="col02 left textbox text-input <?= $disabled ?>"
												name="coal_8_1_1" id="coal_8_1"
												value="<?php echo $coal_8_1['first_rank']; ?>"
												<?= $disabled ?>>

										</div>

										<div class="row">

											<label for="lbl02" class="col01 left">2.</label> <input
												type="text"
												class="col02 left textbox text-input <?= $disabled ?>"
												name="coal_8_1_2" id="coal_8_2"
												value="<?php echo $coal_8_1['second_rank']; ?>"
												<?= $disabled ?>>

										</div>

										<div class="row lst-child">

											<label for="lbl03" class="col01 left">3.</label> <input
												type="text"
												class="col02 left textbox text-input <?= $disabled ?>"
												name="coal_8_1_3" id="coal_8_3"
												value="<?php echo $coal_8_1['third_rank']; ?>"
												<?= $disabled ?>>

										</div>

										<div class="row lst-child">

											<div class="col01 left">&nbsp;</div>

											<a class="col02 left next_category" id="next5">Next Category »</a>

										</div>

									</form>

								</div>

                                <?php if($disabled == "") { ?>

								<div class="form-info left coal_8_info">

									<p> 
										- If you do not wish to put in your nomination for particular awards category you can simply click on next   category button<br/>
										- You can put in up to a maximum of 3 separate nominations for each category<br/>
										- It is not mandatory to put in all 3 nominations.<br/>
										- The form will be auto saved when you switch back & forth between category tabs.<br/>
										- You can use the voting facility only once using one IP address.
									</p>

									

								</div>

                                <?php } ?>

							</div>

                            <?php if($disabled == "") { ?>

							<a class="nominate left popup-link coal_8_info" id="coal_8_sub" style="display: none;">Submit Your Vote</a>

                            <?php } ?>

						</div>



						<div class="slider-contents left" id="list-09-09">

							<h3 class="head02">Trade Finance Bank of the Year</h3>

							<div class="msg8"
								style="background: #339900; color: #FFFFFF; padding: 10px; display: none;"></div>

							<div class="msg8_al"
								style="background: #AA0114; color: #FFFFFF; padding: 10px; display: none;"></div>

							<div class="submission">

								<div class="main-form left">

                                	<?php

										$disabled = "";
										
										if($coal_9_1_rows>0) {
											$disabled = "disabled";
										}
										

									?>

									<form action="" name="coal_9" id="coal_9" method="post"
										class="data">
	<input type="hidden" name="form_issub_7" id="form_issub_7" value="0"> 
										<div class="row">

											<label for="lbl01" class="col01 left">1.</label> <input
												type="text"
												class="col02 left textbox text-input <?= $disabled ?>"
												name="coal_9_1_1" id="coal_9_1"
												value="<?php echo $coal_9_1['first_rank']; ?>"
												<?= $disabled ?>>

										</div>

										<div class="row">

											<label for="lbl02" class="col01 left">2.</label> <input
												type="text"
												class="col02 left textbox text-input <?= $disabled ?>"
												name="coal_9_1_2" id="coal_9_2"
												value="<?php echo $coal_9_1['second_rank']; ?>"
												<?= $disabled ?>>

										</div>

										<div class="row lst-child">

											<label for="lbl03" class="col01 left">3.</label> <input
												type="text"
												class="col02 left textbox text-input <?= $disabled ?>"
												name="coal_9_1_3" id="coal_9_3"
												value="<?php echo $coal_9_1['third_rank']; ?>"
												<?= $disabled ?>>

										</div>

										<div class="row lst-child">

											<div class="col01 left">&nbsp;</div>

										</div>

									</form>

								</div>

                                <?php if($disabled == "") { ?>

								<div class="form-info left coal_9_info">

									<p> 
										- If you do not wish to put in your nomination for particular awards category you can simply click on next   category button<br/>
										- You can put in up to a maximum of 3 separate nominations for each category<br/>
										- It is not mandatory to put in all 3 nominations.<br/>
										- The form will be auto saved when you switch back & forth between category tabs.<br/>
										- You can use the voting facility only once using one IP address.
									</p>
									

								</div>

                                <?php } ?>

							</div>

                            <?php if($disabled == "") { ?>
							<br/>
							<a class="nominate left popup-link coal_9_info" id="coal_9_sub">Submit Your Vote</a>

                            <?php } ?>

						</div>
						<div class="text">							
						</div>
						<div style="padding-top: 10px;" align="right">
							<!--<table cellpadding="0" cellspacing="0" border="0"
								style="padding-right: 25px;">
								<tr>
									<td>
										<div class="text">
											<p style="padding-top: 10px;">
												<b>If you have finished voting for all the categories,
													please click "Exit"</b><br>
												<span style="color: #666666;">(Please note: You cannot go
													back to voting, once you click 'Exit')</span>
											</p>

										</div>
									</td>
									<td width="25"></td>
									<td>
										<form  name="frmComplete" id="frmComplete"
											method="post" class="data">
											<input type="button" name="VoteCompleted" value="Exit" id="finalsubmit"
												class="btn">
										</form>
									</td>
								</tr>
							</table>-->
						</div>

					</div>



					</section>

					<div class="pop-up">

						<h5>To Complete your Nomination Process please provide following

							details</h5>

						<div class="user-info">

							<form action="">

								<div class="row">

									<label for="lbl01">Name</label> <input type="text" id="lbl01">

								</div>

								<div class="row">

									<label for="lbl02">Company Name</label> <input type="text"
										id="lbl02">

								</div>

								<div class="row">

									<label for="lbl03">Email</label> <input type="text" id="lbl03">

								</div>

								<div class="row">

									<label for="lbl04">Phone Number</label> <input type="text"
										id="lbl04">

								</div>

								<div class="row">

									<p>Just to confirm that you are a human, please enter the below

										text in the box.</p>

									<div class="confirm">

										<input type="text" class="msg left"> <input type="text"
											class="fill left">

									</div>

								</div>

								<div class="row lst-child">

									<a href="#" class="nominate left">Submit Nominations</a> <a
										href="#" class="link01 left  b-close">Cancel</a>

								</div>

							</form>

						</div>

					</div>

				</div>


			</div>

			<div class="clear"></div>

            <?php include("footer.php");?>

        </div>

	</div>

</body>

<link rel="stylesheet" type="text/css" href="css/font.css" media="all">

<script type="text/javascript" language="javascript"
	src="js/jquery.carouFredSel-6.2.0-packed.js"></script>

<script type="text/javascript" src="js/jQuery.bPopup.js"></script>

<!--[if lt IE 9]>

<script src="js/html5shiv.js"></script>

<link rel="stylesheet" type="text/css" href="css/ie.css" media="all"/>

<![endif]-->

<script>

  $(document).ready(function(){

	$('.popup-link').click(function(){

		//$('.pop-up').bPopup();

	});	  

  });

</script>

<script type="text/javascript" language="javascript">

$(function() {

		showmessage = function(response,msg)

		{

			if(response=='given')

			{

				$("."+msg+"_al").text("You have already given the vote.").fadeIn();

				$("."+msg+"_al").text("You have already given the vote.").fadeOut(5000);

			}

			else

			{

				$("."+msg).text("Vote Successfully Given").fadeIn();

				$("."+msg).text("Vote Successfully Given").fadeOut(5000);



			}

		}


	jQuery("#coal_importer").validationEngine('attach', {

	onValidationComplete: function(form, status){

		if(status)

		{

		c=$('#coal_importer input:text[value]').serialize();

		n=c.replace(/[^&]+=\.?(?:&|$)/g, '');

		//alert(n);

				$.ajax({

					type: "POST",

					url: "award_data.php",

					data: n,

					success:function(response){	

						//alert(response);

						jQuery("form#coal_importer .textbox").addClass("disabled").prop( "disabled", true );

						$(".coal_importer_info").remove();

						showmessage(response,'msg2');
						
						

				}

		});

		}

	}

	});

	jQuery("#coal_domestic").validationEngine('attach', {

	onValidationComplete: function(form, status){

		if(status)

		{

		c=$('#coal_domestic input:text[value]').serialize();

		n=c.replace(/[^&]+=\.?(?:&|$)/g, '');

	

				$.ajax({

					type: "POST",

					url: "award_data.php",

					data: n,

					success:function(response){	

					//alert(response);

					jQuery("form#coal_domestic .textbox").addClass("disabled").prop( "disabled", true );

					$(".coal_domestic_info").remove();

					showmessage(response,'msg3');

						

				}

		});

		}

	}

	});

	jQuery("#coal_transporter").validationEngine('attach', {

	onValidationComplete: function(form, status){

		if(status)

		{

		c=$('#coal_transporter input:text[value]').serialize();

		n=c.replace(/[^&]+=\.?(?:&|$)/g, '');

	

				$.ajax({

					type: "POST",

					url: "award_data.php",

					data: n,

					success:function(response){	

					jQuery("form#coal_transporter .textbox").addClass("disabled").prop( "disabled", true );

					$(".coal_transporter_info").remove();

					showmessage(response,'msg4');

						

				}

		});

		}

	}

	});

	jQuery("#coal_port").validationEngine('attach', {

	onValidationComplete: function(form, status){

		if(status)

		{

		c=$('#coal_port input:text[value]').serialize();

		n=c.replace(/[^&]+=\.?(?:&|$)/g, '');

	

				$.ajax({

					type: "POST",

					url: "award_data.php",

					data: n,

					success:function(response){	

					jQuery("form#coal_port .textbox").addClass("disabled").prop( "disabled", true );

					$(".coal_port_info").remove();

					showmessage(response,'msg5');

						

				}

		});

		}

	}

	});

	jQuery("#coal_7").validationEngine('attach', {

	onValidationComplete: function(form, status){

		if(status)

		{

		c=$('#coal_7 input:text[value]').serialize();

		n=c.replace(/[^&]+=\.?(?:&|$)/g, '');

		//alert(n);

				$.ajax({

					type: "POST",

					url: "award_data.php",

					data: n,

					success:function(response){	

						//alert(response);

						jQuery("form#coal_7 .textbox").addClass("disabled").prop( "disabled", true );

						$(".coal_7_info").remove();

					showmessage(response,'msg6');

						

				}

		});

		}

	}

	});

	jQuery("#coal_8").validationEngine('attach', {

	onValidationComplete: function(form, status){

		if(status)

		{

		c=$('#coal_8 input:text[value]').serialize();

		n=c.replace(/[^&]+=\.?(?:&|$)/g, '');

	

				$.ajax({

					type: "POST",

					url: "award_data.php",

					data: n,

					success:function(response){	

						jQuery("form#coal_8 .textbox").addClass("disabled").prop( "disabled", true );

						$(".coal_8_info").remove();

					showmessage(response,'msg7');

				}

		});

		}

	}

	});

	jQuery("#coal_9").validationEngine('attach', {

	onValidationComplete: function(form, status){

		if(status)

		{

		c=$('#coal_9 input:text[value]').serialize();

		n=c.replace(/[^&]+=\.?(?:&|$)/g, '');

	

				$.ajax({

					type: "POST",

					url: "award_data.php",

					data: n,

					success:function(response){	

						jQuery("form#coal_9 .textbox").addClass("disabled").prop( "disabled", true );

						$(".coal_9_info").remove();

					showmessage(response,'msg8');

				}

		});

		}

	}

	});

	

	$('.slider-contents').hide();

	$('#slider_UL').carouFredSel({

		circular: false,

		infinite: false,

		auto: false,

		prev: '#prev2',

		next: '#next2',

		mousewheel: true,		

		scroll : {

			 items           : 7,

			 easing          : "quadratic",

		   //  easing          : "cubic",

		   //  easing          : "elastic", 

			 duration        : 1000,                     

			 pauseOnHover    : true

		}   ,

		swipe: {

			onMouse: true,

			onTouch: true

		},

		width:1120

	});

});

            
$(document).ready(function() {

			 

            $('.slider-contents:first').show();

			

			$('#slider_UL li').on("click", function(){

				$('#slider_UL li').removeClass('active');

				$(this).addClass('active');

				var listId = $(this).attr("id");

				var lastChar = listId.substr(listId.length - 2);

				$('.slider-contents').hide();

				var idName = listId + '-' + lastChar;

				$('#'+idName).show();

			});

            

			$('#next').on("click", function(){

				var listId = $(this).parent().parent().parent().parent().parent().attr("id");
				//alert(listId);

				var lastChar = listId.substr(listId.length - 2);

				var idName = 'list-' + lastChar;
				//alert(idName);

				$(this).parent().parent().parent().parent().parent().hide().next().show();

				$('#slider_UL li').removeClass('active');

				$('#slider_UL').find('li#' + idName).next().addClass('active');

				$("#slider_UL").trigger("slideTo", $('#slider_UL').find('li#' + idName).next());
				$("#coal_importer").submit();
                $('#form_issub_1').val('1');

			});
			$('#next1').on("click", function(){

				var listId = $(this).parent().parent().parent().parent().parent().attr("id");
				//alert(listId);

				var lastChar = listId.substr(listId.length - 2);

				var idName = 'list-' + lastChar;
				//alert(idName);

				$(this).parent().parent().parent().parent().parent().hide().next().show();

				$('#slider_UL li').removeClass('active');

				$('#slider_UL').find('li#' + idName).next().addClass('active');

				$("#slider_UL").trigger("slideTo", $('#slider_UL').find('li#' + idName).next());
				$("#coal_domestic").submit();
                $('#form_issub_2').val('1');

			});
			
			$('#next0').on("click", function(){

				var listId = $(this).parent().parent().parent().parent().parent().attr("id");
				//alert(listId);

				var lastChar = listId.substr(listId.length - 2);

				var idName = 'list-' + lastChar;
				//alert(idName);

				$(this).parent().parent().parent().parent().parent().hide().next().show();

				$('#slider_UL li').removeClass('active');

				$('#slider_UL').find('li#' + idName).next().addClass('active');

				$("#slider_UL").trigger("slideTo", $('#slider_UL').find('li#' + idName).next());
				$("#coal_transporter").submit();
                $('#form_issub_3').val('1');

			});
			$('#next3').on("click", function(){

				var listId = $(this).parent().parent().parent().parent().parent().attr("id");
				//alert(listId);

				var lastChar = listId.substr(listId.length - 2);

				var idName = 'list-' + lastChar;
				//alert(idName);

				$(this).parent().parent().parent().parent().parent().hide().next().show();

				$('#slider_UL li').removeClass('active');

				$('#slider_UL').find('li#' + idName).next().addClass('active');

				$("#slider_UL").trigger("slideTo", $('#slider_UL').find('li#' + idName).next());
				$("#coal_port").submit();
                $('#form_issub_4').val('1');

			});
			$('#next4').on("click", function(){

				var listId = $(this).parent().parent().parent().parent().parent().attr("id");
				//alert(listId);

				var lastChar = listId.substr(listId.length - 2);

				var idName = 'list-' + lastChar;
				//alert(idName);

				$(this).parent().parent().parent().parent().parent().hide().next().show();

				$('#slider_UL li').removeClass('active');

				$('#slider_UL').find('li#' + idName).next().addClass('active');

				$("#slider_UL").trigger("slideTo", $('#slider_UL').find('li#' + idName).next());
				
				$("#coal_7").submit();
                $('#form_issub_5').val('1');

			});
			$('#next5').on("click", function(){

				var listId = $(this).parent().parent().parent().parent().parent().attr("id");
				//alert(listId);

				var lastChar = listId.substr(listId.length - 2);

				var idName = 'list-' + lastChar;
				//alert(idName);

				$(this).parent().parent().parent().parent().parent().hide().next().show();

				$('#slider_UL li').removeClass('active');

				$('#slider_UL').find('li#' + idName).next().addClass('active');

				$("#slider_UL").trigger("slideTo", $('#slider_UL').find('li#' + idName).next());
				$("#coal_8").submit();
                $('#form_issub_6').val('1');

			});

 });


$("#coal_importer_sub").click(function(){

$("#coal_importer").submit();
$('#form_issub_1').val('1');


});

 

$("#coal_domestic_sub").click(function(){

$("#coal_domestic").submit();
$('#form_issub_2').val('1');

});

 

$("#coal_transporter_sub").click(function(){

$("#coal_transporter").submit();
$('#form_issub_3').val('1');

});

 

$("#coal_port_sub").click(function(){

$("#coal_port").submit();
$('#form_issub_4').val('1');

}); 

 

$("#coal_7_sub").click(function(){

$("#coal_7").submit();
$('#form_issub_5').val('1');

}); 

$("#coal_8_sub").click(function(){

$("#coal_8").submit();
$('#form_issub_6').val('1');

}); 

 

$("#coal_9_sub").click(function(){

$("#coal_9").submit();
$('#form_issub_7').val('1');

}); 


$("#finalsubmit").click(function(){

	for(var i=1; i<=7; i++){
		var e = $('#form_issub_'+i);
		var frmsubmitstatus = e.val();
		if(frmsubmitstatus == '0'){
			var form = e.parent('form').get(0);
			var submittingFormId = form.id;
			var $inputs = $('#'+submittingFormId+' :input[type=text]');

		 	var values = [];
		    $inputs.each(function() {
		        //values[this.name] = $(this).val();
		        if($(this).val()!=''){
		        	values.push($(this).val());
		        }
		    	
		    });
			if(values.length != '0'){
				//submit form
				$('#'+submittingFormId).submit();
				
			}
		}
	}

	window.location.href="index.php?vote=1";

}); 


</script>

<script type="text/javascript" src="js/jquery.sudoSlider.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){			
			var sudoSlider = $("#slider1").sudoSlider({
				responsive: true,
				prevNext: false,
				numeric:false,
				continuous:true,
                slideCount: 1,
				vertical:false,
				auto: true,
				effect: "fade"
			});
			
		});
	</script>

<?php 
	if ($_SESSION ['SESS_USER_AWARD'] == '' || $_SESSION ['SESS_USER_AWARD'] == 0 || $_SESSION['SESS_TABLE_AWARD'] != "award_users") {
		?>
		<script type="text/javascript">
			$(document).ready(function(){
				$( "a.enquiry_award" ).trigger( "click" );
			});
		</script>
		<?php
	}
?>
