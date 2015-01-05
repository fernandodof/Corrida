<?php
require_once '../model/persistence/Dao.class.php';

$dao = new Dao();

session_start();
$runner = $dao->findByKey('runner', $_SESSION['id']);

$run = new Run();

$date = date_create_from_format('d/m/Y', filter_input(INPUT_POST, 'date'));

$run->setDate($date);
$run->setDuration(filter_input(INPUT_POST, 'time'));
$run->setDistance(filter_input(INPUT_POST, 'distance'));
$run->setNotes(filter_input(INPUT_POST, 'notes'));
$run->setAvgSpeed(filter_input(INPUT_POST, 'avgSpeed'));
$run->setPace(filter_input(INPUT_POST, 'avgPace'));
$run->setRunner($runner);

$dao->save($run);

$dao->update($runner);

echo true;