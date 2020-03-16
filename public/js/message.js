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
        circle_id = $("#circle_id").text();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            data: { "content": content, "conversation_id": conversation_id },
            url: "/sendmessage/" + circle_id,
            success: function(data) {
                var existingMessages = $("#newmessages").html();

                // console.log(data.circle_id);
                switch (data.circle_id) {
                    case '1':
                        var newMessageHtml = `
                        <li class="you">
                            <figure><img src="` + data.msender.profile_picture + `" alt=""></figure>
                            <p>` + data.content + `</p>
                        </li>
                        `;
                        break;
                    case '2':
                        var newMessageHtml = `
                        <li class="you">
                            <figure><img src="` + data.msenderf.profile_picture + `" alt=""></figure>
                            <p>` + data.content + `</p>
                        </li>
                        `;
                        break;
                    case '3':
                        var newMessageHtml = `
                        <li class="you">
                            <figure><img src="` + data.msenderb.profile_picture + `" alt=""></figure>
                            <p>` + data.content + `</p>
                        </li>
                        `;
                        break;
                    default:
                        var newMessageHtml = `
                        <li class="you">
                            <figure><img src="" alt=""></figure>
                            <p>default</p>
                        </li>
                        `;
                        break;
                }
                $("#newmessages").html(existingMessages + newMessageHtml);
                $("#sendmessageform")[0].reset();
            }
        });
    });
});