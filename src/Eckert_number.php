<?php
use DivisionByZeroException;

final class Eckert_number
{
    /**
     * Вычисление числа Эккерта
     * @param int|float $speed             Скорость потока
     * @param int|float $constant_pressure Удельная теплоёмкость при постоянном давлении
     * @param int|float $delta_temperature Характеристическая разность температур в жидкости
     * @throws DivisionByZeroExceptio При делении на ноль.
     */
    public static function Eckert(int|float $speed, int|float $constant_pressure, int|float $delta_temperature): int|float
    {
        if(!$constant_pressure || !$delta_temperature) {
            throw new DivisionByZeroException();
        }
        return ($speed * $speed) / ($constant_pressure * $delta_temperature);
    }

    /**
     * Вычисление характеристической разности температур в жидкости
     * @param int|float $speed             Скорость потока
     * @param int|float $constant_pressure Удельная теплоёмкость при постоянном давлении
     * @param int|float $Eckert
     * @throws DivisionByZeroExceptio При делении на ноль.
     */
    public static function delta_temperature(int|float $speed, int|float $constant_pressure, int|float $Eckert): int|float
    {
        if(!$constant_pressure || !$Eckert) {
            throw new DivisionByZeroException();
        }
        return ($speed * $speed) / ($constant_pressure * $Eckert);
    }

    /**
     * Вычисление удельной темплоемкости при постоянном давлении
     * @param int|float $speed             Скорость потока
     * @param int|float $delta_temperature Характеристическая разность температур в жидкости
     * @param int|float $Eckert
     * @throws DivisionByZeroExceptio При делении на ноль.
     */
    public static function constant_pressure(int|float $speed, int|float $delta_temperature, int|float $Eckert): int|float
    {
        if(!$delta_temperature || !$Eckert) {
            throw new DivisionByZeroException();
        }
        return ($speed * $speed) / ($delta_temperature * $Eckert);
    }

    /**
     * Вычисление скорости потока
     * @param int|float $constant_pressure Удельная теплоёмкость при постоянном давлении
     * @param int|float $delta_temperature Характеристическая разность температур в жидкости
     * @param int|float $Eckert
     */
    public static function speed(int|float $constant_pressure, int|float $delta_temperature, int|float $Eckert): int|float
    {
        return sqrt($constant_pressure * $delta_temperature * $Eckert);
    }
}
