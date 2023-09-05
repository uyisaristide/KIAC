<center>

<div class="row" style="border: solid #0c0b0f 1px;width: 57mm;background-color: white">
	<div class="pull-left" style="width: 100%">
		<span><b><?= lang("app.republic".$country); ?> </b></span><br>
		<span><b><?= lang("app.ministry".$country); ?> </b></span><br>
		<span><b><?= lang("app.studentRequestPermission"); ?> </b></span><br>
		<span><?=$school_name;?></span><br>
		<span><b><?= lang("app.mail"); ?> </b> : <?=$school_email;?></span><br>
		<span><b><?= lang("app.phone"); ?> </b>  : <?=$school_phone;?></span><br>
	</div>
</div>
<br>
<div class="row" style="border: solid #0c0b0f 1px;width: 57mm;background-color: white">
	<div class="pull-left" style="width: 100%;">
			<span><b><?= lang("app.firstName"); ?> </b>  : <?=$permissions['fname'];?> </span><br>
			<span><b><?= lang("app.lastName"); ?></b>   : <?=$permissions['lname'];?> </span><br>
			<span><b><?= lang("app.sClass"); ?> </b>   : <?= $permissions['level_name']?> <?=$permissions['title']?> <?=$permissions['code']?></span><br>
			<span><b><?= lang("app.regNo"); ?> </b>   :<?=$permissions['regno'];?></span><br>
	</div>
</div>
<br>
<div class="row" style="border: solid #0c0b0f 1px;width: 57mm;background-color: white">
	<div  style="width: 100% ;">
		<center>
		<span><b><?= lang("app.destination"); ?> : </b><?=$permissions['destination'];?> </span><br>
		<span><b><?= lang("app.reason"); ?> : </b> <?=$permissions['reason'];?> </span><br>
			<span><b><?= lang("app.leaveTime"); ?>  :</b><?=$permissions['leave_time'];?> </span><br>
			<span><b><?= lang("app.returnTime"); ?> :</b> <?=$permissions['return_time'];?> </span><br>

		</center>
	</div>
</div>

</center>
