<section class="ftco-section">
    <div class="container">
        <div class="ftco-search">
            <div class="row">
                <div class="col-md-12 nav-link-wrap">
                    <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        @foreach($categories as $indexCategory => $category)
                            <a class="nav-link ftco-animate @if($indexCategory == 0) active @endif" id="v-pills-{{$indexCategory}}-tab" data-toggle="pill" href="#v-pills-{{$indexCategory}}" role="tab" aria-controls="v-pills-{{$indexCategory}}" aria-selected="true">{{$category->name}}</a>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-12 tab-wrap">

                    <div class="tab-content" id="v-pills-tabContent">
                        @foreach($categories as $indexCategory => $category)
                            <div class="tab-pane fade show @if($indexCategory == 0) active @endif" id="v-pills-{{$indexCategory}}" role="tabpanel" aria-labelledby="day-{{$indexCategory}}-tab">
                                <div class="row no-gutters d-flex align-items-stretch">
                                    @foreach($category->products as $indexProduct => $product)
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img" style="background-image: url('/storage/{{$product->photo}}');"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>{{$product->name}}</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">{{$product->price}}€</span>
                                                            </div>
                                                        </div>
                                                        <p>{{$product->description}}</p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
