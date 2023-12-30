<h2>Cadastro</h2>
<hr>
<form action="signup/store" method="post">
    
    <input type="text" placeholder="Nome" name="firstName" value="<?php echo old('firstName') ?>">
    <?php echo flashMessage('firstName'); ?><br><br>
    <input type="text" placeholder="Sobrenome" name="lastName" value="<?php echo old('lastName') ?>">
    <?php echo flashMessage('lastName'); ?><br><br>
    <input type="text" placeholder="E-mail" name="email" value="<?php echo old('email') ?>">
    <?php echo flashMessage('email'); ?><br><br>
    <input type="text" placeholder="Senha" name="password" value="<?php echo old('password') ?>">
    <?php echo flashMessage('password'); ?><br><br>

    <button type="submit">Cadastrar</button><br>
<hr>
</form>