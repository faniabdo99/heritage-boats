<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>https://iraqiheritageboatclubs.net/</loc>
        <lastmod>2021-09-18</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc>https://iraqiheritageboatclubs.net/about</loc>
        <lastmod>2021-09-18</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc>https://iraqiheritageboatclubs.net/contact</loc>
        <lastmod>2021-09-18</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc>https://iraqiheritageboatclubs.net/acknowledgments</loc>
        <lastmod>2021-09-18</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1</priority>
    </url>
    @forelse($AllBlogs as $Blog)
        <url>
            <loc>{{route('blog.single' , [$Blog->slug , $Blog->id])}}</loc>
            <lastmod>{{$Blog->updated_at->format('Y-m-d')}}</lastmod>
            <changefreq>daily</changefreq>
            <priority>1</priority>
        </url>
    @empty
    @endforelse
    @forelse($AllClubs as $Club)
        <url>
            <loc>{{route('club.single' , [$Club->slug , $Club->id])}}</loc>
            <lastmod>{{$Club->updated_at->format('Y-m-d')}}</lastmod>
            <changefreq>daily</changefreq>
            <priority>1</priority>
        </url>
    @empty
    @endforelse
</urlset>
