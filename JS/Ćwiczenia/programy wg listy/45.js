function test_number(x, y) {
    return (x === 15 || y === 15 || x + y === 15 || Math.abs(x - y) === 15);
}

console.log(test_number(15, 9));
console.log(test_number(25, 15));
console.log(test_number(7, 8));
console.log(test_number(25, 10));
console.log(test_number(5, 9));
console.log(test_number(7, 9));
console.log(test_number(9, 25));
