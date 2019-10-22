<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Style.css">
    <title>Document</title>
</head>
<body>
<h2 class="chapter-title">En God Historie</h2>
<h3>Regler for String Operators (Se HTML kommentarer)</h3>

<div class="reglwrapper">
<div class=regl1>
<?php
$a = "Hello "; // variable a bliver sat til at være Hello (mellemrum).
$b = $a . "World!"; // Variable $b har nu hello fra variable a og world!

$a = "Hello "; // variable a bliver sat til at være Hello (mellemrum).
$a .= "World!";     // Her ligger man world til variable a.
echo $a . "<br>"; // dette udskriver variable a og laver linjeskift.
echo $b; // Dette udskriver variable b.
?>
</div>
<div class="regl2">
<?php
$c = 'gik'; // variable c bliver sat til ordet gik.

// Du kan bruge to metoder for at få variabler ind i en sætning:
echo "Manden {$c} ned ad gaden." . "<br>";// Dette udskriver sætningen med vores variable i midten. Denne metode bruger brackets.
echo "Manden " . $c . " ned ad gaden."; // Dette udskriver sætningen med vores variable i midten men bruger punktum.
?>
</div>
</div>
<br>
<div class="formwrapper">
<form class="form" action="" method="post"> 
<input type="text" name="Udsagn1" value="" placeholder="Udsagnsord" />
<input type="text" name="Udsagn2" value="" placeholder="Udsagnsord" />
<input type="text" name="Udsagn3" value="" placeholder="Udsagnsord" />
<input type="text" name="Navneord1" value="" placeholder="Navneord" />
<input type="text" name="Navneord2" value="" placeholder="Navneord" />
<input type="text" name="Navneord3" value="" placeholder="Navneord" /> <br>
<input type="submit" name="submit" value="Lav min historie" />
</form>
</div>
<div class="historie">
<?php
 if (isset($_POST['submit'])) { //Checker om formen er blevet submittet
 $Udsagn1= $_POST['Udsagn1']; //tager input fra udsagn1 og laver det til et variable
 $Udsagn2= $_POST['Udsagn2'];
 $Udsagn3= $_POST['Udsagn3'];
 $Navneord1= $_POST['Navneord1'];
 $Navneord2= $_POST['Navneord2'];
 $Navneord3= $_POST['Navneord3'];
// Skriv din historie her. Start med echo
}
?>
</div>


</body>
</html>
