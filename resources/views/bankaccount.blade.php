@include('layout.header')


<div class="fullbox ">
    @include('layout.sidebar')
    <div class="rightside">
    	<div class="bankaccount tender-padding">
	    	<h1 class="mb80 font22-767 grey-heading">Bank Account Information</h1>
	    	<form class="bank-info-form">
	    		<label class="info-label">Bank Name</label>
	    		<input type="text" name="" class="bank-input">
	    		<label class="info-label">Bank Address</label>
	    		<input type="text" name="" class="bank-input">
	    		<label class="info-label">Country</label>
	    		<input type="text" name="" class="bank-input">
	    		<label class="info-label">Account Name</label>
	    		<input type="text" name="" class="bank-input">
	    		<label class="info-label">IBAN No.</label>
	    		<input type="text" name="" class="bank-input">
	    		<label class="info-label">Swift Code</label>
	    		<input type="text" name="" class="bank-input">

	    		<input type="submit" name="" value="Save" class="bank-save-btn">
	    	</form>
	    </div>
    </div>
</div>



@include('layout.footer')
