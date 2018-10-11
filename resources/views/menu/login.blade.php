<div class="w3-top" style="z-index:15000;">
    <div class="w3-bar w3-black w3-card" style="height:70px; padding-top:5px; ">
      <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right li-manu" style="margin-top:8px;" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <!-- <img style="margin-left:100px;" src="{{asset('img/LOGO.svg')}}" alt=""> -->
      <label  class="fonts1" style="margin-top:5px; margin-left:150px; font-size:30px;">MEETING<span style="color:#00C7E8;" class="fonts1">CHECK</span></label>
      <div class="w3-right w3-hide-small" style="margin-right:150px; margin-top:10PX;">
        <a href="{{ route('home') }}" class="w3-bar-item w3-button fonts1 " style="text-decoration: none; color:#00C7E8; font-size:18px;">หน้าแรก</a>
        <a href="{{ route('about') }}" class="w3-bar-item w3-button fonts1 " style="text-decoration: none; color:#00C7E8; font-size:18px;">เกี่ยวกับเรา</a>
        <a href="{{ route('email') }}" class="w3-bar-item w3-button fonts1 " style="text-decoration: none; color:#00C7E8; font-size:18px;">ติดต่อเรา</a>
          <a href="#" class="w3-bar-item w3-button fonts1 dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" 
          aria-expanded="false" style="text-decoration: none; color:#ffffff; font-size:18px;">{{$name}}<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li> <a href="{{ route('logout') }}" class="fonts1" style="font-size:16px;" >ออกจากระบบ</a></li>
          </ul>

      </div>
    </div>
  </div>