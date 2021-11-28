let lastOperand = 0;
let operation = null;

const inputWindow = document.getElementById('inputWindow');
const history = document.getElementById('history');

document.getElementById('btn_clr').addEventListener('click', function () {
    lastOperand = 0;
    operation = null;
    inputWindow.value = '';
})

let number = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0", ".", "pi"];
let operations = ["+", "-", "*", "/", "=", "√"];

number.forEach(element => {
  document.getElementById('btn_' + element).addEventListener('click', function () {
  	if (String(element) !== 'pi'){
  		inputWindow.value += String(element);
  	}
  	else{
  		inputWindow.value += Math.PI;
  	}
  	history.value += String(element);
});
});

operations.forEach(element => {
	document.getElementById('btn_' + element).addEventListener('click', function () {
		 if (String(element) !== '=' && String(element) !== '√' && String(element) !== '-') {
			lastOperand = parseFloat(inputWindow.value);
			operation = String(element);
			inputWindow.value = '';
			history.value += ' ' + String(element) + ' ';
		}
		else if (String(element) === '-') {
			if(inputWindow.value !== ""){
				lastOperand = parseFloat(inputWindow.value);
				operation = String(element);
				inputWindow.value = '';
				history.value += ' ' + String(element) + ' ';
			}
			else {
				lastOperand = 0;
				operation = String(element);
				inputWindow.value = '';
			}
		}
		else if(String(element) === '√') {
			oldValue = inputWindow.value;
			inputWindow.value = Math.pow(parseInt(inputWindow.value), 1/2);
			history.value += String(' при ' + 'sqrt(' + '' + oldValue + ') = ' + inputWindow.value + '; ');
		}
		else if(String(element) === '=') {
			const result = eval(lastOperand + operation + parseFloat(inputWindow.value));
			operation = null;
			lastOperand = 0;
			inputWindow.value = result;
			history.value += String(' ' + '=' + ' ' + result + '; ');
		}
	});
});
