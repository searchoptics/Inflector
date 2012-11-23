<?php

require_once __DIR__ . '/Inflector.php';

/* Singular to plural / Plural to singular */

echo Inflector::pluralize('search') . "\n"; // outputs searches
echo Inflector::singularize('cases') . "\n"; // outputs case
echo Inflector::pluralize('query') . "\n"; // outputs queries
echo Inflector::singularize('queries') . "\n"; // outputs query
echo Inflector::pluralize('ability') . "\n"; // outputs abilities
echo Inflector::singularize('abilities') . "\n"; // outputs ability
echo Inflector::pluralize('analysis') . "\n"; // outputs analyses
echo Inflector::singularize('analyses') . "\n"; // outputs analysis
echo Inflector::pluralize('information') . "\n"; // outputs information
echo Inflector::singularize('information') . "\n"; // outputs information
echo Inflector::pluralize('mouse') . "\n"; // outputs mice
echo Inflector::singularize('mice') . "\n"; // outputs mouse

/* CamelCase to underscore / underscore to CamelCase */

echo Inflector::underscore('SpecialGuest') . "\n"; // outputs special_guest
echo Inflector::camelize('special_guest') . "\n"; // outputs SpecialGuest
echo Inflector::underscore('FreeBSD') . "\n"; // outputs free_bsd
echo Inflector::camelize('free_bsd') . "\n"; // outputs FreeBsd
echo Inflector::underscore('HTML') . "\n"; // outputs html
echo Inflector::camelize('html') . "\n"; // outputs Html

/* Underscore to "human-text" / "Human-text" to Underscore */

echo Inflector::humanize('employee_salary') . "\n"; // outputs Employee salary
echo Inflector::underscore('Employee salary') . "\n"; // outputs employee_salary

/* Examples of titleize() */

echo Inflector::titleize('ActiveRecord') . "\n"; // outputs Active Record
echo Inflector::titleize('action web service') . "\n"; // outputs Action Web Service

/* Examples of ordinalize() */

echo Inflector::ordinalize(1) . "\n"; // outputs 1st
echo Inflector::ordinalize(2) . "\n"; // outputs 2nd
echo Inflector::ordinalize(3) . "\n"; // outputs 3rd
echo Inflector::ordinalize(4) . "\n"; // outputs 4th
echo Inflector::ordinalize(5) . "\n"; // outputs 5th
echo Inflector::ordinalize(20) . "\n"; // outputs 20th
echo Inflector::ordinalize(21) . "\n"; // outputs 21st
