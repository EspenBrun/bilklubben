$.extend($.validator.messages, {
    required: "Vennligst fyll ut dette feltet",
    email: "Vennligst fyll ut en gyldig epostadresse",
    digits: "Vennligst bruk kun siffre",
    maxlength: $.validator.format("Vennligst ikke fyll inn mer enn {0} tegn."),
    minlength: $.validator.format("Vennligst ikke fyll inn mindre enn {0} tegn.")
});