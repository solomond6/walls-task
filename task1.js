let array = {foo:3, bar:1}

result = injectAfter(array, "foo", "baz", 42);

console.log(result);

function injectAfter(array, afterKey, newKey, newValue){
	
	let newArray = {};
	//check if the afterkey exist and push the newKey and newValue after the key
	if (afterKey in array){
		Object.entries(array).forEach(entry => {
		  const [key, value] = entry;
		  newArray[key] = value;
		  if(key == afterKey){
		  	newArray[newKey] = newValue;
		  }
		});
	}else{
		//if afterkey does not exist, push newkey and newValue at the end of the new array
		Object.entries(array).forEach(entry => {
		  const [key, value] = entry;
		  newArray[key] = value;
		});
		newArray[newKey] = newValue;
	}

	return newArray;
}