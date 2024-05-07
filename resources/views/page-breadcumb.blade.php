<section class="pageBreadcumb pageBreadcumb--style1 position-relative"
    data-bg-image="{{ URL::to('website/image/bg/pageBreadcumbBg1.jpg') }}">
    <div class="sectionShape sectionShape--top">
        <img src="{{ URL::to('website/image/shapes/pagebreadcumbShapeTop.svg') }}" alt="Gainioz">
    </div>
    <div class="sectionShape sectionShape--bottom">
        <img src="{{ URL::to('website/image/shapes/pagebreadcumbShapeBottom.svg') }}" alt="Gainioz">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pageTitle text-center">
                    <h2 class="pageTitle__heading text-white text-uppercase mb-25">
                        {{ $pageName ?? 'Currenct Page' }}
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>
