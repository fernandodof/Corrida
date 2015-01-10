<?php

require_once './src/app//model/persistence/Dao.class.php';
require_once './src/app/util/Queries.php';
require_once './src/app/util/Queries_Builders.php';
require_once './src/app/util/TimeFunctions.php';
require_once './src/app/util/EncryptPassword.php';

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
//$params['id'] = 1;
//$s = Queries_Builders::get_runs_by_runner_id_builder()['select'];
//echo $s;
//$ss = array_map('trim', explode(',', $s));
//
//var_dump($ss);
//
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
//$summary = $dao->getListResultOfQueryBuilderWithParameters(Queries_Builders::get_runs_summary(), $params);
//
//var_dump($summary);
//$params1['runid'] = 17;
//$params1['runnerid'] = 1;
//
//var_dump($params1);
//
//$run = $dao->getListResultOfNamedQueryWithParameters(Queries::GET_RUN_BY_RUNNER_ID_RUN_ID, $params1);
//
//var_dump($run);
//$t = TimeFunctions::secondsToTime(3600);
//
//var_dump($t);
//
//echo '<br><br><br>';
//
//$t = TimeFunctions::secondsToHoursMinutesSeconds(1000000);
//
//var_dump($t);
//$params['date'] = '2015-01-08';
//$runs = $dao->getListResultOfNamedQueryWithParameters(Queries::GET_RUNS_BY_DATE, $params);
//
//var_dump($runs);
//
//$date = date_create_from_format('Y-m-d', '08/01/2015');
//
//var_dump($date);

//$params['email'] = 'fernandodof@gmail.com';
//$params['password'] = '12tir.zIbWQ3c';
//
//$runner = $dao->getArrayResultOfNativeQueryWithParameters(Queries::LOGIN_WITH_EMAIl, $params);
//
//var_dump($runner);
//
//
//echo EncryptPassword::encrypt('abcabC').'<br>';
//echo EncryptPassword::encrypt('abcabc');
//

for ($i = 0; $i < 15; $i++) {
 echo rand(0, 3).'<br>';
}





$sentence = array(
  array('id' => '1','sentence' => 'A vontade de vencer é importante. Mas a vontade de se preparar é fundamental.','author' => 'Joe Paterno'),
  array('id' => '2','sentence' => 'Ser derrotado é normalmente uma condição temporária. Desistir é o que a faz permanente.','author' => 'Marilyn vos Savant'),
  array('id' => '3','sentence' => 'Por mais que na guerra se vença um ou mais inimigos, a maior vitória é sobre si mesmo.','author' => 'Buda'),
  array('id' => '4','sentence' => 'A dor é temporária. Ela pode durar um minuto, ou uma hora, ou um dia, ou um ano, mas finalmente ela acabará e alguma outra coisa tomará o seu lugar. Se eu paro, no entanto, ela dura para sempre.','author' => 'Lance Armstrong'),
  array('id' => '5','sentence' => 'Quanto mais duro você trabalhar, mais sorte terá.','author' => 'Gary Player'),
  array('id' => '6','sentence' => 'A diferença entre o impossível e o possível reside na determinação de um homem.','author' => 'Tommy Lasorda'),
  array('id' => '7','sentence' => 'Preguiça não é nada mais de que o ato de descansar antes de estar cansado.','author' => 'Jules Renard'),
  array('id' => '8','sentence' => 'A vontade de vencer não significa nada sem a vontade se preparar.','author' => 'Juma Ikangaa'),
  array('id' => '9','sentence' => 'm uma corrida não importa se você vem na frente, no meio da multidão, ou no fim. Você pode dizer, eu terminei. Há muita satisfação nisso.','author' => 'Fred Lebow'),
  array('id' => '10','sentence' => 'Pergunte a sim mesmo: ‘Eu posso fazer mais?’ A resposta geralmente é: ‘Sim’.','author' => 'Paul Tergat'),
  array('id' => '11','sentence' => 'Uma corrida pode mudar o seu dia, muitas corridas podem mudar a sua vida.','author' => 'Autor desconhecido'),
  array('id' => '12','sentence' => 'Todo dia é um bom dia se você correr.','author' => 'Kevin Nelson'),
  array('id' => '13','sentence' => 'Ninguém nunca se afogou em suor/','author' => 'Autor desconhecido'),
  array('id' => '14','sentence' => 'Aquele que não tem coragem de assumir riscos não conquistará nada na vida.','author' => 'Muhammad Ali'),
  array('id' => '15','sentence' => 'Se você correr, você é um corredor. Não importa o quão rápido ou longe. Não importa se hoje é o seu primeiro dia ou se você corre há 20 anos. Não há um teste para passar, uma licença para conseguir, nem um cartão de fidelidade. Você apena corre.','author' => 'John Bingham'),
  array('id' => '16','sentence' => 'Eu frequentemente escuto alguém dizer: ‘Eu não sou um corredor de verdade’ Nos todos somos corredores, alguns apenas correr mais rápido que outros. Eu nunca conheci um corredor falso.','author' => 'Bart Yasso'),
  array('id' => '17','sentence' => 'Você pode ter resultados ou desculpas, mas não as duas coisas.','author' => 'Autor desconhecido'),
  array('id' => '18','sentence' => 'A perseverança não é uma longa corrida; ela é muitas corridas curtas, uma depois da outra.','author' => 'Walter Elliot'),
  array('id' => '19','sentence' => 'A corrida não é sempre para o mais rápido... mas para aquele que continua correndo.','author' => 'Autor desconhecido'),
  array('id' => '20','sentence' => 'Querer vencer significa já ter percorrido metade do caminho.','author' => 'Theodore Roosevelt'),
  array('id' => '21','sentence' => 'A vontade de se preparar tem que ser maior do que a vontade de vencer. Vencer será consequência da boa preparação.','author' => 'Bernardinho'),
  array('id' => '22','sentence' => 'A força não provém da capacidade física, e sim de uma vontade indomável.','author' => 'Mahatma Gandhi'),
  array('id' => '23','sentence' => 'Defina as suas metas com objetivos elevados e não pare até chegar lá.','author' => 'Bo Jackson'),
  array('id' => '24','sentence' => 'As pessoas costumam dizer que a motivação não dura sempre. Bem, nem o efeito do banho, por isso recomenda-se diariamente.','author' => 'Zig Ziglar'),
  array('id' => '25','sentence' => 'Motivação é a arte de fazer as pessoas fazerem o que você quer que elas façam porque elas o querem fazer.','author' => 'Dwight Eisenhower'),
  array('id' => '26','sentence' => 'Perseverança é o trabalho duro que você faz depois de ter se cansado de fazer o trabalho duro que você já fez.','author' => 'Newt Gingrich'),
  array('id' => '27','sentence' => 'Toda conquista começa com a decisão de tentar.','author' => 'Autor desconhecido'),
  array('id' => '28','sentence' => 'Quando você pensar em desistir, pense porque você começou.','author' => 'Autor desconhecido')
);


foreach ($sentence as $s){
    var_dump($s['sentence']);
    $sentenceObject = new Sentence();
    $sentenceObject->setSentence($s['sentence']);
    $sentenceObject->setAuthor($s['author']);
    $dao->save($sentenceObject);
}