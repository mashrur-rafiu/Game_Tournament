<!DOCTYPE html>
<html>
<head>
    <title>CODM Tournament Registration</title>
    <style>
        body {
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    background-color: #f1f1f1;
    padding: 20px;
}

header {
    text-align: center;
    margin-bottom: 20px;
}

.logo img {
    height: 70px;
    width: auto;
}

.form-section {
    text-align: center;
    margin-bottom: 20px;
}

h2 {
    margin-bottom: 10px;
}

.input-group {
    margin-bottom: 10px;
}

label {
    display: inline-block;
    width: 100px;
    text-align: right;
    margin-right: 10px;
}

input[type="text"] {
    width: 200px;
    padding: 5px;
}

input[type="submit"] {
    margin-top: 10px;
    padding: 10px 20px;
    background-color: #555;
    color: #fff;
    border: none;
    cursor: pointer;
}

.footer {
    text-align: center;
}
    </style>
</head>

<body>
    <div class="container">
        <header>
            <div class="logo">
            <img src="{{ URL('images/codm_logo.png') }}">
            </div>
            <h1>Call of Duty: Mobile</h1>
        </header>

        <div class="form-section">
            <h2>Player Registration</h2>
            <br>

            <form action="registration" method="POST">
                @csrf
                <div class="input-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Full Name" required>
                </div>

                <div class="input-group">
                    <label for="player_id">Player ID</label>
                    <input type="text" name="uid" placeholder="UID" required>
                </div>
                <div class="input-group">
                    <label for="roles">Role in Game</label>
                    <input type="text" name="role" placeholder="Roles" required>
                </div>
                
                <button type="submit" >Register</button>                
            </form>
        </div>
        
        <div class="footer">
            <p>Contact: <a href="tel:+8801581400272" style="text-decoration:none; color:black;"><b>Click to Call</b>
            </a> | <a href="mailto:mashrur15-3080@diu.edu.bd" style="text-decoration:none; color:black;"><b>Email</b></a></p>
            <p>&copy; 2023 Mashrur Rafiu. All rights reserved. | Developed by Mash</p>
        </div>
    </div>
</body>
</html>