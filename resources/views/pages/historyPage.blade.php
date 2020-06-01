@extends('layouts.app')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/vue"></script>



<div class="container-fluid app-body" id="app">
	<h3>!{ message }!</h3>


	<div class="row">
		<div class="col-md-12">
			<table class="table table-hover social-accounts"> 
				<thead> 
					<tr><th>Group Name</th> 
						<th>Group Typet</th> 
						<th>Post Text</th> 
						<th>Time</th> 
					</tr> 
				</thead> 
				<tbody> 
					<tr v-for="item in items" :key="item.message">
						<td>!{ item.first_name }!</td>
						<td>!{ item.last_name }!</td>
						<td>!{ item.first_name }!</td>
						<td>!{ item.first_name }!</td>

					</tr>
				</tbody> 
			</table>

		</div>
	</div>

</div>

<script type="text/javascript">
	var app = new Vue({
	  el: '#app',
	  delimiters: ['!{', '}!'],
	  data: {
	    message: 'Hello Vue!',

	    items: [
          { id: 1, first_name: 'Fred', last_name: 'Flintstone' },
          { id: 2, first_name: 'Wilma', last_name: 'Flintstone' },
          { id: 3, first_name: 'Barney', last_name: 'Rubble' },
          { id: 4, first_name: 'Betty', last_name: 'Rubble' },
          { id: 5, first_name: 'Pebbles', last_name: 'Flintstone' },
          { id: 6, first_name: 'Bamm Bamm', last_name: 'Rubble' },
          { id: 7, first_name: 'The Great', last_name: 'Gazzoo' },
          { id: 8, first_name: 'Rockhead', last_name: 'Slate' },
          { id: 9, first_name: 'Pearl', last_name: 'Slaghoople' }
        ]
      


	  }
	})
</script>

@endsection
