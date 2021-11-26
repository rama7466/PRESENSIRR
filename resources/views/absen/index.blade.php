
@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">

            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('absen.create') }}"> Create</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-striped table-hover">
        <tr>
            <th>No</th>
            <th>nis</th>
            <th>kedatangan</th>
            <th>ket</th>
            <th width="280px" >Action</th>
        </tr>
        @foreach ($absen as $abs)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{$abs->nis}}</td>
            <td>{{$abs->kedatangan}}</td>
            <td>{{$abs->ket}}</td>
            <td>
             
            </td>
        </tr>
        @endforeach
    </table>

    {!! $absen->links() !!}

@endsection
