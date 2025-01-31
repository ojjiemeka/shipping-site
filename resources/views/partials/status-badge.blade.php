@props(['status'])

@php
    $statusConfig = [
        'pending' => [
            'color' => 'yellow',
            'icon' => 'fa-clock',
            'text' => 'Pending'
        ],
        'in_transit' => [
            'color' => 'white',
            'icon' => 'fa-truck-moving',
            'text' => 'In Transit'
        ],
        'delivered' => [
            'color' => 'primary',
            'icon' => 'fa-check-circle',
            'text' => 'Delivered'
        ]
    ];
    
    $config = $statusConfig[strtolower($status)] ?? [
        'color' => 'gray',
        'icon' => 'fa-question-circle',
        'text' => 'Unknown'
    ];
@endphp

<span class="badge py-4px px-2 fs-9px d-inline-flex align-items-center text-uppercase
    @switch($status)
        @case('pending') bg-yellow bg-opacity-15 text-yellow @break
        @case('delivered') bg-primary bg-opacity-15 text-primary @break
        @case('in_transit') bg-white bg-opacity-15 text-white text-opacity-75 @break
    @endswitch
">
    <i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i>
    {{ ucfirst(str_replace('_', ' ', $status)) }}
</span> 