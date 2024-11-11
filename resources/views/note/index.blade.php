@extends('layouts.app')
@section('content')
    <div class="container py-12">
        <a href="{{ route('note.create') }}" class="btn btn-success mb-3">
            New Note
        </a>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <table class="table ">
                            <tr>
                                <th>Note</th>
                                <th></th>
                            </tr>
                            <tbody>
                                @foreach ($notes as $note)
                                <tr>
                                    <td>{{ Str::words($note->note, 30)}}</td>
                                    <td>
                                        <form action="{{ route('note.destroy',$note ) }}" method="post">
                                            <a href="{{ route('note.show',$note) }}" class="btn btn-primary">Views</a>
                                            <a href="{{ route('note.edit',$note) }}" class="btn btn-secondary">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-3"></div>

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
