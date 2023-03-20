<?php
/* dalam php terdapat superglobal yang memiliki arti variabel selalu dapat diakses
varibel mencakup :
$GLOBALS
$_SERVER
%_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
*/

// $GLOBALS termasuk variabel superglobal yang mampu mengakses variabel global dalam php

$x = 9;
$y = 10;

function test(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
test();
echo $z;

// $_SERVER digunakan untuk menyimpan informasi berupa header, jalur dan lokasi skrip
echo $_SERVER['php_self'];
echo '<br>';

// $_REQUEST digunakan untuk menyimpan data setelah dikirim ke formulir html
/*
<html>
    <body>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Name: <input type="text" name="fname">
            <input type="submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = $_REQUEST['fname'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
        ?>

    </body>
</html>
*/

//$_POST digunakan untuk menyimpan data setelah dikirim ke formulir html

/*
<html>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Name: <input type="text" name="fname">
            <input type="submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // collect value of input field
                $name = $_POST['fname'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
        ?>
    </body>
</html>
*/

/*$_GET adalah variabel super global php yang digunakan untuk mengumpulkan data formulir
setelah mengirimkan formulir html*/
?>