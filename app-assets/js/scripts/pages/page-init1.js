/*=========================================================================================
    File Name: page-users.js
    Description: Users page
    --------------------------------------------------------------------------------------
    Item Name: Stack - Responsive Admin Template
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/
$(document).ready(function () {
    console.log("d")
    var row = $("#users-list-datatable_wrapper").children().first();
    var user_type = "<?php echo auth()->user()->type; ?>";
    console.log("fffff", user_type);
    // variable declaration
    var usersTable;
    var usersDataArray = [];
    var html = `<div style="justify-content: center; display: flex">
                    <div class="form-group" style="display: flex;">
                    <select class="custom-select custom-select-sm form-control form-control-sm" onchange="multi_status()"
                            id="status_sel">
                            <option value="">--Select Action--</option>
                            <option value="published" class="text-primary">Publish</option>
                            <option value="unpublished" class="text-danger">Unpublish</option>
                        </select></div><button onclick="multi_delete()" class="btn btn-sm btn-danger btn-min-width mr-1 mb-1"
                        id="multi-del" style="margin-left: 8px; visibility: hidden;">Delete</button>
                </div>`;
    // datatable initialization
    if ($("#users-list-datatable").length > 0) {
        if (user_type == 'staff') {
            usersTable = $("#users-list-datatable").DataTable({
                'columnDefs': [{
                    "orderable": false
                }],
                // dom: '<"pime-grid-button">l<"pime-grid-filter">f',
                dom: '<"pime-grid-button col-md-4 col-12"l><"pime-grid-filter col-md-4 col-12">frtip'
            });
            $("div.pime-grid-filter").html(html);
        } else {
            usersTable = $("#users-list-datatable").DataTable({
                'columnDefs': [{
                    "orderable": false
                }]
            });
        }
        
    // variable declaration
    };
    // on click selected users data from table(page named page-users-list)
    // to store into local storage to get rendered on second page named page-users-view
    $(document).on("click", "#users-list-datatable tr", function () {
        $(this).find("td").each(function () {
            usersDataArray.push($(this).text().trim())
        })
        localStorage.setItem("usersId", usersDataArray[0]);
        localStorage.setItem("usersUsername", usersDataArray[1]);
        localStorage.setItem("usersName", usersDataArray[2]);
        localStorage.setItem("usersVerified", usersDataArray[4]);
        localStorage.setItem("usersRole", usersDataArray[5]);
        localStorage.setItem("usersStatus", usersDataArray[6]);
    })
    // render stored local storage data on page named page-users-view
    if (localStorage.usersId !== undefined) {
        $(".users-view-id").html(localStorage.getItem("usersId"));
        $(".users-view-username").html(localStorage.getItem("usersUsername"));
        $(".users-view-name").html(localStorage.getItem("usersName"));
        $(".users-view-verified").html(localStorage.getItem("usersVerified"));
        $(".users-view-role").html(localStorage.getItem("usersRole"));
        $(".users-view-status").html(localStorage.getItem("usersStatus"));
        // update badge color on status change
        if ($(".users-view-status").text() === "Banned") {
            $(".users-view-status").toggleClass("badge-light-success badge-light-danger")
        }
        // update badge color on status change
        if ($(".users-view-status").text() === "Close") {
            $(".users-view-status").toggleClass("badge-light-success badge-light-warning")
        }
    }
    // page users list verified filter
    $("#users-list-verified").on("change", function () {
        var usersVerifiedSelect = $("#users-list-verified").val();
        usersTable.search(usersVerifiedSelect).draw();
    });
    // page users list role filter
    $("#users-list-role").on("change", function () {
        var usersRoleSelect = $("#users-list-role").val();
        // console.log(usersRoleSelect);
        usersTable.search(usersRoleSelect).draw();
    });
    // page users list status filter
    $("#users-list-status").on("change", function () {
        var usersStatusSelect = $("#users-list-status").val();
        // console.log(usersStatusSelect);
        usersTable.search(usersStatusSelect).draw();

    });
    // users language select
    if ($("#users-language-select2").length > 0) {
        $("#users-language-select2").select2({
            dropdownAutoWidth: true,
            width: '100%'
        });
    }
    // users music select
    if ($("#users-music-select2").length > 0) {
        $("#users-music-select2").select2({
            dropdownAutoWidth: true,
            width: '100%'
        });
    }
    // users movies select
    if ($("#users-movies-select2").length > 0) {
        $("#users-movies-select2").select2({
            dropdownAutoWidth: true,
            width: '100%'
        });
    }
    // users birthdate date
    if ($(".birthdate-picker").length > 0) {
        $('.birthdate-picker').pickadate({
            format: 'mmmm, d, yyyy'
        });
    }
    // Input, Select, Textarea validations except submit button validation initialization
    if ($(".users-edit").length > 0) {
        $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
    }

});