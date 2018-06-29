<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO masomo3 (username, ADM, password, EXAM, RESULTS, OVERALL)
VALUES ('Layton Hensley', '7769/20', '654321', 'OPENER', 'MATHS A ENG C- BIO C SWA A COMP B+', 'B');"; 
$sql .= "INSERT INTO masomo3 (username, ADM, password, EXAM, RESULTS, OVERALL)
VALUES ('Koen Summers', '6541/19', '987121', 'MID-TERM1', 'MATHS D ENG B+ BIO D SWA E COMP C+', 'C');";
$sql .= "INSERT INTO masomo3 (username, ADM, password, EXAM, RESULTS, OVERALL)
VALUES ('Alani Cochran', '7631/20', '654313', 'END-TERM1', 'MATHS B ENG A- BIO B- SWA B COMP C-', 'B-');";
$sql .= "INSERT INTO masomo3 (username, ADM, password, EXAM, RESULTS, OVERALL)
VALUES ('Itzel Allen', '3415/18', '275219', 'OPENER', 'MATHS A ENG B+ BIO A- SWA A COMP A', 'A');";
$sql .= "INSERT INTO masomo3 (username, ADM, password, EXAM, RESULTS, OVERALL)
VALUES ('Nola Olson', '1596/17', '925867', 'MID-TERM2', 'MATHS A- ENG C+ BIO C SWA A COMP D+', 'C');";
$sql .= "INSERT INTO masomo3 (username, ADM, password, EXAM, RESULTS, OVERALL)
VALUES ('Nathalia Stanley', '2341/17', '385129', 'END-TERM2', 'MATHS B+ ENG C BIO C+ SWA D+ COMP B', 'B-');";
$sql .= "INSERT INTO masomo3 (username, ADM, password, EXAM, RESULTS, OVERALL)
VALUES ('Mitchell Leblanc', '2043/17', '406827', 'OPENER', 'MATHS A ENG B+ BIO C+ SWA A- COMP B+', 'B');";
$sql .= "INSERT INTO masomo3 (username, ADM, password, EXAM, RESULTS, OVERALL)
VALUES ('Jayleen Finley', '3679/18', '589823', 'MID-TERM3', 'MATHS A ENG A BIO B+ SWA A COMP B+', 'A-');";
$sql .= "INSERT INTO masomo3 (username, ADM, password, EXAM, RESULTS, OVERALL)
VALUES ('Parker Osborn', '4158/19', '921537', 'END-TERM3', 'MATHS B- ENG B BIO C SWA B- COMP A', 'B+');";
$sql .= "INSERT INTO masomo3 (username, ADM, password, EXAM, RESULTS, OVERALL)
VALUES ('Dayana Shannon', '1920/17', '432952', 'FINAL', 'MATHS A- ENG A BIO A- SWA A COMP A', 'A')";

if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>