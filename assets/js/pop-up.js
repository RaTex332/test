<script>
  $(document).ready(function () {
    $("#form").validate({
      submitHandler: function (form) {
        $.ajax({
          url: "<?php echo base_url('user/registre'); ?>",
          type: "POST",
          data: $(form).serialize(),
          success: function (response) {
            if (response.success) {
              $("#form")[0].reset();
              $(".alert-success").fadeIn().delay(2000).fadeOut();
            }
          },
          error: function () {
            alert("Une erreur est survenue lors de l'envoi du formulaire.");
          },
        });
        return false;
      },
    });
  });
</script>
