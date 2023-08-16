<!DOCTYPE html>
<html>
<head>
    <title>Registered Player List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 60vh;
            margin: 0;
        }

        .container {
            background-color: #f1f1f1;
            padding: 20px;
            width: 50%;
        }

        h1 {
            color: #336699;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            text-align: center;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        th {
            background-color: #336699;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        td {
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registered Player List</h1>
        <table>
            <tr>
                <th>Player Name</th>
                <th>Player User ID</th>
                <th>Role in Game</th>
            </tr>
            @foreach($players as $player)
            <tr>
                <td>{{$player['name']}}</td>
                <td>{{$player['uid']}}</td>
                <td>{{$player['role']}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
