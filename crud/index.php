<?php 
    include_once ("dbconfig.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main class="list-page">
        <header class="page-header">
            <div>
                <p class="eyebrow">STUDENT RECORDS</p>
                <h1>Student list</h1>
                <p class="page-description">Manage your student contact details.</p>
            </div>
            <a class="primary-action" href="newEntry.php">+ <span>New student</span></a>
        </header>

        <?php $rowData = $conn->query("SELECT * FROM frome"); ?>
        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($rowData && $rowData->num_rows > 0) { ?>
                        <?php while ($row = $rowData->fetch_assoc()) { ?>
                            <tr>
                                <td class="id-cell"><?php echo htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8'); ?></td>
                                <td class="name-cell"><?php echo htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8'); ?></td>
                                <td><?php echo htmlspecialchars($row['email'], ENT_QUOTES, 'UTF-8'); ?></td>
                                <td><?php echo htmlspecialchars($row['phone'], ENT_QUOTES, 'UTF-8'); ?></td>
                                <td>
                                    <a class="edit-action" href="studentEdit.php?id=<?php echo urlencode($row['id']); ?>" aria-label="Edit student" title="Edit student"><i class="bi bi-pencil-square action-icon" aria-hidden="true"></i></a>
                                    |
                                    <a class="delete-action" onclick="return confirm('Delete this student?')" href="studentDelete.php?id=<?php echo urlencode($row['id']); ?>" aria-label="Delete student" title="Delete student"><i class="bi bi-trash3 action-icon" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php } else { ?>
                        <tr>
                            <td class="empty-state" colspan="5">No students yet. Add a student to get started.</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
