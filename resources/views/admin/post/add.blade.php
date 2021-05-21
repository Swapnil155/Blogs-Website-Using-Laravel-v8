@extends('admin.layout.layout')

@section('page_title', 'Adding Post')

@section('container')
<div class="">
<div class="row">
		<div class="col-md-12 col-sm-12 ">
			<div class="x_panel">
				<div class="x_title">
					<h2>Manage Post </h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
						<li><a class="close-link"><i class="fa fa-close"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="{{url('/admin/post/submit')}}" enctype="multipart/form-data">
						@csrf
						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 ">
								<input type="text" id="title" required="required" class="form-control" name="title">
							</div>
						</div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="slug">Slug <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="slug" required="required" class="form-control" name="slug" onblur="this.value=removeSpaces(this.value);">
								@error('slug')
									<span style="color:red">{{$message}}</span>
								@enderror
                            </div>
                        </div>
						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="short_desc">Short Description <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 ">
								<textarea id="short_desc" rows="4" class="resizable_textarea form-control"  name="short_desc" required="required"></textarea>
							</div>
						</div>
						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="long_desc">Long Description <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 ">
								<textarea id="long_desc" rows="10" class="resizable_textarea form-control"  name="long_desc" required="required"></textarea>
							</div>
						</div>
						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Image <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 ">
								<input id="image" type="file" id="first-name" required="required" name="image">
								@error('image')
									<span style="color:red">{{$message}}</span>
								@enderror
							</div>
						</div>
						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="post_date">Post date <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 ">
								<input id="post_date" name="post_date" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
								<script>
									function timeFunctionLong(input) {
										setTimeout(function() {
											input.type = 'text';
										}, 60000);
									}
								</script>
							</div>
						</div>
						<div class="ln_solid"></div>
						<div class="item form-group">
							<div class="col-md-6 col-sm-6 offset-md-3">
								<button type="submit" class="btn btn-success">Submit</button>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection