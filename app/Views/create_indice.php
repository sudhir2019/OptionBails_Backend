<!-- <?php
print_r($indice);
?> -->
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
                <th>Index Value</th>
                <th>Index Sub Value</th>
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
            <?php foreach($indice as $key=>$val){?>
                <tr>
                    <td><?php echo $val['index_id']?></td>
                    <td><?php echo $val['index_name']?></td>
                    <td><?php echo $val['index_value']?></td>
                    <td><?php echo $val['index_subvalue']?></td>
                    <td><?php echo $val['match_id']?></td>
                    <td><?php echo $val['start_date']?></td>
                    <td><?php echo $val['end_date']?></td>
                    <td><?php echo $val['start_time']?></td>
                    <td><?php echo $val['end_time']?></td>
                    <!-- <td><input type="checkbox" class="form-check-input" name="delete_row"></td> -->
                    <td><a href="#">Edit / </a><a href="#">Delete</a></td>
                </tr>
                <?php }?>
        </tbody>
    </table>
    <a href="<?= base_url("createIndicesf")?>" class="btn btn-primary">Add Entry</a>
</div>

</body>
</html>
