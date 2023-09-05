
<style>
	.tablepage {
		width: 100%;

	}
	.colscenter{
		text-align: center;
		font-weight: bold;
	}

	.td_date {
		text-align: center;
		line-height: 0.7;
		padding: 5px 0;
	}

	.boxed2 {
		padding: 10px;
		border: 1px solid #333;
		border-radius: 5px;
		height: 99%;
	}

	th, td {
		min-width: 30px;
		padding: 3px 5px;
		border: 1px solid #777777;
		font-size: 11pt;
	}

	table {
		border-collapse: collapse;
	}

	.pull-right {
		float: right
	}

	.pull-left {
		float: left;
	}

	.col-md-6 {
		width: 48%;
	}

	.printable {
		page-break-inside: avoid !important;
		page-break-after: avoid !important;
		page-break-before: avoid !important;
		width: 100% !important;
		max-height: 100%;
		margin-top: 0 !important;
	}

	.printable .solid {
		width: 100%;
		height: 100%;
	}

	.no-printable {
		margin: 15px !important;
		width: calc(100% - 30px) !important;
	}
	.fail{
		color:red;text-decoration: underline
	}
</style>
<?php
$i=1;
$student_reg=isset($_GET['student'])?$_GET['student']:false;
if (count($students)==0)echo "<h1 style=''>".lang("app.noStudentFound")."</h1>";
$result = new \App\Controllers\Home();
//print_r($students); die();
foreach ($students as $student) {
	if($student['id']==$student_reg || $student_reg===false){
		?>
		<div style="margin-top: 15px;width: 100%;float:left;" class="<?= $pdf ? 'printable' : 'no-printable'; ?>">
			<div class="col-md-12 col-sm-12 pull-left" style="margin: 20px 15px;width: 98%">
				<div class="pull-left" style="margin: 10px 0 10px 10px;width: 47%">
					<span><b><?= lang("app.republic".$country); ?> </b></span><br>
					<span><b><?= lang("app.ministry".$country); ?> </b></span><br>
					<span style="font-weight: bold"><?= $school_name; ?></span><br>
					<img src="<?= base_url('assets/images/logo/' . $school_logo); ?>" style="height: 70px;"
						 alt="School Logo"><br>
					<span><b><?= lang("app.mail"); ?></b> : <?= $school_email; ?></span><br>
					<span><b><?= lang("app.phone"); ?> </b>  : <?= $school_phone; ?></span><br>
					<?php
					if(strlen($school_pobox)>2){
						?>
						<span><b>P.O BOX </b>  : <?= $school_pobox; ?></span><br>
						<?php
					}
					?>
				</div>
				<?php
				if (@getimagesize(base_url('assets/images/profile/' . $student['photo']))) {
					?>
					<div style="width: 120px;float:left;margin-top: 20px">
						<img src="<?= base_url('assets/images/profile/' . $student['photo']); ?>"
							 style="width: 100%" alt=" ">
					</div>
					<?php
				}
				?>
				<div class="pull-right" style="margin-top: 10px;margin-right:10px;width: auto;min-width: 250px">

					<div>
						<span><b><?= lang("app.academicYear"); ?> </b> :<?= $academic_year_title; ?></span><br>
						<span><b><?= lang("app.firstName"); ?></b>  : <?= $student['fname']; ?> </span><br>
						<span><b><?= lang("app.lastName"); ?></b>   : <?= $student['lname']; ?></span><br>
						<span><b><?= lang("app.sClass"); ?> </b>   : <?= $student['level_name'] ?> <?= $student['title'] ?> <?= $student['code'] ?></span><br>
						<span><b><?= lang("app.regNo"); ?></b>   :<?= $student['regno'] ?></span><br>
					</div>
				</div>
				<div style="background:white;">
					<div style="height: 98%">
						<h4 style="text-align: center;float: left;width: 100%;margin: 20px 0 16px 0;font-size: 19px;font-weight: bold;">
							PROGRESSIVE SCHOOL REPORT</h4>
						<table class="tablepage" border="1">
							<!--Table head-->
							<tbody id="disciplineTable">
							<tr>
								<td colspan="4" rowspan="2" width="40%" style="text-transform: uppercase;font-weight: bold"><?= lang("app.subject"); ?> </td>
								<td colspan="3" class="colscenter"><?= lang("app.maxim"); ?> </td>
								<td colspan="3" class="colscenter"><?= lang("app.".termToStr($term)); ?> </td>
							</tr>
							<tr>
								<td class="colscenter"><?= lang("app.cat"); ?> </td>
								<td class="colscenter"><?= lang("app.ex"); ?> </td>
								<td class="colscenter"><?= lang("app.tot"); ?> </td>
								<td class="colscenter"><?= lang("app.cat"); ?> </td>
								<td class="colscenter"><?= lang("app.ex"); ?> </td>
								<td class="colscenter"><?= lang("app.tot"); ?> </td>
							</tr>
							<tr>
								<td colspan="4"><?= lang("app.discipline"); ?> </td>
								<td colspan="3" class="colscenter"><?= $discipline_max; ?></td>
								<?php
								?>
								<td colspan="3" class="colscenter"><?= $discipline_max - extractDisciplineMarks($student['displine_marks'],$term); ?></td>
							</tr>
							<?php
							$category = "";
							$cat = 0;
							$exam = 0;
							$totalCatColumn = 0;
							$totalExamColumn = 0;
							$total = 0;
							foreach ($student['courses'] as $core) {
							if ($category != $core['category']) {
								if(in_array($school_id,[33]) && $student['department_id']==1){
									echo "<tr>
					<td colspan=\"10\" style=\"background-color: #f5e1b9\"><b>&nbsp;</b></td>
				</tr>";
								}else {
									echo "<tr>
					<td colspan=\"10\" style=\"background-color: #f5e1b9\"><b>" . strtoupper($core['category']) . "</b></td>
				</tr>";
								}
								$category = $core['category'];
							}
							?>
							<tr>
								<td colspan="4"><?= $core['title']; ?></td>
								<td class="colscenter"><?= $core['marks'] ; ?></td>
								<td class="colscenter"><?= $core['marks'] ; ?></td>
								<td class="colscenter"><?= $core['marks']*2; ?></td>
								<?php
								$datas = [['marks'=>'','id'=>0],['marks'=>'','id'=>0]];
								if (isset($core['result'])){
									$datas = $core['result'][$term];
								}
//								var_dump($datas);die();
								$totalCount = 0;
								$examMarks = ' - ';
								$catMarks = ' - ';
								$ExamEchec='';
								$catEchec='';
								$examSum = 0;
								$catSum = 0;

								foreach ($datas as $index => $data){
									$rowMarks = strlen($data['marks']) == 0 ? 0 : $data['marks'];
									$marks = strlen($data['marks']) == 0 ? '-' : number_format($data['marks'], 1);
									$echec =  ($data['marks'] < ($core['marks'] / 4) && !strlen($data['marks']) == 0) ? 'fail' : '';
									if(strlen($data['marks']) > 0 && in_array($data['id'], [1,2])){
										$totalCount++;
									}
									if ($data['id']==2){
										//exam
										$ExamEchec =  ($data['marks'] < ($core['marks'] / 2) && !strlen($data['marks']) == 0) ? 'fail' : '';
										$examMarks = $marks;
										$totalExamColumn += $rowMarks;
										$examSum += $rowMarks;
									} else if (in_array($data['id'],[1,19])){
										//cat
										$catEchec =  ($data['marks'] < ($core['marks'] / 2) && !strlen($data['marks']) == 0) ? 'fail' : '';
										$catMarks = $marks;
										$totalCatColumn += $rowMarks;
										$catSum += $rowMarks;
									} else {
										echo "invalid marks found";die();
//									$catSum += $rowMarks;
									}
								}
								$rowTotal = $examSum+$catSum;
								$totalEchec = ($rowTotal < $core['marks'] && $totalCount > 0) ? 'fail' : '';
								$tm = $totalCount == 0 ? '-' : number_format(($rowTotal), 1);
								$cat += $core['marks'];
								$exam += $core['marks'];
								$total += $core['marks']*2;



								//							$datas = $core['result'];
								//							$catEchec = ($datas['marks']<($core['marks']/2) && !strlen($datas['marks'])==0)?'fail':'';
								//							$ExamEchec = ($examMarks<($core['marks']/2) && !strlen($examMarks)==0)?'fail':'';
								//							$total = $examMarks + $datas['marks'];
								//							$totalEchec = ($total<$core['marks'] && (!strlen($examMarks)==0 || !strlen($datas['marks'])==0))?'fail':'';
								//							$cm = strlen($datas['marks'])==0?'-':number_format($datas['marks'], 1);
								//							$em = strlen($examMarks)==0?'-':number_format($examMarks, 1);
								//							$tm = (strlen($examMarks)==0 && strlen($datas['marks'])==0)?'-':number_format($total, 1);
								echo "<td class='$catEchec'>" . $catMarks . "</td>
								      <td class='$ExamEchec'>" . $examMarks . "</td>
									  <td class='$totalEchec'>" . $tm . "</td></tr>";
								$cat += $core['marks'];
								$exam += $core['marks'];
								}; ?>
							<tr>
								<?php
								$catGEchec = $totalCatColumn<($cat/2)?'fail':'';
								$ExamGEchec = $totalExamColumn<($cat/2)?'fail':'';
								$totalGEchec = ($totalExamColumn+ $totalCatColumn)<$cat?'fail':'';
								?>
								<td colspan="4"><b><?= lang("app.total"); ?> </b></td>
								<td class="colscenter"><?= $cat; ?></td>
								<td class="colscenter"><?= $exam; ?></td>
								<td class="colscenter"><?= ($cat + $exam); ?></td>
								<td class="<?=$catGEchec;?>"><?= number_format($totalCatColumn,1); ?></td>
								<td class="<?=$ExamGEchec;?>"><?= number_format($totalExamColumn,1); ?></td>
								<td class="<?=$totalGEchec;?>"><?= number_format(($totalExamColumn+ $totalCatColumn),1); ?></td>
							</tr>
							<tr style="background-color: #f5e1b9">
								<?php
								$perc = $total ==0 ? 0 :($totalExamColumn + $totalCatColumn)*100/$total;
								?>
								<td colspan="7"><b><?= lang("app.per"); ?> </b></td>
								<td colspan="3" class="colscenter <?=$perc<50?'fail':'';?>"><?=number_format($perc,1); ?>%</td>
							</tr>
							<tr style="background-color: #f5e1b9">
								<td colspan="7"><b><?= lang("app.position"); ?> </b></td>
								<td colspan="3" class="colscenter"><?=$i;?> out of <?=count($students );?></td>
							</tr>
							<tr>
								<td colspan="4"><b><?= lang("app.tSignture"); ?> </b></td>
								<td colspan="6" style="height: 40px"></td>
							</tr>
							<tr>
								<td colspan="4"><b><?= lang("app.pSignture"); ?> </b></td>
								<td colspan="6" style="height: 40px"></td>
							</tr>
							<tr style="height: 100px;">

								<td colspan="10" class="" style="text-align: left;">
									<div style="width: 350px;float: right">
										<div style="width:100%;">
											<div style="text-align: center;margin-top: 20px;margin-bottom: 10px">
												<strong style="text-align: left;float: left;width:100%;">Done at <strong><?=$school_address;?></strong> on <?= date('d / m / Y'); ?></strong>
											</div>
										</div>
										<div style="width:100%;float: left">
											<p style="font-weight: bold;margin-top: 20px"><?= $head_master; ?></p>
											<div class="spacer" style="height: 0"></div>
											<label style="font-weight: normal">School <?=$head_master_gender=='F'?'Headmistress':'Headmaster';?></label>
										</div>
										<div class="spacer" style="height: 20px"></div>
										<div style="width:100%;margin: 20px 0;float: left">
											<p>Signature and stamp</p>
											<div class="spacer" style="height: 20px"></div>
											<p style="margin-bottom: 60px">
												<?php
												if (strlen($headmaster_signature)>5){
													?>
													<img src="<?= base_url('assets/images/signatures/' . $headmaster_signature); ?>" style="width: 200px;"
														 alt="Headmaster signature">
													<?php
												}else{
													echo "----------------------------------------";
												}
												?>
											</p>
										</div>
									</div>
								</td>
							</tr>
							</tbody>
							<!--Table body-->
						</table>
					</div>
					<!--Table-->
					<div class="col-md-12 col-sm-12 ">
						<footer class="pull-right" style="color: darkgrey"><?= lang("app.printedBy"); ?> </footer>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
	$i++;
}?>
