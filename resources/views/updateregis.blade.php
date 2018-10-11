@extends('default')

@section('title', 'สมัครสมาชิก')


@section('style')


@endsection


@section('content')



<div style="margin-left:50px;"> 
    <center>
      <div class="fonts1" style="font-size:50px; padding-top:20px;">ระบบเพิ่มประกาศลงทะเบียน</div>


       <form action="{{ route('editsend',[ 'id'=>$id]) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div style="width:40%">
        
        <h5 class="fonts1"  style="text-align:left">ข้อมูลรายละเอียดการประชุม</h5>
       
        <div class="input-group" style="margin-top:20px;">
                  <span class="input-group-addon" id="basic-addon1"><i class="fas fa-file"><span class ="fonts1">&nbsp; ชื่อประกาศลงทะเบียน</i></span></span>
                  <input required type="text"  name="name" value = "{{ $data['name'] }}" class="form-control fonts1" placeholder="โครงการเรารักมหาวิทยาลัยบูรพา" aria-describedby="basic-addon1">
        </div>


       
         
          <div class="input-group" style="margin-top:20px;">
                  <span class="input-group-addon" id="basic-addon1"><i class="fas fa-edit"><span class ="fonts1">&nbsp; รายละเอียด</i></span></span>
                  <textarea required type="text"  name="detail" class="form-control fonts1" placeholder="อบรมเกี่ยวกับ การบริหารการเก็บขยะในมหาวิทยาลัย" aria-describedby="basic-addon1">{{ $data['detail'] }}</textarea>
        </div>

         
           <div class="input-group" style="margin-top:20px;">
                  <span class="input-group-addon " id="basic-addon1"><i class="fas fa-calendar-check "><span class ="fonts1">&nbsp; วันเริ่มงาน</span></i></span>
                  <input input required type="date"  name="datestrat" class="form-control fonts1" value = "{{ $data['datestrat'] }}" placeholder="วันเริ่มงาน" aria-describedby="basic-addon1">
        </div>

       

     <div class="input-group" style="margin-top:20px;">
                  <span class="input-group-addon " id="basic-addon1"><i class="fas fa-calendar-check "><span class ="fonts1">&nbsp; วันสิ้นสุดงาน</span></i></span>
                  <input required type="date"  name="datestop" class="form-control fonts1" value = "{{ $data['datestop'] }}" placeholder="วันสิ้นสุดงาน" aria-describedby="basic-addon1">
        </div>
        
         <div class="input-group" style="margin-top:20px;">
                  <span class="input-group-addon" id="basic-addon1"><i class="fas fa-clock"><span class ="fonts1">&nbsp; เวลาเริ่มงาน</span></i></span>
                  <input input  required type="time"  name="time" class="form-control fonts1" value = "{{ $data['time'] }}" placeholder="เวลาเริ่มงาน" aria-describedby="basic-addon1">
        </div>

         
        
         <div class="input-group" style="margin-top:20px;">
                  <span class="input-group-addon" id="basic-addon1"><i class="fas fa-clock"><span class ="fonts1">&nbsp; เวลาสิ้นสุดงาน</span></i></span>
                  <input required type="time"  name="timeend" class="form-control fonts1" value = "{{ $data['timeend'] }}" placeholder="เวลาสิ้นสุดงาน" aria-describedby="basic-addon1">
        </div>
        

           <div class="input-group" style="margin-top:20px;">
                  <span class="input-group-addon" id="basic-addon1"><i class="fas fa-map-marker-alt"><span class ="fonts1">&nbsp; สถานที่จัดประชุม</span></i></span>
                  <input required type="text"  name="station" class="form-control fonts1" value = "{{ $data['station'] }}" placeholder="มหาวิทยาลัยบูรพา" aria-describedby="basic-addon1">
        </div>

       

        <div class="input-group" style="margin-top:20px;">
                  <span class="input-group-addon" id="basic-addon1"><i class="fas fa-user-clock"><span class ="fonts1">&nbsp; วันเริ่มต้นลงทะเบียน</span></i></span>
                  <input required type="date"  name="regstrat" class="form-control fonts1" value = "{{ $data['regstrat'] }}" placeholder="วันเริ่มต้นลงทะเบียน" aria-describedby="basic-addon1">
        </div>

      

        <div class="input-group" style="margin-top:20px;">
                  <span class="input-group-addon" id="basic-addon1"><i class="fas fa-user-clock"><span class ="fonts1">&nbsp; วันสิ้นสุดลงทะเบียน</span></i></span>
                  <input required type="date"  name="regstop" class="form-control fonts1" value = "{{ $data['regstop'] }}" placeholder=" วันสิ้นสุดลงทะเบียน" aria-describedby="basic-addon1">
        </div>



       <div class="input-group" style="margin-top:20px;">
                  <span class="input-group-addon" id="basic-addon1" ><i class="fas fa-users"><span class ="fonts1" style ="width :100px">&nbsp; จำนวนคนที่รับ</span></i></span>
                  <input  name="count" class="form-control fonts1" value = "{{ $data['count'] }}" placeholder="ระบุจำนวนเป็นตัวเลข" aria-describedby="basic-addon1">
        </div>

       
         <div class="input-group" style="margin-top:20px;">
                  <span class="input-group-addon" id="basic-addon1" ><i class="fas fa-phone-square"><span class ="fonts1" style ="width :100px">&nbsp; ติดต่อสอบถามข้อมูล</span></i></span>
                  <textarea required type="text"  name="contect" class="form-control fonts1" placeholder="นาย ภูวิศ ทีเวียง 02-XXX-XX-XX Example@gmail.com" aria-describedby="basic-addon1" >{{ $data['contect'] }}</textarea>
        </div>

        <div class="fonts1" style="font-size:15px; margin-top:20px;">
          </div>

      <div class="fonts1 center" style="text-align: left; padding-left: 20px">
        <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile" name="pic">
    <p class="help-block">รูปภาพแสดงข่าวสารการประชุม</p>
      <!-- <img src="{{ asset('/image_upload/') }}/{{ $data['pic'] }}"  style="width: 100%" > -->
    <input type="hidden" name="picold" value="{{ $data['pic'] }}">
      <center>
        <div class="fonts1" style="margin-top:20px;">


          <button type="button" class="btn btn-primary" style="background-color:#5D5E5C; border-color:#5D5E5C; margin-right:10px; width:100px;">ยกเลิก</button>
          <button type="submit" class="btn btn-primary" style="background-color:#58B957; border-color:#58B957; width:100px; " onclick="submitform();">ยืนยัน</button>
        </div>
      </center>
    </form>

  


</center>


</div>





@endsection

@section('js')

<script>
 

function deletestaff(url) {

    if(confirm("คุณต้องการลบหรือไม่ ?")){

    window.location = url;

  }

  
}

</script>





@endsection