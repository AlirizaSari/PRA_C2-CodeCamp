<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/main.css">
        <link rel="shortcut icon" href="img/logo.ico">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+Mono">
        <title>Homepagina</title>
</head>
<body onload=display_ct();>
        <?php include "header.php"?>

        <div class="container contBody pushUp">
                <h2>Datum en tijd: </h2>
                <p id="date"></p>   
                
        </div>

        <?php include "footer.php"?>

        <script>
                function display_c() {
                        var refresh=1000; // Refresh rate in milli seconds
                        mytime=setTimeout('display_ct()',refresh)
                }

                function display_ct() {
                        var x = new Date()
                        var x1=x.getDate() + 1+ "/" + x.getMonth() + "/" + x.getFullYear(); 
                        x1 = x1 + " - " +  x.getHours()+ ":" +  x.getMinutes() + ":" +  x.getSeconds();
                        document.getElementById('date').innerHTML = x1;
                        display_c();
                }
        </script>
</body>
</html>
