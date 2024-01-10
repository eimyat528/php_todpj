<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<div class="card">
 <div class="card-body">
    <h2>Create New Todo</h2>
    <form action="add.php" method="post" class="">
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control" name="title" value="" required>
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea name="description" id="" cols="80" rows="8" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="" value="SUBMIT">
            <a href="index.php" type="button" class="btn btn-default" name="">Back</a>
        </div>
    </form>
 </div>
</div>
</body>
</html>