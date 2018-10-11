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


<body style="background-image: url('{{asset('img/login.png')}}');  background-size: cover;background-repeat: no-repeat;  background-attachment: fixed;">
<!-- nav -->

@if(Session::has('user'))
	@include('menu.login')
@else
	@include('menu.not-login')
@endif
  <!-- nav -->


		<center style="margin-top:70px">
		<div class="row" style="width: 300px ; margin-top:10%; ">
			 <form action="{{ route('login') }}" method="post">
			 {{ csrf_field() }}
				<h1 class="fonts1" style="color:#00C7E8;;">เข้าสู่ระบบ</h1>
				<h5 class="fonts1" style="color: #FFF; font-size:16px">สำหรับผู้จัดการระบบ</h5>
				<hr>
						<div class="form-group fonts1">
							<div class="input-group">
								<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
								<input type="text" class="form-control" id="Username" name="user" placeholder="Username" value="" required autofocus>
							</div>
						</div>
						<div class="form-group fonts1">
							<div class="input-group">
								<div class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></div>
								<input type="Password" class="form-control" id="Password" name="Pass" placeholder="Password" required autofocus>
							</div>
						</div>

                        <p class="fonts1">ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง</p>

						<button type="submit" style="width: 40% ;" class="btn btn-success fonts1">เข้าสู่ระบบ</button>
			</form>
			
	
  
</div>
			
		</center>
 

	



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