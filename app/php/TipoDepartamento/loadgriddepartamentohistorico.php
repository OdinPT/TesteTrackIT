<?php
error_reporting(0);
include "../config.php";s

$id = $_COOKIE['cookieIDhistorico'];

$return_arr = array();

$query = "call CarregaGridDepartamentoHistorico($id)";

$result = mysqli_query($mysqli, $query);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

$row_array['idHistoricoDep'] = $row['idHistoricoDep'];
$row_array['IdTicketDep'] = $row['IdTicketDep'];
$row_array['HoraAtribuicaoDep'] = $row['HoraAtribuicaoDep'];
$row_array['Descricao_Estado'] = $row['IDDepartamentoDep'];
$row_array['username'] = $row['IDFuncEstado'];

    array_push($return_arr,$row_array);
}
echo json_encode($return_arr);

?>
