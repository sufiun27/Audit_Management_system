<div>

    @if(session('style'))
    <div class="alert alert-success">
        {{ session('style') }}
    </div>
    @endif
   
    @if(isset($error))
        <div class="alert alert-danger">{{ $error }}</div>
        @endif

    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $err)
        <li>{{$err}}</li>
        @endforeach
    </div>
    @endif

    @if(session('success'))
    <div class="alert alert-success">{{session('success')}}</div>
    @endif

</div>
