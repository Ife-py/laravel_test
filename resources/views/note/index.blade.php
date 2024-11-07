<x-app-layout>
    <div class="container py-12">
        <a href="{{ route('note.create') }}" class="btn btn-success">
            New Note
        </a>
        <div class="notes">
            @foreach ($notes as $note)
                <div class="card">
                    <div class="card-body">
                        {{ Str::words($note->note, 30)}}
                    </div> 
                    <div class="note-buttons">
                        <a href="{{ route('note.show',$note) }}" class="btn btn-primary">Views</a>
                        <a href="{{ route('note.edit',$note) }}" class="btn btn-secondary">Edit</a>
                        <form action="{{ route('note.destroy',$note ) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" style="float: right">Delete</button>
                        </form>
                    </div>
                </div>    
            @endforeach
            
        </div>

        {{ $notes->links() }}
    </div>
</x-app-layout>
  