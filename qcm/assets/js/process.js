const TYPES = {

    CODE: 1,

    ANSWER: 2

};



var CurrentStep = 1;

const MaxStep = 5;



var CurrentType = TYPES.CODE;

var CurrentQuestion = null;

var responseCounter = 0;



var time = 0;

var IntervalRef = null;



var startDate = null;

var EndDate = null;



var save = {

    Time: time,

    ResponseCounter: responseCounter,

    Codes: [],

};



function UpdateStepsInView() {

    const cStepElem = $('span.cStep');

    const mStepElem = $('span.mStep');

    const progressBar = $('.progress-bar');



    const pourcent = (CurrentStep / MaxStep) * 100;



    $(cStepElem).html(CurrentStep);

    $(mStepElem).html(MaxStep);



    $(progressBar).css('width', `${pourcent}%`).attr('aria-valuenow', pourcent);

}



function UpdateCurrentStep(newStep) {

    if (newStep) {

        CurrentStep = newStep;

    } else {

        CurrentStep++;

    }



    UpdateStepsInView();

}



function ResetFormBlock() {

    const holder = $('form .holder');



    $(holder).html(`

        <div class="text-center w-full">

            <div class="spinner-border text-danger" role="status">

                <span class="sr-only">Loading...</span>

            </div>

        </div>

    `);

}



function SetupCodeBlock() {

    const holder = $('form .holder');



    CurrentType = TYPES.CODE;



    $(holder).html(`

        <label class="font-weight-bold">Code d'accès</label><br>

        <input class="form-control" type="text" placeholder="****" id="access_code" name="access_code" required />

    `);

}



function SetupAnswerBlock(title, label, possibilities) {

    const holder = $('form .holder');



    CurrentType = TYPES.ANSWER;



    $(holder).html(`

        <label class="font-weight-bold mx-auto">${title}</label>

        <label class="font-weight-bold mx-auto">${label}</label>

    `);



    Array.from(possibilities).forEach((response, key) => {

        $(holder).append(`

            <div class="form-check">

                <input class="form-check-input" type="radio" name="response" id="response${key}" value="option${key}" data-id="${key}">

                <label class="form-check-label" for="response${key}">

                    ${response.title}

                </label>

            </div>

        `);

    });



    $(holder).find('.form-check-input').first().prop('checked', true);

}



function SetupAlertBlock(title) {

    const holder = $('form .alert-holder');





    $(holder).html(`

        <div class="alert alert-danger" role="alert">

            ${title}

        </div>

    `);



    setTimeout(function() {

        $(holder).html('');

    }, 3000);

}



function SetupFinish() {

    const holder = $('form');

    const end = $('.finish');



    EndDate = new Date();

    let totalSeconds = Math.floor((new Date(EndDate - startDate))/1000);

    let hours = Math.floor(totalSeconds / 3600);

    totalSeconds %= 3600;

    let minutes = Math.floor(totalSeconds / 60);

    let seconds = totalSeconds % 60;



    minutes = String(minutes).padStart(2, "0");

    hours = String(hours).padStart(2, "0");

    seconds = String(seconds).padStart(2, "0");



    var timer = (hours + ":" + minutes + ":" + seconds);



    // clearInterval(IntervalRef);



    $(holder).hide();

    $(end).fadeIn(500);



    $(`.finish .responses .count`).html(responseCounter);

    $(`.finish .timer .time`).html(timer);





    $.ajax({

        url: "./fonctions.php",

        method: "post",

        data: {

            name_team: team,

            final_timer: timer,

            good: responseCounter

        },

        success: function(res) {

            console.log(res);

        }

    });

    //localStorage.removeItem("save")

}



function IncreaseTimer() {

    time++;

    save.Time = time;



    //localStorage.setItem("save", JSON.stringify(save));

}



function LaunchTimer() {

    //IntervalRef = setInterval(IncreaseTimer, 1000);

    startDate = new Date();

}



$('form').on('submit', function(e) {

    e.preventDefault();

    var datas = {};

    switch (CurrentType) {

        case TYPES.CODE:

            datas = {

                SUBMIT_CODE: true,

                CODE: $("#access_code").val().toString()

            };



            break;



        case TYPES.ANSWER:

            datas = {

                RESPONSE: $("input[name=response]:checked").data('id')

            };

            break;

    

        default:

            break;

    }



    ResetFormBlock();



    if (CurrentType == TYPES.CODE) {

        if (save.Codes.includes(datas.CODE)) {

            SetupAlertBlock("Vous avez déjà utilisé ce code d'accès, essayez en un autre.");

            SetupCodeBlock();

            return 

        }



        $.ajax({

            method: 'POST',

            url: '../controller/ProcessController.php',

            data: datas,

            success: function(response) {

                if (response == "") {

                    fResponse = [];

                } else {

                    fResponse = JSON.parse(response);

                }

                if (fResponse.length == 0) {

                    SetupAlertBlock("Ce code d'accès est introuvable, essayez en un autre.");

                    SetupCodeBlock();

                } else {

                    var distance = checkDistance(fResponse[0].id)



                    if (distance > 500000.001) {

                        SetupAlertBlock("Vous êtes trop loin de la position reliée a ce code, rapprochez vous pour pouvoir l'utiliser.");

                        SetupCodeBlock();

                    } else {

                        if (CurrentStep == 1) {

                            LaunchTimer();

                        }



                        var possibilities = Array();



                        for (let index = 0; index < fResponse.length; index++) {

                            const element = fResponse[index];

                            possibilities.push({

                                title: element.reponse,

                                is_valid: element.valid

                            });

                        }



                        CurrentQuestion = {

                            title: fResponse[0].label_question,

                            label: fResponse[0].question,

                            possibilities: possibilities

                        }



                        save.Codes.push(datas.CODE);



                        deleteMarker(fResponse[0].id);

                        SetupAnswerBlock(fResponse[0].label_question, fResponse[0].question, possibilities);

                        if(fResponse[0].id == 55){

                            // $('.defi').modal('show');

                           $('.defi').modal({backdrop: 'static', keyboard: false});

                            setTimeout(() => {

                                $('.btn-defi').fadeIn()

                            }, 20000);

                        }

                    }

                }

            },

            error: function(response) {

                console.log("ERREUR");

            }

        });

    } else if (CurrentType == TYPES.ANSWER) {

        responseCounter += parseInt(CurrentQuestion.possibilities[parseInt(datas.RESPONSE)].is_valid)

        

        if (CurrentStep == MaxStep) {

            SetupFinish();

        } else {

            UpdateCurrentStep();

            SetupCodeBlock();

        }

    }

});



$(document).ready(function() {

    console.log(team);

    const end = $('.finish');

    $(end).hide();



    UpdateStepsInView();

    SetupCodeBlock();

});