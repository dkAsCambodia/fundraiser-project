<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    {{-- <x-application-logo class="block h-12 w-auto" /> --}}
    <link rel="stylesheet" href="{{ env('ADMIN_URL') }}admin_panel/css/dashboard.css" />
    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Welcome to your Donation Website!
    </h1>

@livewire('donation-page')
</div>
