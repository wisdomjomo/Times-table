<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="table.css">
</head>
  <title>TIME TABLE GENERATOR</title>
</head>
<body>
    <div class="table-body">
        <div class="Name">
            <h1>MULTIPLICATION TIMES TABLE GENERATOR</h1>
        </div>
        <form action="" method="Post">
            <input type="text" name="fnum" required placeholder="Number Times Table: e.g 9"> <br> <br>
            <input type="text" name="snum" required placeholder="Range. e.g which number should stop"> <br> <br>
           <p>The maximum value in the range is 100, as larger values ​​can crash your browser.</p>
           <input type="submit" name="verify" value="Generate">
           <?php
                if(isset($_POST['verify'])){
                    $fnum = $_POST['fnum'];
                    $snum = $_POST['snum'];
            ?>
            <div class="check">
            <textarea rows="10" disabled>
               <?php 
                    for($i=1; $i <= $fnum; $i++){
                        echo "$i Times Table \n";
                        for($j=1; $j <= $snum; $j++){
                            echo "$i * $j = " .($i * $j). "\n";
                        }
                        echo "\n";
                    }
                ?>
            </textarea> <br> <br>
            </div>
           <?php } ?>
        </form>
    </div>
</body>
</html>