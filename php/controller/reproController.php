<?php

function gerarReproEvento() {
    $pdo = conectar();

    $query = selectReproView();

    $sql = $pdo->query($query)->fetchAll();

    $listaReproEvento = "";
    foreach ($sql as $assoc) {
        extract($assoc);
        $dt_inicio = convertData($dt_inicio);
        $hr_inicio = convertHora($hr_inicio);
        $listaReproEvento .= "
            <tr>
                <th>$dt_inicio $hr_inicio</th>
                <td>$titulo</td>
                <td>$responsavel</td>
                <td style=\"text-align: center;\">
                    <button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#proxmodal\" data-id=\"$id\" id=\"getEvento\">
                        
                    </button>
                </td>
            </tr>";
    }

    $pdo = null;

    return $listaReproEvento;
}
?>

