<ul>
@foreach($children as $child)
    <li>
        {{ $child->name }}
        @if($child->childrenRecursive->count())
            @include('categories.partials.children', ['children' => $child->childrenRecursive])
        @endif
    </li>
@endforeach
</ul>
