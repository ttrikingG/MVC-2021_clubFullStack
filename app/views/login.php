<h2>Login</h2>
<hr>
<form action="/login/store" method="post">
    <input type="text" name="email" placeholder="E-mail"><br><br>
    <input type="text" name="password" placeholder="Senha"><br><br>
    <button type="submit">Entrar</button><br>
 </form><br>

 <?php echo flashMessage('login'); ?>
 <hr>
