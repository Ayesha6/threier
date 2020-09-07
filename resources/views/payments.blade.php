@include('layout.header')


<div id="payment-popup" class="popup-bg ">
	<div class="payment-box">
		<div>
			<div id="add-user-close" class="close-cross">X</div>
			<form class="p30">
				<h1 class="user-h1 center">Payment</h1>
				<div class="center mt80">
					<div class="file-name-line">
						<i class="fa fa-file-code-o file-icon"></i>
						<span class="file-name">dummy.doc</span>
					</div>
					<div class="file-btn" >
					  	<input type="file" class="attach-file-input">
						<i class="fa fa-paperclip clip-icon"></i>
						<span>Attach Invoice</span>
					</div>
				</div>
				<div class="center">
					<input id="add-user-btn" type="Submit" name="submit" value="Submit" class="submit-payment-btn">
				</div>
			</form>
		</div>
	</div>
</div>




<div class="fullbox ">
    @include('layout.sidebar')
    <div class="rightside">
    	<div class="payments tender-padding">
    		<h1 class="mb40">Payment Requests</h1>
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
			<div class="table-wrap mt150-767">
				<table class="tender-table">
				  <tr class="tender-tr">
				  	<th class="tender-th">Title and Description</th>
				    <th class="tender-th">Company</th>
				    <th class="tender-th">Category/Sector</th>
				    <th class="tender-th">Purchase Before</th>
				    <th class="tender-th">Request Payment</th>
				  </tr>
				  <tr class="tender-tr">
				    <td class="tender-td">Supply of pesticides and chemicals for plant protection</td>
				    <td class="tender-td">General Poultry Company</td>
				    <td class="tender-td">Agriculture, animal production and fishing</td>
				    <td class="tender-td">23, Aug 2020</td>
				    <td class="tender-td"><button class="request-payment-btn">Request Payment</button></td>
				  </tr>
				  <tr class="tender-tr">
				    <td class="tender-td">Supply of pesticides and chemicals for plant protection</td>
				    <td class="tender-td">General Poultry Company</td>
				    <td class="tender-td">Agriculture, animal production and fishing</td>
				    <td class="tender-td">23, Aug 2020</td>
				    <td class="tender-td"><button class="request-payment-btn">Request Payment</button></td>
				  </tr>
				  <tr class="tender-tr">
				    <td class="tender-td">Supply of pesticides and chemicals for plant protection</td>
				    <td class="tender-td">General Poultry Company</td>
				    <td class="tender-td">Agriculture, animal production and fishing</td>
				    <td class="tender-td">23, Aug 2020</td>
				    <td class="tender-td"><button class="request-payment-btn">Request Payment</button></td>
				  </tr>
				  <tr class="tender-tr">
				    <td class="tender-td">Supply of pesticides and chemicals for plant protection</td>
				    <td class="tender-td">General Poultry Company</td>
				    <td class="tender-td">Agriculture, animal production and fishing</td>
				    <td class="tender-td">23, Aug 2020</td>
				    <td class="tender-td"><button class="request-payment-btn">Request Payment</button></td>
				  </tr>
				  <tr class="tender-tr">
				    <td class="tender-td">Supply of pesticides and chemicals for plant protection</td>
				    <td class="tender-td">General Poultry Company</td>
				    <td class="tender-td">Agriculture, animal production and fishing</td>
				    <td class="tender-td">23, Aug 2020</td>
				    <td class="tender-td"><button class="request-payment-btn">Request Payment</button></td>
				  </tr>
				  <tr class="tender-tr">
				    <td class="tender-td">Supply of pesticides and chemicals for plant protection</td>
				    <td class="tender-td">General Poultry Company</td>
				    <td class="tender-td">Agriculture, animal production and fishing</td>
				    <td class="tender-td">23, Aug 2020</td>
				    <td class="tender-td"><button class="request-payment-btn">Request Payment</button></td>
				  </tr>
				  <tr class="tender-tr">
				    <td class="tender-td">Supply of pesticides and chemicals for plant protection</td>
				    <td class="tender-td">General Poultry Company</td>
				    <td class="tender-td">Agriculture, animal production and fishing</td>
				    <td class="tender-td">23, Aug 2020</td>
				    <td class="tender-td"><button class="request-payment-btn">Request Payment</button></td>
				  </tr>
				</table>
			</div>
	    </div>	    	
    </div>
</div>



@include('layout.footer')
