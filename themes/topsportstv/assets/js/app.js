$(document).ready(function(){
    $(".button-collapse").sideNav();
    $(".dropdown-button").dropdown();
    $('.slider').slider({   
        indicators: false,
        interval: 5000
    });
    $(".modal-trigger").leanModal();
    
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15, // Creates a dropdown of 15 years to control year
        monthsFull: [ 'enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre' ],
        monthsShort: [ 'ene', 'feb', 'mar', 'abr', 'may', 'jun', 'jul', 'ago', 'sep', 'oct', 'nov', 'dic' ],
        weekdaysFull: [ 'domingo', 'lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado' ],
        weekdaysShort: [ 'dom', 'lun', 'mar', 'mié', 'jue', 'vie', 'sáb' ],
        today: 'hoy',
        clear: 'borrar',
        close: 'cerrar',
        firstDay: 1, 
        formatSubmit: 'yyyy-mm-dd',
        hiddenName: true
      });
      
      
      var plan = $('#plan_id-input').val();
      $('#subscriptions_id-select').val(plan).change();
      
      $('select').material_select();
      
       


});

