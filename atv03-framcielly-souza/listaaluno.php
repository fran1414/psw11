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
    
      
    <table>
        <tr>
        <th>NOME</th>
        <th>ENDEREÇO</th>
        <th>BAIRRO</th>
        <th>CIDADE</th>
        <th>UF</th>
        <th>CPF</th>
        <th>TELEFONE</th>
        <th>CELULAR</th>
        <th>DATA DE NASCIMENTO</th>
        <th>DISCIPLINAS CURSADAS</th>
        <th>DISCIPLINAS PREFERIDAS</th>
        </tr>
        <tr>
  
            <td>Francielly Da Paz Souza</td>
            <td>Rua 15 de julho</td>
            <td>Bairro Porto Alegre</td>
            <td>Guanambi</td>
            <td>BA</td>
           <td>276.898.675-22</td>
           <td>(77)999061994</td>
           <td>+55 77999061994</td>
           <td>14/07/2007</td>
           <td>Banco de Dados;<br>
           Programação de Sistemas Web; <br> Projeto Integrador; <br>Análise de Sistemas Web;  <br>Redes de Computadore;s</td>
          <td>Banco de Dados;</td>
        </tr>
        <tr>
             <td>Patrizia Souza Ribeiro </td>
            <td>Rua Pedro Alves</td>
            <td>Bairro Jardim das Flores</td>
            <td>Palmas de Monte Alto</td>
            <td>BA</td>
           <td>202.738.995-92</td>
           <td>(77)999876524</td>
           <td>+55 77999876524</td>
           <td>19/10/2007</td>
           <td>Banco de Dados;<br>
           Programação de Sistemas Web; <br> Projeto Integrador; <br>
          <td>Análise de Sistemas Web;</td>
        </tr>
        <tr>
            <td>Yasmin Andrade Souza</td>
            <td>Rua Jacinto Coelho</td>
            <td>Bairro Nova Aliança</td>
            <td>Caculé</td>
            <td>BA</td>
           <td>296.563.990-22</td>
           <td>(77)999082516</td>
           <td>+55 77999082516</td>
           <td>11/03/2008</td>
           <td>Banco de Dados;<br>
           Programação de Sistemas Web; <br> Projeto Integrador; <br>Análise de Sistemas Web;</td>
          <td>Projeto Integrador;</td>
        </tr>
            
    </table>
      
    <div class="rodape">
      <h5>Instituto Federal de Educação, Ciência e Tecnologia da Bahia - Campus Guanambi</h5>
Telefone: (77) 0000-0000 | E-mail: contato@ifba.edu.br
www.ifba.edu.br

      
    </div>
    </div>
         <tr>
    <td>
    <?php echo $_POST['NOME'];?>
    </td>
</tr>

<tr>
    <td>
    <?php echo $_POST['ENDREÇO'];?>
</td>
</tr>

<tr>
  <td>
    <?php echo $_POST['BAIRRO'];?>
  </td>
</tr>
<tr>
  <td>
    <?php echo $_POST['CIDADE'];?>
  </td>
</tr>
<tr>
  <td>
    <?php echo $_POST['UF'];?>
  </td>
</tr>
<tr>
  <td>
    <?php echo $_POST['CPF'];?>
  </td>
</tr>
<tr>
  <td>
    <?php echo $_POST['TELEFOENE'];?>
  </td>
</tr>
<tr>
  <td>
    <?php echo $_POST['CELULAR'];?>
  </td>
</tr>
<tr>
  <td>
    <?php echo $_POST['DATA DE NASCIMENTO'];?>
  </td>
</tr>
<tr>
  <td>
    <?php echo $_POST['DISCIPLINAS CURSADAS'];?>
  </td>
</tr>
<tr>
  <td>
    <?php echo $_POST['DISCIPLINAS PREFERIDAS'];?>
  </td>
</tr>
</body>
</html>