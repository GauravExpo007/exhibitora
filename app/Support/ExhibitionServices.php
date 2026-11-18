<?php

namespace App\Support;

class ExhibitionServices
{
    public static function all(): array
    {
        return [
            'shell-scheme' => [
                'number' => '01', 'title' => 'Shell Scheme Support',
                'tagline' => 'Make your allocated space feel unmistakably yours.',
                'description' => 'A considered finish for organiser-provided shell scheme spaces, from practical furnishings to branded graphics and show-ready details.',
                'intro' => 'Turn a standard shell scheme into a welcoming, functional brand environment. We coordinate the details that make your space feel complete before the doors open.',
                'items' => ['Stand dressing and finishing', 'Furniture planning and placement', 'Wall and fascia graphics', 'Lighting and accessories', 'Pre-show coordination'],
                'image' => 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1400&q=85',
            ],
            'exhibition-furniture' => [
                'number' => '02', 'title' => 'Exhibition Furniture',
                'tagline' => 'Comfort, function and a cohesive visitor experience.',
                'description' => 'Furniture rental and setup for conversations, hospitality, product display and everyday stand operations.',
                'intro' => 'Create a comfortable space for visitors and teams with furniture selected around your footprint, brand character and event requirements.',
                'items' => ['Tables and chairs', 'Reception counters', 'Display cabinets and shelving', 'Bar stools and lounge seating', 'Brochure and literature stands'],
                'image' => 'https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&fit=crop&w=1400&q=85',
            ],
            'graphics-branding' => [
                'number' => '03', 'title' => 'Graphics & Branding',
                'tagline' => 'Turn every surface into a brand touchpoint.',
                'description' => 'Large-format and illuminated graphics that help your message stand out across the exhibition floor.',
                'intro' => 'Bring consistency to your exhibition presence with sharp, well-produced graphics planned for the surfaces and viewing distances of your stand.',
                'items' => ['Vinyl graphics', 'Flex and large-format printing', 'Backlit graphics', 'Wall and counter branding', 'Artwork preparation support'],
                'image' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=1400&q=85',
            ],
            'professional-manpower' => [
                'number' => '04', 'title' => 'Professional Manpower',
                'tagline' => 'A capable team makes every interaction count.',
                'description' => 'Professional on-floor support to welcome guests, assist delegates and keep your stand running smoothly.',
                'intro' => 'Add the right people to your stand with roles planned around visitor flow, language needs and daily operations.',
                'items' => ['Hostesses and reception staff', 'Translators', 'Cleaning crew', 'Booth helpers', 'On-site coordination'],
                'image' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=1400&q=85',
            ],
            'exhibition-equipment' => [
                'number' => '05', 'title' => 'Exhibition Equipment',
                'tagline' => 'The practical details, ready when you need them.',
                'description' => 'Essential equipment for hospitality, presentations, visitor comfort and stand operations.',
                'intro' => 'Equip your booth with dependable essentials that support demonstrations, hospitality and day-to-day activity throughout the show.',
                'items' => ['Coffee machines', 'LED and LCD screens', 'TV stands and mounts', 'Refrigerators', 'Cold storage and water dispensers'],
                'image' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=1400&q=85',
            ],
            'custom-branding' => [
                'number' => '06', 'title' => 'Custom Branding',
                'tagline' => 'A consistent identity from aisle to meeting area.',
                'description' => 'Custom visual elements that make your booth easier to recognise and navigate.',
                'intro' => 'Extend your identity across the stand with clear, coordinated visual elements designed to work together.',
                'items' => ['Booth branding', 'Wall graphics', 'Standees', 'Directional signage', 'Promotional display elements'],
                'image' => 'https://images.unsplash.com/photo-1559223607-a43c990c692c?auto=format&fit=crop&w=1400&q=85',
            ],
            'event-photography' => [
                'number' => '07', 'title' => 'Professional Photography',
                'tagline' => 'Keep the moments and details worth sharing.',
                'description' => 'Professional exhibition photography and event documentation for your brand and marketing channels.',
                'intro' => 'Capture the finished stand, visitor interactions and key moments so your team can share the event long after it closes.',
                'items' => ['Stand and environment photography', 'Brand and product details', 'Event highlights', 'Team and visitor moments', 'Edited image delivery'],
                'image' => 'https://images.unsplash.com/photo-1505373877841-8d25f7d46678?auto=format&fit=crop&w=1400&q=85',
            ],
            'display-solutions' => [
                'number' => '08', 'title' => 'Display Solutions',
                'tagline' => 'Give every product a clear place to shine.',
                'description' => 'Purposeful display counters, reception setups and shelving systems for products and brand materials.',
                'intro' => 'Present products and information in an organised, accessible way with display solutions suited to your stand layout.',
                'items' => ['Display counters', 'Reception setups', 'Shelving systems', 'Product presentation units', 'Literature displays'],
                'image' => 'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1400&q=85',
            ],
            'storage-solutions' => [
                'number' => '09', 'title' => 'Storage Solutions',
                'tagline' => 'Keep the working side of your stand organised.',
                'description' => 'Practical cabinets and storage units that help keep supplies and personal items out of sight.',
                'intro' => 'Make better use of your stand footprint with storage planned around your operational needs and available space.',
                'items' => ['Lockable cabinets', 'Product storage', 'Back-of-house units', 'Shelving and cupboards', 'Space planning'],
                'image' => 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1400&q=85',
            ],
        ];
    }
}
