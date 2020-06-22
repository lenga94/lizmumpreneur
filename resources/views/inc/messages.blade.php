@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong><i class="glyphicon glyphicon-exclamation-sign"></i></strong> {{ $error }}
        </div>
    @endforeach
@endif

@if (\Session::has('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong><i class="glyphicon glyphicon-ok-sign"></i></strong> {{ \Session::get('success') }}
    </div>
@endif

@if (\Session::has('warning'))
    <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong><i class="glyphicon glyphicon-exclamation-sign"></i></strong> {{ \Session::get('warning') }}
    </div>
@endif

@if (\Session::has('error'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong><i class="glyphicon glyphicon-exclamation-sign"></i></strong> {{ \Session::get('error') }}
    </div>
@endif
