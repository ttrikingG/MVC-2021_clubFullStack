<header>
    <div class="container">
        <form action="">
            <hr>
            <img width="48" src="../assets/image/php_horizontal_logo_icon_170852.png" alt="">
            <b style="margin-right: 2%">MVC</b>

            <button><a href="/signup">Cadastre-se!!!</a></button>
            <button><a href="/login">Login</a></button>
            
            <input type="text" placeholder="Buscar">
            <button style="margin-right: 2%">Go</button>

            <b><?php echo wellcome('user'); ?></b>
            <hr>
        </form>
    </div>

    <nav style="background-color: silver; border-radius: 4px; padding:0.5%;">
        <!--<form action="" method="POST">-->
            <b><a href="/">Home</a></b>
            <b><a href="/">Contato</a></b>
            <b><a href="/">Sobre</a></b>
            <!--<b style="margin-left: 12px;">Login</b>
            <input placeholder="Login" type="text" name="login">
            <input placeholder="Senha" type="text" name="senha">
            <button type="submit" name="btn-entrar">Login</button>
        </form>-->
    </nav>
</header>
