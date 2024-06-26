<!-- resources/views/laporan_absensi_mapel.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Peminjaman Buku Perbulan</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Laporan Peminjaman Buku Perbulan</h1>
    <table>
        <thead>
            <tr>
                <th>borrowing_start</th>
                <th>borrowing_end</th>
                <th>book_id</th>
                <th>user_id</th>
                <th>amount_borrowed</th>
                <th>status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataList as $data)
                <tr>
                    <td>{{ $data['borrowing_start'] }}</td>
                    <td>{{ $data['borrowing_end'] }}</td>
                    <td>{{ $data['book_id'] }}</td>
                    <td>{{ $data['user_id'] }}</td>
                    <td>{{ $data['amount_borrowed'] }}</td>
                    <td>{{ $data['status'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>