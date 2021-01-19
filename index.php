<?php include('./db/ketnoi.php'); ?>
<?php
//Thêm tin nhắn
    if(isset($_POST['themtn'])){
        $tn = $_POST['comment'];
        $sql_insert = mysqli_query($con,"INSERT INTO tbl_category(noidung) values ('$tn')");
        header('Location: index.php');
        exit();
    }    
?>
<!DOCTYPE html> <html> <head> <meta http-equiv="Content-Type"  content="text/html; charset=utf-8" /> <meta http-equiv=”content-language” content=”vi” /> <meta name="viewport"  content="width=device-width,initial-scale=1"> <meta name="description" content="Bạn có tâm sự thầm kín? Bạn muốn giải tỏa áp lực trong lòng mình? Bạn muốn nói lên suy nghĩ của mình nhưng lại sợ miệng lưỡi thiên hạ? Hãy đến với tamsu.ml, trang chia sẻ ẩn danh giúp bạn có thể giấu kín danh tính của mình, giờ đây bạn có thể nói ra quan điểm mà không sợ bị thiên hạ phán xét. Hãy trải nghiệm ngay hôm nay!"> <meta property="og:site_name"  content="Chuyện Trò Ẩn Danh"> <meta property="og:image"  content="https://i.imgur.com/QMKFXr6.jpg"> <meta name="theme-color" content="#2c3e50"> <meta name="robots"  content="index,follow"> <meta name="googlebot"  content="index,follow"> <meta name="google" content="notranslate"> <meta name="format-detection" content="telephone=no"> <link rel="dns-prefetch" href="https://i.imgur.com"> <link rel="dns-prefetch"  href="https://cdnjs.cloudflare.com"> <link rel="dns-prefetch"  href="https://images.weserv.nl"> 
<link href="https://fonts.googleapis.com/css?family=Monoton&display=swap"  rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
 <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> <link rel="shortcut icon" href="/images/chat.png"  type="image/x-icon"> <link rel="icon" href="/images/chat.png"  type="image/x-icon"> <title>Chuyện Trò Ẩn Danh - TAMSU.ML</title> <style>
@import url('https://fonts.googleapis.com/css?family=Fira+Sans+Extra+Condensed&display=swap');

body {
   font-family: 'Fira Sans Extra Condensed', sans-serif;
}
 * { word-wrap: break-word } video{text-align:center;margin:0 auto;display:block;width: 70%;height: auto;} .video-wrapper{position:relative;padding-bottom:56.25%;height:0;overflow:hidden}.video-wrapper iframe{position:absolute;top:0;left:0;width:100%;height:100%} .lds-ellipsis{display:inline-block;position:relative;width:64px;height:64px}.lds-ellipsis div{position:absolute;top:27px;width:11px;height:11px;border-radius:50%;background:#fff;animation-timing-function:cubic-bezier(0,1,1,0)}.lds-ellipsis div:nth-child(1){left:6px;animation:lds-ellipsis1 .6s infinite}.lds-ellipsis div:nth-child(2){left:6px;animation:lds-ellipsis2 .6s infinite}.lds-ellipsis div:nth-child(3){left:26px;animation:lds-ellipsis2 .6s infinite}.lds-ellipsis div:nth-child(4){left:45px;animation:lds-ellipsis3 .6s infinite}@keyframes lds-ellipsis1{0%{transform:scale(0)}100%{transform:scale(1)}}@keyframes lds-ellipsis3{0%{transform:scale(1)}100%{transform:scale(0)}}@keyframes lds-ellipsis2{0%{transform:translate(0,0)}100%{transform:translate(19px,0)}} </style> 
      <script src='https://www.google.com/recaptcha/api.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> </head> <body class="grey lighten-2" style="font-size:16px">
<nav><div class="nav-wrapper" style="font-family: 'Coda Caption', sans-serif;"> <a href="index.php" class="brand-logo center">TÂM SỰ ẨN DANH</a> </div> </nav>
<div class="container"><div class="card"> <div class="card-content">


    <form
    method="post" action="" name="myForm" onsubmit = "return(validate());"> 
    <div class="input-field col s12"> <textarea id="comment" class="materialize-textarea"  name="comment"></textarea> <label for="textarea1">Tâm sự ẩn danh</label> 
    <span class="helper-text">Mọi danh tính của bạn sẽ được giấu kín hoàn toàn. Không một ai biết bạn là ai ngoại trừ bạn.</span> </div> <center>
    <style> @media screen and (max-height: 575px){ #rc-imageselect, .g-recaptcha { transform:scale(0.92); -webkit-transform:scale(0.92); transform-origin:0 0; -webkit-transform-origin:0 0;} } </style> </center>  
                
    <br />
    <button type="submit" name="themtn" class="btn waves-effect waves-light"><i class="fal fa-pen-square"></i> Gửi</button> 
    <br>

    </form> </div> </div>

<script>
// Form validation code will come here.
      function validate() { 
      
         if( document.myForm.comment.value == "" ) {
            alert( "Bạn chưa nhập nội dung kìa" );
            document.myForm.comment.focus() ;
            return false;
         }
         if( document.myForm.comment.value == "đụ má" ) {
            alert( "ký tự cấm" );
            document.myForm.comment.focus() ;
            return false;
         }
         if( document.myForm.comment.value == "đm" ) {
            alert( "ký tự cấm" );
            document.myForm.comment.focus() ;
            return false;
         }
         if( document.myForm.comment.value == ".com" ) {
            alert( "ký tự cấm" );
            document.myForm.comment.focus() ;
            return false;
         }
         if( document.myForm.comment.value == "clmn" ) {
            alert( "ký tự cấm" );
            document.myForm.comment.focus() ;
            return false;
         }
         if( document.myForm.comment.value == "fuck" ) {
            alert( "ký tự cấm" );
            document.myForm.comment.focus() ;
            return false;
         }
         if( document.myForm.comment.value == "fuck you" ) {
            alert( "ký tự cấm" );
            document.myForm.comment.focus() ;
            return false;
         }
         if( document.myForm.comment.value == "tao đẹp trai" ) {
            alert( "ký tự cấm" );
            document.myForm.comment.focus() ;
            return false;
         }
    return( true );
      }
      </script>
<?php
																						//ASC: thêm trước trên xu DESC: đảo tùm lum
		$sql_category = mysqli_query($con,'SELECT * FROM tbl_category ORDER BY id DESC');

	?>
	<?php
		while ($row_category = mysqli_fetch_array($sql_category)) {
		?>
<div class="card"> <div class="card-content"> 
    <span class="card-title grey-text text-darken-4"><img src="http://testwap.viwap.com/images/avt.png" width="30px" /> 
        Bạn mới 
    </span> 
    <p><?php echo $row_category['noidung'] ?>
        <div style='text-align: right;'><em><small>
05/01/2021
</small></em></div>
</p> </div> </div>
<?php
		}
	?>


<div class="card"> <div class="card-content">
<iframe src="https://count.getloli.com/get/@khang?theme=moebooru" width="330px" height="105px"></iframe>
<br></div> </div>
</div> <div class="fixed-action-btn"> <a class="btn-floating btn-large teal waves-effect waves-light"> <i class="large material-icons">dehaze</i> </a> <ul> <li><a class="btn-floating red" href="quydinh.php"><i class="material-icons">help</i></a></li> <li><a class="btn-floating blue" href="https://github.com/huykhangvo"><i class="material-icons">emoji_emotions</i></a></li> <li><a class="btn-floating yellow darken-1" href="index.php"><i class="material-icons">home</i></a></li> </ul> </div> <script> $(document).ready(function(){ $('.fixed-action-btn').floatingActionButton(); }); </script> <style> .screen-edge-right{z-index: 99999999; background: #a8a8a8; height: 100vh; width: 0px; box-shadow: 10px 0px 10px 12px #333; position: fixed; top: 0; right: 0;} .screen-edge-left{ z-index: 99999999; background: #a8a8a8; height: 100vh; width: 0px; box-shadow: 0px 0px 10px 3px #333; position: fixed; top: 0; left: 0;} </style> <div class="screen-edge-right"/> <div class="screen-edge-left"/> <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"> <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js' type='text/javascript'></script> 

</body> </html>