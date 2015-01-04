<?php

require_once './src/app//model/persistence/Dao.class.php';

$dao = new Dao();

$my_date = date('', strtotime('02/01/2014'));
$date = new DateTime(strtotime($my_date));

$data = date('D');
$mes = date('M');
$dia = date('d');
$ano = date('Y');

$semana = array(
    'Sun' => 'Domingo',
    'Mon' => 'Segunda-Feira',
    'Tue' => 'Terca-Feira',
    'Wed' => 'Quarta-Feira',
    'Thu' => 'Quinta-Feira',
    'Fri' => 'Sexta-Feira',
    'Sat' => 'Sábado'
);

$mes_extenso = array(
    'Jan' => 'Janeiro',
    'Feb' => 'Fevereiro',
    'Mar' => 'Marco',
    'Apr' => 'Abril',
    'May' => 'Maio',
    'Jun' => 'Junho',
    'Jul' => 'Julho',
    'Aug' => 'Agosto',
    'Nov' => 'Novembro',
    'Sep' => 'Setembro',
    'Oct' => 'Outubro',
    'Dec' => 'Dezembro'
);

echo $semana["$data"] . ", {$dia} de " . $mes_extenso["$mes"] . " de {$ano}";
echo '<br>';

echo $date->format('d/m/Y');

//$runner = new Runner();
//$runner->setEmail('fernandodof@gmail.com');
//$runner->setLogin('fernandodof');
//$runner->setName('Fernando de Oliveira Ferreira');
//
//$dao->save($runner);
