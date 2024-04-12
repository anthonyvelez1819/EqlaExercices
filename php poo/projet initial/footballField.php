<?php

class footballField
{
    use tarea;
public float $width, $height;

    /**
     * @param float $width
     * @param float $heigth
     */
    public function __construct(float $width, float $heigth)
    {
        $this->width = $width;
        $this->height = $heigth;
    }


}