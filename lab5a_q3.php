<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
    // Function to generate a multiplication table
    function multiplication($multiplier) {
        $results = [];
        for ($i = 1; $i <= 12; $i++) {
            $results[] = [
                'no' => $i,
                'multiplier' => $multiplier,
                'answer' => $i * $multiplier
            ];
        }
        return $results;
    }

    // Call the function with multiplier 2
    $tableData = multiplication(2);
    ?>

    <h1>Multiplication Table for 2</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>
        <?php foreach ($tableData as $row) { ?>
        <tr>
            <td><?php echo $row['no']; ?></td>
            <td><?php echo $row['multiplier']; ?></td>
            <td><?php echo $row['answer']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
