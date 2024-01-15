<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #000000;
            padding: 8px;
            text-align: left;
        }

        thead {
            background-color: #c9c9c9;
        }

        .table-responsive {
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <div class="table-responsive">
        <h1>List Pesanan, Tanggal: {{ now()->format('d/m/Y') }}</h1>
        <table class="table" id="alldata">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Layanan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($booking as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->service->service }}</td>
                        <td>{{ $item->status->status }}</td>
                        <td>{{ $item->created_at->format('d/m/Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</body>
</html>
