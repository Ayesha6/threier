@include('layout.header')


<div class="fullbox ">
    @include('layout.sidebar')
    <div class="rightside">
    	<div class="dashboard">
	    	<div class="account-activate">
	    		<div class="activation-text inline-block">
	    			<p class="m0">Please activate your account first by entering your company's bank account information under the company profile section.</p>
	    		</div>
	    		<div id="activation-cross" class="inline-block right">
	    			<span>X</span>
	    		</div>
	    	</div>
	    	<div class="dashboard-padding">
	    		<div>
		    		<div class="inline-block heading767">
		    			<h1 class="m0 font22-767">Tatweet petroleum</h1>
		    		</div>
		    		<div class="inline-block right hello-text-767">
		    			<p class="hello-text">Hello, <span class="name"> Abdullah</span></p>
		    		</div>
		    	</div>
		    	<div class="button-box">
		    		<button class="tender-btn">
		    			<i class="fa fa-folder folder-btn"></i>
		    			<span>My Tenders</span>
		    		</button>
		    		<button class="tender-btn">
		    			<i class="fa fa-file file-btn"></i>
		    			<span>My Bids</span>
		    		</button>
		    	</div>
		    	<div>
		    		<div class="notification-heading">
		    			<p class="m0">Notifications</p>
		    		</div>
		    		<!-- loop here -->
		    		<div class="notification">
		    			<div class="inline-block" ><img class="notify-img" src="img/man.jpg"></div>
		    			<p  class="inline-block m0 notification-p"><strong>You</strong> added a new tender <span class="color-blue">RIP/TEN/2019/06</span></p>
		    		</div>
		    		<!-- till here -->
		    		<div class="notification">
		    			<img class="inline-block notify-img" src="img/man.jpg">
		    			<p  class="inline-block m0 notification-p"><strong>You</strong> added a new tender <span class="color-blue">RIP/TEN/2019/06</span></p>
		    		</div>
		    		<div class="notification">
		    			<img class="inline-block notify-img" src="img/man.jpg">
		    			<p  class="inline-block m0 notification-p"><strong>You</strong> added a new tender <span class="color-blue">RIP/TEN/2019/06</span></p>
		    		</div>
		    	</div>
	    	</div>
	    </div>
    </div>
</div>



@include('layout.footer')
