@extends('layouts._two_columns_left_sidebar')

@section('sidebar')
    @include('forum._sidebar')
@stop

@section('content')
    <div class="row forum">
        <div class="small-12 columns form">
            {{ Form::model($comment->resource) }}
                <fieldset>
                    <legend>Delete Article Comment</legend>

                    <p>
                        Are you sure that you want to delete this comment?
                    </p>

                    <div class="row">
                        {{ Form::button('Delete', ['type' => 'submit', 'class' => 'button']) }}
                    </div>
                </fieldset>
            {{ Form::close() }}
        </div>
    </div>
@stop