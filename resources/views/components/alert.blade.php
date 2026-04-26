<div>
    <!-- An unexamined life is not worth living. - Socrates -->
    @props(['type' => 'info', 'message'])

@php
    $colors = [
        'success' => '#2ecc71',
        'error' => '#e74c3c',
        'warning' => '#f1c40f',
        'info' => '#3498db',
    ];
@endphp

<div style="
    padding: 12px;
    margin: 10px 0;
    border-radius: 5px;
    color: white;
    background-color: {{ $colors[$type] ?? $colors['info'] }};
">
    {{ $message }}
</div>
</div>