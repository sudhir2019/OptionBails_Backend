<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table with Add/Delete Buttons</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Table with Add/Delete Buttons</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Index ID</th>
                <th>Index Name</th>
                <th>Match ID</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="table-body">
            <!-- Table rows will be appended dynamically -->
            <?php foreach ($entries as $entry): ?>
                <tr>
                    <td><?= $entry['index_id'] ?></td>
                    <td><?= $entry['index_name'] ?></td>
                    <td><?= $entry['match_id'] ?></td>
                    <td><?= $entry['start_date'] ?></td>
                    <td><?= $entry['end_date'] ?></td>
                    <td><?= $entry['start_time'] ?></td>
                    <td><?= $entry['end_time'] ?></td>
                    <td><input type="checkbox" class="form-check-input" name="delete_row[]"></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="<?= site_url('add-entry-form') ?>" class="btn btn-primary">Add Entry</a>
</div>

</body>
</html>
