@extends('layouts.app')
@section('title', 'About Us — Exhibitora')
@section('content')
    <section class="inner-hero">
        <div class="mx-auto max-w-7xl px-5 py-20 lg:px-8 lg:py-28">
            <p class="eyebrow">A LITTLE ABOUT US</p>
            <h1 class="display-title mt-5 max-w-4xl text-5xl md:text-7xl">Good exhibitions happen when <em>everything
                    connects.</em></h1>
            <p class="mt-7 max-w-2xl text-lg leading-8 text-muted">We bring essential exhibition support services together,
                helping brands create welcoming, functional and memorable spaces.</p>
        </div>
    </section>
    <section class="pb-20">
        <div class="mx-auto grid max-w-7xl gap-12 px-5 lg:grid-cols-2 lg:px-8"><img class="about-large-image"
                src="https://images.unsplash.com/photo-1505373877841-8d25f7d46678?auto=format&fit=crop&w=1400&q=85"
                alt="Busy exhibition floor">
            <div class="self-center">
                <p class="eyebrow">OUR POINT OF VIEW</p>
                <h2 class="section-title mt-4">Make the complex feel <em>simple.</em></h2>
                <p class="mt-6 leading-8 text-muted">From the first planning conversation to the final show-day detail, our
                    approach is grounded in clear communication, practical thinking and dependable coordination.</p>
                <p class="mt-4 leading-8 text-muted">We believe the best exhibition experiences are not only visually
                    compelling — they work beautifully for visitors, exhibitors and the teams behind them.</p>
            </div>
        </div>
    </section>
    <section class="dark-band py-20">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">
            <p class="eyebrow eyebrow-light">WHAT GUIDES OUR WORK</p>
            <div class="mt-10 grid gap-8 md:grid-cols-3">
                <div><span class="stat-symbol">01</span>
                    <h3 class="mt-4 text-2xl font-extrabold text-white">Considered details</h3>
                    <p class="mt-3 leading-7 text-white/55">Every element has a purpose, from visitor comfort to the way
                        your brand is presented.</p>
                </div>
                <div><span class="stat-symbol">02</span>
                    <h3 class="mt-4 text-2xl font-extrabold text-white">Clear coordination</h3>
                    <p class="mt-3 leading-7 text-white/55">A joined-up approach keeps people, equipment and timelines
                        moving together.</p>
                </div>
                <div><span class="stat-symbol">03</span>
                    <h3 class="mt-4 text-2xl font-extrabold text-white">Show-ready thinking</h3>
                    <p class="mt-3 leading-7 text-white/55">We focus on practical execution so your team can focus on the
                        event.</p>
                </div>
            </div>
        </div>
    </section>
    @include('components.cta')
@endsection
