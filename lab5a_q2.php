<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q2</title>
</head>
<body>
    <?php 
        $students = array(
            "Ldanesh" => array("Program" => "BIS", "Age" => 24),
            "Lakshman" => array("Program" => "BIS", "Age" => 23),
            "Tarven" => array("Program" => "BIW", "Age" => 23),
            "Tharshan" => array("Program" => "BIT", "Age" => 28)
        );
    ?>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $name => $details): ?>
            <tr>
                <td><?php echo $name; ?></td>
                <td><?php echo $details['Program']; ?></td>
                <td><?php echo $details['Age']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
