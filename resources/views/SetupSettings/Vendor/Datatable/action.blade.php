@if (auth()->user()->can('vendor_edit') || auth()->user()->can('vendor_delete'))    
    <div class="d-flex justify-content-center">
        @can('vendor_show')
            <a href="{{ route('setup-settings.vendors.show', $model->id) }}"
                class="btn btn-sm btn-primary btn-icon" type="button" >View
            </a>
        @endcan
        @can('vendor_edit')
            <a href="{{ route('setup-settings.vendors.edit', $model->id) }}"
                class="btn btn-sm btn-primary btn-icon" type="button" >Edit
            </a>
        @endcan
        @can('vendor_delete')
        <form action="{{ route('setup-settings.vendors.destroy', $model->id) }}"
            method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger btn-icon" data-method="delete">Delete</button>
        </form>
        @endcan
    </div>     
@endif