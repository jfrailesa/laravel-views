<!-- resources/views/demo/array.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Array Example - Odd Rows Colored</title>
    <style>
        .odd-row { background-color: lightgreen; } /* odd rows */
        .even-row { background-color: white; }      /* even rows */
    </style>
</head>
<body>
    <h1>All Zoo Animals</h1>

    <table>
        <tbody>
            @foreach ($animals as $index => $animal)
                @if ((($index + 1) % 2) == 1)
                    {{-- 1-based odd row --}}
                    <tr class="odd-row">
                        <td>{{ $index }}</td>
                        <td>{{ $animal }}</td>
                    </tr>
                @else
                    {{-- even row --}}
                    <tr class="even-row">
                        <td>{{ $index }}</td>
                        <td>{{ $animal }}</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</body>
</html>
