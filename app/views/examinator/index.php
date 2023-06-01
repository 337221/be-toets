<style>
    body {
    font-family: Arial, sans-serif;
    padding: 0;
    margin: 0;
    background-color: #f0f0f0;
}

h1 {
    text-align: left;
    border-bottom: 2px solid black;
    display: inline-block;
    padding-bottom: 5px;
}


table {
    width: 100%;
    margin: 20px 0;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid #999;
}

th, td {
    padding: 10px;
    text-align: center;
}

th {
    background-color: #333;
    color: #fff;
}

tr:nth-child(even) {
    background-color: #ddd;
}
</style>
<h1>Overzicht Afgenomen Examens Examinatoren</h1>
<table>
    <tr>
        <th>Naam Examinator</th>
        <th>Tussenvoegsel</th>
        <th>Achternaam</th>
        <th>Datum Examen</th>
        <th>Rijbewijscategorie</th>
        <th>Rijschool</th>
        <th>Stad</th>
        <th>Uitslag Examen</th>
    </tr>
    <?php foreach($data['examinators'] as $examinator) { ?>
    <tr>
        <td><?php echo $examinator->Voornaam; ?></td>
        <td><?php echo $examinator->Tussenvoegsel; ?></td>
        <td><?php echo $examinator->Achternaam; ?></td>
        <td><?php echo $examinator->DatumExamen; ?></td>
        <td><?php echo $examinator->Rijbewijscategorie; ?></td>
        <td><?php echo $examinator->Rijschool; ?></td>
        <td><?php echo $examinator->Stad; ?></td>
        <td><?php echo $examinator->UitslagExamen; ?></td>
    </tr>
    <?php } ?>
</table>
