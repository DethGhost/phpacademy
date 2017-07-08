/**
 * Created by eugen on 08.07.2017.
 */

var operator;
var first;
var second;
var isDoIt;

operator = prompt('Выбирите желаемую операцию, доступно (+,-,*,/)', '');

if (operator === '-' || operator === '+' || operator === '/' || operator === '*') {

    first = prompt('Введите первое число', "");
    second = prompt('Введите второе число', "");
    if (+second === 0 && operator === '/') {
        alert("Деление на 0 не позволительно");
    } else {
        isDoIt = confirm('Вы хотите произвести операцию:' + first + operator + second);
        isDoIt ? alert("ответ = " + calculation(operator, first, second)) : alert("Всего доброго");
    }

} else {
    alert("Вы ввели не корректную операцию, обновите страницу и попробуйте еще раз");
}

function calculation(operator, first, second) {

    if (operator === '-') {
        return (+first - +second);
    } else if (operator === '+') {
        return (+first + +second);
    } else if (operator === '*') {
        return (+first * +second);
    } else {
        return (+first / +second);
    }

}


