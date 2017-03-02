@extends('layout')

@if($metadata != '')
    @section('metatitle')
        @foreach ($commonData as $data)
            <title>{{ $metadata->meta_title }} - {{ $data->default_site_title }}</title>
            <meta property="og:title" content="{{ $metadata->meta_title }} - {{ $data->default_site_title }}" />
        @endforeach
    @stop

    @section('metadesc')
        <meta name="description" content="{{ $metadata->meta_desc }}">
        <meta property="og:description" content="{{ $metadata->meta_desc }}" />
    @stop

    @section('metakeys')
            <meta name="keywords" content="{{ $metadata->meta_keywords }}">
    @stop
@endif
        
@section('content')
    <div class="itemDetail">
        <div class="sectionFullWidth section-one sectionCover pageCover">
            <div class="container-fluid">
                <div class="row-fluid">
                    <h1>Mapa stránok</h1>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="sitemap">
                            <div class="sitemapItem">
                                <a href="{{ url('/') }}">Úvod</a>
                            </div>
                            <div class="sitemapItem">
                                <a href="{{ url('sluzby') }}">Služby</a>
                                @foreach($services as $service)
                                    <div class="sitemapItem sitemapSubitem">
                                        <a href="{{ url('sluzby/'.$service->item_slug) }}">{{ $service->item_name }}</a>
                                        @foreach ($allservices as $generalservice)
                                            @if ($generalservice->rel_service_id === $service->id)
                                            <div class="sitemapItem sitemapSubitem">
                                                <a href="{{ url('sluzby/'.$service->item_slug.'/'.$generalservice->item_slug) }}">{{ $generalservice->item_name }}</a>
                                            </div>
                                            @endif
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                            <div class="sitemapItem">
                                <a href="{{ url('sluzby/situacie') }}">Životné situácie</a>
                                @foreach($situations as $situation)
                                    <div class="sitemapItem sitemapSubitem">
                                        <a href="{{ url('sluzby/situacie/'.$situation->slug) }}">{{ $situation->title }}</a>
                                    </div>
                                @endforeach
                            </div>
                            <div class="sitemapItem">
                                <a href="{{ url('referencie') }}">Referencie</a>
                            </div>
                            <div class="sitemapItem">
                                <a href="{{ url('cennik') }}">Cenník</a>
                            </div>
                            <div class="sitemapItem">
                                <a href="{{ url('kontakt') }}">Kontakt</a>
                            </div>
                            <div class="sitemapItem">
                                <a href="{{ url('blog') }}">Blog</a>
                                @foreach($blogs as $blog)
                                    <div class="sitemapItem sitemapSubitem">
                                        <a href="{{ url('blog/'.$blog->item_slug) }}">{{ $blog->item_name }}</a>
                                    </div>
                                @endforeach
                            </div>
                            <div class="sitemapItem">
                                <a href="{{ url('cenova-ponuka') }}" class="">Cenová ponuka</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('modules.quote')
    </div>
@stop