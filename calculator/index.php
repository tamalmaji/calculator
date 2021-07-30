<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <div>
                <input type="text" name="input1" placeholder="Pleace Enter your 1st no">
            </div>
            <div>
                <input type="text" name="input2" placeholder="Pleace Enter your 2nd no">
            </div>
            <div>
                <input type="submit" name="add" id="add" value="ADD +">
                <input type="submit" name="sub" id="sub" value="SUB -">
                <input type="submit" name="mul" id="mul" value="MUL *">
                <input type="submit" name="div" id="div" value="DIV /">
            </div>
        </form>
        <?php
        // For addition
            if(isset($_POST['add'])){
                $input1 = $_POST['input1'];
                $input2 = $_POST['input2'];
                $result = $input1+$input2;
                echo "Result is: " . $result;
            }
            // For addition
            if(isset($_POST['sub'])){
                $input1 = $_POST['input1'];
                $input2 = $_POST['input2'];
                $result = $input1-$input2;
                echo "Result is: " . $result;
            }// For addition
            if(isset($_POST['mul'])){
                $input1 = $_POST['input1'];
                $input2 = $_POST['input2'];
                $result = $input1*$input2;
                echo "Result is: " . $result;
            }// For addition
            if(isset($_POST['div'])){
                $input1 = $_POST['input1'];
                $input2 = $_POST['input2'];
                $result = $input1/$input2;
                echo "Result is: " . $result;
            }
        ?>
    </div>
</body>

</html>