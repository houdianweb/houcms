@if(count($errors)>0)
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10 col-xs-10 col-md-10 col-lg-10">
            <div class="alert alert-warning" role="alert">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        </div>
    </div>
@endif