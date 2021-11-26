@extends('layout.links')


  <div class="row">
      <div class="col-lg-12 margin-tb">
          <div class="pull-left">
              <h2>Edit</h2>
          </div>
          <div class="pull-right">
              <a class="btn btn-primary" href="{{ route('rayon.index') }}"> Back</a>
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

  <form action="{{ route('rayon.update',$rayon->id) }}" method="POST" enctype="multipart/form-data">
      @csrf

      @method('PUT')

       <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Nama Pembingbing:</strong>
                  <input type="text" name="nama_pembingbing" class="form-control" placeholder="Nama Pembingbing" value="{{$rayon->nama_pembingbing}}">
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Rayon:</strong>
                  <input type="text" name="rayon" class="form-control" placeholder="Rayon" value="{{$rayon->rayon}}">
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
          </div>
      </div>

  </form>

