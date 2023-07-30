<section>
    <header>
        
        @if (Auth::user()->user_status==3 || Auth::user()->user_status==1)
            <a href="{{ route('advance_info.edit') }}" class="btn btn-success btn-outline-light">Advance Profile</a><br><br>
        @elseif(Auth::user()->user_status==2)
            <a href="{{ route('advance_teacher.edit') }}" class="btn btn-success btn-outline-light">Advance Profile</a><br><br>
        @endif
        
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>
        
        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
       
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')


        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">User Name <span class="required text-danger">*</span></label>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="name" class="form-control col-md-7 col-xs-12 @error('name') is-invalid @enderror" name="name" value="{{Auth::user()->user_name}}" required autocomplete="name">

              @error('name')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            
        </div>

        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">User Email <span class="required text-danger">*</span></label>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <input disabled type="email" id="email" class="form-control col-md-7 col-xs-12  @error('email') is-invalid @enderror" name="email" value="{{Auth::user()->email}}" required  autocomplete="username">

              @error('email')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
            
        </div>


        {{-- <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div> --}}

        <div class="flex items-center gap-4">
            <button class="btn btn-info" >Save</button>

            @if (session('status') === 'profile-updated')
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
