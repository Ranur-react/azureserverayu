<div class="custom-control custom-checkbox text-center">
    <input type="checkbox" class="syllabus-class custom-control-input" value="{{ $model->id }}" 
    name="syllabus_check[]"
    id="customCheck1{{ $model->id }}" @if (count($csp->syllabuses->where('id', $model->id)))
    checked @endif>
    <label class="custom-control-label"
     for="customCheck1{{ $model->id }}">
    </label>
</div>