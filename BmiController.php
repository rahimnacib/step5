<?php
class BmiController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function calculateBmi($user_id, $name, $weight, $height) {
        $bmi = $weight / ($height * $height);
        if ($bmi < 18.5) $status = "wheight loss";
        elseif ($bmi < 25) $status ="normal wheight";
        elseif ($bmi < 30) $status = "wheight gain";
        else $status = "obesity";

        $this->model->saveBmiRecord($user_id, $name, $weight, $height, $bmi, $status);
        include '../app/views/bmi_result.php';
    }
}
?>
