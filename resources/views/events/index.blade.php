<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Demo</title>
    </head>
    <body>
       <h1>Events</h1>
        <?php dump($events);  ?>
        <ul>
            <?php foreach($events as $event): ?>
            <li><?php echo $event ?></li>
            <?php endforeach; ?>
        </ul>
        <ul>
        @foreach($events as $event)
            <li>{{ $event }}</li>
            @endforeach
        </ul>
    </body>
</html>
