<?php session_start(); 
echo $_SESSION['team'];?>
<form action="traitements/codes.php" method="post">
<input type="text" name="code">
<button type="submit">Valider</button>
</form>