<?php
$conn = mysqli_connect("localhost", "52824@localhost", "krijgkanker", "52824");

if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
}
//sql querry aangeven en naar de DB sturen
$querry = "SELECT * FROM student";
$result = $conn->query($querry);
?>
<style>
    table{
        border: 1px solid black;
    }
</style>
<table>

    <?php
    echo '<tr>';
    echo '<td> studentnr </td>';
    echo '<td> roepnaam </td>';
    echo '<td> voorletters </td>';
    echo '<td> tussenvoegsels </td>';
    echo '<td> achternaam </td>';
    echo '<td> adres </td>';
    echo '<td> postcode </td>';
    echo '<td> woonplaats </td>';
    echo '<td> geslacht </td>';
    echo '<td> telefoon </td>';
    echo '<td> geboortedatum </td>';
    echo '<td> uitgeschreven </td>';
    echo '<td> lesgeld </td>';
    echo '<td> betaald </td>';
    echo '</tr>';

    while ($row = $result->fetch()){

        echo '<tr>';
        echo '<td>' . $row['studentnr'] . '</td>';
        echo '<td>' . $row['roepnaam'] . '</td>';
        echo '<td>' . $row['voorletters'] . '</td>';
        echo '<td>' . $row['tussenvoegsels'] . '</td>';
        echo '<td>' . $row['achternaam'] . '</td>';
        echo '<td>' . $row['adres'] . '</td>';
        echo '<td>' . $row['postcode'] . '</td>';
        echo '<td>' . $row['woonplaats'] . '</td>';
        echo '<td>' . $row['geslacht'] . '</td>';
        echo '<td>' . $row['telefoon'] . '</td>';
        echo '<td>' . $row['geboortedatum'] . '</td>';
        echo '<td>' . $row['uitgeschreven'] . '</td>';
        echo '<td>' . $row['schoolgeld'] . '</td>';
        echo '<td>' . $row['betaald'] . '</td>';
        echo '</tr>';
    }
    ?>
</table>