<?php

namespace App\Interfaces;

interface IValidator
{
    /**
     * Validate inputs
     *
     * @param array $inputs
     */
    public function validate($inputs);
}
