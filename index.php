<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>Realtime Web Push Notifications example</title>
  <meta name="description" content="This page demonstrates the use of the Realtime Web Push Notitications using GCM">
  <meta name="author" content="Realtime">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">

  
  <link rel="icon" type="image/png" href="img/realtime-logo.jpg">

  <!-- THESE ARE THE REQUIRED FILES TO USE WEB PUSH NOTIFICATIONS -->
  <link rel="manifest" href="manifest.json">  
  <script src="//messaging-public.realtime.co/js/2.1.0/ortc.js"></script>

  
  <!-- THESE FILES ARE ONLY REQUIRED FOR THE CURRENT EXAMPLE -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>  
  <script src="index.js"></script>

</head>
<body>

  <!-- Firebase -->
  <!-- ********************************************************
       Update Firebase initialization code:
          1. Go to the Firebase console: https://console.firebase.google.com/
          2. Choose a Firebase project you've created
          3. Click "Add Firebase to your web app"
          4. Replace the following initialization code with the code from the Firebase console:
  -->
  <!-- START INITIALIZATION CODE -->
  <script src="https://www.gstatic.com/firebasejs/4.10.1/firebase.js"></script>
  <script>
    // Initialize Firebase
    var config = {
      apiKey: "AIzaSyA-Nz4m2EYMn8Al3KAonCxwVIRgKdz02BE",
      authDomain: "web-push-677a8.firebaseapp.com",
      databaseURL: "https://web-push-677a8.firebaseio.com",
      projectId: "web-push-677a8",
      storageBucket: "web-push-677a8.appspot.com",
      messagingSenderId: "909188362541"
    };
    firebase.initializeApp(config);
  </script>
  <!-- END INITIALIZATION CODE -->
  
  <script src="WebPushManager.js"></script>

  <div class="container">
    <div class="row">
      <div class="col-md-12" style="margin-top: 2%">

        <p>
          <button id="sendButton" class="button-primary" onclick="javascript:send();">Send me a push notification</button>
        </p>
        
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="twelve column" style="margin-top: 2%">        

        <p>
          Let's try it. Copy the following curl command and navigate away from this website. Paste the command in your terminal window and send yourself a push notification. When you receive it click on the pop-up and you'll be redirected to the Realtime homepage.
        </p>

        <p>          
            <div id="curl" style="padding: 15px; background-color: black; color: white;">
            </div>          
        </p>   

      </div>
    </div>
  </div>

</body>
</html>
<?php
?>
