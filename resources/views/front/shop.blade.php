@extends('home')

@section('front')
<div class="container">
    <div class="shop-area pt-120 pb-120">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">
                    <div class="shop-bottom-area">
                        <div class="tab-content jump">
                            <div id="shop-1" class="tab-pane active">
                                <div class="row">
                                    <shop-single-product></shop-single-product>
                                </div>
                            </div>

                        </div>
                        <shop-pagination></shop-pagination>
                    </div>
                </div>
                <div class="col-lg-3">
                    <shop-sidebar></shop-sidebar>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
