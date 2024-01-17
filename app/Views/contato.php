<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Barbearia Stylus</title>

        <style>

            *{margin: 0px; padding: 0px; text-decoration: none; box-sizing: border-box;}
            body {
                background-color: #f1f1f1;
            }   

            header{
                display: flex;
                border-bottom: 1px solid#616163;
                width: 100vw;
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
                height: 10vh;
            }
            
            header nav ul{
                display: flex;
                list-style-type: none !important;
                text-decoration: none;
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

            h3 {
                font-size: 18px;
                font-family: Verdana;
                font-weight: normal;
                color: #606062;
                padding: 10px 0;
                margin-top: 100px;
                border-top: 2px solid #606062;
                border-bottom: 2px solid #606062;
            }

            p {
                font-size: 18px;
                font-family: Verdana;
                text-align: justify;
                line-height: 32px;
                color: #616163;
                margin-bottom: 35px;
            }

            span {
                font-weight: bold;
            }

            .link-agendar  {
                font-size: 16px;
                font-family: 'Verdana';
                font-weight: bold;
                text-decoration: none;
                padding: 10px 15px;
                margin-top: 15px;
                color: #ffffff;
                background-color: #25D366;
                border-radius: 25px;
            }
            .ctt-div{
                width: 600px;
                margin: 0 auto;
                text-align: center;
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
        <div class="ctt-div">
            <h3>CONTATO</h3>
            <p>Você pode entrar em contato conosco através do email <span>contato@barbeariastylus.com.br</span> ou através do telefone <span>(21) 99999-9999</span> (WhatsApp)</p>
            <a class="link-agendar" href="https://api.whatsapp.com/send?phone=999999999&text=Send20%a20%quote">Fale conosco no WhatsApp</a>
        </div>
    </body>
</html>