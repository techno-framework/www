@extends('_layouts.main')

@section('body')
<nav class="nav">
    <a href="/">
        <img class="nav__logo" src="/assets/images/techno_wrmwrk.svg" alt="Techno Framework"/>
    </a>
    <div>
        <label for="ver_select">VER. </label>
        <select id="ver_select" class="nav__select">
            <option>1.x</option>
        </select>
    </div>
</nav>

<section class="docs">
    <div class="docs__nav">
        <h1>{{ $page->title }}</h1>
        <nav>
            @foreach ($page->navigation as $name => $url)
                <a href="{{ $url }}">{{ $name }}</a><br/><br/>
            @endforeach
        </nav>
    </div>
    <div class="docs__content">
        <div class="docs__line"></div>
        @yield('content')
    </div>
</section>
@endsection
