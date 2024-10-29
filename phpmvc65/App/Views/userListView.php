<!-- App/Views/userListView.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Users List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Users List</h1>
        <a href="?action=create" class="btn btn-primary mb-3">Tambah User</a>
        <table class="table table-bordered table-hover">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($users)): ?>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo $user['id']; ?></td>
                            <td><?php echo $user['nama']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td>
                                <a href="?action=show&id=<?php echo $user['id']; ?>" class="btn btn-info btn-sm">Detail</a>
                                <a href="?action=edit&id=<?php echo $user['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="?action=delete&id=<?php echo $user['id']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center">Tidak ada data pengguna.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
