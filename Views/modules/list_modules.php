<table border="1">
    <tr>
        <th>id</th>
        <th>Nom</th>
        <th>Code</th>
        <th>Heure</th>
    </tr>
        <?php
        // $ul = '<ul>';
        $table = '';
        foreach ($data_result as $k => $data_result) {
            $table .=   '<tr><td>' . $data_result['id'] . '</td>
                        <td>' .$data_result['nom'] . '</td>
                        <td>' . $data_result['code'] . '</td>
                        <td>' . $data_result['heure'] . '</td></tr>';
        }
        echo $table;
        ?>
</table>