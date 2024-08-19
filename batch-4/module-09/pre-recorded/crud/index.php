<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Table</title>

    <style>
        body {
            background-color: #e5e8e8;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .main_container {
            background-color: #d5f5e3;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 800px;
        }

        .container h2 {
            margin-top: 0;
            font-size: 24px;
            color: #333;
        }

        .container p {
            color: #666;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ccc;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #58d68d;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        button {
            padding: 5px 10px;
            background-color: #58d68d;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #28b463;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #58d68d;
            padding: 10px;
            border-radius: 8px 8px 0 0;
            margin-bottom: 20px;
        }

        .navbar-links ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .navbar-links ul li {
            margin-right: 20px;
        }

        .navbar-links ul li a {
            color: white;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .navbar-links ul li a:hover {
            color: #007bff;
        }

        .navbar-auth a {
            color: white;
            text-decoration: none;
            padding: 5px 10px;
            background-color: #28b463;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .navbar-auth a:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="main_container">
        <?php include('includes/nav.php') ?>
        <div class="container">
            <h2>Student Information Table</h2>
            <p>Below is a list of students:</p>

            <table>
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Roll</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Doe</td>
                        <td>101</td>
                        <td><button>Details</button></td>
                    </tr>
                    <tr>
                        <td>Jane Smith</td>
                        <td>102</td>
                        <td><button>Details</button></td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>