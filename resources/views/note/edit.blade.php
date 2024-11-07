<x-app-layout>
    <div class="container">
        <h1>Edit your note</h1>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('note.update',$note) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <textarea name="note" rows="10"class="form-control" placeholder="Enter your note here">
                        {{ $note->note }}
                    </textarea>
                    <div class="note-button">
                        <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel</a>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</x-app-layout >
