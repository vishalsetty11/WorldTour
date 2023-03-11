<?php
$user = $_POST['user'];
$email = $_POST['email'];
$phno = $_POST['phno'];
$comment = $_POST['comment'];
$conn = new mysqli('sql204.epizy.com', 'epiz_33774755', 'VApohlQsriB0BfU', 'epiz_33774755_userdata');
/* $conn=new mysqli('localhost','root','','userdata');
 */
if ($conn->connect_error) {
    die("Not Connected: " . $conn->connect_error);
} 
else {
    $stmt = $conn->prepare("INSERT INTO userinfodata (user, email, phno, comment) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $user, $email, $phno, $comment);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>

<!-- to reset contact.htm -->
<script type="text/JavaScript">
    window.location.replace("contact.htm");
</script>

