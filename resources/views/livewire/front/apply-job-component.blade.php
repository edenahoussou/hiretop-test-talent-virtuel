<div>
    <div class="modal fade" id="ModalApplyJobForm" tabindex="-1" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog modal-lg">
          <div class="modal-content apply-job-form">
            <button wire:click='close' class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body pl-30 pr-30 pt-50">
              <div class="text-center">
                <p class="font-sm text-brand-2">{{__('Postuler')}} </p>
                <h2 class="mt-10 mb-5 text-brand-1 text-capitalize">{{__('Envoyer votre candidature')}}</h2>
                <p class="font-sm text-muted mb-30">{{__('Remplissez le formulaire pour terminer le processus ')}}</p>
              </div>
              <form class="login-register text-start mt-20 pb-30">
                @csrf
                <div class="form-group">
                  <label class="form-label" for="number">{{__('Numéro')}} *</label>
                  <input wire:model.defer='phone' class="form-control @error('phone') is-invalid @enderror" id="number" type="text" name="phone" placeholder="(+229) 234 567 89">
                  @error('phone')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label class="form-label" for="des">{{__('Notes *')}}</label>
                  <textarea wire:model.defer='notes' class="@error('notes') is-invalid @enderror" id="des" type="text" rows="10" cols="40"  name="notes"></textarea>
                  @error('notes')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label class="form-label" for="file">{{__('CV ')}}</label>
                  <input wire:model.defer='resume' class="form-control @error('resume') is-invalid @enderror" id="file" name="resume" type="file">
                  @error('resume')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div wire:ignore.self class="login_footer form-group d-flex justify-content-between">
                  <label class="cb-container">
                    <input required wire:model.defer='conditions' type="checkbox"><span class="text-small">{{__('Accepter nos conditions d\'utilisation')}}</span><span class="checkmark"></span>
                   
                  </label><a class="text-muted" href="#">{{__('En savoir plus')}}</a>
                  
                </div>
                @error('conditions')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="form-group">
                  <button wire:click='submit' class="btn btn-default hover-up w-100" type="button">{{__('Envoyer')}}</button>
                </div>
                <div class="text-muted text-center">#<a href="#">{{__('Contactez-nous')}}</a></div>
              </form>
            </div>
          </div>
        </div>
      </div>
</div>
@push('js')
    
@endpush
