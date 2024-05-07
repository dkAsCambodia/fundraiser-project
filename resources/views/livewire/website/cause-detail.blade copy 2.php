<div>
    <style>
        .paymentsCustoms__field_new {
            min-height: 17px;
            padding: 3px;
            background: #fff;
            color: #0d0d0d;
            position: absolute;
            left: 0;
            top: 0;
        }

        .featureBlock__hashLink_new {
            position: absolute;
            left: 0;
            font-size: 12px;
            text-transform: uppercase;
            color: #fff;
            font-weight: 600;
            min-width: 152px;
            min-height: 64px;
            background-repeat: no-repeat;
            padding: 9px 11px;
            top: 0;
        }

        .featureBlock__wrap_new {
            background: #fff;
            border: 1px solid #f1f1f1;
            box-shadow: 0px 10px 15px rgba(221, 221, 221, 0.15);
            padding: 4px;
        }

        .paymentsCustoms__field_new1 {
            min-height: 60px;
            padding: 0 25px;
            background: #fff;
            border: 1px solid #dcdcdc;
            box-sizing: border-box;
            box-shadow: 0px 10px 15px rgba(221, 221, 221, 0.15);
            border-radius: 12px;
            font-size: 14px;
            font-weight: 600;
            color: #0d0d0d;
            width: 100%;
        }

        .payments__input:checked+.paymentsAmountChoice__label {
            border-color: #eb9309;
            color: #eb9309;
            background-color: #f8e9d1;
            transition: all 0.4s ease;
            -webkit-transition: all 0.4s ease;
            -moz-transition: all 0.4s ease;
            -ms-transition: all 0.4s ease;
        }

        .pageBreadcumb--style1 {
            padding: 130px 0 30px;
        }

        .card2 {
            position: relative;
            border: 5px solid transparent;
            background: #f2f2f2;
            background-clip: padding-box;
            border-radius: 10px;
            padding: 2rem 1rem;

            background: linear-gradient(to bottom right, #22c1c3, #fdbb2d);
        }
    </style>
    <!-- Page Breadcumb -->
    <section class="pageBreadcumb pageBreadcumb--style1 position-relative"
        data-bg-image="{{ URL::to('website/image/bg/pageBreadcumbBg1.jpg') }}">
    </section>
    <!-- Page Breadcumb End -->
    <!-- Donation Details -->
    @php
        $raisedValue = raisedValue($causeDetails->id);
        $getFillPercentage = getFillPercentage($causeDetails->goal, $raisedValue);
    @endphp
    <section class="donation pt-2 pb-100">
        <div class="container innerWrapper">
            <div class="row card2">
                <div class="col-lg-3">
                    <marquee {{-- style=" max-height: 500px; " --}} direction = "up" height="600" behavior="alternate"
                        onmouseover="this.stop();" onmouseout="this.start();">
                        <div style=" z-index: 1; top: 103px !important; ">
                            @forelse ($getSimilarRecord as $key => $item)
                                <div class="col-md-12 gap-0"
                                    wire:click="openCam('{{ !$item['selected'] }}', '{{ $item['id'] }}')">

                                    <div class="featureBlock featureBlock--active">
                                        <div class="featureBlock__wrap_new">
                                            <figure class="featureBlock__thumb"
                                                style="    margin-bottom: 5px !important">
                                                <a class="featureBlock__thumb__link"href="#">
                                                    <img src="{{ env('ADMIN_URL') . 'storage/' . $item['photo'] }}"
                                                        alt="Gainioz Featured Thumb">
                                                </a>
                                                <a class="featureBlock__hashLink_new" href="#">
                                                    <span>
                                                        <input class="paymentsCustoms__field_new" type="checkbox"
                                                            placeholder="Custom Donation"
                                                            wire:model.live="getSimilarRecord.{{ $key }}.selected"
                                                            value="{{ $item['id'] }}"
                                                            id="similarData-{{ $key }}"
                                                            @if ($item['desabled']) disabled="disabled" @endif>
                                                    </span>
                                                </a>
                                            </figure>
                                            <small class="">
                                                <b>{{ \Illuminate\Support\Str::limit($item['title'], 50, '...') }}</b>
                                            </small>
                                        </div>
                                    </div>

                                </div>
                            @empty
                            @endforelse
                        </div>
                    </marquee>
                </div>
                <div class="col-lg-5">
                    <div class="featureBlock featureBlock--active" style="height: 500px;">
                        <div class="featureBlock__wrap">
                            <div class="featureBlock__content">
                                <h3 class="featureBlock__heading" style="padding:0;height: 59px;overflow: hidden;">
                                    {{ $causeDetails->title }}
                                </h3>
                            </div>
                            <figure class="featureBlock__thumb">
                                <a class="featureBlock__thumb__link" href="#">
                                @empty(!$causeDetails->video)
                                    <iframe width="100%" height="350px" src="{{ $causeDetails->video }}">
                                    </iframe>
                                @else
                                    @empty(!$causeDetails->photo)
                                        <img width="100%" height="300px"
                                            src="{{ env('ADMIN_URL') . 'storage/' . $causeDetails->photo }}"
                                            alt="{{ $causeDetails->title }}">
                                    @endempty
                                @endempty
                            </a>
                        </figure>
                        {{-- <div class="featureBlock__content">
                                <h3 class="featureBlock__heading">
                                    <a class="featureBlock__heading__link" href="#">
                                        {{ $causeDetails->title }}
                                    </a>
                                </h3>
                                <p class="featureBlock__text">
                                    {{ $causeDetails->short_details }}
                                </p>
                            </div> --}}
                    </div>
                    <div class="featureBlock__wrap">
                        <div class="featureBlock__donation__progress">
                            <div class="featureBlock__donation__bar">
                                <span class="featureBlock__donation__text skill-bar"
                                    data-width="{{ $getFillPercentage }}"
                                    style="width: {{ $getFillPercentage }};">{{ $getFillPercentage }}</span>
                                <div class="featureBlock__donation__line">
                                    <span class="skill-bars">
                                        <span class="skill-bars__line skill-bar"
                                            data-width="{{ $getFillPercentage }}"
                                            style="width: {{ $getFillPercentage }};"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="featureBlock__eqn">
                            <div class="featureBlock__eqn__block">
                                <span class="featureBlock__eqn__title">our goal</span>
                                <span class="featureBlock__eqn__price">${{ $causeDetails->goal }}</span>
                            </div>
                            <div class="featureBlock__eqn__block">
                                <span class="featureBlock__eqn__title">Raised</span>
                                <span class="featureBlock__eqn__price">${{ $raisedValue }}</span>
                            </div>
                            <div class="featureBlock__eqn__block">
                                <span class="featureBlock__eqn__title">to go</span>
                                <span
                                    class="featureBlock__eqn__price">${{ $causeDetails->goal - $raisedValue }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebarLayout" style="background:#f5f5f5;">
                    <div class="innerWrapperSidebar">
                        <div class="secure-donation"><i class="fa-solid fa-shield"></i> Secure Donation</div>
                        <div class="" style="min-height: 500px !important; position: relative;">
                            @forelse ($getSimilarRecord as $keyData => $item)
                                @if($item['id'] == $mainId)
                                    @foreach ($item['suggested_amounts'] as $key => $suggestedAmounts)
                                        <div class="payments__method mb-2">
                                            <input class="payments__input" id="pay{{ $key }}" type="radio"
                                                wire:model.live="getSimilarRecord.{{ $keyData }}.default_amount"
                                                value="{{ $suggestedAmounts }}">
                                            <label class="paymentsAmountChoice__label"
                                                for="pay{{ $key }}">${{ $suggestedAmounts }}</label>
                                        </div>
                                    @endforeach
                                @endif
                            @endforeach

                            <div class="paymentsInput" style="margin-top: 60px;">
                                @forelse ($getSimilarRecord as $key => $item)
                                    @if($item['id'] == $mainId)
                                        <input class="paymentsCustoms__field_new1" type="number"
                                            wire:model.live="getSimilarRecord.{{ $key }}.default_amount"
                                            placeholder="Custom Donation" style="widows: 100%">
                                    @endif
                                @endforeach
                            </div>
                            <div class="block mt-4">
                                <label for="remember_me" class="flex items-center">
                                    <input type="checkbox"
                                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                        id="remember_me" name="remember">
                                    <span class="ms-2 text-sm text-gray-600">Dedicate this donation</span>
                                </label>
                            </div>

                            <div class="" style=" position: absolute; bottom: 0;width:100%; ">
                                <div class="col-md-12" style="text-align: right">
                                    <div class="mb-4">
                                        <p><b>Total Amount: </b>${{ $totalAmount }}</p>
                                        <p><b>Total Campaigns: </b>{{ $totalCampaign }}</p>
                                    </div>
                                </div>
                                <div class="">
                                    @auth
                                        <a class="btn btn--styleOne btn--secondary it-btn  d-block"
                                            wire:click="checkountNow" wire:loading.attr="disabled">
                                            <span class="btn__text">Pay Now</span>
                                            <i class="fa-solid fa-heart btn__icon"></i>
                                            <span class="it-btn__inner">
                                                <span class="it-btn__blobs">
                                                    <div wire:loading>
                                                        <img src="{{ URL::to('website/image/loader.gif') }}"
                                                            alt="" width="60px">
                                                    </div>
                                                </span>
                                            </span>
                                        </a>
                                    @else
                                        <a class="btn btn--styleOne btn--secondary it-btn  d-block"
                                            href="/login?d={{ $causeDetails->slug }}">
                                            <span class="btn__text">Pay Now</span>
                                            <i class="fa-solid fa-heart btn__icon"></i>
                                            <span class="it-btn__inner">
                                                <span class="it-btn__blobs">
                                                    <span class="it-btn__blob"></span>
                                                    <span class="it-btn__blob"></span>
                                                    <span class="it-btn__blob"></span>
                                                    <span class="it-btn__blob"></span>
                                                </span>
                                            </span>
                                        </a>
                                    @endauth
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-30">

        @empty(!$causeDetails->video)
            @empty(!$causeDetails->photo)
                <img src="{{ env('ADMIN_URL') . 'storage/' . $causeDetails->photo }}"
                    alt="{{ $causeDetails->title }}">
            @endempty
        @endempty
        <p class="donationDetails__text mb-30">
            {!! $causeDetails->page_content !!}
        </p>
    </div>

</div>
</section>
<!-- Donation Details End -->
</div>
<script>
    $(function() {
        $('marquee').mouseover(function() {
            $(this).attr('scrollamount', 0);
        }).mouseout(function() {
            $(this).attr('scrollamount', 5);
        });
    });
</script>
