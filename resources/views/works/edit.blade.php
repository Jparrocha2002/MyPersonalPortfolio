<div class="modal fade" id="editModal{{$work->id}}" tabindex="-1" role="dialog" aria-labelledby="editModal{{$work->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModal{{$work->id}}">Edit Work</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('works.update', $work->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label>Logo</label>
                        <input type="file" name="logo" class="form-control-file" value="{{ $work->logo }}" >
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $work->name }}" >
                    </div>
                    <div class="form-group">
                        <label>Type</label>
                        <input type="text" name="type" class="form-control" value="{{ $work->type }}" >
                    </div>
                    <div class="form-group">
                        <label>Link</label>
                        <input type="text" name="link" class="form-control" value="{{ $work->link }}" >
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
