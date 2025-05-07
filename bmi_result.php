<!DOCTYPE html>
<html>
<head>
    <title>BMI Result</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>BMI Result</h2>
    <div class="alert alert-info">
    <p><strong>Name:</strong> <?= htmlspecialchars($name ?? 'Unknown') ?></p>
    <p><strong>Body Mass Index (BMI):</strong> <?= isset($bmi) ? round($bmi, 2) : 'Not calculated' ?></p>
    <p><strong>Status:</strong> <?= htmlspecialchars($status ?? 'Not defined') ?></p>
</div>
    <a href="index.php" class="btn btn-secondary">Back</a>
</body>
</html>