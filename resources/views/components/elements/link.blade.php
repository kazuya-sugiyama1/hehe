{{-- Stored in /resources/components/elements/link.blade.php --}}
<a id="{{ $id?? uniqid('md-link', false) }}" @if(isset($attrs) && filled($attrs)) @foreach($attrs as $attr => $attr_value) {{ $attr }}="{{ $attr_value }}" @endforeach @endif href="{{ $href?? '#'}}" class="@if(isset($confirmed) && $confirmed === true) gb-confirm-action-link @endif @if(isset($classes) && filled($classes) && is_array($classes)) {{ implode(' ', $classes) }} @endif" @if(isset($confirmed) && $confirmed === true) data-type="confirmed" data-dialog-title="{{ $dialog_title ?? 'Confirmed'}}" data-dialog-message="{{ $dialog_message?? 'Are you sure you want to continue?' }}" @endif>{!! $slot !!}</a>