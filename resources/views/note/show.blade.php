@extends('layouts.app')
@section('content')
<div class="container">
        <div class="card">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="card-header">
                        <b><h2>Note: {{ $note->created_at }}</h2></b>
                    </div>

                    <div class="card-body">
                        {{ $note->note }}
                        <form action="{{ route('note.destroy',$note ) }}" method="post">
                            @csrf
                            <a href="{{ route('note.edit',$note) }}" class="btn btn-success">Edit</a>
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>

            <div class="note">
                <div class="note-body">

                </div>
            </div>
    </div>
@endsection
