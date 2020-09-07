@include('layout.header')


<div class="fullbox ">
    @include('layout.sidebar')
    <div class="rightside">
    	<div class="alltenders tender-padding">
    		<h1 class="mb40">All Tenders</h1>
    		<a href="/newtender">
	    		<button class="add-btn">
	    			<p class="m0">Add Tender</p>
	    			<i class="fa fa-user-plus color-themeblue add-icon"></i>
	    		</button>
	    	</a>
    		<div class="right-btns">
	    		<select id="allcategories" name="allcategories" class="allcategories">
					<option value="" disabled selected hidden>All Categories</option>
					<option value="Pending">Pending</option>
					<option value="Submitted">Submitted</option>
					<option value="In Progress">In Progress</option>
					<option value="Done">Done</option>
					<option value="Rejected">Rejected</option>
				</select>
			</div>
			<div class="table-wrap">
				<table class="tender-table">
				  <tr class="tender-tr">
				  	<th class="tender-th">Title and Description</th>
				    <th class="tender-th">Company</th>
				    <th class="tender-th">Category/Sector</th>
				    <th class="tender-th">Purchase Before</th>
				    <th class="tender-th">Closing Date</th>
				  </tr>
				  <tr class="tender-tr">
				    <td class="tender-td">Supply of pesticides and chemicals for plant protection</td>
				    <td class="tender-td">General Poultry Company</td>
				    <td class="tender-td">Agriculture, animal production and fishing</td>
				    <td class="tender-td">23, Aug 2020</td>
				    <td class="tender-td">23, Sep 2020</td>
				  </tr>
				  <tr class="tender-tr">
				    <td class="tender-td">Supply of pesticides and chemicals for plant protection</td>
				    <td class="tender-td">General Poultry Company</td>
				    <td class="tender-td">Agriculture, animal production and fishing</td>
				    <td class="tender-td">23, Aug 2020</td>
				    <td class="tender-td">23, Sep 2020</td>
				  </tr>
				  <tr class="tender-tr">
				    <td class="tender-td">Supply of pesticides and chemicals for plant protection</td>
				    <td class="tender-td">General Poultry Company</td>
				    <td class="tender-td">Agriculture, animal production and fishing</td>
				    <td class="tender-td">23, Aug 2020</td>
				    <td class="tender-td">23, Sep 2020</td>
				  </tr>
				  <tr class="tender-tr">
				    <td class="tender-td">Supply of pesticides and chemicals for plant protection</td>
				    <td class="tender-td">General Poultry Company</td>
				    <td class="tender-td">Agriculture, animal production and fishing</td>
				    <td class="tender-td">23, Aug 2020</td>
				    <td class="tender-td">23, Sep 2020</td>
				  </tr>
				  <tr class="tender-tr">
				    <td class="tender-td">Supply of pesticides and chemicals for plant protection</td>
				    <td class="tender-td">General Poultry Company</td>
				    <td class="tender-td">Agriculture, animal production and fishing</td>
				    <td class="tender-td">23, Aug 2020</td>
				    <td class="tender-td">23, Sep 2020</td>
				  </tr>
				  <tr class="tender-tr">
				    <td class="tender-td">Supply of pesticides and chemicals for plant protection</td>
				    <td class="tender-td">General Poultry Company</td>
				    <td class="tender-td">Agriculture, animal production and fishing</td>
				    <td class="tender-td">23, Aug 2020</td>
				    <td class="tender-td">23, Sep 2020</td>
				  </tr>
				  <tr class="tender-tr">
				    <td class="tender-td">Supply of pesticides and chemicals for plant protection</td>
				    <td class="tender-td">General Poultry Company</td>
				    <td class="tender-td">Agriculture, animal production and fishing</td>
				    <td class="tender-td">23, Aug 2020</td>
				    <td class="tender-td">23, Sep 2020</td>
				  </tr>
				</table>
			</div>
	    </div>
    </div>
</div>



@include('layout.footer')
