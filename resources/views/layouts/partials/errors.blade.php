@if($errors->any())
    <div class="alert alert-danger alert-dismissable mt-2 float-right" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
    </div>
@endif
