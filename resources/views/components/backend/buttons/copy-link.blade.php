@props(['action' => '', 'icon' => 'fas fa-link', 'title', 'small' => '', 'class' => ''])

<a class='btn btn-primary {{ $small == 'true' ? 'btn-sm' : '' }} {{ $class }} m-1' onclick="{{ $action }}" data-toggle="tooltip" title="{{ $title }}">
    <i class="{{ $icon }} fa-fw"></i>
    {!! $slot != '' ? '&nbsp;' . $slot : '' !!}
</a>