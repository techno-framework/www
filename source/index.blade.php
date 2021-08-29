@extends('_layouts.main')

@section('body')
<section>
    <div class="homepage">
        <div>
            <h1>{{ $page->siteName }}</h1>
            <h2>{{ $page->siteDescription }}</h2>
            <a href="/docs/about/">Explore</a>
        </div>
    </div>
</section>
@endsection
