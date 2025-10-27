<html>
	<head>
	<title> FINISH HIM </title>
	<link rel="stylesheet" type="text/css" href="estilo/style.css">
	
	</head>
	<body>
		<div id="container" class="container">
		<?php include "topo.php" ?>
			<div>
				<?php include "menulateral.php" ?>
				<?php include "propaganda.php" ?>
				
					
					
						
	<?php
			switch (@$_GET['pagina']){
			case 'roster';
			include "roster.php";
			break;
			
			case 'patchnotes';
			include "patchnotes.php";
			break;
			
			case 'contatos';
			include "contatos.php";
			break;
		
		
			case 'dicas';
			include "dicas.php";
			break;
			
			case 'krypta';
			include "krypta.php";
			break;
			
			case 'tierlist';
			include "tierlist.php";
			break;
			
			case 'combos';
			include "combos.php";
			break;
			
			case 'home';
			include "home.php";
			break;
			
			
			case 'result';
			include "result.php";
			break;
			
		
			default:
			include("home.php");
			break;
			
			}
	?>
			</div>
				<?php include "rodape.php" ?>
		</div>
	</body>
</html>