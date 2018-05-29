<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Creative Market Code Challenge</title>

        <!-- Fonts -->
        <!--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">-->
        <link rel="stylesheet" type="text/css" href="https://d3ui957tjb5bqd.cloudfront.net/css/global.css?96dd6e96c0">        
    </head>
    <body>
        <div class="container">
            <h1>Hello World</h1>
            @foreach($remarks as $remark)
                <i>{{$remark->id}}</i>
                <p>{{$remark->username}}</p>
                <p>{{$remark->remark}}</p>
            @endforeach
        </div>
    </body>
</html>
