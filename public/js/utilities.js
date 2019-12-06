!function (t, e, i) {
  "use strict";
  i.r(e),
  function (t) {
    i(197);
    t(document).ready(function () {
      t("#id_name").validate({
        rules: {
          name: {
            required: !0
          },
          password: {
            required: !0,
            minlength: 6
          },
          password_confirmation: {
            required: !0,
            minlength: 6,
            equalTo: "#password"
          },
          email: {
            required: !0,
            email: !0
          },
          agree: "required"
        },
        messages: {
          name: {
            required: "Please enter Your Name"
          },
          password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 6 characters long"
          },
          confirm_password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 6 characters long",
            equalTo: "Please enter the same password as above."
          },
          email: "Please enter a valid email address",
          agree: "Please accept our policy."
        },
        errorElement: "em",
        errorPlacement: function (t, e) {
          t.addClass("invalid-feedback"),
          "checkbox" === e.prop("type")
            ? t.insertAfter(e.next("label"))
            : t.insertAfter(e);
        },
        highlight: function (e, i, n) {
          t(e).addClass("is-invalid").removeClass("is-valid");
        },
        unhighlight: function (e, i, n) {
          t(e).addClass("is-valid").removeClass("is-invalid");
        }
      });
    });
  }.call(this, i(0));
};
