@extends('layouts.admin')


@section('style')
<style type="text/css">
.pagination-container {
width: 70%;
float:left;
}
.pagination {
margin: 0;
}
.pagination li {
    padding: 4px 14px;
    background: white;
    border: 1px solid #d4d4d4;
}
.pagination li:nth-last-child(1){
  border-radius: 0px 4px 4px 0px;
}
.pagination li:nth-child(1){
  border-radius: 4px 0px 0px 4px;
}
.pagination li:hover {
    cursor: pointer;
    background: #e9e9e9;
}
.pagination .active{
  color: white;
  background: #337ab7;
}
.pagination .active:hover{
  color: white;
  background: #337ab7;
}
</style>
@endsection


@section('navigation')
    @include('includes.admin_navigation')
@endsection


@section('side_nav')
    @include('includes.admin_sidenav')
@endsection




@section('content')



<div class="content_section">
    <!-- start header -->
    <div class="header">
        <h3>Students</h3>&nbsp;&nbsp;<span>Manage Students</span>
        <a href="{{ url('../') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->
<div class="container">

    <div class="form-group">
        <div class="row">
            <div class="col-2">
                <select class  ="form-control" name="state" id="maxRows">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="500">500</option>
                    <option value="5000">Show ALL Rows</option>
                </select>
            </div>
            <div class="col-6"></div>
            <div class="col-4">
                <div class="tb_search">
                    <input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search Student by Keyward ..." class="form-control">
                </div>
            </div>
        </div>
    </div>

        <h4>{{$class->name}}র শিক্ষার্থী </h4>
        <table class="table table-dark table-hover table-class table-sm" id= "table-id">
            <thead>
            <tr>
                <th>Photo</th>
                <th>Name</th>
                <th>Name in English</th>
                <th>Class</th>
                <th>Roll</th>
                <th>Gender</th>
                <th>Birth Certificate</th>
                <th>DOB</th>
                <th>View</th>
                <th>Update</th>
            </tr>
            </thead>

            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>
                        <img class="action_field border border-secondary" width="60px" height="62px" src="{{ $student->photo ? $student->photo->file : '/images/DummyProfile.jpg' }}">
                    </td>
                    <td>{{$student->student_name}}</td>
                    <td>{{$student->student_name_en}}</td>
                    <td>{{$student->class->name}}</td>
                    <td>{{$student->student_roll}}</td>
                    <td>{{$student->student_gender}}</td>
                    <td>{{$student->student_birth_reg}}</td>
                    <td>{{ \Carbon\Carbon::parse($student->student_DOB)->format('d M Y') }}</td>

                    <td><a href="{{ Route('admin.students.show', $student->id) }}" class="btn btn-primary">Show</a></td>
                    <td><a href="{{ Route('admin.upgrades.edit', $student->id) }}" class="btn btn-success">Update</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!--		Start Pagination -->
        <div>
			<div class='pagination-container'>
				<nav>
				  <ul class="pagination">
				   <!--	Here the JS Function Will Add the Rows -->
				  </ul>
				</nav>
			</div>

        <div class="rows_count float-right text-secondary">Showing 11 to 20 of 91 entries</div>

        </div>


    <!-- start dashboard content -->

</div>


@endsection



@section('script')

<script type="text/javascript">
getPagination('#table-id');
	$('#maxRows').trigger('change');
	function getPagination (table){
		  $('#maxRows').on('change',function(){
		  	$('.pagination').html('');						// reset pagination div
		  	var trnum = 0 ;									// reset tr counter
		  	var maxRows = parseInt($(this).val());			// get Max Rows from select option
		  	var totalRows = $(table+' tbody tr').length;		// numbers of rows
			 $(table+' tr:gt(0)').each(function(){			// each TR in  table and not the header
			 	trnum++;									// Start Counter
			 	if (trnum > maxRows ){						// if tr number gt maxRows
			 		$(this).hide();							// fade it out
			 	}if (trnum <= maxRows ){$(this).show();}// else fade in Important in case if it ..
			 });											//  was fade out to fade it in
			 if (totalRows > maxRows){						// if tr total rows gt max rows option
			 	var pagenum = Math.ceil(totalRows/maxRows);	// ceil total(rows/maxrows) to get ..
			 												//	numbers of pages
			 	for (var i = 1; i <= pagenum ;){			// for each page append pagination li
			 	$('.pagination').append('<li data-page="'+i+'">\
								      <span>'+ i++ +'<span class="sr-only">(current)</span></span>\
								    </li>').show();
			 	}											// end for i
			} 												// end if row count > max rows
			$('.pagination li:first-child').addClass('active'); // add active class to the first li
        //SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT
       showig_rows_count(maxRows, 1, totalRows);
        //SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT
        $('.pagination li').on('click',function(e){		// on click each page
        e.preventDefault();
				var pageNum = $(this).attr('data-page');	// get it's number
				var trIndex = 0 ;							// reset tr counter
				$('.pagination li').removeClass('active');	// remove active class from all li
				$(this).addClass('active');					// add active class to the clicked
        //SHOWING ROWS NUMBER OUT OF TOTAL
       showig_rows_count(maxRows, pageNum, totalRows);
        //SHOWING ROWS NUMBER OUT OF TOTAL
				 $(table+' tr:gt(0)').each(function(){		// each tr in table not the header
				 	trIndex++;								// tr index counter
				 	// if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
				 	if (trIndex > (maxRows*pageNum) || trIndex <= ((maxRows*pageNum)-maxRows)){
				 		$(this).hide();
				 	}else {$(this).show();} 				//else fade in
				 }); 										// end of for each tr in table
					});										// end of on click pagination list
		});
											// end of on select change
								// END OF PAGINATION
	}
// SI SETTING
$(function(){
	// Just to append id number for each row
default_index();
});
//ROWS SHOWING FUNCTION
function showig_rows_count(maxRows, pageNum, totalRows) {
   //Default rows showing
        var end_index = maxRows*pageNum;
        var start_index = ((maxRows*pageNum)- maxRows) + parseFloat(1);
        var string = 'Showing '+ start_index + ' to ' + end_index +' of ' + totalRows + ' entries';
        $('.rows_count').html(string);
}
// CREATING INDEX
function default_index() {
  $('table tr:eq(0)').prepend('<th> ID </th>')
					var id = 0;
					$('table tr:gt(0)').each(function(){
						id++
						$(this).prepend('<td>'+id+'</td>');
					});
}
// All Table search script
function FilterkeyWord_all_table() {
// Count td if you want to search on all table instead of specific column
  var count = $('.table').children('tbody').children('tr:first-child').children('td').length;
        // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("search_input_all");
  var input_value =     document.getElementById("search_input_all").value;
        filter = input.value.toLowerCase();
  if(input_value !=''){
        table = document.getElementById("table-id");
        tr = table.getElementsByTagName("tr");
        // Loop through all table rows, and hide those who don't match the search query
        for (i = 1; i < tr.length; i++) {
          var flag = 0;
          for(j = 0; j < count; j++){
            td = tr[i].getElementsByTagName("td")[j];
            if (td) {
                var td_text = td.innerHTML;
                if (td.innerHTML.toLowerCase().indexOf(filter) > -1) {
                //var td_text = td.innerHTML;
                //td.innerHTML = 'shaban';
                  flag = 1;
                } else {
                  //DO NOTHING
                }
              }
            }
          if(flag==1){
                     tr[i].style.display = "";
          }else {
             tr[i].style.display = "none";
          }
        }
    }else {
      //RESET TABLE
      $('#maxRows').trigger('change');
    }
}
</script>

@endsection
