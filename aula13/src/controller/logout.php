<?php

include "/xampp/htdocs/aula13_manha/src/controller/header.php";

session_destroy();

echo "<p>Finalizando sessão...</p>";

header("Refresh: 2; url = ".ROOT);

include "/xampp/htdocs/aula13_manha/src/controller/footer.php";