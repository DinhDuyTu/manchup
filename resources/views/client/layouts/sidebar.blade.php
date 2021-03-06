<nav id="nav-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="mm-toggle-wrap">
                    <div class="mm-toggle"> <i class="fa fa-align-justify"></i> </div>
                    <span class="mm-label">Màn Các Loại</span>
                </div>
                <div class="mega-container visible-lg visible-md visible-sm">
                    <div class="navleft-container">
                        <div class="mega-menu-title">
                            <h3>Màn Các Loại</h3>
                        </div>
                        <div style="display: none" class="mega-menu-category">
                            <ul class="nav">
                                @foreach ($categories as $category)
                                    @if ($category->parent_id > 0)
                                        <li> <a href="{{ route('client.product.show', $category->id) }}">{{ $category->name }}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @include('client.layouts.menu')
        </div>
    </div>
</nav>
