$(document).ready(function(){
  var dataOfyears = [];
  var startPointOfyear = new Date(1900,1,1);
  var endPointOfyear = Date.now();
  var year = 1900;
  var birthyear = parseInt($("#year-select").data("year"));

  var intervalOftime = parseInt((((((endPointOfyear - startPointOfyear)/1000)/60)/60)/24)/365);

  for(var i = 0;i < intervalOftime && i != birthyear;i++){
      let config = {
        id:year,
        text: year.toString()
      }

      dataOfyears.push(config);
      year++;
    }

    $("#year-select").select2({
        width: '100%',
        data:dataOfyears,
      });
});
