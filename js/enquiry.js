$(document).ready(function () {

    var list = JSON.parse(localStorage.getItem("enquiryList")) || [];

    if (json !== null) {
        list.push(json);
    }

    refreshList();

    $("#mainCategory").on('change', function () {
        $(".c-loader .loader").addClass("active");
        $.ajax({
            type: 'POST',
            url: './php/enquiry.php',
            data: {
                mainCategory: $("#mainCategory").val(),
                function: "getSubCategory"
            },
            success: function (result) {
                var s = result.toString();
                //console.log(s);
                var arr = s.split(",");
                var html = "<option value='' disabled selected>Select Sub Category</option>";
                for (var i = 0; i < arr.length; i++){
                    html += "<option value='" + arr[i] + "'>";
                    html += arr[i];
                    html += "</option>";
                }
                $("#subCategory").html(html);
                $(".c-loader .loader").removeClass("active");
            }
        });
    });

    $("#subCategory").on('change', function () {
        $(".sc-loader .loader").addClass("active");
        $.ajax({
            type: 'POST',
            url: './php/enquiry.php',
            data: {
                mainCategory: $("#mainCategory").val(),
                subCategory: $("#subCategory").val(),
                function: "getProducts"
            },
            success: function (result) {
                var s = result.toString();
                //console.log(s);
                var arr = s.split(",");
                var html = "";
                for (var i = 0; i < arr.length; i++) {
                    html += "<option value='" + arr[i] + "'>";
                    html += arr[i];
                    html += "</option>";
                }
                $("#products").html(html);
                $(".sc-loader .loader").removeClass("active");
            }
        });
    });

    $("#addToCart").on('click', function () {
        var obj = {
            mainCategory: $("#mainCategory").val(),
            subCategory: $("#subCategory").val(),
            product: $("#products").val(),
            packing: $("#packing").val(),
            quantity: $("#quantity").val()
        };

        list.push(obj);
        refreshList();
    });

    $("#enquiryList").on('click', 'button.update', function () {
        var id = $(this).data('id');
        list[id].packing = $("#p" + id).val();
        list[id].quantity = $("#q" + id).val();
        refreshList();
    });

    $("#enquiryList").on('click', 'button.delete', function () {
        var id = $(this).data('id');
        list.splice(id, 1);
        refreshList();
    });

    $("#enquirySubmit").on('click', function () {

        if ($("#enquirySubmit").text() == "Submitting...") {
            return;
        }
        var email_reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

        var obj = { listarr: list };
        var listStr = JSON.stringify(obj);
        var name = $("#name").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var country = $("#country").val();
        var enquiry = $("#detail").val();

        if (name == "" || email == "" || phone == "") {
            $("#enquirySubmit").text("Please fill all required data.");
            return;
        }

        if (!email_reg.test(email)) {
            $("#enquirySubmit").text("Please check your email.");
            return;
        }

        $("#enquirySubmit").text("Submitting...");

        var d = new Date();
        var date = (d.getYear()+1900) +"-"+ (d.getMonth() + 1) +"-"+ zero(d.getDate()) +" "+ zero(d.getHours()) +":"+ zero(d.getMinutes()) +":"+ zero(d.getSeconds());

        $.ajax({
            type: 'POST',
            url: './php/enquiry.php',
            data: {
                list: listStr,
                name: name,
                email: email,
                phone: phone,
                country: country,
                enquiry: enquiry,
                datetime: date,
                function: "submitEnquiry"
            },
            success: function (result) {
                var s = result.toString();
                if (s == 1) {
                    $("#enquirySubmit").text("Successfully submitted.");
                } else {
                    $("#enquirySubmit").text("Error. Please try again.");
                }
            }
        });
    });


    function refreshList() {
        localStorage.setItem("enquiryList", JSON.stringify(list));
        var html = "";

        for (var i = 0; i < list.length; i++){
            html += "<tr>";
            html += "<td><p>" + list[i].mainCategory + "/" + list[i].subCategory + "/<strong>" + list[i].product + "</strong></p></td>";
            html += "<td><p><input min='0' id='p" + i +"' class='form-control' type='number' value='" + list[i].packing + "'></p></td>";
            html += "<td><p><input min='0' id='q" + i +"' class='form-control' type='number' value='" + list[i].quantity + "'></p></td>";
            html += "<td><p><button class='btn btn-success update' data-id='" + i + "'><span class='glyphicon glyphicon-ok'></span> Update</button></p></td>";
            html += "<td><p><button class='btn btn-danger delete' data-id='" + i + "'><span class='glyphicon glyphicon-trash'></span> Delete</button></p></td>";
            html += "</tr>";
        }

        $("#enquiryList").html(html);
    }
});

function zero(val) {
    if (val < 10) return "0" + val;
    else return val;
}