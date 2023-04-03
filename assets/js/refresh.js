setInterval(function(){
    $.ajax({
      url: 'http://example.com/users', // remplacer par l'URL de votre page qui retourne la liste des utilisateurs
      success: function(data) {
        $('#user-list').html(data); // remplacer #user-list par l'ID de l'élément HTML qui contient la liste des utilisateurs
      }
    });
  }, 5000); // actualiser toutes les 5 secondes
  