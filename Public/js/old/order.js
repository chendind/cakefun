var day=$("#date :selected").text();
  $("#sendtime").text(day+getTime(1));
$("#date").change(function(){
  var add=$("#date :selected").val();
      day=$("#date :selected").text();
  $("#sendtime").text(day+getTime(add));
}
);

function getTime(a){
var d = new Date(),
text ="";
a=parseInt(a);
d.setDate(d.getDate()+a);
year = d.getFullYear();
        month = parseInt(d.getMonth())+1;
        day = d.getDate();
        weekday = d.getDay();
        switch(weekday){
          case 0:weekday="日";break;
          case 1:weekday="一";break;
          case 2:weekday="二";break;
          case 3:weekday="三";break;
          case 4:weekday="四";break;
          case 5:weekday="五";break;
          case 6:weekday="六";break;
        }
        text="是"+year+"年"+month+"月"+day+"日 星期"+weekday;
         return text;
        }