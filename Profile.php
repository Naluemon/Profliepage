<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1024">
    <title>TIMMY.com</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Profile.css">
    <script src="js/bootstrap.bundle.min.js"></script> 
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
                    <a class="nav-link profile" href="#">Profile</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="headpf">Profile</div>
    <div class="container">
        <form action="#" method="POST">
            <div class="form-group">
                <label for="firstname" >FirstName :</label>
                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="FirstName">
            </div>

            <div class="form-group">
                <label for="lastname">LastName :</label>
                <input type="text" id="lastname" name="lastname" class="form-control" placeholder="LastName">
            </div>

            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="password123">
            </div>

            <div class="form-group">
                <label for="status">Status :</label>
                <input type="text" id="status" name="status" class="form-control" placeholder="User">
            </div>
            <div style="text-align: right">
            <button type="Edit" class="btn btn-primary">Edit</button>
</div>
        </form>
    </div>
</div>


</body>


</html>