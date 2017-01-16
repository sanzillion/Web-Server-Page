<?php

include "function.php";
$db = connect();
if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
  $forw = $_SERVER['HTTP_X_FORWARDED_FOR'];
}else {
  $forw = "NO HTTP FORWARDED";
}

$ra = $_SERVER['REMOTE_ADDR'];

$query = $db->prepare("INSERT INTO visitor SET
                  remote_addr = :ra,
                  forwarded = :for,
                  dates = curdate(),
                  time = curtime(),
                  day = dayname(curdate())");

$execute_query = [':ra' => $ra,
                ':for' => $forw];

$query->execute($execute_query);

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport"
    content="width=device-width, initial-scale=1">
    <meta name="viewport"
    content="width=device-width, initial-scale=1,
     maximum-scale=1, user-scalable=no">
     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
     <link rel="stylesheet" href="cs/master.css">
    <title></title>
  </head>
  <body>
    <div class="container topmargin">
      <div class="row block">
        <div class="col-md-2">
        </div>
        <div class="col-md-8 padtop">
          <img class="img-responsive" src="x.png" alt="X">
          <div class="row topmargin">
            <h3 class="whitetext"><b>
              The site ahead contains harmful programs</b></h3>
          </div>
          <div class="row whitetext">
            <p><b>Attackers on this site might attempt to trick
            you into installing programs that harm your browsing
          experience (for example, by changing your homepage or
          showing extra ads on site you viist).</b></p>
          </div>
          <div class="row whitetext ltopmargin">
            <input class="chkbx" type="checkbox" name="" value="check" checked="yes">
            <label class="leftmargin">Automatically report details of possible
            security incidents to Google. <a class="whitetext"
            href="porntube.com">
              <u>Privacy policy</u></a></label>
          </div>
          <div class="row topmargin">
            <div class="col-md-6 fluid">
              <a class="whitetext link" href="sourmath.com"> <u>Details</u></a>
            </div>
            <div class="col-md-6">
              <form class="pull-right" action="youporn.com" method="post">
                <button class="btn redtext target"
                type="submit" name="button">Back to safety</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-2">
        </div>
      </div>
      <!-- <div class="row block">
        <button class="btn btn-primary" type="button" name="button">
          Click Me</button>
      </div> -->
    </div>

    <a class="hiden" href="record"></a>

  </body>
</html>
