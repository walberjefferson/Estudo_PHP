<?php
/**
 * Created by PhpStorm.
 * User: walberjefferson
 * Date: 19/08/15
 * Time: 21:33
 */

$email = "con<>tato@v2i.com.br";

$email_filtrado = filter_var($email, FILTER_SANITIZE_EMAIL);
echo $email_filtrado . "<br>";

$email_filtrado2 = filter_var($email, FILTER_VALIDATE_EMAIL);
echo $email_filtrado2 . "<br>";

$search = $_GET['search'];

echo $search . "<br>";

$search_html = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_SPECIAL_CHARS);
echo $search_html;