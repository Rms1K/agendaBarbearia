<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Agendar Horário</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="agenda.css">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  <style>
    
  </style>

  <script>
    
    function carregarPagina() {
      exibirDataAtual();
      
        
    }

 

    function atribuirValor(divId) {
      var valorDaDiv = document.getElementById(divId).textContent;
      document.getElementById('horario').value = valorDaDiv;
    }



    function abrirModalEditarHorario() {
      var modalEditar = document.getElementById("modal-editar-horario");
    
      modalEditar.style.display = "block";
      
    }

    

    function abrirModalMeusDados() {
      var ModalMeusDados = document.getElementById("modalMeusDados");
    
      ModalMeusDados.style.display = "block";
      
    }

    function fecharModalMeusDados() {
      var ModalMeusDados = document.getElementById("modalMeusDados");
    
      ModalMeusDados.style.display = "none";
      
    }

    function fecharModalEditarHorario() {
     
       var modalEditarfechar = document.getElementById("modal-editar-horario");
       modalEditarfechar.style.display = "none";
      
    }

    function abrirModal() {
      var modal = document.getElementById("modal");
      modal.style.display = "block";

      document.addEventListener("keydown", fecharModalComTeclaEsc);
    }

    function fecharModalComTeclaEsc(event) {
      var modal = document.getElementById("modal");
      
      if (event.key === "Escape") {
        modal.style.display = "none";
        
        document.removeEventListener("keydown", fecharModalComTeclaEsc);
      }
    }


    function fecharModal() {
     
      var modal = document.getElementById("modal");
      modal.style.display = "none";
      
    }

    function abrirModalHorarios() {   
      var modalHorarios = document.getElementById("modal-horarios");
      modalHorarios.style.display = "block";

      document.addEventListener("keydown", fecharModalComTeclaEsc);
    }

    function fecharModalHorarios() {
      var modalHorarios = document.getElementById("modal-horarios");
      modalHorarios.style.display = "none";

      
    }


    function exibirDataAtual() {
        
        var dataAtual = new Date();

        
        var dataFormatada = dataAtual.toLocaleDateString();

          
          document.getElementById("dataAtual").innerText = "Agenda" + " " + dataFormatada;
      }

      // function disponibilidade(id) {
        
      //   btndispo = document.getElementById('marcar1');
    
      //   document.getElementById(id).style.backgroundColor = "red";

       
      //   btndispo.style.backgroundColor = "red";

      //   btndispo.disabled = true;
      // } 
               

        function meuHorario() {
          
          var meuHorario= document.getElementsByClassName("meuHorario");

          meuHorario.innerHTML = "<div> exibirDataAtual(); </div>"
        }
        
        function meuHorario() {
          
          var elementosMeuHorario = document.getElementsByClassName("meuHorario");

          
          for (var i = 0; i < elementosMeuHorario.length; i++) {
              var novoElementoDiv = document.createElement("div");

              novoElementoDiv.innerHTML = exibirDataAtual();

              elementosMeuHorario[i].appendChild(novoElementoDiv);
          }
        }
 

    

  </script>

</head>
<body onload="carregarPagina();">

      <header>
            <nav>
                <div><a href="<?=base_url('/')?>"><img src="logotipo.jpg"></a></div>
                <ul>
                    <li><a href="<?=base_url('/')?>">Home</a></li>
                    <li><a href="<?=base_url('contato')?>">Contato</a></li>
                    <li><a href="<?=base_url('logout')?>">Sair</a></li>    
                </ul>
            </nav>
      </header>

<div class="barraLateral">
  <a class="btn1-barraLateral" onclick="abrirModalHorarios()">Horarios Marcados</a>
  <a class="btn2-barraLateral" onclick="abrirModalMeusDados()">Meus Dados</a>
</div>

<section class="calendar-box">


<div id="dataAtual"></div>


<div class="agenda">

  <div class="horario-box">
    <div class="disponivel" ><button id="disponi1" class="disponivel1"></button></div>
    <div class="horario" id="h800">08:00</div>
    <button class="button" onclick="abrirModal(); atribuirValor('h800');" id="marcar1" >Marcar</button>
  </div>

  <div class="horario-box">
    <div class="disponivel"><button class="disponivel1"></button></div>
    <div class="horario"id="h840">08:40</div>
    <button class="button" onclick="abrirModal(); atribuirValor('h840');" id="marcar2">Marcar</button>
  </div>

  <div class="horario-box">
    <div class="disponivel"><button class="disponivel1"></button></div>
    <div class="horario"id="h920">09:20</div>
    <button class="button" onclick="abrirModal(); atribuirValor('h920');" id="marcar3">Marcar</button>
  </div>

  <div class="horario-box">
    <div class="disponivel"><button class="disponivel1"></button></div>
    <div class="horario" id="h1000">10:00</div>
    <button class="button" onclick="abrirModal(); atribuirValor('h1000');">Marcar</button>
  </div>

  <div class="horario-box">
    <div class="disponivel"><button class="disponivel1"></button></div>
    <div class="horario" id="h1040">10:40</div>
    <button class="button" onclick="abrirModal(); atribuirValor('h1040');">Marcar</button>
  </div>

  <div class="horario-box">
    <div class="disponivel"><button class="disponivel1"></button></div>
    <div class="horario" id="h1120">11:20</div>
    <button class="button" onclick="abrirModal(); atribuirValor('h1120');">Marcar</button>
  </div>

  <div class="horario-box">
    <div class="disponivel"><button class="disponivel1"></button></div>
    <div class="horario" id="h1200">12:00</div>
    <button class="button" onclick="abrirModal(); atribuirValor('h1200');">Marcar</button>
  </div>

  <div class="horario-box"> 
  <div class="disponivel"><button class="disponivel1"></button></div>
    <div class="horario" id="h1240">12:40</div>
    <button class="button" onclick="abrirModal(); atribuirValor('h1240');">Marcar</button>
  </div>

  <div class="horario-box">
    <div class="disponivel"><button class="disponivel1"></button></div>
    <div class="horario" id="h1320">13:20</div>
    <button class="button" onclick="abrirModal(); atribuirValor('h1320');">Marcar</button>
  </div>
  <div class="horario-box">
    <div class="disponivel"><button class="disponivel1"></button></div>
    <div class="horario" id="h1400">14:00</div>
    <button class="button" onclick="abrirModal(); atribuirValor('h1400');">Marcar</button>
  </div>

  <div class="horario-box">
    <div class="disponivel"><button class="disponivel1"></button></div>
    <div class="horario" id="h1440">14:40</div>
    <button class="button" onclick="abrirModal(); atribuirValor('h1440');">Marcar</button>
  </div>

  <div class="horario-box">
    <div class="disponivel"><button class="disponivel1"></button></div>
    <div class="horario" id="h1520">15:20</div>
    <button class="button" onclick="abrirModal(); atribuirValor('h1520');">Marcar</button>
  </div>

  <div class="horario-box">
    <div class="disponivel"><button class="disponivel1"></button></div>
    <div class="horario" id="h1600">16:00</div>
    <button class="button" onclick="abrirModal(); atribuirValor('h1600');">Marcar</button>
  </div>

  <div class="horario-box">
    <div class="disponivel"><button class="disponivel1"></button></div>
    <div class="horario" id="h1640">16:40</div>
    <button class="button" onclick="abrirModal(); atribuirValor('h1640');">Marcar</button>
  </div>

  <div class="horario-box">
    <div class="disponivel"><button class="disponivel1"></button></div>
    <div class="horario" id="h1720">17:20</div>
    <button class="button" onclick="abrirModal(); atribuirValor('h1720');">Marcar</button>
  </div>

  <div class="horario-box">
    <div class="disponivel"><button class="disponivel1"></button></div>
    <div class="horario" id="h1800">18:00</div>
    <button class="button" onclick="abrirModal(); atribuirValor('h1800');">Marcar</button>
  </div>

  <div class="horario-box">
    <div class="disponivel"><button class="disponivel1"></button></div>
    <div class="horario" id="h1840">18:40</div>
    <button class="button" onclick="abrirModal(); atribuirValor('h1840');">Marcar</button>
  </div>

  <div class="horario-fechado">
    19:00 - FECHADO
  </div>
</div>

<div id="modal">
  <form id="marcarForm"  method="post" action="<?= base_url('dadosagendar');?>" onsubmit="alert('Horário agendado com sucesso!');" >
    <button type="button" id="btnFecharModal" onclick="fecharModal()">X</button>
    <label for="horario">Horário:</label>
    <input type="time" id="horario" name="horario" required><br>

    <label for="data">Data:</label>
    <input type="date" id="data" name="data" value="<?=$dataAtual = date("Y-m-d");?>"><br>

    <label for="telefone">Telefone:</label>
    <input type="text" id="telefone" name="telefone" value="<?= $usuario[0]['telefone']?>"><br>

    <label for="observacao">Observação:</label>
    <textarea id="observacao" name="observacao" rows="4" cols="50"></textarea>

    <button type="submit" onclick="enviarFormulario()">Marcar</button>
    <button type="button" onclick="fecharModal()">Cancelar</button>
    
    
  </form>
</div>

<div id="modal-horarios">
    <div class="meusHorarios">
      <button type="button" id="btnFecharModal" onclick="fecharModalHorarios()">X</button>

      <div class="meuHorario">
        <?php foreach ($usuarioHorario as $u){ ?>
                    
                    
                    <form class="btnExcluir" method="post" action="<?= base_url('excluirhorario')?>" hod="POST" onsubmit="return confirm('Excluir esse horário?')">
                    
                      <input type="time" value="<?= $u['horario']?>" readonly>
                      <input type="date" value="<?= $u['data']?>" readonly>
                      <input type="hidden" name="horarioExcluir" value="<?= $u['horario']?>">
                      <input type="hidden" name="dataExcluir" value="<?= $u['data']?>">
                      <a id="abrirModalEditar" onclick="abrirModalEditarHorario()">Editar</a>
                      <input type="submit" class="btn-excluir" value="Excluir"> 
                    
                  
                    </form>
                  

                </tr>
              <?php } ?>
      </div>
    </div>
</div>

<div id="modal-editar-horario">
  <button type="button" id="btnFecharModalEditar" onclick="fecharModalEditarHorario()">X</button>
  <form id="editarHorariorForm"  method="post" action="<?= base_url('editarhorario');?>" onsubmit="alert('Editado com sucesso!');">
 
      <label for="horarioEditar">Horário:</label>
      <input type="time" id="horarioEditar" name="horarioEditar" <?php if(isset($u['horario'])) { echo 'value="' . $u['horario'] . '"'; } ?>><br>
      <label for="dataEditar">Data:</label>
      <input type="date" id="dataEditar" name="dataEditar" <?php if(isset($u['data'])) { echo 'value="' . $u['data'] . '"'; } ?>><br>

      <label for="telefoneEditar">Telefone:</label>
      <input type="text" id="telefoneEditar" name="telefoneEditar" <?php if(isset($u['telefone'])) { echo 'value="' . $u['telefone'] . '"'; } ?>><br>

      <label for="observacaoEditar">Observação:</label>
      <textarea id="observacaoEditar" name="observacaoEditar" rows="4" cols="50"></textarea>
      
      <input type="hidden" name="horarioAntesEditar" <?php if(isset($u['horario'])) { echo 'value="' . $u['horario'] . '"'; } ?>>
      
    <button type="submit">Salvar</button>
    <button type="button" onclick="fecharModalEditarHorario()">Cancelar</button>
    
    
  </form>  
</div>

<div id="modalMeusDados">
  <button type="button" id="btnFecharModalMeusDados" onclick="fecharModalMeusDados()">X</button>
  <form action="<?= base_url('meusdadoseditar'); ?>" method="post" id="formEditarDados" onsubmit="alert('Editado com sucesso!');">

                <label for="nome">Nome Completo:</label>
                <input type="text" id="nome" name="nomeEditar" value="<?= $usuario[0]['nome']?>" required>


                <label for="email">Endereço de e-mail:</label>
                <input type="email" id="email" name="emailEditar" value="<?= $usuario[0]['email']?>"required>

                <label for="celular">Telefone:</label>
                <input type="celular" id="celular" name="celularEditar" value="<?= $usuario[0]['telefone']?>" required>


                <label for="senha"> Senha:</label>
                <input type="text" id="senha" name="senhaEditar" value="<?= $usuario[0]['senha']?>" required>


                <br>

                <input type="submit" value="Salvar">
                <button type="button" onclick="fecharModalMeusDados()">Cancelar</button>
            </form>

            <form action="<?= base_url('excluirconta'); ?>" method="post" id="excluirConta"  onsubmit="return confirm('Excluir a sua conta?')">
                <input type="submit" value="Excluir Conta">
                <input type="hidden" name="horarioAntesEditar" value="<?= $usuario[0]['email']?>>

            </form>
</div>

      
</section>

</body>
</html>
