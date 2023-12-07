$(document).ready(function () {
    header();
});

function header() {
    $(window).scroll(function () {
        var sticky = $('header'),
            scroll = $(window).scrollTop();

        if (scroll >= 130) sticky.addClass('fixed');
        else sticky.removeClass('fixed');
    });
}


function validateForm(options, action) {
    let errorClass = options.errorClass || "error";
    let disableClass = options.disableClass || "disabled";

    let isValid = false;
    let button = $(options.button);
    let inputs = $(options.inputs);

    let specialFields = options.specialFields.selector;

    function checkInputs(_this) {
        let isSpecial = undefined;

        function checkIfSpecialFields(input) {
            isSpecial = input.attr(specialFields) !== undefined;
            let regexString = input.attr(specialFields);

            if (isSpecial) {
                let regex = new RegExp(regexString);
                validateSpecialFields(input, regex);
            }
        }

        function validateSpecialFields(field, regex) {
            let fieldValue = field.val();
            let test = regex.test(fieldValue) && fieldValue !== "";
            if (!test) {
                field.addClass(errorClass);
            } else {
                field.removeClass(errorClass);
            }
        }

        if (_this) {
            checkIfSpecialFields(_this);
            if (!isSpecial) {
                if (_this.val() == "") {
                    _this.addClass(errorClass);
                } else {
                    _this.removeClass(errorClass);
                }
            }
        } else {
            inputs.each(function () {
                checkIfSpecialFields($(this));
                if (!isSpecial) {
                    if ($(this).val() == "") {
                        $(this).addClass(errorClass);
                    } else {
                        $(this).removeClass(errorClass);
                    }
                }
            });
        }
    }

    function checkErrorClass() {
        isValid = inputs
            .toArray()
            .every((input) => !$(input).hasClass(errorClass));

        if (isValid) {
            button.removeClass(disableClass);
        }
    }

    inputs.on("change", function () {
        checkInputs($(this));
        checkErrorClass();
    });

    button.on("click", function (e) {
        e.preventDefault();
        checkInputs();
        checkErrorClass();

        if (isValid) {
            action();
        } else {
            $(this).addClass(disableClass);
        }
    });
}

validateForm(
    {
        button: "[data-submit]",
        inputs: "[data-validate]",
        specialFields: {
            selector: 'validate-regex',
        },
        errorClass: "error",
        disableClass: "disabled",
    },
    function () {
        alert("working peacefullty");
    }
);


function tabbing(
    buttonClassByContainer,
    panelClassByContainer,
    utilityClassToAdd
) {
    let activeClass = utilityClassToAdd ? utilityClassToAdd : "active";
    let buttons = $(buttonClassByContainer);
    let panels = $(panelClassByContainer);

    panels.not(panels.eq(0)).hide();

    buttons.click(function () {
        let itsIndex = $(this).index();
        if (panels.eq(itsIndex).length != 0) {
            buttons.removeClass(activeClass);
            $(this).addClass(activeClass);
            panels.hide();
            panels.eq(itsIndex).show().addClass(activeClass);
        } else {
            $(this).addClass("disabled");
        }
    });
}

function toggler(options) {
    const button = $(options.button);
    const action = $(options.actionContainer);
    const classToAdd = options.actionClass || "active";

    if (options.removeAction) {
        let _eventTrigger = $(options.removeAction.eventTrigger);
        let event = options.removeAction.event;

        _eventTrigger.on(event, function () {
            action.removeClass(classToAdd);
        });
    }

    button.click(function (e) {
        console.log("workign");
        if (options.preventDefault) {
            e.preventDefault();
        }
        button.toggleClass(classToAdd);
        action.toggleClass(classToAdd);
    });
}
