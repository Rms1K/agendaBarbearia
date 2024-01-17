<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Barbearia Stylus</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <header>
            <nav>
                <div><a href=""><img src="logotipo.jpg"></a></div>
                <ul>
                    <li><a href="<?=base_url('/')?>">Home</a></li>
                    <li><a href="<?=base_url('contato')?>">Contato</a></li>
                    <li class="entrar" > <a href="<?=base_url('login')?>">Entrar</a></li>    
                </ul>
            </nav>
        </header>

        <div>
            <img src="logotipo.jpg">
            <h1>O lugar que faz seu estilo</h1>
            <h2>Venha conhecer nossos serviços e ver todas as vantagens de assinar o nosso plano.</h2>
        </div>
        <div>
            <h3>NOSSOS SERVIÇOS</h3>
            <p>Somos especializados em cortes masculinos oferecendo um serviço moderno e de qualidade. Temos uma grande variedade de tipos de corte especiais para nossos clientes. Também temos um plano que oferece muitas vantagens para nossa clientela.</p>
        </div>
        <div>
    
            <a class="link-agendar" href="<?=base_url('agendar')?>">Agende seu Horário</a>
        </div>
    </body>
</html>


