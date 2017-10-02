<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project Panel</title>
    <?php
include 'database.php';
include 'footer.php';

$req = ('SELECT project_title FROM db_btp');
$dropdown = $db->prepare($req);
$dropdown->execute();
$project = $dropdown->fetchAll();


?>

<select>
<?php foreach($project as $projects): ?>
<option value="<?php echo $projects['id'];?>"><?php echo $projects['project_title']; ?></option>
<?php endforeach; ?>
</select>
</head>
<body>
<center><div class="panel panel-default">
<form class="panel-body" action="project_panel_post.php" method="post">
    <input type="text" name="project_title" placeholder="New Project Name"><br>
    <input type="text" name="user" placeholder="Update employees who work on it"><br>
    <input type="text" name="deadline" placeholder="New Deadline"><br>
    <textarea name="task"  cols="30" rows="10" placeholder="New Task and step to do"></textarea><br>
    <textarea name="description" cols="30" rows="10" placeholder="is the project finished ? if yes explain how you done it"></textarea><br>
    <input type="submit" class="btn btn-default">
</form>
</center>
</div>
</body>
</html>



