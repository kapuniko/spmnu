@if($indexView ?? false)
    @foreach($element->getFields()->indexFields() as $key => $field)
        @if($element->hasLabels())
            <x-moonshine::divider :label="$field->label()" />
        @endif
        @if($key === 0)
            <div style='white-space: normal;' {{ $element->attributes()
                ->only('class')
                ->merge(['class' => 'my-2']) }}
            >
            {!! $field->preview() !!}
            </div>
        @else
             <span {{ $element->attributes()
                ->only('class')
                ->merge(['class' => 'my-2']) }}
             >
            {!! $field->preview() !!}
             </span>
        @endif


    @endforeach
@else
    <x-moonshine::fields-group
        :components="$element->getFields()"
        :container="false"
    />
@endif
