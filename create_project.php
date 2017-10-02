<?php
include 'database.php';
include 'header.php';
?>
<center><div class="panel panel-default">
<form class="panel-body" action="" method="post">
    <input type="text"  id="project_title" placeholder="Project Name"><br>
    <input type="text"  id="user" placeholder="Employees who work on the project"><br>
    <textarea name="Task to do" id="task" cols="30" rows="10" placeholder="Task and step to do"></textarea><br>
    <input type="submit" class="btn btn-default">
</form>
</center>
</div>
<?php
include 'footer.php';
?>


<?php
$project_title = $_POST['project_title'];
$user = $_POST['user'];
$task = $_POST['task'];
$req = $db->prepare('INSERT into db_btp(project_title, user, task) VALUES(:project_title, :employees, :task');
$req->execute(array(
    'project_title' => $project_title,
    'user' => $user,
    'task' => $task
));
?>
<p>The project <?php echo $_POST['project_title']; ?> has been created ! </p>
    