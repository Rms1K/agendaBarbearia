<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Barbearia - Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <style>
        *{margin: 0; padding: 0; box-sizing: border-box; text-decoration: none; font-family: Verdana;}

        body {
            position: relative;
            margin: 0 auto;
            background-color: #f1f1f1;
        }

        header{
            display: flex;
            border-bottom: 1px solid #616163;
            width: 100vw;
            height: 10vh;
            font-family: Verdana;
        
        }
        
        header nav{
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 625px;
            margin: auto;
            text-decoration: none;
            height: 10vh;
            
        
        }
        
        header nav a img{
            width: 70px;
            height: 9vh;
            
        }
        
        header nav ul{
            display: flex;
            list-style-type: none;
        }
        
        header nav ul li{
            margin: 15px;     
            margin-top: 25px;      
        }
        
        header nav ul li a:hover{
            color: black;
            font-weight: 500;
            list-style-type: none;
            text-decoration: none;
        }
        
        header nav ul li a{
            color: #606062;   
            font-size: 13px;
            margin-top: 5px;
        }

        .sessao-login {
            color: #606062;
            border-radius: 10px;
            border: 1px solid #606062;
            width: 350px;
            height: 350px;
            position: absolute;
            left: 490px;
            top: 160px;
            
        }

        .container {
            margin-top: 40px;
        }

        .formulario-login {
            display: flex;
            flex-direction: column;
            align-items: center;
            row-gap: 15px;
        }

        .formulario-login input {
            width: 240px;
            padding: 10px;
            border: 1px solid #606062;
            border-radius: 8px;
            
        }

        .btn-login {
            width: 270px;
            padding: 10px;
            border: 1px solid #606062;
            border-radius: 8px;
            cursor: pointer;
        }

        .btn-criarConta {
            width: 265px;
            padding: 10px;
            border: 1px solid #606062;
            border-radius: 8px;
            position: absolute;
            top: 270px;
            left: 43px;
            cursor: pointer;

        }

        .formulario-login a {
            color: #606062;
            font-size: 13px;
        }

        .hr {
            border: 1px solid #606062;
            height: 1px;
            background-color: white;
            margin: 225px 25px;
            position: absolute;
            width: 80%;
            top: 20px;
        }

        .alert{
            width: 300px;
            position: absolute;
            top: 550px;
            left: 520px;
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
                    <li class="entrar" > <a href="<?=base_url('login')?>">Entrar</a></li>    
                </ul>
            </nav>
    </header>
    <section class="sessao-login">
        <div class="container">
            <form class="formulario-login" method="post" action="<?= base_url('dadoslogin'); ?>">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="senha" placeholder="Senha" required>
                <input class="btn-login" type="submit" name="Entrar" value="Entrar">
                <a href="<?= base_url('recuperacaosenha'); ?>">Esqueceu a senha?</a>
            </form>
            <div class="hr"></div>
            <a href="<?= base_url('cadastro'); ?>"><button class="btn-criarConta">Criar uma conta</button></a>
        </div>
  
    </section>

    <?php
            if($msgErro != null){
            ?>
                <div class="alert alert-danger" role="alert">
                    <?=$msgErro?>
                </div>
            <?php
            }
        ?>

 
</body>

</html>