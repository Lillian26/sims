$(document).ready(function () {
    $(".details-student").hide();
    $(".results-wrapper").hide();
    $(".error").hide();
    
	/* Global variables */
	var selectedId;
	var processing = false;

	/* Global Ajax settings */
	$.ajaxSetup({
		beforeSend: () => {
			$(".submit-btn").prop("disabled", true);
			$(".close-modal-btn").prop("disabled", true);
		},
		error: (error) => {
			console.log("There was an error:", error);
		},
		complete: () => {
			$(".submit-btn").prop("disabled", false);
			$(".close-modal-btn").prop("disabled", false);
		}
	});


	/***
	$(".content-wrapper").css({'min-height':"569px"});
    
	window.addEventListener('resize',function(event){
	    console.log("window has changed:",event);
	    $(".content-wrapper").css({'min-height':'569px'})
	});
	*/


	$('.updatedetails').change(function () {
		if (this.checked) {
			$('.fname').attr('disabled', true);
			$('.sname').attr('disabled', true);
			$('.dob').attr('disabled', true);
			$('.gender').attr('disabled', true);
			$('.designation').attr('disabled', true);
			$('.email').attr('disabled', true);
			$('.phone1').attr('disabled', true);
			$('.phone2').attr('disabled', true);
			$('.changeCredentials').attr('disabled', true);
		} else {
			$('.fname').attr('disabled', false);
			$('.sname').attr('disabled', false);
			$('.dob').attr('disabled', false);
			$('.gender').attr('disabled', false);
			$('.designation').attr('disabled', false);
			$('.email').attr('disabled', false);
			$('.phone1').attr('disabled', false);
			$('.phone2').attr('disabled', false);
			$('.changeCredentials').attr('disabled', false);
		}
	});


	/***************************************************************************************
	 *                                                                                      *
	 *               Settings > Academic Settings > Global functions                        *
	 *                                                                                      *
	 ****************************************************************************************/
	/* Open the modal for adding a specific academics settings component:
	 *   - college
	 *   - department
	 *   - programe
	 *   - courseunit
	 *   - lecturer
	 */
	function openAddModal(btnClass, modalId) {
		$("." + btnClass + "").on('click', function (event) {
			event.preventDefault();
			$("#" + modalId + "").modal();
		});
	}

	/* Called when the add modal is being closed */
	function onCloseModal(closeBtnId) {
		$("#" + closeBtnId + "").on('click', function (event) {
			location.reload();
		});
	}

	/* Save data for a new academics settings component*/
	function saveNewData(formId, handler) {
		$("#" + formId + "").on('submit', function (event) {
			event.preventDefault();
			var data = $(this).serialize();
			$.ajax({
				type: 'POST',
				data: data,
				url: "../config/route.php?token=" + window.btoa(handler),
				success: (data) => {
					if (data) {
						$(".modal-alert-wrapper").html(data);
					}
				}
			});
		});

	}

	/* On Editing an academics settings component item */
	function editItem(caller, dataSourceHandler, modalId) {
		$("." + caller + "").on('click', function (event) {
			event.preventDefault();
			var id = $(this).attr('data-id');
			selectedId = id;
			$.ajax({
				type: 'GET',
				url: "../config/route.php?token=" + window.btoa(dataSourceHandler) + "&id=" + selectedId,
				success: (data) => {
					var obj = JSON.parse(data);
					/* Determine the fields to populate */
					if (caller === "editCollege") {
						$("#fullname").attr('value', obj['fullname']);
						$("#shortname").attr('value', obj['shortname']);
					} else if (caller === "editProgram") {
						$("#pname").attr('value', obj['name']);
						$("#category").attr('value', obj['category']);
						$("#duration").attr('value', obj['duration']);
						$("#gradLoad").attr('value', obj['gradLoad']);
						$("#code").attr('value', obj['code']);
					} else if (caller === "editDep") {
						$("#pname").attr('value', obj['name']);
						$("#category").attr('value', obj['category']);
						$("#duration").attr('value', obj['duration']);
						$("#gradLoad").attr('value', obj['gradLoad']);
						$("#code").attr('value', obj['code']);
					}
				}
			});
			/* Open modal */
			$("#" + modalId + "").modal();
		});
	}


	/* On saving an academic settings component item changes */
	function saveItemEdits(formId, handler) {
		$("#" + formId + "").on('submit', function (event) {
			event.preventDefault();
			var data = $(this).serialize();
			$.ajax({
				type: 'POST',
				data: data,
				url: "../config/route.php?token=" + window.btoa(handler) + "&id=" + selectedId,
				success: (data) => {
					$(".modal-alert-wrapper").html(data);
					selectedId = null;
				}
			});
		});
	}

	/* Show confirm delete modal for an academics settings component */
	function openConfrimDeleteModal(btnClass, modalId) {
		$("." + btnClass + "").on('click', function (event) {
			event.preventDefault();
			var id = $(this).attr('data-id');
			selectedId = id;
			$("#" + modalId + "").modal();
		});
	}

	/* On Deleting an academics settings component item */
	function deleteItem(btnClass, handler) {
		$("." + btnClass + "").on('click', function (event) {
			event.preventDefault();
			$.ajax({
				type: 'GET',
				url: "../config/route.php?token=" + window.btoa(handler) + "&id=" + selectedId,
				success: (data) => {
					$(".modal-alert-wrapper").html(data);
					location.reload();
					selectedId = null;
				}
			});
		});
	}

	/*
	 *
	 *   Academics settings: Colleges 
	 */
	openAddModal("addCollege", "addCollege");
	onCloseModal("closeNewCollege");
	saveNewData("newCollegeForm", "insertCollege");
	editItem("editCollege", "college_data", "editCollege");
	onCloseModal("closeEditCollegeModal");
	saveItemEdits("saveCollegeEditsForm", "updateCollege");
	openConfrimDeleteModal("confirmCollegeDelete", "confirmCollegeDelete");
	deleteItem("deleteCollegeBtn", "deleteCollege");
	onCloseModal("closeDeleteCollegeModal");


	/*
	 *
	 *   Academic settings: Department 
	 */
	openAddModal("newDepForm", "newDepForm");
	saveNewData("DepForm", "newDepartment");
	onCloseModal("closeNewDep");
	editItem("editCollege", "college_data", "editCollege");


	/*
	 *
	 *   Academic settings: Programme 
	 */
	/* Add Programme Modal button listener */
	openAddModal("addProgram", "addProgram");
	onCloseModal("closeNewProg");
	saveNewData("newProgForm", "insertProgramme");
	editItem("editProgram", "program_data", "editProgram");
	onCloseModal("closeEditProgramModal");
	saveItemEdits("saveProgEditsForm", "updateProgramme");
	openConfrimDeleteModal("confirmProgramDelete", "confirmProgramDelete");
	deleteItem("deleteProgramBtn", "deleteProgramme");
	onCloseModal("closeDeleteProgramModal");
	/*
	 *
	 *   Academic settings: View Course 
	 */

	/*
	 *
	 *   Academic settings: Lecturers 
	 */

	/***************RESULTS MODULE**************/

	/*
	 *
	 *   RESULTS MODULE: entermarks 
	 */
	$('.semester').change(function () {
		var semester = $(this).val();
		var Programme = $(".Programme").val();
		var year = $(".yearOffered").val();
		$.ajax({
			type: 'POST',
			url: "../config/resultsModule/route.php?call=" + window.btoa("getCourseunits") + "&Programme=" + Programme + "&semester=" + semester + "&year=" + year,
			success: (data) => {
				$(".courseunits").html(data);
			}
		});
	});
	//send request to populate students <select>
	$('.courseunits').change(function () {
		var Programme = $(".Programme").val();
		var year = $(".yearOffered").val();
		var intake = $(".intake").val();
		$.ajax({
			type: 'POST',
			url: "../config/resultsModule/route.php?call=" + window.btoa("getStudents") + "&Programme=" + Programme + "&year=" + year + "&intake=" + intake,
			success: (data) => {
				$(".student").html(data);
			}
		});
	});
	/* Save data for a new academics  component*/
	function saveMarksData(formId, handler) {
		$("#" + formId + "").on('submit', function (event) {
			event.preventDefault();
			var data = $(this).serialize();
			$.ajax({
				type: 'POST',
				data: data,
				url: "../config/resultsModule/route.php?call=" + window.btoa(handler),
				success: (data) => {
					if (data) {
						$(".modal-alert-wrapper").html(data);
					}
				}
			});
		});

	}
	openAddModal("individualmarksentry", "enterMarks");
	saveMarksData('enterNewMark', 'enterNewMark');

	//send request to populate students details table <select>
	$('.student').change(function () {
		$(".details-student").show();
		var selected = $(this).val();
		$.ajax({
			type: 'POST',
			url: "../config/resultsModule/route.php?call=" + window.btoa('getStudent') + "&id=" + selected,
			success: (data) => {
				var obj = JSON.parse(data);
				$(".details-pic").html("<img src='../dist/img/user-avatar.png' alt='Student Image' style='width:100px; height:100px;'>");
				$(".details-name").html(obj['surname'] + " " + obj['firstName']);
				$(".details-regNo").html(obj['regNo']);
				$(".details-intake").html(obj['academicyearEntry']);
				$(".details-studentNo").html(obj['studentNo']);
			}
		});
	});


	//send request to populate students <select>
	$('.final-mark').keyup(function () {
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
    
    	//populate select with all students
        $(".load-result").on('click', function (event) {
            var selected = $('.allstudents').val();
            //alert(selected);
            if (selected == 'none'){
                $(".error").show();
                selected == '';
            }else{
                $(".error").hide();
                $( ".show-fa" ).addClass( "fa fa-spinner fa-spin" );
                $.ajax({
                    type: 'POST',
                    url: "../config/resultsModule/route.php?call=" + window.btoa('getStudent') + "&id=" + selected,
                    success: (data) => {
                        $(".results-wrapper").show();
                        $(".details-student").show();
                       console.log(data);
                       $(".details-student").html(data);
                        $( ".show-fa" ).removeClass( "fa fa-spinner fa-spin" ).addClass("fa fa-download" );
                    }
                });
            }
		});
});