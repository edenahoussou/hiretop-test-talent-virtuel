@push('css')
<link rel="stylesheet" href="{{asset('admin/assets/css/editors/quill.css?ver=3.1.3')}}">
@endpush
<div>
    <div data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" class="modal fade" id="modalCreate" wire:ignore.self>
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <a href="javascript:void(0)" wire:click='close' class="close" data-bs-dismiss="modal"
                    aria-label="Close"> <em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">{{ $title ?? 'Ajouter une nouvelle offre d\'emploi'}}</h5>
                    <form action="#" class="pt-2">
                        <div class="row gy-3 gx-gs">
                            <div wire:ignore.self class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="job-name">{{('Titre du poste')}}</label>
                                    <div class="form-control-wrap">
                                        <input wire:model.defer="jobTitle" type="text"
                                            class="form-control @error('jobTitle') is-invalid @enderror" id="job-name"
                                            placeholder="ex: Developpeur mobile">
                                        @error('jobTitle') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div><!-- .form-group -->
                            </div>
                            <div wire:ignore.self class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="job-type">{{('Type')}}</label>
                                    <div class="form-control-wrap">
                                        <select wire:model.defer="jobType"
                                            class="form-select @error('jobType') is-invalid @enderror js-select2"
                                            id="job-type" wire:model='jobType'>
                                            <option value="choisir">{{__('Choissisez une option')}}</option>
                                            @foreach ($jobTypes as $type)
                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('jobType') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div><!-- .form-group -->
                            </div>
                            <div wire:ignore.self class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="job-category">{{('Categories')}}</label>
                                    <div class="form-control-wrap">
                                        <select wire:model.defer="jobCategory"
                                            class="form-select @error('jobCategory') is-invalid @enderror js-select2"
                                            id="job-category" wire:model='jobCategory'>
                                            <option value="choisir">{{__('Choissisez une option')}}</option>
                                            @foreach ($categories as $categorie)
                                            <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('jobCategory') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div><!-- .form-group -->
                            </div>
                            <div wire:ignore.self class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="dificulties">{{('Niveau')}}</label>
                                    <select class="form-select @error('graduation') is-invalid @enderror js-select2"
                                        id="dificulties" wire:model.defer='graduation'>
                                        <option value="choisir">{{__('Choissisez une option')}}</option>
                                        @foreach ($graduations as $graduation)
                                        <option value="{{ $graduation->id }}">{{ $graduation->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('graduation') <span class="text-danger">{{ $message }}</span> @enderror
                                </div><!-- .form-group -->
                            </div>
                            <div wire:ignore.self class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="job-lesson">{{('Salaire en')}} {{
                                        Config::get('app.currency', 'FCFA') }}</label>
                                    <div class="form-control-wrap">
                                        <input type="number" inputmode="numeric" wire:model.defer="salary"
                                            class="form-control" id="job-salary" placeholder="40000">
                                    </div>
                                </div><!-- .form-group -->
                                @error('salary') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div wire:ignore.self class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="thumb">{{__('Experiences')}}</label>
                                    <select class="form-select @error('jobExperience') is-invalid @enderror js-select2"
                                        id="dificulties" wire:model.defer='jobExperience'>
                                        <option value="choisir">{{__('Choissisez une option')}}</option>
                                        @foreach ($experiences as $experience)
                                        <option value="{{ $experience->id }}">{{ $experience->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('jobExperience') <span class="text-danger">{{ $message }}</span> @enderror
                                </div><!-- .form-group -->
                            </div>
                            <div wire:ignore.self class="col-6" id="select-skills">
                                <div class="form-group">
                                    <label class="form-label" for="thumb">{{__('Competences associees')}}</label>
                                    <div wire:ignore>
                                        <select multiple data-search="on" class="form-select @error('jobSkills') is-invalid @enderror js-select2"
                                        id="skills">
                                        <optgroup label="{{__('Ajouter une competence')}}">
                                            <option value="create">{{__('Ajouter')}}</option>
                                        </optgroup>
                                        <optgroup label="{{__('Competences existantes')}}">
                                            @foreach ($skills as $skill)
                                            <option @if(in_array($skill->id, $jobSkills) ) selected @endif value="{{ $skill->id }}">{{ $skill->title }}</option>
                                            @endforeach
                                        </optgroup>
                                        
                                    </select>
                                    </div>
                                    @error('jobSkills') <span class="text-danger">{{ $message }}</span> @enderror
                                </div><!-- .form-group -->
                            </div>

                            <div wire:ignore.self id="create-skills" class="col-6" style="display: none">
                                <div class="form-group">
                                    <label class="form-label" for="thumb">{{__('Competences associees')}}</label>
                                    <div class="form-control-wrap">
                                        <input title="{{__('Chaque competence est separee par une virgule Ex: Php, Laravel')}}" wire:model.defer="createSkills" type="text"
                                            class="form-control @error('create-skills') is-invalid @enderror" id="job-skills"
                                            placeholder="Chaque competence est separee par une virgule Ex: Php, Laravel">
                                        @error('create-skills') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div><!-- .form-group -->
                            </div>
                            <div wire:ignore.self class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="thumb">{{__('Description du poste')}}</label>
                                    <div class="form-control-wrap @error('jobDescription') is-invalid @enderror"
                                        wire:ignore>
                                        <div id="job-description"></div>
                                    </div>
                                    @error('jobDescription') <span class="text-danger">{{ $message }}</span> @enderror
                                </div><!-- .form-group -->
                            </div>

                            <div wire:ignore.self class="col-6">
                                <div class="form-group">
                                    <label class="form-label">{{__('Deadline')}}</label>
                                    <div class="form-control-wrap" wire:ignore.self>
                                        <div class="form-icon form-icon-left"> <em class="icon ni ni-calendar-alt"></em>
                                        </div>
                                        <input type="text" wire:model.defer="closingDate"
                                        class="form-control date-picker" @error('closingDate') is-invalid @enderror"
                                        id="closing-date" placeholder="mm/dd/yyyy">
                                    </div>
                                    @error('closingDate') <span class="text-danger">{{ $message }}</span> @enderror
                                </div><!-- .form-group -->
                            </div>

                            <div wire:ignore.self class="col-6">
                                <div class="form-group">
                                    <label class="form-label">{{__('Lieu')}}</label>
                                    <div class="form-control-wrap" wire:ignore.self>
                                        <select
                                            class="form-select @error('location_id') is-invalid @enderror js-select2"
                                            data-search="on" wire:model.defer="location_id">
                                            <option value="default_option">{{__('Sélectionner le lieu')}}</option>
                                            @foreach ($locations as $location)
                                            <option value="{{ $location->id }}">{{ $location->address }}</option>
                                            @endforeach
                                        </select>
                                        @error('location_id') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div><!-- .form-group -->
                            </div>

                            <div wire:ignore.self class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="thumb">{{__('Statut')}}</label>
                                    <div class="form-control-wrap">
                                        <ul class="custom-control-group g-3 align-center flex-wrap">
                                            <li>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" value="publish"
                                                        class="custom-control-input @error('status') is-invalid @enderror"
                                                        checked name="reg-public" wire:model.defer="status"
                                                        id="reg-enable">
                                                    <label class="custom-control-label"
                                                        for="reg-enable">{{__('Publier')}}</label>
                                                </div>
                                                @error('status') <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </li>
                                            <li>
                                                <div class="custom-control custom-radio">
                                                    <input value="draft" wire:model.defer="status" type="radio"
                                                        class="custom-control-input @error('status') is-invalid @enderror"
                                                        name="reg-public" id="reg-disable">
                                                    <label class="custom-control-label"
                                                        for="reg-disable">{{__('Brouillon')}}</label>
                                                </div>
                                                @error('status') <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </li>
                                        </ul>
                                    </div>

                                </div><!-- .form-group -->
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <button type="button" @if($title === 'Modifier l\'offre d\'emploi') wire:click='update' @else wire:click='save' @endif class="btn btn-primary">
                                        {{__('Enrégistrer')}}
                                    </button>
                                </div><!-- .form-group -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
<script src="{{ asset('admin/assets/js/libs/editors/quill.js?ver=3.1.3')}}"></script>
<script>
    var toolbarOptions = [['bold', 'italic', 'underline', 'strike'],
        // toggled buttons
        ['blockquote', 'code-block'], [{
          'list': 'ordered'
        }, {
          'list': 'bullet'
        }], [{
          'script': 'sub'
        }, {
          'script': 'super'
        }],
        // superscript/subscript
        [{
          'indent': '-1'
        }, {
          'indent': '+1'
        }],
        // outdent/indent

        [{
          'header': [1, 2, 3, 4, 5, 6]
        }], [{
          'color': []
        }, {
          'background': []
        }],
        // dropdown with defaults from theme
        [{
          'font': []
        }], [{
          'align': []
        }], ['clean'] // remove formatting button
        ];

    var quillDescription = new Quill('#job-description', {
    theme: 'snow',
    modules: {
    toolbar: toolbarOptions
    }
    });

    quillDescription.on('text-change', function(delta, oldDelta, source) {
    
    var debounceTimeout = null;
    clearTimeout(debounceTimeout);
    debounceTimeout = setTimeout(function() {
    @this.set('jobDescription', quillDescription.root.innerHTML);
    }, 1000);

    });

    window.addEventListener('close-modal', event => {
        $('#modalCreate').modal('hide');
        //empty all select dropdown
        $('#skills').val(null).trigger('change');
    });

    $('#closing-date').on('change', function() {
        console.log(this.value);
        @this.set('closingDate', $(this).val());
    });

    window.addEventListener('open-modal', event => {
        $('#modalCreate').modal('show');
        quillDescription.root.innerHTML = event.detail.jobDescription;
        $('#skills').val(event.detail.jobSkills).trigger('change');
    });

   $('#skills').on('change', function() {
    let selected = $(this).val();
    if(selected == 'create') {
       // console.log(selected);
        $('#create-skills').css('display', 'block');
        $('#select-skills').css('display', 'none');
        @this.set('jobSkills', selected);
    } else if(selected !== null && selected.length > 0) {
        @this.set('jobSkills', selected);
    }
    });
    
    
</script>
@endpush