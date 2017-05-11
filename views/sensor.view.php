<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../css/sensor.css">
    <meta charset="utf-8">
  </head>
  <body>
    <div class="container">
      <h1>SecureSys</h1>
      <form action="../server/activitytracker.php" method="post">
          <input type="password" name="pin" placeholder="Enter 4 digits pin" maxlength="4" autofocus><br>
          <input type="submit" name="submit" value="Unlock">
      </form>
    </div>
    <script src="../libraries/jquery/dist/jquery.min.js" charset="utf-8"></script>
    <script type="text/javascript">
      $(document).ready( function() {
        $('#removeText').delay(1000).fadeOut();
      });
    </script>
  </body>
</html>
