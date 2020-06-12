<?php

include 'snippets/head.php';
?>

    <section class="login">
        <header class="login__header">
            <h1 class="login__title">Spool</h1>
        </header>
        <div class="login__choose">
            <form class="login__form form" action="app.php">
                <label for="username" class="hidden">Username</label>
                <input type="text" name="username" placeholder="youremail@gmail.com" class="login__field login__field--username" required>
                <label for="password" class="hidden">Password</label>
                <input type="password" name="password" placeholder="Password" class="login__field login__field--password" required>
                <input type="submit" value="Login" class="login__button login__button--submit">
            </form>
            <div class="login__or">
                <span>or</span>
            </div>
            <div class="login__facebook">
                <a href="app.php" class="login__button login__button--facebook">login via Facebook</a>
            </div>
        </div>
        <div class="login__eq"></div>
        <div class="login__grad"></div>
    </section>
    
    <?php
include 'snippets/footer.php';
?>