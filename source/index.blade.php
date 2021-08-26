@extends('_layouts.main')

@section('body')
<section>
    <h1>{{ $page->siteName }}</h1>
    <h2>{{ $page->siteDescription }}</h2>

    <div>
        <a href="/docs/about">Docs</a>
        <a href="https://github.com/techno-framework" title="GitHub" target="_blank">GitHub</a>
    </div>
</section>
@endsection
