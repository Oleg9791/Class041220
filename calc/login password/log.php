<?php
$login = $_POST["login"];
$password = $_POST["password"];
if (($login == "Петров") and ($password == 123)) {
    echo "Привет";
} else {
    echo "Ошибка";
}
