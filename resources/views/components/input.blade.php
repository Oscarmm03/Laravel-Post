@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-fuchsia-300 focus:border-sky-700 focus:ring-sky-500 rounded-md shadow-sm']) !!}>
