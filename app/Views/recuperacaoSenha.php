<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Esqueci a senha</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/recuperacaoSenha.css">

    <style>
          body {
            background-color: #f1f1f1;
        }   

        header{
            display: flex;
            border-bottom: 1px solid#616163;
            width: 100vw;
            height: 10vh;
        
        }
        
        header nav{
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 625px;
            margin: auto;
        
        }
        
        header nav a img{
            width: 70px;
            height: 8vh;
        }
        
        header nav ul{
            display: flex;
            list-style-type: none;
        }
        
        header nav ul li{
            margin: 15px;
        
        }
        
        header nav ul li a:hover{
            color: black;
            font-weight: 500;
        
        }
        
        header nav ul li a{
            color: #606062;   
        }

        .box-recuperacaosenha {
            width: 500px;
            height: 230px;
            border: 1px solid #606062;
            color: #606062;
            position: absolute;
            top: 200px;
            left: 33%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

        }

        .box-recuperacaosenha form input {
            width: 300px;
            line-height: 20px;
        }
    </style>

</head>

<body>

    <header>
            <nav>
                <div><a href=""><img src="logotipo.jpg"></a></div>
                <ul>
                    <li><a href="<?=base_url('/')?>">Home</a></li>
                    <li><a href="">Contato</a></li>
                    <li class="entrar" > <a href="<?=base_url('login')?>">Entrar</a></li>    
                </ul>
            </nav>
    </header>

    <main>

        <section class="box-recuperacaosenha">
            <h1>Recupere sua senha</h1>


            <h5>Insira seu email para a recuperação de senha.</h5>
            <form method="post" action="<?= base_url('enviaremail') ?>">

                <input type="text" name="email" placeholder="Email">
                <hr />
                <input type="submit" value="Enviar">
            </form>
        </section>


    </main>

</body>

</html>

</body>

</html>