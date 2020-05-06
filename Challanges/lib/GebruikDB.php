<?php
class GebruikDB {

    private $conn;

    //connectie naar database maken, functie gaat er van uit dat de DB en het gebruik-bestand zich op hetzelfde domein bevinden
    // waardoor een port connectie niet nodig is
    public function setConn($host, $user, $password, $database){
        $this->conn = mysqli_connect($host, $user, $password, $database);
        if ($this->conn -> connect_errno) {
            echo "Failed to connect to MySQL: " . $this->conn -> connect_error;
            exit();
        }
        //ping naar de server sturen om te kijken of er connectie is
        if ($this->conn->ping()) {
            return $this->conn;
        } else {
            return "Error: %s\n".$this->conn->error;
        }
    }

    //Functie om een ingevoerde table weer te geven
    //gebruiker geeft de setConn() variabele op, de naam van de database, en de table die de gebruiker wilt zien
   public function displayTable($dbconn, $dbname, $tablename){
        //array aanmaken om tables in te doen
        $tablelist = array();
        //query naar DB sturen
        $query = "SHOW TABLES FROM $dbname";
        $result = mysqli_query($dbconn,$query);
        //tables in array stoppen
        while ($row = mysqli_fetch_row($result)){
            $tablelist[] = $row;
        }
        //tablelist[] van 2d array naar normaale array zetten
        $tablelist = array_reduce($tablelist, 'array_merge', array());

        //kijken of de table die de user wil weergeven in de DB staat
        if (in_array($tablename, $tablelist)){
            //colomnamen $usertable pakken
            $collist = array();
            $query = "DESCRIBE $tablename";
            $result = mysqli_query($dbconn,$query);
            //coloms in array doen en op het scherm plakken
            while ($row = mysqli_fetch_row($result)){
                $collist[] = $row[0];
            }
            echo "<tr>";
            foreach($collist as $collom){
                //ID geven zodat de CSS ermee kan werken
                echo '<td id="colloms">'.$collom.'</td>';
            }
            echo "</tr>";

            $query = "SELECT * FROM $tablename";
            $result = mysqli_query($dbconn,$query);
            while ($row = $result->fetch_assoc()){
                echo '<tr>';
                foreach ($collist as $item){
                    //ID geven zodat de CSS ermee kan werken
                    echo '<td id="rows">'.$row[$item].'</td>';
                }
                echo '</tr>';
            }
        }else{
            exit("Table niet gevonden");
        }
    }
}