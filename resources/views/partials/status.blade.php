@if (session('success'))
    <div class="container">
        <div class="row">
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        </div>
    </div>

@elseif (session('warning'))
    <div class="container">
        <div class="row">
            <div class="alert alert-warning">
                {{ session('warning') }}
            </div>
        </div>
    </div>

@elseif (session('danger'))
    <div class="container">
        <div class="row">
            <div class="alert alert-danger">
                {{ session('danger') }}
            </div>
        </div>
    </div>
@endif