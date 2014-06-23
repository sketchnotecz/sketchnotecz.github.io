<?php

    $adresa = $_POST['email'];
    $chyba = '';
    if (strlen($adresa)) {
        if (filter_var($adresa, FILTER_VALIDATE_EMAIL)) {
          mail('imagiag@gmail.com', 'novy e-mail', "adresa je $adresa");
        } else {
            $chyba = 'spatny e-mail';
        }
    }
?>
<html>
<body>
<?php
if (strlen(chyba)) {
    echo "<div class=\"error\">$chyba</div>";
}
?>
<form method="post" action="">
  <input name="email" type="text" placeholder="email">
  <input type="submit" value="OK">
</form>
</body>
</html>