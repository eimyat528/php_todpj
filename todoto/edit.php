
<?php
require 'config.php';
if($_POST){
    $title = $_POST['title'];
    $desc  = $_POST['description'];
    $id    = $_POST['id'];

    $pdostatement = $pdo->prepare("UPDATE todoto SET title='$title',description='$desc' WHERE id='$id'");
    $result =  $pdostatement -> execute();
    if($result){
        echo "<script>alert('ToDo is edited');window.location.href='index.php';</script>";
    }


}else{
    $pdostatement = $pdo->prepare("SELECT * FROM todoto where id=".$_GET['id']);
    $pdostatement -> execute();
    $result = $pdostatement->fetchAll();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit New</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<div class="card">
 <div class="card-body">
    <h2>Edit New Todo</h2>
    <form action="" method="post" class="">
        <input type="hidden" name="id" value="<?php echo $result[0]['id'] ?>">
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control" name="title" value="<?php echo $result[0]['title'] ?>" required>
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea name="description" id="" cols="80" rows="8" class="form-control"><?php echo $result[0]['description'] ?></textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="" value="UPDATE">
            <a href="index.php" type="button" class="btn btn-warning" name="">Back</a>
        </div>
    </form>
 </div>
</div>
</body>
</html>