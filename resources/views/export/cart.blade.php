<?php
/**
 * @var \Illuminate\Support\Collection $cartItems
 * @var \Illuminate\Support\Collection|\App\Models\Dictionaries\Solution[] $cartSolutions
 */
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        .page-break {
            page-break-after: always;
        }

        body {
            font-family: 'DejaVu Sans', sans-serif;
        }
    </style>
</head>
<body>
<h1>Выбранные решения</h1>

@foreach($cartSolutions as $item)
    <h3>{{ $item->name }}</h3>
    <p>{{ $item->description }}</p>
    <ol>
        @foreach($item->functionalities as $functionality)
            <li>{{ $functionality->name }}</li>
        @endforeach
    </ol>
    <div class="page-break"></div>
@endforeach
</body>
</html>

