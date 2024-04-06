<div class="modal fade" id="editModal{{$experience->id}}" tabindex="-1" role="dialog" aria-labelledby="editModal{{$experience->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModal{{$experience->id}}">Edit Experience</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('experiences.update', $experience->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label>Job Title</label>
                        <input type="text" name="job_title" class="form-control" value="{{ $experience->job_title }}" >
                    </div>
                    <div class="form-group">
                        <label>Company</label>
                        <input type="text" name="company" class="form-control" value="{{ $experience->company }}" >
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" name="date" class="form-control" value="{{ $experience->date }}" >
                    </div>
                    <div class="form-group">
                        <label>Responsibility</label>
                        <input type="text" name="responsibility" class="form-control" value="{{ $experience->responsibility }}" >
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
