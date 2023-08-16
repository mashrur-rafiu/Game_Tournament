<!DOCTYPE html>
<html>
<head>
    <title>Update Player</title>
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
    </style>
</head>

<body>
    <div class="container">
        <header>
            <h2>Update Player</h2>
        </header>

        <div class="form-section">
            <br>

            <form action="/edit" method="POST">
                @csrf
                <div class="input-group">
                    <input type="hidden" name="id" value="{{$data['id']}}">
                </div>
                <div class="input-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{$data['name']}}" required>
                </div>

                <div class="input-group">
                    <label for="player_id">Player ID</label>
                    <input type="text" name="uid" value="{{$data['uid']}}" required>
                </div>
                <div class="input-group">
                    <label for="roles">Role in Game</label>
                    <input type="text" name="role" value="{{$data['role']}}" required>
                </div>
                
                <button type="submit" >Update</button>                
            </form>
        </div>
    </div>
</body>
</html>