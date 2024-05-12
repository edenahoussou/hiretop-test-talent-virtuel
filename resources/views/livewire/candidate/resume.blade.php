<div>
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">{{__('Mon CV')}}</h3>
                        </div>
                    </div>
                </div>
                <!--.nk-block-head -->
                <div class="nk-block">
                    <div class="card">
                        <div class="card-header">{{__('Dites-nous en plus sur vous')}}</div>
                        <div class="card-inner">
                            <div class="row gy-4">
                                <div class="col-md-3">
                                    <div style="width: 18rem">
                                        <div>
                                            {{__('Photo de profil')}}
                                        </div>
                                        <div>
                                            <img src="{{ Storage::url(auth()->user()->photo) ? : 'https://ui-avatars.com/api/?name=' . auth()->user()->name }}" width="150" height="150" class="rounded-circle" alt="profile image">
                                            <div id="divPhoto">
                                                <input type="file" name="photo" wire:model='photo' id="photo">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fullname">{{__('Nom complet')}}</label>
                                                <input type="text" wire:model.defer="name" class="form-control"
                                                    id="fuulname" placeholder="Steven Job">
                                            </div>
                                        </div>
                                        <!--col-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="job_title">{{__('Qualifications ou
                                                    Titre')}}</label>
                                                <input type="text" wire:model.defer="jobTitle" class="form-control"
                                                    id="qualification" placeholder="Steven Job">
                                            </div>
                                        </div>
                                        <!--col-->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="phone-no">{{__('Addresse
                                                    actuelle')}}</label>
                                                <input type="text" wire:model.defer='address' class="form-control"
                                                    id="address" placeholder="Votre addresse actuelle">
                                            </div>
                                        </div>
                                        <!--col-->
                                        <div class="form-group col-md-6">
                                            <label class="form-label">{{__('Sélectionne tes skills')}}</label>
                                            <div class="form-control-wrap" wire:ignore>
                                                <select class="form-select js-select2" data-search="on"
                                                    id="candidat-skills" multiple>
                                                    <option value="default_option">{{__('Choissisez')}}</option>
                                                    @foreach($skills as $key => $skill)
                                                    <option @if(in_array($skill->id, $userSkills)) selected @endif
                                                        value="{{ $skill->id }}">{{ $skill->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!--row-->

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" for="about">{{__('A propos de vous')}}</label>
                                                <textarea class="form-control" wire:model.defer="about" id="about"
                                                    rows="5"></textarea>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <!--row-->
                                <div class="card-inner text-end">
                                    <a href="javascript:void(0);" wire:click="saveCandidate"
                                        class="btn btn-round btn-primary"><em
                                            class="icon ni ni-save"></em><span>{{__('Enregistrer')}}</span> </a>

                                </div>
                            </div>
                            <!--card inner-->
                        </div>
                        <!--card-->
                    </div>
                    <!--.nk-block -->
                    <div class="card">
                        <div class="card-header bg-dark">{{__('Formations')}}</div>
                        @forelse($educations as $key => $education)
                        <div class="card-inner" id="education{{$education->id}}">
                            <div class="card-action d-flex justify-content-end">
                                <a class="btn btn-danger btn-sm"
                                    wire:click='$set("selectedEducation",{{ $education->id }})' data-bs-toggle="modal"
                                    href="#modalDeleteEducation">
                                    <em class="icon ni ni-trash"></em>
                                </a>
                            </div>

                            <div class="row gy-4">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label"
                                            for="fullname{{$education->id}}">{{__('Diplome')}}</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select js-select2" id="grade{{$education->id}}">
                                                <option value="default_option">{{__('Choissisez')}}</option>
                                                @foreach($grades as $key => $grade)
                                                <option @if($education->pivot->graduation_level_id == $grade->id)
                                                    selected @endif value="{{ $grade->id }}">{{ $grade->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="degree{{$education->id}}">{{__('Qualification ou
                                            Titre de la formation')}}</label>
                                        <input type="text" class="form-control" value="{{ $education->pivot->degree }}"
                                            id="title{{$education->id}}" placeholder="Ex: BTS SIO">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label"
                                            for="school{{$education->id}}">{{__('Ecole\Université\Centre de
                                            formation')}}</label>
                                        <input type="text" class="form-control"
                                            value="{{ $education->pivot->university }}" id="school{{$education->id}}"
                                            placeholder="Ex: Ecole Supérieure de Technologie">
                                    </div>
                                </div>
                            </div>
                            <div class="row gy-4 mt-3">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="from{{$education->id}}">{{__('Début')}}</label>
                                        <div class="form-control-wrap">
                                            <input type="date" class="form-control" id="from{{$education->id}}"
                                                placeholder="2020" value="{{ $education->pivot->start_date }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="to{{$education->id}}">{{__('Fin')}}</label>
                                        <div class="form-control-wrap">
                                            <input type="date" class="form-control" id="to{{$education->id}}"
                                                placeholder="2020" value="{{ $education->pivot->end_date }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="degree_proof">{{__('Uploader le
                                            document')}}</label>
                                        <div class="form-control-wrap">
                                            <input type="file" class="form-control" id="degree_proof">
                                        </div>
                                    </div>
                                    @if ($education->pivot->degree_proof)
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">{{__('Attestation ou diplome de cette
                                                formation')}}</label>
                                            <div class="form-control-wrap d-flex align-items-center">
                                                <a href="{{ Storage::url($education->pivot->degree_proof) }}"
                                                    class="btn btn-primary"
                                                    download="{{ $education->pivot->degree_proof }}">
                                                    {{__('Télécharger le document')}}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>

                            <div class="row gy-4">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="form-label"
                                            for="description{{$education->id}}">{{__('Description')}}</label>
                                        <div class="form-control-wrap">
                                            <textarea class="form-control" id="description{{$education->id}}"
                                                rows="5">{{ $education->pivot->description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-5" />

                        @empty
                        <div class="card-inner">
                            <div class="alert alert-fill alert-icon alert-gray" role="alert">
                                <em class="icon ni ni-alert-circle"></em>
                                <strong>{{__('Aucune formation trouvées')}}</strong>.
                                {{('Ajouter une formation en cliquant sur le bouton ci dessous')}}.
                            </div>
                        </div>
                        @endforelse

                        <div class="card-footer border-top text-muted">
                            <a href="#modalAddEducation" data-bs-toggle="modal" class="btn btn-round btn-primary"><em
                                    class="icon ni ni-plus"></em><span>{{__('Ajouter')}}</span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="modalAddEducation" tabindex="-1"
        aria-labelledby="modalAddEducationLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAddEducationLabel">{{__('Ajouter une formation')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="title">{{__('Formation')}}</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select" wire:model="newEducation.grade_id">
                                            <option value="default_option">{{__('Sélectionnez le type de formation')}}
                                            </option>
                                            @foreach($grades as $key => $grade)
                                            <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('newEducation.grade_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="title">{{__('Titre de la formation')}}</label>
                                    <input type="text"
                                        class="form-control @error('newEducation.title') is-invalid @enderror"
                                        id="title" wire:model="newEducation.title">
                                    @error('newEducation.title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="school">{{__('Ecole')}}</label>
                                    <input type="text"
                                        class="form-control @error('newEducation.school') is-invalid @enderror"
                                        id="school" wire:model="newEducation.school">
                                    @error('newEducation.school')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="from">{{__('Debut')}}</label>
                                    <div class="form-control-wrap">
                                        <input type="date"
                                            class="form-control @error('newEducation.from') is-invalid @enderror"
                                            id="from" wire:model="newEducation.from">
                                        @error('newEducation.from')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="to">{{__('Fin')}}</label>
                                    <div class="form-control-wrap">
                                        <input type="date"
                                            class="form-control @error('newEducation.to') is-invalid @enderror" id="to"
                                            wire:model="newEducation.to">
                                        @error('newEducation.to')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="degree_proof">{{__('Uploader le document')}}</label>
                                    <div class="form-control-wrap">
                                        <input type="file"
                                            class="form-control @error('newEducation.proof') is-invalid @enderror"
                                            id="degree_proof" wire:model="newEducation.proof">
                                        @error('newEducation.proof')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="about">{{__('Description')}}</label>
                                    <div class="form-control-wrap">
                                        <textarea
                                            class="form-control @error('newEducation.description') is-invalid @enderror"
                                            id="about" rows="5" wire:model="newEducation.description"></textarea>
                                        @error('newEducation.description')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="javascript:void(0);" wire:click="addEducation" class="btn btn-round btn-primary"><em
                                class="icon ni ni-save"></em><span>{{__('Enregistrer')}}</span> </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div wire:ignore.self class="modal fade" id="modalDeleteEducation" tabindex="-1"
        aria-labelledby="modalDeleteEducationLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDeleteEducationLabel">{{__('Supprimer une formation')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{__('Voulez-vous supprimer cette formation ?')}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">{{__('Annuler')}}</button>
                    <button wire:click="deleteEducation" type="button"
                        class="btn btn-danger">{{__('Supprimer')}}</button>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
<script>
    window.addEventListener('close-education-modal', event => {
            $('#modalAddEducation').modal('hide');
            $('#modalDeleteEducation').modal('hide');

        });

        $('#candidat-skills').on('change', function() {
            @this.set('userSkills', $(this).val());
        });
</script>
@endpush