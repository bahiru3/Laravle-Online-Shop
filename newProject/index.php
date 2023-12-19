<!-- <form>
 <input type="text" name="name" />
 <input type="submit" />
</form>


<?php
if (isset($_GET['name'])) {
 echo '<p>The name is ' . $_GET['name'];
}
?> -->
<form method="POST">
 <input type="text" name="name" />
 <input type="submit" />
</form>


<?php
if (isset($_POST['name'])) {
 echo '<p>The name is ' . $_POST['name'];
}
?>

