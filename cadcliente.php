<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <title>Cadastro Cliente</title>
        <meta charset="utf-8">
    
    </head>


    <body>
        <h1>Cadastro do Cliente</h1>
        <?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="post" action="processo.php">
            <label>Nome: </label>
            <input type="text" name="nome" placeholder="Digite seu nome"><br><br>
            
            <label>E-mail: </label>
            <input type="text" name="email" placeholder="Digite seu e-mail"><br><br>
            
            <label>Telefone: </label>
            <input type="number" name="telefone" placeholder="Digite seu telefone"><br><br>
			
			<input type="submit" value="Cadastrar">
        
        </form>

    </body>
</html>