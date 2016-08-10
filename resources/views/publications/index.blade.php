@extends('layouts.app')

@section ('title')

Publications

@endsection

@section ('content')  

    <div class="col-md-6 col-md-offset-3">

    <h1> Publications </h1> 

       <ul class="list-group">

            @if (count($publications) === 0)

            <li class="list-group-item"> No publications have been made.</li>

            @endif

            <?php $a=0; ?>

            @foreach($publications as $publication)

            <?php $a++; ?>
                
                <li class="list-group-item"> 
                    <a href="/publications/{{$publication->id}}">
                         {{$a}} - {{$publication->publication_text}} 
                    </a> 
                   @if (Auth::guest())

                   @elseif ( Auth::user()->id == $publication->user_id )
                        <a href="/publications/delete/{{$publication->id}}" rel="modal:open">
                            <i class="fa fa-trash-o fa-lg pull-right" ></i> 
                        </a>

                        <a href="/publications/edit/{{$publication->id}}">
                            <i class="fa fa-pencil-square-o fa-lg pull-right" ></i> 
                        </a>   
                    @endif                
                </li> 

            @endforeach

        </ul>
      
        <hr>

         @if (Auth::guest())

         @else

            <h2> Add a new publication </h2>

            <form action="/publications/new" method="POST">

                {{ csrf_field() }}

                <input name="id" type="hidden" value= "{{ Auth::user()->id }}">

                <div class="form-group">
                    
                    <textarea name="publication_text" class="form-control required "> </textarea>

                </div>

                <div class="form-group">

                    <button type="submit" class="btn btn-primary" style="float: right;"> Add Publication </button>

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