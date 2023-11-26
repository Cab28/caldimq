# caldiq

[Рус] <br>
Библиотека для нахождения безразмерных величин в различных областях физики. <br>
[En] <br>
Calculations of dimensionless quantities <br>

## Примеры использования

**Формула нахождения числа Маха:**
$${\displaystyle \mathrm {M} ={\frac {{Скорость тела}}{{Скорость звука }}} }$$
<br>
**На php:**
```php
$Mach = Mach_number::Mach(360,300);
echo $Mach; // Вывод 1.2
```

## Структура директорий

```
docs/                документация
src/                 код
tests/               тесты
```
