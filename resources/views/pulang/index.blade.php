
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
            <th>kepulangan</th>
            <th width="280px" >Action</th>
        </tr>
        @foreach ($pulang as $plg)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{$plg->nis}}</td>
            <td>{{$plg->kepulangan}}</td>
            <td>

            </td>
        </tr>
        @endforeach
    </table>

    {!! $pulang->links() !!}

@endsection
