<?php

//lista

$StatusInicial = !isset($_GET['status'])?'active':$_GET['status'];

$TotalPaginas = 20;

$PaginaAtual = isset($_GET['pgn'])?$_GET['pgn']:'0';

/*$anuncios = get('/users/'. $_SESSION['id_mercadolivre'].'/items/search', array('access_token' => $_SESSION['access_token'], 'orders' =>'stop_time_desc','limit'=>$TotalPaginas,'offset'=>$PaginaAtual, 'status'=>$StatusInicial));
*/



?>

 

<a href="anuncios.php?pgn=<?php echo $PaginaAtual;?>&status=active" class="btn btn-default<?php echo ($StatusInicial=='active')?' active':'';?>">Ativos</a>

<a href="anuncios.php?pgn=<?php echo $PaginaAtual;?>&status=paused" class="btn btn-default<?php echo ($StatusInicial=='paused')?' active':'';?>">Pausados</a>

<a href="anuncios.php?pgn=<?php echo $PaginaAtual;?>&status=closed" class="btn btn-default<?php echo ($StatusInicial=='closed')?' active':'';?>">Finalizados</a>

<a href="anuncios.php?pgn=<?php echo $PaginaAtual;?>&status=" class="btn btn-default<?php echo ($StatusInicial=='')?' active':'';?>">Todos</a>

 

<?php 
//print_r($anuncios);
?>

 

<ul class="pagination">

<?php 

//for($i=0;$i<=($NumPaginas-1);$i++){
?>

<!-- <li class="<?php echo ($PaginaAtual==$i)?'active':'';?>"><a href="anuncios.php?pgn=<?php echo ($i);?>&status=<?php echo $StatusInicial;?>"><?php echo ($i+1);?> <span class="sr-only">(atual)</span></a></li> -->

<?php //} ?>





</ul>


<?php

/*
$curl = "https://api.mercadolibre.com/users/226384143/";
$qq = json_encode($curl);
$teste = $_POST['id'];
echo $teste;
*/

$json = file_get_contents('https://api.mercadolibre.com/users/226384143/');
//$obj = json_encode($json);


$data = json_decode($json, true);

echo "<br/>";
echo "<br/>";



print_r($data);
echo "<br/>";
echo "<br/>";

var_dump($data);

echo "<br/>";
echo "<br/>";

//echo $data[0];



?>