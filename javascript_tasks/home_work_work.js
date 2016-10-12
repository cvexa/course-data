/*3.
Дефинирайте функция,
 която приема като параметър масив от числа и 
true/false 
като втори параметър. Ако е подаден 
–
true 
–
функцията 
намира сумата всички четни числа в масива. 
Ако е подаден 
–
false 
–
сумата на всички нечетни числа в масива.*/

function math(param1 , param2){
 var even = 0;
 var odd = 0;
if(Array.isArray(param1) == false){
 console.log('enter some array');
}else if(param2 !== true && param2 !== false){
	console.log('enter true or false');
}else if (param2 === true) {
        for (var i = param1.length - 1; i >= 0; i--) {
        	if (param1[i] %2 == 0) {
              even = even + param1[i];
             
        	}
        }
     console.log(even); 
    
	}else if(param2 === false){
         for (var k = param1.length - 1; k >= 0; k--) {
        	if (param1[k] %2 !== 0) {
        		// console.log(param1[k])
              odd = odd + param1[k];
             
        	}//if
        	
	}//for
 console.log(odd);
}//elseif

}//function

var x = [5,123,123,1,2,3,4,5,7,99];


math(x,true);




// 4.
// Напишете функция
// , която преброява колко пъти дадено число се 
// появява в масив от числа.  Тествайте я за поне  принципно различни 
// масива.

function dublicate(param3,param4){
	var counter = 0;

	if(Array.isArray(param3) == false){
 console.log('enter some array');
}else{
for (var i = param3.length - 1; i >= 0; i--) {
	if (param4 == param3[i]) {
     counter +=1
	};
};
console.log(param4 + ' is dublicated ' + counter + ' times');
}
}
var y = [2,3,4,5,123,1231,6777,'d','5','g','a'];
dublicate(y,'5');