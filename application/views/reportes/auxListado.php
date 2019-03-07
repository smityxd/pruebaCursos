<table class="table">
    <thead>
    <tr>
        <th scope="col">Curso</th>
        <th scope="col">Promedio</th>
    </tr>
    </thead>
    <tbody>
    <?
    foreach($rs->result() as $row){?>
        <tr>
            <td><?=$row->nombre?></td>
            <td><?=number_format($row->promedio,2)?></td>
        </tr>
        <?
    }
    ?>
    </tbody>
</table>