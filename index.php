<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="tables">
    <table>
        <?php
        $five = 5;
        for($i = 1;$i<11;$i++){
            $result = $five * $i;
            
            echo "<tr>
                <td>$five X $i</td> <td>$result</td>
            </tr>";
        }
        ?>
    </table>
    
    <table>
        <?php
        $ten = 10;
        for($i = 1;$i<11;$i++){
            $result = $ten * $i;
            
            echo "<tr>
                <td>$ten X $i </td> <td>$result</td>
            </tr>";
        }
        ?>
    </table>
    
    <table>
        <?php
        $fiveteen = 15;
        for($i = 1;$i<11;$i++){
            $result = $fiveteen * $i;
            
            echo "<tr>
                <td>$fiveteen X $i </td> <td>$result</td>
            </tr>";
        }
        ?>
    </table>
    </div>
</body>
</html>