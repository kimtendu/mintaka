<?php
/*
 * This is example how we can build chess board
 * We have got 2 ways.
 */

// $total = true;
for ($row = 1; $row <= 8; $row++) {
    echo '<tr>';

    for ($column = 1; $column <= 8; $column++) {
        $total = $row + $column;
        if ($total % 2 == 0) {
            echo "<td height=35px width=35px bgcolor=black> </td>";
        } else {
            echo "<td height=35px width=35px bgcolor=white> </td>";
        }
        $total = !$total;

    }
    // $total = !$total;
    echo '</tr>';

}

// echo "<td height=35px width=35px bgcolor=black> </td>"
?>

</table>