<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <div>
     <div class="titulo">
        <div id="dif1"></div>
        <div id="dif2"><h1>SISTEMA IF BAIANO-Campus Guanambi</h1></div>
          <div id="dif3"> </div>
        </div>
    <div class="nav">
<ul>
  <li><a href="index.php">PÁGINA INICIAL</a></li>
  <li><a href="cadaluno.php">CADASTRO DE ALUNOS</a></li>
  <li><a href="listaaluno.php">LISTA DE ALUNOS</a></li>
  </div>
  
  </ul>
    </div>
    

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nome = htmlspecialchars($_POST['nome']);
  $end = htmlspecialchars($_POST['end']);
  $br = htmlspecialchars($_POST['br']);
  $cid = htmlspecialchars($_POST['cid']);
  $uf = htmlspecialchars($_POST['uf']);
  $cpf = htmlspecialchars($_POST
  ['cpf']);
  $cel = htmlspecialchars($_POST['cel']);
  $nascimento = htmlspecialchars($_POST['nascimento']);

echo "<table> 
<tr>
<th>Nome</th>
<td>$nome</td>
</tr>

<tr>
<th>Endereço</th>
<td>$end</td>
</tr>

<tr>
<th>Bairro</th>
<td>$br</td>
</tr>

<tr>
<th>Cidade</th>
<td>$cid</td>
</tr>

<tr>
<th>UF</th>
<td>$uf</td>
</tr>

<tr>
<th>CPF</th>
<td>$cpf</td>
</tr>

<tr>
<th>Celular</th>
<td>$cel</td>
</tr>

<tr>
<th>Data de Nascimento</th>
<td>$nascimento</td>
</tr>
</table>";
} else {
  echo "<p>Erro: este formulário não foi enviado corretamente.</p>";
}
?>
 
 <br>
 <br>



<h2>ALUNOS JÁ MATRICULADOS</h2>




  <table>
    <th>NOME</th>
    <th>ENDEREÇO</TH>
    <th>BAIRRO</th>
    <th>CIDADE</th>
    <th>UF</th>
<th>CPF</th>
        <th>CELULAR</th>
        <th>DATA DE NASCIMENTO</th>
        
        </tr>
        <tr>
  
            <td>Francielly Da Paz Souza</td>
            <td>Rua 15 de julho</td>
            <td>Bairro Porto Alegre</td>
            <td>Guanambi</td>
            <td>BA</td>
           <td>276.898.675-22</td>
           <td>(77)999061994</td>
           <td>14/07/2007</td>
        </tr>
        <tr>
             <td>Patrizia Souza Ribeiro </td>
            <td>Rua Pedro Alves</td>
            <td>Bairro Jardim das Flores</td>
            <td>Palmas de Monte Alto</td>
            <td>BA</td>
           <td>202.738.995-92</td>
           <td>(77)999876524</td>
           <td>19/10/2007</td>

        </tr>
        <tr>
            <td>Yasmin Andrade Souza</td>
            <td>Rua Jacinto Coelho</td>
            <td>Bairro Nova Aliança</td>
            <td>Caculé</td>
            <td>BA</td>
           <td>296.563.990-22</td>
           <td>(77)999082516</td>
           <td>11/03/2008</td>
        </tr>
            
   
        
</table>
      
    <div class="rodape">
      <h5>Instituto Federal de Educação, Ciência e Tecnologia da Bahia - Campus Guanambi</h5>
Telefone: (77) 0000-0000 | E-mail: contato@ifba.edu.br
www.ifba.edu.br
</div>
</body>
</html>



