// $(document).ready(function () {
//   $("#likebutton").click(function () {
//     alert("hw");
//   });
// });

// $(document).ready(function () {
//   $("#addFamilyForm").submit(function (event) {
//     submitForm();
//     return false;
//   });
// });

// function submitForm() {
//   $.ajax({
//     type: "POST",
//     url: route('add.into.family',['circle_id'=2]),
//     cache: false,
//     data: $("form#addFamilyForm").serialize(),
//     success: function (response) {
//       $("#addplan").html(response);
//       $("#add-family-modal").modal("hide");
//     },
//     error: function () {
//       alert("Error");
//     }
//   });
// }

$(document).ready(function() {
    $("#sendmessage").click(function(e) {
        e.preventDefault();
        content = $("#messagecontent").val();
        conversation_id = $("#conversation_id").text();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            data: { "content": content, "conversation_id": conversation_id },
            url: "/sendmessage/1",
            success: function(data) {
                $("#success").html(data);
            }
        });
    });
});