<?php
include 'database.php';
?>

<?php
$project_title = $_POST['project_title'];
$user = $_POST['user'];
$task = $_POST['task'];
$deadline = $_POST['deadline'];
$description = $_POST['description'];
$req = $db->prepare('INSERT INTO db_btp(project_title, user, task, deadline, description) VALUES(:project_title, :user, :task, :deadline, :description)');
$req->execute(array(
    'project_title' => $_POST['project_title'],
    'user' => $_POST['user'],
    'task' => $_POST['task'],
    'deadline' => $_POST['deadline'],
    'description' => $_POST['description']
));
?>
<p>The project <?php echo $_POST['project_title']; ?> has been created ! </p>
