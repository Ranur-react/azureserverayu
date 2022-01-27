
<a class="d-flex justify-content-between" data-toggle="collapse"
href="#collapse{{ $prfCompetencyCatalog->id }}" role="button" aria-expanded="false" aria-controls="collapseMenu1">
   <div>{{ $prfCompetencyCatalog->name }}</div>
   <div class="text-right"><i class="fas fa-chevron-down"></i></div>
</a>
@forelse($prfCompetencyCatalog->syllabuses as $syllabus)
   <div class="collapse" id="collapse{{ $prfCompetencyCatalog->id }}">
       <div class="row p-2">
           <div class="col bg-secondary p-3">
               <a href="{{ route('api.v1.syllabuses-ajax.show', $syllabus->id) }}"
                   class="pe-auto modal-global">
                   <h4 class="mb-0">
                       {{ $syllabus->training_name }}</h4>
               </a>
               <p class="text-xs"> 
                   {{ $syllabus->training_summary }}
               </p>
               @if ($cart_user_needs->count() == 1)
                    Maximum added once
               @else
                   <form method="POST"
                       action="{{ route('learning-need-analysis.carts-user-needs.store') }}">
                       @csrf                     
                       <input type="hidden" name="syllabus_id"
                           value="{{ $syllabus->id }}">
                       <button type="submit"
                           class="btn btn-icon btn-sm btn-3 btn-primary mb-2">
                           Choose Syllabus
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
               Syllabus Not Found.
           </div>
       </div>
   </div>
@endforelse                                                   
