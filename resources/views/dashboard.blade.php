<x-app-layout>
    @if(session()->has('redirectURL'))
        <script>window.location = "{{ url('/cause-detail') }}/{{ session()->get('redirectURL') }}"</script>
    @endif
    @php
    $pageName="Dashboard";
    @endphp
    @include('page-breadcumb')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
