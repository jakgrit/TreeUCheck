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
		margin-top:20px;
		height: 200px;
		width: 300px;
		-webkit-border-radius: 10px;
		-moz-border-radius: 10px;
		border-radius: 10px;
	}


</style>

</head>
<body style="background-image: url('{{asset('img/1607.jpg')}}');  background-size: cover;background-repeat: no-repeat;  background-attachment: fixed; ">
	<div>
		@if(Session::has('user'))
		@include('menu.login')
		@else
		@include('menu.not-login')
		@endif
	</div>  
	<div class="fonts1" style="margin-top: 100px; color: #FFF">
		<h1 style="color: #fff; text-align: center;">ติดต่อสอบถาม</h1>

    <!-- menu --><div class="fonts1" style="font-size:15px; margin-top:20px;">
           Email<input type="text" id="fname" name="email" placeholder="" style="width:500px; margin-left:20px; height:30px;">
         </div>

  
      <div class="row fonts1" style="text-align: center; padding-top: 50px";>
        <div class="col-md-6">
          <form action="send" method="post">
			{{csrf_field()}}




			
			to: <input type="text" name="to">
			message: <textarea name="message" id="" cols="30" rows="10"></textarea>
			<input type="submit" value="Send">
		</form>


        </div>


    
       <div class="col-md-6">  
         


        </div>

      </div>






		
	</div>




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