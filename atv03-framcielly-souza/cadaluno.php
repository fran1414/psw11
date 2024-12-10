<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styles.css">
  <title>Document</title>
</head>
<body>
  <div>
<div class="titulo">
        <div id="dif1"><img src="image1" width="30%" height="30%"></div>
        <div id="dif2"><h1>SISTEMA IF BAIANO-Campus Guanambi</h1></div>
          <div id="dif3"> </div>
        </div>
    <div class="nav">
<ul>
  <li><a href="atv03-framcielly-souza/index.php">PÁGINA INICIAL</a></li>
  <li><a href="atv03-framcielly-souza/cadaluno.php">CADASTRO DE ALUNOS</a></li>
  <li><a href="atv03-framcielly-souza/listaaluno.php">LISTA DE ALUNOS</a></li>
  </div>
  
  </ul>
    
  </div>
    
  <br>
  <form action="listaaluno.php" method="post">
    <div id="a1">
    <label>Nome</label>
      <input type="text" name="nome" id="nome" placeholder="Ex: Ana...">
      </div>
       <div id="a2">
      <label>Endereço</label>
      <input type="text" name="end" id="end" placeholder="Ex: Rua A...">
      </div>

      <div id="a3">
      <label>Bairro</label>
      <input type="text" name="br" id="br" placeholder="Ex: Bairro Branco...">
    </div>
     
    <div id="a4">
      <label>Cidade</label>
      <input type="text" name="cid" id="cid" placeholder="Ex: Guanambi...">
    </div>
    <div id="a5">
      <label >CPF</label>
                    <input type="number" id="cpf" name="cpf" maxlength="14" placeholder="Ex: 000.000.000-00">
                    </div>
               <div id="a6">     
            <label >Celular</label>
                    <input type="number" id="cel" name="cel" placeholder="Ex:(DDD) 0000-0000">
      </div>
      <div id="a7">
         <label >WhatsApp</label>
                    <input type="number" id="num" name="num" placeholder="Ex:+55(DDD) 0000-0000">
                      </div>     
<div id="a8">
<label>UF</label>
    <select id="uf" name="uf">
      <option value="AC">AC</option>
      <option value="AL">AL</option>
      <option value="AM">AM</option>
      <option value="BA">BA</option>
      <option value="CE">CE</option>
      <option value="DF">DF</option>
      <option value="ES">ES</option>
      <option value="GO">GO</option>
      <option value="MA">MA</option>
      <option value="MT">MT</option>
      <option value="MS">MS</option>
      <option value="MG">MG</option>
      <option value="PA">PA</option>
      <option value="PB">PB</option>
      <option value="PR">PR</option>
      <option value="PE">PE</option>
      <option value="PI">PI</option>
      <option value="RJ">RJ</option>
      <option value="RN">RN</option>
      <option value="RS">RS</option>
      <option value="RO">RO</option>
      <option value="RR">RR</option>
      <option value="SC">SC</option>
      <option value="SP">SP</option>
      <option value="SE">SE</option>
      <option value="TO">TO</option>
    </select>
   
    </div>
    
               <div id="a9">
                 <label>Data de Nascimento</label> <input type="date" id="nascimento" name="nascimento" placeholder="DD/MM/AA"><br>
                 </div>
        <label><h4>Disciplinas Preferidas</h4></label>
        <label for="m1">Banco de Dados</label>
<input type="checkbox" id="m1" name="m1" value="Materias Curriculares EM com todas do curso técnico">
        <br>
        <label for="m2">Análise de Sistemas Web</label>
        <input type="checkbox" id="m2" name="m2" value="Materias Curriculares EM com todas do curso técnico"><br>
        <label for="m3">Programação de Sistemas Web</label>
<input type="checkbox" id="m3" name="m3" value="Materias Curriculares EM com todas do curso técnico"><br>
        
        <label for="m4">Redes de Computadores</label>
<input type="checkbox" id="m4" name="m4" value="Materias Curriculares EM com todas do curso técnico"><br>

 <label for="m5">Projeto Integrador</label>
<input type="checkbox" id="m5" name="m5" value="Materias Curriculares EM com todas do curso técnico">

  <label><h4>Disciplinas Cursadas</h4></labe>
        <br>
        <label for="m1">Banco de Dados</label>
<input type="checkbox" id="m1" name="m1" value="Materias Curriculares EM com todas do curso técnico">
        <br>
        <label for="m2">Análise de Sistemas Web</label>
        <input type="checkbox" id="m2" name="m2" value="Materias Curriculares EM com todas do curso técnico"><br>
        <label for="m3">Programação de Sistemas Web</label>
<input type="checkbox" id="m3" name="m3" value="Materias Curriculares EM com todas do curso técnico"><br>
        
        <label for="m4">Redes de Computadores</label>
<input type="checkbox" id="m4" name="m4" value="Materias Curriculares EM com todas do curso técnico"><br>

 <label for="m5">Projeto Integrador</label>
<input type="checkbox" id="m5" name="m5" value="Materias Curriculares EM com todas do curso técnico">
    </div>
    
   
    <div>
        
    <a href="listaaluno.html"></a>
</div>
<div>
 
    <input type="submit" value="ENVIAR">
</div>
<div>
 
    <input type="submit" value="CANCELAR">
</div>




   
</form>
<div class="rodape">
  <p>Instituto Federal de Educação, Ciência e Tecnologia da Bahia - Campus Guanambi <br>
    Telefone: (77) 0000-0000 | E-mail: contato@ifba.edu.br www.ifba.edu.br </p>
  
</div>
  
</div>
  
</body>
</html>