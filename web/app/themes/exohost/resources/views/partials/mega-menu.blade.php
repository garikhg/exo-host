{{--
    * Mega menu template
    https://roots.io/working-with-composers-in-sage-10/
--}}
{{--<pre>@php print_r($menu_items) @endphp</pre>--}}

@if($menu_items)
<nav id="megaMenu" class="mega-menu mega-menu--primary" aria-label="Primary navigation">
    <ul class="mega-menu--nav mega-menu--lg">
{{--        @foreach($menu_items as $menu_item)--}}
{{--            <li class="nav--item mega-menu--item-has-children">--}}
{{--                Menu Item--}}
{{--            </li>--}}
{{--        @endforeach--}}
        <li class="nav--item mega-menu--item-has-children">
            <a href="#">
                Products
            </a>
            <div class="sub-menu">
                <div class="sub-menu--wrapper">
                    <div class="nav--block-columns">
                        <div class="nav--block-column nav--block-feature">
                            <div class="nav--block-column-inner">
                                <h2 class="nav--column-title">Featured Products</h2>
                                <hr />
                                <div class="nav--item">
                                    <a href="#">
                                        <span class="nav--sup-title">Foundation</span>
                                        Shared Hosting
                                    </a>
                                </div>
                                <div class="nav--item">
                                    <a href="#">
                                        <span class="nav--sup-title">Foundation</span>
                                        WordPress Hosting
                                        <span class="nav--description">Powerful and specially optimized</span>
                                    </a>
                                </div>
                                <div class="nav--item">
                                    <a href="#">
                                        <span class="nav--sup-title">Premier</span>
                                        Enterprise WordPress
                                    </a>
                                </div>
                                <div class="nav--item">
                                    <a href="#">
                                        <span class="nav--sup-title">WooCommerce</span>
                                        WordPress eCommerce
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="nav--block-column">
                            <div class="nav--block-column-inner">
                                @php $mega_menu @endphp
                                <h2 class="nav--column-title">Additional Services</h2>
                                <hr>
                                <div class="nav--item">
                                    <a href="#">
                                        Free Hosting
                                    </a>
                                </div>
                                <div class="nav--item">
                                    <a href="#">
                                        CodeGuard Website Backup
                                    </a>
                                </div>
                                <div class="nav--item">
                                    <a href="#">
                                        Sitelock Web Security
                                    </a>
                                </div>
                                <div class="nav--item">
                                    <a href="#">
                                        SSL Certificate
                                    </a>
                                </div>
                            </div>

                            <div class="nav--block-column-inner">
                                <h2 class="nav--column-title">Dev Tools and Resources</h2>
                                <hr>
                                <div class="nav--item">
                                    <a href="#">
                                        WordPress Themes & Build Tools
                                    </a>
                                </div>
                                <div class="nav--item">
                                    <a href="#">
                                        WordPress Plugins & Updates
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="nav--block-column">
                            <div class="nav--block-column-inner">
                                <h2 class="nav--column-title">Knowledgebase</h2>
                                <hr>
                                <div class="nav--item">
                                    <a href="#">
                                        How to manage Shared Hosting?
                                        <span class="nav--description">Learn how to manage our shared hosting with a cPanel</span>
                                    </a>
                                </div>
                                <div class="nav--item">
                                    <a href="#">
                                        What is Managed WordPress Hosting?
                                        <span class="nav--description">Learn about our hosting and industry-leading features</span>
                                    </a>
                                </div>
                                <div class="nav--item">
                                    <a href="#">
                                        WordPress Resources
                                        <span class="nav--description">Articles and videos for site setup & maintenance</span>
                                    </a>
                                </div>
                            </div>
                            <div class="nav--block-column-inner">
                                <h2 class="nav--column-title">Domain Services</h2>
                                <hr>
                                <div class="nav--item">
                                    <a href="#">
                                        Domain Registration
                                    </a>
                                </div>
                                <div class="nav--item">
                                    <a href="#">
                                        Domain Transfers
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav--item">
            <a href="#">
                Pricing
            </a>
        </li>
        <li class="nav--item">
            <a href="#">
                Domains
            </a>
        </li>
    </ul>
</nav>
@endif