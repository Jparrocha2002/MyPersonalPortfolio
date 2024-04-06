<div class="modal fade" id="editModal{{$skill->id}}" tabindex="-1" role="dialog" aria-labelledby="editModal{{$skill->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModal{{$skill->id}}">Edit Skill</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('skills.update', $skill->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label>Skill Name</label>
                        <input type="text" name="skill_name" class="form-control" value="{{ $skill->skill_name }}" >
                    </div>
                    <div class="form-group">
                        <label>Percent</label>
                        <input type="number" name="percent" class="form-control" value="{{ $skill->percent }}" >
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
