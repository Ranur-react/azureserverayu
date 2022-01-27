@if($model->status_id == 3)
    <div class="d-flex justify-content-between">
        <a href="{{ route('learning-design.learning-need-analysis.request-syllabuses.show', $model->id) }}" class="btn btn-sm btn-primary" 
        type="button">View</a>
        <a href="{{ route('learning-design.learning-need-analysis.request-syllabuses.edit', $model->id) }}" class="btn btn-sm btn-primary" 
        type="button">Edit</a>
        <form action="{{ route('learning-design.learning-need-analysis.request-syllabuses.destroy', $model->id) }}"
            method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger btn-icon" data-method="delete">Delete</button>
        </form>
    </div>
@else
    <a href="{{ route('learning-design.learning-need-analysis.request-syllabuses.show', $model->id) }}" class="btn btn-sm btn-primary" 
    type="button">View</a>
@endif