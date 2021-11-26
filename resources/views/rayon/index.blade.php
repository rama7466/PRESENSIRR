@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">

            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('rayon.create') }}"> Create</a>
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
            <th>Nama Pembingbing</th>
            <th>Rayon</th>
            <th width="280px" >Action</th>
        </tr>
        @foreach ($rayon as $ryn)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{$ryn->nama_pembingbing}}</td>
            <td>{{$ryn->rayon}}</td>
            <td>
                <form action="{{route('rayon.destroy',$ryn->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('rayon.edit',$ryn->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $rayon->links() !!}

@endsection
