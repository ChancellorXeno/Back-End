<? 
include "connect.php";
$sql = "SELECT id, naam FROM lists";
$stmt = $pdo->prepare($sql);
$stmt->execute();

while ($data = $stmt->fetch())
    echo '<div class="list">'
            .'<p class="id">'.$data['id'].'</p>'
            .'<p class="card-title">'.$data['naam'].'</p>'
            .'<button class="edit button" type="button" onclick="list_delete()">Delete</button>'
            .'<button class="edit button" type="button" onclick="list_delete()">Delete</button>'
        .'</div>';
?>  