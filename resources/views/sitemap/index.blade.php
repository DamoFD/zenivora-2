@php echo '<?xml version="1.0" encoding="UTF-8"?>'; @endphp

<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <sitemap>
        <loc>{{ route('sitemap.pages.index') }}</loc>
        <lastmod>{{ date('c') }}</lastmod>
    </sitemap>
    <sitemap>
        <loc>{{ route("sitemap.locations.index") }}</loc>
        <lastmod>{{ date('c') }}</lastmod>
    </sitemap>
</sitemapindex>
