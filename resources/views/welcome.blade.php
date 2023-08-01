<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database DBF</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="flex flex-col">
        @foreach ($dataNum as $item)
            {{ $item['No'] }}
        @endforeach
        {{-- {{ print_r($dataNum) }} --}}
    </div>
</body>

</html>
