<?php

namespace App\Service;

use Habibun\ValidationBundle\RuleProvider;

class MyRuleProvider extends RuleProvider
{
    public function getRules(): array
    {
        $rules = parent::getRules();
        $rules['rule_3'] = 'rule_3';

        return $rules;
    }
}
