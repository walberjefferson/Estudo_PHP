<?php
/**
 * Created by PhpStorm.
 * User: walberjefferson
 * Date: 19/08/15
 * Time: 21:25
 */

#$senha = 1234567890;
$senha = rand(1, 9999999999);
$salt = "aeiou";
$salt_unico = "AEIOU";
$senha_sha1 = sha1($senha.$salt.$salt_unico);
$senha_md5 = md5($senha.$salt.$salt_unico);
$base = base64_encode($senha.$salt.$salt_unico);

?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Segurança</title>
</head>
<body>
    <?php echo 'Gerador = ' . base64_decode($base) . '<br><br>'; ?>
    <?php echo 'Senha SHA1 = ' . $senha_sha1 . '<br>Senha MD5 = ' . $senha_md5 . '<br>Base64 = ' . $base; ?>

</body>
</html>
