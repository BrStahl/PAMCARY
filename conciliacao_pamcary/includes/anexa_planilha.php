<?
include('../class/UploadPlanilha.php');

$insere_arquivo = new UploadPlanilha();

$fornecedor_id 	= $_GET["fornecedor_id"];
$tmpName 	= basename($_FILES['file']['tmp_name']);
$name 	 	= basename($_FILES['file']['name']);


$dados = $insere_arquivo->insereUpload($fornecedor_id, $tmpName, $name);  

print $dados;  


/*
print "name: ".$name;
print "<br> tmpName: ".$tmpName;
print "<br> ID: ".$item_id;
*/

?>