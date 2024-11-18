<div {{ $attributes->merge(['class' => 'auth-card']) }}>
    <div>
        {{ $logo }}
    </div>

    <div class="mt-4">
        {{ $slot }}
    </div>
</div>