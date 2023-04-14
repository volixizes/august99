<?php
include "db_conn.php";

$sql = "SELECT * FROM books";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
?>
        <tr>
            <td><?php echo $row['title']; ?> </td>
            <td><?php echo $row['isbn']; ?> </td>
            <td><?php echo $row['author']; ?> </td>
            <td><?php echo $row['publisher']; ?> </td>
            <td><?php echo $row['year_published']; ?> </td>
            <td><?php echo $row['category']; ?> </td>
            <td>
                <button class="btn btn-primary">Edit</button>
                <button class="btn btn-danger">Delete</button>
            </td>
        </tr>

<?php
    }
} else {
    echo "<tr><td>No result found!</td></tr>";
}

mysqli_close($conn);
?>
