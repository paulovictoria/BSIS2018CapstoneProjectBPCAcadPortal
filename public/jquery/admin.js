 //DropDown
 $( document ).ready(function(){
 $(".dropdown-button").dropdown();
 });

 //Select
   $(document).ready(function() {
    $('select').material_select();
  });

//Navigation
$(document).ready(function() {
$(".button-collapse").sideNav(
        {
          menuWidth: 300,
          edge: 'left',
          closeOnClick: true,
          draggable: true,
        });
                           });

//Tabs
  $(document).ready(function(){
    $('ul.tabs').tabs();
  });
  
   $(document).ready(function(){
  $(".dropdown-button").dropdown();


  });

  $(document).ready(function(){
     $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });

       $('.timepicker').pickatime({
    default: 'now', // Set default time: 'now', '1:30AM', '16:30'
    fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
    twelvehour: true, // Use AM/PM or 24-hour format
    donetext: 'OK', // text for done-button
    cleartext: 'Clear', // text for clear-button
    canceltext: 'Cancel', // Text for cancel-button,
    container: undefined, // ex. 'body' will append picker to body
    autoclose: false, // automatic close timepicker
    ampmclickable: true, // make AM PM clickable
    aftershow: function(){} //Function for after opening timepicker
  });


 });   

