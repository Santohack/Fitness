<!DOCTYPE html>
<html>

<head>
    <style>
    a:link,
    a:visited {
        background-color: #f44336;
        color: white;
        padding: 14px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
    }

    a:hover,
    a:active {
        background-color: red;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2
    }

    th {
        background-color: #4CAF50;
        color: white;
    }
    </style>
</head>

<body>

    <h2>user details</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>EAMIL</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th>RE-PASSWORD</th>

            <th>Update</th>

        </tr>
        <?php include 'conn.php';
  $q = 'SELECT * FROM register';
  $result = mysqli_query($connection,$q);
  while ($row = mysqli_fetch_array($result)){

  ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['cpassword']; ?></td>

            <td> <a href="update.php?GetID<?php echo $row['id'];?>">Update</a></tb>

        </tr>
        <?php } ?>
    </table>

</body>

</html>