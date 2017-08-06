$(document).ready(function () {
    $('#fight').click(function () {
            var character = $('#character').val(),
                character2 = $('#character2').val(),
                attack = $('#attack').val(),
                defence = $('#defence').val(),
                health = $('#health').val(),
                attack2 = $('#attack2').val(),
                defence2 = $('#defence2').val(),
                health2 = $('#health2').val();
            $.ajax({
                type: 'post',
                url: './php/create.php',
                data: {
                    character: character,
                    character2: character2,
                    attack: attack,
                    defence: defence,
                    health: health,
                    attack2: attack2,
                    defence2: defence2,
                    health2: health2
                },
                dataType: 'json',
                beforeSend: function () {
                    console.log('before');
                },
                success: function () {
                    console.log('success');

                },
                error: function () {

                }
            });


        }
    );

});
