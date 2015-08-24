@if($errors->any())
    <div class="row">
        <div class="row">
            <div class="alert alert-admin alert-danger alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        </div>
    </div>
@endif

@if(Session::has('flash_messages'))
    <div class="row">
        <div class="row">
            <div class="alert alert-admin alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{ Session::get('success') }}
            </div>
        </div>
    </div>
@endif