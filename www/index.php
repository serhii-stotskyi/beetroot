
<form action="index.php" method="post" enctype="multipart/form-data">
    <input type="number" placeholder="ђведите число n" name="name" /><br />
    <input type="submit" value="Этправить форму" />
</form>
<?php
$b=2;
$text = ($_POST['name'] <> $b) ? "Bad n" : (str_repeat("Silence is golden"." ", $b));
echo ($text);
?>


