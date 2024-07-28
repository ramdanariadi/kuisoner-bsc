<div class="text-end">
    @can('edit_'.$module_name)
    <x-backend.buttons.edit route='{!!route("backend.$module_name.edit", $data)!!}' title="{{__('Edit')}} {{ ucwords(Str::singular($module_name)) }}" small="true" />
    @endcan
    <x-backend.buttons.show route='{!!route("backend.$module_name.show", $data)!!}' title="{{__('Show')}} {{ ucwords(Str::singular($module_name)) }}" small="true" />

    @if($module_name == 'posts')
    <x-backend.buttons.copy-link action="copyToClipboard('{{ route('detail',['id' => encode_id($data->id)]) }}')" title="{{__('Copy Link')}} {{ ucwords(Str::singular($module_name)) }}" small="true" />
    @endif
</div>