@extends('layouts.app')

@section ('title')

    Publication {{$publication->id}}

@endsection

@section ('content')

    <div class="col-md-8 col-md-offset-2">

        <h1>{{$publication->publication_text}}</h1>
        <h2>Made by: {{$publication->user->name}}</h2>    
        <br>
        <hr>    

        <h2> Comments </h2>

        <ul class="list-group">

            @if (count($comments) === 0)

                <li class="list-group-item"> No Comments have been made.</li>

            @endif

            <?php $a=0; ?>

            @foreach($comments as $comment)

                <?php $a++; ?>

                <li class="list-group-item" style="font-size: 25px"> 

                    {{$a}} - {{$comment->comment_text}} <div class="pull-right"> Made by: {{$comment->user->name}} </div>

                 </li> 

            @endforeach

        </ul>

        <br>
        <hr>

        @if (Auth::guest())

        @else

            <h2> Add a new Comment </h2>

            <form action="/publications/{{$publication->id}}/comment" method="POST">

                {{ csrf_field() }}

                <input name="id" type="hidden" value="{{ Auth::user()->id }}">
                
                <input type="hidden" name="publication_id" value="{{$publication->id}}" />

                <div class="form-group">
                    
                    <textarea name="comment_text" class="form-control required "> </textarea>

                </div> 

                <div class="form-group">

                    <button type="submit" class="btn btn-primary" style="float: right;"> Add Comment </button>

                </div>

            </form>

            @if (count($errors))

                <ul>
                    
                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            @endif

        @endif

    </div>



@endsection