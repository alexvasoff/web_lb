<HTML>
<HEAD> <meta charset="UTF-8">  <TITLE>Вторая страница</title></head>
<BODY>
<H3>П Р И В Е Т С Т В И Е</h3>
<?php
$imja=$_POST["name"]; //приём параметров из формы
$age=$_POST["age"]; $x="Здравствуйте!
$imja.";
if($age>50) echo "$x Вы включены в старшую группу.";
elseif($age>30)echo "$x Вы включеныв группу среднего возраста.";
else echo"$x Вы относитесь к молодёжной группе.";
?>
<P>
<A href="Prim3_1.html">Возврат </a>
</body>
</html>
