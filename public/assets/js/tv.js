// var currentStep = 1;

// function nextStep() {
//     currentStep++;
//     showStep(currentStep);
// }

// function prevStep() {
//     currentStep--;
//     showStep(currentStep);
// }

// function showStep(step) {
//     var steps = document.querySelectorAll('[id^="step"]');
//     for (var i = 0; i < steps.length; i++) {
//         steps[i].style.display = "none";
//     }
//     document.querySelector("#step" + step).style.display = "block";

//     if (currentStep == 1) {
//         document.querySelector(".prev-btn").style.display = "none";
//     } else {
//         document.querySelector(".prev-btn").style.display = "inline-block";
//     }

//     if (currentStep == steps.length) {
//         document.querySelector(".next-btn").style.display = "none";
//     } else {
//         document.querySelector(".next-btn").style.display = "inline-block";
//     }
// }
///// Limite de textos ///////
$(document).ready(function () {
    var maxLength = 250; // Define o comprimento máximo do texto
    $(".descricao-card").each(function () {
        // Itera sobre todas as tags <p> com a classe "texto"
        var texto = $(this).text(); // Obtém o conteúdo da tag <p>
        if (texto.length > maxLength) {
            // Verifica se o texto é maior que o comprimento máximo
            texto = texto.slice(0, maxLength) + "..."; // Limita o texto e adiciona reticências
            $(this).text(texto); // Define o conteúdo da tag <p> como o texto limitado
        }
    });

    //// Mapa do brasil ////
    $(".brasil path").hover(
        function () {
            $(this).css("fill", "#f00"); // muda a cor do preenchimento
        },
        function () {
            $(this).css("fill", "");
            var sigla = $(this).attr("id");
            $("#" + sigla).css("visibility", "hidden");
        },
    );
    // quando um estado é clicado, redireciona para o link correspondente
    $(".brasil path").click(function () {
        var linkEstado = $(this).data("link"); // obtém o link do estado a partir do atributo data-link
        window.location.href = linkEstado; // redireciona para o link do estado
    });

    //// Limite de textos ////
    $(".descricao").each(function () {
        var conteudo = $(this).text();
        var limite = 120;
        var novoConteudo = conteudo.substr(0, limite) + "...";
        $(this).text(novoConteudo);
    });
    //// links ativos ////
    $("nav ul li a").each(function () {
        if ($(this).prop("href") == window.location.href) {
            $(this).addClass("active");
        }
    });
});
