<?php
include 'database.php';
include 'header.php';
?>
<center><div class="panel panel-default">
<form class="panel-body" action="create_project2.php" method="post">
    <input type="text" name="project_title" placeholder="Project Name"><br>
    <input type="text" name="user" placeholder="Employees who work on the project"><br>
    <input type="text" name="deadline" placeholder="Deadline"><br>
    <textarea name="task"  cols="30" rows="10" placeholder="Task and step to do"></textarea><br>
    <textarea name="description" cols="30" rows="10" placeholder="Description of the project"></textarea><br>
    <input type="submit" class="btn btn-default">
</form>
</center>
</div>
<?php
include 'footer.php';
?>



    