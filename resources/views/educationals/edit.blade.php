<div class="modal fade" id="editEducationalModal{{$educational->id}}" tabindex="-1" role="dialog" aria-labelledby="editEducationalModal{{$educational->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editEducationalModal{{$educational->id}}">Edit Educational</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('educationals.update', $educational->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label>School Type</label>
                        <input type="text" name="school_type" class="form-control" value="{{ $educational->school_type }}">
                    </div>
                    <div class="form-group">
                        <label>School Name</label>
                        <input type="text" name="school_name" class="form-control" value="{{ $educational->school_name }}">
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="text" name="date" class="form-control" value="{{ $educational->date }}">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control">{{ $educational->description }}</textarea>
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
