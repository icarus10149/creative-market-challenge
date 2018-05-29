<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Creative Market Code Challenge</title>
        
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
        <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    </head>
    <body>
        <div id="app">
            <section class="header section">
                <div class="container">
                    <h1 class="title is-3">Shop Message Board</h1>
                    <div class="columns">
                        <div class="column">
                            <div class="remarks-wrapper box">
                                @if(empty($remarks))
                                    <h2>No Remakrs Have Been Posted Yet - Be the First to Post!</h2>
                                @endif
                                @foreach($remarks as $remark)
                                    <div class="box">
                                        <article class="media">
                                            <div class="media-content">
                                                <div class="content">
                                                    <p>
                                                        <strong>{{$remark->username}}</strong> ~<i class="small">{{$remark->created_at->diffForHumans()}}</i>
                                                        <br>
                                                        {{$remark->remark}}
                                                    </p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                @endforeach                  
                            </div>
                        </div>
                        <div class="column is-one-third">
                            <remark-form></remark-form>
                            @if(count($remarkCount))
                            <div class="margin-top--10">
                                <div class="remark-counts-wrapper box">
                                    <h3 class="title is-5">Remark Counts</h3>
                                    @foreach($remarkCount as $rc)
                                        <li>
                                            <strong>{{$rc->username}}: </strong> {{$rc->count}}
                                        </li>
                                    @endforeach
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
        <!--<div class="container">-->
        <!--    <h1>Shop Message Board</h1>-->
            <!--<form method="POST" action="/remarks">-->
            <!--    {{ csrf_field() }}-->
            <!--    <div class="field">-->
            <!--        <label>Username</label>-->
            <!--        <input required type="text" name="username">-->
            <!--    </div>-->
            <!--    <div class="field">-->
            <!--        <label>Remark</label>-->
            <!--        <textarea required name="remark"></textarea>-->
            <!--    </div>-->
                <!--<input type="number" name="parent_remark_id">-->
            <!--    <button>Submit</button>-->
            <!--</form>-->
        <!--    <div class="columns">-->
        <!--        <div class="column is-three-quarters">-->
        <!--            <h2>Remarks</h2>-->
        <!--            @foreach($remarks as $remark)-->
        <!--                <hr>-->
        <!--                <p><strong>Username:</strong> {{$remark->username}}</p>-->
        <!--                <p><strong>Remark:</strong> {{$remark->remark}}</p>-->
        <!--                @if($loop->last)-->
        <!--                    <hr>-->
        <!--                @endif-->
        <!--            @endforeach-->
        <!--        </div>-->
        <!--        <div class="column is-one-quarter">-->
        <!--            <h2>Remark Counts</h2>-->
        <!--            <ul>-->
        <!--                @foreach($remarkCount as $rc)-->
        <!--                    <li>-->
        <!--                        <strong>{{$rc->username}}: </strong> {{$rc->count}}-->
        <!--                    </li>-->
        <!--                @endforeach-->
        <!--            </ul>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <script>
            // let csrfToken = {{ csrf_token() }};
            // window.Larvel.csrfToken =  csrfToken;
        </script>
        <script src="{{asset('/js/manifest.js')}}"></script>
        <script src="{{asset('/js/vendor.js')}}"></script>
        <script src="{{asset('/js/app.js')}}"></script>        
    </body>
</html>
