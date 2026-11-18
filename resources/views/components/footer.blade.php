<footer class="site-footer">
    <div class="mx-auto grid max-w-7xl gap-12 px-5 py-16 md:grid-cols-2 lg:px-8">
        <div>
            <a href="{{ route('home') }}" class="brand-mark brand-mark-light">EXHIBITORA<span>.</span></a>
            <p class="mt-5 max-w-md text-sm leading-7 text-white/65">Exhibition support that brings the details together.
                Furniture, graphics, people and equipment — thoughtfully coordinated for show day.</p>
        </div>
        <div class="grid grid-cols-2 gap-8 sm:grid-cols-3">
            <div>
                <p class="footer-heading">Explore</p><a href="{{ route('about') }}">About us</a><a
                    href="{{ route('services.index') }}">All services</a><a href="{{ route('contact') }}">Contact</a>
            </div>
            <div>
                <p class="footer-heading">Services</p><a href="{{ route('services.show', 'shell-scheme') }}">Shell
                    scheme</a><a href="{{ route('services.show', 'graphics-branding') }}">Graphics</a><a
                    href="{{ route('services.show', 'professional-manpower') }}">Manpower</a>
            </div>
            <div>
                <p class="footer-heading">Connect</p><a
                    href="mailto:hello@exhibitora.example">hello@exhibitora.example</a><a href="tel:+910000000000">+91
                    00000 00000</a>
            </div>
        </div>
    </div>
    <div class="border-t border-white/10">
        <div
            class="mx-auto flex max-w-7xl flex-col gap-2 px-5 py-5 text-xs text-white/45 sm:flex-row sm:justify-between lg:px-8">
            <span>© {{ date('Y') }} Exhibitora. All rights reserved.</span><span>Designed for memorable exhibition
                experiences.</span></div>
    </div>
</footer>
