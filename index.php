<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Modal</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  
  <link href="styles.css" rel="stylesheet">
  
</head>
<body>
 <div class="chatbox-holder">
 
  
  <div class="chatbox chatbox-min">
    <div class="chatbox-top">
      <div class="chatbox-avatar">
        <a target="_blank" href="https://www.facebook.com/mfreak"><img src="https://lh3.googleusercontent.com/-iJhKZHM5Kqs/Vgg2r91epsI/AAAAAAAAAgo/uGT4-sqPJzg/w800-h800/IMG_1339.jpg" /></a>
      </div>
      <div class="chat-partner-name">
        <span class="status donot-disturb"></span>
        <a target="_blank" href="https://www.facebook.com/mfreak">CHAT BOT</a>
      </div>
      <div class="chatbox-icons">
        <a href="javascript:void(0);"><i class="fa fa-minus"></i></a>
        <a href="javascript:void(0);"><i class="fa fa-close"></i></a>       
      </div>      
    </div>
    
    <div class="chat-messages">
     
       <div class="body" id="chatbody1">
                <div class="scroller1"></div>
            </div> 
    </div>
    <form method="post" autocomplete="off" class="chat">
      <div class="chat-input-holder">
        <input type="text" name="chat" id="chat1" placeholder="Chat Box" class="chat-input">
      <input type="submit" value="Send" id="btn1" class="message-send" />
    </div>

    </form>
    
    
    <div class="attachment-panel">
      <a href="#" class="fa fa-thumbs-up"></a>
      <a href="#" class="fa fa-camera"></a>
      <a href="#" class="fa fa-video-camera"></a>
      <a href="#" class="fa fa-image"></a>
      <a href="#" class="fa fa-paperclip"></a>
      <a href="#" class="fa fa-link"></a>
      <a href="#" class="fa fa-trash-o"></a>
      <a href="#" class="fa fa-search"></a>
    </div>
  </div>
</div>
<script src="app.js"></script>
 <script>
   $(function(){
  $('.fa-minus').click(function(){    $(this).closest('.chatbox').toggleClass('chatbox-min');
  });
  $('.fa-close').click(function(){
    $(this).closest('.chatbox').hide();
  });
});

 </script>
</body>
</html>