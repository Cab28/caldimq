# caldiq

[Рус] <br>
Библиотека для нахождения безразмерных величин в различных областях физики. <br>
[En] <br>
Calculations of dimensionless quantities <br>

## Примеры использования

**Формула нахождения числа Маха:**
$${\displaystyle \mathrm {Ma} ={\frac {{\mathrm {v} }}{{\mathrm {c} }}} }$$
<br>
**На php:**
```php
$Ma = new Mach_Number(360,300);
echo $Ma->calc(); // Вывод 1.2
```

## Структура директорий

```
docs/                документация
src/                 код
tests/               тесты
```
