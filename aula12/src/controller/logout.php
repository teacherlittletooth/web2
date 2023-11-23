<?php

include "/xampp/htdocs/aula12_noite/src/controller/header.php";

session_destroy();

echo "<p>Finalizando sessão...</p>";

header("Refresh: 2; url = ".ROOT);

include "/xampp/htdocs/aula12_noite/src/controller/footer.php";