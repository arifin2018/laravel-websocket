@extends('layouts.app')

@section('content')
@php
    Log::debug('ok')
@endphp
<example-component :id={{ Auth::user()->id }}></example-component>
@endsection
