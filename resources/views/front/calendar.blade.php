@extends('front.master-pages')
@section('content')
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach ($SiteSettings as $Settings)
<livewire:calendar />
    @livewireScripts
    @stack('scripts')

@endforeach
@endsection
