$(document).ready(function () {
    $("#basic-datatables").DataTable();

    // Reset Teams form when modal is closed
    $("#addteammodel").on("hidden.bs.modal", function () {
        resetTeamsForm();
    });

    // Reset form when "Add Record" button is clicked (before modal opens)
    $('[data-bs-target="#addteammodel"]').on("click", function () {
        resetTeamsForm();
    });
});

// Function to reset Teams form
function resetTeamsForm() {
    $("#txtteamid").val("");
    $("#txtfullname").val("");
    // Clear Summernote editor
    if ($("#editor").length && $.fn.summernote) {
        $("#editor").summernote("code", "");
    }
    $("#txtteamsimg").val("");
    $("#currentImage").html("");
    $("#addteam").text("Save changes");
}

//Teams
$("#addteam").on("click", function () {
    let formData = new FormData();

    formData.append("name", $("#txtfullname").val());
    formData.append("id", $("#txtteamid").val());
    // Get content from Summernote editor
    formData.append("description", $("#editor").summernote('code'));

    // 🔥 Append image ONLY if selected
    let imageInput = $("#txtteamsimg")[0];
    if (imageInput.files.length > 0) {
        formData.append("image", imageInput.files[0]);
    }

    $.ajax({
        url: base_url + "saveteams",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },

        success: function (res) {
            swal("Success!", res.message, {
                icon: "success",
                buttons: {
                    confirm: {
                        className: "btn btn-success",
                    },
                },
            });

            $("#addteammodel").modal("hide");
            location.reload();
        },

        error: function (err) {
            alert(err.responseJSON?.message || "Something went wrong");
        },
    });
});

function editteams(id) {
    $.ajax({
        type: "GET",
        url: base_url + "editteams/" + id,
        dataType: "json",

        success: function (data) {
            console.log("Edit data received:", data);

            // Fill form fields BEFORE opening modal
            $("#txtteamid").val(data.id);
            $("#txtfullname").val(data.name);

            // Show current image preview
            if (data.img) {
                $("#currentImage").html(
                    `<small class="text-success">Current Image:</small><br><img src="${base_url}${data.img}" width="100" height="60" style="margin-top:5px; border-radius:5px;">`
                );
            } else {
                $("#currentImage").html("");
            }

            // Change button text from "Add" → "Update"
            $("#addteam").text("Update");

            // Open the modal
            $("#addteammodel").modal("show");

            // Set Summernote content AFTER modal is shown (with delay for initialization)
            setTimeout(function () {
                if (data.description) {
                    $("#editor").summernote('code', data.description);
                }
            }, 300);
        },

        error: function (err) {
            console.error("Edit error:", err);
            alert("Failed to load team data");
        }
    });
}
function deleteteams(item_id) {
    swal({
        title: "Are you sure?",
        icon: "warning",
    }).then((result) => {
        //console.log(result);
        if (result) {
            $.ajax({
                type: "POST",
                url: base_url + "deleteteams",
                data: {
                    id: item_id,
                },
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                dataType: "json",
                success: function (data) {
                    if (data.status) {
                        location.reload();
                    }
                },
            });
        }
    });
}

//portfilo
$("#addportfilo").on("click", function () {
    let formData = new FormData();
    formData.append("image", $("#txtportfilo")[0].files[0]);
    formData.append("id", $("#txtportfiloid").val());
    formData.append("name", $("#txtname").val());
    //txtname

    $.ajax({
        url: base_url + "saveportfilo",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,

        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },

        success: function (res) {
            swal("Success!", "Partner & Associate added!", {
                icon: "success",
                buttons: {
                    confirm: {
                        className: "btn btn-success",
                    },
                },
            });
            $("#addpartner").modal("hide");
            location.reload();
        },
        error: function (err) {
            alert("CSRF error: " + err.responseText);
        },
    });
});
function editportfilo(id) {
    $.ajax({
        type: "GET",
        url: base_url + "editportfilo/" + id,
        dataType: "json",

        success: function (data) {
            console.log(data);

            // Open the modal
            $("#addportfilo").modal("show");

            // Fill form fields
            $("#txtfileid").val(data.id);
            $("#txtfullname").val(data.name);

            // You CANNOT set .val() for a file input. So show preview text instead.
            $("#currentImage").html(
                `<small class="text-success">Current Image: ${data.img}</small>`
            );

            // Change button text from "Add" → "Update"
            $("#addteam").text("Update");
        },
    });
}
function deleteportfiloModel(item_id) {
    swal({
        title: "Are you sure?",
        icon: "warning",
    }).then((result) => {
        //console.log(result);
        if (result) {
            $.ajax({
                type: "POST",
                url: base_url + "deleteportfilo",
                data: {
                    id: item_id,
                },
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                dataType: "json",
                success: function (data) {
                    if (data.status) {
                        location.reload();
                    }
                },
            });
        }
    });
}

//Partner & Asscote
$("#addbtnpartner").on("click", function () {
    let formData = new FormData();
    formData.append("image", $("#txtpartner")[0].files[0]);
    formData.append("id", $("#txtpartnerid").val());

    $.ajax({
        url: base_url + "savepartner",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,

        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },

        success: function (res) {
            swal("Success!", "Partner & Associate added!", {
                icon: "success",
                buttons: {
                    confirm: {
                        className: "btn btn-success",
                    },
                },
            });
            $("#addpartner").modal("hide");
            location.reload();
        },
        error: function (err) {
            alert("CSRF error: " + err.responseText);
        },
    });
});
function editpartner(id) {
    $.ajax({
        type: "GET",
        url: base_url + "editpartner/" + id,
        dataType: "json",

        success: function (data) {
            console.log(data);

            // Open the correct modal
            $("#addpartner").modal("show");

            // Fill form fields
            $("#txtpartnerid").val(data.id);

            // Show current image preview
            $("#currentImage").html(
                `<small class="text-success">Current Image: <img src="${base_url}${data.partner}" width="100" height="50"/></small>`
            );

            // Change button text from "Add" → "Update"
            $("#addbtnpartner").text("Update");
        },
    });
}
function deletepartner(item_id) {
    swal({
        title: "Are you sure?",
        icon: "warning",
    }).then((result) => {
        //console.log(result);
        if (result) {
            $.ajax({
                type: "POST",
                url: base_url + "deletepartner",
                data: {
                    id: item_id,
                },
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                dataType: "json",
                success: function (data) {
                    if (data.status) {
                        location.reload();
                    }
                },
            });
        }
    });
}

//newsletter
$("#addnewletter").on("click", function () {
    let formData = new FormData();

    formData.append("name", $("#txtfullname").val());
    formData.append("id", $("#txtfileid").val());

    // ✅ Append PDF only if selected
    let pdfInput = $("#txtnewsletterimg")[0];
    if (pdfInput.files.length > 0) {
        formData.append("image", pdfInput.files[0]);
    }

    // ✅ Append title image only if selected
    let titleInput = $("#txttitle")[0];
    if (titleInput.files.length > 0) {
        formData.append("title", titleInput.files[0]);
    }

    $.ajax({
        url: base_url + "savenewletter",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },

        success: function (res) {
            swal("Success!", res.message, {
                icon: "success",
                buttons: {
                    confirm: {
                        className: "btn btn-success",
                    },
                },
            });

            $("#addnewsletter").modal("hide");
            location.reload();
        },

        error: function (err) {
            alert(err.responseJSON?.message || "Something went wrong");
        },
    });
});
function editnewletter(id) {
    $.ajax({
        type: "GET",
        url: base_url + "editnewletter/" + id,
        dataType: "json",

        success: function (data) {
            console.log(data);

            // Open the modal
            $("#addnewsletter").modal("show");

            // Fill form fields
            $("#txtfileid").val(data.id);
            $("#txtfullname").val(data.name);

            // You CANNOT set .val() for a file input. So show preview text instead.
            $("#currentImage").html(
                `<small class="text-success">Current Image: ${data.img}</small>`
            );

            // Change button text from "Add" → "Update"
            $("#addteam").text("Update");
        },
    });
}
function deletenewsletter(item_id) {
    swal({
        title: "Are you sure?",
        icon: "warning",
    }).then((result) => {
        //console.log(result);
        if (result) {
            $.ajax({
                type: "POST",
                url: base_url + "deletenewletter",
                data: {
                    id: item_id,
                },
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                dataType: "json",
                success: function (data) {
                    if (data.status) {
                        location.reload();
                    }
                },
            });
        }
    });
}

//silder
$("#addRowButton").on("click", function () {
    let formData = new FormData();
    formData.append("title", $("#txttile").val());
    formData.append("image", $("#txtimg")[0].files[0]);
    formData.append("id", $("#txtid").val());

    $.ajax({
        url: base_url + "savesilder",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,

        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },

        success: function (res) {
            swal("Success!", "Slider added!", {
                icon: "success",
                buttons: {
                    confirm: {
                        className: "btn btn-success",
                    },
                },
            });
            $("#addRowModal").modal("hide");
            location.reload();
        },
        error: function (err) {
            alert("CSRF error: " + err.responseText);
        },
    });
});
function editsilder(id) {
    $.ajax({
        type: "GET",
        url: base_url + "editsilder/" + id,

        dataType: "json",

        success: function (data) {
            // console.log(url)
            $("#addRowModal").modal("show");
            $("#txtid").val(data.id);
            $("#txttile").val(data.title);
            $("#txtimg").val(data.img);
        },
    });
}
function deletesilder(item_id) {
    swal({
        title: "Are you sure?",
        icon: "warning",
    }).then((result) => {
        //console.log(result);
        if (result) {
            $.ajax({
                type: "POST",
                url: base_url + "deletesilder",
                data: {
                    id: item_id,
                },
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                dataType: "json",
                success: function (data) {
                    if (data.status) {
                        location.reload();
                    }
                },
            });
        }
    });
}

//Users
$("#addusers").on("click", function () {
    let formData = new FormData();
    formData.append("fullname", $("#txtfullname").val());
    formData.append("username", $("#txtusername").val());
    formData.append("password", $("#txtpasswd").val());
    formData.append("email", $("#txtemail").val());

    $.ajax({
        url: base_url + "saveuser",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,

        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },

        success: function (res) {
            swal("Success!", "users added!", {
                icon: "success",
                buttons: {
                    confirm: {
                        className: "btn btn-success",
                    },
                },
            });
            $("#addusermodel").modal("hide");
            location.reload();
        },
        error: function (err) {
            alert("CSRF error: " + err.responseText);
        },
    });
});

function edituserstatus(id) {
    $.ajax({
        type: "GET",
        url: base_url + "user/status/" + id,
        dataType: "json",
        success: function (data) {
            location.reload(true);
        },
    });
}


//FundPDF
$("#addfundpdf").on("click", function () {
    let formData = new FormData();

    formData.append("name", $("#txtfundtype").val());
    formData.append("id", $("#txtfundid").val());
    formData.append("filename1", $("#txtfullname").val());
    // ✅ Append PDF only if selected txtfullname
    let pdfInput = $("#txtfundpdf")[0];
    if (pdfInput.files.length > 0) {
        formData.append("image", pdfInput.files[0]);
    }
    $.ajax({
        url: base_url + "savefundpdf",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },

        success: function (res) {
            swal("Success!", res.message, {
                icon: "success",
                buttons: {
                    confirm: {
                        className: "btn btn-success",
                    },
                },
            });

            $("#addfunddpf").modal("hide");
            location.reload();
        },

        error: function (err) {
            alert(err.responseJSON?.message || "Something went wrong");
        },
    });
});
function editfundpdf(id) {
    $.ajax({
        type: "GET",
        url: base_url + "editfundpdf/" + id,
        dataType: "json",

        success: function (data) {
            console.log(data);

            // Open the modal
            $("#addfunddpf").modal("show");

            // Fill form fields
            $("#txtfileid").val(data.id);
            $("#txtfullname").val(data.name);

            // You CANNOT set .val() for a file input. So show preview text instead.
            $("#currentImage").html(
                `<small class="text-success">Current Image: ${data.img}</small>`
            );

            // Change button text from "Add" → "Update"
            $("#addteam").text("Update");
        },
    });
}
function deletefundpdf(item_id) {
    swal({
        title: "Are you sure?",
        icon: "warning",
    }).then((result) => {
        //console.log(result);
        if (result) {
            $.ajax({
                type: "POST",
                url: base_url + "deletefundpdf",
                data: {
                    id: item_id,
                },
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                dataType: "json",
                success: function (data) {
                    if (data.status) {
                        location.reload();
                    }
                },
            });
        }
    });
}