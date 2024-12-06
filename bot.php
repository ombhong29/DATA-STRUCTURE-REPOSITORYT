
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1 viewport-fit=cover, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <style>
   .header {
  overflow: hidden;
  background-color: #10151b;
  padding: 10px 30px;
}

.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a.logo:hover {
  background-color: black;
}

.header a:hover {
  background-color: rgb(86, 246, 11);
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

.subnav {
  float: left;
  overflow: hidden;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

.subnav .subnavbtn {
  border: none;
  outline: none;
  color: white;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.subnav-content {
  display: none;
  position: absolute;
  background-color: black;
  z-index: 1;
}

.subnav-content a {
  color: white;
  text-decoration: none;
  display: block;
  padding: 10px;
}

.subnav-content a:hover {
  background-color: rgb(6, 240, 26);
  color: black;
}

.subnav:hover .subnav-content {
  display: block;
}

body {
  background-color: white;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  height: 100vh;
}

#bp-web-widget-container {
  max-height: 90%;
  width: 481px;
  margin: auto;
  flex-grow: 1;
}

#bp-web-widget-container div {
  height: 100%;
}

.webchatIframe {
  position: relative !important;
}

    </style>
    <title>Chatbot</title>
  </head>
  <body>
  <header>
<div class="header">
	 <a href="index.php" class="logo"><img style="height: 80px;" src="images/footer-logo.png" alt="logo"></a>
	 <br>
	  <div class="header-right">
      
      <a style="font-size: larger;" href="index2.php">Home</a>
      
      <div class="subnav">
		   <button style="font-size: larger;" class="subnavbtn">whether<i class="#"></i></button>
		   <div class="subnav-content">
		   <li><a href="Fertilizer.php">Fertilizer</a></li>
		   </div>
	   </div>
     
	   <!-- <div class="subnav">
		   <button style="font-size: larger;" class="subnavbtn"><a style="font-size: 20px;" href = "seed price.php">Seed Price</a><i class="#"></i></button>
       <li><a href="Fertilizer.php">Fertilizer</a></li>
	   </div> -->
	   <a href="govts.php">Goverment Schemes</a>
	   <a style="font-size: larger;" href="solarpanel.php">Tech Knowledge</a>
	   <a href="Feedback.php">Feedback</a>
	   </div>
</div>

</header>

  <script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script>
  window.botpressWebChat.init({
      "composerPlaceholder": "Chat with bot",
      "botConversationDescription": "This chatbot was built surprisingly fast with Botpress",
      "botId": "edbe2459-20e2-4622-922b-e5511ba8794b",
      "hostUrl": "https://cdn.botpress.cloud/webchat/v1",
      "messagingUrl": "https://messaging.botpress.cloud",
      "clientId": "edbe2459-20e2-4622-922b-e5511ba8794b",
      "webhookId": "f095810c-ae28-4078-a353-e3da670e4254",
      "lazySocket": true,
      "themeName": "prism",
      "frontendVersion": "v1",
      "showPoweredBy": true,
      "theme": "prism",
      "themeColor": "#2563eb",
      "hideWidget": true,
      "disableAnimations": true,
      "closeOnEscape": false,
      "showConversationsButton": false,
      "enableTranscriptDownload": false,
      "className": "webchatIframe",
      "containerWidth": "100%25",
      "layoutWidth": "100%25",
      "showCloseButton": false
  });
window.botpressWebChat.onEvent(function () { window.botpressWebChat.sendEvent({ type: 'show' }) }, ['LIFECYCLE.LOADED']);
</script>

  </body>
</html>