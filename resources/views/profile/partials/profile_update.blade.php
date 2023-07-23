<section>


{{-- @php
    $user = DB::table('users')->where('id')->get();
    $update = DB::table('update__profiles')->where('user_id', '=', $user)->get();
@endphp --}}



    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Your Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile_update.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')


        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required text-danger">*</span></label>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="name" class="form-control col-md-7 col-xs-12 @error('name') is-invalid @enderror" name="name" required autocomplete="name">

              @error('name')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required text-danger">*</span></label>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="email" id="email" class="form-control col-md-7 col-xs-12 @error('email') is-invalid @enderror" name="email"  required autocomplete="email">

              @error('email')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone">Phone <span class="required text-danger">*</span></label>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="number" id="phone" class="form-control col-md-7 col-xs-12 @error('phone') is-invalid @enderror" name="phone"  required autocomplete="phone">

              @error('phone')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">Address <span class="required text-danger">*</span></label>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="address" class="form-control col-md-7 col-xs-12 @error('address') is-invalid @enderror" name="address"  required autocomplete="address">

              @error('address')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="discription">Discription <span class="required text-danger">*</span></label>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea class="form-control" name="discription" id="summernote" cols="30" rows="4" required></textarea>

              @error('discription')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            
        </div>

        

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
