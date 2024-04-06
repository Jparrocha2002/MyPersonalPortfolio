<div class="modal fade bd-example-modal-lg" id="editProfileModal{{Auth::user()->id}}" tabindex="-1" role="dialog" aria-labelledby="editProfileModal{{Auth::user()->id}}" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProfileModal{{Auth::user()->id}}">Edit Admin</h5>
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
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Role</label>
                                <input type="text" name="role" class="form-control" value="{{ Auth::user()->role }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Job</label>
                                <input type="text" name="job" class="form-control" value="{{ Auth::user()->job }}" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Birthday</label>
                                <input type="date" name="birthday" class="form-control" value="{{ Auth::user()->birthday }}" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Age</label>
                                <input type="text" name="age" class="form-control" value="{{ Auth::user()->age }}" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Gender</label>
                                <input type="text" name="gender" class="form-control" value="{{ Auth::user()->gender }}" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="phone" class="form-control" value="{{ Auth::user()->phone }}" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" value="{{ Auth::user()->address }}" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Religion</label>
                                <input type="text" name="religion" class="form-control" value="{{ Auth::user()->religion }}" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Status</label>
                                <input type="text" name="status" class="form-control" value="{{ Auth::user()->status }}" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Fb Link</label>
                                <input type="text" name="fb_link" class="form-control" value="{{ Auth::user()->fb_link }}" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Instagram Link</label>
                                <input type="text" name="instagram_link" class="form-control" value="{{ Auth::user()->instagram_link }}" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Linkedin Link</label>
                                <input type="text" name="linkedin_link" class="form-control" value="{{ Auth::user()->linkedin_link }}" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Github Link</label>
                                <input type="text" name="github_link" class="form-control" value="{{ Auth::user()->github_link }}" >
                            </div>
                        </div>
                    </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control">{{ Auth::user()->description }}</textarea>
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
