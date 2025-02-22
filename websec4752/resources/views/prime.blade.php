<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Grid</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .number-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
            justify-content: center;
            max-width: 700px;
            margin: 20px auto;
        }
        .number-box {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            font-weight: bold;
            color: white;
            font-size: 16px;
        }
        .blue { background-color: #007bff; } /* Prime numbers in blue */
        .gray { background-color: #6c757d; } /* Non-prime numbers in gray */
    </style>
</head>
<body>

<div class="container mt-4 text-center">
    <h3 class="mb-3">Prime Numbers Grid (1-100)</h3>
    <div class="number-grid">
        @php
            function isPrime($num) {
                if ($num < 2) return false;
                for ($i = 2; $i <= sqrt($num); $i++) {
                    if ($num % $i == 0) return false;
                }
                return true;
            }
        @endphp

        @for ($i = 1; $i <= 100; $i++)
            <div class="number-box {{ isPrime($i) ? 'blue' : 'gray' }}">
                {{ $i }}
            </div>
        @endfor
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
