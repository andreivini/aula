<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Estudo da Frase</title>
        <link rel="stylesheet" href="andrei.css">   
    </head>
    <body>
		<div id="prin">
			<h1>Estudo da frase</h1><br>
			<form method="POST" action="PHPfrase.php">
				<p>Digite a frase:</p>
				<input type="text" class="frase" name="frase" required autofocus pattern="[a-z\s]+$">
				<input type="submit" value="Enviar" class="enviar">
			</form>
		</div>
	</body>
</html>