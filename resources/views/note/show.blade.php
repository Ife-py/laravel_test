<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <b><h2>Note: {{ $note->created_at }}</h2></b>
            </div>
            
            <div class="card-body">
                {{ $note->note }}
                <a href="{{ route('note.edit',$note) }}" class="btn btn-success">Edit</a>
                <form action="{{ route('note.destroy',$note ) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>
            </div>
            <div class="note">
                <div class="note-body">
                    
                </div>
            </div>
    </div>
</x-app-layout>
