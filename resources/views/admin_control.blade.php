<!DOCTYPE html>
<html>
<head>
    <title>Registered Player List</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
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
		.btn {
		float: right;
		color:
	}
		
    </style>
</head>
<body>
    <div class="container">
        <h1>Registered Player List</h1>
		<div class="col-xs-6">
			<a href="http://127.0.0.1:8000/registration" class="btn" data-toggle="modal">Add New Player</a>
		</div>
        <table>
            <tr>
                <th>Registered ID</th>
                <th>Player Name</th>
                <th>Player User ID</th>
                <th>Role in Game</th>
				<th>Actions</th>
            </tr>
            @foreach($players as $player)
            <tr>
                <td>{{$player['id']}}</td>
                <td>{{$player['name']}}</td>
                <td>{{$player['uid']}}</td>
                <td>{{$player['role']}}</td>
				<td>
					<a href={{"edit/".$player['id']}} class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
					<a href={{"delete/".$player['id']}} class="delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
				</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
