<section id="secao">
<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	include_once "./conexao.php";	
if (
        $_POST['nome'] != '' and
        $_POST['cpf'] != '' and
        $_POST['email'] != '' and
        $_POST['dia'] != '' and
        $_POST['mes'] != '' and
        $_POST['ano'] != '' and
        $_POST['ddd'] != '' and
        $_POST['prefixo'] != '' and
        $_POST['sufixo'] != '' and
        $_POST['sexo'] != '' and
        $_POST['uf'] !='' and
        $_POST['cidade'] !='' and
        $_POST['bairro'] !='' and
		$_POST['numero'] !='' and
        $_POST['rua'] !='' and
        $_POST['preferencia'] !='' and
        $_POST['categoria'] !='' and
        $_POST['resumo'] !=''
        
        
      
) {
    $nome = $_POST['nome'];
  
    
    $cpf = $_POST['cpf'];
   
    
    $email = $_POST['email'];
   
    
    $dia = $_POST['dia'];
  
    $mes = $_POST['mes'];
    
    $ano = $_POST['ano'];
   
	
	$data_nasc= $ano.'-'.$mes.'-'.$dia;
    
    $ddd = $_POST['ddd'];

    $prefixo = $_POST['prefixo'];
 
    $sufixo = $_POST['sufixo'];
  
    
    $sexo = $_POST['sexo'];
   
    
    $uf = $_POST['uf'];
  

    $cidade = $_POST['cidade'];
  
    
    $bairro = $_POST['bairro'];
   
    
    $rua = $_POST['rua'];
 
	
	$numero = $_POST['numero'];
   
    
      
    $preferencia = $_POST['preferencia'];

    
    $categoria = $_POST['categoria'];
   
    
    $resumo = $_POST['resumo'];
 
    
     $query = Conexao::getInstance()->prepare("INSERT INTO formulario (nome,cpf,email,data_nasc,ddd,sexo,prefixo,sufixo,uf,cidade,bairro,rua,numero,preferencia,categoria,resumo) VALUES (:nome,:cpf,:email,:data_nasc,:ddd,:sexo,:prefixo,:sufixo,:uf,:cidade,:bairro,:rua,:numero,:preferencia,:categoria,:resumo)");
		 $query->bindParam(":nome", $nome, PDO::PARAM_STR);
           $query->bindParam(":cpf", $cpf,PDO::PARAM_STR);
           $query->bindParam(":email", $email,PDO::PARAM_STR);
		    $query->bindParam(":data_nasc", $data_nasc,PDO::PARAM_STR);
           $query->bindParam(":ddd", $ddd,PDO::PARAM_INT);
		   $query->bindParam(":sexo", $sexo,PDO::PARAM_STR);
           $query->bindParam(":prefixo", $prefixo,PDO::PARAM_INT);	
           $query->bindParam(":sufixo", $sufixo,PDO::PARAM_INT);
           $query->bindParam(":uf", $uf,PDO::PARAM_STR);	
           $query->bindParam(":cidade", $cidade,PDO::PARAM_STR);
		     $query->bindParam(":bairro", $bairro,PDO::PARAM_STR);
           $query->bindParam(":rua", $rua,PDO::PARAM_STR);
           $query->bindParam(":numero", $numero,PDO::PARAM_STR);
           $query->bindParam(":preferencia", $preferencia,PDO::PARAM_STR);
           $query->bindParam(":categoria", $categoria,PDO::PARAM_STR);
           $query->bindParam(":resumo", $resumo,PDO::PARAM_STR);	
           $executa = $query->execute();
		   if ($executa) {
				echo 'Nome: ' . $nome.'<br>';
				echo 'Cpf: ' . $cpf.'<br>';
				echo 'Email: ' . $email.'<br>';
				echo 'Dia: ' . $dia.'<br>';
				echo 'numero: ' . $ddd;
				echo 'Mes: ' . $mes.'<br>';
				echo 'Ano: ' . $ano.'<br>';
				echo 'prefixo: ' . $prefixo;
				echo 'Sufixo: ' . $sufixo.'<br>';
				echo 'sexo: ' . $sexo.'<br>';
				echo 'Estado: ' . $uf.'<br>';
				echo 'Cidade: ' . $cidade.'<br>';
				echo 'Bairro: ' . $bairro.'<br>';
				echo 'Rua: ' . $rua.'<br>';
				echo 'Numero: ' . $numero.'<br>';  
				echo 'Preferencia: ' . $preferencia.'<br>';
				echo 'Categoria: ' . $categoria.'<br>';
				echo 'Resumo: ' . $resumo.'<br>';

		   }else{ echo '<br> Erro ao salvar no banco de dados';
		   	print_r($query->errorInfo());
}
}else{
echo "campos obrigatorios nao foram preenchidos";
}
?>
</section>