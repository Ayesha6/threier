@include('layout.header')


<div class="fullbox ">
    @include('layout.sidebar')
    <div class="rightside">
    	<div class="alltenders dashboard-padding">
	    	<form>
	    		<h2 class="bold">Add New Tender</h2>
	    		<label class="small-label">Tender Subject</label>
	    		<input class="tender-input subject-input" type="text" name="text" value="Supply of Fitting">

	    		<label class="small-label">Category/Sector</label>
	    		<select id="category" name="category" class="tender-select">
					<option value="" disabled selected hidden>Select a Category...</option>
					<option value="Manufacturing">Manufacturing</option>
					<option value="Manufacturing">Manufacturing</option>
				</select>

	    		<label class="small-label">Internal Reference Number</label>
	    		<input class="tender-input" type="text" name="text" placeholder="Enter Internal Reference Number">

	    		<label class="small-label">Payment Terms</label>
	    		<input class="tender-input" type="text" name="text" placeholder="You have to pay 50% in advance">

	    		<div class="row">
	    			<div class="col-md-3">
			    		<label class="small-label">Budget</label>
			    		<input class="tender-input" type="text" name="text" placeholder="30 DB">
			    	</div>
	    			<div class="col-md-3">
			    		<label class="small-label">Currency</label>
			    		<select id="category" name="category" class="tender-select">
							<option value="" disabled selected hidden>Select a Currency...</option>
							<option value="BHD">BHD</option>
							<option value="BHD">BHD</option>
						</select>
			    	</div>
	    			<div class="col-md-6">
			    		<label class="small-label">Publish Date</label>
			    		<input class="tender-input" type="date" name="publish date">
	    			</div>
	    		</div>

	    		<div class="row">
	    			<div class="col-md-6">
			    		<label class="small-label">Opening Date</label>
			    		<input class="tender-input" type="date" name="Opening date">
			    	</div>
	    			<div class="col-md-6">
			    		<label class="small-label">Closing Date</label>
			    		<input class="tender-input" type="date" name="Closing date">
	    			</div>
	    		</div>
	    		<div>
			    	<label class="small-label" >Tender Description</label>
			    	<textarea class="tender-input" rows="5"></textarea>
	    		</div>

	    		<div class="row">
	    			<div class="col-md-3">
			    		<label class="small-label">Allow Vendor to offer</label>
			    		<select id="times" name="times" class="tender-select">
							<option value="" disabled selected hidden>Times</option>
							<option value="Once">Once</option>
							<option value="Twice">Twice</option>
						</select>
			    	</div>
	    			<div class="col-md-9">
	    			</div>
	    		</div>

	    		<div>
			    	<label class="small-label">Document.doc</label>
			    	<button class="download">Download Sample</button>
	    		</div>

	    		<input class="submit-btn" type="submit" value="Submit For Review">

	    	</form>
	    </div>
    </div>
</div>



@include('layout.footer')
