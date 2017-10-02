<?php
include 'database.php';
include 'header.php';
include 'footer.php';
?>
<?php

$project_title = $_POST['project_title'];
$user = $_POST['user'];
$task = $_POST['task'];
$deadline = $_POST['deadline'];
$description = $_POST['description'];
$req = $db->prepare ('UPDATE db_btp SET project_title = :project_title, user = :user, task = :task, deadline = :deadline, description = :description');
$req->execute(array(
    'project_title' => $_POST['project_title'],
    'user' => $_POST['user'],
    'task' => $_POST['task'],
    'deadline' => $_POST['deadline'],
    'description' => $_POST['description']
));
?>
<p>The project <?php echo $_POST['project_title']; ?> has been updated ! </p>