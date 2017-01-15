<?php
include "function.php";

$visitors = getvisitors();

if(isset($_POST['delete'])){
  $db = connect();
	$sth = $db->prepare("DELETE FROM visitors");
	$sth->execute();
  header('Location: record');
}

if(isset($_POST['search'])){
  $sdate = $_POST['search'];
  if(preg_match("/[a-zA-Z]/",$sdate)){
    $styl = "<p>Invalid Date!</p>";
  }
  else{
    $sdatem = date('m', strtotime($sdate));
    $sdated = date('d', strtotime($sdate));
    $sdatey = date('Y', strtotime($sdate));
    if(!checkdate($sdatem, $sdated, $sdatey)){
      $styl = "<p>Invalid Date!</p>";
    }
    else{
      $d = $_POST['search'];
      $db = connect();
      $stmt = $db->prepare("SELECT * from visitor where dates = ?");
      $stmt->bindParam(1,$d);
      $stmt->execute();
      $visitors = $stmt->fetchAll(PDO::FETCH_OBJ);
    }
  }
}elseif(empty($_POST['search'])){
  $visitors = getvisitors();
}

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
     <link rel="stylesheet" href="cs/bootstrap-3.3.7-dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="cs/bootstrap-3.3.7-dist/css/bootstrap.css">
     <link rel="stylesheet" href="cs/master.css">
    <title></title>
  </head>
  <body>
    <div class="container topmargin">
      <div class="row span">
        <table class="table table-striped topmargin padtop" border="3">
        <tr>
          <th>ID</th>
          <th>Remote Addr</th>
          <th>HTTP Forwarded</th>
          <th>Date</th>
          <th>Time</th>
          <th>Day</th>
        </tr>
        <?php foreach ($visitors as $g):?>
        <tr>
          <td><?php echo  $g->id; ?></td>
          <td><?php echo  $g->remote_addr; ?></td>
          <td><?php echo  $g->forwarded; ?></td>
          <td><?php echo  $g->dates; ?></td>
          <td><?php echo  $g->time; ?></td>
          <td><?php echo  $g->day; ?></td>
        </tr>
        <?php endforeach;?>
        </table>
        <div class="row">
          <div class="col-md-1">
            <form class="" action="record" method="post">
              <button class="btn btn-warning center-block"
               type="submit" name="delete">Delete All</button>
            </form>
          </div>
          <div class="col-md-3">
            <form class="" method="POST" action="record" >
                <input class="form-control"
                type="date" name="search"
                style=""
                placeholder="Search by date | format: yyyy-mm-dd">
            </form>
          </div>
          <div class="col-md-8">
              <?php if(isset($styl)){echo $styl; }?>
          </div>
        </div>

      </div>
    </div>
  </body>
</html>
