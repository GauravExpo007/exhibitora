@extends('layouts.app')
@section('title', 'Exhibition Services — Exhibitora')
@section('content')
<section class="inner-hero"><div class="mx-auto max-w-7xl px-5 py-20 lg:px-8 lg:py-28"><p class="eyebrow">OUR SERVICES / 01—09</p><h1 class="display-title mt-5 max-w-4xl text-5xl md:text-7xl">The right support for <em>every corner</em> of your stand.</h1><p class="mt-7 max-w-2xl text-lg leading-8 text-muted">Explore practical exhibition services designed to work together — from the first visitor welcome to the final pack-down.</p></div></section>
<section class="pb-24"><div class="mx-auto max-w-7xl px-5 lg:px-8"><div class="grid gap-5 md:grid-cols-2 lg:grid-cols-3">@foreach($services as $slug => $service) @include('components.service-card', ['service' => $service, 'slug' => $slug]) @endforeach</div></div></section>
@include('components.cta')
@endsection
