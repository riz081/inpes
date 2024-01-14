@extends('pages.layouts.dashboard')

@section('content')
    
    <div class="card mt-5">
        <div class="card-body">
            <div class="table-responsive">
                <a href="{{ route('worker.create') }}" class="btn btn-md btn-success mb-3">Insert Data</a>
                <table class="table" id="alldata">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Job</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <th scope="row">{{ $item->name }}</th>                                
                                <th scope="row">{{ $item->job }}</th>                                
                                <th>
                                    <form action="{{ route('worker.destroy', $item->id) }}" method="post">
                                        <a class="btn btn-dark edit" href="{{ route('worker.edit', $item->id) }}">
                                            <i class="material-icons opacity-10">edit</i>
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-dark delete-btn"
                                            data-id="{{ $item->id }}">
                                            <i class="material-icons opacity-10">delete</i>
                                        </button>
                                    </form>
                                </th>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
