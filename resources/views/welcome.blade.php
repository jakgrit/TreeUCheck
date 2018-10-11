@extends('default')
@section('title', 'Home')
@section('style')
@endsection
@section('content')

    <!-- menu -->
     <center>
    <div class="fonts1" style="width: 75%;">
      <div class="row fonts1" style="text-align: center; padding-top: 50px";>
        <div class="col-md-2">
          
       

       

        <div class="col-md-2">
          
        </div>

      </div>
    </div>
     </center>
      <!-- menu -->
  

    <div class="fonts1" style="text-align: center; padding-top: 50px">

        <p style="font-size:40px;">รายการลงทะเบียน</p>
        <p style="color:#908F8F">ติดตามรายละเอียดการจัดการลงทะเบียน สำหรับกิจกรรมต่าง การสัมนา การสอบ และอื่นๆ</p>

    </div>

    

  
<div class="form-inline fonts1" style="padding-top: 30px">
  @for ($i = 0; $i < sizeof($data); $i++)

  <div class="row" style="padding-top: 15px">
   <div class="col-md-3"></div>
   <div class="col-md-3" >
    <img src="image_upload/{{$data[$i]['pic']}}"  style="width: 100%" >
    
  </div>
  <div class="col-md-4">
    <div class="fonts1 left" style="font-size:20px; margin-bottom:10px; ">{{ $data[$i]['name'] }}</div>
    <div class="fonts1" style="font-size:14px; color: #807F7D; margin-bottom:10px;">{{ $data[$i]['detail'] }}</div>
    <div  style="margin-bottom:8px; padding-left: 50px "><span class="glyphicon glyphicon-paperclip" ></span> {{ $data[$i]['datestrat'] }} ถึง {{ $data[$i]['datestop'] }}</div>
    <div  style="margin-bottom:8px; padding-left: 50px"><span class="glyphicon glyphicon-paperclip"></span> {{ $data[$i]['station'] }}</div>
    <div  style="margin-bottom:15px; padding-left: 50px;"><span class="glyphicon glyphicon-paperclip"></span> {{ $data[$i]['contect'] }}</div>
    <center>
    <a  href="{{ route('register',[ 'id'=>$data[$i]['_id'] ]) }}"  class="btn btn-warning"  style="background-color:#58B957; border-color:#58B957; width:100px; border-radius: 0px;">ลงทะเบียน</a>
  </center>
  </div>
  <div class="col-md-1"></div>
</div>
  @endfor
</div>

@endsection