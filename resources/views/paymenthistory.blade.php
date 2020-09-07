@include('layout.header')


<div class="fullbox ">
    @include('layout.sidebar')
    <div class="rightside">
        <div class="payments tender-padding">
    		<h1 class="mb40 font22-767">Payment History</h1>
    		<div class="outer-box">
	    		<div class="top-buttons">
					<div class="inline-block">
						<div class="icon-in-input ">
					    	<span class="input-group-text"><i class="fa fa-search"></i></span>
					      	<input class="search-input" type="text" name="search" placeholder="Search">
					    </div>
					</div>
				    <div class="inline-block filter-box">
				    	<select id="filter" name="filter" class="filter">
							<option value="" disabled selected hidden>Filters</option>
							<option value="Bought Document">Bought Document</option>
							<option value="Bought Tender">Bought Tender</option>
							<option value="Sold Tender">Sold Tender</option>
						</select>
				    </div>
				</div>
	    		<div class="table-wrap-payment">
					<table class="width100">
					  <tr class="paymenthistory-tr-th">
					    <th class="paymenthistory-th">Tender</th>
					    <th class="paymenthistory-th">Description</th>
					    <th class="paymenthistory-th">Amount</th>
					    <th class="paymenthistory-th">Date</th>
					  </tr>
					  <tr class="paymenthistory-tr">
					    <td class="paymenthistory-td">REF/INT/TEN/2020/9</td>
					    <td class="paymenthistory-td">You got from tender document</td>
					    <td class="paymenthistory-td">1,200 BD</td>
					    <td class="paymenthistory-td">24, August 2020</td>
					  </tr>
					  <tr class="paymenthistory-tr">
					    <td class="paymenthistory-td">REF/INT/TEN/2020/9</td>
					    <td class="paymenthistory-td">You got from tender document</td>
					    <td class="paymenthistory-td">1,200 BD</td>
					    <td class="paymenthistory-td">24, August 2020</td>
					  </tr>
					  <tr class="paymenthistory-tr">
					    <td class="paymenthistory-td">REF/INT/TEN/2020/9</td>
					    <td class="paymenthistory-td">You got from tender document</td>
					    <td class="paymenthistory-td">1,200 BD</td>
					    <td class="paymenthistory-td">24, August 2020</td>
					  </tr>
					  <tr class="paymenthistory-tr">
					    <td class="paymenthistory-td">REF/INT/TEN/2020/9</td>
					    <td class="paymenthistory-td">You got from tender document</td>
					    <td class="paymenthistory-td">1,200 BD</td>
					    <td class="paymenthistory-td">24, August 2020</td>
					  </tr>
					</table>
				</div>
			</div>
        </div>
    </div>
</div>



@include('layout.footer')
