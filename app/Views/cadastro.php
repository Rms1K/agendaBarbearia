<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Barbearia - Cadastro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="cadastro.css">

    <style>

        body{
            font-family: Verdana;
        }

        header nav ul li{
            font-size: 13px;
            margin-bottom:0;
        
        }

        header nav ul li a{
            color: #606062;   
            font-family: Verdana;
        }
         header nav ul li a:hover{
            color: black;
            text-decoration: none;
            font-weight: 500;

        }

        .cadusuario form {
            font-size: 14px;
        }

        .cadusuario form input{
            width: 300px;
            height: 30px;
            border: 1px solid #606062;
            border-radius: 7px;
        }
    </style>

</head>

<body>

    <header>
            <nav>
                <div><a href="<?=base_url('/')?>"><img src="logotipo.jpg"></a></div>
                <ul>
                    <li><a href="<?=base_url('/')?>">Home</a></li>
                    <li><a href="<?=base_url('contato')?>">Contato</a></li>
                    <li><a href="<?=base_url('login')?>">Entrar</a></li>    
                </ul>
            </nav>
    </header>

    <main>

        <section class="cadusuario">

            <form action="<?= base_url('dadoscadastro'); ?>" method="post" class="form-cadusuario">

                <label for="nome">Nome Completo:</label>
                <input type="text" id="nome" name="nome" required>


                <label for="email">Endereço de e-mail:</label>
                <input type="email" id="email" name="email" required>

                <label for="celular">Telefone:</label>
                <input type="celular" id="celular" name="celular" placeholder="XX XXXXX-XXXX " required>


                <label for="senha">Senha:</label>
                <input type="text" id="senha" name="senha" required>


                <br>

                <input type="submit" value="Cadastrar">
            </form>
        </section>

        <?php

        if ($msgConfirmaCadastro != null) {
        ?>
            <div class="alert alert-success" role="alert">
                <?= $msgConfirmaCadastro ?>
            </div>
        <?php
        }
        ?>

        <?php

        if ($msgSenhaDiferente != null) {
        ?>
            <div class="alert alert-danger" role="alert">
                <?= $msgSenhaDiferente ?>
            </div>
        <?php
        }
        ?>

        <?php

        if ($msgEmailjaCadastrado != null) {
        ?>
            <div class="alert alert-danger" role="alert">
                <?= $msgEmailjaCadastrado ?>
            </div>
        <?php
        }
        ?>

        <?php

        if ($msgUsuariojaCadastrado != null) {
        ?>
            <div class="alert alert-danger" role="alert">
                <?= $msgUsuariojaCadastrado ?>
            </div>
        <?php
        }
        ?>

       
    </main>

</body>

</html>



