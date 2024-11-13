@extends('layouts.app')
@section('content')
    <div class="container py-12">
        <a href="{{ route('note.create') }}" class="btn btn-success mb-3">
            New Note
        </a>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @foreach ($notes as $note)
                    <div class="col-md-4 mb-3">
                        <div class="card mb-3">
                            <div class="card-body bg-warning">
                                {{ Str::words($note->note, 30)}}

                                <form action="{{ route('note.destroy',$note ) }}" method="post">
                                    <a href="{{ route('note.show',$note) }}" class="btn btn-primary">Views</a>
                                    <a href="{{ route('note.edit',$note) }}" class="btn btn-secondary">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>

                {{-- <div class="note-buttons">
                    <a href="{{ route('note.show',$note) }}" class="btn btn-primary">Views</a>
                    <a href="{{ route('note.edit',$note) }}" class="btn btn-secondary">Edit</a>
                    <form action="{{ route('note.destroy',$note ) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" style="float: right">Delete</button>
                    </form>
                </div> --}}
            </div>
        </div>
        {{ $notes->links() }}
    </div>

@endsection
