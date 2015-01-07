<?php

require_once './src/app//model/persistence/Dao.class.php';
require_once './src/app/util/Queries.php';
require_once './src/app/util/Queries_Builders.php';

setlocale(LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese');

date_default_timezone_set('America/Fortaleza');

$dao = new Dao();

//$my_date = date('', strtotime('02/01/2014'));
//$date = new DateTime(strtotime($my_date));
//$data = date('D');
//$mes = date('M');
//$dia = date('d');
//$ano = date('Y');
//
//$semana = array(
//    'Sun' => 'Domingo',
//    'Mon' => 'Segunda-Feira',
//    'Tue' => 'Terca-Feira',
//    'Wed' => 'Quarta-Feira',
//    'Thu' => 'Quinta-Feira',
//    'Fri' => 'Sexta-Feira',
//    'Sat' => 'Sábado'
//);
//
//$mes_extenso = array(
//    'Jan' => 'Janeiro',
//    'Feb' => 'Fevereiro',
//    'Mar' => 'Marco',
//    'Apr' => 'Abril',
//    'May' => 'Maio',
//    'Jun' => 'Junho',
//    'Jul' => 'Julho',
//    'Aug' => 'Agosto',
//    'Nov' => 'Novembro',
//    'Sep' => 'Setembro',
//    'Oct' => 'Outubro',
//    'Dec' => 'Dezembro'
//);
//
//echo $semana["$data"] . ", {$dia} de " . $mes_extenso["$mes"] . " de {$ano}";
//echo '<br>';
//echo $date->format('d/m/Y');
//$runner = new Runner();
//$runner->setEmail('fernandodof@gmail.com');
//$runner->setLogin('fernandodof');
//$runner->setName('Fernando de Oliveira Ferreira');
//
//$dao->save($runner);

$params['id'] = 1;

$s = Queries_Builders::get_runs_by_runner_id_builder()['select'];
echo $s;
$ss = array_map('trim', explode(',', $s));

var_dump($ss);

//$runs = $dao->getListResultOfQueryBuilderWithParameters(Queries_Builders::get_runs_by_runner_id_builder(), $params);
////$runs = $dao->getListResultOfNamedQueryWithParameters(Queries::GET_RUNS_BY_RUNNER_ID, $params);
//
//$runCount = $dao->getSingleResultOfNamedQueryWithParameters(Queries::GET_RUN_COUNT, $params);
//
////var_dump($runs);
//
//$output = array(
//    "sEcho" => 1,
//    "iTotalRecords" => intval($runCount[1]),
//    "iTotalDisplayRecords" => count($runs),
//    "aaData" => $runs
//);
//
//function jsonRemoveUnicodeSequences($struct) {
//   return preg_replace("/\\\\u([a-f0-9]{4})/e", "iconv('UCS-4LE','UTF-8',pack('V', hexdec('U$1')))", json_encode($struct));
//}
//
//$response = json_encode($output,JSON_UNESCAPED_UNICODE);
//var_dump($response);
//echo $response;

