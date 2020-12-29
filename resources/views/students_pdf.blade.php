<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Print Student Report</title>
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
        <h5>Students Data Report</h5>
    </center>
    
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Student Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone Number</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($students as $st)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $st->nama_siswa }}</td>
                <td>{{ $st->alamat }}</td>
                <td>{{ $st->email }}</td>
                <td>{{ $st->no_telp }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>