var weekday = new Array(7);
weekday[0]="Domingo";
weekday[1]="Lunes";
weekday[2]="Martes";
weekday[3]="Miércoles";
weekday[4]="Jueves";
weekday[5]="Viernes";
weekday[6]="Sábado";

var today = new Date();
var until = new Date();

var dayOfWeek;
var until_arr;
var day1;
var day2;
var day3;

var workdays = new Array();
var i;

$.ajax({
    dataType: "json",
    url: '../response.php',
    method: 'post',
    data: {pull_schedule:1},
    success: function(result){
        $.each(result, function(index, value){
            dayOfWeek = today.getDay();
            until_arr = value.until_hrs.split(':');

            until.setHours(until_arr[0],until_arr[1],0);

            if (today <= until){
                day1 = value.days.substr(dayOfWeek,1);
                if (day1=="1")
                    workdays.push({sort: 1, weekday: weekday[dayOfWeek], type:value.type ,begin: value.time_begin, end: value.time_end});
            }

            for (i = 1; i < 6; i++) {
                if (dayOfWeek+i == 7) dayOfWeek = -i;
                day2 = value.days.substr(dayOfWeek+i,1);

                if (day2=="1")
                    workdays.push({sort: i+1, weekday: weekday[dayOfWeek+i], type:value.type , begin: value.time_begin, end: value.time_end});
            }
        });

        workdays = sortByKey(workdays,'sort');

        $.each(workdays, function(i,j){
            console.log(j);
            $.get( "../scope.txt", function( data ) {
                if (i < data)
                    $("#pick-delivery").append('<option value="'+j.type + '- ' +j.weekday+ ' - ' + j.begin + ' - ' + j.end +'">'+j.type + ' - ' + j.weekday + ' - ' + j.begin + ' - ' + j.end + '</option>');
            });

        })
    }
});

function sortByKey(array, key) {
    return array.sort(function(a, b) {
        var x = a[key]; var y = b[key];
        return ((x < y) ? -1 : ((x > y) ? 1 : 0));
    });
}
