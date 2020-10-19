<div class="d-flex justify-content-center align-items-center container ">
	<div class="col-md-6 col-lg-6 col-sm-12"> 
		@if (session()->has('errors'))
		    <div class="alert alert-dismissable alert-danger">
		        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		            <span aria-hidden="true">&times;</span>
		        </button>
		        
		            <li><strong>{{ $errors }}</strong></li>
		        
		    </div>
		@endif
	</div>
</div>