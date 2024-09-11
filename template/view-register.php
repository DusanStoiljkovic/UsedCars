<div class="container" id="register">
    <register-member>
        <h1 style="color:orange; font-weight:700; text-aling:center;">NEW CARS</h1>
        <form action="./index.php?module=register" method="post">
            <label>Username:</label><br>
            <input type="text" name="username"><?=$usernameErr?><br>
            <label>Password:</label><br>
            <input type="password" name="password"><?=$passwordErr?><br>
            <label>Retype password:</label><br>
            <input type="password" name="verified_password"><?=$verified_passwordErr?><br>
            <input class="btn btn-warning"type="submit" name="Registruj se"><br>
            <?= $password_matchErr?>
        </form>
    </register-member>
</div>