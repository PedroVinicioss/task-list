Hello Im a blade template

@isset($name)
    The name is {{ $name }}
@endisset

The age is {{ $age }}
The hobbies are:
<ul>
    @foreach ($hobbies as $hobby)
        <li>{{ $hobby }}</li>
    @endforeach
</ul>
