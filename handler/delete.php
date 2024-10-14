<?php

    if(isset($_POST["submit"]) && $_POST["submit"] == "Obrisi" && isset($_POST["id_predmeta"])) {
        $result = Prijava::delete($conn, $_POST["id_predmeta"]);
    }


?>