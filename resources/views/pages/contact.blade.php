@extends('layouts.app')
@section('title', 'Contact — Exhibitora')
@section('content')
<section class="inner-hero"><div class="mx-auto max-w-7xl px-5 py-20 lg:px-8 lg:py-28"><p class="eyebrow">LET'S START A CONVERSATION</p><h1 class="display-title mt-5 max-w-4xl text-5xl md:text-7xl">Tell us what you're <em>planning.</em></h1><p class="mt-7 max-w-2xl text-lg leading-8 text-muted">Share a few details about your upcoming exhibition and the support you're looking for.</p></div></section>
<section class="pb-24"><div class="mx-auto grid max-w-7xl gap-12 px-5 lg:grid-cols-[.75fr_1.25fr] lg:px-8"><div><p class="eyebrow">WE'RE HERE TO HELP</p><h2 class="mt-4 text-3xl font-extrabold">One message can get things moving.</h2><p class="mt-5 leading-8 text-muted">Tell us about the event, your space and the services you need. Our team can take it from there.</p><div class="contact-detail mt-10"><span>Email</span><a href="mailto:hello@exhibitora.example">hello@exhibitora.example</a></div><div class="contact-detail"><span>Phone</span><a href="tel:+910000000000">+91 00000 00000</a></div></div>
<div class="form-panel">@if(session('success'))<div class="success-message">{{ session('success') }}</div>@endif
<form method="POST" action="{{ route('contact.store') }}" class="grid gap-5 sm:grid-cols-2">@csrf
<div class="form-field"><label for="name">Your name *</label><input id="name" name="name" value="{{ old('name') }}" required>@error('name')<small>{{ $message }}</small>@enderror</div>
<div class="form-field"><label for="email">Email address *</label><input id="email" type="email" name="email" value="{{ old('email') }}" required>@error('email')<small>{{ $message }}</small>@enderror</div>
<div class="form-field"><label for="phone">Phone number</label><input id="phone" name="phone" value="{{ old('phone') }}">@error('phone')<small>{{ $message }}</small>@enderror</div>
<div class="form-field"><label for="service">Service required</label><select id="service" name="service"><option value="">Select a service</option>@foreach(['Shell Scheme Support','Exhibition Furniture','Graphics & Branding','Professional Manpower','Exhibition Equipment','Custom Branding','Professional Photography','Display Solutions','Storage Solutions'] as $option)<option @selected(old('service') === $option)>{{ $option }}</option>@endforeach</select></div>
<div class="form-field sm:col-span-2"><label for="message">Tell us about your project *</label><textarea id="message" name="message" rows="5" required>{{ old('message') }}</textarea>@error('message')<small>{{ $message }}</small>@enderror</div>
<div class="sm:col-span-2"><button class="button button-primary" type="submit">Send enquiry <span>↗</span></button></div>
</form></div></div></section>
@endsection
