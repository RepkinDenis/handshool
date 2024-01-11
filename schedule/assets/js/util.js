// Utility function
function Util () {};

/* 
	class manipulation functions
*/
Util.hasClass = function(el, className) {
	if (el.classList) return el.classList.contains(className);
	else return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
};

Util.addClass = function(el, className) {
	var classList = className.split(' ');
 	if (el.classList) el.classList.add(classList[0]);
 	else if (!Util.hasClass(el, classList[0])) el.className += " " + classList[0];
 	if (classList.length > 1) Util.addClass(el, classList.slice(1).join(' '));
};

Util.removeClass = function(el, className) {
	var classList = className.split(' ');
	if (el.classList) el.classList.remove(classList[0]);	
	else if(Util.hasClass(el, classList[0])) {
		var reg = new RegExp('(\\s|^)' + classList[0] + '(\\s|$)');
		el.className=el.className.replace(reg, ' ');
	}
	if (classList.length > 1) Util.removeClass(el, classList.slice(1).join(' '));
};

Util.toggleClass = function(el, className, bool) {
	if(bool) Util.addClass(el, className);
	else Util.removeClass(el, className);
};

Util.setAttributes = function(el, attrs) {
  for(var key in attrs) {
    el.setAttribute(key, attrs[key]);
  }
};

/* 
  DOM manipulation
*/
Util.getChildrenByClassName = function(el, className) {
  var children = el.children,
    childrenByClass = [];
  for (var i = 0; i < el.children.length; i++) {
    if (Util.hasClass(el.children[i], className)) childrenByClass.push(el.children[i]);
  }
  return childrenByClass;
};

/* 
	Animate height of an element
*/
Util.setHeight = function(start, to, element, duration, cb) {
	var change = to - start,
	    currentTime = null;

  var animateHeight = function(timestamp){  
    if (!currentTime) currentTime = timestamp;         
    var progress = timestamp - currentTime;
    var val = parseInt((progress/duration)*change + start);
    element.setAttribute("style", "height:"+val+"px;");
    if(progress < duration) {
        window.requestAnimationFrame(animateHeight);
    } else {
    	cb();
    }
  };
  
  //set the height of the element before starting animation -> fix bug on Safari
  element.setAttribute("style", "height:"+start+"px;");
  window.requestAnimationFrame(animateHeight);
};

/* 
	Smooth Scroll
*/

Util.scrollTo = function(final, duration, cb) {
  var start = window.scrollY || document.documentElement.scrollTop,
      currentTime = null;
      
  var animateScroll = function(timestamp){
  	if (!currentTime) currentTime = timestamp;        
    var progress = timestamp - currentTime;
    if(progress > duration) progress = duration;
    var val = Math.easeInOutQuad(progress, start, final-start, duration);
    window.scrollTo(0, val);
    if(progress < duration) {
        window.requestAnimationFrame(animateScroll);
    } else {
      cb && cb();
    }
  };

  window.requestAnimationFrame(animateScroll);
};

/* 
  Focus utility classes
*/

//Move focus to an element
Util.moveFocus = function (element) {
  if( !element ) element = document.getElementsByTagName("body")[0];
  element.focus();
  if (document.activeElement !== element) {
    element.setAttribute('tabindex','-1');
    element.focus();
  }
};

/* 
  Misc
*/

Util.getIndexInArray = function(array, el) {
  return Array.prototype.indexOf.call(array, el);
};

Util.cssSupports = function(property, value) {
  if('CSS' in window) {
    return CSS.supports(property, value);
  } else {
    var jsProperty = property.replace(/-([a-z])/g, function (g) { return g[1].toUpperCase();});
    return jsProperty in document.body.style;
  }
};

/* 
	Polyfills
*/
//Closest() method
if (!Element.prototype.matches) {
	Element.prototype.matches = Element.prototype.msMatchesSelector || Element.prototype.webkitMatchesSelector;
}

if (!Element.prototype.closest) {
	Element.prototype.closest = function(s) {
		var el = this;
		if (!document.documentElement.contains(el)) return null;
		do {
			if (el.matches(s)) return el;
			el = el.parentElement || el.parentNode;
		} while (el !== null && el.nodeType === 1); 
		return null;
	};
}

//Custom Event() constructor
if ( typeof window.CustomEvent !== "function" ) {

  function CustomEvent ( event, params ) {
    params = params || { bubbles: false, cancelable: false, detail: undefined };
    var evt = document.createEvent( 'CustomEvent' );
    evt.initCustomEvent( event, params.bubbles, params.cancelable, params.detail );
    return evt;
   }

  CustomEvent.prototype = window.Event.prototype;

  window.CustomEvent = CustomEvent;
}

/* 
	Animation curves
*/
Math.easeInOutQuad = function (t, b, c, d) {
	t /= d/2;
	if (t < 1) return c/2*t*t + b;
	t--;
	return -c/2 * (t*(t-2) - 1) + b;
};




// // Функция для добавления новой заметки с временем
// function addEvent(start, end, content, name) {
//   var scheduleList = document.getElementById('scheduleList');

//   var eventLi = document.createElement('li');
//   eventLi.classList.add('cd-schedule__event');

//   var eventLink = document.createElement('a');
//   eventLink.setAttribute('data-start', start);
//   eventLink.setAttribute('data-end', end);
//   eventLink.setAttribute('data-content', content);
//   eventLink.setAttribute('data-event', 'event-' + (scheduleList.childElementCount + 1));
//   eventLink.href = '#0';

//   var eventName = document.createElement('em');
//   eventName.classList.add('cd-schedule__name');
//   eventName.textContent = name;

//   eventLink.appendChild(eventName);
//   eventLi.appendChild(eventLink);
//   scheduleList.appendChild(eventLi);

//   // this.topInfoElement = this.element.getElementsByClassName('cd-schedule__top-info')[0];
//   // var self = this,
// 	// 		slotHeight = this.topInfoElement.offsetHeight;
// 	// 	for(var i = 0; i < this.singleEvents.length; i++) {
// 	// 		var anchor = this.singleEvents[i].getElementsByTagName('a')[0];
// 	// 		var start = getScheduleTimestamp(anchor.getAttribute('data-start')),
// 	// 			duration = getScheduleTimestamp(anchor.getAttribute('data-end')) - start;

// 	// 		var eventTop = slotHeight*(start - self.timelineStart)/self.timelineUnitDuration,
// 	// 			eventHeight = slotHeight*duration/self.timelineUnitDuration;

// 	// 		this.singleEvents[i].setAttribute('style', 'top: '+(eventTop-1)+'px; height: '+(eventHeight +1)+'px');
// 	// 	}

// 	// 	Util.removeClass(this.element, 'cd-schedule--loading');
// }

document.getElementById("showFormButton1").addEventListener("click", function() {
  document.getElementById("myForm1").style.display = "block";
});
document.getElementById("showFormButton2").addEventListener("click", function() {
  document.getElementById("myForm2").style.display = "block";
});
document.getElementById("showFormButton3").addEventListener("click", function() {
  document.getElementById("myForm3").style.display = "block";
});
document.getElementById("showFormButton4").addEventListener("click", function() {
  document.getElementById("myForm4").style.display = "block";
});
document.getElementById("showFormButton5").addEventListener("click", function() {
  document.getElementById("myForm5").style.display = "block";
});

// document.getElementById("myForm").addEventListener("submit", function(event) {
//   // event.preventDefault(); // Отменить стандартное поведение отправки формы

//   // Получить значения полей формы
//   var start = document.getElementById("start").value;
//   var end = document.getElementById("end").value;
//   var className = document.getElementById("className").value;
//   var title = document.getElementById("title").value;

//   // Выполнить действия с полученными значениями (например, добавить событие)

//   // Скрыть форму
//   document.getElementById("myForm").style.display = "none";
//   addEvent(start, end, className, title);
//   // addEvent('10:00', '11:00', 'event-rowing-workout', 'Rowing Workout');
// });
// Добавление примеров заметок с временем
// addEvent('11:00', '12:00', 'event-rowing-workout', 'Rowing Workout');
// addEvent('12:30', '14:00', 'event-abs-circuit', 'Abs Circuit');
// addEvent('15:45', '16:45', 'event-yoga-1', 'Yoga Level 1');