(function($){$.fn.timePicker=function(options){var settings=$.extend({},$.fn.timePicker.defaults,options);return this.each(function(){$.timePicker(this,settings)})};$.timePicker=function(elm,settings){var e=$(elm)[0];return e.timePicker||(e.timePicker=new jQuery._timePicker(e,settings))};$.timePicker.version='0.3';$._timePicker=function(elm,settings){var tpOver=!1;var keyDown=!1;var startTime=timeToDate(settings.startTime,settings);var endTime=timeToDate(settings.endTime,settings);var selectedClass="selected";var selectedSelector="li."+selectedClass;$(elm).attr('autocomplete','OFF');var times=[];var time=new Date(startTime);while(time<=endTime){times[times.length]=formatTime(time,settings);time=new Date(time.setMinutes(time.getMinutes()+settings.step))}
var $tpDiv=$('<div class="time-picker'+(settings.show24Hours?'':' time-picker-12hours')+'"></div>');var $tpList=$('<ul></ul>');for(var i=0;i<times.length;i++){$tpList.append("<li>"+times[i]+"</li>")}
$tpDiv.append($tpList);$tpDiv.appendTo('body').hide();$tpDiv.mouseover(function(){tpOver=!0}).mouseout(function(){tpOver=!1});$("li",$tpList).mouseover(function(){if(!keyDown){$(selectedSelector,$tpDiv).removeClass(selectedClass);$(this).addClass(selectedClass)}}).mousedown(function(){tpOver=!0}).click(function(){setTimeVal(elm,this,$tpDiv,settings);tpOver=!1});var showPicker=function(){if($tpDiv.is(":visible")){return!1}
$("li",$tpDiv).removeClass(selectedClass);var elmOffset=$(elm).offset();$tpDiv.css({'top':elmOffset.top+elm.offsetHeight,'left':elmOffset.left});$tpDiv.show();var time=elm.value?timeStringToDate(elm.value,settings):startTime;var startMin=startTime.getHours()*60+startTime.getMinutes();var min=(time.getHours()*60+time.getMinutes())-startMin;var steps=Math.round(min/settings.step);var roundTime=normaliseTime(new Date(0,0,0,0,(steps*settings.step+startMin),0));roundTime=(startTime<roundTime&&roundTime<=endTime)?roundTime:startTime;var $matchedTime=$("li:contains("+formatTime(roundTime,settings)+")",$tpDiv);if($matchedTime.length){$matchedTime.addClass(selectedClass);$tpDiv[0].scrollTop=$matchedTime[0].offsetTop}
return!0};$(elm).focus(showPicker).click(showPicker);$(elm).blur(function(){if(!tpOver){$tpDiv.hide()}});var event='keydown';$(elm)[event](function(e){var $selected;keyDown=!0;var top=$tpDiv[0].scrollTop;switch(e.keyCode){case 38:if(showPicker()){return!1};$selected=$(selectedSelector,$tpList);var prev=$selected.prev().addClass(selectedClass)[0];if(prev){$selected.removeClass(selectedClass);if(prev.offsetTop<top){$tpDiv[0].scrollTop=top-prev.offsetHeight}}else{$selected.removeClass(selectedClass);prev=$("li:last",$tpList).addClass(selectedClass)[0];$tpDiv[0].scrollTop=prev.offsetTop-prev.offsetHeight}
return!1;break;case 40:if(showPicker()){return!1};$selected=$(selectedSelector,$tpList);var next=$selected.next().addClass(selectedClass)[0];if(next){$selected.removeClass(selectedClass);if(next.offsetTop+next.offsetHeight>top+$tpDiv[0].offsetHeight){$tpDiv[0].scrollTop=top+next.offsetHeight}}else{$selected.removeClass(selectedClass);next=$("li:first",$tpList).addClass(selectedClass)[0];$tpDiv[0].scrollTop=0}
return!1;break;case 13:if($tpDiv.is(":visible")){var sel=$(selectedSelector,$tpList)[0];setTimeVal(elm,sel,$tpDiv,settings)}
return!1;break;case 27:$tpDiv.hide();return!1;break}
return!0});$(elm).keyup(function(e){keyDown=!1});this.getTime=function(){return timeStringToDate(elm.value,settings)};this.setTime=function(time){elm.value=formatTime(timeToDate(time,settings),settings);$(elm).change()}};$.fn.timePicker.defaults={step:30,startTime:new Date(0,0,0,0,0,0),endTime:new Date(0,0,0,23,30,0),separator:':',show24Hours:!0};function setTimeVal(elm,sel,$tpDiv,settings){elm.value=$(sel).text();$(elm).change();$tpDiv.hide()}
function formatTime(time,settings){var h=time.getHours();var hours=settings.show24Hours?h:(((h+11)%12)+1);var minutes=time.getMinutes();return formatNumber(hours)+settings.separator+formatNumber(minutes)+(settings.show24Hours?'':((h<12)?' AM':' PM'))}
function formatNumber(value){return(value<10?'0':'')+value}
function timeToDate(input,settings){return(typeof input=='object')?normaliseTime(input):timeStringToDate(input,settings)}
function timeStringToDate(input,settings){if(input){var array=input.split(settings.separator);var hours=parseFloat(array[0]);var minutes=parseFloat(array[1]);if(!settings.show24Hours){if(hours===12&&input.indexOf('AM')!==-1){hours=0}else if(hours!==12&&input.indexOf('PM')!==-1){hours+=12}}
var time=new Date(0,0,0,hours,minutes,0);return normaliseTime(time)}
return null}
function normaliseTime(time){time.setFullYear(2001);time.setMonth(0);time.setDate(0);return time}})(jQuery)