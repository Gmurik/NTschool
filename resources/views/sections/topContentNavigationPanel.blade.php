<section class="page_breadcrumbs ds background_cover background_overlay section_padding_top_65 section_padding_bottom_65">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="highlight">@yield('pageName')</h2>
                <ol class="breadcrumb darklinks">
                    <li>
                        <a href="./">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="@yield('url')">@yield('labelForUrl')</a>
                    </li>
                    <li class="active">@yield('pageName')</li>
                </ol>
            </div>
        </div>
    </div>
</section>
