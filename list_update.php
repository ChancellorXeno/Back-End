<?
include "connect.php";
var_dump($_POST);
// initialize variables for the insert query
echo '<br>';
if (isset($_GET['id'])) {
    echo 'made it this far 1 (nailed)<br>';
    if (!empty($_GET)) {
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        echo 'made it this far 2 (nailed)<br>';
        // Update the record
        $stmt = $pdo->prepare('UPDATE lists SET "id" = $id, "name" = $name, WHERE id = ?');
        $stmt->execute(['id'=>$id, 'name'=>$name, $_GET['id']]);
        $msg = 'Updated Successfully!';
    }
    echo 'made it this far 3 (not nailed)<br>';
    header('Location: index.php');
} else{
    exit('No ID specified!');
}
?>