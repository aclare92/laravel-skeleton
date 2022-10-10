<div class="row justify-content-center mb-3">
    <div class="col-md-10 col-lg-8">
        <div class="card">
            <div class="card-header">@lang('app.auth.update_profile_title')</div>
            <div class="card-body">
                <form method="POST" action="{{ route('user-profile-information.update') }}">
                    @csrf
                    @method('PUT')

                    <x-input :label="__('app.auth.name')" name="name" value="{{ old('name') ?? auth()->user()->name }}" error-bag="updateProfileInformation" required></x-input>
                    <x-input :label="__('app.auth.email')" name="email" value="{{ old('email') ?? auth()->user()->email }}" error-bag="updateProfileInformation" required></x-input>
                    <x-form-submit :label="__('app.auth.update_profile')"></x-form-submit>

                </form>
            </div>
        </div>
    </div>
</div>
