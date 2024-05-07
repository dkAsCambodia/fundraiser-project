<div>
    <div class="sidebarWidget">
        {{-- <div class="sidebarTitle">
            <h6 class="sidebarTitle__heading text-uppercase">Checkout</h5>
        </div> --}}
        <div class="donationDetails__payments">
            <div class="payments mb-2">
                <div class="paymentsCustoms">
                    <div class="paymentsInput">
                        <img src="{{ env('ADMIN_URL') . 'storage/' . $causeDetails->photo }}" alt="Gainioz" width="200"
                            height="100">
                        <label>{{ $causeDetails->title }}</label>
                    </div>
                    <div class="paymentsAmountChoice">
                        <b>${{ $customDonation }}</b>
                        {{-- <input class="paymentsCustoms__field" type="number" value="{{ $customDonation }}"
                            placeholder="Custom Donation" readonly> --}}
                    </div>
                </div>
            </div>
            {{-- </div>
                <div class="donationDetails__payments"> --}}
            @foreach ($getSimilarRecord as $item)
                <div class="payments mb-2">
                    <div class="paymentsCustoms">
                        <div class="paymentsAmountChoice">
                            <input class="paymentsCustoms__field" type="checkbox"
                                placeholder="Custom Donation">
                        </div>
                        <div class="paymentsInput">
                            <img src="{{ env('ADMIN_URL') . 'storage/' . $item->photo }}" alt="Gainioz" width="200"
                                height="100">
                            <label>{{ $item->title }}</label>
                        </div>
                        <div class="paymentsAmountChoice">
                            <input class="paymentsCustoms__field" type="number" value="{{ $item->default_amount }}"
                                placeholder="Custom Donation">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
