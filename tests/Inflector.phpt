<?php

namespace Medio;

use Tester\Assert;

require __DIR__ . '/bootstrap.php';

test(function() {

	/* Pluralize and singularize */

	Assert::same(Inflector::pluralize('search'), 'searches');
	Assert::same(Inflector::singularize('cases'), 'case');
	Assert::same(Inflector::pluralize('query'), 'queries');
	Assert::same(Inflector::singularize('queries'), 'query');
	Assert::same(Inflector::pluralize('ability'), 'abilities');
	Assert::same(Inflector::singularize('abilities'), 'ability');
	Assert::same(Inflector::pluralize('analysis'), 'analyses');
	Assert::same(Inflector::singularize('analyses'), 'analysis');
	Assert::same(Inflector::pluralize('information'), 'information');
	Assert::same(Inflector::singularize('information'), 'information');
	Assert::same(Inflector::pluralize('mouse'), 'mice');
	Assert::same(Inflector::singularize('mice'), 'mouse');
	Assert::same(Inflector::pluralize('status'), 'statuses');
	Assert::same(Inflector::singularize('statuses'), 'status');
	Assert::same(Inflector::singularize('status'), 'status');

	/* CamelCase to underscore / underscore to CamelCase */

	Assert::same(Inflector::underscore('SpecialGuest'), 'special_guest');
	Assert::same(Inflector::camelize('special_guest'), 'SpecialGuest');
	Assert::same(Inflector::underscore('FreeBSD'), 'free_bsd');
	Assert::same(Inflector::camelize('free_bsd'), 'FreeBsd');
	Assert::same(Inflector::underscore('HTML'), 'html');
	Assert::same(Inflector::camelize('html'), 'Html');

	/* Underscore to "human-text" / "Human-text" to Underscore */

	Assert::same(Inflector::humanize('employee_salary'), 'Employee salary');
	Assert::same(Inflector::underscore('Employee salary'), 'employee_salary');

	/* Examples of titleize() */

	Assert::same(Inflector::titleize('ActiveRecord'), 'Active Record');
	Assert::same(Inflector::titleize('action web service'), 'Action Web Service');

	/* Examples of ordinalize() */

	Assert::same(Inflector::ordinalize(1), '1st');
	Assert::same(Inflector::ordinalize(2), '2nd');
	Assert::same(Inflector::ordinalize(3), '3rd');
	Assert::same(Inflector::ordinalize(4), '4th');
	Assert::same(Inflector::ordinalize(5), '5th');
	Assert::same(Inflector::ordinalize(20), '20th');
	Assert::same(Inflector::ordinalize(21), '21st');

});
