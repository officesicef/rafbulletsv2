"use strict";
$(function(){

  //Initialize Sidebar Switching
  $('.sidebar.sidebar-left').collpasibleSlider({
      toggleButtons:'.sidebar-toggle',
      hideButtons:'.sidebar-hide',
      gestures: true,
      closeOnClick: true

  });
  $('.sidebar.sidebar-right').collpasibleSlider({
      hideButtons:'.toggle-settings',
  });

  // Does not need!
  // var scrollelements = document.querySelectorAll('.scroll');
  // for(var i = 0; i< scrollelements.length; i++) {
  //   (function(element){
  //     var ps = new PerfectScrollbar(element, { suppressScrollX: true });
  //   })(scrollelements[i]);
  // }
  //
  // var scrollelementsEnd = document.querySelectorAll('.scroll-end');
  // for(var i = 0; i< scrollelementsEnd.length; i++) {
  //   (function(element){
  //     var ps = new PerfectScrollbar(element, { suppressScrollX: true });
  //     element.scrollTop = element.scrollHeight;
  //   })(scrollelementsEnd[i]);
  // }



  // Initialize search toggle on topbar
  $('.topbar-search-toggle').on('click', function(){

    if($('.topbar-search').hasClass('collapsed')){

      $('.topbar-search').removeClass('collapsed');
      $('.topbar-search').focus();

    } else {
      $('.topbar-search').blur();
      $('.topbar-search').addClass('collapsed');
    }
  })


    // Initialize Tooltips

    $('[data-toggle="tooltip"]').tooltip();


    // Sidebar Nav Collapse
    $('.sidebar-left .sidebar-nav').CollapsibleMenu({autoDetectActive: true});


    // Initialize email sidebar
    $('.email-toggle').on('click', function(){
      $('.email-sidebar').toggleClass('expanded');
    })




});



$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
    console.log("adsasdasd");
});

$(document).ready(function() {
    $('.js-example-basic-single').select2();
    console.log("adsasdasd");

    $('#select_drugs').on('change.select2', function (e) {
        $.post("/api/check-contra-drugs/1",{
            'drugs': $('#select_drugs').val()
        },function(data) {

            console.log(data);

            $('.lista-upozorenja').empty();
            $('.kartica_upozorenja').show();
            for(let i=0;i<data.length;i++) {
                let record = data[i];

                console.log(record.percent)
                let str = '<div class="row card-dijagnoza" style="background-color:#FCF8E3;border-color:#faebcc">\n' +
                    '                            <div class="col-4">\n' +
                    '\n' +
                    '                                <img src="/img/warning.svg" alt="" style="width:140px;">\n' +
                    '\n' +
                    '\n' +
                    '                            </div>\n' +
                    '                            <div class="col-8">\n' +
                    '                                <div class="">\n' +
                    '\n' +
                    '                                    <div class="naslov py-2">\n' +
                    '                                        '+record.name+'\n' +
                    '                                    </div>\n' +
                    '                                    <div class="procenat-uspesnosti py-2">\n' +
                    '                                        '+record.reason+'' +
                    '                                    </div>\n' +
                    '                                </div>\n' +
                    '\n' +
                    '                            </div>\n' +
                    '                        </div>'

                $("#loading").toggle();

                $('.lista-upozorenja').append(str);

            }
        });
    })

    $('#select_symptoms').on('change.select2', function (e) {
        $("#colona_za_uklanjanje").show()


        $("#loading").toggle();
        $("#left_pad").hide();
        $("#colona_za_uklanjanje").hide()
        // $('#izlistaj_dijagnoze').show();
        $.post("/api/check-diagnoses",{
            'symptoms': $('#select_symptoms').val()
        },function(data) {


            $('.lista-dijagnoza').empty()
            $('#izlistaj_dijagnoze').show();
            let brojac=0;
            for(let i=0;i<data.length;i++) {
                let record = data[i];
                let token=record.differences.split(",");
                console.log(record.percent)
                let str1 = '<div class="row card-dijagnoza">\n' +
                    '                        <div class="col-4 ">\n' +
                    '\n' +
                    '                            <div class="c100 p'+record.percent +'">\n' +
                    '                                <span class="percent">'+record.percent+'%</span>\n' +
                    '                                <div class="slice">\n' +
                    '                                    <div class="bar"></div>\n' +
                    '                                    <div class="fill"></div>\n' +
                    '                                </div>\n' +
                    '                            </div>\n' +
                    '\n' +
                    '\n' +
                    '                        </div>\n' +
                    '                        <div class="col-8">\n' +
                    '                            <div class="">\n' +
                    '\n' +
                    '                                <div class="naslov py-2">\n' +
                    '                                    '+record.name+'\n' +
                    '                                </div>\n' +
                    '                                <div class="lecenost py-2">\n' +
                    '                                    '+record.differences+'\n' +
                    '                                </div>\n' +
                    '                                <div class="lecenost py-2">\n' +
                    '                                   Broj dijagnostikovanih pacijenata:<b> '+record.examinations_count+'</b>\n' +
                    '                                </div>\n' +
                    '                            </div>\n' +
                    '\n' +
                    '                        </div>\n' +
                    '                    </div>';

                let str='<div class="row card-dijagnoza bg-siva">\n' +
                    '                        <div class="col-4 ">\n' +
                    '\n' +
                    '                            <div class="c100 p'+record.percent+'">\n' +
                    '                                <span class="percent">'+record.percent+'%</span>\n' +
                    '                                <div class="slice">\n' +
                    '                                    <div class="bar"></div>\n' +
                    '                                    <div class="fill"></div>\n' +
                    '                                </div>\n' +
                    '                            </div>\n' +
                    '\n' +
                    '\n' +
                    '                        </div>\n' +
                    '                        <div class="col-8">\n' +
                    '                            <div class="">\n' +
                    '\n' +
                    '                                <div class="naslov py-2">\n' +
                    '                                    '+record.name+'\n' +
                    '                                </div>\n' +
                    '                                <div class="lecenost py-2">\n' +
                    '                                    '+record.differences+'\n' +
                    '                                </div>\n' +
                    '                                <div class="lecenost py-2">\n' +
                    '                                   Broj dijagnostikovanih pacijenata:<b> '+record.examinations_count+'</b>\n' +
                    '                                </div>\n' +
                    '                            </div>\n' +
                    '\n' +
                    '                        </div>\n' +
                    '                    </div>';
                $("#loading").toggle();

                $("#colona_za_uklanjanje").show()
                if(brojac%2==0){
                    $('.lista-dijagnoza').append(str);
                }else {
                    $('.lista-dijagnoza').append(str1);
                }
                brojac++;

            }
        });






    });
});


//terapy

// $(document).ready(function() {
//
//
//         $("#colona_za_uklanjanje1").show()
//
//
//         $("#loading1").toggle();
//         $("#left_pad1").hide();
//         $("#colona_za_uklanjanje1").hide()
//         // $('#izlistaj_dijagnoze').show();
//         $.post("/api/check-drugs",{
//             'drugs': $('#select_therapy').val()
//         },function(data) {
//
//             console.log("ovo je data:"+data);
//             $('.lista-dijagnoza1').empty()
//             $('#izlistaj_dijagnoze1').show();
//
//             for(let i=0;i<data.length;i++) {
//                 let record = data[i];
//
//                 console.log(record.percent)
//                 let str = '<div class="row card-dijagnoza">\n' +
//                     '                        <div class="col-4 ">\n' +
//                     '\n' +
//                     '                            <div class="c100 p'+record.percent+'">\n' +
//                     '                                <span class="percent">'+record.percent+'%</span>\n' +
//                     '                                <div class="slice">\n' +
//                     '                                    <div class="bar"></div>\n' +
//                     '                                    <div class="fill"></div>\n' +
//                     '                                </div>\n' +
//                     '                            </div>\n' +
//                     '\n' +
//                     '\n' +
//                     '                        </div>\n' +
//                     '                        <div class="col-8">\n' +
//                     '                            <div class="">\n' +
//                     '\n' +
//                     '                                <div class="naslov py-2">\n' +
//                     '                                    '+record.name+'\n' +
//                     '                                </div>\n' +
//                     '                                <div class="lecenost py-2">\n' +
//                     '                                    '+record.differences+'\n' +
//                     '                                </div>\n' +
//                     '                                <div class="lecenost py-2">\n' +
//                     '                                   Number of diagnoses:<b> '+record.examinations_count+'</b>\n' +
//                     '                                </div>\n' +
//                     '                            </div>\n' +
//                     '\n' +
//                     '                        </div>\n' +
//                     '                    </div>'
//
//
//
//                 $("#colona_za_uklanjanje1").show()
//                 $("#loading1").toggle();
//                 $('.lista-dijagnoza1').append(str);
//
//             }
//         });
//
//
//
// });