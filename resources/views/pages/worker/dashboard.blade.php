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
                                    <form action="{{ route('worker.destroy', $item->id) }}" method="post" id="deleteForm{{ $item->id }}">
                                        <a class="btn btn-dark edit" href="{{ route('worker.edit', $item->id) }}">
                                            <i class="material-icons opacity-10">edit</i>
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-dark delete-btn" onclick="confirmDelete({{ $item->id }})">
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

{{-- Konfirmasi hapus 2 --}}
<script>
    function confirmDelete(itemId) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                // If the user clicks "Yes" in the confirmation dialog, submit the form
                document.getElementById('deleteForm' + itemId).submit();
            }
        });
    }
</script>

