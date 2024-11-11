@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header mb-3">
                <h1>Edit your note</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('note.update',$note) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <textarea name="note" rows="10"class="form-control" placeholder="Enter your note here">
                        {{ $note->note }}
                    </textarea>
                    <div class="note-button">
                        <a href="{{ route('note.index') }}" class="btn btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
