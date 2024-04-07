<div class="modal fade" id="editModal{{$webinar->id}}" tabindex="-1" role="dialog" aria-labelledby="editModal{{$webinar->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModal{{$webinar->id}}">Edit Webinar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('webinars.update', $webinar->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="webinar_img" class="form-control-file" value="{{ $webinar->webinar_img }}" >
                    </div>
                    <div class="form-group">
                        <label>Agenda</label>
                        <input type="text" name="agenda" class="form-control" value="{{ $webinar->agenda }}" >
                    </div>
                    <div class="form-group">
                        <label>Host Name</label>
                        <input type="text" name="host_name" class="form-control" value="{{ $webinar->host_name }}" >
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" name="date" class="form-control" value="{{ $webinar->date }}" >
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
