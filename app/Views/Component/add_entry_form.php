<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Entry Form</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Add Entry</h2>
    <form action="<?= site_url('add-entry') ?>" method="POST">
        <div class="form-group">
            <label for="index_id">Index ID:</label>
            <input type="text" class="form-control" id="index_id" name="index_id">
        </div>
        <div class="form-group">
            <label for="index_name">Index Name:</label>
            <input type="text" class="form-control" id="index_name" name="index_name">
        </div>
        <div class="form-group">
            <label for="match_id">Match ID:</label>
            <input type="text" class="form-control" id="match_id" name="match_id">
        </div>
        <div class="form-group">
            <label for="start_date">Start Date:</label>
            <input type="date" class="form-control" id="start_date" name="start_date">
        </div>
        <div class="form-group">
            <label for="end_date">End Date:</label>
            <input type="date" class="form-control" id="end_date" name="end_date">
        </div>
        <div class="form-group">
            <label for="start_time">Start Time:</label>
            <input type="time" class="form-control" id="start_time" name="start_time">
        </div>
        <div class="form-group">
            <label for="end_time">End Time:</label>
            <input type="time" class="form-control" id="end_time" name="end_time">
        </div>
        <a href="<?= site_url('table') ?>" class="btn btn-primary">Submit</a>
    </form>
</div>

</body>
</html>
