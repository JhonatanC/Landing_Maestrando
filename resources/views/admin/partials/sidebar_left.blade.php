<nav>

        @foreach($menuAdmin as $option)
        <li>
            <a href="{{ $option->url }}" title="{{ $option->title }}" target="{{ $option->target }}" data-params="{{ $option->params }}"> {{ $option->name }}</a>
        </li>
        @endforeach

</nav>