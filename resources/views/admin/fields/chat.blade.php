<x-moonshine::box>
    <div x-id="['chat']"
         :id="$id('chat')"
         {{ $element->attributes()->only('class') }}
         data-field-block="{{ $element->column() }}"
    >
        {{ $table->render() }}
    </div>
</x-moonshine::box>




