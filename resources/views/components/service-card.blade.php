<a href="{{ route('services.show', $slug) }}" class="service-card group">
    <div class="service-card-image"><img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" loading="lazy"><span
            class="service-number">{{ $service['number'] }}</span><span class="service-arrow">↗</span></div>
    <div class="p-6">
        <h3 class="text-xl font-extrabold tracking-tight">{{ $service['title'] }}</h3>
        <p class="mt-2 text-sm leading-6 text-muted">{{ $service['description'] }}</p><span
            class="card-link mt-5">Explore service <span>→</span></span>
    </div>
</a>
