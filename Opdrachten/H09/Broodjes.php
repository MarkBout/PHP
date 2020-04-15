<?php
class Broodjes {
    private $conn;

    function __construct()
    {
        $this->conn = mysqli_connect("localhost", "root", "", "phpcursus", "3306");
        if ($this->conn -> connect_errno) {
            echo "Failed to connect to MySQL: " . $this->conn -> connect_error;
            exit();
        }

        if ($this->conn->ping()) {
            echo "";
        } else {
            echo "Error: %s\n", $this->conn->error;
        }
    }

    public function getConn()
    {
        return $this->conn;
    }

    function displayBrood(){
        $query = "SELECT * FROM broden";
        $result = $this->conn->query($query);
        while ($broden = $result->fetch_assoc()){
            echo '<tr>';
            echo '<td>' . $broden['meel'] . '</td>';
            echo '<td>' . $broden['vorm'] . '</td>';
            echo '<td>' . $broden['gewicht'] . '</td>';
            echo '</tr>';
        }
    }

    function addBroodjes($test, $vorm, $gewicht){
        $query = "INSERT INTO broden (meel,vorm,gewicht) VALUES ('".$test."','".$vorm."','".$gewicht."')";
        mysqli_query($this->conn,$query) or die("mysql_query failed - Error: " . mysqli_error($this->conn));
    }
}