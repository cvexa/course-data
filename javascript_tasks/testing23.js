// var math= function(one,two){
// 	if (one > two) {
// 		console.log(one);
// 	}else if(two > one){
//      console.log(two);
// 	}else {
//      console.log("equal");
// 	};

// }

// math("c",70);

function number_to_digit(num){
// var num='10475';

// console.log(typeof(num.toString()));
// console.log(num.toString());

// digit= num.toString().length-1;
var len = num.length;
var all = num.substr(len-1);
switch(all) {
	 case '0':
        console.log("zero");
        break;
    case '1':
        console.log("one");
        break;
    case '2':
        console.log("two");
        break;
        case '3':
        console.log("three");
        break;
        case '4':
        console.log("four");
        break;
          case '5':
        console.log("five");
        break;
          case '6':
        console.log("six");
        break;
        case '7':
        console.log("seven");
        break;
        case '8':
        console.log("eight");
        break;
        case '9':
        console.log("nine");
        break;
    // default:
    //     default code block
}
// console.log(num.substr(len-1));
// console.log(all);
}

number_to_digit('2340');