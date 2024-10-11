<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIMMY.com</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script> 
    <style>
        h1 {
            background-color: white;
            text-align: left;
            font-family: Arial, sans-serif;
            font-size: 75px;
            color: #003366; 
            margin-top: 50px;
            margin-left: 300px;
        }
        .navbar {
            background-color: #002953; /* สีน้ำเงินเข้ม */
            padding-right: 10px;
        }
        .navbar-brand {
            color: white !important; /* เปลี่ยนสีลิงก์เป็นสีขาว */
            font-size: 35px;
            font-weight: bold;
            margin-left: 20px;
        }
        .nav-link {
            color: white !important; /* เปลี่ยนสีลิงก์เป็นสีขาว */
            font-size: 20px;
            font-weight: bold;
            margin-right: 50px;       
        }
        .btn-start {
            background-color: #FFCC00; /* สีเหลือง */
            border: none;
            margin-top: 30px;
            margin-left: 1300px;
            padding: 10px 40px;
            font-size: 18px;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .btn-start:hover {
            background-color: #FFCC00; /* ยังคงเป็นสีเหลืองเดิมเมื่อชี้เมาส์ */
            box-shadow: 0px 8px 15px rgba(128, 128, 128, 0.5); /* เพิ่มเงาสีเทาเมื่อชี้เมาส์ */
            transform: translateY(-2px); /* ยกปุ่มขึ้นเล็กน้อยเมื่อชี้เมาส์ */
            cursor: pointer; /* แสดงรูปมือเพื่อบ่งบอกว่าปุ่มสามารถคลิกได้ */
        }
        .navbar-nav {
            margin-right: 30px; /* เพิ่มระยะห่างจากขอบขวา */
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#">TIMMY.com</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto"> <!-- เปลี่ยน ml-auto เป็น ms-auto -->
            <li class="nav-item">
                <a class="nav-link" href="#">Calendar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Timer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Stats</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
            </li>
        </ul>
    </div>
</nav>

<h1>Welcome to...</h1>
<h1>the Multiplication Task</h1>
<h1>Management Table.</h1>
<div><a href="Formlogin.html" class="btn btn-start">Start</a></div>

</body>
</html>
