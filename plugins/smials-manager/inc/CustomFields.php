<?php

namespace SmialsManager;

use Geniem\ACF\Field\Number;
use Geniem\ACF\Group;
use Geniem\ACF\RuleGroup;

class CustomFields
{
    public function register()
    {
        $field_group = new Group(__('Informations supplémentaires', 'smials-manager'));
        $field_group->set_key('additional_informations');
        $field_group->set_position('side');

        $rule_group = new RuleGroup();
        $rule_group->add_rule('post_type', '==', PostType::POST_TYPE);
        $field_group->add_rule_group($rule_group);

        $bed_count = new Number(__('Nombre de couchages', 'smials-manager'));
        $bed_count->set_placeholder('ex: 1, 2, 5...');
        $bed_count->set_name('bed_count');
        $field_group->add_field($bed_count);

        $night_price = new Number(__('Prix par nuits (€)', 'smials-manager'));
        $night_price->set_placeholder('ex: 75, 90, 110');
        $night_price->set_name('night_price');
        $field_group->add_field($night_price);

        $field_group->register();
    }
}
