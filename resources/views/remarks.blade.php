<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Creative Market Code Challenge</title>

        <link rel="stylesheet" type="text/css" href="https://d3ui957tjb5bqd.cloudfront.net/css/global.css?96dd6e96c0">
    </head>
    <body>
        <div class="container">
            <h1>Shop Message Board</h1>
            <form method="POST" action="/remarks">
                {{ csrf_field() }}
                <div class="field">
                    <label>Username</label>
                    <input required type="text" name="username">
                </div>
                <div class="field">
                    <label>Remark</label>
                    <textarea required name="remark"></textarea>
                </div>
                <!--<input type="number" name="parent_remark_id">-->
                <button>Submit</button>
            </form>
            <div class="columns">
                <div class="column is-three-quarters">
                    <h2>Remarks</h2>
                    @foreach($remarks as $remark)
                        <hr>
                        <p><strong>Username:</strong> {{$remark->username}}</p>
                        <p><strong>Remark:</strong> {{$remark->remark}}</p>
                        @if($loop->last)
                            <hr>
                        @endif
                    @endforeach
                </div>
                <div class="column is-one-quarter">
                    <h2>Remark Counts</h2>
                    <ul>
                        @foreach($remarkCount as $rc)
                            <li>
                                <strong>{{$rc->username}}: </strong> {{$rc->count}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
