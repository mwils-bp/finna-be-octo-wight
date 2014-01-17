<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Bright Process Ltd">

    <title>Welcome to Cloud2Class | the continuing professional development portal</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="dist/css/simple-sidebar.css" rel="stylesheet">
    <link href="dist/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Generic page styles -->
    <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
    <link rel="stylesheet" href="css/jquery.fileupload.css">
  </head>

  <body style="overflow-y:hidden; overflow-x:hidden;">
<style>
iframe{border:0;}
</style>
    <div id="wrapper">

      <!-- Sidebar -->
      <div id="sidebar-wrapper" style="overflow-x:hidden; overflow-y:hidden;">
        <ul class="sidebar-nav">
<div class="sidebar-group" style="padding:0px 15px 15px 15px; width:100%; height:295px;">
<div style="cursor:pointer;">
<img src="https://admin.cloud2class.com/views/c2c-logo.png" style="width: 196px; margin-left:15px; margin-top: -22px; padding: 3px; height:174px;"/>
</div>
<h4 style="padding-bottom:15px; border-bottom:1px solid white; color:white; width:100%;">Student Portal:</h4>
<li>
	     <!-- The fileinput-button span is used to style the file input field as button -->
    <span class="btn btn-primary fileinput-button" style="float:left; margin-top:-1px; height:32px; padding-left:0; width:51px; padding-right:10px; border-top-right-radius: 0; border-bottom-right-radius: 0;">
        <i style="float:left;" class="glyphicon glyphicon-plus"></i>
        <span>upload a file</span>
        <!-- The file input field used as target for the file upload widget -->
        <input id="fileupload" type="file" name="files[]" multiple>
    </span>
    <!-- The global progress bar -->
    <div style="margin-right:3px; height:31px; border-bottom-left-radius: 0; border-top-left-radius: 0; margin-right: 3px;" id="progress" class="progress">
        <div class="progress-bar progress-bar-success"></div>
    </div>
    <!-- The container for the uploaded files -->

    <div id="files" class="files"></div>
<style>
.sidebar-group ul li{
display:inline;
}
.sidebar-group ul{
margin-top:-10px;
}
</style>
<ul>
<li><button type="button" class="btn btn-danger" style="width:82px; margin-left:-38px;">Download</button></li>
<li><button type="button" id="loadfiles" class="btn btn-primary">View Files</button></li>
</li>

</div>
<div class="sidebar-group" style="padding:0px 15px 15px 15px;">
        <h4 style="padding-bottom:15px; border-bottom:1px solid white; color:white; width:100%;">External Resources:</h4>
          <li><a href="http://teachinglondoncomputing.org">Teaching London Computing</a></li>
          <li><a href="http://www.ocr.org.uk/qualifications/by-subject/computing/raspberry-pi/">Raspberry Pi</a></li>
</div>
 </ul>
      </div>

      <!-- Page content -->
      <iframe src="https://shelldemo.cloud2class.com" id="page-content-wrapper">
        </iframe>
</div>
    </div>
<nav class="navbar navbar-inverse navbar-fixed-bottom bottom-navy navbar-sam-main navey" role="navigation">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-mycol">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    </div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse navbar-mycol">
    <ul class="nav navbar-nav navbar-right">
 <li class="siteseal" style="margin-right:170px; margin-top:20px;"><span id="siteseal"><script type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=AywkROD2O9vhtzzwflDU4VLXEb6GXv8TKsXF6eoVTX8bSfFbkxUR"></script></span></li>
              <li><h1>support</h1></li>
<li class="email-us" style="margin-right:57px;"><a data-toggle="modal" data-target="#email-modal" href="">tel: +44 (0)208 8195 925<br>email: support@brightprocess.com</a></li>
		<li><h1 style="left:-62px;">web</h1></li>               
 		<li style="padding-left:25px;"><a href="">www.brightprocess.com/c2c</a><a style="margin-top:-30px;"href="#">about: www.brightprocess.com/about-us</a></li>
                <li style="margin-top:2px; margin-right:24px;"><img class="trademark" src="https://pbs.twimg.com/profile_images/3569761065/3e3f093c9102c0e09d06582f197b4956_bigger.png" width="64" height="64"/></li>
    </ul>

</div><!-- /.navbar-collapse -->
</nav>
    <!-- Custom JavaScript for the Menu Toggle -->
<div class="modal fade" id="email-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Contact Us</h4>
      </div>
      <div class="modal-body">
        <form action="" method="post" id="contact_us" class="contact_us">
<p class="notes">Have a problem using Cloud2Class? Report it here and we will respond within 48 hours.</p>
<div class="input-group">
<span class="input-group-addon glyphicon glyphicon-user"></span>
<input placeholder="your name...." class="form-control" id="author" name="author" type="text" value="" size="30">
</div>
<div class="input-group"><span class="input-group-addon">@</span>
<input class="form-control" id="email" placeholder="your email address...." name="contact_email" type="text" value="" size="30">
</div>
<p><textarea id="contact_message" class="form-control" name="contact_message" cols="45" rows="8" placeholder="your message...." aria-required="true"></textarea></p>
</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" id="contact-us-btn" name="contact_us">send email</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" id="files-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Student Portal</h4>
      </div>
      <div class="modal-body">
<div class="row">
<div id="files"></div>
</div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script src="dist/js/jquery.js"></script>
--> <script src="js/vendor/jquery.ui.widget.js"></script>
<script src="js/jquery.iframe-transport.js"></script>
<script src="js/jquery.fileupload.js"></script> 
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
$( ".panel-exit" ).click(function() {
$(".panel-body").hide();
$(".panel-footer").hide();
$(".panel-exit").hide();
$(".panel-open").show();
$(".panel-heading .dropdown-toggle").hide();
}); 
$( ".panel-open" ).click(function() {
$(".panel-body").show();
$(".panel-footer").show();
$(".panel-exit").show();
$(".panel-open").hide();
$(".panel-heading .dropdown-toggle").show();
}); 
        $('#loadfiles').click(function(){
        $.get('showfiles.php', function(data) {
            $("#files-modal #files").html(data);
    });
        $("#files-modal").modal();
});
});

$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = window.location.hostname === 'blueimp.github.io' ?
                '//jquery-file-upload.appspot.com/' : 'server/php/';
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                $('<p/>').text('congrats').appendTo('#files');
		$("#files:has(p)").addClass("has-paragraph");
if ($("#files").is(".has-paragraph")) {
        $.get('showfiles.php', function(data) {
            $("#files-modal #files").html(data);
    });
	$("#files-modal").modal();
}          
  });
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );
        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});
    </script>
  </body>
</html>
