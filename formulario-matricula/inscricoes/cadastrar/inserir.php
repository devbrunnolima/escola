<?php


$dt_nasc = $_POST['dt_nasc'];
$dt_inscricao = date('d/m/Y H:i:s' );

list($ano, $mes, $dia) = explode('-', $dt_nasc);

$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
    // Descobre a unix timestamp da data de nascimento do fulano
$nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);


$idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);



echo "Data de nascimento: ".$dt_nasc;
echo "<br><br><br><br>";
echo "Data de inscrição: ".$dt_inscricao;
echo "<br><br><br><br>";
echo "Idade do usuário: ".$idade;
echo "<br><br><br><br>";
echo "Data de hoje em floor(): ".$hoje;
echo "<br><br><br><br>";
echo "Data de nascimento em floor(): ".$nascimento;





?>