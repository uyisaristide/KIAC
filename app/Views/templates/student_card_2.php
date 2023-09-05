<style>

    *{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .container{
        width: 600px;
        height: 372px;
        border-radius: 10px;
        border: 1px solid #d8d3d3;
       
        gap: 2px;
        padding-right: 2px;
		margin-top: 20px;
		transform: scale(0.3);
        
    }
    .header{
        width: 100%;
        height: 60px;
        display: flex;
        flex-direction: row;
        gap: 2px;
        align-items: center;
        
    }

    .header .logo{
        width: 150px;
        height: 60px;
    }

    .header .logo img{
        width: 100%;
        height: 100%;   
    }

    .header .school{
        background-color: #2e445e;
        color: #fff;
        padding: 0 5px;
        height: 90%;
        align-items: center;
        width: 79%;
        border-radius: 0 5px 0 0;
        justify-content: center;
        position: relative;
    }

    .school h2{
        font-size: 25.5px;
        font-weight: 600;
        margin-top: 5px;
    }

    .school .line{
        width: 98%;
        height: 4px;
        background-color: #e7c739;
        position: absolute;
        bottom: 5px;
    }

    .card_title{
        background-color: #2e445e;
        width: fit-content;
        padding: 5px;
        border-radius: 8px;
    }

    .card_title_container{
        width: 100%;
        display: flex;
        justify-content: center;
        margin-top: 10px;
    }
    .card_title span{
        font-size: 16px;
        font-weight: 600;
        color: #e7c739;
        margin-right: auto;
        margin-left: auto;
    }

    .content{
        width: 100%;
        display: flex;
        flex-direction: row;
        gap: 2px;
    }

    .content .photo{
        width: 160px;
        height: 170px;
        border: 3px solid #2e445e;
        border-radius: 8px;
        margin-left: 50px;
		padding: 2px;
    }

	.content .photo img{
		width: 100%;
		height: 100%;
		border-radius: 8px;
	}

    .content  .details{
        margin-left: 20px;
    }

    .names, .course, .regNumber{
        font-size: 22px;
        font-weight: 800;
        color: #3a3a3c;
        line-height: 20px;
    }

    .details span{
        font-size: 18px;
        font-weight: 600;
        color: #3a3a3c;
        line-height: 20px;
    }


    .bottom{
        display: flex;
    }

    .bottom .barcode{
        width: 165px;
        height: 35px;
        margin-left: 50px;
    }

    .barcode img{
        width: 100%;
        height: 100%;
    }

    .bottom .moto{
        font-size: 14px;
        font-weight: 400;
        color: #3a3a3c;
        margin-left: 35px;
        margin-top: 10px;
    }

    .lines{
        width: 100%;
        display: flex;
        flex-direction: row;
        margin-top: 10px;
        padding-left: 2px;
    }

    .lines .left{
        width: 70%;
        display: flex;
        flex-direction: column;
        gap: 2px;
    }

    .lines .left .yellow{
        width: 99.5%;
        height: 5px;
        background-color: #e7c739;
    }

    .lines .left .blue{
        width: 100%;
        height: 20px;
        background-color: #2e445e;
        border-radius: 0 0 0 8px;
    }

    .lines .right{
        width: 29.9%;
        height: 34px;
        background-color: #2e445e;
        border-radius: 0 0 8px 0;
    }

	.body{
		width: 100vw;
		height: 100vh;
	}
	
</style>
<?php foreach($students as $student): ?>
<body>
	<div class="container">
		<div class="header">
			<div class="logo">
				<img src="<?=base_url();?>assets/card/logo.png" alt="logo">
			</div>
			<div class="school">
				<h2><?=$school_name;?></h2>
				<div class="line"></div>
			</div>
		</div>

		<div class="card_title_container">
			<div class="card_title">
				<!-- <span>STUDENT CARD</span> -->
			</div>
		</div>
		<div class="content">
			<div class="photo">
				<img src="<?= base_url('assets/images/profile/'.$student['photo']); ?>" alt="">
			</div>
			<div class="details">
				<div class="names">
					<p>Names: <span><?=$student['name']?></span></p>
				</div>
				<div class="course">
					<p>Course: <span><?=$student['class']?></span></p>
				</div>
				<div class="regNumber">
					<p>Reg Number: <span><?=$student['regno']?></span></p>
				</div>
				<div class="regNumber">
					<p>Expiry: <span>A.Y 2023-2024</span></p>
				</div>
			</div>
		</div>

		<div class="bottom">
			<div class="barcode">
				<img src="<?=base_url();?>assets/card/barcode.png" alt="">
			</div>
			<div class="moto">
				Educative-Innovative-Transform
			</div>
		</div>

		<div class="lines">
			<div class="left">
				<div class="yellow"></div>
				<div class="yellow"></div>
				<div class="blue"></div>
			</div>
			<div class="right">

			</div>
		</div>

	</div>
</body>
<?php endforeach;?>