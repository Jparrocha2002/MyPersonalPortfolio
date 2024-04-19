<div class="modal fade bd-example-modal-lg" id="editUser{{Auth::user()->id}}" tabindex="-1" role="dialog" aria-labelledby="editUser{{Auth::user()->id}}" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUser{{Auth::user()->id}}">Edit Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('profile.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                        <div class="form-group">
                            <label>Avatar</label>
                            <input type="file" name="avatar" class="form-control-file" value="{{ Auth::user()->avatar }}">
                        </div>
                        <div class="form-group">
                            <label>Role</label>
                             <input type="text" name="role" class="form-control" value="{{ Auth::user()->role }}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" >
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" >
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
