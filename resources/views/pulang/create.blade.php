@extends('layout.links')

<div class="center">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>PULANGG</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('pulang.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('pulang.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="center">
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>nis</strong>
                <input type="text" name="nis" class="form-control" placeholder="nama">
            </div>
        </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>kepulangan</strong>
                    <input type="datetime-local" name="kepulangan" class="form-control" >
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>

