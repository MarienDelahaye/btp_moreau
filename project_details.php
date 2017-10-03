<?php
include 'header.php'; // Include my header
include 'footer.php'; // Include my footer
include 'database.php';
?>
<?php
$req = $db->query('SELECT * FROM db_btp');

$data = $req->fetchAll();
{
?>

<strong>Project Name</strong> : <?php echo $data['project_title']; ?><br />
<strong>Employees</strong: <?php echo $data['user']; ?><br />


<?php
}
$info->closecursor();


?>