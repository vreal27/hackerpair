
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome to HackerPair</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
        <h1>Welcome to HackerPair</h1>
        <p>
            <a href="{{ route('events.show', ['id' => 42]) }}">Laravel Hacking and Coffee
            </a>
        </p>
        <ul>
            @foreach ($events as $event)
            <li>

                {{ $event }}
                @if (strpos($event, 'Laravel') !== false)
                    (sweet framework!)
                @elseif (strpos($event, 'Raspberry') !== false)
                    (Love me some Raspberry Pi!)
                @else
                    (I don't know much about this one!)
                @endif

            </li>
            @endforeach 
        </ul>
        <!-- <table>
        @foreach ($events as $event)

            @include('partials._row', ['event' => $event])

        @endforeach
        </table> -->
        

    </body>
</html>
