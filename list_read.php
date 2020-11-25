<?
require_once 'connect.php';

$sql = "SELECT id, naam FROM lists";
$stmt = $pdo->prepare($sql);
$stmt->execute();

while ($data = $stmt->fetch())
    echo '<div class="list">'
            .'<p class="id">'.$data['id'].'</p>'
            .'<p class="card-title">'.$data['naam'].'</p>'
            .'<a class="edit buttons" href="list_update.php">Edit</a>'
            .'<a class="edit buttons" href="list_delete.php">Delete</a>'
        .'</div>';
?> 