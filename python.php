<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python Terminal</title>
    <style>
        *{
            margin: 0;
        }
    </style>
    <script>
    </script>
</head>
<body style="background-color:#fff;color:#282a36;font-family: monospace;">
<header style="background-color:#282a36;height:60px;display:flex;justify-content: center;align-items: center;">
    <h1 style="color:#fff;">Python Playground</h1>
</header>
<div id="label" style="margin-left:1px;margin-top:5px;font-size:22px;">
    >>>
</div>
</body>
<!-- <script>document.getElementById('label').innerText='Ol�, Mundo! -->
</html>

<?php
    $code = "";
    if (isset($_POST["code"])){
        $code = $_POST["code"];
        file_put_contents("main.py",$code);
        $sc = shell_exec("python main.py");
        // echo($sc);
        $s = "<script>document.getElementById('label').innerHTML=`".$sc."`</script>";
        echo($s);
    }
?>
