<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Tables</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styling -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .container {
            max-width: 900px;
        }
        .card {
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .card-header {
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
            font-weight: bold;
            text-align: center;
            font-size: 20px;
            padding: 10px;
        }
        .table {
            margin-bottom: 0;
        }
        .table th, .table td {
            text-align: center;
            font-size: 18px;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Multiplication Tables (1-10)</h2>

    <div class="row">
        @for ($i = 1; $i <= 10; $i++)
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Table of {{ $i }}
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Multiplication</th>
                                    <th>Result</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($j = 1; $j <= 10; $j++)
                                    <tr>
                                        <td>{{ $i }} × {{ $j }}</td>
                                        <td><strong>{{ $i * $j }}</strong></td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
