@extends('default')

@section('title', 'สมัครสมาชิก')


@section('style')





@endsection


@section('content')

<div > 


    <center>
      <div class="fonts1" style="font-size:50px; padding-top:20px;">ระบบสมัครสมาชิก</div>


       <form action="{{ route('regMember') }}" method="post">
        {{ csrf_field() }}
        <div style="width:40%">
        
        <h5 class="fonts1"  style="text-align:left">ข้อมูลส่วนตัว</h5>
       
        <div class="input-group" style="margin-top:20px;">
                  <span class="input-group-addon" id="basic-addon1"><i class="fas fa-address-card"></i></span>
                  <input required type="text" id="fname" name="name" class="form-control" placeholder="ชื่อ" aria-describedby="basic-addon1">
        </div>

          
          
          <!-- <div class="fonts1"  style="font-size:15px; margin-top:20px; color:#383838;">
            ชื่อ<input required type="text" id="fname" name="name" placeholder="" style="width:500px; margin-left:20px; height:30px; ">
          </div> -->

           <div class="input-group" style="margin-top:20px;">
         <span class="input-group-addon" id="basic-addon1"><i class="far fa-address-card"></i></span>
         <input required type="text" id="fname" name="sur" class="form-control" placeholder="นามสกุล" aria-describedby="basic-addon1">
      </div>
      

          <!-- <div class="fonts1" style="font-size:15px; margin-top:20px;">
            นามสกุล<input required  type="text" id="fname" name="sur" placeholder="" style="width:500px; margin-left:20px; height:30px;">
          </div> -->

          <!-- <div class="fonts1" style="font-size:15px; margin-top:20px;">
           Email<input required  type="text" id="fname" name="email" placeholder="" style="width:500px; margin-left:20px; height:30px;">
         </div>

         <div class="fonts1" style="font-size:15px; margin-top:20px;">
           username<input required type="text" id="fname" name="user" placeholder="" style="width:500px; margin-left:20px; height:30px;">
         </div>



         <div class="fonts1" style="font-size:15px; margin-top:20px;">
           password<input required type="password" id="fname" name="pass" placeholder="" style="width:500px; margin-left:20px; height:30px;">
         </div>

         <div class="fonts1" style="font-size:15px; margin-top:20px;">
          confirm password<input required type="password" id="fname" name="conpass" placeholder="" style="width:500px; margin-left:20px; height:30px;">
        </div>

        <div class="fonts1" style="font-size:15px; margin-top:20px;">
          สิทธิ์การเข้าใช้งาน

            <select name="cars" class="fonts1" style="width:500px; margin-left:20px; height:30px;">
              <option value="0">Addmin</option>
              <option value="1">User</option>
            </select>
          
        </div>
      </div> -->
      <hr>
       <h5 class="fonts1"  style="text-align:left">ข้อมูลผู้ใช้งาน</h5>

      <div class="input-group" style="margin-top:20px;">
         <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
         <input required type= type="text" id="fname" name="email" class="form-control" placeholder="E-mail" aria-describedby="basic-addon1">
      </div>

      <div class="input-group" style="margin-top:20px;">
         <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
         <input required type="text" id="fname" name="user" class="form-control" placeholder="บัญชีผู้ใช้งาน" aria-describedby="basic-addon1">
      </div>

      <div class="input-group" style="margin-top:20px;">
         <span class="input-group-addon" id="basic-addon1"><i class="fas fa-key"></i></span>
         <input required type="password" id="pass" name="pass" class="form-control" placeholder="รหัสผ่าน" aria-describedby="basic-addon1">
      </div>

      <div class="input-group" style="margin-top:20px;">
         <span class="input-group-addon" id="basic-addon1"><i class="fas fa-key"></i></span>
         <input required type="password" id="conpass" name="conpass" class="form-control" placeholder="ยืนยันรหัสผ่าน" aria-describedby="basic-addon1">
         <p class="help is-danger hide">This Password is not the same</p>
        
      </div>
    



      <div class="input-group" style="margin-top:20px;">
         <span class="input-group-addon" id="basic-addon1"><i class="fas fa-unlock-alt"></i></span>
         <select name="cars" class="form-control fonts1">
              <option value="0">Admin</option>
              <option value="1">User</option>
            </select>
      </div>




      <center>
        <div class="fonts1" style="margin-top:20px;">
          <button type="button" class="btn btn-primary" style="background-color:#5D5E5C; border-color:#5D5E5C; margin-right:10px; width:100px;">ยกเลิก</button>
          <button type="submit" class="btn btn-primary" style="background-color:#58B957; border-color:#58B957; width:100px; " onclick="submitform();">ยืนยัน</button>
        </div>
      </center>

    </form>
    </div>

    <div class="fonts1" style="padding-top: 20px; width:70%">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th class="text-center">ชื่อ - นามสกุล</th>
            <th class="text-center">Email</th>
            <th class="text-center">Username</th>
            <th class="text-center">สถานะ</th>
            <th class="text-center">ตัวเลือก</th>
            <th class="text-center">สิทธิ์การเข้าถึง</th>
          </tr>
        </thead>
        <tbody>
          @for ($i = 0; $i < sizeof($data); $i++)
          <tr>
            <td class="text-center">{{ $data[$i]['name'] }} {{ $data[$i]['surname'] }}</td>
            <td class="text-center">{{ $data[$i]['email'] }}</td>
            <td class="text-center">{{ $data[$i]['username'] }}</td>
            <td class="text-center">@if($data[$i]['status']==0)<span class="label label-success">Admin</span>
                                     @else<span class="label label-warning">User</span>
                                     @endif

           </td>
            <td class="text-center"> <a href="#" onclick="deletestaff('{{ route('delmember',[ 'id'=>$data[$i]['username'] ]) }}');">
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>      
            </a></td>
            </td>

            <!-- edite Type -->
            <td class="text-center"> 
              <select name="" id="editeType" onchange="upDateType(this,'{{ route('regmember.updateType',[ 'id'=>$data[$i]['username'] ]) }}');"> 
              <option value="">กรุณาเลือก</option>
              <option value="0">Admin</option>
              <option value="1">User</option>
              
              </select>
            </td>
          </tr>
          @endfor


        </tbody>

      </table>
    </div>

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

function upDateType(obj,url){
    window.location = url+"/"+obj.value;

}


function uu(){
    
    var pass = $("#pass")
    var con = $("#conpass")
    console.log(pass);
    if(pass.value == con.value){
      $('#f_regis').submit();
    }else{
      alert("empty");
    }


    



}



</script>





@endsection