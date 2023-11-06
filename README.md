# caldiq

[Рус] <br>
Библиотека для нахождения безразмерных величин в различных областях физики. <br>
[En] <br>
Calculations of dimensionless quantities <br>

## Примеры использования

**Формула нахождения числа Маха:**
$${\displaystyle \mathrm {M} ={\frac {{\mathrm {v} }}{{\mathrm {c} }}} }$$
<br>
**На php:**
```php
$M = new Mach_Number(360,300);
echo $M->calc(); // Вывод 1.2
```

## Структура директорий

```
docs/                документация
src/                 код
tests/               тесты
```
