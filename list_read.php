<? 
$sql = "SELECT id, naam FROM lists";
$stmt = $pdo->prepare($sql);
$stmt->execute();

while ($data = $stmt->fetch())
    echo '<div class="list">'
            .'<p class="id">'.$data['id'].'</p>'
            .'<p class="card-title">'.$data['naam'].'</p>'
            .'<a class="edit buttons" href="../Back-End/list_delete.php?id='.$data['id'].'">Delete</button></a>'
        .'</div>';
?>  