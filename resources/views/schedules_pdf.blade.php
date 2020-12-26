<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Print Schedule Report</title>
</head>
<body>
    <style type="text/css">
        table {
        	border-collapse: collapse;
            width: 100%;
            font-size: 9pt;
            border: 1px solid #999;
            color: #232323;
        }
        th, td {
            text-align: left;
            padding: 16px;
            font-size: 9pt;
            border: 1px solid #999;
            color: #232323;
        }
        tr:nth-child(even) {
	        background-color: #f2f2f2
        }
    </style>

    <center>
        <h5>Schedules Data Report</h5>
    </center>
    
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Theme</th>
                <th>Tutor</th>
                <th>Time per Session</th>
                <th>Time Schedule</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($schedules as $sd)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $sd->materi }}</td>
                <td>{{ $sd->pemateri }}</td>
                <td>{{ $sd->lama_pertemuan }}</td>
                <td>{{ $sd->waktu }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>