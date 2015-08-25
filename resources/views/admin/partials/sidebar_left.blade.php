<nav>

        @foreach($options as $option)
        <li>
            <a href="{{ $option->url }}" title="{{ $option->title }}"> {{ $option->name }}</a>
        </li>
        @endforeach

</nav>