@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@elseif(session('update'))
    <div class="alert alert-warning">
        {{ session('update') }}
    </div>
@elseif(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@elseif(session('info'))
    <div id="msgSubmit" class="text-center hidden" style="color: skyblue;">
        {{ session('info') }}
    </div>
@endif