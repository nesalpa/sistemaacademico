<?php
session_start();
include_once("../config.php");
session_unregister("login");
session_unregister("idsuario");
session_unregister("nivel");
session_unregister("horasesion");
session_unregister("idmenu");
session_unregister("subm");
session_destroy();
header("Location:$url$directory/");
?>