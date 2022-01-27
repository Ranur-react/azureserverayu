@extends('layouts.app', ['pagedirectory' => ['Home' =>'/', 'Content Management'
=>'']])

@section('content')
    @include('layouts.headers.auth')


    <div class="container-fluid mt--8">
        <div class="row">
            <div class="col">
                <h1 class="font-weight-extrabold mb-3">Content Management</h1>
                <div class="card shadow-lg mb-5 mt-4">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="mb-0">Daftar E-Learning</h3>
                            <div class="text-right">
                                <button data-toggle="modal" data-target="#addElearning" class="btn btn-primary">
                                    Add E-Learning
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush" id="example">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="code">Kode</th>
                                        <th scope="col" class="sort" data-sort="name">Nama Course</th>
                                        <th scope="col" class="sort" data-sort="trainer">Nama Vendor</th>
                                        <th class="text-right" scope="col" class="sort">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($elearnings as $elearning)
                                        <tr>
                                            <td>
                                                <a
                                                    href="{{ route('learning-operation.content-management.show', $elearning->id) }}">
                                                    {{ $elearning->name }}
                                                </a>
                                            </td>
                                            <td>{{ $elearning->category }}</td>
                                            <td>Telkomsel</td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                        <a class="dropdown-item"
                                                            href="{{ route('learning-operation.content-management.edit', $elearning->id) }}">Edit</a>
                                                        <form
                                                            action="{{ route('learning-operation.content-management.destroy', $elearning->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="dropdown-item delete-elearning"
                                                                data-method="delete">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addElearning" tabindex="-1" role="dialog" aria-labelledby="new-event-label"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header pb-0">
                    <h4>Create E-Learning</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form method="post" action="{{ route('learning-operation.content-management.store') }}">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-syllabus">Syllabus
                                        Kurikulum</label>
                                    <select class="form-control" name="syllabus" id="input-syllabus">
                                        <option value="">Select Syllabus...</option>
                                        <option value="">Marketing Management</option>
                                        <option value="">Marketing Strategy</option>
                                        <option value="">Marketing Analaytics</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-name">Nama E-Learning</label>
                                    <input type="text" class="form-control" id="input-name" name="name">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-description">Deskripsi</label>
                                    <textarea class="form-control" id="input-description" name="description" rows="5"
                                        style="resize: none;"></textarea>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-category">Kategori
                                        Training</label>
                                    <select class="form-control" id="input-category" name="category">
                                        <option value="">Select Kategori Training...</option>
                                        <option value="General Training">General Training</option>
                                        <option value="Critical Capability">Critical Capability</option>
                                        <option value="Regular Capability">Regular Capability</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-pic-name">Nama PIC</label>
                                    <input type="text" class="form-control" id="input-pic-name" name="pic_name">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-vendor">Nama Vendor</label>
                                    <input type="text" class="form-control" id="input-vendor" name="vendor">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


@push('js')
    <script>
        $('#example').DataTable({
            "pagingType": "numbers"
        });
    </script>

    <script type="text/javascript">
        $('.delete-elearning').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to delete this class?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
@endpush
