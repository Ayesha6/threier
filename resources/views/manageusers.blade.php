@include('layout.header')



<div id="add-user-popup" class="popup-bg">
	<div class="popup-box">
		<div>
			<div id="add-user-close" class="close-cross">X</div>
			<form class="p30">
				<h1 class="user-h1 center">
					<span class="if-newuser">Add New User</span>
					<span class="if-edituser">Edit User</span>
				</h1>
				<label class="user-label">First Name</label>
				<input type="text" name="fname" class="user-input">
				<label class="user-label">Last Name</label>
				<input type="text" name="lname" class="user-input">
				<label class="user-label">Job Title</label>
				<input type="text" name="jobTitle" class="user-input">
				<label class="user-label">Email</label>
				<input type="email" name="email" class="user-input">
				<label class="user-label">Confirm Email</label>
				<input type="email" name="cemail" class="user-input">
				<label class="user-label">Role</label>
				<select id="user-role" name="role" class="user-input">
					<option value="Buyers">Buyers</option>
					<option value="sellers">Sellers</option>
					<option value="admin">Admin</option>
				</select>

				<div class="center if-newuser">
					<input id="add-user-btn" type="Submit" name="submit" value="Add" class="user-add-btn">
				</div>
				<div class="center if-edituser">
					<input id="add-user-btn" type="Submit" name="submit" value="Edit" class="user-add-btn">
				</div>
			</form>
		</div>
	</div>
</div>



<div class="fullbox ">
    @include('layout.sidebar')
    <div class="rightside">
    	<div class="manageusers user-padding">
    		<h1 class="mb40">Users</h1>
    		<button id="add-user" class="add-btn">
    			<p class="m0">Add User</p>
    			<i class="fa fa-user-plus color-themeblue add-icon"></i>
    		</button>
    		<div class="right-btns">
    			<div id="suspend-btn-event" class="suspend-btn-event">
    				<button id="cancle-suspend" class="role">Cancle</button>
    				<button class="suspend-btn">Suspend</button> <!-- bind event for delete action -->
    			</div>
    			<div id="suspend-btn-animation">
    				<button class="suspend-btn">Suspend</button> <!-- animation button only -->
		    		<select id="role" name="role" class="role">
						<option value="Buyers">Buyers</option>
						<option value="sellers">Sellers</option>
						<option value="admin">Admin</option>
					</select>
				</div>
			</div>
			<div class="table-wrap">
				<table class="tender-table">
				  <tr class="">
				  	<th></th>
				  	<th class="tender-th">No.</th>
				    <th class="tender-th">User Name</th>
				    <th class="tender-th">Role</th>
				    <th class="tender-th">Email</th>
				    <th class="tender-th">Password</th>
				    <th class="tender-th"></th>
				    <th class="tender-th"></th>
				  </tr>
				  <tr class="user-tender-tr">
				  	<td><div class="mt-20 suspend-checkbox"><input type="checkbox" name="" class="checkbox-selection"></div></td>
				    <td class="user-tender-td">1</td>
				    <td class="user-tender-td">John Smith</td>
				    <td class="user-tender-td"><span class="color-themeblue">Buyer</span></td>
				    <td class="user-tender-td">test123@test.com</td>
				    <td class="user-tender-td">*********</td>
				    <td class="user-tender-td center hoverstyle edit-user">Edit</td>
				    <td class="user-tender-td center reset-text">
				    	<i class="fa fa-lock color-themeblue"></i>
				    	<p class="hoverstyle color-themeblue m0">Reset</p>
				    </td>
				  </tr>
				  <tr class="user-tender-tr">
				  	<td><div class="mt-20 suspend-checkbox"><input type="checkbox" name="" class="checkbox-selection"></div></td>
				    <td class="user-tender-td">1</td>
				    <td class="user-tender-td">John Smith</td>
				    <td class="user-tender-td"><span class="color-themeblue">Buyer</span></td>
				    <td class="user-tender-td">test123@test.com</td>
				    <td class="user-tender-td">*********</td>
				    <td class="user-tender-td center hoverstyle edit-user">Edit</td>
				    <td class="user-tender-td center reset-text">
				    	<i class="fa fa-lock color-themeblue"></i>
				    	<p class="hoverstyle color-themeblue m0">Reset</p>
				    </td>
				  </tr>
				  <tr class="user-tender-tr">
				  	<td><div class="mt-20 suspend-checkbox"><input type="checkbox" name="" class="checkbox-selection"></div></td>
				    <td class="user-tender-td">1</td>
				    <td class="user-tender-td">John Smith</td>
				    <td class="user-tender-td"><span class="color-themeblue">Buyer</span></td>
				    <td class="user-tender-td">test123@test.com</td>
				    <td class="user-tender-td">*********</td>
				    <td class="user-tender-td center hoverstyle edit-user">Edit</td>
				    <td class="user-tender-td center reset-text">
				    	<i class="fa fa-lock color-themeblue"></i>
				    	<p class="hoverstyle color-themeblue m0">Reset</p>
				    </td>
				  </tr>
				  <tr class="user-tender-tr">
				  	<td><div class="mt-20 suspend-checkbox"><input type="checkbox" name="" class="checkbox-selection"></div></td>
				    <td class="user-tender-td">1</td>
				    <td class="user-tender-td">John Smith</td>
				    <td class="user-tender-td"><span class="color-themeblue">Buyer</span></td>
				    <td class="user-tender-td">test123@test.com</td>
				    <td class="user-tender-td">*********</td>
				    <td class="user-tender-td center hoverstyle edit-user">Edit</td>
				    <td class="user-tender-td center reset-text">
				    	<i class="fa fa-lock color-themeblue"></i>
				    	<p class="hoverstyle color-themeblue m0">Reset</p>
				    </td>
				  </tr>
				  <tr class="user-tender-tr">
				  	<td><div class="mt-20 suspend-checkbox"><input type="checkbox" name="" class="checkbox-selection"></div></td>
				    <td class="user-tender-td">1</td>
				    <td class="user-tender-td">John Smith</td>
				    <td class="user-tender-td"><span class="color-themeblue">Buyer</span></td>
				    <td class="user-tender-td">test123@test.com</td>
				    <td class="user-tender-td">*********</td>
				    <td class="user-tender-td center hoverstyle edit-user">Edit</td>
				    <td class="user-tender-td center reset-text">
				    	<i class="fa fa-lock color-themeblue"></i>
				    	<p class="hoverstyle color-themeblue m0">Reset</p>
				    </td>
				  </tr>
				</table>
			</div>


	    </div>
    </div>
</div>

@include('layout.footer')
