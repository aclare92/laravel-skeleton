@if(session('status') == 'verification-link-sent')
    <div class="alert alert-success" role="alert">
        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
    </div>
@elseif(session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
