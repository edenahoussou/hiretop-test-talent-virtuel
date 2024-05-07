<div>
    <main class="main">
        <section class="pt-100 login-register">
            <div class="container">
                <div class="row login-register-cover pb-250">
                    <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
                        <div class="text-center"><img src="assets/imgs/page/login-register/img-6.svg" alt="JobBox">
                            <h2 class="mt-10 mb-5 text-brand-1">{{__('Sélectionnez votre type') }}</h2>
                            <p class="font-sm text-muted mb-30">
                                {{__('Que recherchez vous sur').' '.config('app.name') . '?' }}
                            </p>
                        </div>
                        <form class="login-register text-start mt-20">
                            @csrf
                            <div class="form-group form-group select-style">
                                <label class="form-label" for="input-1">{{__('Je suis à la recherche')}} *</label>
                                <select class="form-control @error('type') is-invalid @enderror" name="type"
                                    id="userType" wire:model="type">
                                    <option value="">{{__('Choisir')}}</option>
                                    <option value="candidate">{{__('Emplois / Mission')}}</option>
                                    <option value="company">{{__('Talent')}}</option>

                                    @error('type') <span class="text-danger">{{ $message }}></span> @enderror
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-brand-1 hover-up w-100" type="button"
                                    wire:click="setRole">{{__('Enrégistrer')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>