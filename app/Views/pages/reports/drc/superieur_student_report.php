<style>
	.tablepage {
		width: 100%;
		border: 3px solid;
	}
	.bold-border{
		border-right: 3px solid;
	}
	.colscenter {
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

	.fail {
		color: red;
		text-decoration: underline
	}

	.border-bottom {
		border: 3px solid #000;
		float: left;
	}
	.not-available{
		background: #494949;
		border: 1px solid #494949;
	}
	.square-text{
		background-image: url("<?=base_url();?>assets/images/sq.gif");
		width: 793px;
		height: 34px;
		background-size: 22pt;
		border: none;
		font-family: monospace;
		font-size: 14pt;
		padding-left: 11px;
		letter-spacing: 14pt;
		display: inline-block;
		background-repeat: repeat-x;
		margin: 6px 0 0 55px;
	}
</style>
<?php
$i = 1;
$student_reg = isset($_GET['student']) ? $_GET['student'] : false;
if (count($students) == 0) echo "<h1 style=''>" . lang("app.noStudentFound") . "</h1>";
$result = new \App\Controllers\Home();
//print_r($students); die();
foreach ($students as $student) {
	if ($student['id'] == $student_reg || $student_reg === false) {
		?>
		<div style="margin-top: 15px;width: 100%;float:left;" class="<?= $pdf ? 'printable' : 'no-printable'; ?>">
			<div class="col-md-12 col-sm-12 pull-left" style="margin: 20px 15px;width: 98%">
				<div class="col-sm-12 border-bottom" style="height: 107px">
					<img class="pull-left" src="<?= base_url('assets/images/drc_flag.png'); ?>"
						 style="width: 150px;position: absolute;left: 10px;top: 10px" alt=" ">
					<div class="pull-left" style="margin: 10px 0 10px 10px;width: 100%;text-align: center;font-size: 14pt">
						<span><b>REPUBLIQUE DEMOCRATIQUE DU CONGO</b></span><br>
						<span><b>MINISTÈRE DE L'ENSEIGNEMENT PRIMAIRE, SECONDAIRE ET TECHNIQUE</b></span><br>
						<?php
						if (strlen($school_pobox) > 2) {
							?>
							<span><b>P.O BOX </b>  : <?= $school_pobox; ?></span><br>
							<?php
						}
						?>
					</div>
					<img src="<?= base_url('assets/images/drc_emblem.jpg'); ?>"
						 style="width: 100px;position:absolute;right: 5px;top: 5px" alt=" ">
				</div>

				<div class="col-sm-12 border-bottom">
					<span><strong>N<sup>o</sup> ID</strong><span class="square-text"><?= $student['national_id'] ?></span></span>
				</div>
				<div class="col-sm-12 border-bottom">
					<span><span style="width: 300px">PROVINCE</span>:<strong></strong></span>
				</div>
				<div class="col-sm-12 border-bottom">
					<div class="col-md-6 pull-left" style="border-right: 3px solid #000;padding: 0">
						<span><span style="width: 300px">VILLE</span>:<strong><?= $school_district; ?></strong></span><br/>
						<span><span style="width: 300px">COMMUNE</span>:<strong><?= $school_sector; ?></strong></span><br/>
						<span><span style="width: 300px">ECOLE</span>:<strong
									style="text-transform: uppercase"><?= $school_name; ?></strong></span><br/>
						<span><span style="width: 300px">CODE</span>:<strong class="square-text"
									style="text-transform: uppercase;width: 381px"><?= $school_code; ?></strong></span>
					</div>
					<div class="col-md-6 pull-left">
						<span>ELEVE:<strong><?= $student['fname'].' '.$student['lname']; ?></strong></span>
						<span style="float: right">SEXE:<strong><?= $student['sex']; ?></strong></span><br/>
						<span>NE (E) A:<strong><?= $student['fname'].' '.$student['lname']; ?></strong></span>
						<span style="float:right;">le:<strong><?= $student['dob']; ?></strong></span><br/>
						<span>CLASSE:<strong><?= $student['level_name'] ?> Année <?= $student['code'] ?>
								<?= (!empty($student['title'])?'/'.$student['title']:'') ?></strong></span><br/>
						<span>N<sup>o</sup> PERM:<strong class="square-text" style="width: 381px"><?= $student['regno'] ?> </strong></span><br/>
					</div>
				</div>

				<div class="col-sm-12 border-bottom">
					<span style="margin-left: 40px"><strong>BULLETTIN DE LA <?= $student['level_name'] ?> ANNEE  </strong></span>
					<span style="float:right;margin-right: 40px"><strong>ANNEE SCOLAIRE <?= $academic_year_title; ?></strong></span>
				</div>

				<div style="background:white;">
					<div style="height: 98%">
						<table class="tablepage" border="1">
							<!--Table head-->
							<tbody id="disciplineTable">
							<tr>
								<td colspan="4" rowspan="3" width="40%" class="bold-border"
									style="text-transform: uppercase;font-weight: bold">BRANCHES </td>
								<td colspan="7" class="colscenter">PREMIERE TRIMESTRE</td>
							</tr>
							<tr>
								<td rowspan="2"
									style="text-transform: uppercase;font-weight: bold">MAX </td>
								<td colspan="2" class="colscenter">TRAV. JOURN.</td>
								<td rowspan="2" colspan="2"
									style="text-transform: uppercase;font-weight: bold">MAX<br />EXAM.</td>
								<td rowspan="2" colspan="2"
									style="text-transform: uppercase;font-weight: bold">TOTAL</td>
							</tr>
							<tr>
								<td class="colscenter">1ère P</td>
								<td class="colscenter">2ème P</td>
							</tr>
							<?php
							$category = "";
							$cat = 0;
							$exam = 0;
							$maxTotal = 0;
							$cat1Sum = 0;
							$cat2Sum = 0;
							$examSum = 0;
							foreach ($student['courses'] as $core) {
							$maxTotal += $core['marks'];
							if ($category != $core['category']) {
								if (in_array($school_id, [33]) && $student['department_id'] == 1) {
									echo "<tr>
					<td colspan=\"10\" style=\"background-color: #f5e1b9\"><b>&nbsp;</b></td>
				</tr>";
								} else {
									echo "<tr>
					<td colspan=\"11\" style=\"background-color: #A2A2A2FF\"><b>" . strtoupper($core['category']) . "</b></td>
				</tr>";
								}
								$category = $core['category'];
							}
							?>
							<tr>
								<td colspan="4" class="bold-border"><?= $core['title']; ?></td>
								<td class="colscenter bold-border"><?= $core['marks']/2; ?></td>
								<?php
								$datas = [['marks'=>'','id'=>0],['marks'=>'','id'=>0]];
								if (isset($core['result'])){
									$datas = $core['result'][$term];
								}
								$total = 0;
								$totalCount = 0;
								$examMarks = ' - ';
								$ExamEchec='';

								foreach ($datas as $index => $data){
									$rowMarks = strlen($data['marks']) == 0 ? 0 : $data['marks'];
									$marks = strlen($data['marks']) == 0 ? '-' : number_format($data['marks'], 1);
									$echec =  ($data['marks'] < ($core['marks'] / 4) && !strlen($data['marks']) == 0) ? 'fail' : '';
									if(strlen($data['marks']) > 0){
										$totalCount++;
										$total += $data['marks'];
									}
									if ($data['id']==2){
										//exam
										$ExamEchec =  ($data['marks'] < ($core['marks'] / 2) && !strlen($data['marks']) == 0) ? 'fail' : '';
										$examMarks = $marks;
										$examSum += $rowMarks;
									} else {
										if ($index == 0){
											$cat1Sum += $rowMarks;
										}else if ($index == 1){
											$cat2Sum += $rowMarks;
										}
										echo "<td class='$echec'>" . $marks. "</td>";
									}
								}
								$totalEchec = ($total < $core['marks'] && $totalCount > 0) ? 'fail' : '';
								$tm = $totalCount == 0 ? '-' : number_format($total, 1);
								$cat += $core['marks']/2;
								$exam += $core['marks'];
								echo "<td class='colscenter'>" . $core['marks'] . "</td>
								      <td class='$ExamEchec'>" . $examMarks . "</td>
								      <td class='colscenter'>" . $core['marks'] * 2 . "</td>
									  <td class='$totalEchec'>" . $tm . "</td></tr>";
//								$cat += $core['marks']/2;
//								$exam += $core['marks'];
//								$total = $cat + $exam;
//								$totalCatColumn += $datas['marks'];
//								$totalExamColumn += $datas['exam_marks'];
								}; ?>
							<tr>
								<?php
								$genTotal  = $cat1Sum + $cat2Sum+$examSum;
								$catGEchec = $cat1Sum < ($cat / 2) ? 'fail' : '';
								$ExamGEchec = $cat2Sum < ($cat / 2) ? 'fail' : '';
								$ExamGEchec = $examSum < ($cat / 2) ? 'fail' : '';
								$totalGEchec = $genTotal < $cat ? 'fail' : '';
								?>
								<td colspan="4" class="bold-border"><b>MAXIMA GENERAUX </b></td>
								<td class="colscenter bold-border"><?= $cat; ?></td>
								<td class="<?= $catGEchec; ?>"><?= number_format($cat1Sum, 1); ?></td>
								<td class="<?= $catGEchec; ?>"><?= number_format($cat2Sum, 1); ?></td>
								<td class="colscenter"><?= $exam; ?></td>
								<td class="<?= $ExamGEchec; ?>"><?= number_format($examSum, 1); ?></td>
								<td class="colscenter"><?= ($cat + $exam); ?></td>
								<td class="<?= $totalGEchec; ?>"><?= number_format($genTotal, 1); ?></td>
							</tr>
							<tr>
								<td colspan="4" class="bold-border"><b><?= lang("app.total"); ?> </b></td>
								<td class="not-available bold-border"></td>
								<td class="<?= $catGEchec; ?>"><?= number_format($cat1Sum, 1); ?></td>
								<td class="<?= $catGEchec; ?>"><?= number_format($cat2Sum, 1); ?></td>
								<td class="not-available"></td>
								<td class="<?= $ExamGEchec; ?>"><?= number_format($examSum, 1); ?></td>
								<td class="not-available"></td>
								<td class="<?= $totalGEchec; ?>"><?= number_format($genTotal, 1); ?></td>
							</tr>
							<tr>
								<?php
								$perc = $maxTotal==0 ?0 :$genTotal * 100 / $maxTotal;
								?>
								<td colspan="4" class="bold-border"><b>Pourcentage </b></td>
								<td class="not-available"></td>
								<td></td>
								<td></td>
								<td class="not-available"></td>
								<td></td>
								<td class="not-available"></td>
								<td colspan="3"
									class="colscenter <?= $perc < 50 ? 'fail' : ''; ?>"><?= number_format($perc, 1); ?>%
								</td>
							</tr>
							<tr>
								<td colspan="4" class="bold-border"><b>Place/Nbre d'élèves </b></td>
								<td class="not-available"></td>
								<td></td>
								<td></td>
								<td class="not-available"></td>
								<td></td>
								<td class="not-available"></td>
								<td colspan="3" class="colscenter"><?= $i; ?> / <?= count($students); ?></td>
							</tr>
							<tr>
								<td colspan="4" class="bold-border">APPLICATION </td>
								<td class="not-available"></td>
								<td></td>
								<td></td>
								<td class="not-available"></td>
								<td class="not-available"></td>
								<td class="not-available"></td>
								<td class="not-available"></td>
							</tr>
							<tr>
								<td colspan="4" class="bold-border">CONDUITE </td>
								<td class="not-available"></td>
								<td class="colscenter"><?= $discipline_max - extractDisciplineMarks($student['displine_marks'], $term); ?></td>
								<td></td>
								<td class="not-available"></td>
								<td class="not-available"></td>
								<td class="not-available"></td>
								<td class="not-available"></td>

							</tr>
							<tr>
								<td colspan="4" class="bold-border"><b><?= lang("app.tSignture"); ?> </b></td>
								<td colspan="7" style="height: 40px"></td>
							</tr>
							<tr>
								<td colspan="4" class="bold-border"><b><?= lang("app.pSignture"); ?> </b></td>
								<td colspan="7" style="height: 40px"></td>
							</tr>
							<tr style="height: 100px;">

								<td colspan="11" class="" style="text-align: left;position: relative;border-top: 3px solid;">
									<div style="width: 350px;float: right">
										<div style="width:100%;">
											<div style="text-align: center;margin-top: 20px;margin-bottom: 10px">
												<strong style="text-align: left;float: left;width:100%;">Fait à <?= $school_address; ?>, le
													<?= date('d / m / Y'); ?></strong>
											</div>
										</div>
										<div style="width:100%;float: left">
											<label style="font-weight: normal">Le Chef d'Etablissement</label>
											<h4 style="font-weight: bold;margin-top: 0"><?= $head_master; ?></h4>
										</div>
										<div class="spacer" style="height: 20px"></div>
										<strong style="position: absolute;left: 30%;top:40%">Sceau de l'école</strong>
										<div style="position: absolute;left: 20px;bottom:20px">
											<p style="margin: 0"><strong>(1) Biffer la mention inutile</strong></p>
											<p style="margin: 0"><strong>NOTE IMPORTANTE: </strong> Le bullettin est sans valeur s'il est raturé ou surchargé.</p>
										</div>
										<strong style="position: absolute;right: 20px;bottom:15px;">IGE/PS/010
										</strong>
										<div style="width:100%;margin: 20px 0;float: left">
											<p>Signature</p>
											<div class="spacer" style="height: 40px"></div>
											<p style="margin-bottom: 60px">
												<?php
												if (strlen($headmaster_signature) > 5) {
													?>
													<img src="<?= base_url('assets/images/signatures/' . $headmaster_signature); ?>"
														 style="width: 200px;"
														 alt="Headmaster signature">
													<?php
												} else {
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
} ?>
