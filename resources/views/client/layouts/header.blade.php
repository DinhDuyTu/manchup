<header style="border-bottom: 5px solid red;">
    <div class="header-container">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 hidden-xs">
                        <div class="welcome-msg "><i class="fa fa-phone"></i> Giao Hàng Toàn Quốc</div>
                        <span class="phone hidden-sm">Mùng tự bung Kinh Bắc giá rẻ chất lượng bất ngờ!</span>
                    </div>
                    <div class="headerlinkmenu col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="links">
                            <div class="myaccount">
                                <a title="My Account" href="tel:096 862 56 79">                                    
                                    <span class="hidden-xs"><i class="fa fa-user"></i> Hotline: <b>096 862 56 79</b></span>
                                </a>
                            </div>
                            <div class="wishlist"><a title="My Wishlist" href="#"><i class="fa fa-heart"></i><span class="hidden-xs">Hỗ Trợ Trực Tuyến</span></a></div>
                            <div class="wishlist">
                                @if (Auth::Check() == true)
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button style="background: white" class="btn" id="logout"><i class="fa fa-sign-out" aria-hidden="true"></i> {{ Auth::User()->name }} </button>
                                        @if (Auth::User()->role > 0)
                                            |<a href="{{ route('admin.dashboard.index') }}">Admin Page</a>
                                        @endif
                                    </form>
                                @else
                                    <a href="{{ route('login') }}">Đăng Nhập</a>
                                @endif
                                    
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <div class="logo"><a title="e-commerce" href="/"><b style="color:#0062bd;">Màn Kinh Bắc</b></div>
                </div>
                <div class="col-xs-9 col-sm-6 col-md-6">
                    <div class="top-search">
                        <div id="search">
                            <form action="{{ route('client.search') }}" method="POST">
                                @csrf
                                <div class="input-group">
                                    <select class="cate-dropdown hidden-xs" name="">
                                        <option>Danh Mục</option>
                                    </select>
                                    <input type="text" class="form-control" placeholder="Search" name="search">
                                    <button class="btn-search" type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-xs-3 top-cart">
                    <div class="top-cart-contain">
                        <div class="mini-cart">
                            <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle">
                                <a href="{{ route('client.carts.index') }}">
                                    <div class="cart-icon"><i class="fa fa-shopping-cart"></i></div>
                                        <div class="shoppingcart-inner hidden-xs">
                                            <span class="cart-title">Giỏ hàng</span> 
                                            <span class="cart-total">
                                                @php $count = 0 @endphp
                                                @if ($cookie != false)
                                                    @foreach ($cookie as $key => $item)
                                                        @php ++$count @endphp
                                                    @endforeach
                                                    {{ $count }}
                                                @endif
                                                Sản Phẩm
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            <div>
                                <div class="top-cart-content">
                                    <ul id="cart-sidebar" class="mini-products-list">
                                        @if ($cookie != false)
                                            @php $subToTal = 0 @endphp
                                            @foreach ($cookie as $key => $cart)
                                                <li class="item odd">
                                                    <a href="{{ route('client.product.info', $cart['product_id']) }}" title="Ipsums Dolors Untra" class="product-image">
                                                        <img src="{{ $cart['product_image'] }}"alt="html template" width="65">
                                                    </a>
                                                    <div class="product-details">
                                                        <p class="product-name">
                                                            <a href="{{ route('client.product.info', $cart['product_id']) }}">{{ $cart['product_name'] }}</a>
                                                        </p>
                                                        <strong>{{ $cart['product_num'] }}</strong> x <span class="price">{{ number_format($cart['product_price']) }} VND</span>
                                                    </div>
                                                </li>
                                                @php $subToTal = $subToTal + $cart['product_num'] * $cart['product_price'] @endphp
                                            @endforeach 
                                        @else
                                        <li><p>Giỏ Hàng Trống</p></li>
                                        @endif
                                    </ul>
                                    @if ($cookie != false)
                                        <div class="top-subtotal">Tổng Tiền: <span class="price">{{ number_format($subToTal) }}</span></div>
                                    @endif
                                    <div class="actions">
                                        <a href="{{ route('client.carts.index') }}">
                                            <button class="btn-checkout" type="button">
                                                <i class="fa fa-check"></i><span>Thanh Toán</span>
                                            </button>
                                        </a>
                                        <a href="{{ route('client.carts.index') }}">
                                            <button class="view-cart" type="button">
                                                <i class="fa fa-shopping-cart"></i><span>Giỏ Hàng</span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
