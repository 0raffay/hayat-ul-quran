$(document).ready(function () {
    header();
    slider();
});

function slider() {
    $(".pricing").slick({
        slidesToShow: 3,
        centerMode: true,
        centerPadding: "5px",
        dots: true,
        arrows: true,
        nextArrow: $(".feesSliderButton #next"),
        prevArrow: $(".feesSliderButton #prev"),
        responsive: [
            {
                breakpoint: 1440,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
        ]
    })
    $('.slider').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2,
        autoplay: true,
        speed: 1000,
        arrows: true,
        nextArrow: $('#prevBtn'),
        prevArrow: $('#nextBtn'),
        responsive: [
            {
                breakpoint: 1300,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
        ]
    });
}


function header() {
    $(window).scroll(function () {
        var sticky = $('header'),
            scroll = $(window).scrollTop();

        if (scroll >= 130) sticky.addClass('fixed');
        else sticky.removeClass('fixed');
    });

    let burgerButton = $('.burgerButton')
    let mobileMenu = $('.mobileMenu')

    let closeButton = $('.mobileMenuClose')

    burgerButton.click(function () {
        mobileMenu.toggleClass('active')
    })

    closeButton.click(function () {
        mobileMenu.removeClass('active')
    })

    let mobileSubmenuButton = $('.rf--mobileSubmenu-button')
    let mobileSubmenu = '.rf--mobile-submenu'
    $(mobileSubmenu).slideUp();

    mobileSubmenuButton.click(function (e) {
        e.preventDefault();

        $(this).toggleClass('active')
        $(this).find(mobileSubmenu).slideToggle();
    })
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

tabbing(".round-list li", ".about-rounded-card > div", "active");

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


/// SLIDER JS HERE




function accordion() {
    let accordionButton = $(".accordion__button");
    let panel = $(".accordion__panel");
    let activePanel = $(".accordion__panel.active");
    activePanel.slideDown();

    accordionButton.click(function () {
        let isActive = $(this).hasClass("active");
        if (!isActive) {
            accordionButton.removeClass("active");
            panel.slideUp();
            $(this).addClass("active");
            $(this).next().slideDown();
        } else {
            $(this).next().slideUp()
            $(this).removeClass("active")
        }
    });
}
accordion();

$(window).on("scroll", function () {
    var section = $(".counterSection");
    var windowHeight = $(window).height();
    var windowScrollTop = $(window).scrollTop();
    var sectionOffset = section.offset().top;
    if (windowScrollTop + (windowHeight / 2) > sectionOffset) {
        $(".count").each(function () {
            var $this = $(this);
            // Check if the counter has already been animated
            if (!$this.data("animated")) {
                var countValue = $this.text().replace(/,/g, '');
                $this.text("0");
                $this.data("animated", true); // Mark as animated to avoid resetting
                $({
                    Counter: 0
                }).animate(
                    {
                        Counter: countValue,
                    },
                    {
                        duration: 2000,
                        easing: "swing",
                        step: function () {
                            $this.text(Math.ceil(this.Counter).toLocaleString());
                        },
                        complete: function () {
                            $this.text(this.Counter.toLocaleString());
                        },
                    }
                );
            }
        });
    }
});