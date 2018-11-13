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
    function listen_getGrade(formClass){
		$("." + formClass + "").keyup(function () {
			var mark = $(this).val();
			if (mark > 100) {
				alert("Mark cant be greater than 100");
				$(".final-mark").val("");
				$(".gradeStd").val("");
			}
			console.log(mark);
	
			if (mark == "" || mark == null) {
				$(".gradeStd").html('None');
			} else {
				$.ajax({
					type: 'POST',
					url: "../config/resultsModule/route.php?call=" + window.btoa('GradeStudent') + "&mark=" + mark,
					success: (data) => {
						//  var obj = JSON.parse(data);
						console.log(data);
						$(".gradeStd").html(data);
						$(".gradeT").val(data);
						$(".cuT").val('');
					}
				});
			}
		});
	}
  /**
     * END FUNCTIONS
     */
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
    
    $("#updateSingleResult").on('submit', function (event) {
        event.preventDefault();
        var data = $(this).serialize();
        alert(data);
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

    $(".editReason").keyup(function () {
        console.log('yess');
    });
    $("#submitMarksBulk").on('submit', function (event) {
        event.preventDefault();
        var data = $(this).serialize();
        alert(data);
    });
});
