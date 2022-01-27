
<a class="d-flex justify-content-between" data-toggle="collapse"
 href="#collapse{{ $prfCompetencyCatalog->id }}" role="button" aria-expanded="false" aria-controls="collapseMenu1">
    <div>{{ $prfCompetencyCatalog->name }}</div>
    <div class="text-right"><i class="fas fa-chevron-down"></i></div>
</a>
@forelse($prfCompetencyCatalog->syllabuses->where('status_id', 1) as $syllabus)
    <div class="collapse" id="collapse{{ $prfCompetencyCatalog->id }}">
        <div class="row p-2" >
            <div class="col bg-secondary p-3">
                <a href="{{ route('api.v1.syllabuses-ajax.show', $syllabus->id) }}"
                    class="pe-auto modal-global">
                    <h4 class="mb-0">
                        {{ $syllabus->training_name }}</h4>
                </a>
                <p class="text-xs"> 
                    {{ $syllabus->training_summary }}
                </p>
                @if ($cart_idp->where('id', $syllabus->id)->count())
                    In Cart
                @else
                    <form method="POST"
                        action="{{ route('learning-need-analysis.carts-idp.store', [$nik, $idp_period_id]) }}">
                        @csrf                     
                        <input type="hidden" name="syllabus_id"
                            value="{{ $syllabus->id }}">
                        <button type="submit"
                            class="btn btn-icon btn-sm btn-3 btn-primary mb-2">
                            Add to Cart
                        </button>
                    </form>
                @endif
            </div>
        </div>
    </div>
    @empty
    <div class="collapse" id="collapse{{ $prfCompetencyCatalog->id }}">
        <div class="row p-2">
            <div class="col bg-secondary p-3">
                Syllabus Not Found. Please contact learning architect for further information.
            </div>
        </div>
    </div>
@endforelse                                                   
