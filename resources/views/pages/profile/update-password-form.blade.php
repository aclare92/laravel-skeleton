<div class="row justify-content-center mb-3">
    <div class="col-md-10 col-lg-8">
        <div class="card">
            <div class="card-header">@lang('app.auth.update_password_title')</div>
            <div class="card-body">
                <form method="POST" action="{{ route('user-password.update') }}">
                    @csrf
                    @method('PUT')

                    <x-input :label="__('app.auth.current_password')" error_bag="updatePassword" name="current_password"></x-input>
                    <x-input :label="__('app.auth.password')" error_bag="updatePassword" name="password"></x-input>
                    <x-input :label="__('app.auth.confirm_password')" error_bag="updatePassword" name="password_confirmation"></x-input>
                    <x-form-submit :label="__('app.auth.update_password')"></x-form-submit>

                </form>
            </div>
        </div>
    </div>
</div>
