<div class="modal fade" id="deleteModal{{$contact->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{$contact->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel{{$contact->id}}">Confirm Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <div class="text-center mb-3">
                        <p>Are you sure you want to delete this Message?</p>
                    </div>
                </div>
                <form id="deletecontactForm{{$contact->id}}" action="{{ route('contacts.destroy', $contact->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
