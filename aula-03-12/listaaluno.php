<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
<tr>
    <th>nome</th>
    <th>turma</th>
</tr>
<tr>
    <td>
    <?php echo $_POST['aluno'];?>
    </td>
</tr>
<tr>
    <td>
    <?php echo $_POST['turma'];?>
</td>
</tr>
    </table>
    <?php
    echo $_POST['aluno'];
    echo $_POST['turma'];
</body>
</html>