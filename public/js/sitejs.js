$('#add-lect').click(function(){
    var count = ($("#add-lect").children().length / 2) + 1;
   $('#secs').append('<label>Lecture ' + count + ':</label><input type="text" name="lecture" id="lecture-'+ count +'"/>');
});

$('#add-sect').click(function(){
    var count = ($("#add-sect").children().length / 2) + 1;
    $('#secs').append('<label>Section '+ count +':</label> <input type="text" name="section" id="section-'+count+'"/>');
});