
	<?php
			switch ($_GET['pagina']){
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
			
			case 'formulario';
			include "formulario.php";
			break;
		
			default:
			include("home.php");
			break;
			
			}
	