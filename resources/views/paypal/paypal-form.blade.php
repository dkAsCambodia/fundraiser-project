<form action="{{ route('paypal.checkout') }}" method="post" id="paypal-form"> 
    @csrf
    <input type="hidden" name="amount" value="{{ $Final_amount ??  '' }}" />
    <input type="hidden" name="currency" value="{{ $Final_currency ??  '' }}" />
    <input type="hidden" name="currencySymbol" value="{{ $Final_currencySymbol ??  '' }}" />
    <input type="hidden" name="account_id" value="{{ $account_id ??  '' }}" />
    <input type="hidden" name="cause_detail_id" value="{{ $cause_detail_id ??  '' }}" />
    <input type="hidden" name="frequency" value="{{ $frequency ??  '' }}" />
    <button type="submit" class="btn-paypal-submit" style="display: none;">Submit</button>
</form>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("paypal-form").submit();
    });
</script>

