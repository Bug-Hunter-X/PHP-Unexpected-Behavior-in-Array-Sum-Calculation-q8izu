function calculateSum(numbers) {
  let sum = 0;
  for (let i = 0; i < numbers.length; i++) {
    sum += numbers[i];
  }
  return sum;
}

const numbers = [1, 2, 3, 4, 5];
const sum = calculateSum(numbers);
console.log(sum); // Output: 15

//The bug is that if the input array is empty then it returns 0, which is unexpected behaviour. It should return an error message or throw an exception. 
//Another bug is that if the input array contains non-numeric values, it will throw a TypeError.
