@extends('layouts.app')
@section('title', 'Exhibitora — Exhibition Support, Made Seamless')
@section('content')
    <section class="hero-section">
        <div class="mx-auto grid max-w-7xl items-center gap-12 px-5 py-16 lg:grid-cols-[1.02fr_.98fr] lg:px-8 lg:py-24">
            <div class="relative z-10">
                <p class="eyebrow"><span></span> EXHIBITION SUPPORT, REIMAGINED</p>
                <h1 class="display-title mt-6 text-5xl leading-[1.04] sm:text-6xl lg:text-7xl">The details that make your
                    <em>stand</em> stand out.</h1>
                <p class="mt-7 max-w-xl text-base leading-8 text-muted">From furniture and graphics to manpower and
                    equipment, bring every part of your exhibition experience together with one dependable team.</p>
                <div class="mt-9 flex flex-wrap gap-3"><a href="{{ route('services.index') }}"
                        class="button button-primary">Explore services <span>↗</span></a><a href="{{ route('contact') }}"
                        class="button button-outline">Plan your stand</a></div>
                <div class="hero-proof mt-12">
                    <div class="proof-avatars"><span>E</span><span>X</span><span>P</span></div>
                    <p><strong>One coordinated team.</strong><br><span>Every detail, considered.</span></p>
                </div>
            </div>
            <div class="hero-visual">
                <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=1500&q=90"
                    alt="Contemporary exhibition event space">
                <div class="hero-stamp"><span>01 / 09</span><strong>Make space<br>for impact.</strong><span
                        class="stamp-line"></span></div>
                <div class="hero-caption"><span>DESIGN · DETAIL · DELIVERY</span><span>SCROLL TO EXPLORE ↓</span></div>
            </div>
        </div>
    </section>
    <section class="py-20 md:py-28">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">
            <div class="section-top">
                <div>
                    <p class="eyebrow">WHAT WE BRING TO THE FLOOR</p>
                    <h2 class="section-title mt-4">Everything your stand needs.<br><em>Nothing left to chance.</em></h2>
                </div><a href="{{ route('services.index') }}" class="text-link">View all services ↗</a>
            </div>
            <div class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($services as $slug => $service)
                    @include('components.service-card', ['service' => $service, 'slug' => $slug])
                @endforeach
            </div>
        </div>
    </section>
    <section class="dark-band py-20 md:py-28">
        <div class="mx-auto grid max-w-7xl gap-12 px-5 lg:grid-cols-2 lg:px-8">
            <div>
                <p class="eyebrow eyebrow-light">ONE TEAM. MANY MOVING PARTS.</p>
                <h2 class="section-title mt-4 text-white">A smoother show floor starts <em>behind the scenes.</em></h2>
            </div>
            <div class="grid grid-cols-2 gap-7 self-end text-white">
                <div><span class="stat-symbol">01</span>
                    <h3 class="mt-3 font-bold">Thoughtful planning</h3>
                    <p class="mt-2 text-sm leading-6 text-white/55">We start with your space, goals and practical
                        requirements.</p>
                </div>
                <div><span class="stat-symbol">02</span>
                    <h3 class="mt-3 font-bold">Reliable coordination</h3>
                    <p class="mt-2 text-sm leading-6 text-white/55">The details are aligned before your show opens.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 md:py-28">
        <div class="mx-auto grid max-w-7xl items-center gap-12 px-5 lg:grid-cols-2 lg:px-8">
            <div class="about-photo"><img
                    src="https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=1300&q=85"
                    alt="Exhibition team coordinating an event" loading="lazy"><span>BUILT AROUND YOUR SHOW</span></div>
            <div>
                <p class="eyebrow">THE EXHIBITORA APPROACH</p>
                <h2 class="section-title mt-4">A partner for the big picture <em>and the small details.</em></h2>
                <p class="mt-6 leading-8 text-muted">An exhibition is made up of hundreds of moving parts. We bring
                    essential support services into one coordinated experience, helping your team focus on the conversations
                    that matter.</p><a href="{{ route('about') }}" class="button button-primary mt-8">Get to know us
                    <span>↗</span></a>
            </div>
        </div>
    </section>
    @include('components.cta')
@endsection
