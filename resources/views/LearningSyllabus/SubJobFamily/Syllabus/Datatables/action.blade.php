@if (auth()->user()->can('learning_syllabus_edit') || auth()->user()->can('learning_syllabus_delete'))
    {{-- <div class="dropdown">
        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-ellipsis-v"></i>
        </a>

        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
            @can('learning_syllabus_edit')
                <a class="dropdown-item"
                    href="{{ route('learning-design.learning-syllabus.job-families.sub-job-families.syllabuses.edit', [$jobFamily_id, $model->syllabusJobFamily->id, $model->id]) }}">Edit</a>
            @endcan
            @can('learning_syllabus_delete')
                <form
                    action="{{ route('learning-design.learning-syllabus.job-families.sub-job-families.syllabuses.destroy', [$jobFamily_id, $model->syllabusJobFamily->id, $model->id]) }}"
                    method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="dropdown-item "
                        data-method="delete">Delete</button>
                </form>
            @endcan
        </div>
    </div>     --}}

    <div class="d-flex justify-content-end">
        @can('learning_syllabus_edit')
            <a href="{{ route('learning-syllabus.job-families.sub-job-families.syllabuses.edit', [$jobFamily->id, $model->syllabusJobFamily->id, $model->id]) }}"
                class="btn btn-sm btn-primary btn-icon" type="button" >Edit
            </a>
        @endcan
        @can('learning_syllabus_delete')
        <form action="{{ route('learning-syllabus.job-families.sub-job-families.syllabuses.destroy', [$jobFamily->id, $model->syllabusJobFamily->id, $model->id]) }}"
            method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger btn-icon" data-method="delete">Delete</button>
        </form>
        @endcan
    </div>
@endif
