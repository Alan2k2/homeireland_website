<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed; /* Ensures content fits */
            word-wrap: break-word; /* Prevents text overflow */
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            font-size: 10px; /* Adjust for PDF clarity */
        }

        th {
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
        }

        /* Prevent table from breaking awkwardly */
        tr {
            page-break-inside: avoid;
        }

        /* If table is too long, force page break */
        .page-break {
            page-break-before: always;
        }
    </style>
</head>
<body>
    <h1>User Report</h1>
    <p><strong>Total Amount (All Users):</strong> €{{ $totalAmount }}</p>
    
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Type</th>
                <th>Invoice ID</th>
                <th>Payment ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Total Orders</th>
                <th>Total Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $key => $user)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->unique_id }}</td>
                <td>{{ $user->order_id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->total_orders }}</td>
                <td>€{{ $user->total_amount }}</td>
            </tr>
            
            <!-- Force page break every 10 rows -->
            @if(($key + 1) % 10 == 0)
            <tr class="page-break"></tr>
            @endif
            
            @endforeach
        </tbody>
    </table>
</body>
</html>
