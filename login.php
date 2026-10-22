<?php include("header.inc"); ?>

<form method="post" action="process.php">
    
<label for="username">Username:</label>
<input type="text" id="username" name="username"required><br>

<label for="password">Password:</label>
<input type="password" id="password" name="password"required><br>

<input type="hidden" name="token" value="Sri106729152">
<input type="submit" value="Login"><br>
</form>

<?php include("footer.inc"); ?>

