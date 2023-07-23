<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p><br>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')


        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="current_password">New Password <span class="required text-danger">*</span></label>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="password" id="current_password" class="form-control col-md-7 col-xs-12 @error('current_password') is-invalid @enderror" name="current_password" placeholder="current_password" autocomplete="current-password">

              @error('current_password')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            
        </div>

        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">New Password <span class="required text-danger">*</span></label>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="password" id="password" class="form-control col-md-7 col-xs-12 @error('password') is-invalid @enderror" name="password" placeholder="New Password" autocomplete="new-password">

              @error('password')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            
        </div>



        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password_confirmation">Confirm Pass <span class="required text-danger">*</span></label>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="password" id="password_confirmation" class="form-control col-md-7 col-xs-12 @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="password_confirmation" autocomplete="new-password">

              @error('password_confirmation')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            
        </div>


        <div class="flex items-center gap-4">
            {{-- <x-primary-button>{{ __('Save') }}</x-primary-button> --}}
            <button class="btn btn-info" >Save</button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
