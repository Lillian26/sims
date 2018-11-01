$(document).ready(function () {
    /**
     * 
     *GLOBAL
     */

    var studentId = $(".edit-allstudents").val();
    var editYear = $(".edit-year").val();
    var editSemester = $('.edit-semester').val();
    var editCourseunit = $('.edit-courseunit').val();
    var mark = $('.updated-mark').val();
    var reason = $('.editReason').val();
    /**
     * FUNCTIONS
     */
    function saveItemEdits(formId, handler) {
		$("#" + formId + "").on('submit', function (event) {
			event.preventDefault();
			var data = $(this).serialize();
			$.ajax({
				type: 'POST',
				data: data,
				url: "../config/recordsModule/route.php?token=" + window.btoa(handler),
				success: (data) => {
					$(".modal-alert-wrapper").html(data);
					selectedId = null;
				}
			});
		});
	}

    //send request to populate edit courseunits
	$('.edit-semester').change(function () {
        var studentId = $(".edit-allstudents").val();
        var editYear = $(".edit-year").val();
        var editSemester = $(this).val();
        
        console.log("studentId" + studentId);
        console.log("editYear" + editYear);
        console.log("editSemester" + editSemester);

        $.ajax({
            type: 'POST',
			url: "../config/resultsModule/route.php?call=" + window.btoa("edit_getCourseunits") + "&id=" + studentId + "&year=" + editYear + "&semester=" + editSemester,
            success: (data) => {
               
                    $(".edit-courseunit").html(data);
               
            }
        });

    });
    
    $(".edit-result").on('click', function (event) {
        var studentId = $(".edit-allstudents").val();
        var editYear = $(".edit-year").val();
        var editSemester = $('.edit-semester').val();
        var editCourseunit = $('.edit-courseunit').val();
        $( ".spin-load" ).addClass( "fa fa-spinner fa-spin" );
        $.ajax({
            type: 'POST',
			url: "../config/resultsModule/route.php?call=" + window.btoa("edit_loadCourseunits") + "&id=" + studentId + "&year=" + editYear + "&semester=" + editSemester+ "&courseunit=" + editCourseunit,
            success: (data) => {
               // gradeStudent(mark)
                $(".show-courseunits-edit").html(data);
                $( ".spin-load" ).removeClass( "fa fa-spinner fa-spin" )
            }
        });
    });
    
    $(".updateResult").on('click', function (event) {
      alert('yes');
    });

    //BULKY ENTRY
    //send request to populate edit courseunits
	$('.bulky-semester').change(function () {
        var progId = $(".bulk-prog").val();
        var bulkYear = $(".bulk-year").val();
        var bulkSemester = $(this).val();

        console.log("progId-->" + progId);
        console.log("bulkYear-->" + bulkYear);
        console.log("bulkSemester-->" + bulkSemester);

        $.ajax({
            type: 'POST',
			url: "../config/resultsModule/route.php?call=" + window.btoa("bulk_getCourseunits") + "&id=" + progId + "&year=" + bulkYear + "&semester=" + bulkSemester,
            success: (data) => {
                console.log(data);
                 $(".bulk-courseunit").html(data);
               
            }
        });

    });

    $(".bulk-result-entry").on('click', function (event) {
        var progId = $(".bulk-prog").val();
        var bulkYear = $(".bulk-year").val();
        var bulkSemester = $(this).val();
        $( ".spin-load" ).addClass( "fa fa-spinner fa-spin" );
        $.ajax({
            type: 'POST',
			url: "../config/resultsModule/route.php?call=" + window.btoa("bulk_loadStudentsMarks") + "&id=" + progId + "&year=" + bulkYear,
            success: (data) => {
               // gradeStudent(mark)
                $(".show-studentsmarks-bulk").html(data);
                $( ".spin-load" ).removeClass( "fa fa-spinner fa-spin" )
            }
        });
    });
});
