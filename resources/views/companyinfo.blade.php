@include('layout.header')


<div class="fullbox ">
    @include('layout.sidebar')
    <div class="rightside">
    	<div class="companyprofile tender-padding">
	    	<h1 class="mb80 font22-767 grey-heading">Company Information</h1>
	    	<form class="info-form">
	    		<div class="row">
	    			<div class="col-sm-4">
	    				<label class="info-label">Country Registered <span class="red">*</span></label>
	    			</div>
	    			<div class="col-sm-8 companyinfo-select">
	    				@include('countryList')
	    			</div>
	    		</div>
	    		<div class="row">
	    			<div class="col-sm-4">
	    				<label class="info-label">Company Name</label>
	    			</div>
	    			<div class="col-sm-8">
	    				<input type="text" name="cname" class="companyinfo-input">
	    			</div>
	    		</div>
	    		<div class="row">
	    			<div class="col-sm-4">
	    				<label class="info-label">Company Email</label>
	    			</div>
	    			<div class="col-sm-8">
	    				<input type="email" name="email" class="companyinfo-input">
	    			</div>
	    		</div>
	    		<div class="row">
	    			<div class="col-sm-4">
	    				<label class="info-label">Description</label>
	    			</div>
	    			<div class="col-sm-8">
	    				<textarea class="companyinfo-textarea" rows="5"></textarea>
	    			</div>
	    		</div>
	    		<div class="row">
	    			<div class="col-sm-4">
	    				<label class="info-label">Website</label>
	    			</div>
	    			<div class="col-sm-8">
	    				<input type="text" name="url" class="companyinfo-input">
	    			</div>
	    		</div>
	    		<div class="row">
	    			<div class="col-sm-4">
	    				<label class="info-label">CR Number / Unit No.</label>
	    			</div>
	    			<div class="col-sm-8">
	    				<input type="text" name="crnumber" class="companyinfo-input">
	    			</div>
	    		</div>
	    		<div class="row">
	    			<div class="col-sm-4">
	    				<label class="info-label">Attach CR / Unit No. Copy <span class="red">*</span></label>
	    			</div>
	    			<div class="col-sm-8">
	    				<input type="file" name="cr" class="companyinfo-file">
	    				<div class="small-text-color">
	    					<small>
	    						(Maximum attachment size: 200 MB, Executable files are not allowed)
	    					</small>
							<small>
								NOTE: Bahrain Suppliers should attach a CR copy. International suppliers can attach relevant supplier documents.
							</small>
	    				</div>
	    			</div>
	    		</div>
	    		<input type="submit" name="" value="Save" class="save-btn">
	    	</form>
	    </div>
    </div>
</div>



@include('layout.footer')
