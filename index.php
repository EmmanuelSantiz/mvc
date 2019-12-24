<?php
session_start();

require_once 'funciones.php';

require_once 'libs/database.php';
require_once 'libs/controller.php';
require_once 'libs/view.php';
require_once 'libs/model.php';
require_once 'lib/Supermodel.php';
require_once 'libs/App.php';

require_once 'config/config.php';

$app = new App();
?>
