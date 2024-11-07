<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header bg bg-primary">
                <h1>Create new notes </h1>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('note.store' ) }}" method="post">
                @csrf
                <textarea name="note" rows="10" class="form-control" placeholder="Enter your note here"></textarea>
                <div class="card-buttons">
                    <a href="{{ route('note.index') }}" class="btn btn-danger">Cancel</a>
                    <button class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
       
    </div>
</x-app-layout>
