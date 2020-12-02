<? 
$sql = "SELECT id, naam FROM lists";
$stmt = $pdo->prepare($sql);
$stmt->execute();

while ($data = $stmt->fetch())
    echo '<div class="list">'
            .'<p class="id">'.$data['id'].'</p>'
            .'<p class="card-title">'.$data['naam'].'</p>'
            .'<button class="edit buttons" type="button" onclick="list_delete()">Delete</button>'
            .'<a class="edit buttons" href="../Back-End/list_delete.php?id=1">Delete</button>'
        .'</div>';
?>  