<div class="modal fade" id="message{{$contact->id}}" tabindex="-1" role="dialog" aria-labelledby="message{{$contact->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="message{{$contact->id}}">{{ $contact->first_name }} {{ $contact->last_name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <div class="text mb-3">
                        <label><strong>Message</strong></label>
                        <textarea name="message" class="form-control" readonly>{{ $contact->message }}</textarea>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                </div>
        </div>
    </div>
</div>
