@include('layout.header')


<div class="fullbox ">
    @include('layout.sidebar')
    <div class="rightside">
    	<div class="companyprofile tender-padding">
	    	<h1 class="mb80 font22-767 grey-heading">Company Address</h1>
	    	<form class="info-form">
	    		<div class="row">
	    			<div class="col-sm-4">
	    				<label class="info-label">Country<span class="red">*</span></label>
	    			</div>
	    			<div class="col-sm-8 companyinfo-select">
	    				@include('countryList')
	    			</div>
	    		</div>
	    		<div class="row">
	    			<div class="col-sm-4">
	    				<label class="info-label">Address Line 1</label>
	    			</div>
	    			<div class="col-sm-8">
	    				<input type="text" name="" class="companyaddress-input">
	    			</div>
	    		</div>
	    		<div class="row">
	    			<div class="col-sm-4">
	    				<label class="info-label">Address Line 2</label>
	    			</div>
	    			<div class="col-sm-8">
	    				<input type="text" name="" class="companyaddress-input">
	    			</div>
	    		</div>
	    		<div class="row">
	    			<div class="col-sm-4">
	    				<label class="info-label">City</label>
	    			</div>
	    			<div class="col-sm-8">
	    				<input type="text" name="" class="companyaddress-input">
	    			</div>
	    		</div>
	    		<div class="row">
	    			<div class="col-sm-4">
	    				<label class="info-label">P.O. Box</label>
	    			</div>
	    			<div class="col-sm-8">
	    				<input type="text" name="" class="companyaddress-input">
	    			</div>
	    		</div>
	    		<div class="row">
	    			<div class="col-sm-4">
	    				<label class="info-label">Zip</label>
	    			</div>
	    			<div class="col-sm-8">
	    				<input type="text" name="url" class="companyaddress-input">
	    			</div>
	    		</div>
	    		<div class="row">
	    			<div class="col-sm-4">
	    				<label class="info-label">Telephone</label>
	    			</div>
	    			<div class="col-sm-8">
	    				<input type="text" name="url" class="companyaddress-input">
	    			</div>
	    		</div>
	    		<div class="row">
	    			<div class="col-sm-4">
	    				<label class="info-label">Fax</label>
	    			</div>
	    			<div class="col-sm-8">
	    				<input type="text" name="url" class="companyaddress-input">
	    			</div>
	    		</div>
	    		<input type="submit" name="" value="Save" class="save-btn">
	    	</form>
	    </div>
    </div>
</div>



@include('layout.footer')
