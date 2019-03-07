jQuery.extend(jQuery.validator.messages, {
    required: "<span style='color: red;font-size: small;'>*Este campo es Obligatorio.</span>",
    remote: "<span style='color: red;font-size: small;'>*Ingrear un Dato válido.</span>",
    email: "<span style='color: red;font-size: small;'>*Ingresar una direccion válida.</span>",
    url: "<span style='color: red;font-size: small;'>*Ingresar una direccion URL válida.</span>",
    date: "<span style='color: red;font-size: small;'>*Ingresar una Fecha Válida.</span>",
    dateISO: "<span style='color: red;font-size: small;'>*Ingresar una Fecha Válida (ISO).</span>",
    number: "<span style='color: red;font-size: small;'>*Ingresar un Número Válido.</span>",
    digits: "<span style='color: red;font-size: small;'>*Ingresar solo Dígitos.</span>",
    creditcard: "<span style='color: red;font-size: small;'>*Ingresar un numero de Tarjeta Válido.</span>",
    equalTo: "<span style='color: red;font-size: small;'>*Ingresar el Mismo Valor.</span>",
    accept: "<span style='color: red;font-size: small;'>*Ingresar un valor con la misma Extensión.</span>",
    maxlength: jQuery.validator.format("<span style='color: red;font-size: small;'>*El largo no debe ser mas de {0} caracteres.</span>"),
    minlength: jQuery.validator.format("<span style='color: red;font-size: small;'>*El minimo debe ser de {0} caracteres.</span>"),
    rangelength: jQuery.validator.format("<span style='color: red;font-size: small;'>*Ingresar un valor de {0} y {1} caracteres de largo.</span>"),
    range: jQuery.validator.format("<span style='color: red;font-size: small;'>*Ingresar un varlo entre {0} y {1}.</span>"),
    max: jQuery.validator.format("<span style='color: red;font-size: small;'>*Ingresar un valor menor o igual a {0}.</span>"),
    min: jQuery.validator.format("<span style='color: red;font-size: small;'>*Ingrear un valor mayor o igual a {0}.</span>")
});