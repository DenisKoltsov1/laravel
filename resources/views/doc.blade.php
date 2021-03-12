<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?


$name = $_GET['name'];
$tel = $_GET['tel'];

?>
ДОГОВОР ПОСТАВКИ № ___<br>

г.________________	«___»____________20__ г.
<br>
________<?$_POST['name']?>_________, именуемое в дальнейшем «Поставщик», в лице 
<?$_GET['nameOrganization']?>
<br>
<?$_GET['OGRN']?>, введите ОГРН
<br>
${legalAddress}    юридический адресс    Юридический адресс компании
<br>
${telefon} телефон  организации
<br>
</body>
</html>