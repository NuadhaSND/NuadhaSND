@extends('layouts.app')

@if (Auth::guest())

    @section ('title')

        Edit Publication {{$publication->id}}

    @endsection

    @section ('content') 

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">Error</div>
                        <div class="panel-body">
                            You're not allowed to acess this section, please log in.
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection 

@else 

    @section ('title')

        Edit Publication {{$publication->id}}

    @endsection

    @section ('content')  

        <div class="col-md-6 col-md-offset-3">
            <h2> Edit publication {{$publication->id}} </h2>

            <form action="/publications/edit/{{$publication->id}}" method="POST">

                {{ csrf_field() }}

                <input name="id" type="hidden" value="{{ Auth::user()->id }}">

                <div class="form-group">
                    
                    <textarea name="publication_text" class="form-control required "> {{$publication->publication_text}} </textarea>

                </div>

                <div class="form-group">

                    <button type="submit" class="btn btn-primary" style="float: right;"> Edit Publication </button>

                </div>

            </form>

            @if (count($errors))

                <ul>
                    
                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            @endif

        </div>  

    @endsection

@endif