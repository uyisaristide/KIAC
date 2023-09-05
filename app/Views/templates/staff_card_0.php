<style>
    *{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .container{
        width: 327px;
        height: 638px;
        border-radius: 10px;
        border: 1px solid #d8d3d3;
		transform: scale(0.6);

        
    }
    .top {
        width: 320px;
        margin-top: -3px;
        margin-left: -2.3px;
        padding: 5px;
        height: fit-content;
        position: relative;
        
    }

    .top .photo{
        position: absolute;
        width: 170px;
        height: 168px;
        top: 135px;
        left: 42px;
    }


    .top .photo img{
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 2px solid #fff;
    }


    .mid{
        margin-left: 5.2px;
        width: 95%;
        border-left: 4px solid #013265;
        border-right: 4px solid #013265;
        margin-top: -22px;
        padding-top: 13px;
    }

    .details{
        margin-left: 30px;
    }

    .details p{
        font-size: 16px;
        font-weight: 800;
        color: #041630;
        line-height: 14px;
    }

    .details p span{
        font-size: 14px;
        font-weight: 400;
        color: #041630;
        line-height: 14px;
    }

    .details .phone{
        margin-top: 30px;
    }

    .bottom {
        width: 100%;
        display: flex;
        align-items: center;
        margin-top: 20px;
        gap: 10px;
    }

    .bottom img{
        height: 25px;
    }

    .bottom img.qr{
        object-fit: cover;
        margin-left: 12px;
    }

    .bottom img.barcode{
        width: 60px;
        object-fit: cover;
    }

    .bottom .moto{
        font-size: 14px;
        font-weight: semibold;
        color: #083457;
        margin-left: 10px;
        margin-top: 10px;
    }

    .footer{
        padding-left: 2px;
    }
    .footer img{
        height: 30px;
        width: 100%;
        border-radius: 0 0 8px 8px;
    }

</style>
<?php foreach ($staffs as $staff): ?>

	<div class="container">
		<div class="top">
			<img src="<?=base_url();?>assets/card/staff_top1.png" alt="" />

			<div class="photo">
				<img src="<?= base_url('assets/images/profile/'.$staff['photo']);?>" alt="">
			</div>
		</div>
		<div class="mid">
			<div class="details">
				<div class="names">
					<p>Names: <span><?=$staff['fname']." ".$staff['lname'];?></span></p>
				</div>
				<div class="names">
					<p>Position: <span><?=$staff['post_title'];?></span></p>
				</div>
				
				<div class="phone">
					<p>Telephone: <span><?=$staff['phone'];?></span></p>
				</div>
				<div class="admin-tel">
					<p>Administration Tel: <span>0783205698</span></p>
				</div>
			</div>

			<div class="bottom">
				<img class="qr" src="staffQR.png" alt="">
				<p class="moto">Educate-Innovate-Transform</p>
				<img class="barcode" src="<?=base_url();?>assets/card/barcode.png" alt="">
			</div>

		</div>

		<div class="footer">
			<img src="<?=base_url();?>assets/card/staff_bottom.png" alt="">
		</div>
	</div>

<?php endforeach?>
