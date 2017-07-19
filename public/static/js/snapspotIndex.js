//gestion evenement du clic pour photo à envoyer et ouverture sur les mobiles d'un choix entre prise de photo ou photo enregistré
$('#upfile1').on('click', function () {
    $('#my_file').trigger('click');
});

document.getElementById("my_file").onchange = function () {
    document.getElementById("uploadform").submit();
};




