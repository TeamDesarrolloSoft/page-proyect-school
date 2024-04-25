<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

$(document).ready(function () {
    $("#send-btn").on("click", function () {
        $value = $("#data").val();
        $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
        $(".form").append($msg);
        $("#data").val('');

        // iniciar el código ajax
        $.ajax({
            url: '../app/trigger/chatbot.php',
            type: 'POST',
            data: 'text=' + $value,
            success: function (result) {
                $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>' + result + '</p></div></div>';
                $(".form").append($replay);
                // cuando el chat baja, la barra de desplazamiento llega automáticamente al final
                $(".form").scrollTop($(".form")[0].scrollHeight);
            }
        });
    });
});

document.getElementById("data").addEventListener("keyup", function (event) {
    if (event.keyCode === 13) { // El código de tecla 13 es el "Enter"
        event.preventDefault();
        document.getElementById("send-btn").click();
    }
});

document.getElementById("toggleButton").addEventListener("click", function () {
    var div = document.getElementById("burbuja");
    if (div.style.display === "none") {
        div.style.display = "block"; // Cambia a visible si está oculto
    } else {
        div.style.display = "none"; // Oculta si está visible
    }
});
