<?
include "connect.php";

// initialize variables for the insert query
echo '<br>';
if (isset($_POST['id'])) {
    if (!empty($_POST)) {
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        // Update the record
        $stmt = $pdo->prepare('UPDATE lists SET `id` = :id, `name` = :name WHERE id = :id');
        $stmt->execute([':id'=>$id, ':name'=>$name]);
        $msg = 'Updated Successfully!';
    }
    header('Location: index.php');
} else{
    exit('No ID specified!');
}
?>