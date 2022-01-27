@if (auth()->user()->can('competency_show') || auth()->user()->can('competency_edit') || auth()->user()->can('competency_delete'))    
    <div class="d-flex justify-content-center">
        @can('competency_show')
            <a href="{{ route('setup-settings.competencies.show', $model->id) }}"
                class="btn btn-sm btn-primary btn-icon" type="button" >View
            </a>
        @endcan
        @can('competency_edit')
            <a href="{{ route('setup-settings.competencies.edit', $model->id) }}"
                class="btn btn-sm btn-primary btn-icon" type="button" >Edit
            </a>
        @endcan
        @can('competency_delete')
        <form action="{{ route('setup-settings.competencies.destroy', $model->id) }}"
            method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger btn-icon" data-method="delete">Delete</button>
        </form>
        @endcan
    </div>     
@endif