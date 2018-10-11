<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>THREE-U CHECK - @yield('title')</title>
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/w3.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('style.css')}}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<style>
	@yield('css')
	
	@import url('https://fonts.googleapis.com/css?family=Prompt');
	.fonts1{
		font-family:"Prompt", Times,  sans-serif;
		
	}
	.w3-black, .w3-hover-black:hover {
		color: #fff!important;
		background-color: #313332!important;
	}
	.carousel-control {
		text-align:left;
		padding-left:50px;
		padding-top:10px;
	}

	.li-manu:visited {
		color: #FFF;
		
	}
	.li-manu:active {
		color: #FFF;
	}

	#map {
		
		height: 325px;
		width: 100%;
	}
</style>


	@yield('script')

</head>


<body style="background-image: url('{{asset('img/1607.png')}}');  background-size: cover;background-repeat: no-repeat;  background-attachment: fixed;">
<!-- nav -->

@if(Session::has('user'))
	@include('menu.login')
@else
	@include('menu.not-login')
@endif
  <!-- nav -->
  <center> 
  <div class="row" style="width: 70%;margin-top:100px; ">
	 <h1 class="fonts1" style="color: #FFF;">ติดต่อสอบถามข้อมูลเพิ่มเติม</h1>
	 <hr>
	 	<form action="send" method="post">
		 	{{csrf_field()}}
  			<div class="col-md-6">
			  <div class="fonts1" style="color:#fff; text-align:left; font-size:18px">กรุณากรอกข้อมูลเพื่อให้เจ้าหน้าที่ติดต่อกลับ</div>
			  <div class="fonts1" style="color:#00C7E8; text-align:left;">ติดต่อเราผ่านทาง Email ( เจ้าหน้าที่จะติดต่อกลับภายใน 24 ชั่วโมง )</div>
			  
			  <br>
			  	<div class="form-group  has-feedback fonts1" style="color: #FFF; text-align:left" >
					หัวข้อเรื่อง
			  		<div class="form-group  has-feedback">
				  		<input type="text" name = "head" class="form-control fonts1" style="padding-left : 30px" id="inputSuccess2" placeholder="" aria-describedby="inputSuccess2Status">
  						<span id="inputSuccess2Status" class="sr-only">(success)</span>
  						<span style="left:0px; color: #8e8e8e;"  class="form-control-feedback" aria-hidden="true"><i class="fas fa-heading"></i></span>
  					</div>
			 	</div>

				<div class="form-group  has-feedback fonts1" style="color: #FFF; text-align:left" >
					E-mail ติดต่อกลับ
			  		<div class="form-group  has-feedback">
				  		<input type="text" name = "to" class="form-control fonts1" style="padding-left : 30px" id="inputSuccess2" placeholder="" aria-describedby="inputSuccess2Status">
  						<span id="inputSuccess2Status" class="sr-only">(success)</span>
  						<span style="left:0px; color: #8e8e8e;"  class="form-control-feedback" aria-hidden="true"><i class="fas fa-mail-bulk"></i></span>			
  					</div>
			 	</div>


				<div class="form-group  has-feedback fonts1" style="color: #FFF; text-align:left" >
				  	ข้อความ :
  					<textarea type="text" name = "message" class="form-control fonts1" style="width:100%; height:300px; resize: vertical;" id="inputSuccess2"  aria-describedby="inputSuccess2Status"></textarea>
  					<span id="inputSuccess2Status" class="sr-only">(success)</span>
  				</div>
				  <div class="fonts1">
				  	<button type="button" class="btn btn-primary">ยกเลิก</button>
					<button type="submit" class="btn btn-success">ส่ง</button>
				  </div>
  			</div>
		</form>
		


  			<div class="col-md-6" >
			  <div class="fonts1" style="font-size:24px;  color:#fff; text-align:left" >ติดต่อ<span style="color:#00C7E8;">เรา</span></div>
			  <div  class="fonts1" style="font-size:12px; color:#fff; text-align:left" >สำหรับการสอบถามข้อมูลทั่วไป สามารถติดต่อศูนย์บริการคอลเซ็นเตอร์ของเราได้ที่ </div>

			  <div class="fonts1" style="color:#fff; text-align:left; padding-top:20px;">
	

			  <span class="fa fa-map-marker" style="font-size:16px; padding-right:20px;"></span>
			  		
					Adderss : 24/66 สุขสรรค์วิลล่า 1 ถ.ลงหาดบางแสน ซ.12 ต.แสนสุข อ.เมือง
					<div style="padding-top:10px;"></div>
					<span class="fa fa-phone" style="font-size:16px; padding-right:20px;"></span>
					Phone : 097-1949445
					<div style="padding-top:10px;"></div>
					<span class="fa fa-envelope" style="font-size:16px; padding-right:20px;"></span>
					E-mail : Xhoa_2541@hotmail.com
				</div>
				<hr>
			  <div id="map"></div>
			
			</div>


				
		</div>
	
  
</div>


</center>




	<script>
					function initMap() {
						var uluru = {lat: 13.289386, lng: 100.930221};
						var map = new google.maps.Map(document.getElementById('map'), {
							zoom: 10,
							center: uluru
						});
						var marker = new google.maps.Marker({
							position: uluru,
							map: map
						});
					}
				</script>
				<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSri6xDweSFsQ2ELKMOxNgmBmAgQH-xmM&callback=initMap">
				</script>
  				


	

	



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>


 	<!-- jQuery-2.2.4 js -->
    <script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('js/active.js')}}"></script>



	</body>
</html>