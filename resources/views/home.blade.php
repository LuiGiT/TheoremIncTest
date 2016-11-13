@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="jumbotron">
                        <h5>Subir archivo XLS</h5>
                        <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <p><input type="file" name="file" class="btn btn-info" /></p>
                    </div>
                    <button class="btn btn-success">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

        