<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.css"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<link href="https://scontent.fhan2-6.fna.fbcdn.net/v/t1.0-9/52382647_2013649935603549_6570728925503160320_n.jpg?_nc_cat=104&_nc_sid=7aed08&_nc_ohc=oJjnga_RXr0AX_7orKA&_nc_ht=scontent.fhan2-6.fna&oh=1f3c65efbb7c453fd85c05b366336fc2&oe=5F93902B" rel="icon">

    <title>Âm Nhạc Cổ Vũ Cuộc Sống</title>
    <style>

    	body{
    		
    		background-color: #f7f7f7;
    		font-family: Open sans;
    	}
    	img{
    		width: 100%;
    		min-height: 250px;
    	}
    	.search-container{
    		margin-left: 300px;
    	}
    	.main{
    		padding: 40px 0;
    	}
    	.col-md-3{
    		margin-bottom: 40px;
    	}
    	.album-poster{
    		position: relative;
    		display: block;
    		border-radius: 7px;
    		overflow: hidden;
    		box-shadow: 0 15px 35px #3d2173a1;
    		transition: all ease 0.4s;
    	}
    	.album-poster:hover{
    		box-shadow: none;
    		transform: scale(0.98) translateY(5px);
    	}
    	h3{
    		font-size: 34px;
    		margin-bottom: 34px;
    		border-bottom: 4px solid #e6e6e6;
    		padding-bottom: 15px;
    	}
    	p{
    		font-size: 15px;
    	}
    	h4{
    		font-size: 16px;
    		text-transform: uppercase;
    		margin-top: 15px;
    		font-weight: 700;
    	}
		

		#aplayer{
			position: fixed;
			bottom: -100%;
			left: 0;
			width: 100%;
			margin: 0;
			box-shadow: 0 -2px 2px #dadada;
			background-color: #fff;
			transition: all ease 0.5s;
		}
		#aplayer.showPlayer{
			bottom: 0;
		}
		/* .navbar-nav{
			background-color: red;
			display: flex;
			justify-content: space-between;
			flex-direction: row;
			align-items: center;
			width: 50%;
		} */
		.kkk{
			display: flex;
			width: 100%;
		}
		.navvv{
			display: flex;
			flex-direction: row;
		}
		.navv{
			padding: 7px 12px;
		}

		span{
			color: #000 !important;
			font-size: 16px;
		}
		.aplayer .aplayer-info .aplayer-controller .aplayer-bar-wrap .aplayer-bar .aplayer-loaded{
			background: #e0e0e0;
    		height: 4px;
		}
		.aplayer .aplayer-info .aplayer-controller .aplayer-bar-wrap .aplayer-bar .aplayer-played{
			height: 4px;
			background-color: #2196F3 !important;
		}
		.aplayer .aplayer-info .aplayer-controller .aplayer-bar-wrap .aplayer-bar .aplayer-played .aplayer-thumb{
			background-color: #2196F3 !important;
		}

		.aplayer .aplayer-icon{
			width: 20px;
			height: 20px;
		}
		.aplayer .aplayer-info .aplayer-controller .aplayer-time .aplayer-icon path {
		    fill: #000;
		}
		.aplayer .aplayer-info .aplayer-music{
			margin-bottom: 5px;
		}
		.vv{
			padding-left: 10px;
		}
		.haha{
			list-style: none;
			text-decoration: none;
			width: 100%;
			display: flex;
			justify-content: space-around;
		}


    </style>
 	</head>
	<body>
		
<nav class="navbar">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"><i class="fa fa-bars" aria-hidden="true"></i></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse kkk" id="myNavbar">
                <ul class="nav navbar-nav navvv">
                    <li class="active"><a href="#"> <span class="glyphicon glyphicon-user navv"></span>Trang chủ</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-envelope navv"></span>Sản phẩm</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-envelope navv"></span>Liên hệ</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right vv">
                    <li style="font-size:16px" class="dropdown">
                        <a data-toggle="dropdown" href="">Tài khoản<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="login.php">Đăng nhập</a></li>
                            <li><a href="register.php">Đăng ký</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

</nav>

<div class="search-container">
	<form action="/action_page.php">
		<input type="text" placeholder="search.." name="search">
		<button type="submit"><i class="fa fa-search"></i></button>
	</form>	
</div>

<div class="main">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Trung Tâm Băng Đĩa Lậu Hải Ngoại</h3>
			</div>
			<div class="col-md-3">
				<a href="javascript:void();" class="album-poster" data-switch="0">
					<img src="https://data.chiasenhac.com/data/cover/135/134383.jpg" alt="">
				</a>
				<h4>Vì Sao Thế Vì Sạo Lòng.!</h4>
				<p> Thiên Đình x Địa Phủ x Michael Hư Đốn x Jimmi NgủYên</p>
			</div>
			<div class="col-md-3">
				<a href="javascript:void(1);" class="album-poster" data-switch="1">
					<img src="https://i1.sndcdn.com/artworks-o9yKAmRHoQX3BCw8-8BQ50Q-t500x500.jpg" alt="">
				</a>
				<h4>Để Mai Đi</h4>
				<p>jimmi ngủyên x michael hư đốn</p>
			</div>

			<div class="col-md-3">
				<a href="#" class="album-poster" data-switch="2">
					<img src="https://i1.sndcdn.com/artworks-zhB7rALaQFPezef7-KfvmDw-t500x500.jpg" alt="">
				</a>

				<h4>Chờ Đợi Qué Khứ</h4>
				<p>Thiên Đình x Địa Phủ</p>


			</div>

			<div class="col-md-3">
				<a href="#" class="album-poster" data-switch="3">
					<img src="https://i1.sndcdn.com/artworks-qYAIQo08ESSKsqpo-IzMo4g-t500x500.jpg" alt="">
				</a>
				<h4>Im-Phê-Ta-Min</h4>
				<p>jimmi ngủyên</p>
			</div>

		<div class="row">
			
			<div class="col-md-12">
				<h3>Postcard</h3>
			</div>
			<div class="col-md-3">
				<a href="javascript:void();" class="album-poster" data-switch="0">
					<img src="https://i1.sndcdn.com/artworks-c3v2ysC2gcxdjwRS-kaZdBw-t500x500.jpg" alt="">
				</a>
				<h4>Đổi Thay</h4>
				<p> Lil Wuynh </p>
			</div>
			<div class="col-md-3">
				<a href="javascript:void(1);" class="album-poster" data-switch="0">
					<img src="https://data.chiasenhac.com/data/cover/120/119220.jpg" alt="">
				</a>
				<h4>Coming Home</h4>
				<p>Datmaniac - Tuimi</p>
			</div>
			<div class="col-md-3">
				<a href="#" class="album-poster" data-switch="0">
					<img src="https://nguoi-noi-tieng.com/photo/tieu-su-ca-si-khoi-9807.jpg" alt="">
				</a>
				<h4>Anh Thèm Được Sleep</h4>
				<p> Smoke aka Khói</p>
			</div>
			<div class="col-md-3">
				<a href="#" class="album-poster" data-switch="0">
					<img src="https://avatar-ex-swe.nixcdn.com/singer/avatar/2018/06/26/d/8/9/2/1529998074721_600.jpg" alt="">
				</a>
				<h4>2 5 </h4>
				<p>Táo</p>
			</div>
		</div>
		</div>


		<div class="row">
			<div class="col-md-12">
				<h3>GANG$ - WORLD</h3>
			</div>
			<div class="col-md-2">
				<a href="#" class="album-poster">
					<img src="https://www.songfacts.com/img-blogimg-350-778.jpg" alt="">
				</a>
				<h4>N.W.A</h4>
			</div>
			<div class="col-md-2">
				<a href="#" class="album-poster">
					<img src="https://images.pexels.com/photos/838702/pexels-photo-838702.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
				</a>
				<h4>El Chapo</h4>
			</div>
			<div class="col-md-2">
				<a href="#" class="album-poster">
					<img src="https://images.pexels.com/photos/894156/pexels-photo-894156.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
				</a>
				<h4>6I9XNE</h4>
			</div>
			
			<div class="col-md-2">
				<a href="#" class="album-poster">
					<img src="https://images.pexels.com/photos/2118046/pexels-photo-2118046.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
				</a>
				<h4>Bobby Shmurda</h4>
			</div>
			<div class="col-md-2">
				<a href="#" class="album-poster">
					<img src="https://m.media-amazon.com/images/I/81vkkOqc6BL._SS500_.jpg" alt="">
				</a>
				<h4>YNW - Mendy</h4>
			</div>
			<div class="col-md-2">
				<a href="#" class="album-poster">
					<img src="https://i1.sndcdn.com/artworks-XJ1I3EncEnB3wO3z-ryTA4A-t500x500.jpg" alt="">
				</a>
				<h4>21 Savage</h4>
			</div>
		</div>


	</div>
</div>

	<div id="aplayer"></div>

	<!-- Jquery Link -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<!-- Bootstrap Link -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<!-- APlayer Jquery link -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.js"></script>	

	<script>


		// NOW I CLICK album-poster TO GET CURRENT SONG ID
		$(".album-poster").on('click', function(e){
			var dataSwitchId = $(this).attr('data-switch');
			//console.log(dataSwitchId);

			// and now i use aplayer switch function see
			ap.list.switch(dataSwitchId); //this is static id but i use dynamic 

			// aplayer play function
			// when i click any song to play
			ap.play();

			// click to slideUp player see
			$("#aplayer").addClass('showPlayer');
		});

		const ap = new APlayer({
		    container: document.getElementById('aplayer'),
		    listFolded: true,
		    audio: [
		    {
		        name: 'Vì Sạo Lòng.!',// SONG NAME
		        artist: 'Băng Đĩa Lậu',//ARTIST NAME
		        url: 'songFile/Vì Sao Thế- Vì Sạo Lòng - Thiên Đình x Địa Phủ x Michael Hư Đốn x Jimmi NgủYên.mp3',// PATH NAME AND SONG URL
		        cover: 'https://i1.sndcdn.com/avatars-opXWWfyzCOBY79oc-VIFOGw-t500x500.jpg' // COVER images
		    },
			{
		        name: 'Để Mai Đi',  
		        artist: 'jimmi ngủyên x michael hư đốn', 
		        url: 'songFile/mai - jimmi ngủyên x michael hư đốn.mp3', 
		        cover: 'https://i1.sndcdn.com/avatars-opXWWfyzCOBY79oc-VIFOGw-t500x500.jpg'
		    },
			{	
				name: 'Chờ Đợi Qué Khứ',
				artist: 'Thiên Đình x Địa Phủ',
				url: 'songFile/CHỜ ĐỢI QUÉ KHỨ - Thiên Đình x Địa Phủ.mp3',
				cover: 'https://i1.sndcdn.com/avatars-opXWWfyzCOBY79oc-VIFOGw-t500x500.jpg',
			},
			{
				name: 'Im-Phê-Ta-Min',
				artist: 'jimmi ngủyên',
				url: 'songFile/IMPHÊTAMIN - jimmi ngủyên.mp3',
				cover: 'https://i1.sndcdn.com/avatars-opXWWfyzCOBY79oc-VIFOGw-t500x500.jpg',
			},
			{
		        name: 'Thay Đổi',  
		        artist: 'Lil Wuynh', 
		        url: 'songFile/LIL WUYN - THAY ĐỔI - HỘI NGHE - S04E24.mp3', 
		        cover: 'https://i1.sndcdn.com/artworks-c3v2ysC2gcxdjwRS-kaZdBw-t500x500.jpg'
		    },
			{
		        name: 'Coming Home',  
		        artist: 'Datmaniac - Tuimi', 
		        url: 'songFile/ĐẠT MANIAC & TUIMI - COMING HOME - HỘI NGHE - S02E12.mp3', 
		        cover: 'https://data.chiasenhac.com/data/cover/120/119220.jpg'
		    },
		    {
		        name: 'Anh Thèm Được Sleep',  
		        artist: 'Smoke aka Khói', 
		        url: 'songFile/KHÓI - ANH THÈM ĐƯỢC NGỦ - Live at HỘI NGẦM #4.mp3', 
		        cover: 'https://nguoi-noi-tieng.com/photo/tieu-su-ca-si-khoi-9807.jpg'
		    },
			{
		        name: '2 5 ',  
		        artist: 'Táo', 
		        url: 'songFile/TÁO - 2 5 - Live at HỘI - KHAI HỘI.mp3', 
		        cover: 'https://avatar-ex-swe.nixcdn.com/singer/avatar/2018/06/26/d/8/9/2/1529998074721_600.jpg'
		    },
		]
		});
	</script>
<article>
  <div class="menu">
				<ul class="haha">                   
                   
					<li><a href="index_product.php?quanly=search_product">Thêm, sửa, xóa, tìm kiếm và nghe nhạc</a></li>
                    <li><a href="http://localhost:8080/gaucon/simple-shopping-cart//">Thêm nhạc vào giỏi hàng</a></li>
				</ul>	

			 <div class="content_product"><?php require("content_product.php"); ?></div>
		</div>	
</article>
</body>
</html>