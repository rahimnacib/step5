<?php
require '../config/database.php';
require '../app/models/BmiModel.php';
require '../app/controllers/BmiController.php';

$model = new BmiModel($db);
$controller = new BmiController($model);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->calculateBmi($_POST['name'], $_POST['weight'], $_POST['height']);
} else {
    require '../app/views/bmi_form.php';
}
?>