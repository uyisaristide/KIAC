<style>
	.bold-right {
		border-right: 2px solid black;
	}

	.no-printable {
		margin: 15px !important;
		width: calc(100% - 30px) !important;
	}

	.fail {
		color: red;
		text-decoration: underline
	}

	.tablepage {
		width: 100%;

	}

	.colscenter {
		text-align: center;
		font-weight: bold;
	}

	.solid {
		border-style: solid;
		border-width: 2px;
	}

	.solid2 {
		border-style: solid;
		border-width: 1.5px;
		margin-right: 5px;
		margin-left: 10px;
	}

	.report_footer {
		padding-right: 50px;
		padding-left: 50px;
		margin-top: -10px;
	}

	.col-md-12 {
		width: 100%;
		float: left;
	}

	.col-md-6 {
		width: 50%;
		float: left;
	}

	.cols4 {
		width: 15%;
		float: left;
		padding: 5px;
		display: inline;
	}

	th, td {
		min-width: 30px;
		padding: 3px 5px;
		border: 1px solid #777777;
		<?php
		if($school_id!=25){
		echo 'font-size: 10pt';
		}
		?>
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

	.spacer {
		float: left;
		width: 100%;
		height: 20px
	}

	#printable {
		page-break-inside: avoid !important;
		page-break-after: avoid !important;
		page-break-before: avoid !important;
		margin-top: 0 !important;
		max-height: 100%;
	}

	/*#printable .solid {*/
	/*	height: 99%;*/
	/*}*/

</style>
<?php
$i           = 1;
$student_reg = isset($_GET['student']) ? $_GET['student'] : false;
if (count($students) === 0)
{
	echo "<h1 style=''>" . lang('app.noStudentFound') . '</h1>';
}
$result = new \App\Controllers\Home();
//print_r($students); die();
foreach ($students

 as $student)
{
	if (! isset($student['id']))
	{
		//positional data
		break;
	}
	if ($student['id'] === $student_reg || $student_reg === false)
	{
		?>
		<div style="margin-top: 15px;width: 100%;float:left;" id="printable">
			<div class="col-md-12 col-sm-12 pull-left " style="margin-bottom: 0">
				<div style="background:white;padding: 10px;overflow: hidden;height: 98%;" class="solid">
					<div style="margin-left: 27px;margin-right: 10px;width: 100%">
						<div style="float: left;" class="col-md-6">
							<strong
									style="font-weight: 800;font-size: 18px;"><?= strtoupper($school_name); ?></strong>
							<br/>
							<div style="margin: 10px 0;">
								<img src="<?= base_url('assets/images/logo/' . $school_logo); ?>"
									 style="height: 80px;" alt="School Logo">
							</div>
							<br/>
							<span style="font-size: 12pt"><b><?= lang('app.mail'); ?></b> : <?= $school_email; ?></span><br>
							<span style="font-size: 12pt"><b><?= lang('app.phone'); ?> </b>  : <?= $school_phone; ?></span><br>
							<?php
							if (strlen($school_pobox) > 2)
							{
								?>
								<span><b><?= lang('app.poBox'); ?></b>  : <?= $school_pobox; ?></span><br>
								<?php
							}
							?>
							<!--								<span><b>Kigali city</b></span><br>-->
							<!--								<span><b>Gasabo district</b></span><br>-->
							<!--								<span><b>Nduba sector</b></span><br>-->
							<!--								<span><b>Gasanze cell</span><br>-->
						</div>
						<div style="float: right;" class="col-md-6">
							<div style="padding: 0 25px 0 0;height: 140px;text-align: center;float: right">
								<img src="<?= base_url('assets/images/profile/' . $student['photo']); ?>"
									 style="width: auto;height: 100%" alt="">
								<?php if (strlen($student['photo']) < 3): ?>
									<strong>Photo</strong>
								<?php endif; ?>
							</div>
							<div class="spacer" style="height: 5px"></div>
							<div style="float: right;margin-top: 10px;padding: 0 25px 0 0">
								<strong><?= lang('app.studentName'); ?>
									: </strong><span><?= $student['fname']; ?> &nbsp;  <?= $student['lname']; ?></span><br/>

								<strong><?= lang('app.academicYear'); ?>: </strong><?= $academic_year_title; ?><br>
								<strong><?= lang('app.className'); ?>
									: </strong><span><?= $student['level_name'] ?> <?= $student['title'] ?> <?= $student['code'] ?></span>

								<!--								<strong>Date of birth: </strong><span>-->
								<?//= $student['dob'] ?><!--</span><br>-->

							</div>
						</div>
					</div>
					<div style="background:white;">
						<div style="height: 98%">
							<?php
							if($school_id==25){
								echo '<div class="spacer"></div>';
							}
							?>
							<h4 style="text-align: center;float: left;width: 100%;margin: 20px 0 16px 0;font-size: 19px;font-weight: bold;">
								<?= lang('app.nurserySectionReport'); ?></h4>
							<?php
							if($school_id==25){
								echo '<div class="spacer"></div>';
							}
							?>
							<table class="tablepage" border="1">
								<!--Table head-->
								<tbody id="disciplineTable">
								<tr>
									<td colspan="4" rowspan="2" width="40%"
										style="text-transform: uppercase;font-weight: bold"
										class="bold-right"><?= lang('app.subject'); ?> </td>
									<td colspan="3" class="colscenter bold-right"><?= lang('app.maxim'); ?> </td>
									<td colspan="3" class="colscenter bold-right"><?= lang('app.term1'); ?></td>
									<td colspan="3" class="colscenter bold-right"><?= lang('app.term2'); ?></td>
									<td colspan="3" class="colscenter bold-right"><?= lang('app.term3'); ?></td>
									<td colspan="3" class="colscenter"><?= lang('app.annual'); ?></td>
								</tr>
								<tr>
									<td class="colscenter"><?= lang('app.cat'); ?> </td>
									<td class="colscenter"><?= lang('app.ex'); ?> </td>
									<td class="colscenter bold-right"><?= lang('app.tot'); ?> </td>
									<?php
									for ($a = 0; $a < 4; $a++)
									{
										?>
										<td class="colscenter"><?= lang('app.cat'); ?> </td>
										<td class="colscenter"><?= lang('app.ex'); ?> </td>
										<td class="colscenter"><?= lang('app.tot'); ?> </td>
																		<?php
									}; ?>
								</tr>
								<?php
								$category         = '';
								$cat              = 0;
								$exam             = 0;
								$totalCat1Column  = 0;
								$totalCat2Column  = 0;
								$totalCat3Column  = 0;
								$totalCat4Column  = 0;
								$totalExam1Column = 0;
								$totalExam2Column = 0;
								$totalExam3Column = 0;
								$totalExam4Column = 0;
								foreach ($student['courses'] as $core)
								{
									?>
								<tr>
									<td colspan="4" class="bold-right"><?= $core['title']; ?></td>
									<td class="colscenter"><?= $core['marks']; ?></td>
									<td class="colscenter"><?= $core['marks']; ?></td>
									<td class="colscenter bold-right"><?= $core['marks'] * 2; ?></td>
									<?php
									$datas       = $core['result'];
									$mCat1       = $datas['cat'][1] ?? null;
									$mCat2       = $datas['cat'][2] ?? null;
									$mCat3       = $datas['cat'][3] ?? null;
									$mCat4       = $mCat1 + $mCat2 + $mCat3;
									$mEx1        = $datas['exam'][1] ?? null;
									$mEx2        = $datas['exam'][2] ?? null;
									$mEx3        = $datas['exam'][3] ?? null;
									$mEx4        = $mEx1 + $mEx2 + $mEx3;
									$cat1Perc    = $mCat1 * 100 / $core['marks'];
									$cat2Perc    = $mCat2 * 100 / $core['marks'];
									$cat3Perc    = $mCat3 * 100 / $core['marks'];
									$cat4Perc    = $mCat4 * 100 / ($core['marks'] * 3);
									$ex1Perc     = $mEx1 * 100 / $core['marks'];
									$ex2Perc     = $mEx2 * 100 / $core['marks'];
									$ex3Perc     = $mEx3 * 100 / $core['marks'];
									$ex4Perc     = $mEx4 * 100 / ($core['marks'] * 3);
									$total1      = $mEx1 + $mCat1;
									$total2      = $mEx2 + $mCat2;
									$total3      = $mEx3 + $mCat3;
									$total4      = $total1 + $total2 + $total3;
									$total1Perc  = $total1 * 100 / ($core['marks'] * 2);
									$total2Perc  = $total2 * 100 / ($core['marks'] * 2);
									$total3Perc  = $total3 * 100 / ($core['marks'] * 2);
									$total4Perc  = $total4 * 100 / ($core['marks'] * 2 * 3);
									$total2Echec = ($total2 < $core['marks'] && (! strlen($mEx2) === 0 || ! strlen($mCat2) === 0)) ? 'fail' : '';
									$total3Echec = ($total3 < $core['marks'] && (! strlen($mEx3) === 0 || ! strlen($mCat3) === 0)) ? 'fail' : '';
									$total4Echec = ($total4 < $core['marks'] * 3 && (! strlen($mEx4) === 0 || ! strlen($mCat4) === 0)) ? 'fail' : '';
									$cm1         = strlen($mCat1) === 0 ? '-' : number_format($mCat1, 1);
									$em1         = strlen($mEx1) === 0 ? '-' : number_format($mEx1, 1);
									$tm1         = (strlen($mEx1) === 0 && strlen($mCat1) === 0) ? '-' : number_format($total1, 1);
									$cm2         = strlen($mCat2) === 0 ? '-' : number_format($mCat2, 1);
									$em2         = strlen($mEx2) === 0 ? '-' : number_format($mEx2, 1);
									$tm2         = (strlen($mEx2) === 0 && strlen($mCat2) === 0) ? '-' : number_format($total2, 1);
									$cm3         = strlen($mCat3) === 0 ? '-' : number_format($mCat3, 1);
									$em3         = strlen($mEx3) === 0 ? '-' : number_format($mEx3, 1);
									$tm3         = (strlen($mEx3) === 0 && strlen($mCat3) === 0) ? '-' : number_format($total3, 1);
									$cm4         = strlen($mCat4) === 0 ? '-' : number_format($mCat4, 1);
									$em4         = strlen($mEx4) === 0 ? '-' : number_format($mEx4, 1);
									$tm4         = (strlen($mEx4) === 0 && strlen($mCat4) === 0) ? '-' : number_format($total4, 1);
									echo "<td  style='background-color: " . grade_color($grades, $cat1Perc) . "'></td>
								      <td  style='background-color: " . grade_color($grades, $ex1Perc) . "'></td>
								      <td  style='background-color: " . grade_color($grades, $total1Perc) . "' class='bold-right'></td>
									  <td  style='background-color: " . grade_color($grades, $cat2Perc) . "'></td>
								      <td  style='background-color: " . grade_color($grades, $ex2Perc) . "'></td>
								      <td  style='background-color: " . grade_color($grades, $total2Perc) . "' class='bold-right'></td>
									  <td  style='background-color: " . grade_color($grades, $cat3Perc) . "'></td>
								      <td  style='background-color: " . grade_color($grades, $ex3Perc) . "'></td>
								      <td  style='background-color: " . grade_color($grades, $total3Perc) . "' class='bold-right'></td>
									  <td  style='background-color: " . grade_color($grades, $cat4Perc) . "'></td>
								      <td  style='background-color: " . grade_color($grades, $ex4Perc) . "'></td>
								      <td  style='background-color: " . grade_color($grades, $total4Perc) . "'></td>
									  </tr>";
									$cat              += $core['marks'];
									$exam             += $core['marks'];
									$total             = $cat + $exam;
									$totalCat1Column  += $mCat1;
									$totalCat2Column  += $mCat2;
									$totalCat3Column  += $mCat3;
									$totalCat4Column  += $mCat1 + $mCat2 + $mCat3;
									$totalExam1Column += $mEx1;
									$totalExam2Column += $mEx2;
									$totalExam3Column += $mEx3;
									$totalExam4Column += $mEx1 + $mEx2 + $mEx3;
								}; ?>
								<tr>
									<?php
									$cat1GEchec   = $totalCat1Column < ($cat / 2) ? 'fail' : '';
									$cat2GEchec   = $totalCat2Column < ($cat / 2) ? 'fail' : '';
									$cat3GEchec   = $totalCat3Column < ($cat / 2) ? 'fail' : '';
									$cat4GEchec   = $totalCat4Column < ($cat / 2) ? 'fail' : '';
									$Exam1GEchec  = $totalExam1Column < ($cat / 2) ? 'fail' : '';
									$Exam2GEchec  = $totalExam2Column < ($cat / 2) ? 'fail' : '';
									$Exam3GEchec  = $totalExam3Column < ($cat / 2) ? 'fail' : '';
									$Exam4GEchec  = $totalExam4Column < ($cat / 2) ? 'fail' : '';
									$total1GEchec = ($totalExam1Column + $totalCat1Column) < $cat ? 'fail' : '';
									$total2GEchec = ($totalExam2Column + $totalCat2Column) < $cat ? 'fail' : '';
									$total3GEchec = ($totalExam3Column + $totalCat3Column) < $cat ? 'fail' : '';
									$total4GEchec = ($totalExam4Column + $totalCat4Column) < $cat ? 'fail' : '';
									?>
									<td colspan="4" class="bold-right"><b><?= lang('app.genTot'); ?> </b></td>
									<td class="colscenter"><?= $cat; ?></td>
									<td class="colscenter"><?= $exam; ?></td>
									<td class="colscenter bold-right"><?= ($cat + $exam); ?></td>
									<td style='background-color: <?= grade_color($grades, $totalCat1Column * 100 / $cat); ?>'></td>
									<td style='background-color: <?= grade_color($grades, $totalExam1Column * 100 / $exam); ?>'></td>
									<td style='background-color: <?= grade_color($grades, ($totalExam1Column + $totalCat1Column) * 100 / ($cat + $exam)); ?>'
										class="bold-right"></td>
									<td style='background-color: <?= grade_color($grades, $totalCat2Column * 100 / $cat); ?>'></td>
									<td style='background-color: <?= grade_color($grades, $totalExam2Column * 100 / $exam); ?>'></td>
									<td style='background-color: <?= grade_color($grades, ($totalExam2Column + $totalCat2Column) * 100 / ($cat + $exam)); ?>'
										class="bold-right"></td>
									<td style='background-color: <?= grade_color($grades, $totalCat3Column * 100 / $cat); ?>'></td>
									<td style='background-color: <?= grade_color($grades, $totalExam3Column * 100 / $exam); ?>'></td>
									<td style='background-color: <?= grade_color($grades, ($totalExam3Column + $totalCat3Column) * 100 / ($cat + $exam)); ?>'
										class="bold-right"></td>
									<td style='background-color: <?= grade_color($grades, $totalCat4Column * 100 / ($cat * 3)); ?>'></td>
									<td style='background-color: <?= grade_color($grades, $totalExam4Column * 100 / ($exam * 3)); ?>'></td>
									<td style='background-color: <?= grade_color($grades, ($totalExam4Column + $totalCat4Column) * 100 / (($cat + $exam) * 3)); ?>'></td>
								</tr>
								<tr style="background-color: #f5e1b9">
									<td colspan="7"><b><?= lang('app.per'); ?> </b></td>
									<?php
									$perc1 = ($totalExam1Column + $totalCat1Column) * 100 / $total;
									$perc2 = ($totalExam2Column + $totalCat2Column) * 100 / $total;
									$perc3 = ($totalExam3Column + $totalCat3Column) * 100 / $total;
									$perc4 = ($perc1 + $perc2 + $perc3) / 3;
									if ($school_id == 42)
									{
										?>
										<td colspan="3"
											style='background-color: <?= grade_color($grades, $perc1); ?>'
											class="bold-right">
										</td>
										<td colspan="3"
											style='background-color: <?= grade_color($grades, $perc2); ?>'
											class="bold-right">
										</td>
										<td colspan="3"
											style='background-color: <?= grade_color($grades, $perc3); ?>'
											class="bold-right">
										</td>
										<td colspan="3"
											style='background-color: <?= grade_color($grades, $perc4); ?>'>
										</td>
										<?php
									}
									else
									{
										?>
										<td colspan="3"
											class="colscenter <?= $perc1 < 50 ? 'fail' : ''; ?> bold-right"><?= number_format($perc1, 1); ?>
											%
										</td>
										<td colspan="3"
											class="colscenter <?= $perc2 < 50 ? 'fail' : ''; ?> bold-right"><?= number_format($perc2, 1); ?>
											%
										</td>
										<td colspan="3"
											class="colscenter <?= $perc3 < 50 ? 'fail' : ''; ?> bold-right"><?= number_format($perc3, 1); ?>
											%
										</td>
										<td colspan="4"
											class="colscenter <?= $perc4 < 50 ? 'fail' : ''; ?>"><?= number_format($perc4, 1); ?>
											%
										</td>
										<?php
									}
									?>
								</tr>
								<tr>
									<td colspan="4"><b><?= lang('app.tSignture'); ?> </b></td>
									<td colspan="16" style="height: 40px"></td>
								</tr>
								<tr>
									<td colspan="4"><b><?= lang('app.pSignture'); ?> </b></td>
									<td colspan="16" style="height: 40px"></td>
								</tr>
								<tr style="height: 100px;">
									<td colspan="10" style="position: relative;">
										<div style="position: absolute;top: 20px;left: 20px;width: 100%">
											<div style="display: inline-block;width: 100%;float: left">
												<!--											<div class="cols4">-->
												<!--												<strong>Colors:</strong>-->
												<!--											</div>-->
												<?php foreach ($grades as $grade): ?>
													<div class="cols4" style="text-align: center;">
														<div style="background-color:<?= $grade['color'] ?>;border: solid black 2px;">
															<?= $grade['color_title']; ?>
														</div>
														<strong><?= $grade['max_point']; ?>
															- <?= $grade['min_point']; ?></strong>
													</div>
												<?php endforeach; ?>
											</div>
											<?php
											if (! $isFinalClass || ($isFinalClass && ! empty($student['decision']) ))
											{
												?>
												<div style="margin-top: 30px">
													<p style="font-weight: bold;margin-bottom: 0"><?= lang('app.deliberationDecision'); ?>
														:
														<span class="badge badge-dark" style="font-weight: normal">
												<?php
												if (! empty($student['decision']))
												{
													echo verdictText($student['decision']);
												}
												else
												{
													echo lang('app.pending') . '...';
												}
												?>
										</span></p>
												</div>
												<?php
											}
											?>
										</div>
									</td>
									<td colspan="10" class="" style="text-align: left;">
										<div style="width: 350px;float: right">
											<div style="width:100%;">
												<div style="text-align: center;margin-top: 20px;margin-bottom: 10px">
													<strong style="text-align: left;float: left;width:100%;">
														<?= lang('app.doneAt'); ?>
														<strong><?= $school_address; ?></strong>
														<?= lang('app.on'); ?> <?= date('d / m / Y'); ?></strong>
												</div>
											</div>
											<div style="width:100%;float: left">
												<p style="font-weight: bold;margin-top: 20px"><?= $head_master; ?></p>
												<div class="spacer" style="height: 0"></div>
												<label style="font-weight: normal"><?= lang('app.' . ($head_master_gender === 'F' ? 'schoolHeadmistress' : 'schoolHeadmaster')); ?></label>
											</div>
											<div class="spacer" style="height: 5px"></div>
											<div style="width:100%;margin: 20px 0;float: left">
												<p><?= lang('app.SignatureStamp'); ?></p>
												<p style="margin-bottom: 0">
													<?php
													if (strlen($headmaster_signature) > 5)
													{
														?>
														<img src="<?= base_url('assets/images/signatures/' . $headmaster_signature); ?>"
															 style="<?=$school_id!=25?'max-height: 80px;':'max-height: 200px;';?>"
															 alt="">
														<?php
													}
													else
													{
														echo "<p style='height: 80px'>----------------------------------------</p>";
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
							<footer class="pull-right" style="color: darkgrey"><?= lang('app.printedBy'); ?> </footer>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
	$i++;
} ?>
