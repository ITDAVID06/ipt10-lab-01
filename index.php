<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: rgb(100,20,20);
        }
        .container {
            display: flex;
            width: 80%;
            max-width: 1000px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .image-container {
            flex: 1;
            background: url('https://www.auf.edu.ph/images/BYA.jpg') no-repeat center center;
            background-size: cover;
            min-height: 200px;
        }
        .form-container {
            flex: 1;
            padding: 20px;
            background-color: white;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-size: 12px;
        }
        input[type="text"],
        input[type="email"],
        input[type="date"],
        textarea,
        select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #000;
            border-radius: 12px;
        }
        input[type="submit"],
        input[type="reset"] {
            padding: 10px 15px;
            margin: 5px 5px 5px 0;
            cursor: pointer;
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        h1 {
            margin-top: 0;
        }
        .radio-group {
            display: flex;
            align-items: center;
        }

        .radio-group input[type="radio"] {
            margin: 0 5px 0 0;
        }

        .radio-group label {
            margin: 0 15px 0 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="image-container"></div>
        <div class="form-container">
            <div class="logo">
                <img src="https://www.auf.edu.ph/images/auf-logo.png" alt="AUF Logo" width="40px">
            </div>
            <h2 style="text-align:center">Registration Form</h2>
            <form action="summary.php" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" id="dob" name="dob">
                </div>
                <div class="form-group">
                    <label>Sex:</label>
                    <div class="radio-group">
                        <input type="radio" id="male" name="sex" value="Male">
                        <label for="male">Male</label>
                        <input type="radio" id="female" name="sex" value="Female">
                        <label for="female">Female</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <textarea id="address" name="address"></textarea>
                </div>
                <div class="form-group">
                    <label for="department">College Department:</label>
                    <select id="department" name="department">
                        <option value="IT">Information Technology</option>
                        <option value="Engineering">Engineering</option>
                        <option value="Business">Business</option>
                        <option value="Arts">Arts</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="program">Program:</label>
                    <input type="text" id="program" name="program">
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile Number:</label>
                    <input type="text" id="mobile" name="mobile">
                </div>
                <input type="reset" value="Reset">
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>
