<?php
$name = $_POST['name'];
$tel = $_POST['tel'];
$submit = $_POST['submit'];
if (isset($submit)) {
    $url = 'doc.blade.php?name=' . $name. '&tel=' . $tel;
    header('Location:' . $url);
}
?>