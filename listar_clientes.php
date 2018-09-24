<?php
include_once "conexao.php";


$result_cliente = "SELECT * FROM cliente ORDER BY id_cliente DESC";
$resultado_cliente = mysqli_query($conn, $result_cliente);

?>
<table class="table table-striped" border="solid">
     <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Email</th>
      <th>Telefone</th>
      <th>Data de Cadastro</th>
    </tr>
  </thead>
     <tbody>
<?php

if(($resultado_cliente) AND ($resultado_cliente->num_rows != 0)){
	while($row_cliente = mysqli_fetch_assoc($resultado_cliente)){
        ?>
    <tr>
        <th><?php echo $row_cliente['id_cliente']?></th>
        <td><?php echo $row_cliente['nome']?></td>
        <td><?php echo $row_cliente['email']?></td>
        <td><?php echo $row_cliente['telefone']?></td>
        <td><?php echo $row_cliente['data_cadastro']?></td>
    </tr> 
         <?php
	}
}else{
	echo "Nenhum cliente foi encontrado";
}
?>
</tbody>
</table>  
<?php