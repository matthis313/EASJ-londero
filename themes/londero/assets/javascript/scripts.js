// **************************
// FILTERING PRODUCTS
// **************************
$(document).ready(function(){
    $("#all").click(function(){
        $(".nature").show();
        $(".beton").show();
        $(".mosaic").show();
    });
});

$(document).ready(function(){
    $("#nature").click(function(){
        $(".beton").hide();
        $(".mosaic").hide();
    });
    $("#nature").click(function(){
        $(".nature").show();
    });
});

$(document).ready(function(){
    $("#beton").click(function(){
        $(".nature").hide();
        $(".mosaic").hide();
    });
    $("#beton").click(function(){
        $(".beton").show();
    });
});

$(document).ready(function(){
    $("#mosaic").click(function(){
        $(".nature").hide();
        $(".beton").hide();
    });
    $("#mosaic").click(function(){
        $(".mosaic").show();
    });
});

// **************************
// PRODUCT MODALS
// **************************
$(document).ready(function(){
    $("#01").click(function(){
        $(".modal01").fadeIn();
    });
});

$(document).ready(function(){
    $("#close01").click(function(){
        $(".modal01").fadeOut();
    });
});

$(document).ready(function(){
    $("#02").click(function(){
        $(".modal02").fadeIn();
    });
});

$(document).ready(function(){
    $("#close02").click(function(){
        $(".modal02").fadeOut();
    });
});

$(document).ready(function(){
    $("#03").click(function(){
        $(".modal03").fadeIn();
    });
});

$(document).ready(function(){
    $("#close03").click(function(){
        $(".modal03").fadeOut();
    });
});

$(document).ready(function(){
    $("#04").click(function(){
        $(".modal04").fadeIn();
    });
});

$(document).ready(function(){
    $("#close04").click(function(){
        $(".modal04").fadeOut();
    });
});

$(document).ready(function(){
    $("#05").click(function(){
        $(".modal05").fadeIn();
    });
});

$(document).ready(function(){
    $("#close05").click(function(){
        $(".modal05").fadeOut();
    });
});

$(document).ready(function(){
    $("#06").click(function(){
        $(".modal06").fadeIn();
    });
});

$(document).ready(function(){
    $("#close06").click(function(){
        $(".modal06").fadeOut();
    });
});

$(document).ready(function(){
    $("#07").click(function(){
        $(".modal07").fadeIn();
    });
});

$(document).ready(function(){
    $("#close07").click(function(){
        $(".modal07").fadeOut();
    });
});

$(document).ready(function(){
    $("#08").click(function(){
        $(".modal08").fadeIn();
    });
});

$(document).ready(function(){
    $("#close08").click(function(){
        $(".modal08").fadeOut();
    });
});


// **************************
// FILTERING CASES
// **************************
$(document).ready(function(){
    $("#all_c").click(function(){
        $(".case_01").show();
        $(".case_02").show();
        $(".case_03").show();
    });
});

$(document).ready(function(){
    $("#nature_c").click(function(){
        $(".case_02").hide();
        $(".case_03").hide();
    });
    $("#nature_c").click(function(){
        $(".case_01").show();
    });
});

$(document).ready(function(){
    $("#beton_c").click(function(){
        $(".case_01").hide();
        $(".case_03").hide();
    });
    $("#beton_c").click(function(){
        $(".case_02").show();
    });
});

$(document).ready(function(){
    $("#mosaic_c").click(function(){
        $(".case_01").hide();
        $(".case_02").hide();
    });
    $("#mosaic_c").click(function(){
        $(".case_03").show();
    });
});


// **************************
// CASE MODALS
// **************************
$(document).ready(function(){
    $("#C_01").click(function(){
        $(".c_modal01").fadeIn();
    });
});

$(document).ready(function(){
    $("#c_close01").click(function(){
        $(".c_modal01").fadeOut();
    });
});

$(document).ready(function(){
    $("#C_02").click(function(){
        $(".c_modal02").fadeIn();
    });
});

$(document).ready(function(){
    $("#c_close02").click(function(){
        $(".c_modal02").fadeOut();
    });
});
$(document).ready(function(){
    $("#C_03").click(function(){
        $(".c_modal03").fadeIn();
    });
});

$(document).ready(function(){
    $("#c_close03").click(function(){
        $(".c_modal03").fadeOut();
    });
});
$(document).ready(function(){
    $("#C_04").click(function(){
        $(".c_modal04").fadeIn();
    });
});

$(document).ready(function(){
    $("#c_close04").click(function(){
        $(".c_modal04").fadeOut();
    });
});