<div class="modal fade" id="createEducationalModal" tabindex="-1" role="dialog" aria-labelledby="createEducationalModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createEducationalModal">Create New Educational</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('educationals.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>School Type</label>
                        <input type="text" name="school_type" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>School Name</label>
                        <input type="text" name="school_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Year Graduated</label>
                        <input type="text" name="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
