@component('mail::message')
    # Hello {{ $name }},

    You have been invited to create a staff account.

    Please click the button below to set your password and activate your account.

    @component('mail::button', ['url' => url('/invitation/accept/' . $token)])
        Set Your Password
    @endcomponent

    Thanks,
    {{ config('app.name') }}
@endcomponent
