@extends('home')

@section('front')
<div class="product-details-area pt-120 pb-115">
    <div class="container">
        <single-product></single-product>
    </div>

    <div class="related-product pt-115 pb-115">
        <div class="container">
            <div class="section-title mb-45 text-center">
                <h2>Related Product</h2>
            </div>
        </div>
        <single-product-related-by-category></single-product-related-by-category>
    </div>

    <div class="description-review-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <single-product-reviews-form></single-product-reviews-form>
                    <single-product-reviews-list></single-product-reviews-list>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



