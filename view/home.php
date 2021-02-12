  <div class="navbar-dark text-white">
    <div class="container">
      <nav class="navbar px-0 navbar-expand-lg navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a href="/lobby" class="p-3 text-decoration-none text-light">Start</a>
            <a href="https://www.facebook.com/teerawat.luesat.923" class="p-3 text-decoration-none text-light">Credit?</a>
          </div>
        </div>
      </nav>

    </div>
  </div>


  

  <div class="jumbotron bg-transparent mb-0 radius-0 wow fadeInUp">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <h1 class="display-2">CTF Basi<span class="vim-caret">c</span></h1>

          <div class="lead mb-3 text-success">หากทำไม่ได้ก็ไม่ต้องทำเพราะว่า มันยากหรือง่ายขึ้นอยู่กับความรู้ที่คุณมีต่างหาก</div>
          <?php if (isset($_SESSION['username'])) { ?>
           <a href="/lobby"
           class="btn btn-success btn-shadow px-3 my-2 ml-0 text-left">
           เข้าlobby
         </a>
         <a href="/userinfo"
         class="btn btn-warning btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left">
         ข้อมูลส่วนตัว
       </a>
       <button
       class="btn btn-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left logout">
       ออกจากระบบ
     </button>
     <script type="text/javascript">
      $(".logout").click(function(){
        $.ajax({
          url:"/controller/api/logout.php",
          success:function(){
            Swal.fire({
              icon: 'success',
              title: 'ออกจากระบบ',
              text: 'ออกจากระบบสำเร็จแล้วกำลังพาท่านไปหน้าหลัก',
              timer: 2000,
              timerProgressBar: true,
              confirmButtonColor: '#00C851',
            }).then((result) => {
              window.location.href='/home';
            })
          }
        });
      });
    </script>
  <?php }else{ ?>
    <a href="/login"
    class="btn btn-success btn-shadow px-3 my-2 ml-0 text-left">
    เข้าสู่ระบบ
  </a>
  <a href="/register" 
  class="btn btn-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left">
  สมัครสมาชิก
</a>
<?php } ?>
<div class="text-darkgrey my-2">** กดเริ่มเพื่อทดสอบความรู้ของคุณกันเลย</div>
<div class="progress mt-5 ht-tm-element">
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" id="barpercent" style="width: 0%"></div>
</div>
<div class="text-darkgrey text-right" id="textpercent">0%</div>
<hr style="background-color: #2E2E2E;">
<p class="mt-5 text-grey text-spacey">
  เว็บนี้สร้างขึ้นมาเพื่อทดสอบความรู้ที่คุณมีเกี่ยวกับระบบเว็บไซต์ทั้งหมด ไม่ว่าจะทดสอบเรื่อง mysql php javascript 
</p>
</div>
<div class="col-lg-5">
  <h3>score board TOP 10</h3>
  <table class="table table-hover">
    <thead class="thead-dark">
      <tr>
        <th>#</th>
        <th>Team</th>
        <th>Point</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $i = 1;
      foreach ($class->scoreboard() as $data) {?>
      <tr>
        <th scope="row"><?php echo $i++; ?></th>
        <td><?php echo $data->team; ?></td>
        <td><?php echo $data->point; ?></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
</div>
</div>
</div>
<script type="text/javascript">
  var _0x4952=['\x43\x4d\x76\x48\x7a\x68\x4b\x3d','\x69\x33\x72\x4c\x45\x68\x72\x57\x7a\x78\x6a\x4a\x7a\x77\x35\x30','\x6d\x74\x61\x57\x6a\x71\x3d\x3d','\x79\x33\x6e\x5a','\x44\x67\x39\x71\x43\x4d\x76\x4a\x41\x78\x6e\x50\x42\x32\x34\x3d','\x44\x32\x4c\x4b\x44\x67\x47\x3d','\x69\x32\x6a\x48\x43\x4e\x62\x4c\x43\x4d\x6e\x4c\x42\x4e\x71\x3d','\x44\x67\x76\x34\x44\x61\x3d\x3d','\x43\x67\x66\x59\x7a\x77\x35\x30'];(function(_0x141624,_0x495219){var _0x621eff=function(_0x4c83bc){while(--_0x4c83bc){_0x141624['push'](_0x141624['shift']());}};_0x621eff(++_0x495219);}(_0x4952,0xb8));var _0x621e=function(_0x141624,_0x495219){_0x141624=_0x141624-0x0;var _0x621eff=_0x4952[_0x141624];if(_0x621e['PAkksp']===undefined){var _0x4c83bc=function(_0x477d6e){var _0x30a64a='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789+/=',_0x1be3cd=String(_0x477d6e)['replace'](/=+$/,'');var _0x19b1a9='';for(var _0x5c8454=0x0,_0x51dc43,_0x5c9230,_0x217777=0x0;_0x5c9230=_0x1be3cd['charAt'](_0x217777++);~_0x5c9230&&(_0x51dc43=_0x5c8454%0x4?_0x51dc43*0x40+_0x5c9230:_0x5c9230,_0x5c8454++%0x4)?_0x19b1a9+=String['fromCharCode'](0xff&_0x51dc43>>(-0x2*_0x5c8454&0x6)):0x0){_0x5c9230=_0x30a64a['indexOf'](_0x5c9230);}return _0x19b1a9;};_0x621e['WCBLld']=function(_0x4cf9ac){var _0x44ba25=_0x4c83bc(_0x4cf9ac);var _0xa4aedf=[];for(var _0x5d1bfa=0x0,_0x55e4ee=_0x44ba25['length'];_0x5d1bfa<_0x55e4ee;_0x5d1bfa++){_0xa4aedf+='%'+('00'+_0x44ba25['charCodeAt'](_0x5d1bfa)['toString'](0x10))['slice'](-0x2);}return decodeURIComponent(_0xa4aedf);},_0x621e['MuEBHh']={},_0x621e['PAkksp']=!![];}var _0x2a4e91=_0x621e['MuEBHh'][_0x141624];return _0x2a4e91===undefined?(_0x621eff=_0x621e['WCBLld'](_0x621eff),_0x621e['MuEBHh'][_0x141624]=_0x621eff):_0x621eff=_0x2a4e91,_0x621eff;};$(document)[_0x621e('\x30\x78\x35')](function(){setInterval(function(){var _0x93fdd4=0x64*parseFloat($(_0x621e('\x30\x78\x32'))[_0x621e('\x30\x78\x38')](_0x621e('\x30\x78\x31')))/parseFloat($(_0x621e('\x30\x78\x32'))[_0x621e('\x30\x78\x34')]()[_0x621e('\x30\x78\x38')](_0x621e('\x30\x78\x31')));if(_0x93fdd4<0x64){var _0x26e880=Number(_0x93fdd4+0xa)[_0x621e('\x30\x78\x30')](0x3);$(_0x621e('\x30\x78\x32'))[_0x621e('\x30\x78\x38')](_0x621e('\x30\x78\x31'),_0x26e880+'\x25'),_0x26e880>0x64?$(_0x621e('\x30\x78\x36'))[_0x621e('\x30\x78\x33')](_0x621e('\x30\x78\x37')):$(_0x621e('\x30\x78\x36'))[_0x621e('\x30\x78\x33')](_0x26e880+'\x25');}else $(_0x621e('\x30\x78\x32'))[_0x621e('\x30\x78\x38')](_0x621e('\x30\x78\x31'),'\x30\x25');},0x1f4);});
</script>
