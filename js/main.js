$(document).ready(function(){

  // Checkbox enable or disable elements
  $('#checkbox_scheduled').click(function () {
    //check if checkbox is checked
    if ($(this).is(':checked')) {

        $('#reported_period').removeAttr('disabled'); //enable input

    } else {
        $('#reported_period').attr('disabled', true); //disable input
    }
  });

  $('#checkbox_alarm').click(function () {
    //check if checkbox is checked
    if ($(this).is(':checked')) {

        $('#max_count_2').removeAttr('disabled'); //enable input

    } else {
        $('#max_count_2').attr('disabled', true); //disable input
    }
  });

  // Exclude Elemets
  var scntDiv1 = $('.exclude-container-1');
  var i = $('.exclude-container-1 p').size() + 1;

  $('#addScnt-1').live('click', function() {
    $('<p><label for="p-scnts-1"><input type="text" id="p-scnt-1" size="20" name="p-scnt-' + i +'" value="" placeholder="Input Value" /></label> <a href="#" id="remScnt-1">Remove</a></p>').appendTo(scntDiv1);
    i++;
    return false;
  });

  $('#remScnt-1').live('click', function() {
    if( i > 1 ) {
      $(this).parents('p').remove();
      i--;
    }
    return false;
  });


  var scntDiv2 = $('.exclude-container-2');
  var j = $('.exclude-container-1 p').size() + 1;
  $('#addScnt-2').live('click', function() {
    $('<p><label for="p-scnts-2"><input tjpe="text" id="p-scnt-2" size="20" name="p-scnt-' + j +'" value="" placeholder="Input Value" /></label> <a href="#" id="remScnt-2">Remove</a></p>').appendTo(scntDiv2);
    j++;
    return false;
  });

  $('#remScnt-2').live('click', function() {
    if( j > 1 ) {
      $(this).parents('p').remove();
      j--;
    }
    return false;
  });

});
