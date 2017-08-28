/**
 * Created by eugen on 20.08.2017.
 */
QUnit.module("trimFirstAndLastCharInCssString");
QUnit.test('trimFirstAndLastCharInCssString()', function (assert) {
    assert.deepEqual(trimFirstAndLastCharInCssString(["{f}"]), ["f"], 'обрезало и вернуло массив');
});
QUnit.module("getObjectsArrayFromCssArray");
QUnit.test('getObjectsArrayFromCssArray()', function (assert) {
    assert.deepEqual(getObjectsArrayFromCssArray(["f:17px;g:8 0 0"]), [{
        f: "17px",
        g: "8 0 0"
    }], 'Был массив, стал объект');
});
QUnit.module("getObjectWithIdentialKeyAndValue");
QUnit.test('getObjectWithIdentialKeyAndValue()', function (assert) {
    assert.deepEqual(getObjectWithIdentialKeyAndValue([{
        f: "17px",
        g: "8 0 0"
    }, {g: "8 0 0"}]), {g: "8 0 0"}, 'Возвращяет объект с одинаковыми свойствами');
});