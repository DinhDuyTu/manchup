<div class="col-md-9 col-sm-8">
    <div class="mtmegamenu">
        <ul>
            <li class="mt-root demo_custom_link_cms">
                <div class="mt-root-item">
                    <a href="/">
                        <div class="title title_font"><span style="color: white" class="title-text">Trang Chủ</span></div>
                    </a>
                </div>
            </li>
            <li class="mt-root">
                <div class="mt-root-item"><a href="#">
                        <div class="title title_font"><span style="color: white" class="title-text">Sản Phẩm</span></div>
                    </a></div>
                <ul class="menu-items col-xs-12">
                    <li class="menu-item depth-1 menucol-1-3 ">
                        <div class="title title_font"> <a href="#"> Sản Phẩm</a></div>
                        <ul class="submenu">
                            @foreach ($categories as $category)
                                @if ($category->parent_id == 0)
                                    <li class="menu-item">
                                        <div class="title"> <a href="shop_grid.html">{{ $category->name }}</a></div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="mt-root">
                <div class="mt-root-item">
                    <a href="contact_us.html">
                        <div class="title title_font"><span style="color: white" class="title-text">Tin Tức</span> </div>
                    </a>
                </div>
            </li>
            <li class="mt-root">
                <div class="mt-root-item">
                    <a href="about_us.html">
                        <div class="title title_font"><span style="color: white" class="title-text">Giới Thiệu</span></div>
                    </a>
                </div>
            </li>
            <li class="mt-root demo_custom_link_cms">
                <div class="mt-root-item">
                    <a href="blog.html">
                        <div class="title title_font"><span style="color: white" class="title-text">Phản Hồi</span></div>
                    </a>
                </div>
            </li>
            <li class="mt-root">
                <div class="mt-root-item">
                    <div class="title title_font"><span style="color: white" class="title-text">Best Seller</span></div>
                </div>
                <ul class="menu-items col-xs-12">
                    <li class="menu-item depth-1 product menucol-1-3 withimage">
                        <div class="product-item">
                            <div class="item-inner">
                                <div class="product-thumbnail">
                                    <div class="icon-sale-label sale-left">Sale</div>
                                    <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                            <figure> <img class="first-img" src="images/products/img06.jpg"
                                                    alt="html template"> <img class="hover-img"
                                                    src="images/products/img06.jpg" alt="html template">
                                            </figure>
                                        </a>
                                        <button type="button" class="add-to-cart-mt"> <i
                                                class="fa fa-shopping-cart"></i><span style="color: white"> Add to Cart</span>
                                        </button>
                                    </div>
                                    <div class="pr-info-area">
                                        <div class="pr-button">
                                            <div class="mt-button add_to_wishlist"> <a href="wishlist.html">
                                                    <i class="fa fa-heart"></i> </a> </div>
                                            <div class="mt-button add_to_compare"> <a href="compare.html">
                                                    <i class="fa fa-signal"></i> </a> </div>
                                            <div class="mt-button quick-view"> <a href="quick_view.html"> <i
                                                        class="fa fa-search"></i> </a> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"> <a title="Ipsums Dolors Untra"
                                                href="single_product.html">Ipsums Dolors Untra </a> </div>
                                        <div class="item-content">
                                            <div class="rating"> <i class="fa fa-star-o"></i> <i
                                                    class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="item-price">
                                                <div class="price-box"> <span style="color: white" class="regular-price"> <span style="color: white"
                                                            class="price">$125.00</span> </span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item depth-1 product menucol-1-3 withimage">
                        <div class="product-item">
                            <div class="item-inner">
                                <div class="product-thumbnail">
                                    <div class="icon-sale-label sale-left">Sale</div>
                                    <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                            <figure> <img class="first-img" src="images/products/img02.jpg"
                                                    alt="html template"> <img class="hover-img"
                                                    src="images/products/img02.jpg" alt="html template">
                                            </figure>
                                        </a>
                                        <button type="button" class="add-to-cart-mt"> <i
                                                class="fa fa-shopping-cart"></i><span style="color: white"> Add to Cart</span>
                                        </button>
                                    </div>
                                    <div class="pr-info-area">
                                        <div class="pr-button">
                                            <div class="mt-button add_to_wishlist"> <a href="wishlist.html">
                                                    <i class="fa fa-heart"></i> </a> </div>
                                            <div class="mt-button add_to_compare"> <a href="compare.html">
                                                    <i class="fa fa-signal"></i> </a> </div>
                                            <div class="mt-button quick-view"> <a href="quick_view.html"> <i
                                                        class="fa fa-search"></i> </a> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"> <a title="Ipsums Dolors Untra"
                                                href="single_product.html">Ipsums Dolors Untra </a> </div>
                                        <div class="item-content">
                                            <div class="rating"> <i class="fa fa-star-o"></i> <i
                                                    class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="item-price">
                                                <div class="price-box"> <span style="color: white" class="regular-price"> <span style="color: white"
                                                            class="price">$125.00</span> </span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item depth-1 product menucol-1-3 withimage">
                        <div class="product-item">
                            <div class="item-inner">
                                <div class="icon-sale-label sale-left">Sale</div>
                                <div class="icon-new-label new-right">New</div>
                                <div class="product-thumbnail">
                                    <div class="icon-sale-label sale-left">Sale</div>
                                    <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                            <figure> <img class="first-img" src="images/products/img03.jpg"
                                                    alt="html template"> <img class="hover-img"
                                                    src="images/products/img03.jpg" alt="html template">
                                            </figure>
                                        </a>
                                        <button type="button" class="add-to-cart-mt"> <i
                                                class="fa fa-shopping-cart"></i><span style="color: white"> Add to Cart</span>
                                        </button>
                                    </div>
                                    <div class="pr-info-area">
                                        <div class="pr-button">
                                            <div class="mt-button add_to_wishlist"> <a href="wishlist.html">
                                                    <i class="fa fa-heart"></i> </a> </div>
                                            <div class="mt-button add_to_compare"> <a href="compare.html">
                                                    <i class="fa fa-signal"></i> </a> </div>
                                            <div class="mt-button quick-view"> <a href="quick_view.html"> <i
                                                        class="fa fa-search"></i> </a> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"> <a title="Ipsums Dolors Untra"
                                                href="single_product.html">Ipsums Dolors Untra </a> </div>
                                        <div class="item-content">
                                            <div class="rating"> <i class="fa fa-star-o"></i> <i
                                                    class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="item-price">
                                                <div class="price-box"> <span style="color: white" class="regular-price"> <span style="color: white"
                                                            class="price">$125.00</span> </span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
