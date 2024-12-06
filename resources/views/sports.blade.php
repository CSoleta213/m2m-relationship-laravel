<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        table, th, td {
            border: 1px solid #000;
            border-collapse: collapse;
        }

        table {
            width: 100%;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Player</th>
            <th>Roles</th>
        </tr>
        @foreach ($sports as $sport)
            <tr>
                <td>{{ $sport->sport }}</td>
                <td>
                    @foreach ($sport->positions as $position)
                        {{ $position->position }} <br>
                    @endforeach
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>

