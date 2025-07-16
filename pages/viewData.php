<?php

require "../includes/config.php";
$obj = new db();
$user = $obj->viewData();

//print data coming from database
//print_r($user)

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PROJECT</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background-color: #f9f9f9;
            color: #333;
        }

        /* Heading */
        label[for="heading"] {
            font-size: 2rem;
            font-weight: 700;
            text-align: center;
            margin: auto;
            color: #222;
        }

        /* Horizontal line */
        hr {
            width: 60%;
            margin: 20px auto;
            border: 1px solid #ddd;
        }

        /* Container */
        .container {
            width: 90%;
            max-width: 1000px;
            margin: 30px auto;
            background-color: #fff;
            padding: 30px;
            border: 1px solid #eee;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        table th,
        table td {
            padding: 12px 16px;
            border: 1px solid #ddd;
            text-align: center;
            font-size: 0.95rem;
        }

        table th {
            background-color: #007bff;
            color: white;
            font-weight: 600;
            text-transform: uppercase;
        }

        table tr:nth-child(even) {
            background-color: #f4f8ff;
        }

        table tr:hover {
            background-color: #eef6ff;
        }

        /* Action links */
        table a {
            color: #007bff;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        table a:hover {
            color: #0056b3;
        }

        /* Go Back Button */
        .goBack {
            display: inline-block;
            margin: 0 auto;
            padding: 10px 25px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            font-weight: 500;
            border-radius: 6px;
            transition: background-color 0.3s;
        }

        .goBack:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <center><label for="heading">Crud Using PDO</label></center>
    <hr>
    <div class="container">
        <form method="post">
            <table border="1">
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Mobile Number</td>
                    <td>Action</td>
                </tr>
                <?php foreach ($user as $data) {
                ?>
                    <tr>
                        <td><?php echo $data['id']; ?></td>
                        <td><?php echo $data['name']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><?php echo $data['mobile']; ?></td>
                        <td>
                            <a href="viewData.php?delete=<?php echo $data['id']; ?>">Delete</a>&nbsp;|
                            <a href="updateData.php?update=<?php echo $data['id']; ?>">Update</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
            <center><a href="../index.php" class="goBack">Go Back</a></center>
        </form>
    </div>
</body>

</html>

<?php

if (isset($_REQUEST['delete'])) {
    $id = $_REQUEST['delete'];
    $obj->deleteData($id);
    header('Location: viewData.php');
}

?>