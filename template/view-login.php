<div class="container" id="login">
<login-section>
<h1 style="color:orange; font-weight:700; text-aling:center;">Login</h1>

    <form action="index.php?module=login" method="post">
        <label>Username: </label><br> <input type="text" name="username">
       <br><br>
        <label>Password:</label> <br> <input type="text" name="password">
        <br><br>
        <input class="btn btn-warning"type="submit" value="Prijavi se">
        <br><?= $Err ?>
    </form>
</login-section>
</div>

