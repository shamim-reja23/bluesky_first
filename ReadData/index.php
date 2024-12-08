<?php

$xml = simplexml_load_file("data.xml") or die("Error: Cannot create object");

echo "<table border='1' style='border-collapse: collapse; width: 50%;'>";
echo "<tr><th>Name</th><th>Department</th><th>Salary</th></tr>";

foreach ($xml->employee as $employee) {
    echo "<tr>";
    echo "<td>" . $employee->name . "</td>";
    echo "<td>" . $employee->department . "</td>";
    echo "<td>" . $employee->salary . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
