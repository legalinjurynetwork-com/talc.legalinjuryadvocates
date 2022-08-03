$("form.claim-form .slide-one button.custombtn").click(function () {
    $("form.claim-form p.error-text").hide();
    $(".form-slide").hide();
    $(".form-slide.slide-two").show();
    $('input[name="diagnosed"]').val(
        this.children[1].innerText.replace("Yes, ", "")
    );
    $('input[name="diagnosis"]').val(
        this.children[1].innerText.replace("Yes, ", "")
    );
    $(".progress-bar").css("width", "50%");
    $(".progress-bar").attr("aria-valuenow", "50");
    $(".progress-bar").text("50%");
});

$("form.claim-form .slide-two button.custombtn").click(function () {
    $("form.claim-form p.error-text").hide();
    $(".form-slide").hide();
    $(".form-slide.slide-three").show();
    var answer =
        this.children[1].innerText.toLowerCase().indexOf("2008") !== -1
            ? "after 2010"
            : "before 2010";
    $('input[name="diagnosed_when"]').val(answer);
    $(".progress-bar").css("width", "75%");
    $(".progress-bar").attr("aria-valuenow", "75");
    $(".progress-bar").text("75%");
});

$("form.claim-form .slide-three button.custombtn").click(function () {
    $("form.claim-form p.error-text").hide();
    $(".form-slide").hide();
    $(".form-slide.slide-four").show();
    var answer =
        this.children[1].innerText.toLowerCase().indexOf("yes") !== -1
            ? true
            : false;
    $('input[name="under_80"]').val(answer);
    $(".progress-bar").css("width", "95%");
    $(".progress-bar").attr("aria-valuenow", "95");
    $(".progress-bar").text("95%");
    // $('input[name="has_attorney"]').val(answer);
});

$("form.claim-form .slide-four button.custombtn").click(function () {
    $("form.claim-form p.error-text").hide();
    $(".form-slide").hide();
    $(".form-slide.slide-five").show();
    var answer =
        this.children[1].innerText.toLowerCase().indexOf("yes") !== -1
            ? true
            : false;
    $('input[name="has_attorney"]').val(answer);
    $(".progress-bar").css("width", "99%");
    $(".progress-bar").attr("aria-valuenow", "99");
    $(".progress-bar").text("99%");
});

// $("form.claim-form .slide-five button.custombtn2").click(function () {
//     $("form.claim-form p.error-text").hide();
//     $(".form-slide").hide();
//     $(".form-slide.slide-six").show();
//     var answer =
//         this.children[1].innerText.toLowerCase().indexOf("yes") !== -1
//             ? "true"
//             : "false";
//     $('input[name="has_attorney"]').val(answer);
//     $(".progress-bar").css("width", "100%");
//     $(".progress-bar").attr("aria-valuenow", "100");
//     $(".progress-bar").text("100%");
// });
var interval = null;
$("#phone_cell, #phone_home").keyup(function () {
    var firstInput = document.getElementById("phone_cell").value;
    var secondInput = document.getElementById("phone_home").value;
    if (firstInput != secondInput) {
        $("#phone_cell, #phone_home").addClass("not-confirmed");
        $(".phone_validation").fadeIn();
        if (interval == null)
            interval = setInterval(() => {
                console.log("Interval");
                document
                    .getElementById("submit")
                    .setAttribute("disabled", "disabled");
            }, 500);
    } else if (firstInput === secondInput) {
        $("#phone_cell, #phone_home").removeClass("not-confirmed");
        $(".phone_validation").fadeOut();
        clearInterval(interval);
        document.getElementById("submit").removeAttribute("disabled");
    }
});
