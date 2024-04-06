<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModal">Create New Experience</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('experiences.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Job Title</label>
                        <input type="text" name="job_title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Company</label>
                        <input type="text" name="company" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Date Hired</label>
                        <input type="date" name="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Responsibility</label>
                        <input type="text" name="responsibility" class="form-control">
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


