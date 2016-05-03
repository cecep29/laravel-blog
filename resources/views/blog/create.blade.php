<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">

<div class="row">
@if(count($errors) > 0)
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	</div>
@endif

</div>

<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<h1>Create Blog</h1>
		<form action="/blog" method="post">
			<div class="form-group">
				<label for="title">Judul</label>
				<input type="text" name="title" value="" placeholder="judul" class="form-control">
				{{ $errors->has('title') ?$errors->first('title') : '' }}
			</div>
			<div class="form-group">
				<label for="title">Isi</label>
				<textarea rows="6" cols="30" name="subject" placeholder="isi..." class="form-control"></textarea>
				{{ $errors->has('subject') ?$errors->first('subject') : '' }}
			</div>
			<div class="form-group">
				<input type="submit" name="simpan" value="Post" class="btn btn-primary">
			</div>
	
	<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
	
		</form>
	</div>
	<div class="col-md-3"></div>
</div>
