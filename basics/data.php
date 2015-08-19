<?php

$data = "08. 09. 1984";

$date = \DateTime::createFromFormat('d. m. Y', $data);

echo $date->format('d/m/Y');

$date2 = clone $date;

$date2->add(new \DateInterval('P2M2D'));

echo '<br>';

echo $date2->format('d/m/Y');

echo '<br>';

$diff = $date2->diff($date);

echo 'Diferença: ' . $diff->format('%m mês, %d dia - %a Total de dias.');