<?
require_once 'connect.php';

// Check if POST data is not empty
if (!empty($_POST)) {
    // collect id and name
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    $naam = isset($_POST['naam']) ? $_POST['naam'] : '';
    
    // insert query
    $stmt = $pdo->prepare("INSERT INTO lists (id, naam) VALUES (:id, :naam)");
    $stmt->execute(['id'=>$id, 'naam'=>$naam]);
}
?>