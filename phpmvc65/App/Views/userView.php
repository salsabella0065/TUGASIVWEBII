<!-- App/Views/userView.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>User Details</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nama: <?= htmlspecialchars($user['nama']) ?></h5>
                <p class="card-text">Email: <?= htmlspecialchars($user['email']) ?></p>
                <a href="index.php" class="btn btn-primary">Back to Users List</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
