@if (auth()->user()->can('master_data_show') || auth()->user()->can('master_data_edit') || auth()->user()->can('master_data_delete'))
    <div class="d-flex justify-content-end">
        @can('master_data_show')
            <a href="{{ route('master-data.locations.show', $model->location_id) }}"
                class="btn btn-sm btn-primary btn-icon" type="button">View
            </a>
        @endcan
        @can('master_data_edit')
            <a href="{{ route('master-data.locations.edit', $model->location_id) }}"
                class="btn btn-sm btn-primary btn-icon" type="button">Edit
            </a>
        @endcan
        @can('master_data_delete')
            <form action="{{ route('master-data.locations.destroy', $model->location_id) }}"
                method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger btn-icon" data-method="delete">Delete</button>
            </form>
        @endcan
    </div>                               
@endif