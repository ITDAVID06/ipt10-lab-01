<?php
if (empty($_POST['name']) || empty($_POST['email'])) {
    header('Location: register.php');
    exit();
}

$name = htmlspecialchars($_POST['name']);
$dob = htmlspecialchars($_POST['dob']);
$sex = htmlspecialchars($_POST['sex']);
$email = htmlspecialchars($_POST['email']);
$address = htmlspecialchars($_POST['address']);
$department = htmlspecialchars($_POST['department']);
$program = htmlspecialchars($_POST['program']);
$mobile = htmlspecialchars($_POST['mobile']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summary Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 50%;
            margin: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .male {
            background-color: blue;
            color: white;
        }
        .female {
            background-color: red;
            color: white;
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="https://www.auf.edu.ph/images/auf-logo.png" alt="AUF Logo" width="40px">
        </div>
        <h1 style="text-align:center">Registration Summary</h1>
        <table>
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Name</td>
                <td class="<?php echo strtolower($sex); ?>"><?php echo $name; ?></td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td><?php echo $dob; ?></td>
            </tr>
            <tr>
                <td>Sex</td>
                <td><?php echo $sex; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo $address; ?></td>
            </tr>
            <tr>
                <td>College Department</td>
                <td><?php echo $department; ?></td>
            </tr>
            <tr>
                <td>Program</td>
                <td><?php echo $program; ?></td>
            </tr>
            <tr>
                <td>Mobile Number</td>
                <td><?php echo $mobile; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
